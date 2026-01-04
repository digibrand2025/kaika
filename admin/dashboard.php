<?php
require_once '../includes/config.php';
require_once '../includes/functions.php';
require_once '../includes/auth.php';

requireAuth();
checkSessionTimeout();

// Handle AJAX requests
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    header('Content-Type: application/json');
    
    switch ($_POST['action']) {
        case 'delete':
            $id = (int)$_POST['id'];
            
            // Get image filename before deleting
            $stmt = $pdo->prepare("SELECT featured_image FROM blog_posts WHERE id = ?");
            $stmt->execute([$id]);
            $post = $stmt->fetch();
            
            if ($post) {
                // Delete the post
                $stmt = $pdo->prepare("DELETE FROM blog_posts WHERE id = ?");
                if ($stmt->execute([$id])) {
                    // Delete associated image if it's from uploads folder
                    if (strpos($post['featured_image'], 'uploads/') !== false) {
                        deleteImage(basename($post['featured_image']));
                    }
                    echo json_encode(['success' => true, 'message' => 'Post deleted successfully']);
                } else {
                    echo json_encode(['success' => false, 'message' => 'Failed to delete post']);
                }
            } else {
                echo json_encode(['success' => false, 'message' => 'Post not found']);
            }
            exit;
            
        case 'toggle_status':
            $id = (int)$_POST['id'];
            $stmt = $pdo->prepare("SELECT status FROM blog_posts WHERE id = ?");
            $stmt->execute([$id]);
            $post = $stmt->fetch();
            
            if ($post) {
                $newStatus = $post['status'] === 'published' ? 'draft' : 'published';
                $publishedAt = $newStatus === 'published' ? date('Y-m-d H:i:s') : null;
                
                $stmt = $pdo->prepare("UPDATE blog_posts SET status = ?, published_at = ? WHERE id = ?");
                if ($stmt->execute([$newStatus, $publishedAt, $id])) {
                    echo json_encode(['success' => true, 'status' => $newStatus]);
                } else {
                    echo json_encode(['success' => false, 'message' => 'Failed to update status']);
                }
            } else {
                echo json_encode(['success' => false, 'message' => 'Post not found']);
            }
            exit;
    }
}

// Handle form submissions for create/edit
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $title = sanitize($_POST['title']);
    $slug = !empty($_POST['slug']) ? generateSlug($_POST['slug']) : generateSlug($title);
    $category = sanitize($_POST['category']);
    $excerpt = sanitize($_POST['excerpt']);
    $content = $_POST['content']; // Keep HTML for content
    $status = $_POST['status'];
    $postId = isset($_POST['post_id']) ? (int)$_POST['post_id'] : null;
    
    // Handle image upload
    $featuredImage = $_POST['existing_image'] ?? '';
    $uploadError = null;
    
    if (isset($_FILES['featured_image']) && $_FILES['featured_image']['error'] !== UPLOAD_ERR_NO_FILE) {
        $uploadResult = uploadImage($_FILES['featured_image']);
        if ($uploadResult['success']) {
            // Delete old image if editing
            if ($postId && !empty($_POST['existing_image']) && strpos($_POST['existing_image'], 'uploads/') !== false) {
                deleteImage(basename($_POST['existing_image']));
            }
            $featuredImage = $uploadResult['url'];
        } else {
            $uploadError = $uploadResult['message'];
            setFlashMessage('error', $uploadResult['message']);
        }
    }
    
    // Only proceed if no upload error OR if we're editing and keeping the existing image
    if (!$uploadError || ($postId && !empty($_POST['existing_image']))) {
        // If there was an upload error but we're editing with an existing image, keep the old image
        if ($uploadError && $postId && !empty($_POST['existing_image'])) {
            $featuredImage = $_POST['existing_image'];
        }
        
        // Validate that we have an image
        if (empty($featuredImage)) {
            setFlashMessage('error', 'Featured image is required');
        } else {
            $publishedAt = $status === 'published' ? date('Y-m-d H:i:s') : null;
            
            try {
                if ($postId) {
                    // Update existing post
                    $sql = "UPDATE blog_posts SET title = ?, slug = ?, category = ?, excerpt = ?, 
                            content = ?, featured_image = ?, status = ?, published_at = ? WHERE id = ?";
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute([$title, $slug, $category, $excerpt, $content, $featuredImage, $status, $publishedAt, $postId]);
                    setFlashMessage('success', 'Post updated successfully!');
                } else {
                    // Create new post
                    $sql = "INSERT INTO blog_posts (title, slug, category, excerpt, content, featured_image, 
                            author_id, status, published_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute([$title, $slug, $category, $excerpt, $content, $featuredImage, 
                                  $_SESSION['admin_id'], $status, $publishedAt]);
                    setFlashMessage('success', 'Post created successfully!');
                }
                header('Location: dashboard.php');
                exit;
            } catch (PDOException $e) {
                setFlashMessage('error', 'Database error: ' . $e->getMessage());
            }
        }
    }
}

