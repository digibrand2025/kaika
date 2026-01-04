<?php 
$page_title = "ABOUT US - KAIKA HOLDINGS";
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
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
        
        /* Utility Classes */
        .animate-fade-in-up {
            animation: fade-in-up 0.8s ease-out forwards;
        }
        .animate-ken-burns {
            animation: ken-burns 20s ease-out infinite alternate;
        }
        .animate-float {
            animation: float 3s ease-in-out infinite;
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
        

        /* Timeline Line */
        .timeline-line::before {
            content: '';
            position: absolute;
            left: 50%;
            top: 0;
            bottom: 0;
            width: 2px;
            background: linear-gradient(to bottom, transparent, #D32F2F, transparent);
            transform: translateX(-50%);
        }

        /* Gradient Text */
        .gradient-text {
            background: linear-gradient(135deg, #D32F2F 0%, #F44336 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        section.py-24.bg-slate-900.text-white.relative.overflow-hidden {
    padding-top: 2rem;
}
    </style>

    <!-- HERO SECTION -->
    <section class="relative h-[70vh] w-full overflow-hidden bg-slate-900">
        <div class="absolute inset-0 overflow-hidden">
            <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&q=80&w=2000" class="w-full h-full object-cover animate-ken-burns" alt="Corporate Building">
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-slate-900 via-slate-900/90 to-red-900/80"></div>
        
        <div class="absolute inset-0 z-20 flex items-center">
            <div class="max-w-7xl mx-auto px-6 lg:px-8 w-full">
                <div class="max-w-3xl space-y-6 animate-fade-in-up">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="h-px w-12 bg-brand-red"></span>
                        <span class="text-brand-red font-bold tracking-widest uppercase text-sm">About Kaika Holdings</span>
                    </div>
                    
                    <h1 class="text-5xl md:text-7xl font-bold text-white leading-tight text-glow">
                        Building Bridges<br/>Across Borders
                    </h1>
                    
                    <p class="text-xl md:text-2xl text-slate-100 mt-6 max-w-2xl font-light leading-relaxed">
                        A legacy of trust, innovation, and Japanese excellence since our inception
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- BREADCRUMB -->
    <div class="bg-slate-50 border-b border-slate-200 py-4">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex items-center gap-2 text-sm text-slate-600">
                <a href="index.html" class="hover:text-brand-red transition-colors">Home</a>
                <i data-lucide="chevron-right" class="w-4 h-4"></i>
                <span class="text-brand-red font-medium">About Company</span>
            </div>
        </div>
    </div>

    <!-- COMPANY OVERVIEW -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-16 items-center">
                <div class="reveal-on-scroll">
                    <h2 class="text-brand-red font-bold tracking-widest uppercase text-sm mb-4">Who We Are</h2>
                    <h3 class="text-4xl md:text-5xl font-bold mb-6 leading-tight text-slate-900">
                        The Kaika Holdings<br/>Story
                    </h3>
                    <div class="space-y-4 text-lg text-slate-600 leading-relaxed">
                        <p>
                            Founded in Japan in 2007 under visionary Japanese management, Kaika has evolved into a dynamic bridge connecting international markets. Our significant expansion into Sri Lanka in 2015 marked a new chapter in our history, allowing us to bring our operational expertise and cultural values to a growing South Asian audience.
                        </p>
                        <p>
                            Our name, <span class="font-bold text-brand-red">"Kaika" (開花)</span>, meaning "to bloom" or "to flower," reflects our philosophy of cultivating growth and prosperity wherever we establish our presence.
                        </p>
                        <p>
                          Driven by a dedicated team of over 100 employees, we offer a diverse portfolio of services that span industries and borders. From vehicle import and export to expert carrier consulting, and from delivering authentic culinary experiences in our restaurants to empowering students through our Japanese language school, we maintain the highest standards of quality and integrity that Japan is renowned for worldwide.
                        </p>
                    </div>

                    <div class="mt-10 grid grid-cols-2 gap-6">
                        <div class="border-l-4 border-brand-red pl-4">
                            <div class="text-3xl font-black text-slate-900 mb-1">2007</div>
                            <div class="text-sm text-slate-500 uppercase tracking-wider">Established</div>
                        </div>
                        <div class="border-l-4 border-brand-red pl-4">
                            <div class="text-3xl font-black text-slate-900 mb-1">100+</div>
                            <div class="text-sm text-slate-500 uppercase tracking-wider">Team Members</div>
                        </div>
                    </div>
                </div>

                <div class="reveal-on-scroll" style="transition-delay: 200ms;">
                    <div class="relative">
                        <div class="absolute -inset-4 bg-gradient-to-r from-red-600 to-orange-600 rounded-2xl blur-2xl opacity-20"></div>
                        <div class="relative grid grid-cols-2 gap-4">
                            <div class="space-y-4">
                                <div class="rounded-2xl overflow-hidden shadow-xl h-64">
                                    <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&q=80&w=600" class="w-full h-full object-cover" alt="Office">
                                </div>
                                <div class="rounded-2xl overflow-hidden shadow-xl h-48">
                                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&q=80&w=600" class="w-full h-full object-cover" alt="Team">
                                </div>
                            </div>
                            <div class="space-y-4 pt-12">
                                <div class="rounded-2xl overflow-hidden shadow-xl h-48">
                                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&q=80&w=600" class="w-full h-full object-cover" alt="Strategy">
                                </div>
                                <div class="rounded-2xl overflow-hidden shadow-xl h-64">
                                    <img src="https://images.unsplash.com/photo-1493976040374-85c8e12f0c0e?auto=format&fit=crop&q=80&w=600" class="w-full h-full object-cover" alt="Japan">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MISSION & VISION -->
    <section class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16 reveal-on-scroll">
                <h2 class="text-brand-red font-bold tracking-widest uppercase text-sm mb-4">Our Purpose</h2>
                <h3 class="text-4xl md:text-5xl font-bold mb-6 text-slate-900">Mission & Vision</h3>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                <div class="reveal-on-scroll bg-white rounded-2xl p-10 shadow-xl border border-slate-100 hover:shadow-2xl transition-all duration-500 group">
                    <div class="w-16 h-16 rounded-full bg-red-100 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i data-lucide="target" class="w-8 h-8 text-brand-red"></i>
                    </div>
                    <h4 class="text-2xl font-bold mb-4 text-slate-900">Our Mission</h4>
                    <p class="text-slate-600 leading-relaxed text-lg">
                        To connect Japanese quality and innovation with global markets through our diverse portfolio of businesses, delivering exceptional value to our partners, customers, and communities while maintaining the highest standards of integrity and service.
                    </p>
                </div>

                <div class="reveal-on-scroll bg-white rounded-2xl p-10 shadow-xl border border-slate-100 hover:shadow-2xl transition-all duration-500 group" style="transition-delay: 200ms;">
                    <div class="w-16 h-16 rounded-full bg-blue-100 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i data-lucide="eye" class="w-8 h-8 text-blue-600"></i>
                    </div>
                    <h4 class="text-2xl font-bold mb-4 text-slate-900">Our Vision</h4>
                    <p class="text-slate-600 leading-relaxed text-lg">
                        To become the most trusted Japanese business conglomerate globally, recognized for excellence across all our subsidiaries and known for creating sustainable value through strategic expansion, innovation, and unwavering commitment to quality.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CORE VALUES -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16 reveal-on-scroll">
                <h2 class="text-brand-red font-bold tracking-widest uppercase text-sm mb-4">What Drives Us</h2>
                <h3 class="text-4xl md:text-5xl font-bold mb-6 text-slate-900">Core Values</h3>
                <p class="text-lg text-slate-500 max-w-2xl mx-auto">
                    These fundamental principles guide every decision we make and every relationship we build
                </p>
            </div>

            <div class="grid md:grid-cols-3 lg:grid-cols-5 gap-6">
                <!-- Value 1 -->
                <div class="reveal-on-scroll text-center p-8 rounded-xl bg-slate-50 hover:bg-white hover:shadow-xl transition-all duration-300 group">
                    <div class="w-20 h-20 mx-auto mb-6 rounded-full bg-white shadow-lg flex items-center justify-center text-3xl font-bold text-slate-800 font-jp group-hover:scale-110 transition-transform">
                        信頼
                    </div>
                    <h4 class="text-xl font-bold mb-2 text-slate-900">Trust</h4>
                    <p class="text-sm text-slate-600 leading-relaxed">Building lasting relationships through honesty and transparency</p>
                </div>

                <!-- Value 2 -->
                <div class="reveal-on-scroll text-center p-8 rounded-xl bg-slate-50 hover:bg-white hover:shadow-xl transition-all duration-300 group" style="transition-delay: 100ms;">
                    <div class="w-20 h-20 mx-auto mb-6 rounded-full bg-white shadow-lg flex items-center justify-center text-3xl font-bold text-slate-800 font-jp group-hover:scale-110 transition-transform">
                        改善
                    </div>
                    <h4 class="text-xl font-bold mb-2 text-slate-900">Kaizen</h4>
                    <p class="text-sm text-slate-600 leading-relaxed">Continuous improvement in everything we do</p>
                </div>

                <!-- Value 3 -->
                <div class="reveal-on-scroll text-center p-8 rounded-xl bg-slate-50 hover:bg-white hover:shadow-xl transition-all duration-300 group" style="transition-delay: 200ms;">
                    <div class="w-20 h-20 mx-auto mb-6 rounded-full bg-white shadow-lg flex items-center justify-center text-3xl font-bold text-slate-800 font-jp group-hover:scale-110 transition-transform">
                        和
                    </div>
                    <h4 class="text-xl font-bold mb-2 text-slate-900">Harmony</h4>
                    <p class="text-sm text-slate-600 leading-relaxed">Growing together with our communities</p>
                </div>

                <!-- Value 4 -->
                <div class="reveal-on-scroll text-center p-8 rounded-xl bg-slate-50 hover:bg-white hover:shadow-xl transition-all duration-300 group" style="transition-delay: 300ms;">
                    <div class="w-20 h-20 mx-auto mb-6 rounded-full bg-white shadow-lg flex items-center justify-center text-3xl font-bold text-slate-800 font-jp group-hover:scale-110 transition-transform">
                        誠実
                    </div>
                    <h4 class="text-xl font-bold mb-2 text-slate-900">Integrity</h4>
                    <p class="text-sm text-slate-600 leading-relaxed">Upholding the highest ethical standards</p>
                </div>

                <!-- Value 5 -->
                <div class="reveal-on-scroll text-center p-8 rounded-xl bg-slate-50 hover:bg-white hover:shadow-xl transition-all duration-300 group" style="transition-delay: 400ms;">
                    <div class="w-20 h-20 mx-auto mb-6 rounded-full bg-white shadow-lg flex items-center justify-center text-3xl font-bold text-slate-800 font-jp group-hover:scale-110 transition-transform">
                        革新
                    </div>
                    <h4 class="text-xl font-bold mb-2 text-slate-900">Innovation</h4>
                    <p class="text-sm text-slate-600 leading-relaxed">Embracing change and pioneering solutions</p>
                </div>
            </div>
        </div>
    </section>

    <!-- COMPANY TIMELINE -->
<!-- COMPANY TIMELINE SECTION -->
<section class="py-24 bg-slate-900 text-white relative overflow-hidden">
    <div class="absolute inset-0 opacity-5 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-slate-700 via-slate-900 to-black"></div>
    <div class="absolute inset-0 tech-grid opacity-5"></div>
    
    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">

        <!-- Timeline Stats -->
        <div class="mt-20 grid grid-cols-2 md:grid-cols-4 gap-6 reveal-on-scroll">
            <div class="text-center p-6 bg-gradient-to-br from-white/10 to-white/5 backdrop-blur-sm rounded-xl border border-white/20 hover:border-brand-red/50 transition-all hover:-translate-y-2 hover:shadow-[0_0_30px_rgba(211,47,47,0.3)]">
                <div class="text-4xl font-black text-brand-red mb-2">10+</div>
                <div class="text-sm text-slate-400 uppercase tracking-wider">Years of Excellence</div>
            </div>
            <div class="text-center p-6 bg-gradient-to-br from-white/10 to-white/5 backdrop-blur-sm rounded-xl border border-white/20 hover:border-orange-500/50 transition-all hover:-translate-y-2 hover:shadow-[0_0_30px_rgba(249,115,22,0.3)]">
                <div class="text-4xl font-black text-orange-500 mb-2">7</div>
                <div class="text-sm text-slate-400 uppercase tracking-wider">Subsidiaries</div>
            </div>
            <div class="text-center p-6 bg-gradient-to-br from-white/10 to-white/5 backdrop-blur-sm rounded-xl border border-white/20 hover:border-emerald-500/50 transition-all hover:-translate-y-2 hover:shadow-[0_0_30px_rgba(16,185,129,0.3)]">
                <div class="text-4xl font-black text-emerald-500 mb-2">5</div>
                <div class="text-sm text-slate-400 uppercase tracking-wider">Countries</div>
            </div>
            <div class="text-center p-6 bg-gradient-to-br from-white/10 to-white/5 backdrop-blur-sm rounded-xl border border-white/20 hover:border-blue-500/50 transition-all hover:-translate-y-2 hover:shadow-[0_0_30px_rgba(59,130,246,0.3)]">
                <div class="text-4xl font-black text-blue-500 mb-2">100+</div>
                <div class="text-sm text-slate-400 uppercase tracking-wider">Team Members</div>
            </div>
        </div>
    </div>
</section>

<!-- ORGANIZATIONAL STRUCTURE -->
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-16 reveal-on-scroll">
            <h2 class="text-brand-red font-bold tracking-widest uppercase text-sm mb-4">Our Structure</h2>
            <h3 class="text-4xl md:text-5xl font-bold mb-6 text-slate-900">Business Divisions</h3>
            <p class="text-lg text-slate-600 max-w-2xl mx-auto">
                Seven specialized subsidiaries delivering excellence across diverse industries
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Division 1 - Hospitality -->
            <div class="reveal-on-scroll group bg-gradient-to-br from-slate-50 to-white border border-slate-200 rounded-2xl p-8 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                <div class="w-16 h-16 bg-gradient-to-br from-red-500 to-orange-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <i data-lucide="utensils" class="w-8 h-8 text-white"></i>
                </div>
                <h4 class="text-2xl font-bold text-slate-900 mb-3">Hospitality</h4>
                <p class="text-slate-600 mb-4 leading-relaxed">Authentic Japanese dining experiences</p>
                <div class="flex items-center gap-2 text-sm text-slate-500">
                    <i data-lucide="building-2" class="w-4 h-4"></i>
                    <span>Kamikura Restaurant</span>
                </div>
            </div>

            <!-- Division 2 - Electronics -->
            <div class="reveal-on-scroll group bg-gradient-to-br from-slate-50 to-white border border-slate-200 rounded-2xl p-8 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2" style="transition-delay: 100ms;">
                <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-cyan-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <i data-lucide="monitor" class="w-8 h-8 text-white"></i>
                </div>
                <h4 class="text-2xl font-bold text-slate-900 mb-3">Electronics</h4>
                <p class="text-slate-600 mb-4 leading-relaxed">High-quality electronics distribution</p>
                <div class="flex items-center gap-2 text-sm text-slate-500">
                    <i data-lucide="building-2" class="w-4 h-4"></i>
                    <span>Legend Pvt Ltd</span>
                </div>
            </div>

            <!-- Division 3 - Vehicle Trading -->
            <div class="reveal-on-scroll group bg-gradient-to-br from-slate-50 to-white border border-slate-200 rounded-2xl p-8 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2" style="transition-delay: 200ms;">
                <div class="w-16 h-16 bg-gradient-to-br from-emerald-500 to-teal-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <i data-lucide="car" class="w-8 h-8 text-white"></i>
                </div>
                <h4 class="text-2xl font-bold text-slate-900 mb-3">Vehicle Trading</h4>
                <p class="text-slate-600 mb-4 leading-relaxed">Global automotive export & distribution</p>
                <div class="flex items-center gap-2 text-sm text-slate-500">
                    <i data-lucide="building-2" class="w-4 h-4"></i>
                    <span>Kaika International</span>
                </div>
            </div>

            <!-- Division 4 - Logistics -->
            <div class="reveal-on-scroll group bg-gradient-to-br from-slate-50 to-white border border-slate-200 rounded-2xl p-8 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2" style="transition-delay: 300ms;">
                <div class="w-16 h-16 bg-gradient-to-br from-cyan-500 to-blue-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <i data-lucide="truck" class="w-8 h-8 text-white"></i>
                </div>
                <h4 class="text-2xl font-bold text-slate-900 mb-3">Logistics</h4>
                <p class="text-slate-600 mb-4 leading-relaxed">Comprehensive supply chain solutions</p>
                <div class="flex items-center gap-2 text-sm text-slate-500">
                    <i data-lucide="building-2" class="w-4 h-4"></i>
                    <span>Kaika Logistics</span>
                </div>
            </div>

            <!-- Division 5 - Education -->
            <div class="reveal-on-scroll group bg-gradient-to-br from-slate-50 to-white border border-slate-200 rounded-2xl p-8 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2" style="transition-delay: 400ms;">
                <div class="w-16 h-16 bg-gradient-to-br from-amber-500 to-orange-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <i data-lucide="graduation-cap" class="w-8 h-8 text-white"></i>
                </div>
                <h4 class="text-2xl font-bold text-slate-900 mb-3">Education</h4>
                <p class="text-slate-600 mb-4 leading-relaxed">Japanese language & cultural programs</p>
                <div class="flex items-center gap-2 text-sm text-slate-500">
                    <i data-lucide="building-2" class="w-4 h-4"></i>
                    <span>Kaika Japanese School</span>
                </div>
            </div>

            <!-- Division 6 - Recruitment -->
            <div class="reveal-on-scroll group bg-gradient-to-br from-slate-50 to-white border border-slate-200 rounded-2xl p-8 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2" style="transition-delay: 500ms;">
                <div class="w-16 h-16 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <i data-lucide="users" class="w-8 h-8 text-white"></i>
                </div>
                <h4 class="text-2xl font-bold text-slate-900 mb-3">Recruitment</h4>
                <p class="text-slate-600 mb-4 leading-relaxed">International talent acquisition services</p>
                <div class="flex items-center gap-2 text-sm text-slate-500">
                    <i data-lucide="building-2" class="w-4 h-4"></i>
                    <span>Kaika Carriers</span>
                </div>
            </div>

            <!-- Division 7 - Technology -->
            <div class="reveal-on-scroll group bg-gradient-to-br from-slate-50 to-white border border-slate-200 rounded-2xl p-8 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2" style="transition-delay: 600ms;">
                <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <i data-lucide="laptop" class="w-8 h-8 text-white"></i>
                </div>
                <h4 class="text-2xl font-bold text-slate-900 mb-3">Technology</h4>
                <p class="text-slate-600 mb-4 leading-relaxed">Digital solutions & business automation</p>
                <div class="flex items-center gap-2 text-sm text-slate-500">
                    <i data-lucide="building-2" class="w-4 h-4"></i>
                    <span>Kaika IT & Automation</span>
                </div>
            </div>
        </div>

        <!-- CTA -->
        <div class="mt-16 text-center reveal-on-scroll">
            <a href="our-company.php" class="inline-flex items-center gap-3 px-8 py-4 bg-brand-red text-white font-bold uppercase tracking-widest rounded-lg hover:bg-red-700 transition-all hover:shadow-[0_0_30px_rgba(211,47,47,0.4)]">
                Explore All Companies
                <i data-lucide="arrow-right" class="w-5 h-5"></i>
            </a>
        </div>
    </div>
</section>

<!-- VALUES & CULTURE -->
<section class="py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-16 reveal-on-scroll">
            <h2 class="text-brand-red font-bold tracking-widest uppercase text-sm mb-4">Our Foundation</h2>
            <h3 class="text-4xl md:text-5xl font-bold mb-6 text-slate-900">Core Values</h3>
            <p class="text-lg text-slate-600 max-w-2xl mx-auto">
                The principles that guide every decision and action across Kaika Holdings
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Value 1 -->
            <div class="reveal-on-scroll text-center p-8 bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-500">
                <div class="w-20 h-20 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i data-lucide="target" class="w-10 h-10 text-brand-red"></i>
                </div>
                <h4 class="text-xl font-bold text-slate-900 mb-3">Excellence</h4>
                <p class="text-slate-600 leading-relaxed">Commitment to Japanese quality standards in every operation</p>
            </div>

            <!-- Value 2 -->
            <div class="reveal-on-scroll text-center p-8 bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-500" style="transition-delay: 100ms;">
                <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i data-lucide="shield-check" class="w-10 h-10 text-blue-600"></i>
                </div>
                <h4 class="text-xl font-bold text-slate-900 mb-3">Integrity</h4>
                <p class="text-slate-600 leading-relaxed">Transparent and ethical business practices in all markets</p>
            </div>

            <!-- Value 3 -->
            <div class="reveal-on-scroll text-center p-8 bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-500" style="transition-delay: 200ms;">
                <div class="w-20 h-20 bg-emerald-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i data-lucide="lightbulb" class="w-10 h-10 text-emerald-600"></i>
                </div>
                <h4 class="text-xl font-bold text-slate-900 mb-3">Innovation</h4>
                <p class="text-slate-600 leading-relaxed">Embracing technology and new solutions for growth</p>
            </div>

            <!-- Value 4 -->
            <div class="reveal-on-scroll text-center p-8 bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-500" style="transition-delay: 300ms;">
                <div class="w-20 h-20 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i data-lucide="handshake" class="w-10 h-10 text-purple-600"></i>
                </div>
                <h4 class="text-xl font-bold text-slate-900 mb-3">Partnership</h4>
                <p class="text-slate-600 leading-relaxed">Building lasting relationships with clients and communities</p>
            </div>
        </div>
    </div>
</section>

    <!-- ACHIEVEMENTS & CERTIFICATIONS -->

    <!-- SUSTAINABILITY & CSR -->
    <!--<section class="py-24 bg-gradient-to-br from-emerald-50 to-teal-50">-->
    <!--    <div class="max-w-7xl mx-auto px-6 lg:px-8">-->
    <!--        <div class="grid md:grid-cols-2 gap-16 items-center">-->
    <!--            <div class="reveal-on-scroll">-->
    <!--                <h2 class="text-emerald-700 font-bold tracking-widest uppercase text-sm mb-4">Corporate Responsibility</h2>-->
    <!--                <h3 class="text-4xl md:text-5xl font-bold mb-6 leading-tight text-slate-900">-->
    <!--                    Building a Sustainable Future-->
    <!--                </h3>-->
    <!--                <p class="text-lg text-slate-700 leading-relaxed mb-8">-->
    <!--                    At Kaika Holdings, we recognize our responsibility to the planet and society. Our commitment to sustainability extends across all our operations and subsidiaries.-->
    <!--                </p>-->

    <!--                <div class="space-y-4">-->
    <!--                    <div class="flex items-start gap-4 bg-white/60 backdrop-blur-sm rounded-xl p-4">-->
    <!--                        <div class="w-10 h-10 rounded-full bg-emerald-600 flex items-center justify-center shrink-0">-->
    <!--                            <i data-lucide="leaf" class="w-5 h-5 text-white"></i>-->
    <!--                        </div>-->
    <!--                        <div>-->
    <!--                            <h5 class="font-bold text-slate-900 mb-1">Environmental Stewardship</h5>-->
    <!--                            <p class="text-sm text-slate-600">Carbon-neutral operations by 2030, eco-friendly logistics solutions</p>-->
    <!--                        </div>-->
    <!--                    </div>-->

    <!--                    <div class="flex items-start gap-4 bg-white/60 backdrop-blur-sm rounded-xl p-4">-->
    <!--                        <div class="w-10 h-10 rounded-full bg-blue-600 flex items-center justify-center shrink-0">-->
    <!--                            <i data-lucide="users" class="w-5 h-5 text-white"></i>-->
    <!--                        </div>-->
    <!--                        <div>-->
    <!--                            <h5 class="font-bold text-slate-900 mb-1">Community Development</h5>-->
    <!--                            <p class="text-sm text-slate-600">Supporting local education, job creation, and cultural exchange programs</p>-->
    <!--                        </div>-->
    <!--                    </div>-->

    <!--                    <div class="flex items-start gap-4 bg-white/60 backdrop-blur-sm rounded-xl p-4">-->
    <!--                        <div class="w-10 h-10 rounded-full bg-purple-600 flex items-center justify-center shrink-0">-->
    <!--                            <i data-lucide="heart-handshake" class="w-5 h-5 text-white"></i>-->
    <!--                        </div>-->
    <!--                        <div>-->
    <!--                            <h5 class="font-bold text-slate-900 mb-1">Ethical Business</h5>-->
    <!--                            <p class="text-sm text-slate-600">Fair trade practices, diversity & inclusion, employee wellbeing initiatives</p>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->

    <!--            <div class="reveal-on-scroll" style="transition-delay: 200ms;">-->
    <!--                <div class="relative rounded-2xl overflow-hidden shadow-2xl">-->
    <!--                    <img src="https://images.unsplash.com/photo-1497436072909-60f360e1d4b1?auto=format&fit=crop&q=80&w=800" class="w-full h-[500px] object-cover" alt="Sustainability">-->
    <!--                    <div class="absolute inset-0 bg-gradient-to-t from-emerald-900/80 to-transparent flex items-end p-8">-->
    <!--                        <div class="text-white">-->
    <!--                            <p class="text-sm font-bold uppercase tracking-wider mb-2">CSR Report 2024</p>-->
    <!--                            <h4 class="text-2xl font-bold mb-2">Download Our Annual Impact Report</h4>-->
    <!--                            <button class="mt-4 px-6 py-3 bg-white text-emerald-700 font-bold text-sm uppercase tracking-wider rounded-lg hover:bg-emerald-50 transition-colors">-->
    <!--                                Download Report-->
    <!--                            </button>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->

    <!-- CAREERS CTA -->
    <section class="py-24 bg-slate-900 text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&q=80&w=2000" class="w-full h-full object-cover" alt="Team">
        </div>

        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
            <div class="text-center reveal-on-scroll">
                <h2 class="text-brand-red font-bold tracking-widest uppercase text-sm mb-4">Join Our Team</h2>
                <h3 class="text-4xl md:text-5xl font-bold mb-6">Be Part of Our Journey</h3>
                <p class="text-xl text-slate-300 max-w-2xl mx-auto mb-10 leading-relaxed">
                    We're always looking for talented individuals who share our passion for excellence and innovation
                </p>

                <div class="flex flex-wrap justify-center gap-4">
                    <button onclick="window.location.href='contact.php';" class="px-8 py-4 bg-brand-red hover:bg-red-700 text-white font-bold tracking-widest uppercase transition-all hover:shadow-[0_0_30px_rgba(220,38,38,0.4)] rounded-sm">
                        Contact Us
                    </button>
                    <button onclick="window.location.href='our-company.php';" class="px-8 py-4 bg-white/10 backdrop-blur-sm hover:bg-white/20 text-white font-bold tracking-widest uppercase transition-all border border-white/20 rounded-sm">
                        Learn About Culture
                    </button>
                </div>

                <!--<div class="grid md:grid-cols-4 gap-8 mt-16 max-w-4xl mx-auto">-->
                <!--    <div class="text-center">-->
                <!--        <div class="text-3xl font-black mb-2 gradient-text">100+</div>-->
                <!--        <div class="text-sm text-slate-400 uppercase tracking-wider">Team Members</div>-->
                <!--    </div>-->
                <!--    <div class="text-center">-->
                <!--        <div class="text-3xl font-black mb-2 gradient-text">25+</div>-->
                <!--        <div class="text-sm text-slate-400 uppercase tracking-wider">Nationalities</div>-->
                <!--    </div>-->
                <!--    <div class="text-center">-->
                <!--        <div class="text-3xl font-black mb-2 gradient-text">15</div>-->
                <!--        <div class="text-sm text-slate-400 uppercase tracking-wider">Training Programs</div>-->
                <!--    </div>-->
                <!--    <div class="text-center">-->
                <!--        <div class="text-3xl font-black mb-2 gradient-text">95%</div>-->
                <!--        <div class="text-sm text-slate-400 uppercase tracking-wider">Satisfaction Rate</div>-->
                <!--    </div>-->
                <!--</div>-->
            </div>
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
