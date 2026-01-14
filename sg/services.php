<?php include 'header.php'; ?>

    <!-- HERO SECTION -->
    <section class="relative h-[70vh] min-h-[600px] w-full overflow-hidden flex items-center justify-center">
        <!-- Background -->
        <div class="absolute inset-0 z-0 bg-gradient-to-br from-brand-dark via-slate-900 to-brand-dark">
            <div class="absolute inset-0 tech-grid opacity-20"></div>
            <div class="absolute inset-0 seigaiha-pattern opacity-10"></div>
        </div>

        <!-- Animated Gradient Orbs -->
        <div class="absolute top-20 right-20 w-96 h-96 bg-brand-red/20 rounded-full blur-3xl animate-float"></div>
        <div class="absolute bottom-20 left-20 w-96 h-96 bg-cyan-500/20 rounded-full blur-3xl animate-float" style="animation-delay: 1s;"></div>

        <!-- Japanese Kanji -->
        <div class="kanji-decoration top-10 right-20 text-white">事</div>
        <div class="kanji-decoration bottom-10 left-20 text-white">業</div>

        <!-- Content -->
        <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-8 text-center pt-20">
            <!-- Breadcrumb -->
            <div class="flex items-center justify-center text-white/70 text-sm mb-8 animate-fade-in-down">
                <a href="index.php" class="hover:text-white transition-colors">Home</a>
                <i data-lucide="chevron-right" class="w-4 h-4 mx-2"></i>
                <span class="text-white">Services</span>
            </div>

            <div class="space-y-8">
                <!-- Badge -->
                <div class="inline-flex items-center gap-3 px-5 py-2 rounded-full border border-white/20 bg-white/5 text-white/90 text-xs font-medium uppercase tracking-[0.2em] backdrop-blur-sm animate-fade-in-down">
                    <i data-lucide="briefcase" class="w-4 h-4"></i>
                    What We Do
                </div>
                
                <!-- Main Heading -->
                <h1 class="text-5xl md:text-7xl lg:text-8xl font-display font-bold text-white tracking-tight leading-[1.1] animate-fade-in-up">
                    Integrated Solutions<br/>
                    <span class="gradient-text">For Modern Business</span>
                </h1>
                
                <!-- Subheading -->
                <p class="text-xl md:text-2xl text-slate-300 max-w-4xl mx-auto font-light leading-relaxed animate-fade-in-up" style="animation-delay: 0.2s;">
                    From global logistics to AI automation, consulting to international trade—we provide end-to-end solutions that power your business growth across Asia-Pacific.
                </p>

                <!-- Stats Row -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 max-w-4xl mx-auto pt-8 pb-24 animate-fade-in-up" style="animation-delay: 0.3s;">
                    <div>
                        <p class="text-4xl font-display font-bold text-white mb-2">4</p>
                        <p class="text-sm text-slate-400 uppercase tracking-wider">Core Services</p>
                    </div>
                    <div>
                        <p class="text-4xl font-display font-bold text-cyan-400 mb-2">150+</p>
                        <p class="text-sm text-slate-400 uppercase tracking-wider">Countries Served</p>
                    </div>
                    <div>
                        <p class="text-4xl font-display font-bold text-orange-400 mb-2">500+</p>
                        <p class="text-sm text-slate-400 uppercase tracking-wider">Active Clients</p>
                    </div>
                    <div>
                        <p class="text-4xl font-display font-bold text-emerald-400 mb-2">15+</p>
                        <p class="text-sm text-slate-400 uppercase tracking-wider">Years Experience</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-6 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 text-white/50 animate-bounce">
            <span class="text-xs uppercase tracking-widest">Explore Services</span>
            <i data-lucide="chevron-down" class="w-6 h-6"></i>
        </div>
    </section>

    <!-- SERVICES OVERVIEW -->
    <section class="py-32 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
            
            <!-- Section Header -->
            <div class="text-center mb-20 reveal">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-slate-100 rounded-full mb-6">
                    <span class="w-2 h-2 bg-brand-red rounded-full"></span>
                    <span class="text-slate-900 font-bold tracking-widest uppercase text-xs">Complete Business Solutions</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-display font-bold text-slate-900 mb-6">
                    Four Pillars of Excellence
                </h2>
                <p class="text-slate-600 text-xl max-w-3xl mx-auto leading-relaxed">
                    Each service is designed to work independently or as part of an integrated ecosystem, giving you the flexibility to scale as your business grows.
                </p>
            </div>

            <!-- Services Grid - Large Cards -->
            <div class="space-y-12">

                <!-- SERVICE 1: LOGISTICS -->
                <div class="service-card group bg-gradient-to-br from-white to-red-50 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-red-100 overflow-hidden reveal">
                    <div class="grid lg:grid-cols-2 gap-0">
                        <!-- Content Side -->
                        <div class="p-12 lg:p-16 flex flex-col justify-center">
                            <div class="inline-flex items-center gap-2 px-4 py-2 bg-red-100 rounded-full mb-6 w-fit">
                                <i data-lucide="truck" class="w-4 h-4 text-brand-red"></i>
                                <span class="text-brand-red font-bold tracking-widest uppercase text-xs">Service 01</span>
                            </div>

                            <h3 class="text-4xl md:text-5xl font-display font-bold text-slate-900 mb-6">
                                Global Logistics
                            </h3>

                            <p class="text-slate-600 text-lg leading-relaxed mb-8">
                                Comprehensive freight forwarding and 3PL solutions engineered for speed, reliability, and cost-efficiency. From ocean freight to air cargo, warehousing to customs clearance—we handle every aspect of your supply chain.
                            </p>

                            <!-- Key Features -->
                            <div class="grid grid-cols-2 gap-4 mb-10">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 bg-brand-red/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <i data-lucide="ship" class="w-5 h-5 text-brand-red"></i>
                                    </div>
                                    <span class="text-sm font-medium text-slate-700">Ocean Freight (FCL/LCL)</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 bg-brand-red/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <i data-lucide="plane" class="w-5 h-5 text-brand-red"></i>
                                    </div>
                                    <span class="text-sm font-medium text-slate-700">Air Freight Express</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 bg-brand-red/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <i data-lucide="warehouse" class="w-5 h-5 text-brand-red"></i>
                                    </div>
                                    <span class="text-sm font-medium text-slate-700">3PL Warehousing</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 bg-brand-red/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <i data-lucide="file-check" class="w-5 h-5 text-brand-red"></i>
                                    </div>
                                    <span class="text-sm font-medium text-slate-700">Customs Brokerage</span>
                                </div>
                            </div>

                            <!-- CTA -->
                            <div class="flex flex-wrap gap-4">
                                <a href="logistics.php" class="btn-shimmer group/btn px-8 py-4 bg-gradient-to-r from-brand-red to-brand-redLight hover:from-brand-redDark hover:to-brand-red text-white font-bold rounded-lg transition-all duration-300 shadow-lg hover:shadow-brand-red/40 flex items-center gap-3">
                                    <span>Explore Logistics</span>
                                    <i data-lucide="arrow-right" class="w-5 h-5 group-hover/btn:translate-x-1 transition-transform"></i>
                                </a>
                                <a href="index.php#contact" class="px-8 py-4 border-2 border-slate-200 hover:border-brand-red text-slate-700 hover:text-brand-red font-bold rounded-lg transition-all duration-300 flex items-center gap-3">
                                    <span>Get Quote</span>
                                    <i data-lucide="calculator" class="w-5 h-5"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Image Side -->
                        <div class="relative h-full min-h-[500px] lg:min-h-0">
                            <img src="https://images.unsplash.com/photo-1566576721346-d4a3b4eaeb55?auto=format&fit=crop&q=80&w=1000" alt="Global Logistics" class="absolute inset-0 w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-brand-dark/80 via-brand-dark/40 to-transparent"></div>
                            
                            <!-- Floating Stats -->
                            <div class="absolute bottom-8 left-8 right-8 grid grid-cols-2 gap-4">
                                <div class="bg-white/95 backdrop-blur-sm p-6 rounded-2xl shadow-xl">
                                    <p class="text-3xl font-display font-bold text-brand-red mb-1">10K+</p>
                                    <p class="text-sm text-slate-600">TEUs Annually</p>
                                </div>
                                <div class="bg-white/95 backdrop-blur-sm p-6 rounded-2xl shadow-xl">
                                    <p class="text-3xl font-display font-bold text-brand-red mb-1">99.8%</p>
                                    <p class="text-sm text-slate-600">On-Time Delivery</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SERVICE 2: CONSULTING -->
                <div class="service-card group bg-gradient-to-br from-white to-orange-50 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-orange-100 overflow-hidden reveal">
                    <div class="grid lg:grid-cols-2 gap-0">
                        <!-- Image Side (Left on Desktop) -->
                        <div class="relative h-full min-h-[500px] lg:min-h-0 order-2 lg:order-1">
                            <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&q=80&w=1000" alt="Business Consulting" class="absolute inset-0 w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-slate-900/40 to-transparent"></div>
                            
                            <!-- Floating Badge -->
                            <div class="absolute bottom-8 left-8 right-8">
                                <div class="bg-white/95 backdrop-blur-sm p-6 rounded-2xl shadow-xl">
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <p class="text-sm text-slate-500 mb-1">World Bank Rating</p>
                                            <p class="text-2xl font-display font-bold text-slate-900">#1 Ease of Business</p>
                                        </div>
                                        <div class="w-16 h-16 bg-gradient-to-br from-orange-500 to-orange-600 rounded-xl flex items-center justify-center">
                                            <i data-lucide="trophy" class="w-8 h-8 text-white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Content Side -->
                        <div class="p-12 lg:p-16 flex flex-col justify-center order-1 lg:order-2">
                            <div class="inline-flex items-center gap-2 px-4 py-2 bg-orange-100 rounded-full mb-6 w-fit">
                                <i data-lucide="briefcase" class="w-4 h-4 text-orange-600"></i>
                                <span class="text-orange-600 font-bold tracking-widest uppercase text-xs">Service 02</span>
                            </div>

                            <h3 class="text-4xl md:text-5xl font-display font-bold text-slate-900 mb-6">
                                Strategic Consulting
                            </h3>

                            <p class="text-slate-600 text-lg leading-relaxed mb-8">
                                Your gateway to business in Singapore. Comprehensive market entry and investment support for Japanese enterprises and global entrepreneurs seeking to establish presence in Asia's premier business hub.
                            </p>

                            <!-- Key Features -->
                            <div class="grid grid-cols-2 gap-4 mb-10">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 bg-orange-500/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <i data-lucide="building-2" class="w-5 h-5 text-orange-600"></i>
                                    </div>
                                    <span class="text-sm font-medium text-slate-700">Company Incorporation</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 bg-orange-500/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <i data-lucide="plane-takeoff" class="w-5 h-5 text-orange-600"></i>
                                    </div>
                                    <span class="text-sm font-medium text-slate-700">Work Pass Services</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 bg-orange-500/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <i data-lucide="target" class="w-5 h-5 text-orange-600"></i>
                                    </div>
                                    <span class="text-sm font-medium text-slate-700">Market Entry Strategy</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 bg-orange-500/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <i data-lucide="users" class="w-5 h-5 text-orange-600"></i>
                                    </div>
                                    <span class="text-sm font-medium text-slate-700">HR & Recruitment</span>
                                </div>
                            </div>

                            <!-- CTA -->
                            <div class="flex flex-wrap gap-4">
                                <a href="consulting.php" class="btn-shimmer group/btn px-8 py-4 bg-gradient-to-r from-orange-500 to-orange-400 hover:from-orange-600 hover:to-orange-500 text-white font-bold rounded-lg transition-all duration-300 shadow-lg hover:shadow-orange-500/40 flex items-center gap-3">
                                    <span>Explore Consulting</span>
                                    <i data-lucide="arrow-right" class="w-5 h-5 group-hover/btn:translate-x-1 transition-transform"></i>
                                </a>
                                <a href="index.php#contact" class="px-8 py-4 border-2 border-slate-200 hover:border-orange-500 text-slate-700 hover:text-orange-600 font-bold rounded-lg transition-all duration-300 flex items-center gap-3">
                                    <span>Book Consultation</span>
                                    <i data-lucide="calendar-check" class="w-5 h-5"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SERVICE 3: IT & AI AUTOMATION -->
                <div class="service-card group bg-gradient-to-br from-slate-900 to-slate-800 rounded-3xl shadow-2xl hover:shadow-3xl transition-all duration-500 border border-slate-700 overflow-hidden reveal">
                    <div class="grid lg:grid-cols-2 gap-0">
                        <!-- Content Side -->
                        <div class="p-12 lg:p-16 flex flex-col justify-center relative">
                            <!-- Glowing Effects -->
                            <div class="absolute -top-20 -right-20 w-40 h-40 bg-cyan-500/20 rounded-full blur-3xl"></div>
                            <div class="absolute -bottom-20 -left-20 w-40 h-40 bg-blue-500/20 rounded-full blur-3xl"></div>

                            <div class="relative z-10">
                                <div class="inline-flex items-center gap-2 px-4 py-2 bg-cyan-500/20 border border-cyan-500/30 rounded-full mb-6 w-fit">
                                    <span class="relative flex h-2 w-2">
                                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-cyan-400 opacity-75"></span>
                                        <span class="relative inline-flex rounded-full h-2 w-2 bg-cyan-400"></span>
                                    </span>
                                    <span class="text-cyan-400 font-bold tracking-widest uppercase text-xs">Service 03 • Featured</span>
                                </div>

                                <h3 class="text-4xl md:text-5xl font-display font-bold text-white mb-6">
                                    IT & AI Automation
                                </h3>

                                <p class="text-slate-300 text-lg leading-relaxed mb-8">
                                    Enterprise-grade AI automation, custom ERP development, and intelligent systems that transform businesses. From multilingual AI to GovTech integration—we build complete digital ecosystems.
                                </p>

                                <!-- Key Features -->
                                <div class="grid grid-cols-2 gap-4 mb-10">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 bg-cyan-500/20 rounded-lg flex items-center justify-center flex-shrink-0 border border-cyan-500/30">
                                            <i data-lucide="languages" class="w-5 h-5 text-cyan-400"></i>
                                        </div>
                                        <span class="text-sm font-medium text-slate-300">Multilingual AI</span>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 bg-blue-500/20 rounded-lg flex items-center justify-center flex-shrink-0 border border-blue-500/30">
                                            <i data-lucide="shield-check" class="w-5 h-5 text-blue-400"></i>
                                        </div>
                                        <span class="text-sm font-medium text-slate-300">GovTech Integration</span>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 bg-purple-500/20 rounded-lg flex items-center justify-center flex-shrink-0 border border-purple-500/30">
                                            <i data-lucide="workflow" class="w-5 h-5 text-purple-400"></i>
                                        </div>
                                        <span class="text-sm font-medium text-slate-300">Process Automation</span>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 bg-emerald-500/20 rounded-lg flex items-center justify-center flex-shrink-0 border border-emerald-500/30">
                                            <i data-lucide="building-2" class="w-5 h-5 text-emerald-400"></i>
                                        </div>
                                        <span class="text-sm font-medium text-slate-300">Smart Office IoT</span>
                                    </div>
                                </div>

                                <!-- CTA -->
                                <div class="flex flex-wrap gap-4">
                                    <a href="tech.php" class="btn-shimmer group/btn px-8 py-4 bg-gradient-to-r from-cyan-500 to-cyan-400 hover:from-cyan-600 hover:to-cyan-500 text-white font-bold rounded-lg transition-all duration-300 shadow-lg hover:shadow-cyan-500/40 flex items-center gap-3">
                                        <span>Explore Tech Solutions</span>
                                        <i data-lucide="arrow-right" class="w-5 h-5 group-hover/btn:translate-x-1 transition-transform"></i>
                                    </a>
                                    <a href="index.php#contact" class="px-8 py-4 bg-white/10 border-2 border-white/30 hover:bg-white/20 hover:border-white/50 text-white font-bold rounded-lg transition-all duration-300 backdrop-blur-sm flex items-center gap-3">
                                        <span>Request Demo</span>
                                        <i data-lucide="presentation" class="w-5 h-5"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Image Side -->
                        <div class="relative h-full min-h-[500px] lg:min-h-0">
                            <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&q=80&w=1000" alt="AI Technology" class="absolute inset-0 w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/60 to-transparent"></div>
                            <div class="absolute inset-0 tech-grid opacity-30"></div>
                            
                            <!-- Floating Stats -->
                            <div class="absolute bottom-8 left-8 right-8 grid grid-cols-2 gap-4">
                                <div class="bg-slate-900/90 backdrop-blur-sm p-6 rounded-2xl shadow-xl border border-cyan-500/20">
                                    <p class="text-3xl font-display font-bold text-cyan-400 mb-1">50+</p>
                                    <p class="text-sm text-slate-300">AI Models Deployed</p>
                                </div>
                                <div class="bg-slate-900/90 backdrop-blur-sm p-6 rounded-2xl shadow-xl border border-cyan-500/20">
                                    <p class="text-3xl font-display font-bold text-cyan-400 mb-1">99.8%</p>
                                    <p class="text-sm text-slate-300">System Uptime</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SERVICE 4: TRADING -->
                <div class="service-card group bg-gradient-to-br from-white to-blue-50 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-blue-100 overflow-hidden reveal">
                    <div class="grid lg:grid-cols-2 gap-0">
                        <!-- Image Side (Left on Desktop) -->
                        <div class="relative h-full min-h-[500px] lg:min-h-0 order-2 lg:order-1">
                            <img src="https://images.unsplash.com/photo-1578575437130-527eed3abbec?auto=format&fit=crop&q=80&w=1000" alt="International Trading" class="absolute inset-0 w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-blue-900/80 via-blue-900/40 to-transparent"></div>
                            
                            <!-- Trade Flow Badge -->
                            <div class="absolute bottom-8 left-8 right-8">
                                <div class="bg-white/95 backdrop-blur-sm p-6 rounded-2xl shadow-xl">
                                    <div class="flex items-center justify-between mb-4">
                                        <span class="text-sm font-bold text-slate-600">Trade Network</span>
                                        <span class="text-2xl">🇯🇵 → 🇸🇬 → 🌏</span>
                                    </div>
                                    <div class="grid grid-cols-3 gap-4 text-center">
                                        <div>
                                            <p class="text-2xl font-display font-bold text-blue-600">30+</p>
                                            <p class="text-xs text-slate-600">Countries</p>
                                        </div>
                                        <div>
                                            <p class="text-2xl font-display font-bold text-blue-600">500+</p>
                                            <p class="text-xs text-slate-600">Partners</p>
                                        </div>
                                        <div>
                                            <p class="text-2xl font-display font-bold text-blue-600">15+</p>
                                            <p class="text-xs text-slate-600">Years</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Content Side -->
                        <div class="p-12 lg:p-16 flex flex-col justify-center order-1 lg:order-2">
                            <div class="inline-flex items-center gap-2 px-4 py-2 bg-blue-100 rounded-full mb-6 w-fit">
                                <i data-lucide="arrow-left-right" class="w-4 h-4 text-blue-600"></i>
                                <span class="text-blue-600 font-bold tracking-widest uppercase text-xs">Service 04</span>
                            </div>

                            <h3 class="text-4xl md:text-5xl font-display font-bold text-slate-900 mb-6">
                                Import/Export Trading
                            </h3>

                            <p class="text-slate-600 text-lg leading-relaxed mb-8">
                                Your trusted bridge connecting Japan, Singapore, and ASEAN markets. From automotive parts to electronics, F&B to consumer goods—we facilitate international trade with quality assurance and cultural expertise.
                            </p>

                            <!-- Key Features -->
                            <div class="grid grid-cols-2 gap-4 mb-10">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 bg-blue-500/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <i data-lucide="globe-2" class="w-5 h-5 text-blue-600"></i>
                                    </div>
                                    <span class="text-sm font-medium text-slate-700">Japan-ASEAN Trade</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 bg-blue-500/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <i data-lucide="car" class="w-5 h-5 text-blue-600"></i>
                                    </div>
                                    <span class="text-sm font-medium text-slate-700">Automotive Parts</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 bg-blue-500/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <i data-lucide="utensils" class="w-5 h-5 text-blue-600"></i>
                                    </div>
                                    <span class="text-sm font-medium text-slate-700">Japanese F&B</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 bg-blue-500/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <i data-lucide="package-check" class="w-5 h-5 text-blue-600"></i>
                                    </div>
                                    <span class="text-sm font-medium text-slate-700">FTZ Re-Export</span>
                                </div>
                            </div>

                            <!-- CTA -->
                            <div class="flex flex-wrap gap-4">
                                <a href="trading.php" class="btn-shimmer group/btn px-8 py-4 bg-gradient-to-r from-blue-500 to-blue-400 hover:from-blue-600 hover:to-blue-500 text-white font-bold rounded-lg transition-all duration-300 shadow-lg hover:shadow-blue-500/40 flex items-center gap-3">
                                    <span>Explore Trading</span>
                                    <i data-lucide="arrow-right" class="w-5 h-5 group-hover/btn:translate-x-1 transition-transform"></i>
                                </a>
                                <a href="index.php#contact" class="px-8 py-4 border-2 border-slate-200 hover:border-blue-500 text-slate-700 hover:text-blue-600 font-bold rounded-lg transition-all duration-300 flex items-center gap-3">
                                    <span>Request Quote</span>
                                    <i data-lucide="calculator" class="w-5 h-5"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- INTEGRATED SOLUTIONS -->
    <section class="py-32 bg-gradient-to-b from-slate-50 to-white relative overflow-hidden">
        <div class="kanji-decoration top-20 right-20 text-slate-900 opacity-5">統</div>
        
        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
            <div class="text-center mb-20 reveal">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-purple-50 rounded-full mb-6">
                    <span class="w-2 h-2 bg-purple-600 rounded-full"></span>
                    <span class="text-purple-700 font-bold tracking-widest uppercase text-xs">Why Choose Kaika</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-display font-bold text-slate-900 mb-6">
                    More Than Just Services<br/>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-red via-orange-500 to-cyan-500">An Integrated Ecosystem</span>
                </h2>
                <p class="text-slate-600 text-xl max-w-3xl mx-auto leading-relaxed">
                    Our services work together seamlessly, creating synergies that deliver exponential value for your business.
                </p>
            </div>

            <!-- Integration Examples -->
            <div class="grid md:grid-cols-3 gap-8">
                
                <!-- Example 1 -->
                <div class="group bg-white p-8 rounded-2xl border border-slate-200 hover:border-purple-300 hover:shadow-xl transition-all duration-300 reveal">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-12 h-12 bg-gradient-to-br from-red-500 to-orange-500 rounded-xl flex items-center justify-center">
                            <i data-lucide="truck" class="w-6 h-6 text-white"></i>
                        </div>
                        <span class="text-2xl">+</span>
                        <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center">
                            <i data-lucide="arrow-left-right" class="w-6 h-6 text-white"></i>
                        </div>
                    </div>
                    <h3 class="text-xl font-display font-bold text-slate-900 mb-3">
                        Logistics + Trading
                    </h3>
                    <p class="text-slate-600 leading-relaxed">
                        Seamless integration from sourcing to delivery—one partner handling procurement, quality control, and global shipping.
                    </p>
                </div>

                <!-- Example 2 -->
                <div class="group bg-white p-8 rounded-2xl border border-slate-200 hover:border-purple-300 hover:shadow-xl transition-all duration-300 reveal" style="transition-delay: 100ms;">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-12 h-12 bg-gradient-to-br from-orange-500 to-orange-600 rounded-xl flex items-center justify-center">
                            <i data-lucide="briefcase" class="w-6 h-6 text-white"></i>
                        </div>
                        <span class="text-2xl">+</span>
                        <div class="w-12 h-12 bg-gradient-to-br from-cyan-500 to-cyan-600 rounded-xl flex items-center justify-center">
                            <i data-lucide="bot" class="w-6 h-6 text-white"></i>
                        </div>
                    </div>
                    <h3 class="text-xl font-display font-bold text-slate-900 mb-3">
                        Consulting + IT/AI
                    </h3>
                    <p class="text-slate-600 leading-relaxed">
                        Set up your Singapore entity and immediately digitize operations with AI systems and GovTech integration.
                    </p>
                </div>

                <!-- Example 3 -->
                <div class="group bg-white p-8 rounded-2xl border border-slate-200 hover:border-purple-300 hover:shadow-xl transition-all duration-300 reveal" style="transition-delay: 200ms;">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-12 h-12 bg-gradient-to-br from-cyan-500 to-cyan-600 rounded-xl flex items-center justify-center">
                            <i data-lucide="bot" class="w-6 h-6 text-white"></i>
                        </div>
                        <span class="text-2xl">+</span>
                        <div class="w-12 h-12 bg-gradient-to-br from-red-500 to-red-600 rounded-xl flex items-center justify-center">
                            <i data-lucide="truck" class="w-6 h-6 text-white"></i>
                        </div>
                    </div>
                    <h3 class="text-xl font-display font-bold text-slate-900 mb-3">
                        IT/AI + Logistics
                    </h3>
                    <p class="text-slate-600 leading-relaxed">
                        Smart warehouse systems, AI-powered demand forecasting, and automated inventory management.
                    </p>
                </div>

            </div>

            <!-- All Services Integration -->
            <div class="mt-16 p-12 bg-gradient-to-br from-purple-900 via-purple-800 to-purple-900 rounded-3xl text-white relative overflow-hidden reveal">
                <div class="absolute inset-0 seigaiha-pattern opacity-10"></div>
                <div class="relative z-10 text-center">
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 rounded-full mb-6">
                        <i data-lucide="sparkles" class="w-4 h-4 text-yellow-400"></i>
                        <span class="text-white/90 font-bold tracking-widest uppercase text-xs">Complete Solution</span>
                    </div>
                    <h3 class="text-3xl md:text-4xl font-display font-bold mb-4">
                        All Four Services Working Together
                    </h3>
                    <p class="text-purple-200 text-lg max-w-3xl mx-auto mb-8">
                        Establish your Singapore presence, set up AI-powered operations, source products from Japan, and distribute them across ASEAN—all managed by one trusted partner.
                    </p>
                    <a href="index.php#contact" class="inline-flex items-center gap-3 px-8 py-4 bg-white hover:bg-purple-50 text-purple-900 font-bold rounded-xl transition-all duration-300 shadow-lg hover:shadow-xl">
                        <span>Discuss Your Needs</span>
                        <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- JAPANESE EXCELLENCE -->
    <section class="py-32 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                
                <!-- Content -->
                <div class="reveal">
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-red-50 rounded-full mb-6">
                        <span class="text-2xl">🇯🇵</span>
                        <span class="text-brand-red font-bold tracking-widest uppercase text-xs">Kaika Holdings Japan</span>
                    </div>
                    
                    <h2 class="text-4xl md:text-5xl font-display font-bold text-slate-900 mb-8 leading-tight">
                        Japanese Excellence,<br/>
                        <span class="gradient-text">Singapore Efficiency</span>
                    </h2>
                    
                    <div class="space-y-6 text-slate-600 text-lg leading-relaxed mb-10">
                        <p>
                            As a subsidiary of <strong class="text-slate-900">Kaika Holdings Japan</strong>, we bring the precision, reliability, and attention to detail that define Japanese business culture—combined with Singapore's strategic location and world-class infrastructure.
                        </p>
                        
                        <p>
                            This unique heritage gives us an authentic understanding of Japanese business practices, direct access to Japanese suppliers and manufacturers, and the cultural fluency to bridge East and West seamlessly.
                        </p>
                    </div>

                    <!-- Key Points -->
                    <div class="space-y-4">
                        <div class="flex items-start gap-4 p-4 bg-slate-50 rounded-xl hover:bg-red-50 transition-all duration-300 group">
                            <div class="w-10 h-10 bg-brand-red/10 rounded-lg flex items-center justify-center flex-shrink-0 group-hover:bg-brand-red group-hover:text-white transition-all">
                                <i data-lucide="check" class="w-5 h-5 text-brand-red group-hover:text-white"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-900 mb-1">Direct Japanese Network</h4>
                                <p class="text-sm text-slate-600">Access to suppliers and partners across Japan through our parent company</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 p-4 bg-slate-50 rounded-xl hover:bg-red-50 transition-all duration-300 group">
                            <div class="w-10 h-10 bg-brand-red/10 rounded-lg flex items-center justify-center flex-shrink-0 group-hover:bg-brand-red group-hover:text-white transition-all">
                                <i data-lucide="check" class="w-5 h-5 text-brand-red group-hover:text-white"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-900 mb-1">Bilingual Expertise</h4>
                                <p class="text-sm text-slate-600">Fluent in Japanese business culture and communication</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 p-4 bg-slate-50 rounded-xl hover:bg-red-50 transition-all duration-300 group">
                            <div class="w-10 h-10 bg-brand-red/10 rounded-lg flex items-center justify-center flex-shrink-0 group-hover:bg-brand-red group-hover:text-white transition-all">
                                <i data-lucide="check" class="w-5 h-5 text-brand-red group-hover:text-white"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-900 mb-1">Quality Standards</h4>
                                <p class="text-sm text-slate-600">Japanese QC processes applied across all services</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Visual -->
                <div class="reveal">
                    <div class="relative">
                        <div class="relative rounded-3xl overflow-hidden shadow-2xl border border-slate-100">
                            <img src="https://images.unsplash.com/photo-1542621323-be463117ee66?auto=format&fit=crop&q=80&w=1000" alt="Tokyo to Singapore" class="w-full h-[500px] object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-brand-dark/80 via-transparent to-transparent"></div>
                            
                            <!-- Badge -->
                            <div class="absolute bottom-8 left-8 right-8">
                                <div class="bg-white/95 backdrop-blur-sm p-8 rounded-2xl shadow-xl">
                                    <div class="flex items-center justify-between mb-6">
                                        <div class="text-4xl">🇯🇵</div>
                                        <div class="flex-1 mx-6">
                                            <div class="h-1 bg-gradient-to-r from-red-500 via-purple-500 to-cyan-500 rounded-full"></div>
                                        </div>
                                        <div class="text-4xl">🇸🇬</div>
                                    </div>
                                    <p class="text-center text-slate-600 font-medium">
                                        Bridging Tokyo's Excellence with Singapore's Innovation
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Decorative Elements -->
                        <div class="absolute -top-6 -left-6 w-24 h-24 border-t-4 border-l-4 border-brand-red rounded-tl-2xl"></div>
                        <div class="absolute -bottom-6 -right-6 w-24 h-24 border-b-4 border-r-4 border-brand-gold rounded-br-2xl"></div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="py-32 bg-gradient-to-b from-slate-50 to-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="relative bg-gradient-to-br from-brand-dark via-slate-900 to-brand-dark rounded-3xl overflow-hidden">
                <!-- Pattern Overlay -->
                <div class="absolute inset-0 seigaiha-pattern opacity-10"></div>
                <div class="absolute inset-0 tech-grid opacity-10"></div>
                
                <!-- Gradient Orbs -->
                <div class="absolute top-0 right-0 w-96 h-96 bg-brand-red/20 rounded-full blur-3xl"></div>
                <div class="absolute bottom-0 left-0 w-96 h-96 bg-cyan-500/20 rounded-full blur-3xl"></div>

                <!-- Content -->
                <div class="relative z-10 px-8 md:px-16 py-20 text-center">
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 rounded-full mb-8">
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-brand-red opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-brand-red"></span>
                        </span>
                        <span class="text-white/90 font-bold tracking-widest uppercase text-xs">Let's Work Together</span>
                    </div>

                    <h2 class="text-4xl md:text-6xl font-display font-bold text-white mb-6 leading-tight">
                        Ready to Transform<br/>
                        <span class="gradient-text">Your Business?</span>
                    </h2>
                    
                    <p class="text-slate-300 text-xl max-w-3xl mx-auto mb-12 leading-relaxed">
                        Whether you need one service or a complete integrated solution, our team is ready to discuss how Kaika Singapore can power your success.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-6 justify-center">
                        <a href="index.php#contact" class="btn-shimmer group px-12 py-5 bg-gradient-to-r from-brand-red to-brand-redLight hover:from-brand-redDark hover:to-brand-red text-white font-bold rounded-xl transition-all duration-300 shadow-lg hover:shadow-brand-red/40 flex items-center justify-center gap-3 text-lg">
                            <span>Start a Conversation</span>
                            <i data-lucide="arrow-right" class="w-6 h-6 group-hover:translate-x-1 transition-transform"></i>
                        </a>
                        <a href="index.php#contact" class="group px-12 py-5 bg-white/10 border-2 border-white/50 hover:bg-white/20 hover:border-white text-white font-bold rounded-xl transition-all duration-300 backdrop-blur-sm flex items-center justify-center gap-3 text-lg">
                            <span>Download Brochure</span>
                            <i data-lucide="download" class="w-6 h-6"></i>
                        </a>
                    </div>

                    <!-- Trust Indicators -->
                    <div class="mt-16 pt-12 border-t border-white/10">
                        <p class="text-slate-400 text-sm uppercase tracking-widest mb-8">Trusted By Industry Leaders</p>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 max-w-4xl mx-auto">
                            <div class="text-center">
                                <p class="text-3xl font-display font-bold text-white mb-1">500+</p>
                                <p class="text-sm text-slate-400">Active Clients</p>
                            </div>
                            <div class="text-center">
                                <p class="text-3xl font-display font-bold text-white mb-1">15+</p>
                                <p class="text-sm text-slate-400">Years Experience</p>
                            </div>
                            <div class="text-center">
                                <p class="text-3xl font-display font-bold text-white mb-1">150+</p>
                                <p class="text-sm text-slate-400">Countries Served</p>
                            </div>
                            <div class="text-center">
                                <p class="text-3xl font-display font-bold text-white mb-1">99.8%</p>
                                <p class="text-sm text-slate-400">Client Satisfaction</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>