// Get post for editing
$editPost = null;
if (isset($_GET['edit'])) {
    $stmt = $pdo->prepare("SELECT * FROM blog_posts WHERE id = ?");
    $stmt->execute([(int)$_GET['edit']]);
    $editPost = $stmt->fetch();
}

// Get all posts
$posts = $pdo->query("SELECT bp.*, au.username as author_name 
                      FROM blog_posts bp 
                      LEFT JOIN admin_users au ON bp.author_id = au.id 
                      ORDER BY created_at DESC")->fetchAll();

// Get statistics
$stats = [
    'total' => $pdo->query("SELECT COUNT(*) FROM blog_posts")->fetchColumn(),
    'published' => $pdo->query("SELECT COUNT(*) FROM blog_posts WHERE status = 'published'")->fetchColumn(),
    'drafts' => $pdo->query("SELECT COUNT(*) FROM blog_posts WHERE status = 'draft'")->fetchColumn(),
    'views' => $pdo->query("SELECT SUM(views) FROM blog_posts")->fetchColumn() ?? 0
];

$flash = getFlashMessage();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Dashboard | Kaika Holdings</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;900&display=swap" rel="stylesheet">
    <script src="https://cdn.tiny.cloud/1/ynrlr1w0smmwys6tbexxenofg64vokwnetr9c0nk8s183daw/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tailwind.config = {
            theme: {
                fontFamily: { sans: ['Inter', 'sans-serif'] },
                extend: {
                    colors: {
                        brand: { red: '#D32F2F' }
                    }
                }
            }
        }
    </script>
    <style>
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.7);
            animation: fadeIn 0.3s;
        }
        .modal.active { display: flex; }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        .modal-content {
            animation: slideIn 0.3s;
        }
        @keyframes slideIn {
            from { transform: translateY(-50px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        .alert-shake {
            animation: shake 0.5s;
        }
        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            10%, 30%, 50%, 70%, 90% { transform: translateX(-5px); }
            20%, 40%, 60%, 80% { transform: translateX(5px); }
        }
    </style>
</head>
<body class="bg-slate-50 font-sans">

    <!-- Header -->
    <header class="bg-white border-b border-slate-200 sticky top-0 z-40 shadow-sm">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
            <div class="flex items-center gap-4">
                <div class="flex items-center gap-3 group cursor-pointer">
                    <div class="relative w-10 h-10 flex items-center justify-center">
                        <div class="absolute inset-0 bg-brand-red rotate-45 rounded-sm group-hover:rotate-90 transition-transform duration-500"></div>
                        <span class="relative font-bold text-white text-xl">K</span>
                    </div>
                </div>
                <div>
                    <h1 class="text-xl font-bold text-slate-900">Blog Dashboard</h1>
                    <p class="text-xs text-slate-500">Kaika Holdings</p>
                </div>
            </div>
            
            <div class="flex items-center gap-4">
                <a href="../index.php" target="_blank" class="text-sm text-slate-600 hover:text-brand-red transition flex items-center gap-2">
                    <i data-lucide="external-link" class="w-4 h-4"></i>
                    View Site
                </a>
                <div class="flex items-center gap-3 pl-4 border-l border-slate-200">
                    <div class="text-right">
                        <p class="text-sm font-bold text-slate-900"><?php echo htmlspecialchars($_SESSION['admin_username']); ?></p>
                        <p class="text-xs text-slate-500">Administrator</p>
                    </div>
                    <a href="logout.php" class="text-slate-600 hover:text-red-600 transition" title="Logout">
                        <i data-lucide="log-out" class="w-5 h-5"></i>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Flash Messages -->
    <?php if ($flash): ?>
    <div class="max-w-7xl mx-auto px-6 mt-6">
        <div class="<?php echo $flash['type'] === 'success' ? 'bg-green-50 border-green-200 text-green-800' : 'bg-red-50 border-red-200 text-red-800'; ?> border-2 px-6 py-4 rounded-lg shadow-lg flex items-center justify-between alert-shake">
            <div class="flex items-center gap-3">
                <i data-lucide="<?php echo $flash['type'] === 'success' ? 'check-circle' : 'alert-circle'; ?>" class="w-5 h-5"></i>
                <p class="font-bold"><?php echo htmlspecialchars($flash['message']); ?></p>
            </div>
            <button onclick="this.parentElement.remove()" class="hover:opacity-70">
                <i data-lucide="x" class="w-5 h-5"></i>
            </button>
        </div>
    </div>
    <?php endif; ?>

    <main class="max-w-7xl mx-auto px-6 py-8">
        
        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
            <div class="bg-white rounded-xl shadow-sm p-6 border border-slate-100 hover:shadow-md transition">
                <div class="flex items-center justify-between mb-2">
                    <span class="text-slate-500 text-sm font-medium">Total Posts</span>
                    <i data-lucide="file-text" class="w-5 h-5 text-slate-400"></i>
                </div>
                <p class="text-3xl font-bold text-slate-900"><?php echo $stats['total']; ?></p>
            </div>
            <div class="bg-white rounded-xl shadow-sm p-6 border border-slate-100 hover:shadow-md transition">
                <div class="flex items-center justify-between mb-2">
                    <span class="text-slate-500 text-sm font-medium">Published</span>
                    <i data-lucide="check-circle" class="w-5 h-5 text-green-500"></i>
                </div>
                <p class="text-3xl font-bold text-green-600"><?php echo $stats['published']; ?></p>
            </div>
            <div class="bg-white rounded-xl shadow-sm p-6 border border-slate-100 hover:shadow-md transition">
                <div class="flex items-center justify-between mb-2">
                    <span class="text-slate-500 text-sm font-medium">Drafts</span>
                    <i data-lucide="edit" class="w-5 h-5 text-orange-500"></i>
                </div>
                <p class="text-3xl font-bold text-orange-600"><?php echo $stats['drafts']; ?></p>
            </div>
            <div class="bg-white rounded-xl shadow-sm p-6 border border-slate-100 hover:shadow-md transition">
                <div class="flex items-center justify-between mb-2">
                    <span class="text-slate-500 text-sm font-medium">Total Views</span>
                    <i data-lucide="eye" class="w-5 h-5 text-blue-500"></i>
                </div>
                <p class="text-3xl font-bold text-blue-600"><?php echo number_format($stats['views']); ?></p>
            </div>
        </div>

        <!-- Actions Bar -->
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-2xl font-bold text-slate-900">All Blog Posts</h2>
            <button onclick="openModal()" class="bg-brand-red hover:bg-red-700 text-white px-6 py-3 rounded-lg font-bold text-sm uppercase tracking-wider transition flex items-center gap-2 shadow-lg hover:shadow-xl">
                <i data-lucide="plus" class="w-4 h-4"></i>
                Create New Post
            </button>
        </div>

        <!-- Posts Table -->
        <div class="bg-white rounded-xl shadow-sm overflow-hidden border border-slate-100">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-slate-50 border-b border-slate-200">
                        <tr>
                            <th class="text-left px-6 py-4 text-xs font-bold text-slate-600 uppercase tracking-wider">Post</th>
                            <th class="text-left px-6 py-4 text-xs font-bold text-slate-600 uppercase tracking-wider">Category</th>
                            <th class="text-left px-6 py-4 text-xs font-bold text-slate-600 uppercase tracking-wider">Status</th>
                            <th class="text-left px-6 py-4 text-xs font-bold text-slate-600 uppercase tracking-wider">Views</th>
                            <th class="text-left px-6 py-4 text-xs font-bold text-slate-600 uppercase tracking-wider">Date</th>
                            <th class="text-right px-6 py-4 text-xs font-bold text-slate-600 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        <?php foreach ($posts as $post): ?>
                        <tr class="hover:bg-slate-50 transition" data-post-id="<?php echo $post['id']; ?>">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-4">
                                    <img src="<?php echo htmlspecialchars($post['featured_image']); ?>" 
                                         alt="<?php echo htmlspecialchars($post['title']); ?>" 
                                         class="w-16 h-16 object-cover rounded-lg shadow-sm">
                                    <div>
                                        <p class="font-bold text-slate-900"><?php echo htmlspecialchars($post['title']); ?></p>
                                        <p class="text-xs text-slate-500">by <?php echo htmlspecialchars($post['author_name']); ?></p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <span class="inline-block px-3 py-1 text-xs font-bold text-white rounded-full <?php echo getCategoryColor($post['category']); ?>">
                                    <?php echo htmlspecialchars($post['category']); ?>
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <button onclick="toggleStatus(<?php echo $post['id']; ?>)" 
                                        class="status-badge inline-flex items-center gap-2 px-3 py-1 text-xs font-bold rounded-full transition <?php echo $post['status'] === 'published' ? 'bg-green-100 text-green-700 hover:bg-green-200' : 'bg-orange-100 text-orange-700 hover:bg-orange-200'; ?>">
                                    <span class="w-2 h-2 rounded-full <?php echo $post['status'] === 'published' ? 'bg-green-500' : 'bg-orange-500'; ?>"></span>
                                    <span class="status-text"><?php echo ucfirst($post['status']); ?></span>
                                </button>
                            </td>
                            <td class="px-6 py-4 text-slate-600">
                                <?php echo number_format($post['views']); ?>
                            </td>
                            <td class="px-6 py-4 text-sm text-slate-600">
                                <?php echo formatDate($post['created_at']); ?>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center justify-end gap-2">
                                    <a href="../blog/post.php?slug=<?php echo htmlspecialchars($post['slug']); ?>" 
                                       target="_blank"
                                       class="p-2 text-slate-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition"
                                       title="View Post">
                                        <i data-lucide="eye" class="w-4 h-4"></i>
                                    </a>
                                    <button onclick="editPost(<?php echo $post['id']; ?>)" 
                                            class="p-2 text-slate-600 hover:text-brand-red hover:bg-red-50 rounded-lg transition"
                                            title="Edit Post">
                                        <i data-lucide="edit" class="w-4 h-4"></i>
                                    </button>
                                    <button onclick="deletePost(<?php echo $post['id']; ?>, '<?php echo htmlspecialchars($post['title'], ENT_QUOTES); ?>')" 
                                            class="p-2 text-slate-600 hover:text-red-600 hover:bg-red-50 rounded-lg transition"
                                            title="Delete Post">
                                        <i data-lucide="trash-2" class="w-4 h-4"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        
                        <?php if (empty($posts)): ?>
                        <tr>
                            <td colspan="6" class="px-6 py-12 text-center">
                                <i data-lucide="inbox" class="w-12 h-12 text-slate-300 mx-auto mb-3"></i>
                                <p class="text-slate-500 font-medium">No blog posts yet</p>
                                <p class="text-sm text-slate-400 mt-1">Click "Create New Post" to get started</p>
                            </td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </main>

    <!-- Create/Edit Modal -->
    <div id="postModal" class="modal items-center justify-center px-4">
        <div class="modal-content bg-white rounded-2xl shadow-2xl max-w-4xl w-full max-h-[90vh] overflow-y-auto">
            <div class="sticky top-0 bg-white border-b border-slate-200 px-8 py-6 flex items-center justify-between z-10 rounded-t-2xl">
                <h3 class="text-2xl font-bold text-slate-900" id="modalTitle">Create New Post</h3>
                <button onclick="closeModal()" class="text-slate-400 hover:text-slate-600 transition">
                    <i data-lucide="x" class="w-6 h-6"></i>
                </button>
            </div>
            
            <form method="POST" enctype="multipart/form-data" class="p-8" id="postForm">
                <input type="hidden" name="post_id" id="post_id" value="<?php echo $editPost ? $editPost['id'] : ''; ?>">
                <input type="hidden" name="existing_image" id="existing_image" value="<?php echo $editPost ? htmlspecialchars($editPost['featured_image']) : ''; ?>">
                
                <div class="grid md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label class="block text-slate-700 text-sm font-bold mb-2">Post Title *</label>
                        <input type="text" name="title" id="title" required
                               value="<?php echo $editPost ? htmlspecialchars($editPost['title']) : ''; ?>"
                               class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-brand-red focus:border-transparent"
                               placeholder="Enter post title">
                    </div>
                    
                    <div>
                        <label class="block text-slate-700 text-sm font-bold mb-2">URL Slug</label>
                        <input type="text" name="slug" id="slug"
                               value="<?php echo $editPost ? htmlspecialchars($editPost['slug']) : ''; ?>"
                               class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-brand-red focus:border-transparent"
                               placeholder="auto-generated-from-title">
                        <p class="text-xs text-slate-500 mt-1">Leave blank to auto-generate from title</p>
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label class="block text-slate-700 text-sm font-bold mb-2">Category *</label>
                        <select name="category" required
                                class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-brand-red focus:border-transparent">
                            <option value="">Select Category</option>
                            <?php 
                            $categories = ['LOGISTICS', 'DINING', 'AUTOMOTIVE', 'EDUCATION', 'RECRUITMENT', 'ELECTRONICS', 'CORPORATE'];
                            foreach ($categories as $cat): 
                            ?>
                            <option value="<?php echo $cat; ?>" <?php echo ($editPost && $editPost['category'] === $cat) ? 'selected' : ''; ?>>
                                <?php echo $cat; ?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    
                    <div>
                        <label class="block text-slate-700 text-sm font-bold mb-2">Status *</label>
                        <select name="status" required
                                class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-brand-red focus:border-transparent">
                            <option value="draft" <?php echo ($editPost && $editPost['status'] === 'draft') ? 'selected' : ''; ?>>Draft</option>
                            <option value="published" <?php echo ($editPost && $editPost['status'] === 'published') ? 'selected' : ''; ?>>Published</option>
                        </select>
                    </div>
                </div>

                <div class="mb-6">
                    <label class="block text-slate-700 text-sm font-bold mb-2">Excerpt *</label>
                    <textarea name="excerpt" rows="3" required
                              class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-brand-red focus:border-transparent"
                              placeholder="Brief summary of the post (150-200 characters)"><?php echo $editPost ? htmlspecialchars($editPost['excerpt']) : ''; ?></textarea>
                </div>

                <div class="mb-6">
                    <label class="block text-slate-700 text-sm font-bold mb-2">Featured Image *</label>
                    <?php if ($editPost && $editPost['featured_image']): ?>
                    <div class="mb-3">
                        <img src="<?php echo htmlspecialchars($editPost['featured_image']); ?>" 
                             alt="Current featured image" 
                             class="w-48 h-32 object-cover rounded-lg border-2 border-slate-200 shadow-sm">
                        <p class="text-xs text-slate-500 mt-2">Current image (upload new to replace)</p>
                    </div>
                    <?php endif; ?>
                    <input type="file" 
                           name="featured_image" 
                           id="featured_image"
                           accept="image/jpeg,image/jpg,image/png,image/gif,image/webp"
                           class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-brand-red focus:border-transparent file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-brand-red file:text-white hover:file:bg-red-700 file:cursor-pointer"
                           <?php echo !$editPost ? 'required' : ''; ?>>
                    <div class="mt-2 space-y-1">
                        <p class="text-xs text-slate-500">📐 Recommended: 1200x600px, JPG/PNG/WEBP</p>
                        <p class="text-xs font-bold text-red-600">⚠️ Maximum file size: 5MB</p>
                        <p class="text-xs text-slate-400">✅ Allowed formats: JPG, JPEG, PNG, GIF, WEBP</p>
                    </div>
                    <div id="file-info" class="mt-2 hidden">
                        <div class="bg-blue-50 border border-blue-200 rounded-lg p-3">
                            <p class="text-sm text-blue-800 font-medium" id="file-name"></p>
                            <p class="text-xs text-blue-600" id="file-size"></p>
                        </div>
                    </div>
                </div>

                <div class="mb-6">
                    <label class="block text-slate-700 text-sm font-bold mb-2">Content *</label>
                    <textarea 
                        name="content" 
                        id="content" 
                        rows="15"
                        class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-brand-red focus:border-transparent"
                    ><?php echo $editPost ? htmlspecialchars($editPost['content']) : ''; ?></textarea>
                </div>

                <div class="flex items-center justify-end gap-4 pt-6 border-t border-slate-200">
                    <button type="button" onclick="closeModal()" 
                            class="px-6 py-3 text-slate-600 hover:text-slate-800 font-bold transition">
                        Cancel
                    </button>
                    <button type="submit" name="submit"
                            class="px-8 py-3 bg-brand-red hover:bg-red-700 text-white font-bold rounded-lg transition uppercase tracking-wider text-sm shadow-lg hover:shadow-xl">
                        <?php echo $editPost ? 'Update Post' : 'Publish Post'; ?>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Initialize Lucide icons
        lucide.createIcons();

        // Initialize TinyMCE
        tinymce.init({
            selector: '#content',
            height: 500,
            menubar: false,
            plugins: 'advlist autolink lists link image charmap preview anchor searchreplace visualblocks code fullscreen insertdatetime media table code help wordcount',
            toolbar: 'undo redo | formatselect | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | removeformat | code',
            content_style: 'body { font-family: Inter, sans-serif; font-size: 16px; line-height: 1.6; }',
            branding: false
        });

        // Client-side file validation
        document.getElementById('featured_image').addEventListener('change', function(e) {
            const file = this.files[0];
            const fileInfo = document.getElementById('file-info');
            const fileName = document.getElementById('file-name');
            const fileSize = document.getElementById('file-size');
            
            if (file) {
                const maxSize = 5 * 1024 * 1024; // 5MB in bytes
                const fileBytes = file.size;
                
                // Check file size
                if (fileBytes > maxSize) {
                    const sizeMB = (fileBytes / (1024 * 1024)).toFixed(2);
                    alert(`❌ File size (${sizeMB}MB) exceeds the maximum limit of 5MB.\n\nPlease choose a smaller file.`);
                    this.value = ''; // Clear the input
                    fileInfo.classList.add('hidden');
                    return false;
                }
                
                // Check file type
                const allowedTypes = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif', 'image/webp'];
                if (!allowedTypes.includes(file.type)) {
                    alert('❌ Invalid file type.\n\nPlease upload JPG, PNG, GIF, or WEBP images only.');
                    this.value = '';
                    fileInfo.classList.add('hidden');
                    return false;
                }
                
                // Show file info
                const fileSizeMB = (fileBytes / (1024 * 1024)).toFixed(2);
                const fileSizeKB = (fileBytes / 1024).toFixed(2);
                
                fileName.textContent = `📄 ${file.name}`;
                fileSize.textContent = fileBytes >= 1048576 
                    ? `Size: ${fileSizeMB} MB` 
                    : `Size: ${fileSizeKB} KB`;
                fileInfo.classList.remove('hidden');
                
                console.log(`✅ File selected: ${file.name} (${fileSizeMB}MB)`);
            } else {
                fileInfo.classList.add('hidden');
            }
        });

        // Modal functions
        function openModal() {
            document.getElementById('postModal').classList.add('active');
            document.getElementById('modalTitle').textContent = 'Create New Post';
            document.getElementById('postForm').reset();
            document.getElementById('post_id').value = '';
            document.getElementById('existing_image').value = '';
            document.getElementById('file-info').classList.add('hidden');
            tinymce.get('content').setContent('');
            lucide.createIcons();
        }

        function closeModal() {
            document.getElementById('postModal').classList.remove('active');
        }

        function editPost(id) {
            window.location.href = '?edit=' + id + '#postModal';
        }

        // Auto-generate slug from title
        document.getElementById('title').addEventListener('input', function() {
            if (!document.getElementById('post_id').value) { // Only for new posts
                const slug = this.value.toLowerCase()
                    .replace(/[^a-z0-9]+/g, '-')
                    .replace(/^-+|-+$/g, '');
                document.getElementById('slug').value = slug;
            }
        });

        // Delete post
        function deletePost(id, title) {
            if (confirm(`⚠️ Are you sure you want to delete "${title}"?\n\nThis action cannot be undone.`)) {
                fetch('dashboard.php', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                    body: 'action=delete&id=' + id
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        document.querySelector(`tr[data-post-id="${id}"]`).remove();
                        location.reload();
                    } else {
                        alert('❌ Error: ' + data.message);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('❌ Error deleting post');
                });
            }
        }

        // Toggle status
        function toggleStatus(id) {
            fetch('dashboard.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: 'action=toggle_status&id=' + id
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    location.reload();
                } else {
                    alert('❌ Error: ' + data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('❌ Error updating status');
            });
        }

        // Open modal if editing
        <?php if ($editPost): ?>
        window.addEventListener('DOMContentLoaded', function() {
            document.getElementById('postModal').classList.add('active');
            document.getElementById('modalTitle').textContent = 'Edit Post';
            lucide.createIcons();
        });
        <?php endif; ?>

        // Close modal on outside click
        document.getElementById('postModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeModal();
            }
        });

        // Prevent accidental form submission on Enter key in text inputs
        document.getElementById('postForm').addEventListener('keydown', function(e) {
            if (e.key === 'Enter' && e.target.type !== 'textarea') {
                e.preventDefault();
            }
        });

        // Auto-hide flash messages after 5 seconds
        setTimeout(function() {
            const flashMessage = document.querySelector('.alert-shake');
            if (flashMessage) {
                flashMessage.style.transition = 'opacity 0.5s';
                flashMessage.style.opacity = '0';
                setTimeout(() => flashMessage.remove(), 500);
            }
        }, 5000);
    </script>

</body>
</html>