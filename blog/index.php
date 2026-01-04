<?php
require_once '../includes/config.php';
require_once '../includes/functions.php';

// Pagination
$perPage = 9;
$page = isset($_GET['page']) ? max(1, (int)$_GET['page']) : 1;
$offset = ($page - 1) * $perPage;

// Category filter
$category = isset($_GET['category']) ? sanitize($_GET['category']) : null;

// Build query
$sql = "SELECT * FROM blog_posts WHERE status = 'published'";
$countSql = "SELECT COUNT(*) FROM blog_posts WHERE status = 'published'";

if ($category) {
    $sql .= " AND category = :category";
    $countSql .= " AND category = :category";
}

$sql .= " ORDER BY published_at DESC LIMIT :limit OFFSET :offset";

// Get posts
$stmt = $pdo->prepare($sql);
if ($category) {
    $stmt->bindValue(':category', $category);
}
$stmt->bindValue(':limit', $perPage, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();
$posts = $stmt->fetchAll();

// Get total count
$countStmt = $pdo->prepare($countSql);
if ($category) {
    $countStmt->bindValue(':category', $category);
}
$countStmt->execute();
$totalPosts = $countStmt->fetchColumn();
$totalPages = ceil($totalPosts / $perPage);

// Get categories with post counts
$categories = $pdo->query("SELECT category, COUNT(*) as count FROM blog_posts WHERE status = 'published' GROUP BY category ORDER BY category")->fetchAll();

$page_title = "NEWS & UPDATES - KAIKA HOLDINGS";
include 'header.php';
?>

    <style>
        @keyframes fade-in-up {
            0% { opacity: 0; transform: translateY(20px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        @keyframes ken-burns {
            0% { transform: scale(1); }
            100% { transform: scale(1.1); }
        }
        
        .animate-fade-in-up {
            animation: fade-in-up 0.8s ease-out forwards;
        }
        .animate-ken-burns {
            animation: ken-burns 20s ease-out infinite alternate;
        }
        
        .reveal-on-scroll {
            opacity: 0;
            transform: translateY(30px);
            transition: all 1s ease-out;
        }
        .reveal-on-scroll.is-visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        .text-glow {
            text-shadow: 0 0 20px rgba(255,255,255,0.3);
        }
    </style>

    <!-- HERO SECTION -->
    <section class="relative h-[60vh] min-h-[500px] w-full overflow-hidden bg-slate-900">
        <div class="absolute inset-0 overflow-hidden">
            <img src="https://images.unsplash.com/photo-1504711434969-e33886168f5c?auto=format&fit=crop&q=80&w=2000" 
                 class="w-full h-full object-cover animate-ken-burns" 
                 alt="News & Updates">
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-brand-red to-slate-900 mix-blend-multiply opacity-80"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/20 to-transparent"></div>

        <!-- Content -->
        <div class="absolute inset-0 flex items-center">
            <div class="max-w-7xl mx-auto px-6 lg:px-8 w-full">
                <div class="max-w-4xl space-y-6 animate-fade-in-up">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="h-px w-12 bg-brand-red"></span>
                        <span class="text-brand-red font-bold tracking-widest uppercase text-sm">Kaika Holdings</span>
                    </div>
                    
                    <h1 class="text-5xl md:text-7xl font-bold text-white leading-tight text-glow">
                        News & Updates
                    </h1>
                    
                    <p class="text-xl md:text-2xl text-slate-100 mt-6 max-w-2xl font-light leading-relaxed">
                        Stay informed with the latest news, insights, and announcements from across our global operations.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- MAIN CONTENT -->
    <section class="py-16 bg-slate-50">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            
            <!-- Category Filter -->
            <div class="mb-12 reveal-on-scroll">
                <div class="flex flex-wrap gap-3 justify-center">
                    <a href="index.php" 
                       class="px-6 py-2 rounded-full font-bold text-sm uppercase tracking-wider transition <?php echo !$category ? 'bg-brand-red text-white' : 'bg-white text-slate-600 hover:bg-slate-100'; ?>">
                        All Posts
                    </a>
                    <?php foreach ($categories as $cat): ?>
                    <a href="?category=<?php echo urlencode($cat['category']); ?>" 
                       class="px-6 py-2 rounded-full font-bold text-sm uppercase tracking-wider transition <?php echo $category === $cat['category'] ? 'bg-brand-red text-white' : 'bg-white text-slate-600 hover:bg-slate-100'; ?>">
                        <?php echo htmlspecialchars($cat['category']); ?> (<?php echo $cat['count']; ?>)
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Blog Grid -->
            <?php if (empty($posts)): ?>
            <div class="text-center py-20">
                <i data-lucide="inbox" class="w-16 h-16 text-slate-300 mx-auto mb-4"></i>
                <p class="text-xl text-slate-500 font-medium">No posts found</p>
                <p class="text-slate-400 mt-2">Check back soon for updates</p>
            </div>
            <?php else: ?>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php foreach ($posts as $index => $post): ?>
                <article class="reveal-on-scroll group cursor-pointer bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 hover:-translate-y-2" style="transition-delay: <?php echo $index * 100; ?>ms;">
                    <a href="post.php?slug=<?php echo htmlspecialchars($post['slug']); ?>">
                        <div class="relative overflow-hidden h-60">
                            <img src="<?php echo htmlspecialchars($post['featured_image']); ?>" 
                                 alt="<?php echo htmlspecialchars($post['title']); ?>" 
                                 class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                            <div class="absolute top-4 left-4">
                                <span class="inline-block px-3 py-1 text-xs font-bold text-white rounded-full <?php echo getCategoryColor($post['category']); ?>">
                                    <?php echo htmlspecialchars($post['category']); ?>
                                </span>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center gap-4 mb-3 text-xs text-slate-500">
                                <span class="flex items-center gap-1">
                                    <i data-lucide="calendar" class="w-3 h-3"></i>
                                    <?php echo formatDate($post['published_at']); ?>
                                </span>
                                <span class="flex items-center gap-1">
                                    <i data-lucide="eye" class="w-3 h-3"></i>
                                    <?php echo number_format($post['views']); ?>
                                </span>
                            </div>
                            <h3 class="text-xl font-bold mb-3 group-hover:text-brand-red transition-colors line-clamp-2">
                                <?php echo htmlspecialchars($post['title']); ?>
                            </h3>
                            <p class="text-slate-600 text-sm leading-relaxed line-clamp-3">
                                <?php echo htmlspecialchars($post['excerpt']); ?>
                            </p>
                            <div class="mt-4 flex items-center gap-2 text-brand-red font-bold text-sm uppercase tracking-wider group-hover:gap-3 transition-all">
                                Read More <i data-lucide="arrow-right" class="w-4 h-4"></i>
                            </div>
                        </div>
                    </a>
                </article>
                <?php endforeach; ?>
            </div>

            <!-- Pagination -->
            <?php if ($totalPages > 1): ?>
            <div class="flex items-center justify-center gap-2 mt-12">
                <?php if ($page > 1): ?>
                <a href="?page=<?php echo $page - 1; ?><?php echo $category ? '&category=' . urlencode($category) : ''; ?>" 
                   class="px-4 py-2 bg-white text-slate-600 rounded-lg hover:bg-slate-100 transition font-bold">
                    <i data-lucide="chevron-left" class="w-4 h-4"></i>
                </a>
                <?php endif; ?>
                
                <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                <a href="?page=<?php echo $i; ?><?php echo $category ? '&category=' . urlencode($category) : ''; ?>" 
                   class="px-4 py-2 rounded-lg font-bold transition <?php echo $i === $page ? 'bg-brand-red text-white' : 'bg-white text-slate-600 hover:bg-slate-100'; ?>">
                    <?php echo $i; ?>
                </a>
                <?php endfor; ?>
                
                <?php if ($page < $totalPages): ?>
                <a href="?page=<?php echo $page + 1; ?><?php echo $category ? '&category=' . urlencode($category) : ''; ?>" 
                   class="px-4 py-2 bg-white text-slate-600 rounded-lg hover:bg-slate-100 transition font-bold">
                    <i data-lucide="chevron-right" class="w-4 h-4"></i>
                </a>
                <?php endif; ?>
            </div>
            <?php endif; ?>
            <?php endif; ?>

        </div>
    </section>

<footer class="pt-20 pb-10 border-t border-slate-800 bg-slate-900 text-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-8 h-8 bg-brand-red text-white flex items-center justify-center font-bold text-lg rounded-sm">K</div>
                        <span class="font-bold text-xl tracking-widest">KAIKA HOLDINGS</span>
                    </div>
                    <p class="opacity-60 max-w-sm leading-relaxed mb-8 text-sm text-slate-300">
                        Kaika Holdings. Connecting our subsidiaries to the world through a shared vision of Japanese excellence and integrity.
                    </p>
                    <div class="flex gap-4">
                        <div class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-brand-red hover:text-white transition-colors cursor-pointer">
                            <i data-lucide="globe" class="w-4 h-4"></i>
                        </div>
                        <div class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-brand-red hover:text-white transition-colors cursor-pointer">
                            <i data-lucide="linkedin" class="w-4 h-4"></i>
                        </div>
                        <div class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-brand-red hover:text-white transition-colors cursor-pointer">
                            <i data-lucide="facebook" class="w-4 h-4"></i>
                        </div>
                    </div>
                </div>
                
                <div>
                    <h4 class="font-bold mb-6">Our Companies</h4>
                    <ul class="space-y-4 text-sm opacity-70 text-slate-300">
                        <li><a href="kamikura.html" class="hover:text-brand-red transition-colors">Kamikura</a></li>
                        <li><a href="legend.html" class="hover:text-brand-red transition-colors">Legend Pvt Ltd</a></li>
                        <li><a href="https://kaikainternational.com" target="_blank" class="hover:text-brand-red transition-colors">Kaika International</a></li>
                        <li><a href="https://kaikalogistics.com" target="_blank" class="hover:text-brand-red transition-colors">Kaika Logistics</a></li>
                        <li><a href="japanese-school.html" class="hover:text-brand-red transition-colors">Kaika Japanese School</a></li>
                        <li><a href="http://kaika-international.com" target="_blank" class="hover:text-brand-red transition-colors">Kaika Carriers</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold mb-6">Contact</h4>
                    <ul class="space-y-4 text-sm opacity-70 text-slate-300">
                        <li class="flex items-start gap-3">
                            <i data-lucide="map-pin" class="shrink-0 text-brand-red w-4 h-4 mt-1"></i>
                            <span>Headquarters<br/>Japan</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i data-lucide="mail" class="shrink-0 text-brand-red w-4 h-4"></i>
                            <span>info@kaikaholdings.com</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-slate-800 pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-xs opacity-40 text-slate-400">
                <p>&copy; 2024 Kaika Holdings. All rights reserved.</p>
                <div class="flex gap-8">
                   <a href="#">Privacy Policy</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        lucide.createIcons();

        // Navbar Scroll Logic
        const navbar = document.getElementById('navbar');
        const navLinks = document.getElementById('nav-links');
        const navBrand = document.getElementById('nav-brand');
        const navSub = document.getElementById('nav-sub');
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 20) {
                navbar.classList.add('bg-white/95', 'backdrop-blur-xl', 'shadow-sm', 'border-b', 'border-slate-100');
                navLinks.classList.remove('text-white');
                navLinks.classList.add('text-slate-800');
                navBrand.classList.remove('text-white');
                navBrand.classList.add('text-slate-900');
                navSub.classList.remove('text-slate-200');
                navSub.classList.add('text-slate-500');
                mobileMenuBtn.classList.remove('text-white');
                mobileMenuBtn.classList.add('text-slate-900');
            } else {
                navbar.classList.remove('bg-white/95', 'backdrop-blur-xl', 'shadow-sm', 'border-b', 'border-slate-100');
                navLinks.classList.add('text-white');
                navLinks.classList.remove('text-slate-800');
                navBrand.classList.add('text-white');
                navBrand.classList.remove('text-slate-900');
                navSub.classList.add('text-slate-200');
                navSub.classList.remove('text-slate-500');
                mobileMenuBtn.classList.add('text-white');
                mobileMenuBtn.classList.remove('text-slate-900');
            }
        });

        // Mobile Menu Toggle
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Scroll reveal
        const revealElements = document.querySelectorAll('.reveal-on-scroll');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                }
            });
        }, { threshold: 0.1 });
        revealElements.forEach((el) => observer.observe(el));
        
        // Re-initialize icons after page load
        document.addEventListener('DOMContentLoaded', () => {
            lucide.createIcons();
        });
    </script>

</body>
</html>