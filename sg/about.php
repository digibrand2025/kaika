<?php include 'header.php'; ?>

    <!-- HERO SECTION -->
    <section class="relative h-auto min-h-screen md:h-[80vh] md:min-h-[700px] w-full overflow-hidden flex items-center justify-center">
        <!-- Background -->
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1542621323-be463117ee66?auto=format&fit=crop&q=80&w=2000" alt="Singapore Skyline" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-b from-brand-dark/95 via-brand-dark/80 to-brand-red/60"></div>
            <div class="absolute inset-0 seigaiha-pattern opacity-20"></div>
        </div>

        <!-- Animated Elements -->
        <div class="absolute top-20 right-20 w-96 h-96 bg-brand-red/20 rounded-full blur-3xl animate-float"></div>
        <div class="absolute bottom-20 left-20 w-96 h-96 bg-brand-gold/20 rounded-full blur-3xl animate-float" style="animation-delay: 1s;"></div>

        <!-- Japanese Kanji -->
        <div class="kanji-decoration top-10 right-20 text-white">開</div>
        <div class="kanji-decoration bottom-10 left-20 text-white">花</div>

        <!-- Content -->
        <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-8 text-center pt-24 pb-16 md:pt-32 md:pb-0">
            <!-- Breadcrumb -->
            <div class="flex items-center justify-center text-white/70 text-sm mb-6 md:mb-8 animate-fade-in-down">
                <a href="index.php" class="hover:text-white transition-colors">Home</a>
                <i data-lucide="chevron-right" class="w-4 h-4 mx-2"></i>
                <span class="text-white">About Us</span>
            </div>

            <div class="space-y-6 md:space-y-8">
                <!-- Badge -->
                <div class="inline-flex items-center gap-2 md:gap-3 px-4 md:px-5 py-2 rounded-full border border-white/20 bg-white/5 text-white/90 text-xs font-medium uppercase tracking-[0.1em] md:tracking-[0.2em] backdrop-blur-sm animate-fade-in-down">
                    <span class="text-xl md:text-2xl">🇯🇵</span>
                    <span class="hidden sm:inline">Kaika Holdings Japan</span>
                    <span class="sm:hidden">Kaika Japan</span>
                    <i data-lucide="arrow-right" class="w-3 h-3 md:w-4 md:h-4"></i>
                    <span class="text-xl md:text-2xl">🇸🇬</span>
                </div>
                
                <!-- Main Heading -->
                <h1 class="text-4xl sm:text-5xl md:text-7xl lg:text-8xl font-display font-bold text-white tracking-tight leading-[1.1] animate-fade-in-up">
                    Building Bridges<br/>
                    <span class="gradient-text">Across Asia-Pacific</span>
                </h1>
                
                <!-- Subheading -->
                <p class="text-lg sm:text-xl md:text-2xl text-slate-300 max-w-4xl mx-auto font-light leading-relaxed animate-fade-in-up px-4" style="animation-delay: 0.2s;">
                    A legacy of trust, innovation, and Japanese excellence—now powering business growth from Singapore's strategic heart.
                </p>

                <!-- Key Stats -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6 max-w-4xl mx-auto pt-6 md:pt-8 pb-16 md:pb-24 animate-fade-in-up" style="animation-delay: 0.3s;">
                    <div class="bg-white/5 backdrop-blur-sm rounded-xl md:rounded-2xl p-4 md:p-6 border border-white/10">
                        <p class="text-3xl md:text-4xl font-display font-bold text-white mb-1 md:mb-2">2007</p>
                        <p class="text-xs md:text-sm text-slate-300 uppercase tracking-wider">Group Founded</p>
                    </div>
                    <div class="bg-white/5 backdrop-blur-sm rounded-xl md:rounded-2xl p-4 md:p-6 border border-white/10">
                        <p class="text-3xl md:text-4xl font-display font-bold text-cyan-400 mb-1 md:mb-2">7</p>
                        <p class="text-xs md:text-sm text-slate-300 uppercase tracking-wider">Global Subsidiaries</p>
                    </div>
                    <div class="bg-white/5 backdrop-blur-sm rounded-xl md:rounded-2xl p-4 md:p-6 border border-white/10">
                        <p class="text-3xl md:text-4xl font-display font-bold text-orange-400 mb-1 md:mb-2">5</p>
                        <p class="text-xs md:text-sm text-slate-300 uppercase tracking-wider">Countries</p>
                    </div>
                    <div class="bg-white/5 backdrop-blur-sm rounded-xl md:rounded-2xl p-4 md:p-6 border border-white/10">
                        <p class="text-3xl md:text-4xl font-display font-bold text-emerald-400 mb-1 md:mb-2">100+</p>
                        <p class="text-xs md:text-sm text-slate-300 uppercase tracking-wider">Team Members</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="hidden md:flex absolute bottom-6 left-1/2 -translate-x-1/2 flex-col items-center gap-2 text-white/50 animate-bounce">
            <span class="text-xs uppercase tracking-widest">Our Story</span>
            <i data-lucide="chevron-down" class="w-6 h-6"></i>
        </div>
    </section>

    <!-- ORIGIN STORY -->
    <section class="py-32 bg-white relative overflow-hidden">
        <div class="kanji-decoration -top-20 -left-20 text-slate-900 opacity-5">信</div>
        <div class="kanji-decoration -bottom-20 -right-20 text-slate-900 opacity-5">頼</div>

        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-2 gap-20 items-center">
                
                <!-- Content -->
                <div class="reveal-left">
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-red-50 rounded-full mb-6">
                        <span class="w-2 h-2 bg-brand-red rounded-full"></span>
                        <span class="text-brand-red font-bold tracking-widest uppercase text-xs">Our Heritage</span>
                    </div>
                    
                    <h2 class="text-4xl md:text-5xl font-display font-bold text-slate-900 mb-8 leading-tight">
                        The Kaika Holdings<br/>
                        <span class="gradient-text">Story</span>
                    </h2>
                    
                    <div class="space-y-6 text-slate-600 text-lg leading-relaxed">
                        <p>
                            <strong class="text-slate-900">Founded in Japan in 2007</strong> under visionary Japanese management, Kaika Holdings has evolved into a dynamic bridge connecting international markets. Our name, <strong class="font-jp text-slate-900">"Kaika" (開花)</strong>, meaning <em>"to bloom"</em> or <em>"to flower,"</em> reflects our philosophy of cultivating growth and prosperity wherever we establish our presence.
                        </p>
                        
                        <p>
                            From our headquarters in Tokyo, we expanded significantly into Sri Lanka in 2015, marking a new chapter in our history. Today, with <strong class="text-slate-900">seven specialized subsidiaries across five countries</strong> and over 100 dedicated team members, we serve as a trusted partner across diverse industries—from vehicle trading and logistics to hospitality, education, and technology.
                        </p>

                        <p>
                            Our Singapore branch represents a strategic expansion into one of Asia's most dynamic business hubs, bringing together Japanese excellence with Singapore's world-class infrastructure and connectivity to serve the broader ASEAN market.
                        </p>
                    </div>

                    <!-- Timeline -->
                    <div class="mt-12 space-y-6">
                        <div class="flex gap-6">
                            <div class="flex flex-col items-center">
                                <div class="w-14 h-14 bg-gradient-to-br from-brand-red to-brand-redDark rounded-full flex items-center justify-center text-white font-bold shadow-lg">
                                    2007
                                </div>
                                <div class="w-0.5 h-full bg-gradient-to-b from-brand-red to-transparent mt-2"></div>
                            </div>
                            <div class="pb-8">
                                <h3 class="font-display font-bold text-slate-900 mb-2">Foundation in Japan</h3>
                                <p class="text-slate-600">Kaika Holdings established in Tokyo, beginning our journey of connecting Japanese quality with global markets.</p>
                            </div>
                        </div>

                        <div class="flex gap-6">
                            <div class="flex flex-col items-center">
                                <div class="w-14 h-14 bg-gradient-to-br from-orange-500 to-orange-600 rounded-full flex items-center justify-center text-white font-bold shadow-lg">
                                    2015
                                </div>
                                <div class="w-0.5 h-full bg-gradient-to-b from-orange-500 to-transparent mt-2"></div>
                            </div>
                            <div class="pb-8">
                                <h3 class="font-display font-bold text-slate-900 mb-2">Sri Lanka Expansion</h3>
                                <p class="text-slate-600">Major expansion into South Asia, bringing operational expertise and cultural values to a growing market.</p>
                            </div>
                        </div>

                        <div class="flex gap-6">
                            <div class="flex flex-col items-center">
                                <div class="w-14 h-14 bg-gradient-to-br from-cyan-500 to-cyan-600 rounded-full flex items-center justify-center text-white font-bold shadow-lg">
                                    2025
                                </div>
                            </div>
                            <div>
                                <h3 class="font-display font-bold text-slate-900 mb-2">Singapore Hub Launch</h3>
                                <p class="text-slate-600">Establishing presence in Singapore to serve as our ASEAN strategic hub, connecting Japan with Southeast Asian markets.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Visual -->
                <div class="reveal-right">
                    <div class="relative">
                        <div class="relative rounded-3xl overflow-hidden shadow-2xl border border-slate-100">
                            <img src="https://images.unsplash.com/photo-1493976040374-85c8e12f0c0e?auto=format&fit=crop&q=80&w=1000" alt="Tokyo Japan" class="w-full h-[600px] object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-brand-dark/90 via-brand-dark/40 to-transparent"></div>
                            
                            <!-- Floating Card -->
                            <div class="absolute bottom-8 left-8 right-8">
                                <div class="bg-white/95 backdrop-blur-sm p-8 rounded-2xl shadow-xl">
                                    <div class="flex items-center gap-6 mb-6">
                                        <div class="w-20 h-20 bg-gradient-to-br from-brand-red to-brand-redDark rounded-2xl flex items-center justify-center text-white font-display font-bold text-3xl shadow-lg">
                                            K
                                        </div>
                                        <div>
                                            <p class="font-display font-bold text-2xl text-slate-900 mb-1">開花</p>
                                            <p class="text-sm text-slate-600">To Bloom · To Flower</p>
                                        </div>
                                    </div>
                                    <p class="text-slate-600 italic leading-relaxed">
                                        "Cultivating growth and prosperity wherever we establish our presence"
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Decorative Frame -->
                        <div class="absolute -top-6 -left-6 w-32 h-32 border-t-4 border-l-4 border-brand-red rounded-tl-2xl"></div>
                        <div class="absolute -bottom-6 -right-6 w-32 h-32 border-b-4 border-r-4 border-brand-gold rounded-br-2xl"></div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- WHY SINGAPORE -->
    <section class="py-32 bg-gradient-to-b from-slate-50 to-white relative overflow-hidden">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-brand-red/5 rounded-full blur-3xl"></div>
        <div class="kanji-decoration top-20 left-20 text-slate-900 opacity-5">戦</div>

        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
            
            <!-- Section Header -->
            <div class="text-center mb-20 reveal">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-blue-50 rounded-full mb-6">
                    <span class="text-2xl">🇸🇬</span>
                    <span class="text-blue-600 font-bold tracking-widest uppercase text-xs">Strategic Location</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-display font-bold text-slate-900 mb-6">
                    Why Singapore?
                </h2>
                <p class="text-slate-600 text-xl max-w-3xl mx-auto leading-relaxed">
                    Singapore serves as our strategic gateway to ASEAN's 680 million consumers, combining world-class infrastructure with unmatched connectivity to global markets.
                </p>
            </div>

            <!-- Grid of Advantages -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Advantage 1 -->
                <div class="group bg-white p-8 rounded-2xl border border-slate-200 hover:border-brand-red hover:shadow-xl transition-all duration-300 reveal">
                    <div class="w-16 h-16 bg-gradient-to-br from-red-50 to-red-100 text-brand-red rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:shadow-lg transition-all duration-300">
                        <i data-lucide="building-2" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-display font-bold text-slate-900 mb-4">#1 Ease of Business</h3>
                    <p class="text-slate-600 leading-relaxed">
                        World Bank's top-ranked business environment with transparent regulations, efficient bureaucracy, and strong rule of law.
                    </p>
                </div>

                <!-- Advantage 2 -->
                <div class="group bg-white p-8 rounded-2xl border border-slate-200 hover:border-cyan-500 hover:shadow-xl transition-all duration-300 reveal">
                    <div class="w-16 h-16 bg-gradient-to-br from-cyan-50 to-cyan-100 text-cyan-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:shadow-lg transition-all duration-300">
                        <i data-lucide="globe-2" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-display font-bold text-slate-900 mb-4">ASEAN Gateway</h3>
                    <p class="text-slate-600 leading-relaxed">
                        Strategic location at the heart of Southeast Asia, with direct access to rapidly growing ASEAN markets.
                    </p>
                </div>

                <!-- Advantage 3 -->
                <div class="group bg-white p-8 rounded-2xl border border-slate-200 hover:border-emerald-500 hover:shadow-xl transition-all duration-300 reveal">
                    <div class="w-16 h-16 bg-gradient-to-br from-emerald-50 to-emerald-100 text-emerald-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:shadow-lg transition-all duration-300">
                        <i data-lucide="percent" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-display font-bold text-slate-900 mb-4">Tax Efficiency</h3>
                    <p class="text-slate-600 leading-relaxed">
                        17% corporate tax rate with numerous incentives, exemptions, and 26 Free Trade Agreements for duty optimization.
                    </p>
                </div>

                <!-- Advantage 4 -->
                <div class="group bg-white p-8 rounded-2xl border border-slate-200 hover:border-blue-500 hover:shadow-xl transition-all duration-300 reveal">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-50 to-blue-100 text-blue-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:shadow-lg transition-all duration-300">
                        <i data-lucide="ship" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-display font-bold text-slate-900 mb-4">Logistics Hub</h3>
                    <p class="text-slate-600 leading-relaxed">
                        World's busiest transshipment port with connectivity to 600+ ports in 120+ countries, ideal for our logistics operations.
                    </p>
                </div>

                <!-- Advantage 5 -->
                <div class="group bg-white p-8 rounded-2xl border border-slate-200 hover:border-purple-500 hover:shadow-xl transition-all duration-300 reveal">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-50 to-purple-100 text-purple-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:shadow-lg transition-all duration-300">
                        <i data-lucide="users" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-display font-bold text-slate-900 mb-4">Skilled Workforce</h3>
                    <p class="text-slate-600 leading-relaxed">
                        Highly educated, multilingual talent pool with strong English, Mandarin, and regional language capabilities.
                    </p>
                </div>

                <!-- Advantage 6 -->
                <div class="group bg-white p-8 rounded-2xl border border-slate-200 hover:border-orange-500 hover:shadow-xl transition-all duration-300 reveal">
                    <div class="w-16 h-16 bg-gradient-to-br from-orange-50 to-orange-100 text-orange-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:shadow-lg transition-all duration-300">
                        <i data-lucide="cpu" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-display font-bold text-slate-900 mb-4">Smart Nation</h3>
                    <p class="text-slate-600 leading-relaxed">
                        Leading digital infrastructure with government backing for innovation, perfect for our IT & AI solutions.
                    </p>
                </div>

            </div>

            <!-- Stats Banner -->
            <div class="mt-20 bg-gradient-to-br from-brand-dark to-slate-900 rounded-3xl p-12 relative overflow-hidden reveal">
                <div class="absolute inset-0 seigaiha-pattern opacity-10"></div>
                <div class="relative z-10 grid md:grid-cols-4 gap-8 text-center">
                    <div>
                        <p class="text-5xl font-display font-bold text-white mb-2">$4T+</p>
                        <p class="text-slate-300 text-sm uppercase tracking-wider">Assets Under Management</p>
                    </div>
                    <div>
                        <p class="text-5xl font-display font-bold text-cyan-400 mb-2">680M</p>
                        <p class="text-slate-300 text-sm uppercase tracking-wider">ASEAN Consumers</p>
                    </div>
                    <div>
                        <p class="text-5xl font-display font-bold text-orange-400 mb-2">26</p>
                        <p class="text-slate-300 text-sm uppercase tracking-wider">Free Trade Agreements</p>
                    </div>
                    <div>
                        <p class="text-5xl font-display font-bold text-emerald-400 mb-2">1000+</p>
                        <p class="text-slate-300 text-sm uppercase tracking-wider">Japanese MNCs</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- CORE VALUES -->
    <section class="py-32 bg-white relative overflow-hidden">
        <div class="kanji-decoration top-10 right-20 text-slate-900 opacity-5">道</div>

        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
            
            <!-- Section Header -->
            <div class="text-center mb-20 reveal">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-slate-100 rounded-full mb-6">
                    <span class="w-2 h-2 bg-slate-900 rounded-full"></span>
                    <span class="text-slate-900 font-bold tracking-widest uppercase text-xs">Our Philosophy</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-display font-bold text-slate-900 mb-6">
                    Core Values
                </h2>
                <p class="text-slate-600 text-xl max-w-3xl mx-auto leading-relaxed">
                    These fundamental principles, inherited from our Japanese heritage, guide every decision we make and every relationship we build.
                </p>
            </div>

            <!-- Values Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-5 gap-8">
                
                <!-- Value 1: Trust -->
                <div class="group text-center reveal">
                    <div class="mb-8">
                        <div class="w-32 h-32 mx-auto bg-gradient-to-br from-red-50 to-red-100 rounded-full flex items-center justify-center mb-6 group-hover:scale-110 transition-all duration-300 shadow-lg">
                            <span class="text-5xl font-jp font-bold text-brand-red">信頼</span>
                        </div>
                        <h3 class="text-2xl font-display font-bold text-slate-900 mb-3">Trust</h3>
                        <p class="text-sm text-slate-600 leading-relaxed">
                            Building lasting relationships through honesty and transparency
                        </p>
                    </div>
                </div>

                <!-- Value 2: Kaizen -->
                <div class="group text-center reveal" style="transition-delay: 100ms;">
                    <div class="mb-8">
                        <div class="w-32 h-32 mx-auto bg-gradient-to-br from-orange-50 to-orange-100 rounded-full flex items-center justify-center mb-6 group-hover:scale-110 transition-all duration-300 shadow-lg">
                            <span class="text-5xl font-jp font-bold text-orange-600">改善</span>
                        </div>
                        <h3 class="text-2xl font-display font-bold text-slate-900 mb-3">Kaizen</h3>
                        <p class="text-sm text-slate-600 leading-relaxed">
                            Continuous improvement in everything we do
                        </p>
                    </div>
                </div>

                <!-- Value 3: Harmony -->
                <div class="group text-center reveal" style="transition-delay: 200ms;">
                    <div class="mb-8">
                        <div class="w-32 h-32 mx-auto bg-gradient-to-br from-emerald-50 to-emerald-100 rounded-full flex items-center justify-center mb-6 group-hover:scale-110 transition-all duration-300 shadow-lg">
                            <span class="text-5xl font-jp font-bold text-emerald-600">和</span>
                        </div>
                        <h3 class="text-2xl font-display font-bold text-slate-900 mb-3">Harmony</h3>
                        <p class="text-sm text-slate-600 leading-relaxed">
                            Growing together with our communities
                        </p>
                    </div>
                </div>

                <!-- Value 4: Integrity -->
                <div class="group text-center reveal" style="transition-delay: 300ms;">
                    <div class="mb-8">
                        <div class="w-32 h-32 mx-auto bg-gradient-to-br from-blue-50 to-blue-100 rounded-full flex items-center justify-center mb-6 group-hover:scale-110 transition-all duration-300 shadow-lg">
                            <span class="text-5xl font-jp font-bold text-blue-600">誠実</span>
                        </div>
                        <h3 class="text-2xl font-display font-bold text-slate-900 mb-3">Integrity</h3>
                        <p class="text-sm text-slate-600 leading-relaxed">
                            Upholding the highest ethical standards
                        </p>
                    </div>
                </div>

                <!-- Value 5: Innovation -->
                <div class="group text-center reveal" style="transition-delay: 400ms;">
                    <div class="mb-8">
                        <div class="w-32 h-32 mx-auto bg-gradient-to-br from-cyan-50 to-cyan-100 rounded-full flex items-center justify-center mb-6 group-hover:scale-110 transition-all duration-300 shadow-lg">
                            <span class="text-5xl font-jp font-bold text-cyan-600">革新</span>
                        </div>
                        <h3 class="text-2xl font-display font-bold text-slate-900 mb-3">Innovation</h3>
                        <p class="text-sm text-slate-600 leading-relaxed">
                            Embracing change and pioneering solutions
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- MISSION & VISION -->
    <section class="py-32 bg-gradient-to-b from-slate-50 to-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-2 gap-16">
                
                <!-- Mission -->
                <div class="reveal-left">
                    <div class="bg-gradient-to-br from-brand-red via-brand-redDark to-brand-dark rounded-3xl p-12 text-white relative overflow-hidden h-full">
                        <div class="absolute inset-0 seigaiha-pattern opacity-10"></div>
                        <div class="absolute top-8 right-8 text-8xl opacity-10 font-jp">使</div>
                        
                        <div class="relative z-10">
                            <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 rounded-full mb-6">
                                <i data-lucide="target" class="w-4 h-4"></i>
                                <span class="font-bold tracking-widest uppercase text-xs">Our Mission</span>
                            </div>
                            
                            <h2 class="text-4xl font-display font-bold mb-6">What We Do</h2>
                            
                            <p class="text-lg text-white/90 leading-relaxed mb-8">
                                To connect Japanese quality and innovation with ASEAN markets through our diverse portfolio of services, delivering exceptional value to our partners, customers, and communities while maintaining the highest standards of integrity and service excellence.
                            </p>

                            <div class="space-y-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 bg-white/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <i data-lucide="check" class="w-5 h-5"></i>
                                    </div>
                                    <span class="text-white/90">Japanese excellence meets Singapore efficiency</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 bg-white/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <i data-lucide="check" class="w-5 h-5"></i>
                                    </div>
                                    <span class="text-white/90">End-to-end integrated business solutions</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 bg-white/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <i data-lucide="check" class="w-5 h-5"></i>
                                    </div>
                                    <span class="text-white/90">Unwavering commitment to client success</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Vision -->
                <div class="reveal-right">
                    <div class="bg-gradient-to-br from-cyan-500 via-blue-500 to-blue-600 rounded-3xl p-12 text-white relative overflow-hidden h-full">
                        <div class="absolute inset-0 tech-grid opacity-20"></div>
                        <div class="absolute top-8 right-8 text-8xl opacity-10 font-jp">未</div>
                        
                        <div class="relative z-10">
                            <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 rounded-full mb-6">
                                <i data-lucide="telescope" class="w-4 h-4"></i>
                                <span class="font-bold tracking-widest uppercase text-xs">Our Vision</span>
                            </div>
                            
                            <h2 class="text-4xl font-display font-bold mb-6">Where We're Going</h2>
                            
                            <p class="text-lg text-white/90 leading-relaxed mb-8">
                                To become Singapore's most trusted Japanese business partner, recognized for excellence across logistics, consulting, trading, and technology—known for creating sustainable value through strategic innovation and unwavering commitment to quality.
                            </p>

                            <div class="space-y-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 bg-white/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <i data-lucide="star" class="w-5 h-5"></i>
                                    </div>
                                    <span class="text-white/90">Leading Japanese-ASEAN business bridge</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 bg-white/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <i data-lucide="star" class="w-5 h-5"></i>
                                    </div>
                                    <span class="text-white/90">Pioneering AI-powered business solutions</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 bg-white/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <i data-lucide="star" class="w-5 h-5"></i>
                                    </div>
                                    <span class="text-white/90">Sustainable growth for clients and communities</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- KAIKA FAMILY -->
    <section class="py-32 bg-white relative overflow-hidden">
        <div class="kanji-decoration bottom-10 left-20 text-slate-900 opacity-5">家</div>

        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
            
            <!-- Section Header -->
            <div class="text-center mb-20 reveal">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-purple-50 rounded-full mb-6">
                    <span class="w-2 h-2 bg-purple-600 rounded-full"></span>
                    <span class="text-purple-700 font-bold tracking-widest uppercase text-xs">Kaika Holdings Group</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-display font-bold text-slate-900 mb-6">
                    Part of a Global Family
                </h2>
                <p class="text-slate-600 text-xl max-w-3xl mx-auto leading-relaxed">
                    Kaika Singapore is one of seven specialized subsidiaries operating across five countries under the Kaika Holdings umbrella.
                </p>
            </div>

            <!-- Subsidiaries Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <!-- Kaika Singapore -->
                <div class="group bg-gradient-to-br from-brand-red to-brand-redDark p-8 rounded-2xl text-white relative overflow-hidden reveal">
                    <div class="absolute inset-0 seigaiha-pattern opacity-10"></div>
                    <div class="relative z-10">
                        <div class="w-14 h-14 bg-white/20 rounded-xl flex items-center justify-center mb-4">
                            <span class="text-3xl">🇸🇬</span>
                        </div>
                        <h3 class="text-xl font-display font-bold mb-2">Kaika Singapore</h3>
                        <p class="text-sm text-white/80 mb-4">Logistics, Consulting, Trading & IT/AI Solutions</p>
                        <span class="inline-flex items-center gap-2 text-xs font-bold bg-white/20 px-3 py-1 rounded-full">
                            <span class="w-2 h-2 bg-white rounded-full"></span>
                            You Are Here
                        </span>
                    </div>
                </div>

                <!-- Kaika International -->
                <div class="group bg-white p-8 rounded-2xl border border-slate-200 hover:border-blue-300 hover:shadow-xl transition-all duration-300 reveal">
                    <div class="w-14 h-14 bg-blue-50 rounded-xl flex items-center justify-center mb-4">
                        <i data-lucide="car" class="w-7 h-7 text-blue-600"></i>
                    </div>
                    <h3 class="text-xl font-display font-bold text-slate-900 mb-2">Kaika International</h3>
                    <p class="text-sm text-slate-600 mb-4">Global automotive export & distribution</p>
                    <a href="https://kaikainternational.com" target="_blank" class="text-sm text-blue-600 font-semibold hover:underline inline-flex items-center gap-1">
                        Visit Site <i data-lucide="external-link" class="w-3 h-3"></i>
                    </a>
                </div>

                <!-- Kaika Logistics -->
                <div class="group bg-white p-8 rounded-2xl border border-slate-200 hover:border-emerald-300 hover:shadow-xl transition-all duration-300 reveal">
                    <div class="w-14 h-14 bg-emerald-50 rounded-xl flex items-center justify-center mb-4">
                        <i data-lucide="truck" class="w-7 h-7 text-emerald-600"></i>
                    </div>
                    <h3 class="text-xl font-display font-bold text-slate-900 mb-2">Kaika Logistics</h3>
                    <p class="text-sm text-slate-600 mb-4">Comprehensive supply chain solutions</p>
                    <a href="https://kaikalogistics.com" target="_blank" class="text-sm text-emerald-600 font-semibold hover:underline inline-flex items-center gap-1">
                        Visit Site <i data-lucide="external-link" class="w-3 h-3"></i>
                    </a>
                </div>

                <!-- Kamikura Restaurant -->
                <div class="group bg-white p-8 rounded-2xl border border-slate-200 hover:border-orange-300 hover:shadow-xl transition-all duration-300 reveal">
                    <div class="w-14 h-14 bg-orange-50 rounded-xl flex items-center justify-center mb-4">
                        <i data-lucide="utensils" class="w-7 h-7 text-orange-600"></i>
                    </div>
                    <h3 class="text-xl font-display font-bold text-slate-900 mb-2">Kamikura</h3>
                    <p class="text-sm text-slate-600 mb-4">Authentic Japanese dining experiences</p>
                    <span class="text-sm text-slate-400">Sri Lanka</span>
                </div>

                <!-- Legend Pvt Ltd -->
                <div class="group bg-white p-8 rounded-2xl border border-slate-200 hover:border-purple-300 hover:shadow-xl transition-all duration-300 reveal">
                    <div class="w-14 h-14 bg-purple-50 rounded-xl flex items-center justify-center mb-4">
                        <i data-lucide="smartphone" class="w-7 h-7 text-purple-600"></i>
                    </div>
                    <h3 class="text-xl font-display font-bold text-slate-900 mb-2">Legend Pvt Ltd</h3>
                    <p class="text-sm text-slate-600 mb-4">High-quality electronics distribution</p>
                    <span class="text-sm text-slate-400">Sri Lanka</span>
                </div>

                <!-- Kaika Japanese School -->
                <div class="group bg-white p-8 rounded-2xl border border-slate-200 hover:border-pink-300 hover:shadow-xl transition-all duration-300 reveal">
                    <div class="w-14 h-14 bg-pink-50 rounded-xl flex items-center justify-center mb-4">
                        <i data-lucide="graduation-cap" class="w-7 h-7 text-pink-600"></i>
                    </div>
                    <h3 class="text-xl font-display font-bold text-slate-900 mb-2">Kaika Japanese School</h3>
                    <p class="text-sm text-slate-600 mb-4">Japanese language & cultural programs</p>
                    <span class="text-sm text-slate-400">Sri Lanka</span>
                </div>

                <!-- Kaika Carriers -->
                <div class="group bg-white p-8 rounded-2xl border border-slate-200 hover:border-teal-300 hover:shadow-xl transition-all duration-300 reveal">
                    <div class="w-14 h-14 bg-teal-50 rounded-xl flex items-center justify-center mb-4">
                        <i data-lucide="users" class="w-7 h-7 text-teal-600"></i>
                    </div>
                    <h3 class="text-xl font-display font-bold text-slate-900 mb-2">Kaika Carriers</h3>
                    <p class="text-sm text-slate-600 mb-4">International talent acquisition services</p>
                    <a href="http://kaika-international.com" target="_blank" class="text-sm text-teal-600 font-semibold hover:underline inline-flex items-center gap-1">
                        Visit Site <i data-lucide="external-link" class="w-3 h-3"></i>
                    </a>
                </div>

                <!-- Kaika IT & Automation -->
                <div class="group bg-white p-8 rounded-2xl border border-slate-200 hover:border-cyan-300 hover:shadow-xl transition-all duration-300 reveal">
                    <div class="w-14 h-14 bg-cyan-50 rounded-xl flex items-center justify-center mb-4">
                        <i data-lucide="bot" class="w-7 h-7 text-cyan-600"></i>
                    </div>
                    <h3 class="text-xl font-display font-bold text-slate-900 mb-2">Kaika IT & Automation</h3>
                    <p class="text-sm text-slate-600 mb-4">Digital solutions & business automation</p>
                    <span class="text-sm text-slate-400">Global</span>
                </div>

            </div>

            <!-- Parent Company Link -->
            <div class="mt-16 text-center reveal">
                <a href="https://kaikaholdings.com" target="_blank" class="inline-flex items-center gap-3 px-8 py-4 bg-gradient-to-r from-brand-dark to-slate-900 hover:from-slate-900 hover:to-brand-dark text-white font-bold rounded-xl transition-all duration-300 shadow-lg hover:shadow-xl">
                    <span>Visit Kaika Holdings</span>
                    <i data-lucide="external-link" class="w-5 h-5"></i>
                </a>
            </div>

        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="py-32 bg-gradient-to-b from-slate-50 to-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="relative bg-gradient-to-br from-brand-dark via-slate-900 to-brand-dark rounded-3xl overflow-hidden">
                <!-- Pattern Overlay -->
                <div class="absolute inset-0 seigaiha-pattern opacity-10"></div>
                
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
                        <span class="text-white/90 font-bold tracking-widest uppercase text-xs">Partner With Excellence</span>
                    </div>

                    <h2 class="text-4xl md:text-6xl font-display font-bold text-white mb-6 leading-tight">
                        Ready to Grow<br/>
                        <span class="gradient-text">With Kaika Singapore?</span>
                    </h2>
                    
                    <p class="text-slate-300 text-xl max-w-3xl mx-auto mb-12 leading-relaxed">
                        Let's discuss how our integrated solutions can power your business success across Asia-Pacific markets.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-6 justify-center">
                        <a href="index.php#contact" class="btn-shimmer group px-12 py-5 bg-gradient-to-r from-brand-red to-brand-redLight hover:from-brand-redDark hover:to-brand-red text-white font-bold rounded-xl transition-all duration-300 shadow-lg hover:shadow-brand-red/40 flex items-center justify-center gap-3 text-lg">
                            <span>Get in Touch</span>
                            <i data-lucide="arrow-right" class="w-6 h-6 group-hover:translate-x-1 transition-transform"></i>
                        </a>
                        <a href="services.php" class="group px-12 py-5 bg-white/10 border-2 border-white/50 hover:bg-white/20 hover:border-white text-white font-bold rounded-xl transition-all duration-300 backdrop-blur-sm flex items-center justify-center gap-3 text-lg">
                            <span>Explore Services</span>
                            <i data-lucide="briefcase" class="w-6 h-6"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>