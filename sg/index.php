<?php include 'header.php'; ?>

    <!-- HERO SECTION -->
    <section id="home" class="relative h-screen w-full overflow-hidden flex items-center justify-center">
        
        <!-- CAROUSEL BACKGROUND -->
        <div id="hero-slider" class="absolute inset-0 z-0">
            <!-- Slide 1: Logistics -->
            <div class="hero-slide active absolute inset-0">
                <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&q=80&w=2000" alt="Global Logistics" class="w-full h-full object-cover">
                <div class="absolute inset-0 hero-overlay"></div>
                <div class="absolute inset-0 seigaiha-pattern"></div>
            </div>
            
            <!-- Slide 2: Business Consulting -->
            <div class="hero-slide inactive absolute inset-0">
                <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&q=80&w=2000" alt="Business Consulting" class="w-full h-full object-cover">
                <div class="absolute inset-0 hero-overlay"></div>
                <div class="absolute inset-0 seigaiha-pattern"></div>
            </div>

            <!-- Slide 3: AI & Automation -->
            <div class="hero-slide inactive absolute inset-0">
                <img src="https://images.unsplash.com/photo-1620712943543-bcc4688e7485?auto=format&fit=crop&q=80&w=2000" alt="AI Automation" class="w-full h-full object-cover">
                <div class="absolute inset-0 hero-overlay-dark"></div>
                <div class="absolute inset-0 tech-grid opacity-30"></div>
            </div>
        </div>

        <!-- Decorative Japanese Kanji -->
        <div class="kanji-decoration top-20 right-10 text-white">é–‹</div>
        <div class="kanji-decoration bottom-20 left-10 text-white">èŠ±</div>

        <!-- Floating Particles -->
        <div class="particle" style="top: 20%; left: 10%; animation-delay: 0s;"></div>
        <div class="particle" style="top: 40%; left: 80%; animation-delay: 2s;"></div>
        <div class="particle" style="top: 70%; left: 30%; animation-delay: 4s;"></div>
        <div class="particle" style="top: 30%; left: 60%; animation-delay: 1s;"></div>
        <div class="particle" style="top: 80%; left: 70%; animation-delay: 3s;"></div>

        <!-- Content -->
        <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-8 text-center pt-20">
            <div class="space-y-8">
                <!-- Badge -->
                <div class="inline-flex items-center gap-3 px-5 py-2 rounded-full border border-white/20 bg-white/5 text-white/90 text-xs font-medium uppercase tracking-[0.2em] backdrop-blur-sm animate-fade-in-down">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-brand-red opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-brand-red"></span>
                    </span>
                    Kaika Singapore Branch
                </div>
                
                <!-- Main Heading -->
                <h1 class="text-5xl md:text-7xl lg:text-8xl font-display font-bold text-white tracking-tight leading-[1.1] animate-fade-in-up">
                    Innovating Trade.<br/>
                    <span class="gradient-text">Empowering Intelligence.</span>
                </h1>
                
                <!-- Subheading -->
                <p class="text-lg md:text-xl text-slate-300 max-w-2xl mx-auto font-light leading-relaxed animate-fade-in-up stagger-2" style="opacity: 0;">
                    Connecting Japanese excellence with Singapore's dynamic economy. We deliver integrated solutions in logistics, trading, and next-generation AI automation.
                </p>
                
                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center pt-4 animate-fade-in-up stagger-3" style="opacity: 0;">
                    <a href="#services" class="btn-shimmer group px-10 py-4 bg-gradient-to-r from-brand-red to-brand-redLight hover:from-brand-redDark hover:to-brand-red text-white font-bold rounded transition-all duration-300 shadow-[0_0_30px_rgba(196,30,58,0.4)] hover:shadow-[0_0_50px_rgba(196,30,58,0.6)] flex items-center justify-center gap-3">
                        <span>Explore Services</span>
                        <i data-lucide="arrow-right" class="w-5 h-5 group-hover:translate-x-1 transition-transform"></i>
                    </a>
                    <a href="contact.php" class="group px-10 py-4 bg-white/5 border border-white/30 hover:bg-white/10 hover:border-white/50 text-white font-bold rounded transition-all duration-300 backdrop-blur-sm flex items-center justify-center gap-3">
                        <span>Partner With Us</span>
                        <i data-lucide="handshake" class="w-5 h-5 group-hover:scale-110 transition-transform"></i>
                    </a>
                </div>

                <!-- Slider Indicators -->
                <div class="flex justify-center gap-4 pt-8 animate-fade-in-up stagger-4" style="opacity: 0;" id="slider-indicators">
                    <button class="group relative w-16 h-1.5 rounded-full overflow-hidden bg-white/20" onclick="setSlide(0)">
                        <span class="indicator-fill absolute inset-0 bg-gradient-to-r from-brand-red to-brand-redLight rounded-full transition-transform duration-300 origin-left scale-x-100"></span>
                    </button>
                    <button class="group relative w-16 h-1.5 rounded-full overflow-hidden bg-white/20" onclick="setSlide(1)">
                        <span class="indicator-fill absolute inset-0 bg-gradient-to-r from-brand-red to-brand-redLight rounded-full transition-transform duration-300 origin-left scale-x-0"></span>
                    </button>
                    <button class="group relative w-16 h-1.5 rounded-full overflow-hidden bg-white/20" onclick="setSlide(2)">
                        <span class="indicator-fill absolute inset-0 bg-gradient-to-r from-brand-red to-brand-redLight rounded-full transition-transform duration-300 origin-left scale-x-0"></span>
                    </button>
                </div>
            </div>
        </div>

        <!-- Scroll Down Indicator -->
        <div class="absolute bottom-10 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 text-white/50">
            <span class="text-xs uppercase tracking-widest">Scroll</span>
            <div class="w-6 h-10 border-2 border-white/30 rounded-full flex justify-center pt-2">
                <div class="w-1.5 h-1.5 bg-white/70 rounded-full animate-bounce"></div>
            </div>
        </div>
    </section>

    <!-- STATS STRIP -->
    <div class="relative z-20 -mt-20 max-w-7xl mx-auto px-6 lg:px-8 reveal">
        <div class="grid grid-cols-1 md:grid-cols-3 bg-white shadow-[0_25px_80px_-20px_rgba(0,0,0,0.2)] rounded-2xl border border-slate-100 overflow-hidden">
            <div class="relative p-10 flex items-center gap-5 hover:bg-gradient-to-br hover:from-red-50 hover:to-white transition-all duration-500 group">
                <div class="corner-accent corner-accent-tl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                <div class="p-4 bg-gradient-to-br from-red-50 to-red-100 text-brand-red rounded-2xl group-hover:scale-110 group-hover:shadow-lg transition-all duration-300">
                    <i data-lucide="globe-2" class="w-8 h-8"></i>
                </div>
                <div>
                    <h3 class="font-display font-bold text-slate-900 text-lg">Global Network</h3>
                    <p class="text-sm text-slate-500 mt-1">Backed by Kaika Holdings Japan</p>
                </div>
            </div>
            <div class="relative p-10 flex items-center gap-5 hover:bg-gradient-to-br hover:from-blue-50 hover:to-white transition-all duration-500 group border-y md:border-y-0 md:border-x border-slate-100">
                <div class="p-4 bg-gradient-to-br from-blue-50 to-blue-100 text-blue-600 rounded-2xl group-hover:scale-110 group-hover:shadow-lg transition-all duration-300">
                    <i data-lucide="cpu" class="w-8 h-8"></i>
                </div>
                <div>
                    <h3 class="font-display font-bold text-slate-900 text-lg">AI & Automation</h3>
                    <p class="text-sm text-slate-500 mt-1">Cutting-edge tech solutions</p>
                </div>
            </div>
            <div class="relative p-10 flex items-center gap-5 hover:bg-gradient-to-br hover:from-emerald-50 hover:to-white transition-all duration-500 group">
                <div class="corner-accent corner-accent-br opacity-0 group-hover:opacity-100 transition-opacity"></div>
                <div class="p-4 bg-gradient-to-br from-emerald-50 to-emerald-100 text-emerald-600 rounded-2xl group-hover:scale-110 group-hover:shadow-lg transition-all duration-300">
                    <i data-lucide="container" class="w-8 h-8"></i>
                </div>
                <div>
                    <h3 class="font-display font-bold text-slate-900 text-lg">Strategic Logistics</h3>
                    <p class="text-sm text-slate-500 mt-1">Efficient global movement</p>
                </div>
            </div>
        </div>
    </div>

    <!-- ABOUT SECTION -->
    <section id="about" class="py-32 bg-white relative overflow-hidden">
        <!-- Background Decoration -->
        <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-l from-slate-50 to-transparent"></div>
        <div class="kanji-decoration -top-20 -right-20 text-slate-900">ä¿¡</div>

        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
            <div class="grid md:grid-cols-2 gap-20 items-center">
                <!-- Image Side -->
                <div class="reveal-left relative">
                    <div class="relative">
                        <!-- Main Image -->
                        <div class="relative z-20 rounded-2xl overflow-hidden shadow-2xl">
                            <img src="https://plus.unsplash.com/premium_photo-1697730373939-3ebcaa9d295e?q=80&w=2340&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Singapore Business District" class="w-full h-[500px] object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-brand-dark/60 via-transparent to-transparent"></div>
                        </div>
                        
                        <!-- Decorative Frame -->
                        <div class="absolute -top-6 -left-6 w-32 h-32 border-t-4 border-l-4 border-brand-red rounded-tl-2xl"></div>
                        <div class="absolute -bottom-6 -right-6 w-32 h-32 border-b-4 border-r-4 border-brand-gold rounded-br-2xl"></div>
                        
                        <!-- Floating Stats Card -->
                        <div class="absolute -right-8 bottom-16 bg-white p-6 rounded-2xl shadow-2xl z-30 animate-float">
                            <div class="flex items-center gap-4">
                                <div class="w-14 h-14 bg-gradient-to-br from-brand-red to-brand-redLight rounded-xl flex items-center justify-center">
                                    <i data-lucide="trending-up" class="w-7 h-7 text-white"></i>
                                </div>
                                <div>
                                    <p class="text-3xl font-display font-bold stat-number">15+</p>
                                    <p class="text-sm text-slate-500">Years Experience</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Content Side -->
                <div class="reveal-right">
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-red-50 rounded-full mb-6">
                        <span class="w-2 h-2 bg-brand-red rounded-full"></span>
                        <span class="text-brand-red font-bold tracking-widest uppercase text-xs">Who We Are</span>
                    </div>
                    
                    <h3 class="text-4xl md:text-5xl font-display font-bold mb-8 text-slate-900 leading-tight">
                        Your Strategic Partner in<br/>
                        <span class="gradient-text">Singapore & Beyond.</span>
                    </h3>
                    
                    <p class="text-slate-600 leading-relaxed mb-6 text-lg">
                        As the Singapore branch of <strong class="text-slate-900">Kaika Holdings</strong>, we serve as a vital nexus connecting the technological precision of Japan with the financial and logistical dynamism of Singapore.
                    </p>
                    
                    <p class="text-slate-600 leading-relaxed mb-10 text-lg">
                        We don't just move goods; we move ideas. By integrating traditional trading expertise with state-of-the-art AI automation, we provide a hybrid service model that future-proofs your business operations.
                    </p>
                    
                    <div class="space-y-5">
                        <div class="flex items-center gap-4 p-4 bg-slate-50 rounded-xl hover:bg-red-50 hover:shadow-md transition-all duration-300 group">
                            <div class="w-10 h-10 bg-brand-red/10 text-brand-red rounded-full flex items-center justify-center group-hover:bg-brand-red group-hover:text-white transition-all">
                                <i data-lucide="check" class="w-5 h-5"></i>
                            </div>
                            <span class="font-medium text-slate-700">HQ support from Tokyo, Japan</span>
                        </div>
                        <div class="flex items-center gap-4 p-4 bg-slate-50 rounded-xl hover:bg-red-50 hover:shadow-md transition-all duration-300 group">
                            <div class="w-10 h-10 bg-brand-red/10 text-brand-red rounded-full flex items-center justify-center group-hover:bg-brand-red group-hover:text-white transition-all">
                                <i data-lucide="check" class="w-5 h-5"></i>
                            </div>
                            <span class="font-medium text-slate-700">Regional hub for Southeast Asia markets</span>
                        </div>
                        <div class="flex items-center gap-4 p-4 bg-slate-50 rounded-xl hover:bg-red-50 hover:shadow-md transition-all duration-300 group">
                            <div class="w-10 h-10 bg-brand-red/10 text-brand-red rounded-full flex items-center justify-center group-hover:bg-brand-red group-hover:text-white transition-all">
                                <i data-lucide="check" class="w-5 h-5"></i>
                            </div>
                            <span class="font-medium text-slate-700">Cross-industry expertise & solutions</span>
                        </div>
                    </div>

                    <div class="mt-10">
                        <a href="about.php" class="inline-flex items-center gap-2 text-brand-red font-bold hover:gap-3 transition-all">
                            Learn More About Us <i data-lucide="arrow-right" class="w-5 h-5"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CORE SERVICES -->
    <section id="services" class="py-32 bg-gradient-to-b from-slate-50 to-white relative overflow-hidden">
        <!-- Decorative Elements -->
        <div class="absolute top-0 left-0 w-full h-32 bg-gradient-to-b from-white to-transparent"></div>
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-brand-red/5 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-blue-500/5 rounded-full blur-3xl"></div>

        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-20 reveal">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-red-50 rounded-full mb-6">
                    <span class="w-2 h-2 bg-brand-red rounded-full"></span>
                    <span class="text-brand-red font-bold tracking-widest uppercase text-xs">Our Expertise</span>
                </div>
                <h3 class="text-4xl md:text-5xl font-display font-bold text-slate-900">Comprehensive Business Solutions</h3>
                <p class="text-slate-600 mt-6 max-w-2xl mx-auto text-lg">End-to-end services designed to accelerate your business growth across Asia-Pacific markets.</p>
            </div>

            <!-- Services Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                
                <!-- Service 1: Logistics -->
                <a href="logistics.php" class="service-card group bg-white p-8 rounded-2xl shadow-sm hover:shadow-2xl transition-all duration-500 border border-slate-100 reveal cursor-pointer" style="--accent-color: #C41E3A;">
                    <div class="icon-wrapper w-16 h-16 bg-gradient-to-br from-red-50 to-red-100 text-brand-red rounded-2xl flex items-center justify-center mb-8 transition-all duration-500">
                        <i data-lucide="truck" class="w-8 h-8"></i>
                    </div>
                    <h4 class="text-xl font-display font-bold text-slate-900 mb-4">Logistics</h4>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        End-to-end supply chain management optimized for the ASEAN region with Japanese precision.
                    </p>
                    <span class="inline-flex items-center gap-2 text-sm font-bold text-brand-red tracking-wide group-hover:gap-3 transition-all">
                        Learn More <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </span>
                </a>

                <!-- Service 2: Consulting -->
                <a href="consulting.php" class="service-card group bg-white p-8 rounded-2xl shadow-sm hover:shadow-2xl transition-all duration-500 border border-slate-100 reveal cursor-pointer" style="--accent-color: #F97316; transition-delay: 100ms;">
                    <div class="icon-wrapper w-16 h-16 bg-gradient-to-br from-orange-50 to-orange-100 text-orange-500 rounded-2xl flex items-center justify-center mb-8 transition-all duration-500">
                        <i data-lucide="briefcase" class="w-8 h-8"></i>
                    </div>
                    <h4 class="text-xl font-display font-bold text-slate-900 mb-4">Consulting</h4>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        Market entry strategies and operational consulting for global expansion.
                    </p>
                    <span class="inline-flex items-center gap-2 text-sm font-bold text-orange-500 tracking-wide group-hover:gap-3 transition-all">
                        Learn More <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </span>
                </a>

                <!-- Service 3: Trading -->
                <a href="trading.php" class="service-card group bg-white p-8 rounded-2xl shadow-sm hover:shadow-2xl transition-all duration-500 border border-slate-100 reveal cursor-pointer" style="--accent-color: #3B82F6; transition-delay: 200ms;">
                    <div class="icon-wrapper w-16 h-16 bg-gradient-to-br from-blue-50 to-blue-100 text-blue-500 rounded-2xl flex items-center justify-center mb-8 transition-all duration-500">
                        <i data-lucide="arrow-left-right" class="w-8 h-8"></i>
                    </div>
                    <h4 class="text-xl font-display font-bold text-slate-900 mb-4">Trading</h4>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        Import/Export facilitation bridging suppliers and buyers across continents.
                    </p>
                    <span class="inline-flex items-center gap-2 text-sm font-bold text-blue-500 tracking-wide group-hover:gap-3 transition-all">
                        Learn More <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </span>
                </a>

                <!-- Service 4: IT & AI - Featured -->
                <a href="tech.php" class="service-card group relative bg-gradient-to-br from-slate-900 to-slate-800 p-8 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 border border-slate-700 reveal overflow-hidden cursor-pointer" style="--accent-color: #22D3EE; transition-delay: 300ms;">
                    <!-- Glow Effect -->
                    <div class="absolute -top-20 -right-20 w-40 h-40 bg-cyan-500/20 rounded-full blur-3xl group-hover:bg-cyan-500/30 transition-all"></div>
                    
                    <div class="relative z-10">
                        <div class="icon-wrapper w-16 h-16 bg-white/10 text-cyan-400 rounded-2xl flex items-center justify-center mb-8 transition-all duration-500 border border-white/10">
                            <i data-lucide="bot" class="w-8 h-8"></i>
                        </div>
                        <div class="inline-flex items-center gap-2 px-3 py-1 bg-cyan-500/20 rounded-full mb-4">
                            <span class="relative flex h-1.5 w-1.5">
                                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-cyan-400 opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-1.5 w-1.5 bg-cyan-400"></span>
                            </span>
                            <span class="text-cyan-400 text-xs font-bold uppercase tracking-wider">Featured</span>
                        </div>
                        <h4 class="text-xl font-display font-bold text-white mb-4">IT & AI Automation</h4>
                        <p class="text-slate-300 leading-relaxed mb-6">
                            Custom AI solutions and RPA to streamline your workflows.
                        </p>
                        <span class="inline-flex items-center gap-2 text-sm font-bold text-cyan-400 tracking-wide group-hover:gap-3 transition-all">
                            Learn More <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </span>
                    </div>
                </a>

            </div>
        </div>
    </section>

    <!-- JAPAN CONNECTION SECTION -->
    <section class="py-32 bg-white relative overflow-hidden">
        <div class="absolute inset-0 seigaiha-pattern opacity-5"></div>
        <div class="kanji-decoration top-10 left-10 text-slate-900">çµ†</div>

        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <!-- Content Side -->
                <div class="reveal-left">
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-red-50 rounded-full mb-6">
                        <span class="text-2xl">ðŸ‡¯ðŸ‡µ</span>
                        <span class="text-brand-red font-bold tracking-widest uppercase text-xs">Our Heritage</span>
                    </div>

                    <h2 class="text-4xl md:text-5xl font-display font-bold mb-8 text-slate-900 leading-tight">
                        Rooted in<br/>
                        <span class="gradient-text">Japanese Excellence</span>
                    </h2>

                    <p class="text-slate-600 leading-relaxed mb-6 text-lg">
                        As a proud subsidiary of <strong class="text-slate-900">Kaika Holdings Japan</strong>, we bring decades of Japanese business philosophy and operational excellence to every engagement. Our Tokyo headquarters provides us with unparalleled access to Japanese suppliers, technology, and market insights.
                    </p>

                    <p class="text-slate-600 leading-relaxed mb-10 text-lg">
                        This heritage means our clients benefit from the legendary Japanese standards of quality, punctuality, and customer serviceâ€”all delivered through Singapore's strategic advantage as Asia's business hub.
                    </p>

                    <div class="grid grid-cols-2 gap-6">
                        <div class="bg-gradient-to-br from-red-50 to-white p-6 rounded-2xl border border-red-100">
                            <div class="w-12 h-12 bg-gradient-to-br from-brand-red to-brand-redDark rounded-xl flex items-center justify-center mb-4">
                                <i data-lucide="building-2" class="w-6 h-6 text-white"></i>
                            </div>
                            <p class="text-sm text-slate-500 mb-1">Established</p>
                            <p class="text-2xl font-display font-bold text-slate-900">2007</p>
                        </div>

                        <div class="bg-gradient-to-br from-emerald-50 to-white p-6 rounded-2xl border border-emerald-100">
                            <div class="w-12 h-12 bg-gradient-to-br from-emerald-500 to-emerald-600 rounded-xl flex items-center justify-center mb-4">
                                <i data-lucide="map-pin" class="w-6 h-6 text-white"></i>
                            </div>
                            <p class="text-sm text-slate-500 mb-1">Branch Locations</p>
                            <p class="text-2xl font-display font-bold text-slate-900">5+</p>
                        </div>

                    </div>
                </div>

                <!-- Image Side -->
                <div class="reveal-right">
                    <div class="relative">
                        <div class="relative rounded-3xl overflow-hidden shadow-2xl border border-slate-100">
                            <img src="https://images.unsplash.com/photo-1540959733332-eab4deabeeaf?auto=format&fit=crop&q=80&w=1000" alt="Tokyo Skyline" class="w-full h-[600px] object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-brand-dark/80 via-transparent to-transparent"></div>
                            
                            <!-- Location Badge -->
                            <div class="absolute bottom-8 left-8 right-8">
                                <div class="bg-white/95 backdrop-blur-sm p-6 rounded-2xl shadow-xl">
                                    <div class="flex items-center gap-4 mb-4">
                                        <div class="w-14 h-14 bg-gradient-to-br from-brand-red to-brand-redDark rounded-xl flex items-center justify-center text-2xl">
                                            ðŸ‡¯ðŸ‡µ
                                        </div>
                                        <div>
                                            <p class="text-sm text-slate-500">Headquarters</p>
                                            <p class="text-xl font-display font-bold text-slate-900">Kaika Holdings</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-2 text-sm text-slate-600">
                                        <i data-lucide="map-pin" class="w-4 h-4 text-brand-red"></i>
                                        <span>Tokyo, Japan</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Floating Element -->
                        <div class="absolute -top-6 -right-6 w-24 h-24 bg-gradient-to-br from-brand-red to-brand-redLight rounded-2xl shadow-xl flex items-center justify-center animate-float">
                            <span class="text-3xl">ðŸŒ¸</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY CHOOSE US -->
    <section class="py-32 bg-gradient-to-b from-slate-50 to-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
            <div class="text-center mb-20 reveal">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-red-50 rounded-full mb-6">
                    <span class="w-2 h-2 bg-brand-red rounded-full"></span>
                    <span class="text-brand-red font-bold tracking-widest uppercase text-xs">Competitive Advantages</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-display font-bold text-slate-900 mb-6">
                    Why Choose Kaika Singapore?
                </h2>
                <p class="text-slate-600 text-lg max-w-3xl mx-auto">
                    We combine the best of both worldsâ€”Japanese quality and Singapore efficiencyâ€”to deliver exceptional results.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Advantage 1 -->
                <div class="group bg-white p-8 rounded-2xl border border-slate-100 hover:border-brand-red/30 hover:shadow-xl transition-all duration-500 reveal">
                    <div class="w-16 h-16 bg-gradient-to-br from-red-50 to-red-100 text-brand-red rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i data-lucide="shield-check" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-display font-bold text-slate-900 mb-4">Japanese Quality Standards</h3>
                    <p class="text-slate-600 leading-relaxed">
                        Every project adheres to rigorous Japanese quality control standards, ensuring reliability and excellence in execution.
                    </p>
                </div>

                <!-- Advantage 2 -->
                <div class="group bg-white p-8 rounded-2xl border border-slate-100 hover:border-blue-300 hover:shadow-xl transition-all duration-500 reveal" style="transition-delay: 100ms;">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-50 to-blue-100 text-blue-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i data-lucide="map-pin" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-display font-bold text-slate-900 mb-4">Strategic Singapore Location</h3>
                    <p class="text-slate-600 leading-relaxed">
                        Leverage Singapore's world-class infrastructure, connectivity, and business-friendly environment for regional operations.
                    </p>
                </div>

                <!-- Advantage 3 -->
                <div class="group bg-white p-8 rounded-2xl border border-slate-100 hover:border-emerald-300 hover:shadow-xl transition-all duration-500 reveal" style="transition-delay: 200ms;">
                    <div class="w-16 h-16 bg-gradient-to-br from-emerald-50 to-emerald-100 text-emerald-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i data-lucide="trending-up" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-display font-bold text-slate-900 mb-4">Integrated Service Model</h3>
                    <p class="text-slate-600 leading-relaxed">
                        One-stop solution combining logistics, consulting, trading, and technologyâ€”streamlining your operations.
                    </p>
                </div>

                <!-- Advantage 4 -->
                <div class="group bg-white p-8 rounded-2xl border border-slate-100 hover:border-purple-300 hover:shadow-xl transition-all duration-500 reveal" style="transition-delay: 300ms;">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-50 to-purple-100 text-purple-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i data-lucide="globe-2" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-display font-bold text-slate-900 mb-4">ASEAN Market Expertise</h3>
                    <p class="text-slate-600 leading-relaxed">
                        Deep understanding of ASEAN markets, regulations, and business cultures across the region.
                    </p>
                </div>

                <!-- Advantage 5 -->
                <div class="group bg-white p-8 rounded-2xl border border-slate-100 hover:border-orange-300 hover:shadow-xl transition-all duration-500 reveal" style="transition-delay: 400ms;">
                    <div class="w-16 h-16 bg-gradient-to-br from-orange-50 to-orange-100 text-orange-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i data-lucide="users" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-display font-bold text-slate-900 mb-4">Multilingual Support</h3>
                    <p class="text-slate-600 leading-relaxed">
                        Bilingual teams fluent in Japanese, English, Mandarin, and Malayâ€”eliminating communication barriers.
                    </p>
                </div>

                <!-- Advantage 6 -->
                <div class="group bg-white p-8 rounded-2xl border border-slate-100 hover:border-cyan-300 hover:shadow-xl transition-all duration-500 reveal" style="transition-delay: 500ms;">
                    <div class="w-16 h-16 bg-gradient-to-br from-cyan-50 to-cyan-100 text-cyan-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i data-lucide="zap" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-display font-bold text-slate-900 mb-4">Cutting-Edge Technology</h3>
                    <p class="text-slate-600 leading-relaxed">
                        AI-powered solutions and automation tools that give you a competitive edge in digital transformation.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- INDUSTRIES WE SERVE -->
    <section class="py-32 bg-white relative overflow-hidden">
        <div class="absolute inset-0 tech-grid opacity-5"></div>

        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
            <div class="text-center mb-20 reveal">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-slate-100 rounded-full mb-6">
                    <span class="w-2 h-2 bg-slate-900 rounded-full"></span>
                    <span class="text-slate-900 font-bold tracking-widest uppercase text-xs">Our Impact</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-display font-bold text-slate-900 mb-6">
                    Industries We Serve
                </h2>
                <p class="text-slate-600 text-lg max-w-3xl mx-auto">
                    From manufacturing to finance, retail to technologyâ€”we empower businesses across diverse sectors.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Industry 1 -->
                <div class="group bg-gradient-to-br from-slate-50 to-white p-6 rounded-2xl border border-slate-200 hover:border-brand-red/30 hover:shadow-lg transition-all duration-300 reveal">
                    <div class="w-12 h-12 bg-brand-red/10 text-brand-red rounded-xl flex items-center justify-center mb-4 group-hover:bg-brand-red group-hover:text-white transition-all">
                        <i data-lucide="factory" class="w-6 h-6"></i>
                    </div>
                    <h3 class="font-display font-bold text-slate-900 mb-2">Manufacturing</h3>
                    <p class="text-sm text-slate-600">Supply chain optimization and industrial automation</p>
                </div>

                <!-- Industry 2 -->
                <div class="group bg-gradient-to-br from-slate-50 to-white p-6 rounded-2xl border border-slate-200 hover:border-blue-300 hover:shadow-lg transition-all duration-300 reveal">
                    <div class="w-12 h-12 bg-blue-500/10 text-blue-600 rounded-xl flex items-center justify-center mb-4 group-hover:bg-blue-600 group-hover:text-white transition-all">
                        <i data-lucide="banknote" class="w-6 h-6"></i>
                    </div>
                    <h3 class="font-display font-bold text-slate-900 mb-2">Financial Services</h3>
                    <p class="text-sm text-slate-600">Fintech solutions and compliance automation</p>
                </div>

                <!-- Industry 3 -->
                <div class="group bg-gradient-to-br from-slate-50 to-white p-6 rounded-2xl border border-slate-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300 reveal">
                    <div class="w-12 h-12 bg-emerald-500/10 text-emerald-600 rounded-xl flex items-center justify-center mb-4 group-hover:bg-emerald-600 group-hover:text-white transition-all">
                        <i data-lucide="shopping-bag" class="w-6 h-6"></i>
                    </div>
                    <h3 class="font-display font-bold text-slate-900 mb-2">Retail & E-commerce</h3>
                    <p class="text-sm text-slate-600">Inventory management and customer analytics</p>
                </div>

                <!-- Industry 4 -->
                <div class="group bg-gradient-to-br from-slate-50 to-white p-6 rounded-2xl border border-slate-200 hover:border-purple-300 hover:shadow-lg transition-all duration-300 reveal">
                    <div class="w-12 h-12 bg-purple-500/10 text-purple-600 rounded-xl flex items-center justify-center mb-4 group-hover:bg-purple-600 group-hover:text-white transition-all">
                        <i data-lucide="smartphone" class="w-6 h-6"></i>
                    </div>
                    <h3 class="font-display font-bold text-slate-900 mb-2">Technology</h3>
                    <p class="text-sm text-slate-600">Product development and market expansion</p>
                </div>

                <!-- Industry 5 -->
                <div class="group bg-gradient-to-br from-slate-50 to-white p-6 rounded-2xl border border-slate-200 hover:border-orange-300 hover:shadow-lg transition-all duration-300 reveal">
                    <div class="w-12 h-12 bg-orange-500/10 text-orange-600 rounded-xl flex items-center justify-center mb-4 group-hover:bg-orange-600 group-hover:text-white transition-all">
                        <i data-lucide="utensils" class="w-6 h-6"></i>
                    </div>
                    <h3 class="font-display font-bold text-slate-900 mb-2">Food & Beverage</h3>
                    <p class="text-sm text-slate-600">Import facilitation and distribution networks</p>
                </div>

                <!-- Industry 6 -->
                <div class="group bg-gradient-to-br from-slate-50 to-white p-6 rounded-2xl border border-slate-200 hover:border-cyan-300 hover:shadow-lg transition-all duration-300 reveal">
                    <div class="w-12 h-12 bg-cyan-500/10 text-cyan-600 rounded-xl flex items-center justify-center mb-4 group-hover:bg-cyan-600 group-hover:text-white transition-all">
                        <i data-lucide="car" class="w-6 h-6"></i>
                    </div>
                    <h3 class="font-display font-bold text-slate-900 mb-2">Automotive</h3>
                    <p class="text-sm text-slate-600">Parts trading and logistics solutions</p>
                </div>

                <!-- Industry 7 -->
                <div class="group bg-gradient-to-br from-slate-50 to-white p-6 rounded-2xl border border-slate-200 hover:border-pink-300 hover:shadow-lg transition-all duration-300 reveal">
                    <div class="w-12 h-12 bg-pink-500/10 text-pink-600 rounded-xl flex items-center justify-center mb-4 group-hover:bg-pink-600 group-hover:text-white transition-all">
                        <i data-lucide="building-2" class="w-6 h-6"></i>
                    </div>
                    <h3 class="font-display font-bold text-slate-900 mb-2">Real Estate</h3>
                    <p class="text-sm text-slate-600">Smart building solutions and IoT integration</p>
                </div>

                <!-- Industry 8 -->
                <div class="group bg-gradient-to-br from-slate-50 to-white p-6 rounded-2xl border border-slate-200 hover:border-yellow-300 hover:shadow-lg transition-all duration-300 reveal">
                    <div class="w-12 h-12 bg-yellow-500/10 text-yellow-600 rounded-xl flex items-center justify-center mb-4 group-hover:bg-yellow-600 group-hover:text-white transition-all">
                        <i data-lucide="heart-pulse" class="w-6 h-6"></i>
                    </div>
                    <h3 class="font-display font-bold text-slate-900 mb-2">Healthcare</h3>
                    <p class="text-sm text-slate-600">Medical equipment trading and digital health</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="py-32 bg-gradient-to-b from-slate-50 to-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="relative bg-gradient-to-br from-brand-dark to-slate-800 rounded-3xl overflow-hidden">
                <!-- Pattern Overlay -->
                <div class="absolute inset-0 seigaiha-pattern opacity-10"></div>
                <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-l from-brand-red/20 to-transparent"></div>
                
                <!-- Content -->
                <div class="relative z-10 px-8 md:px-16 py-20 text-center">
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 rounded-full mb-8">
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-brand-red opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-brand-red"></span>
                        </span>
                        <span class="text-white/90 font-bold tracking-widest uppercase text-xs">Ready to Get Started?</span>
                    </div>

                    <h2 class="text-3xl md:text-5xl font-display font-bold text-white mb-6 leading-tight">
                        Let's Transform Your Business<br/>
                        <span class="gradient-text">Together</span>
                    </h2>
                    
                    <p class="text-slate-300 text-lg max-w-2xl mx-auto mb-10">
                        Partner with Kaika Singapore and experience the perfect fusion of Japanese excellence and Singapore's strategic advantages.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="contact.php" class="btn-shimmer group px-10 py-5 bg-gradient-to-r from-brand-red to-brand-redLight hover:from-brand-redDark hover:to-brand-red text-white font-bold rounded-xl transition-all duration-300 shadow-lg hover:shadow-brand-red/40 flex items-center justify-center gap-3">
                            <span>Contact Us Today</span>
                            <i data-lucide="arrow-right" class="w-5 h-5 group-hover:translate-x-1 transition-transform"></i>
                        </a>
                        <a href="about.php" class="group px-10 py-5 bg-white/10 border-2 border-white/50 hover:bg-white/20 hover:border-white text-white font-bold rounded-xl transition-all duration-300 backdrop-blur-sm flex items-center justify-center gap-3">
                            <span>Learn More</span>
                            <i data-lucide="info" class="w-5 h-5"></i>
                        </a>
                    </div>

                    <!-- Quick Contact Info -->
                    <div class="mt-12 pt-12 border-t border-white/10 grid md:grid-cols-3 gap-8 text-left">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-white/10 rounded-xl flex items-center justify-center">
                                <i data-lucide="mail" class="w-6 h-6 text-white"></i>
                            </div>
                            <div>
                                <p class="text-xs text-slate-400 mb-1">Email Us</p>
                                <p class="text-white font-medium">info@kaika-singapore.com</p>
                            </div>200
                        </div>

                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-white/10 rounded-xl flex items-center justify-center">
                                <i data-lucide="phone" class="w-6 h-6 text-white"></i>
                            </div>
                            <div>
                                <p class="text-xs text-slate-400 mb-1">Call Us</p>
                                <p class="text-white font-medium">+65 8350 0509</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-white/10 rounded-xl flex items-center justify-center">
                                <i data-lucide="map-pin" class="w-6 h-6 text-white"></i>
                            </div>
                            <div>
                                <p class="text-xs text-slate-400 mb-1">Visit Us</p>
                                <p class="text-white font-medium">River Valley, Singapore</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>