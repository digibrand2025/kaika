<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaika Singapore | Logistics, Consulting, Trading & AI Solutions</title>
    <meta name="description" content="Kaika Singapore - Bridging global business with Japanese excellence. Specializing in Logistics, Strategic Consulting, Trading, and IT & AI Automations.">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    
    <!-- Google Fonts - More distinctive pairing -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500;9..40,600;9..40,700&family=Noto+Serif+JP:wght@400;500;600;700&family=Sora:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            red: '#C41E3A',
                            redLight: '#E63950',
                            redDark: '#9A1830',
                            dark: '#0a0f1a',
                            light: '#f8fafc',
                            gray: '#334155',
                            gold: '#D4AF37'
                        }
                    },
                    fontFamily: {
                        sans: ['DM Sans', 'sans-serif'],
                        display: ['Sora', 'sans-serif'],
                        jp: ['Noto Serif JP', 'serif'],
                    },
                    animation: {
                        'fade-in-up': 'fadeInUp 1s cubic-bezier(0.22, 1, 0.36, 1) forwards',
                        'fade-in-down': 'fadeInDown 1s cubic-bezier(0.22, 1, 0.36, 1) forwards',
                        'scale-in': 'scaleIn 0.8s cubic-bezier(0.22, 1, 0.36, 1) forwards',
                        'slide-in-left': 'slideInLeft 1s cubic-bezier(0.22, 1, 0.36, 1) forwards',
                        'slide-in-right': 'slideInRight 1s cubic-bezier(0.22, 1, 0.36, 1) forwards',
                        'float': 'float 6s ease-in-out infinite',
                        'glow': 'glow 2s ease-in-out infinite alternate',
                        'shimmer': 'shimmer 2s linear infinite',
                    },
                    keyframes: {
                        fadeInUp: {
                            '0%': { opacity: '0', transform: 'translateY(40px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                        fadeInDown: {
                            '0%': { opacity: '0', transform: 'translateY(-40px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                        scaleIn: {
                            '0%': { opacity: '0', transform: 'scale(0.9)' },
                            '100%': { opacity: '1', transform: 'scale(1)' },
                        },
                        slideInLeft: {
                            '0%': { opacity: '0', transform: 'translateX(-60px)' },
                            '100%': { opacity: '1', transform: 'translateX(0)' },
                        },
                        slideInRight: {
                            '0%': { opacity: '0', transform: 'translateX(60px)' },
                            '100%': { opacity: '1', transform: 'translateX(0)' },
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-20px)' },
                        },
                        glow: {
                            '0%': { boxShadow: '0 0 20px rgba(196, 30, 58, 0.3)' },
                            '100%': { boxShadow: '0 0 40px rgba(196, 30, 58, 0.6)' },
                        },
                        shimmer: {
                            '0%': { backgroundPosition: '-200% 0' },
                            '100%': { backgroundPosition: '200% 0' },
                        }
                    }
                }
            }
        }
    </script>

    <style>
        /* Premium Glass Navigation */
        .glass-nav {
            background: rgba(255, 255, 255, 0.92);
            backdrop-filter: blur(20px) saturate(180%);
            border-bottom: 1px solid rgba(196, 30, 58, 0.1);
        }
        
        /* Rich Hero Gradients */
        .hero-overlay {
            background: linear-gradient(135deg, rgba(10, 15, 26, 0.92) 0%, rgba(196, 30, 58, 0.75) 100%);
        }
        
        .hero-overlay-dark {
            background: linear-gradient(180deg, rgba(10, 15, 26, 0.95) 0%, rgba(10, 15, 26, 0.8) 50%, rgba(196, 30, 58, 0.6) 100%);
        }

        /* Japanese-inspired pattern overlay */
        .seigaiha-pattern {
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M30 30c8.284 0 15-6.716 15-15 0 8.284 6.716 15 15 15-8.284 0-15 6.716-15 15 0-8.284-6.716-15-15-15zM0 30c8.284 0 15-6.716 15-15 0 8.284 6.716 15 15 15-8.284 0-15 6.716-15 15 0-8.284-6.716-15-15-15z' fill='%23ffffff' fill-opacity='0.03' fill-rule='evenodd'/%3E%3C/svg%3E");
        }

        /* Service Card Enhancements */
        .service-card {
            position: relative;
            overflow: hidden;
        }
        
        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, transparent, var(--accent-color, #C41E3A), transparent);
            transform: scaleX(0);
            transition: transform 0.5s cubic-bezier(0.22, 1, 0.36, 1);
        }
        
        .service-card:hover::before {
            transform: scaleX(1);
        }
        
        .service-card:hover .icon-wrapper {
            background: linear-gradient(135deg, #C41E3A, #E63950);
            color: white;
            transform: scale(1.1) rotate(-5deg);
            box-shadow: 0 10px 30px -10px rgba(196, 30, 58, 0.5);
        }
        
        .service-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15);
        }

        /* Premium Reveal Animations */
        .reveal {
            opacity: 0;
            transform: translateY(40px);
            transition: all 1s cubic-bezier(0.22, 1, 0.36, 1);
        }
        
        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }
        
        .reveal-left {
            opacity: 0;
            transform: translateX(-60px);
            transition: all 1s cubic-bezier(0.22, 1, 0.36, 1);
        }
        
        .reveal-left.active {
            opacity: 1;
            transform: translateX(0);
        }
        
        .reveal-right {
            opacity: 0;
            transform: translateX(60px);
            transition: all 1s cubic-bezier(0.22, 1, 0.36, 1);
        }
        
        .reveal-right.active {
            opacity: 1;
            transform: translateX(0);
        }

        /* Hero Slider */
        .hero-slide {
            transition: opacity 1.8s cubic-bezier(0.22, 1, 0.36, 1), transform 12s ease-out;
        }
        .hero-slide.active {
            opacity: 1;
            transform: scale(1.08);
        }
        .hero-slide.inactive {
            opacity: 0;
            transform: scale(1);
        }

        /* Shimmer Button Effect */
        .btn-shimmer {
            position: relative;
            overflow: hidden;
        }
        
        .btn-shimmer::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            transition: left 0.5s ease;
        }
        
        .btn-shimmer:hover::after {
            left: 100%;
        }

        /* Premium Form Inputs */
        .premium-input {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            transition: all 0.3s cubic-bezier(0.22, 1, 0.36, 1);
        }
        
        .premium-input:focus {
            background: white;
            box-shadow: 0 0 0 4px rgba(196, 30, 58, 0.1), 0 10px 40px -10px rgba(0, 0, 0, 0.1);
        }

        /* Stats Counter Animation */
        .stat-number {
            background: linear-gradient(135deg, #C41E3A, #E63950);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Decorative Elements */
        .corner-accent {
            position: absolute;
            width: 100px;
            height: 100px;
            border: 2px solid rgba(196, 30, 58, 0.2);
        }
        
        .corner-accent-tl {
            top: -1px;
            left: -1px;
            border-right: none;
            border-bottom: none;
        }
        
        .corner-accent-br {
            bottom: -1px;
            right: -1px;
            border-left: none;
            border-top: none;
        }

        /* Floating Particles */
        .particle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: rgba(196, 30, 58, 0.3);
            border-radius: 50%;
            animation: float 8s ease-in-out infinite;
        }

        /* Scroll Progress Bar */
        #scroll-progress {
            position: fixed;
            top: 0;
            left: 0;
            width: 0%;
            height: 3px;
            background: linear-gradient(90deg, #C41E3A, #E63950, #D4AF37);
            z-index: 9999;
            transition: width 0.1s linear;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }
        
        ::-webkit-scrollbar-track {
            background: #0a0f1a;
        }
        
        ::-webkit-scrollbar-thumb {
            background: linear-gradient(180deg, #C41E3A, #9A1830);
            border-radius: 5px;
        }

        /* Japanese Kanji Decoration */
        .kanji-decoration {
            font-family: 'Noto Serif JP', serif;
            font-size: 200px;
            position: absolute;
            opacity: 0.03;
            font-weight: 700;
            pointer-events: none;
            user-select: none;
        }

        /* Glowing Border Effect */
        .glow-border {
            position: relative;
        }
        
        .glow-border::before {
            content: '';
            position: absolute;
            inset: -2px;
            background: linear-gradient(45deg, #C41E3A, transparent, #C41E3A);
            border-radius: inherit;
            z-index: -1;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .glow-border:hover::before {
            opacity: 1;
        }

        /* Tech Grid Background */
        .tech-grid {
            background-image: 
                linear-gradient(rgba(75, 85, 99, 0.1) 1px, transparent 1px),
                linear-gradient(90deg, rgba(75, 85, 99, 0.1) 1px, transparent 1px);
            background-size: 50px 50px;
        }

        /* Gradient Text */
        .gradient-text {
            background: linear-gradient(135deg, #C41E3A 0%, #E63950 50%, #D4AF37 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Stagger Animation Delays */
        .stagger-1 { animation-delay: 0.1s; }
        .stagger-2 { animation-delay: 0.2s; }
        .stagger-3 { animation-delay: 0.3s; }
        .stagger-4 { animation-delay: 0.4s; }
        .stagger-5 { animation-delay: 0.5s; }

        /* Mobile Optimizations */
        @media (max-width: 768px) {
            /* Larger touch targets for mobile */
            .nav-link, button, a {
                min-height: 44px;
                display: inline-flex;
                align-items: center;
            }

            /* Better font scaling on mobile */
            html {
                font-size: 16px;
            }

            /* Reduce decorative kanji on mobile */
            .kanji-decoration {
                font-size: 100px;
                opacity: 0.02;
            }

            /* Hide particles on mobile for performance */
            .particle {
                display: none;
            }

            /* Optimize service cards for mobile */
            .service-card {
                padding: 1.5rem !important;
            }

            /* Reduce padding on mobile */
            section {
                padding-top: 3rem !important;
                padding-bottom: 3rem !important;
            }

            /* Mobile hero adjustments */
            .hero-slide img {
                object-position: center;
            }
        }

        /* Improve tap highlight on iOS */
        * {
            -webkit-tap-highlight-color: rgba(196, 30, 58, 0.1);
        }

        /* Dropdown Menu Styles */
        .dropdown {
            position: relative;
        }
        
        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            min-width: 200px;
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(20px);
            border-radius: 8px;
            box-shadow: 0 10px 40px -10px rgba(0, 0, 0, 0.2);
            opacity: 0;
            visibility: hidden;
            transform: translateY(-10px);
            transition: all 0.3s cubic-bezier(0.22, 1, 0.36, 1);
            margin-top: 0.5rem;
            border: 1px solid rgba(196, 30, 58, 0.1);
            z-index: 100;
        }
        
        .dropdown:hover .dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        
        .dropdown-menu a {
            display: block;
            padding: 12px 20px;
            color: #334155;
            font-weight: 600;
            font-size: 0.875rem;
            transition: all 0.2s ease;
            border-left: 3px solid transparent;
        }
        
        .dropdown-menu a:first-child {
            border-radius: 8px 8px 0 0;
        }
        
        .dropdown-menu a:last-child {
            border-radius: 0 0 8px 8px;
        }
        
        .dropdown-menu a:hover {
            background: rgba(196, 30, 58, 0.05);
            color: #C41E3A;
            border-left-color: #C41E3A;
            padding-left: 24px;
        }

        /* Mobile Dropdown */
        .mobile-dropdown-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }
        
        .mobile-dropdown-content.active {
            max-height: 300px;
        }

        /* Enhanced mobile menu */
        #mobile-menu {
            animation: slideDown 0.3s ease-out;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Smooth scrolling on all devices */
        html {
            scroll-behavior: smooth;
            -webkit-overflow-scrolling: touch;
        }

        /* Prevent horizontal scroll on mobile */
        body {
            overflow-x: hidden;
        }
    </style>
</head>
<body class="font-sans text-slate-700 antialiased bg-slate-50">

    <!-- SCROLL PROGRESS BAR -->
    <div id="scroll-progress"></div>

    <!-- NAVIGATION -->
    <nav id="navbar" class="fixed w-full z-50 transition-all duration-500 bg-transparent py-5">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <!-- Logo -->
                <a href="index.php" class="flex items-center gap-4 group">
                    <div class="relative">
                        <div class="w-12 h-12 bg-gradient-to-br from-brand-red to-brand-redDark text-white flex items-center justify-center font-display font-bold text-2xl rounded shadow-lg group-hover:shadow-brand-red/30 transition-all duration-300">
                            K
                        </div>
                        <div class="absolute -inset-1 bg-brand-red/20 rounded blur-lg opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    </div>
                    <div class="flex flex-col">
                        <span class="font-display font-bold text-xl tracking-[0.3em] text-white transition-colors duration-300" id="nav-brand">KAIKA</span>
                        <span class="text-[10px] uppercase tracking-[0.25em] text-white/70 font-medium transition-colors duration-300" id="nav-sub">Singapore</span>
                    </div>
                </a>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-2">
                    <a href="index.php" class="nav-link px-5 py-2.5 text-sm font-semibold text-white/90 hover:text-white rounded-lg hover:bg-white/10 transition-all duration-300 border border-transparent hover:border-white/20">Home</a>
                    <a href="about.php" class="nav-link px-5 py-2.5 text-sm font-semibold text-white/90 hover:text-white rounded-lg hover:bg-white/10 transition-all duration-300 border border-transparent hover:border-white/20">About</a>
                    
                    <!-- What we do Dropdown -->
                    <div class="dropdown">
                        <a href="services.php" class="nav-link px-5 py-2.5 text-sm font-semibold text-white/90 hover:text-white rounded-lg hover:bg-white/10 transition-all duration-300 border border-transparent hover:border-white/20 flex items-center gap-1">
                            What we do
                            <i data-lucide="chevron-down" class="w-4 h-4"></i>
                        </a>
                        <div class="dropdown-menu">
                            <a href="logistics.php">Logistics</a>
                            <a href="consulting.php">Consulting</a>
                            <a href="trading.php">Trading</a>
                            <a href="tech.php">IT & AI</a>
                        </div>
                    </div>
                    
                    <a href="contact.php" class="btn-shimmer ml-3 px-6 py-3 bg-gradient-to-r from-brand-red to-brand-redLight hover:from-brand-redDark hover:to-brand-red text-white text-sm font-bold tracking-wide rounded-lg transition-all duration-300 shadow-lg hover:shadow-brand-red/40 border border-white/20">
                        Contact Us
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="md:hidden text-white p-2 hover:bg-white/10 rounded-lg transition-colors">
                    <i data-lucide="menu" class="w-6 h-6"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden absolute top-full left-0 w-full bg-white/95 backdrop-blur-xl border-b border-slate-100 shadow-2xl">
            <div class="flex flex-col p-6 space-y-3">
                <a href="index.php" class="px-4 py-3 text-slate-800 font-semibold hover:text-brand-red hover:bg-red-50 rounded-lg transition-all duration-300 border border-transparent hover:border-red-100">Home</a>
                <a href="about.php" class="px-4 py-3 text-slate-800 font-semibold hover:text-brand-red hover:bg-red-50 rounded-lg transition-all duration-300 border border-transparent hover:border-red-100">About</a>
                
                <!-- What we do Mobile Dropdown -->
                <div>
                    <button onclick="toggleMobileDropdown()" class="w-full px-4 py-3 text-slate-800 font-semibold hover:text-brand-red hover:bg-red-50 rounded-lg transition-all duration-300 border border-transparent hover:border-red-100 flex items-center justify-between">
                        <span>What we do</span>
                        <i data-lucide="chevron-down" class="w-4 h-4 transition-transform" id="mobile-dropdown-icon"></i>
                    </button>
                    <div id="mobile-dropdown-content" class="mobile-dropdown-content pl-4 space-y-2 mt-2">
                        <a href="logistics.php" class="block px-4 py-2 text-slate-600 hover:text-brand-red hover:bg-red-50 rounded-lg transition-all duration-300">Logistics</a>
                        <a href="consulting.php" class="block px-4 py-2 text-slate-600 hover:text-brand-red hover:bg-red-50 rounded-lg transition-all duration-300">Consulting</a>
                        <a href="trading.php" class="block px-4 py-2 text-slate-600 hover:text-brand-red hover:bg-red-50 rounded-lg transition-all duration-300">Trading</a>
                        <a href="tech.php" class="block px-4 py-2 text-slate-600 hover:text-brand-red hover:bg-red-50 rounded-lg transition-all duration-300">IT & AI</a>
                    </div>
                </div>
                
                <a href="contact.php" class="mt-2 px-6 py-3 bg-brand-red text-white font-bold rounded-lg text-center shadow-lg hover:shadow-xl transition-all duration-300">Contact Us</a>
            </div>
        </div>
    </nav>
