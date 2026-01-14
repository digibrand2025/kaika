
<?php
// Add this at the very top of your index.php file (after <!DOCTYPE html> or before it)
require_once 'includes/config.php';
require_once 'includes/functions.php';

$page_title = "KAIKA HOLDINGS | Global Business Ecosystem";

// Fetch latest 3 published blog posts
$stmt = $pdo->prepare("SELECT * FROM blog_posts WHERE status = 'published' ORDER BY published_at DESC LIMIT 3");
$stmt->execute();
$latestPosts = $stmt->fetchAll();

include 'includes/header.php'; 
?>

<style>
        /* Animation Keyframes */
        @keyframes fade-in-up {
            0% { opacity: 0; transform: translateY(20px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        @keyframes ken-burns {
            0% { transform: scale(1); }
            100% { transform: scale(1.1); }
        }
        
        /* Utility Classes */
        .animate-fade-in-up {
            animation: fade-in-up 0.8s ease-out forwards;
        }
        .animate-ken-burns {
            animation: ken-burns 20s ease-out infinite alternate;
        }
        
        /* Glassmorphism */
        .glass-panel {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        /* Text Glow */
        .text-glow {
            text-shadow: 0 0 20px rgba(255,255,255,0.3);
        }

        /* Scroll Reveal Utility */
        .reveal-on-scroll {
            opacity: 0;
            transform: translateY(30px);
            transition: all 1s ease-out;
        }
        .reveal-on-scroll.is-visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Hero Slide Transitions */
        .hero-slide {
            transition: opacity 1.5s ease-in-out;
        }
        
        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f1f1; 
        }
        ::-webkit-scrollbar-thumb {
            background: #D32F2F; 
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #b71c1c; 
        }

        /* Map Hotspot Pulse */
        .hotspot-pulse {
            animation: hotspot-pulse 2s infinite;
        }
        @keyframes hotspot-pulse {
            0% { box-shadow: 0 0 0 0 rgba(211, 47, 47, 0.7); }
            70% { box-shadow: 0 0 0 10px rgba(211, 47, 47, 0); }
            100% { box-shadow: 0 0 0 0 rgba(211, 47, 47, 0); }
        }
    </style>


    <!-- HERO SECTION -->
    <section class="relative h-screen w-full overflow-hidden bg-slate-900">
        
        <!-- Slides Container -->
        <div id="hero-slider">
            <!-- Slide 1: General/Holdings -->
            <div class="hero-slide absolute inset-0 opacity-100 z-10" data-index="0">
                <div class="absolute inset-0 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1493976040374-85c8e12f0c0e?auto=format&fit=crop&q=80&w=2000" class="w-full h-full object-cover animate-ken-burns" alt="Japan">
                </div>
                <div class="absolute inset-0 bg-gradient-to-r from-red-600 to-slate-900 mix-blend-multiply opacity-70"></div>
            </div>
            <!-- Slide 2: Logistics -->
            <div class="hero-slide absolute inset-0 opacity-0 z-0" data-index="1">
                <div class="absolute inset-0 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&q=80&w=2000" class="w-full h-full object-cover animate-ken-burns" alt="Logistics">
                </div>
                <div class="absolute inset-0 bg-gradient-to-r from-blue-600 to-slate-900 mix-blend-multiply opacity-60"></div>
            </div>
            <!-- Slide 3: Food/Kamikura -->
            <div class="hero-slide absolute inset-0 opacity-0 z-0" data-index="2">
                <div class="absolute inset-0 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1580822184713-fc5400e7fe10?auto=format&fit=crop&q=80&w=2000" class="w-full h-full object-cover animate-ken-burns" alt="Food">
                </div>
                <div class="absolute inset-0 bg-gradient-to-r from-orange-500 to-amber-900 mix-blend-multiply opacity-60"></div>
            </div>
             <!-- Slide 4: Education -->
             <div class="hero-slide absolute inset-0 opacity-0 z-0" data-index="3">
                <div class="absolute inset-0 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?auto=format&fit=crop&q=80&w=2000" class="w-full h-full object-cover animate-ken-burns" alt="Education">
                </div>
                <div class="absolute inset-0 bg-gradient-to-r from-emerald-600 to-teal-900 mix-blend-multiply opacity-60"></div>
            </div>
            <!-- Slide 5: Cars/Kaika International -->
            <div class="hero-slide absolute inset-0 opacity-0 z-0" data-index="4">
                <div class="absolute inset-0 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1547245324-d777c6f05e80?q=80&w=2340&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="w-full h-full object-cover animate-ken-burns" alt="Japanese Vehicle">
                </div>
                <div class="absolute inset-0 bg-gradient-to-r from-red-600 to-slate-900 mix-blend-multiply opacity-60"></div>
            </div>
        </div>

        <!-- Gradient Overlay Bottom -->
        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/20 to-transparent z-10"></div>

        <!-- Content -->
        <div class="absolute inset-0 z-20 flex items-center">
            <div class="max-w-7xl mx-auto px-6 lg:px-8 w-full">
                <div class="max-w-4xl space-y-6 animate-fade-in-up">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="h-px w-12 bg-brand-red"></span>
                        <span class="text-brand-red font-bold tracking-widest uppercase text-sm">Kaika Holdings</span>
                    </div>
                    
                    <h1 id="hero-title" class="text-5xl md:text-7xl lg:text-8xl font-bold text-white leading-tight text-glow transition-all duration-700">
                        Global Excellence
                    </h1>
                    
                    <p id="hero-subtitle" class="text-xl md:text-2xl text-slate-100 mt-6 max-w-2xl font-light leading-relaxed border-l-2 border-brand-red pl-6 bg-black/20 backdrop-blur-sm py-4 rounded-r-lg transition-all duration-700">
                        Connecting Japan to the World through Innovation and Trust
                    </p>

                    <div class="flex flex-wrap gap-4 mt-10">
                        <a href="#subsidiaries" class="px-8 py-4 bg-brand-red hover:bg-red-700 text-white font-bold tracking-widest uppercase transition-all hover:shadow-[0_0_30px_rgba(220,38,38,0.4)] flex items-center gap-3 group">
                            Explore Companies
                            <i data-lucide="arrow-right" class="w-4 h-4 group-hover:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide Indicators -->
        <div class="absolute bottom-10 right-10 z-30 flex gap-2" id="slide-indicators">
            <!-- Generated by JS -->
        </div>
    </section>

    <!-- STATS STRIP -->
    <div class="relative z-30 -mt-20 max-w-7xl mx-auto px-6 lg:px-8 reveal-on-scroll">
        <div class="grid grid-cols-2 md:grid-cols-4 bg-white shadow-2xl rounded-sm border-t-4 border-brand-red overflow-hidden">
            <div class="p-8 text-center border-r border-slate-100 hover:bg-slate-50 transition-colors group">
                <div class="text-3xl md:text-4xl font-black text-slate-900 mb-1 group-hover:scale-110 transition-transform">8</div>
                <div class="text-xs uppercase tracking-widest text-slate-500">Core Subsidiaries</div>
            </div>
            <div class="p-8 text-center border-r border-slate-100 hover:bg-slate-50 transition-colors group">
                <div class="text-3xl md:text-4xl font-black text-slate-900 mb-1 group-hover:scale-110 transition-transform">5</div>
                <div class="text-xs uppercase tracking-widest text-slate-500">Countries</div>
            </div>
            <div class="p-8 text-center border-r border-slate-100 hover:bg-slate-50 transition-colors group">
                <div class="text-3xl md:text-4xl font-black text-slate-900 mb-1 group-hover:scale-110 transition-transform">100+</div>
                <div class="text-xs uppercase tracking-widest text-slate-500">Global Partners</div>
            </div>
            <div class="p-8 text-center hover:bg-slate-50 transition-colors group">
                <div class="text-3xl md:text-4xl font-black text-slate-900 mb-1 group-hover:scale-110 transition-transform">1</div>
                <div class="text-xs uppercase tracking-widest text-slate-500">Unified Vision</div>
            </div>
        </div>
    </div>

    <!-- ABOUT SECTION -->
    <section id="about" class="pt-32 pb-16 bg-slate-50">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-16 items-center">
                <div class="reveal-on-scroll">
                    <div class="relative group">
                        <div class="absolute -inset-4 bg-gradient-to-r from-red-600 to-orange-600 rounded-lg blur opacity-25 group-hover:opacity-50 transition duration-1000"></div>
                        <div class="relative rounded-lg overflow-hidden h-[500px] shadow-2xl">
                            <img src="https://images.unsplash.com/photo-1480796927426-f609979314bd?auto=format&fit=crop&q=80&w=1000" alt="Japan City" class="w-full h-full object-cover transform group-hover:scale-105 transition duration-700">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 to-transparent flex items-end p-8">
                                <div class="text-white">
                                    <p class="font-serif italic text-lg opacity-90">"Kaika" (開花) - To Bloom / To Flower</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="reveal-on-scroll" style="transition-delay: 200ms;">
                    <h2 class="text-brand-red font-bold tracking-widest uppercase text-sm mb-4">About Kaika Holdings</h2>
                    <h3 class="text-4xl md:text-5xl font-bold mb-6 leading-tight text-slate-900">Connecting Business.<br/>Connecting Cultures.</h3>
                    <p class="text-lg text-slate-600 leading-relaxed mb-8">
                        Kaika Holdings serves as the central pillar for a diverse portfolio of businesses spanning automotive, logistics, dining, education, and recruitment. Headquartered in Japan, we strategically connect our subsidiaries to global markets, ensuring Japanese quality permeates every service we provide.
                    </p>
                    
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center gap-3">
                            <div class="w-6 h-6 rounded-full bg-red-100 flex items-center justify-center text-brand-red">
                                <i data-lucide="check" class="w-3 h-3"></i>
                            </div>
                            <span class="font-medium text-slate-700">Centralized Corporate Governance</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <div class="w-6 h-6 rounded-full bg-red-100 flex items-center justify-center text-brand-red">
                                <i data-lucide="check" class="w-3 h-3"></i>
                            </div>
                            <span class="font-medium text-slate-700">Cross-Sector Synergy</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <div class="w-6 h-6 rounded-full bg-red-100 flex items-center justify-center text-brand-red">
                                <i data-lucide="check" class="w-3 h-3"></i>
                            </div>
                            <span class="font-medium text-slate-700">Expanding Global Footprint</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- CORPORATE VALUES (New Section 2) -->
    <section class="py-16 bg-white border-y border-slate-100">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-10 reveal-on-scroll">
                 <h2 class="text-brand-red font-bold tracking-widest uppercase text-sm mb-2">Our Philosophy</h2>
                 <p class="text-slate-500">Guided by traditional Japanese principles.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8 text-center">
                <div class="reveal-on-scroll p-6 hover:bg-slate-50 rounded-xl transition-colors duration-300">
                    <div class="w-16 h-16 mx-auto bg-slate-100 rounded-full flex items-center justify-center text-2xl font-bold text-slate-800 mb-4 font-jp">信頼</div>
                    <h4 class="text-xl font-bold mb-2 text-brand-red">Shinrai (Trust)</h4>
                    <p class="text-sm text-slate-600 leading-relaxed">Building lasting relationships founded on honesty, transparency, and mutual respect with all our partners.</p>
                </div>
                <div class="reveal-on-scroll p-6 hover:bg-slate-50 rounded-xl transition-colors duration-300" style="transition-delay: 100ms;">
                    <div class="w-16 h-16 mx-auto bg-slate-100 rounded-full flex items-center justify-center text-2xl font-bold text-slate-800 mb-4 font-jp">改善</div>
                    <h4 class="text-xl font-bold mb-2 text-brand-red">Kaizen (Innovation)</h4>
                    <p class="text-sm text-slate-600 leading-relaxed">Continuous improvement in every aspect of our operations, from logistics efficiency to service quality.</p>
                </div>
                <div class="reveal-on-scroll p-6 hover:bg-slate-50 rounded-xl transition-colors duration-300" style="transition-delay: 200ms;">
                    <div class="w-16 h-16 mx-auto bg-slate-100 rounded-full flex items-center justify-center text-2xl font-bold text-slate-800 mb-4 font-jp">和</div>
                    <h4 class="text-xl font-bold mb-2 text-brand-red">Wa (Harmony)</h4>
                    <p class="text-sm text-slate-600 leading-relaxed">Growing together with the communities we serve, ensuring sustainable development and cultural exchange.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SUBSIDIARIES SECTION -->
<section id="subsidiaries" class="py-32 relative bg-slate-50">
    <!-- Background Pattern -->
    <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-red-200 to-transparent"></div>
    
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-20 reveal-on-scroll">
            <div class="flex items-center justify-center gap-3 mb-6">
                <span class="h-px w-12 bg-brand-red"></span>
                <span class="text-brand-red font-bold tracking-widest uppercase text-sm">Our Subsidiaries</span>
                <span class="h-px w-12 bg-brand-red"></span>
            </div>
            <h3 class="text-4xl md:text-5xl font-black mb-6 text-slate-900">
                <span class="gradient-text">The Kaika</span> <span class="text-slate-900">Ecosystem</span>
            </h3>
            <p class="text-lg text-slate-600">
                Discover the diverse companies under the Kaika Holdings umbrella, each excelling in their specialized domain.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            
            <!-- 1. Kamikura (Restaurant) - INTERNAL LINK -->
            <div class="reveal-on-scroll" style="transition-delay: 100ms;">
                <div class="group relative h-96 rounded-2xl overflow-hidden border border-slate-200 bg-white transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl flex flex-col">
                    <div class="absolute inset-0 z-0 opacity-0 group-hover:opacity-100 transition-opacity duration-700">
                        <img src="https://wallpapercat.com/w/full/5/8/8/610794-3840x2160-desktop-4k-sushi-background.jpg" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-white via-white/90 to-transparent opacity-95"></div>
                    </div>
                    <div class="relative z-10 p-8 h-full flex flex-col items-start">
                        <div class="w-14 h-14 rounded-xl bg-orange-100 text-orange-600 flex items-center justify-center mb-6 transition-transform group-hover:scale-110 duration-500">
                            <i data-lucide="utensils-crossed" class="w-6 h-6"></i>
                        </div>
                        <h4 class="text-2xl font-bold mb-2 text-slate-900 group-hover:text-orange-600 transition-colors">Kamikura</h4>
                        <p class="text-sm font-bold uppercase tracking-wider text-slate-400 mb-4">Japanese Restaurant</p>
                        <p class="text-sm leading-relaxed text-slate-600 mb-auto line-clamp-3">Authentic Japanese dining experience featuring traditional flavors and premium hospitality.</p>
                        
                        <a href="kamikura.html" class="mt-6 inline-flex items-center text-sm font-bold uppercase tracking-wider text-orange-600 hover:gap-2 transition-all">
                            View Page <i data-lucide="arrow-right" class="w-4 h-4 ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- 2. Legend Pvt Ltd - INTERNAL LINK -->
            <div class="reveal-on-scroll" style="transition-delay: 150ms;">
                <div class="group relative h-96 rounded-2xl overflow-hidden border border-slate-200 bg-white transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl flex flex-col">
                    <div class="absolute inset-0 z-0 opacity-0 group-hover:opacity-100 transition-opacity duration-700">
                        <img src="https://images.unsplash.com/photo-1612977060650-77024e7aac63?q=80&w=872&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-white via-white/90 to-transparent opacity-95"></div>
                    </div>
                    <div class="relative z-10 p-8 h-full flex flex-col items-start">
                        <div class="w-14 h-14 rounded-xl bg-indigo-100 text-indigo-600 flex items-center justify-center mb-6 transition-transform group-hover:scale-110 duration-500">
                            <i data-lucide="zap" class="w-6 h-6"></i>
                        </div>
                        <h4 class="text-2xl font-bold mb-2 text-slate-900 group-hover:text-indigo-600 transition-colors">Legend Pvt Ltd</h4>
                        <p class="text-sm font-bold uppercase tracking-wider text-slate-400 mb-4">Electronics & Tumugi</p>
                        <p class="text-sm leading-relaxed text-slate-600 mb-auto line-clamp-3">Specialized in electronic importing business and Tumugi distribution.</p>
                        
                        <a href="legend.html" class="mt-6 inline-flex items-center text-sm font-bold uppercase tracking-wider text-indigo-600 hover:gap-2 transition-all">
                            View Details <i data-lucide="arrow-right" class="w-4 h-4 ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- 3. Kaika IT & Automation - NEW INTERNAL LINK -->
            <div class="reveal-on-scroll" style="transition-delay: 200ms;">
                <div class="group relative h-96 rounded-2xl overflow-hidden border border-slate-200 bg-white transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl flex flex-col">
                    <div class="absolute inset-0 z-0 opacity-0 group-hover:opacity-100 transition-opacity duration-700">
                        <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?auto=format&fit=crop&q=80&w=600" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-white via-white/90 to-transparent opacity-95"></div>
                    </div>
                    <div class="relative z-10 p-8 h-full flex flex-col items-start">
                        <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-purple-100 to-pink-100 text-purple-600 flex items-center justify-center mb-6 transition-transform group-hover:scale-110 duration-500 shadow-lg">
                            <i data-lucide="laptop-2" class="w-6 h-6"></i>
                        </div>
                        <h4 class="text-2xl font-bold mb-2 text-slate-900 group-hover:bg-gradient-to-r group-hover:from-purple-600 group-hover:to-pink-600 group-hover:bg-clip-text group-hover:text-transparent transition-all">Kaika IT & Automation</h4>
                        <p class="text-sm font-bold uppercase tracking-wider text-slate-400 mb-4">Digital Solutions</p>
                        <p class="text-sm leading-relaxed text-slate-600 mb-auto line-clamp-3">Web development, digital marketing, business automation, graphic design and comprehensive IT services.</p>
                        
                        <a href="it-automation.html" class="mt-6 inline-flex items-center text-sm font-bold uppercase tracking-wider text-purple-600 hover:gap-2 transition-all">
                            View Services <i data-lucide="arrow-right" class="w-4 h-4 ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- 4. Kaika International - EXTERNAL LINK -->
            <div class="reveal-on-scroll" style="transition-delay: 250ms;">
                <div class="group relative h-96 rounded-2xl overflow-hidden border border-slate-200 bg-white transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl flex flex-col">
                    <div class="absolute inset-0 z-0 opacity-0 group-hover:opacity-100 transition-opacity duration-700">
                        <img src="https://images.unsplash.com/photo-1547245324-d777c6f05e80?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-white via-white/90 to-transparent opacity-95"></div>
                    </div>
                    <div class="relative z-10 p-8 h-full flex flex-col items-start">
                        <div class="w-14 h-14 rounded-xl bg-red-100 text-red-600 flex items-center justify-center mb-6 transition-transform group-hover:scale-110 duration-500">
                            <i data-lucide="car" class="w-6 h-6"></i>
                        </div>
                        <h4 class="text-2xl font-bold mb-2 text-slate-900 group-hover:text-red-600 transition-colors">Kaika International</h4>
                        <p class="text-sm font-bold uppercase tracking-wider text-slate-400 mb-4">Vehicle Business</p>
                        <p class="text-sm leading-relaxed text-slate-600 mb-auto line-clamp-3">Premier vehicle listing and trading platform connecting Japanese sellers to the world.</p>
                        
                        <div class="mt-6 flex flex-col gap-1 w-full">
                            <a href="https://kaikainternational.com" target="_blank" class="inline-flex items-center text-sm font-bold uppercase tracking-wider text-red-600 hover:gap-2 transition-all">
                                Visit Site <i data-lucide="external-link" class="w-4 h-4 ml-2"></i>
                            </a>
                            <span class="text-[10px] text-slate-400 italic">Opens in new tab</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 5. Kaika Logistics - EXTERNAL LINK -->
            <div class="reveal-on-scroll" style="transition-delay: 300ms;">
                <div class="group relative h-96 rounded-2xl overflow-hidden border border-slate-200 bg-white transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl flex flex-col">
                    <div class="absolute inset-0 z-0 opacity-0 group-hover:opacity-100 transition-opacity duration-700">
                        <img src="https://images.unsplash.com/photo-1578575437130-527eed3abbec?auto=format&fit=crop&q=80&w=600" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-white via-white/90 to-transparent opacity-95"></div>
                    </div>
                    <div class="relative z-10 p-8 h-full flex flex-col items-start">
                        <div class="w-14 h-14 rounded-xl bg-cyan-100 text-cyan-600 flex items-center justify-center mb-6 transition-transform group-hover:scale-110 duration-500">
                            <i data-lucide="container" class="w-6 h-6"></i>
                        </div>
                        <h4 class="text-2xl font-bold mb-2 text-slate-900 group-hover:text-cyan-600 transition-colors">Kaika Logistics</h4>
                        <p class="text-sm font-bold uppercase tracking-wider text-slate-400 mb-4">Supply Chain Solutions</p>
                        <p class="text-sm leading-relaxed text-slate-600 mb-auto line-clamp-3">Comprehensive logistics services ensuring safe and timely delivery globally.</p>
                        
                        <div class="mt-6 flex flex-col gap-1 w-full">
                            <a href="https://kaikalogistics.com" target="_blank" class="inline-flex items-center text-sm font-bold uppercase tracking-wider text-cyan-600 hover:gap-2 transition-all">
                                Visit Site <i data-lucide="external-link" class="w-4 h-4 ml-2"></i>
                            </a>
                            <span class="text-[10px] text-slate-400 italic">Opens in new tab</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 6. Kaika Japanese School - INTERNAL LINK -->
            <div class="reveal-on-scroll" style="transition-delay: 350ms;">
                <div class="group relative h-96 rounded-2xl overflow-hidden border border-slate-200 bg-white transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl flex flex-col">
                    <div class="absolute inset-0 z-0 opacity-0 group-hover:opacity-100 transition-opacity duration-700">
                        <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&q=80&w=600" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-white via-white/90 to-transparent opacity-95"></div>
                    </div>
                    <div class="relative z-10 p-8 h-full flex flex-col items-start">
                        <div class="w-14 h-14 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center mb-6 transition-transform group-hover:scale-110 duration-500">
                            <i data-lucide="graduation-cap" class="w-6 h-6"></i>
                        </div>
                        <h4 class="text-2xl font-bold mb-2 text-slate-900 group-hover:text-blue-600 transition-colors">Kaika Japanese School</h4>
                        <p class="text-sm font-bold uppercase tracking-wider text-slate-400 mb-4">Education</p>
                        <p class="text-sm leading-relaxed text-slate-600 mb-auto line-clamp-3">Teaching Japanese language and culture to prepare students for global opportunities.</p>
                        
                        <a href="japanese-school.html" class="mt-6 inline-flex items-center text-sm font-bold uppercase tracking-wider text-blue-600 hover:gap-2 transition-all">
                            View Page <i data-lucide="arrow-right" class="w-4 h-4 ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- 7. Kaika Carriers - EXTERNAL LINK -->
            <div class="reveal-on-scroll" style="transition-delay: 400ms;">
                <div class="group relative h-96 rounded-2xl overflow-hidden border border-slate-200 bg-white transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl flex flex-col">
                    <div class="absolute inset-0 z-0 opacity-0 group-hover:opacity-100 transition-opacity duration-700">
                        <img src="https://plus.unsplash.com/premium_photo-1723780879422-3840c3c1d78c?q=80&w=880&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-white via-white/90 to-transparent opacity-95"></div>
                    </div>
                    <div class="relative z-10 p-8 h-full flex flex-col items-start">
                        <div class="w-14 h-14 rounded-xl bg-emerald-100 text-emerald-600 flex items-center justify-center mb-6 transition-transform group-hover:scale-110 duration-500">
                            <i data-lucide="briefcase" class="w-6 h-6"></i>
                        </div>
                        <h4 class="text-2xl font-bold mb-2 text-slate-900 group-hover:text-emerald-600 transition-colors">Kaika Carriers</h4>
                        <p class="text-sm font-bold uppercase tracking-wider text-slate-400 mb-4">Recruitment & Services</p>
                        <p class="text-sm leading-relaxed text-slate-600 mb-auto line-clamp-3">Connecting skilled professionals with leading enterprises.</p>
                        
                        <div class="mt-6 flex flex-col gap-1 w-full">
                            <a href="http://kaika-international.com" target="_blank" class="inline-flex items-center text-sm font-bold uppercase tracking-wider text-emerald-600 hover:gap-2 transition-all">
                                Visit Site <i data-lucide="external-link" class="w-4 h-4 ml-2"></i>
                            </a>
                            <span class="text-[10px] text-slate-400 italic">Opens in new tab</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="reveal-on-scroll" style="transition-delay: 400ms;">
    <div class="group relative h-96 rounded-2xl overflow-hidden border border-slate-200 bg-white transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl flex flex-col">

        <!-- Hover Background Image -->
        <div class="absolute inset-0 z-0 opacity-0 group-hover:opacity-100 transition-opacity duration-700">
            <img src="../blog/uploads/Kaika_travels.png"
                 class="w-full h-full object-cover" alt="Travel & Tourism">
            <div class="absolute inset-0 bg-gradient-to-t from-white via-white/90 to-transparent opacity-95"></div>
        </div>

        <!-- Card Content -->
        <div class="relative z-10 p-8 h-full flex flex-col items-start">

            <!-- Icon -->
            <div class="w-14 h-14 rounded-xl bg-sky-100 text-sky-600 flex items-center justify-center mb-6 transition-transform group-hover:scale-110 duration-500">
                <i data-lucide="map" class="w-6 h-6"></i>
            </div>

            <!-- Title -->
            <h4 class="text-2xl font-bold mb-2 text-slate-900 group-hover:text-sky-600 transition-colors">
                Kaika Travel & Tourism
            </h4>

            <!-- Category -->
            <p class="text-sm font-bold uppercase tracking-wider text-slate-400 mb-4">
                Travel & Tourism Services
            </p>

            <!-- Description -->
            <p class="text-sm leading-relaxed text-slate-600 mb-auto line-clamp-3">
                Delivering personalized travel experiences, tour planning, and destination management.
            </p>

            <!-- Link -->
            <div class="mt-6 flex flex-col gap-1 w-full">
                <a href="https://kaika-international.com"
                   target="_blank"
                   class="inline-flex items-center text-sm font-bold uppercase tracking-wider text-sky-600 hover:gap-2 transition-all">
                    Visit Site
                    <i data-lucide="external-link" class="w-4 h-4 ml-2"></i>
                </a>
            </div>

        </div>
    </div>
</div>

        </div>
    </div>
</section>

    <!-- GLOBAL NETWORK (Updated with Interactive Map & Country Cards) -->
    <!-- GLOBAL PRESENCE SECTION -->
<!-- GLOBAL NETWORK SECTION -->
<section id="global" class="py-32 relative overflow-hidden bg-slate-900 text-white">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-slate-700 via-slate-900 to-black"></div>
    <div class="absolute inset-0 tech-grid opacity-10"></div>

    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
        <!-- Section Header -->
        <div class="flex flex-col md:flex-row justify-between items-end mb-12 reveal-on-scroll">
            <div>
                <h2 class="text-brand-red font-bold tracking-widest uppercase text-sm mb-4">Global Network</h2>
                <h3 class="text-4xl md:text-5xl font-black">
                    <span class="text-white">Our Global</span><br/>
                    <span class="gradient-text">Operational Footprint</span>
                </h3>
            </div>
            <div class="flex gap-2">
               <div class="h-px w-20 bg-brand-red"></div>
            </div>
        </div>

        <!-- Interactive Map Container (Desktop) -->
        <div class="hidden md:block relative w-full aspect-[2/1] bg-slate-800/50 rounded-2xl border border-white/10 shadow-2xl overflow-hidden reveal-on-scroll mb-16">
            
            <!-- Map Image Base -->
            <img src="https://upload.wikimedia.org/wikipedia/commons/8/80/World_map_-_low_resolution.svg" 
                 class="absolute inset-0 w-full h-full object-cover opacity-30 mix-blend-screen" 
                 alt="Interactive World Map">
            
            <!-- Hotspot: Tokyo/Chiba (Japan) - Headquarters -->
            <div class="absolute top-[32%] left-[84%] group" style="transform: translate(-50%, -50%);">
                <div class="relative flex items-center justify-center w-8 h-8 cursor-pointer">
                    <span class="absolute inline-flex h-full w-full rounded-full bg-brand-red opacity-30 animate-ping"></span>
                    <span class="relative inline-flex rounded-full h-3 w-3 bg-brand-red shadow-[0_0_15px_rgba(211,47,47,0.8)]"></span>
                </div>
                <!-- Tooltip Card -->
                <div class="absolute bottom-full left-1/2 -translate-x-1/2 mb-4 w-64 bg-white text-slate-900 p-5 rounded-lg shadow-2xl opacity-0 translate-y-2 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 pointer-events-none z-20">
                    <div class="absolute -bottom-2 left-1/2 -translate-x-1/2 w-4 h-4 bg-white rotate-45"></div>
                    <div class="flex items-start justify-between mb-2">
                        <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">HEADQUARTERS</span>
                        <img src="https://upload.wikimedia.org/wikipedia/en/9/9e/Flag_of_Japan.svg" class="w-6 border border-slate-200">
                    </div>
                    <h4 class="text-lg font-bold text-brand-red mb-1">Tokyo / Chiba, Japan</h4>
                    <p class="text-xs text-slate-600 leading-relaxed">Global headquarters and strategic operations center.</p>
                </div>
            </div>

            <!-- Hotspot: Colombo (Sri Lanka) -->
            <div class="absolute top-[56%] left-[71%] group" style="transform: translate(-50%, -50%);">
                <div class="relative flex items-center justify-center w-8 h-8 cursor-pointer">
                    <span class="absolute inline-flex h-full w-full rounded-full bg-brand-red opacity-30 animate-ping" style="animation-delay: 0.5s;"></span>
                    <span class="relative inline-flex rounded-full h-3 w-3 bg-brand-red shadow-[0_0_15px_rgba(211,47,47,0.8)]"></span>
                </div>
                <div class="absolute bottom-full left-1/2 -translate-x-1/2 mb-4 w-64 bg-white text-slate-900 p-5 rounded-lg shadow-2xl opacity-0 translate-y-2 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 pointer-events-none z-20">
                    <div class="absolute -bottom-2 left-1/2 -translate-x-1/2 w-4 h-4 bg-white rotate-45"></div>
                    <div class="flex items-start justify-between mb-2">
                        <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">REGIONAL OPS</span>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/1/11/Flag_of_Sri_Lanka.svg" class="w-6 border border-slate-200">
                    </div>
                    <h4 class="text-lg font-bold text-brand-red mb-1">Colombo, Sri Lanka</h4>
                    <p class="text-xs text-slate-600 leading-relaxed">Key logistics and operational hub for South Asia.</p>
                </div>
            </div>

            <!-- Hotspot: Singapore -->
            <div class="absolute top-[60%] left-[76%] group" style="transform: translate(-50%, -50%);">
                <div class="relative flex items-center justify-center w-8 h-8 cursor-pointer">
                    <span class="absolute inline-flex h-full w-full rounded-full bg-brand-red opacity-30 animate-ping" style="animation-delay: 0.2s;"></span>
                    <span class="relative inline-flex rounded-full h-3 w-3 bg-brand-red shadow-[0_0_15px_rgba(211,47,47,0.8)]"></span>
                </div>
                <div class="absolute bottom-full left-1/2 -translate-x-1/2 mb-4 w-64 bg-white text-slate-900 p-5 rounded-lg shadow-2xl opacity-0 translate-y-2 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 pointer-events-none z-20">
                    <div class="absolute -bottom-2 left-1/2 -translate-x-1/2 w-4 h-4 bg-white rotate-45"></div>
                    <div class="flex items-start justify-between mb-2">
                        <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">FINANCIAL HUB</span>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/4/48/Flag_of_Singapore.svg" class="w-6 border border-slate-200">
                    </div>
                    <h4 class="text-lg font-bold text-brand-red mb-1">Singapore</h4>
                    <p class="text-xs text-slate-600 leading-relaxed">Regional finance and trade facilitation center.</p>
                </div>
            </div>

            <!-- Hotspot: Melbourne (Australia) -->
            <div class="absolute top-[80%] left-[88%] group" style="transform: translate(-50%, -50%);">
                <div class="relative flex items-center justify-center w-8 h-8 cursor-pointer">
                    <span class="absolute inline-flex h-full w-full rounded-full bg-brand-red opacity-30 animate-ping" style="animation-delay: 1s;"></span>
                    <span class="relative inline-flex rounded-full h-3 w-3 bg-brand-red shadow-[0_0_15px_rgba(211,47,47,0.8)]"></span>
                </div>
                <div class="absolute bottom-full left-1/2 -translate-x-1/2 mb-4 w-64 bg-white text-slate-900 p-5 rounded-lg shadow-2xl opacity-0 translate-y-2 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 pointer-events-none z-20">
                    <div class="absolute -bottom-2 left-1/2 -translate-x-1/2 w-4 h-4 bg-white rotate-45"></div>
                    <div class="flex items-start justify-between mb-2">
                        <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">PACIFIC DIV</span>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/b/b9/Flag_of_Australia.svg" class="w-6 border border-slate-200">
                    </div>
                    <h4 class="text-lg font-bold text-brand-red mb-1">Melbourne, Australia</h4>
                    <p class="text-xs text-slate-600 leading-relaxed">Oceania operations and distribution center.</p>
                </div>
            </div>

            <!-- Hotspot: Guinea (Africa) -->
            <div class="absolute top-[56%] left-[48%] group" style="transform: translate(-50%, -50%);">
                <div class="relative flex items-center justify-center w-8 h-8 cursor-pointer">
                    <span class="absolute inline-flex h-full w-full rounded-full bg-brand-red opacity-30 animate-ping" style="animation-delay: 0.7s;"></span>
                    <span class="relative inline-flex rounded-full h-3 w-3 bg-brand-red shadow-[0_0_15px_rgba(211,47,47,0.8)]"></span>
                </div>
                <div class="absolute bottom-full left-1/2 -translate-x-1/2 mb-4 w-64 bg-white text-slate-900 p-5 rounded-lg shadow-2xl opacity-0 translate-y-2 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 pointer-events-none z-20">
                    <div class="absolute -bottom-2 left-1/2 -translate-x-1/2 w-4 h-4 bg-white rotate-45"></div>
                    <div class="flex items-start justify-between mb-2">
                        <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">AFRICA DIV</span>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/e/ed/Flag_of_Guinea.svg" class="w-6 border border-slate-200">
                    </div>
                    <h4 class="text-lg font-bold text-brand-red mb-1">Guinea, Africa</h4>
                    <p class="text-xs text-slate-600 leading-relaxed">West African operations and strategic gateway.</p>
                </div>
            </div>

        </div>

        <!-- Countries We Operate Section -->
        <div class="reveal-on-scroll">
            <div class="text-center mb-12">
                <h4 class="text-3xl md:text-4xl font-black mb-3">
                    <span class="text-white">Countries We</span>
                    <span class="gradient-text"> Operate</span>
                </h4>
                <p class="text-slate-400 text-lg">Building bridges across continents with Japanese excellence</p>
            </div>

            <!-- Country Cards Grid - 5 Countries -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8">
                
                <!-- Japan (Tokyo/Chiba) - HEADQUARTERS -->
                <div class="group relative bg-gradient-to-br from-white/10 to-white/5 backdrop-blur-sm border border-white/20 rounded-2xl p-8 hover:bg-white/15 hover:border-brand-red/50 transition-all duration-300 hover:-translate-y-3 hover:shadow-[0_0_40px_rgba(211,47,47,0.4)]">
                    <div class="flex flex-col items-center text-center">
                        <!-- Flag Circle -->
                        <div class="relative mb-6">
                            <div class="w-20 h-20 rounded-full bg-white/10 flex items-center justify-center group-hover:scale-110 transition-transform duration-300 overflow-hidden border-3 border-white/30 shadow-lg">
                                <img src="https://upload.wikimedia.org/wikipedia/en/9/9e/Flag_of_Japan.svg" class="w-full h-full object-cover" alt="Japan Flag">
                            </div>
                            <div class="absolute -top-2 -right-2 w-6 h-6 bg-brand-red rounded-full flex items-center justify-center">
                                <i data-lucide="building-2" class="w-3 h-3 text-white"></i>
                            </div>
                        </div>
                        
                        <!-- Country Name -->
                        <h5 class="font-black text-2xl mb-2 text-white">Japan</h5>
                        
                        <!-- Badge -->
                        <div class="inline-flex items-center gap-2 px-3 py-1 bg-brand-red/20 border border-brand-red/50 rounded-full mb-3">
                            <span class="w-2 h-2 bg-brand-red rounded-full animate-pulse"></span>
                            <span class="text-xs uppercase tracking-widest text-brand-red font-bold">Headquarters</span>
                        </div>
                        
                        <!-- Location -->
                        <p class="text-sm text-slate-300 mb-3 font-semibold">Tokyo / Chiba</p>
                        
                        <!-- Description -->
                        <p class="text-xs text-slate-400 leading-relaxed">Global headquarters and strategic operations center</p>
                    </div>
                </div>

                <!-- Sri Lanka (Colombo) -->
                <div class="group relative bg-gradient-to-br from-white/10 to-white/5 backdrop-blur-sm border border-white/20 rounded-2xl p-8 hover:bg-white/15 hover:border-orange-500/50 transition-all duration-300 hover:-translate-y-3 hover:shadow-[0_0_40px_rgba(251,146,60,0.4)]">
                    <div class="flex flex-col items-center text-center">
                        <!-- Flag Circle -->
                        <div class="relative mb-6">
                            <div class="w-20 h-20 rounded-full bg-white/10 flex items-center justify-center group-hover:scale-110 transition-transform duration-300 overflow-hidden border-3 border-white/30 shadow-lg">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/1/11/Flag_of_Sri_Lanka.svg" class="w-full h-full object-cover" alt="Sri Lanka Flag">
                            </div>
                            <div class="absolute -top-2 -right-2 w-6 h-6 bg-orange-500 rounded-full flex items-center justify-center">
                                <i data-lucide="package" class="w-3 h-3 text-white"></i>
                            </div>
                        </div>
                        
                        <!-- Country Name -->
                        <h5 class="font-black text-2xl mb-2 text-white">Sri Lanka</h5>
                        
                        <!-- Badge -->
                        <div class="inline-flex items-center gap-2 px-3 py-1 bg-orange-500/20 border border-orange-500/50 rounded-full mb-3">
                            <span class="w-2 h-2 bg-orange-500 rounded-full animate-pulse"></span>
                            <span class="text-xs uppercase tracking-widest text-orange-400 font-bold">Operations</span>
                        </div>
                        
                        <!-- Location -->
                        <p class="text-sm text-slate-300 mb-3 font-semibold">Colombo</p>
                        
                        <!-- Description -->
                        <p class="text-xs text-slate-400 leading-relaxed">Key logistics and operational hub for South Asia</p>
                    </div>
                </div>

                <!-- Singapore -->
                <div class="group relative bg-gradient-to-br from-white/10 to-white/5 backdrop-blur-sm border border-white/20 rounded-2xl p-8 hover:bg-white/15 hover:border-blue-500/50 transition-all duration-300 hover:-translate-y-3 hover:shadow-[0_0_40px_rgba(59,130,246,0.4)]">
                    <div class="flex flex-col items-center text-center">
                        <!-- Flag Circle -->
                        <div class="relative mb-6">
                            <div class="w-20 h-20 rounded-full bg-white/10 flex items-center justify-center group-hover:scale-110 transition-transform duration-300 overflow-hidden border-3 border-white/30 shadow-lg">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/4/48/Flag_of_Singapore.svg" class="w-full h-full object-cover" alt="Singapore Flag">
                            </div>
                            <div class="absolute -top-2 -right-2 w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center">
                                <i data-lucide="landmark" class="w-3 h-3 text-white"></i>
                            </div>
                        </div>
                        
                        <!-- Country Name -->
                        <h5 class="font-black text-2xl mb-2 text-white">Singapore</h5>
                        
                        <!-- Badge -->
                        <div class="inline-flex items-center gap-2 px-3 py-1 bg-blue-500/20 border border-blue-500/50 rounded-full mb-3">
                            <span class="w-2 h-2 bg-blue-500 rounded-full animate-pulse"></span>
                            <span class="text-xs uppercase tracking-widest text-blue-400 font-bold">Financial Hub</span>
                        </div>
                        
                        <!-- Location -->
                        <p class="text-sm text-slate-300 mb-3 font-semibold">Singapore City</p>
                        
                        <!-- Description -->
                        <p class="text-xs text-slate-400 leading-relaxed">Regional finance and trade facilitation center</p>
                    </div>
                </div>

                <!-- Australia (Melbourne) -->
                <div class="group relative bg-gradient-to-br from-white/10 to-white/5 backdrop-blur-sm border border-white/20 rounded-2xl p-8 hover:bg-white/15 hover:border-emerald-500/50 transition-all duration-300 hover:-translate-y-3 hover:shadow-[0_0_40px_rgba(16,185,129,0.4)]">
                    <div class="flex flex-col items-center text-center">
                        <!-- Flag Circle -->
                        <div class="relative mb-6">
                            <div class="w-20 h-20 rounded-full bg-white/10 flex items-center justify-center group-hover:scale-110 transition-transform duration-300 overflow-hidden border-3 border-white/30 shadow-lg">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/b/b9/Flag_of_Australia.svg" class="w-full h-full object-cover" alt="Australia Flag">
                            </div>
                            <div class="absolute -top-2 -right-2 w-6 h-6 bg-emerald-500 rounded-full flex items-center justify-center">
                                <i data-lucide="globe" class="w-3 h-3 text-white"></i>
                            </div>
                        </div>
                        
                        <!-- Country Name -->
                        <h5 class="font-black text-2xl mb-2 text-white">Australia</h5>
                        
                        <!-- Badge -->
                        <div class="inline-flex items-center gap-2 px-3 py-1 bg-emerald-500/20 border border-emerald-500/50 rounded-full mb-3">
                            <span class="w-2 h-2 bg-emerald-500 rounded-full animate-pulse"></span>
                            <span class="text-xs uppercase tracking-widest text-emerald-400 font-bold">Pacific Division</span>
                        </div>
                        
                        <!-- Location -->
                        <p class="text-sm text-slate-300 mb-3 font-semibold">Melbourne</p>
                        
                        <!-- Description -->
                        <p class="text-xs text-slate-400 leading-relaxed">Oceania operations and distribution center</p>
                    </div>
                </div>

                <!-- Guinea (Africa) -->
                <div class="group relative bg-gradient-to-br from-white/10 to-white/5 backdrop-blur-sm border border-white/20 rounded-2xl p-8 hover:bg-white/15 hover:border-amber-500/50 transition-all duration-300 hover:-translate-y-3 hover:shadow-[0_0_40px_rgba(245,158,11,0.4)]">
                    <div class="flex flex-col items-center text-center">
                        <!-- Flag Circle -->
                        <div class="relative mb-6">
                            <div class="w-20 h-20 rounded-full bg-white/10 flex items-center justify-center group-hover:scale-110 transition-transform duration-300 overflow-hidden border-3 border-white/30 shadow-lg">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/e/ed/Flag_of_Guinea.svg" class="w-full h-full object-cover" alt="Guinea Flag">
                            </div>
                            <div class="absolute -top-2 -right-2 w-6 h-6 bg-amber-500 rounded-full flex items-center justify-center">
                                <i data-lucide="map-pin" class="w-3 h-3 text-white"></i>
                            </div>
                        </div>
                        
                        <!-- Country Name -->
                        <h5 class="font-black text-2xl mb-2 text-white">Guinea</h5>
                        
                        <!-- Badge -->
                        <div class="inline-flex items-center gap-2 px-3 py-1 bg-amber-500/20 border border-amber-500/50 rounded-full mb-3">
                            <span class="w-2 h-2 bg-amber-500 rounded-full animate-pulse"></span>
                            <span class="text-xs uppercase tracking-widest text-amber-400 font-bold">Africa Gateway</span>
                        </div>
                        
                        <!-- Location -->
                        <p class="text-sm text-slate-300 mb-3 font-semibold">West Africa</p>
                        
                        <!-- Description -->
                        <p class="text-xs text-slate-400 leading-relaxed">West African operations and strategic gateway</p>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

<!-- NEWS (Dynamic Section) -->
<section id="news" class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="flex items-center justify-between mb-12 reveal-on-scroll">
            <h3 class="text-3xl font-bold text-slate-900">Corporate Updates</h3>
            <a href="blog/index.php" class="text-brand-red font-bold text-sm uppercase tracking-wider flex items-center gap-2 hover:gap-3 transition-all">
                View All <i data-lucide="arrow-right" class="w-4 h-4"></i>
            </a>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <?php if (!empty($latestPosts)): ?>
                <?php foreach ($latestPosts as $index => $post): ?>
                <!-- News <?php echo $index + 1; ?> -->
                <article class="reveal-on-scroll group cursor-pointer" style="transition-delay: <?php echo $index * 100; ?>ms;">
                    <a href="blog/post.php?slug=<?php echo htmlspecialchars($post['slug']); ?>">
                        <div class="relative overflow-hidden rounded-lg mb-4 h-60">
                            <img src="<?php echo htmlspecialchars($post['featured_image']); ?>" 
                                 alt="<?php echo htmlspecialchars($post['title']); ?>" 
                                 class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                            <div class="absolute top-4 left-4 <?php echo getCategoryColor($post['category']); ?> text-white text-xs font-bold px-3 py-1 rounded-sm">
                                <?php echo htmlspecialchars($post['category']); ?>
                            </div>
                        </div>
                        <span class="text-xs text-slate-400 uppercase tracking-widest font-bold">
                            <?php echo formatDate($post['published_at'], 'M d, Y'); ?>
                        </span>
                        <h4 class="text-xl font-bold mt-2 mb-2 group-hover:text-brand-red transition-colors">
                            <?php echo htmlspecialchars($post['title']); ?>
                        </h4>
                        <p class="text-slate-600 text-sm leading-relaxed line-clamp-2">
                            <?php echo htmlspecialchars($post['excerpt']); ?>
                        </p>
                    </a>
                </article>
                <?php endforeach; ?>
            <?php else: ?>
                <!-- Fallback if no posts exist -->
                <div class="col-span-3 text-center py-12">
                    <i data-lucide="inbox" class="w-16 h-16 text-slate-300 mx-auto mb-4"></i>
                    <p class="text-slate-500 text-lg font-medium">No blog posts yet</p>
                    <p class="text-slate-400 mt-2">Check back soon for corporate updates</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

    <!-- PARTNER CTA (New Section 5) -->
    <section class="relative py-20 bg-slate-900 overflow-hidden">
        <div class="absolute inset-0 opacity-20">
             <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&q=80&w=2000" class="w-full h-full object-cover mix-blend-overlay">
        </div>
        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10 text-center reveal-on-scroll">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Looking for a Trusted Japanese Partner?</h2>
            <p class="text-slate-300 text-lg max-w-2xl mx-auto mb-10 leading-relaxed">
                We are constantly seeking new investment opportunities and partnerships to expand our global reach. Let's build the future together.
            </p>
            <button onclick="window.location.href='contact.php';"  class="px-8 py-4 bg-white text-slate-900 font-bold uppercase tracking-widest hover:bg-brand-red hover:text-white transition-all shadow-[0_0_20px_rgba(255,255,255,0.2)] rounded-sm">
                Discuss Collaboration
            </button>
        </div>
    </section>

    <!-- FOOTER -->
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

    <!-- JAVASCRIPT LOGIC -->
    <script>
        // --- Initialize Lucide Icons ---
        lucide.createIcons();

        // --- Data ---
        const slidesData = [
            { title: "Kaika Holdings", subtitle: "Connecting Japan to the World" },
            { title: "Global Logistics", subtitle: "Seamless Supply Chains Across Borders" },
            { title: "Kamikura", subtitle: "Authentic Japanese Dining Experience" },
            { title: "Kaika School", subtitle: "Language & Cultural Education" },
            { title: "Kaika International", subtitle: "Premium Vehicle Trading Platform" }
        ];

        // --- Hero Slider Logic ---
        const slides = document.querySelectorAll('.hero-slide');
        const heroTitle = document.getElementById('hero-title');
        const heroSubtitle = document.getElementById('hero-subtitle');
        const indicatorsContainer = document.getElementById('slide-indicators');
        let currentSlide = 0;

        // Create Indicators
        slidesData.forEach((_, index) => {
            const btn = document.createElement('button');
            btn.className = `h-1 transition-all duration-300 ${index === 0 ? 'w-12 bg-brand-red' : 'w-6 bg-white/30 hover:bg-white/60'}`;
            btn.onclick = () => setSlide(index);
            indicatorsContainer.appendChild(btn);
        });

        const indicators = indicatorsContainer.querySelectorAll('button');

        function setSlide(index) {
            // Reset Interval
            clearInterval(slideInterval);
            slideInterval = setInterval(nextSlide, 5000);
            
            // Update UI
            updateSlideUI(index);
        }

        function updateSlideUI(index) {
            // Hide prev, Show current
            slides.forEach((slide, i) => {
                if(i === index) {
                    slide.classList.remove('opacity-0', 'z-0');
                    slide.classList.add('opacity-100', 'z-10');
                } else {
                    slide.classList.remove('opacity-100', 'z-10');
                    slide.classList.add('opacity-0', 'z-0');
                }
            });

            // Update Text
            heroTitle.style.opacity = '0';
            heroSubtitle.style.opacity = '0';
            heroTitle.style.transform = 'translateY(10px)';
            
            setTimeout(() => {
                heroTitle.innerText = slidesData[index].title;
                heroSubtitle.innerText = slidesData[index].subtitle;
                heroTitle.style.opacity = '1';
                heroSubtitle.style.opacity = '1';
                heroTitle.style.transform = 'translateY(0)';
            }, 300);

            // Update Indicators
            indicators.forEach((btn, i) => {
                btn.className = `h-1 transition-all duration-300 ${i === index ? 'w-12 bg-brand-red' : 'w-6 bg-white/30 hover:bg-white/60'}`;
            });

            currentSlide = index;
        }

        function nextSlide() {
            let next = (currentSlide + 1) % slides.length;
            updateSlideUI(next);
        }

        let slideInterval = setInterval(nextSlide, 5000);

        // --- Navbar Scroll Logic ---
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

        // --- Mobile Menu Toggle ---
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // --- Scroll Reveal Logic ---
        const revealElements = document.querySelectorAll('.reveal-on-scroll');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                }
            });
        }, { threshold: 0.1 });

        revealElements.forEach((el) => observer.observe(el));

    </script>
</body>
</html>
