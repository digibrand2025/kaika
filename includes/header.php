<?php
// Get current page for active state
$current_page = basename($_SERVER['PHP_SELF'], '.php');

// Set default title if not defined
if (!isset($page_title)) {
    $page_title = "KAIKA HOLDINGS | Global Business Ecosystem";
}
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;900&family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
    
    <script>
        tailwind.config = {
            theme: {
                fontFamily: {
                    sans: ['Inter', 'sans-serif'],
                    jp: ['Noto Sans JP', 'sans-serif'],
                },
                extend: {
                    colors: {
                        slate: {
                            850: '#151f32',
                        },
                        brand: {
                            red: '#D32F2F',
                            dark: '#1A1A1A'
                        }
                    }
                }
            }
        }
    </script>


</head>
<body class="bg-white text-slate-900 antialiased selection:bg-brand-red selection:text-white">

    <!-- NAVIGATION -->
    <nav id="navbar" class="fixed w-full z-50 transition-all duration-300 bg-transparent">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <a href="index.php" class="flex items-center gap-3 group cursor-pointer">
                    <div class="relative w-10 h-10 flex items-center justify-center">
                        <div class="absolute inset-0 bg-brand-red rotate-45 rounded-sm group-hover:rotate-90 transition-transform duration-500"></div>
                        <span class="relative font-bold text-white text-xl">K</span>
                    </div>
                    <div class="flex flex-col">
                        <span id="nav-brand" class="text-lg font-bold tracking-tight leading-none text-white transition-colors duration-300">KAIKA</span>
                        <span id="nav-sub" class="text-[10px] uppercase tracking-[0.25em] opacity-80 text-slate-200 transition-colors duration-300">Holdings</span>
                    </div>
                </a>

                <!-- Desktop Menu -->
                <div id="nav-links" class="hidden md:flex items-center space-x-8 text-white transition-colors duration-300">
                    <a href="about.php" class="text-sm font-medium hover:text-brand-red transition-colors uppercase tracking-widest relative group <?php echo ($current_page == 'about') ? 'text-brand-red' : ''; ?>">
                        Group Info
                        <span class="absolute -bottom-1 left-0 <?php echo ($current_page == 'about') ? 'w-full' : 'w-0'; ?> h-0.5 bg-brand-red transition-all group-hover:w-full"></span>
                    </a>
                    <a href="our-company.php" class="text-sm font-medium hover:text-brand-red transition-colors uppercase tracking-widest relative group <?php echo ($current_page == 'companies') ? 'text-brand-red' : ''; ?>">
                        Our Companies
                        <span class="absolute -bottom-1 left-0 <?php echo ($current_page == 'companies') ? 'w-full' : 'w-0'; ?> h-0.5 bg-brand-red transition-all group-hover:w-full"></span>
                    </a>
                    <a href="global.php" class="text-sm font-medium hover:text-brand-red transition-colors uppercase tracking-widest relative group <?php echo ($current_page == 'global') ? 'text-brand-red' : ''; ?>">
                        Global
                        <span class="absolute -bottom-1 left-0 <?php echo ($current_page == 'global') ? 'w-full' : 'w-0'; ?> h-0.5 bg-brand-red transition-all group-hover:w-full"></span>
                    </a>
                    <a href="blog/index.php" class="text-sm font-medium hover:text-brand-red transition-colors uppercase tracking-widest relative group <?php echo ($current_page == 'blog') ? 'text-brand-red' : ''; ?>">
                        News
                        <span class="absolute -bottom-1 left-0 <?php echo ($current_page == 'blog') ? 'w-full' : 'w-0'; ?> h-0.5 bg-brand-red transition-all group-hover:w-full"></span>
                    </a>
                    
                    <div id="nav-divider" class="h-4 w-px bg-white/30 mx-2 transition-colors duration-300"></div>
                    
                    <button 
                        onclick="window.location.href='contact.php';"
                        class="px-6 py-2 text-xs font-bold uppercase tracking-wider text-white bg-brand-red hover:bg-red-700 transition-all hover:shadow-[0_0_20px_rgba(220,38,38,0.5)] rounded-sm">
                        Contact HQ
                    </button>
                </div>

                <!-- Mobile Toggle -->
                <div class="md:hidden flex items-center gap-4">
                    <button id="mobile-menu-btn" class="text-white focus:outline-none">
                        <i data-lucide="menu" class="w-6 h-6"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu Dropdown -->
        <div id="mobile-menu" class="hidden md:hidden absolute top-20 left-0 w-full bg-white shadow-xl border-b border-slate-100 p-6 animate-fade-in-up">
            <div class="flex flex-col space-y-4">
                <a href="about.php" class="text-slate-800 font-bold hover:text-brand-red <?php echo ($current_page == 'about') ? 'text-brand-red' : ''; ?>">GROUP INFO</a>
                <a href="companies.php" class="text-slate-800 font-bold hover:text-brand-red <?php echo ($current_page == 'companies') ? 'text-brand-red' : ''; ?>">COMPANIES</a>
                <a href="global.php" class="text-slate-800 font-bold hover:text-brand-red <?php echo ($current_page == 'global') ? 'text-brand-red' : ''; ?>">GLOBAL</a>
                <a href="blog.php" class="text-slate-800 font-bold hover:text-brand-red <?php echo ($current_page == 'blog') ? 'text-brand-red' : ''; ?>">NEWS</a>
                <button onclick="window.location.href='contact.php';" 
                class="w-full py-3 bg-brand-red text-white font-bold tracking-widest uppercase">Contact HQ</button>
            </div>
        </div>
    </nav>

    <!-- Page Content Starts Below Navigation -->