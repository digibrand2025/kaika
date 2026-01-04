<?php
/**
 * Helper Functions for Kaika Holdings Blog System
 */

/**
 * Sanitize input data
 */
function sanitize($data) {
    return htmlspecialchars(strip_tags(trim($data)), ENT_QUOTES, 'UTF-8');
}

/**
 * Generate URL-friendly slug from title
 */
function generateSlug($title) {
    $slug = strtolower(trim($title));
    $slug = preg_replace('/[^a-z0-9-]/', '-', $slug);
    $slug = preg_replace('/-+/', '-', $slug);
    return trim($slug, '-');
}

/**
 * Format date for display
 */
function formatDate($date, $format = 'M d, Y') {
    return date($format, strtotime($date));
}

/**
 * Truncate text to specified length
 */
function truncateText($text, $length = 150, $suffix = '...') {
    if (strlen($text) <= $length) {
        return $text;
    }
    return substr($text, 0, $length) . $suffix;
}

/**
 * Upload image file with comprehensive error handling
 */
function uploadImage($file) {
    $allowed = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
    $maxSize = 5 * 1024 * 1024; // 5MB
    
    // Check if file array exists
    if (!isset($file) || !is_array($file)) {
        return ['success' => false, 'message' => 'No file uploaded'];
    }
    
    // Check for upload errors
    if ($file['error'] !== UPLOAD_ERR_OK) {
        switch ($file['error']) {
            case UPLOAD_ERR_INI_SIZE:
            case UPLOAD_ERR_FORM_SIZE:
                return ['success' => false, 'message' => 'File size exceeds maximum limit of 5MB'];
            case UPLOAD_ERR_PARTIAL:
                return ['success' => false, 'message' => 'File upload was interrupted'];
            case UPLOAD_ERR_NO_FILE:
                return ['success' => false, 'message' => 'No file was uploaded'];
            case UPLOAD_ERR_NO_TMP_DIR:
                return ['success' => false, 'message' => 'Missing temporary folder'];
            case UPLOAD_ERR_CANT_WRITE:
                return ['success' => false, 'message' => 'Failed to write file to disk'];
            case UPLOAD_ERR_EXTENSION:
                return ['success' => false, 'message' => 'File upload stopped by extension'];
            default:
                return ['success' => false, 'message' => 'Unknown upload error'];
        }
    }
    
    // Check if file was actually uploaded
    if (!isset($file['tmp_name']) || !is_uploaded_file($file['tmp_name'])) {
        return ['success' => false, 'message' => 'Invalid file upload'];
    }
    
    // Check file size (additional check)
    if ($file['size'] > $maxSize) {
        $sizeMB = round($file['size'] / (1024 * 1024), 2);
        return ['success' => false, 'message' => "File size ({$sizeMB}MB) exceeds maximum limit of 5MB"];
    }
    
    // Check if file is empty
    if ($file['size'] === 0) {
        return ['success' => false, 'message' => 'Uploaded file is empty'];
    }
    
    // Check file extension
    $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
    if (!in_array($ext, $allowed)) {
        return ['success' => false, 'message' => 'Invalid file type. Allowed: JPG, JPEG, PNG, GIF, WEBP'];
    }
    
    // Verify it's actually an image
    $imageInfo = @getimagesize($file['tmp_name']);
    if ($imageInfo === false) {
        return ['success' => false, 'message' => 'File is not a valid image'];
    }
    
    // Additional MIME type check
    $allowedMimes = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif', 'image/webp'];
    if (!in_array($imageInfo['mime'], $allowedMimes)) {
        return ['success' => false, 'message' => 'Invalid image MIME type'];
    }
    
    // Generate unique filename
    $filename = uniqid('blog_', true) . '.' . $ext;
    $destination = UPLOAD_DIR . $filename;
    
    // Create upload directory if it doesn't exist
    if (!is_dir(UPLOAD_DIR)) {
        if (!mkdir(UPLOAD_DIR, 0755, true)) {
            return ['success' => false, 'message' => 'Failed to create upload directory'];
        }
    }
    
    // Check if directory is writable
    if (!is_writable(UPLOAD_DIR)) {
        return ['success' => false, 'message' => 'Upload directory is not writable'];
    }
    
    // Move uploaded file
    if (move_uploaded_file($file['tmp_name'], $destination)) {
        // Optional: Create thumbnail or optimize image here
        return ['success' => true, 'filename' => $filename, 'url' => UPLOAD_URL . $filename];
    }
    
    return ['success' => false, 'message' => 'Failed to save uploaded file'];
}

/**
 * Delete image file
 */
function deleteImage($filename) {
    $filepath = UPLOAD_DIR . basename($filename);
    if (file_exists($filepath)) {
        return unlink($filepath);
    }
    return false;
}

/**
 * Get category badge color
 */
function getCategoryColor($category) {
    $colors = [
        'LOGISTICS' => 'bg-blue-600',
        'DINING' => 'bg-orange-600',
        'AUTOMOTIVE' => 'bg-red-600',
        'EDUCATION' => 'bg-emerald-600',
        'RECRUITMENT' => 'bg-indigo-600',
        'ELECTRONICS' => 'bg-purple-600',
        'CORPORATE' => 'bg-slate-600'
    ];
    return $colors[$category] ?? 'bg-gray-600';
}

/**
 * Increment post views
 */
function incrementViews($pdo, $postId) {
    $stmt = $pdo->prepare("UPDATE blog_posts SET views = views + 1 WHERE id = ?");
    $stmt->execute([$postId]);
}

/**
 * Get recent posts
 */
function getRecentPosts($pdo, $limit = 3, $excludeId = null) {
    $sql = "SELECT * FROM blog_posts WHERE status = 'published'";
    if ($excludeId) {
        $sql .= " AND id != :excludeId";
    }
    $sql .= " ORDER BY published_at DESC LIMIT :limit";
    
    $stmt = $pdo->prepare($sql);
    if ($excludeId) {
        $stmt->bindValue(':excludeId', $excludeId, PDO::PARAM_INT);
    }
    $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
    $stmt->execute();
    
    return $stmt->fetchAll();
}

/**
 * Check if user is logged in
 */
function isLoggedIn() {
    return isset($_SESSION['admin_id']) && isset($_SESSION['admin_username']);
}

/**
 * Redirect to login if not authenticated
 */
function requireAuth() {
    if (!isLoggedIn()) {
        header('Location: index.php');
        exit;
    }
}

/**
 * Flash message functions
 */
function setFlashMessage($type, $message) {
    $_SESSION['flash_message'] = ['type' => $type, 'message' => $message];
}

function getFlashMessage() {
    if (isset($_SESSION['flash_message'])) {
        $flash = $_SESSION['flash_message'];
        unset($_SESSION['flash_message']);
        return $flash;
    }
    return null;
}

/**
 * Get formatted file size
 */
function getFormattedFileSize($bytes) {
    if ($bytes >= 1073741824) {
        return number_format($bytes / 1073741824, 2) . ' GB';
    } elseif ($bytes >= 1048576) {
        return number_format($bytes / 1048576, 2) . ' MB';
    } elseif ($bytes >= 1024) {
        return number_format($bytes / 1024, 2) . ' KB';
    } else {
        return $bytes . ' bytes';
    }
}
?>