<?php
require_once '../includes/config.php';
require_once '../includes/functions.php';

// Get post by slug
$slug = isset($_GET['slug']) ? sanitize($_GET['slug']) : '';

if (empty($slug)) {
    header('Location: index.php');
    exit;
}

$stmt = $pdo->prepare("SELECT bp.*, au.username as author_name 
                       FROM blog_posts bp 
                       LEFT JOIN admin_users au ON bp.author_id = au.id 
                       WHERE bp.slug = ? AND bp.status = 'published'");
$stmt->execute([$slug]);
$post = $stmt->fetch();

if (!$post) {
    header('Location: index.php');
    exit;
}

// Increment views
incrementViews($pdo, $post['id']);

// Get related posts (same category, excluding current)
$relatedPosts = getRecentPosts($pdo, 3, $post['id']);

$page_title = htmlspecialchars($post['title']) . " - KAIKA HOLDINGS";
include 'header.php';
?>

    <!-- SEO Meta Tags -->
    <meta name="description" content="<?php echo htmlspecialchars($post['excerpt']); ?>">
    
    <!-- Open Graph / Social Media -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="<?php echo htmlspecialchars($post['title']); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($post['excerpt']); ?>">
    <meta property="og:image" content="<?php echo htmlspecialchars($post['featured_image']); ?>">
    
    <style>
        @keyframes ken-burns {
            0% { transform: scale(1); }
            100% { transform: scale(1.1); }
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
        
        /* Article Content Styling */
        .article-content {
            font-size: 1.125rem;
            line-height: 1.8;
            color: #334155;
        }
        .article-content h2 {
            font-size: 1.875rem;
            font-weight: 700;
            margin-top: 2.5rem;
            margin-bottom: 1.25rem;
            color: #0f172a;
        }
        .article-content h3 {
            font-size: 1.5rem;
            font-weight: 600;
            margin-top: 2rem;
            margin-bottom: 1rem;
            color: #1e293b;
        }
        .article-content p {
            margin-bottom: 1.5rem;
        }
        .article-content ul, .article-content ol {
            margin-bottom: 1.5rem;
            padding-left: 2rem;
        }
        .article-content li {
            margin-bottom: 0.75rem;
        }
        .article-content a {
            color: #D32F2F;
            text-decoration: underline;
        }
        .article-content a:hover {
            color: #b71c1c;
        }
        .article-content img {
            margin: 2rem auto;
            border-radius: 0.75rem;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        .article-content blockquote {
            border-left: 4px solid #D32F2F;
            padding-left: 1.5rem;
            margin: 2rem 0;
            font-style: italic;
            color: #475569;
        }
        .article-content code {
            background: #f1f5f9;
            padding: 0.25rem 0.5rem;
            border-radius: 0.25rem;
            font-size: 0.9em;
            font-family: monospace;
        }
        .article-content pre {
            background: #1e293b;
            color: #e2e8f0;
            padding: 1.5rem;
            border-radius: 0.75rem;
            overflow-x: auto;
            margin: 2rem 0;
        }
        .article-content pre code {
            background: transparent;
            padding: 0;
            color: inherit;
        }
    </style>

    <!-- HERO / FEATURED IMAGE -->
    <section class="relative h-[60vh] min-h-[500px] w-full overflow-hidden bg-slate-900">
        <div class="absolute inset-0 overflow-hidden">
            <img src="<?php echo htmlspecialchars($post['featured_image']); ?>" 
                 alt="<?php echo htmlspecialchars($post['title']); ?>" 
                 class="w-full h-full object-cover animate-ken-burns">
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-brand-red to-slate-900 mix-blend-multiply opacity-80"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/20 to-transparent"></div>
        
        <!-- Post Meta -->
        <div class="absolute bottom-0 left-0 right-0 p-8">
            <div class="max-w-4xl mx-auto">
                <div class="flex flex-wrap items-center gap-4 mb-4">
                    <span class="inline-block px-4 py-2 text-xs font-bold text-white rounded-full <?php echo getCategoryColor($post['category']); ?>">
                        <?php echo htmlspecialchars($post['category']); ?>
                    </span>
                    <span class="text-white/80 text-sm flex items-center gap-2">
                        <i data-lucide="calendar" class="w-4 h-4"></i>
                        <?php echo formatDate($post['published_at'], 'F d, Y'); ?>
                    </span>
                    <span class="text-white/80 text-sm flex items-center gap-2">
                        <i data-lucide="eye" class="w-4 h-4"></i>
                        <?php echo number_format($post['views']); ?> views
                    </span>
                    <span class="text-white/80 text-sm flex items-center gap-2">
                        <i data-lucide="user" class="w-4 h-4"></i>
                        <?php echo htmlspecialchars($post['author_name']); ?>
                    </span>
                </div>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight animate-fade-in-up">
                    <?php echo htmlspecialchars($post['title']); ?>
                </h1>
            </div>
        </div>
    </section>

    <!-- ARTICLE CONTENT -->
    <article class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-6 lg:px-8">
            
            <!-- Excerpt -->
            <div class="mb-12 pb-8 border-b border-slate-200">
                <p class="text-2xl text-slate-600 leading-relaxed font-light">
                    <?php echo htmlspecialchars($post['excerpt']); ?>
                </p>
            </div>

            <!-- Main Content -->
            <div class="article-content">
                <?php echo $post['content']; ?>
            </div>

            <!-- Share Buttons -->
            <div class="mt-16 pt-8 border-t border-slate-200">
                <p class="text-slate-600 font-bold mb-4 uppercase tracking-wider text-sm">Share This Article</p>
                <div class="flex flex-wrap gap-3">
                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(SITE_URL . '/blog/post.php?slug=' . $post['slug']); ?>" 
                       target="_blank"
                       class="flex items-center gap-2 px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition font-bold text-sm">
                        <i data-lucide="facebook" class="w-4 h-4"></i>
                        Facebook
                    </a>
                    <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(SITE_URL . '/blog/post.php?slug=' . $post['slug']); ?>&text=<?php echo urlencode($post['title']); ?>" 
                       target="_blank"
                       class="flex items-center gap-2 px-6 py-3 bg-slate-900 text-white rounded-lg hover:bg-slate-800 transition font-bold text-sm">
                        <i data-lucide="twitter" class="w-4 h-4"></i>
                        Twitter
                    </a>
                    <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode(SITE_URL . '/blog/post.php?slug=' . $post['slug']); ?>&title=<?php echo urlencode($post['title']); ?>" 
                       target="_blank"
                       class="flex items-center gap-2 px-6 py-3 bg-blue-700 text-white rounded-lg hover:bg-blue-800 transition font-bold text-sm">
                        <i data-lucide="linkedin" class="w-4 h-4"></i>
                        LinkedIn
                    </a>
                </div>
            </div>

            <!-- Back to Blog -->
            <div class="mt-12 text-center">
                <a href="index.php" class="inline-flex items-center gap-2 text-brand-red hover:text-red-700 font-bold uppercase tracking-wider text-sm transition">
                    <i data-lucide="arrow-left" class="w-4 h-4"></i>
                    Back to All Posts
                </a>
            </div>

        </div>
    </article>

    <!-- RELATED POSTS -->
    <?php if (!empty($relatedPosts)): ?>
    <section class="py-16 bg-slate-50">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-slate-900 mb-8 text-center">Related Articles</h2>
            
            <div class="grid md:grid-cols-3 gap-8">
                <?php foreach ($relatedPosts as $related): ?>
                <article class="group cursor-pointer bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 hover:-translate-y-2">
                    <a href="post.php?slug=<?php echo htmlspecialchars($related['slug']); ?>">
                        <div class="relative overflow-hidden h-48">
                            <img src="<?php echo htmlspecialchars($related['featured_image']); ?>" 
                                 alt="<?php echo htmlspecialchars($related['title']); ?>" 
                                 class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                            <div class="absolute top-4 left-4">
                                <span class="inline-block px-3 py-1 text-xs font-bold text-white rounded-full <?php echo getCategoryColor($related['category']); ?>">
                                    <?php echo htmlspecialchars($related['category']); ?>
                                </span>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center gap-4 mb-3 text-xs text-slate-500">
                                <span class="flex items-center gap-1">
                                    <i data-lucide="calendar" class="w-3 h-3"></i>
                                    <?php echo formatDate($related['published_at']); ?>
                                </span>
                            </div>
                            <h3 class="text-lg font-bold mb-2 group-hover:text-brand-red transition-colors line-clamp-2">
                                <?php echo htmlspecialchars($related['title']); ?>
                            </h3>
                            <p class="text-slate-600 text-sm leading-relaxed line-clamp-2">
                                <?php echo htmlspecialchars($related['excerpt']); ?>
                            </p>
                        </div>
                    </a>
                </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

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
        const navDivider = document.getElementById('nav-divider');

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
                if (navDivider) {
                    navDivider.classList.remove('bg-white/30');
                    navDivider.classList.add('bg-slate-300');
                }
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
                if (navDivider) {
                    navDivider.classList.add('bg-white/30');
                    navDivider.classList.remove('bg-slate-300');
                }
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