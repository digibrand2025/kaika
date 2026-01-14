<?php include 'header.php'; ?>

<!-- HERO SECTION -->
    <section class="relative h-[60vh] min-h-[500px] w-full overflow-hidden flex items-center justify-center">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1566576721346-d4a3b4eaeb55?auto=format&fit=crop&q=80&w=2000" alt="Global Logistics" class="w-full h-full object-cover">
            <div class="absolute inset-0 hero-overlay"></div>
            <div class="absolute inset-0 seigaiha-pattern"></div>
        </div>

        <!-- Japanese Kanji -->
        <div class="kanji-decoration top-20 right-10 text-white">物</div>
        <div class="kanji-decoration bottom-10 left-10 text-white">流</div>

        <!-- Content -->
        <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-8 text-center pt-20">
            <!-- Breadcrumb -->
            <div class="flex items-center justify-center text-white/70 text-sm mb-8 animate-fade-in-down">
                <a href="index.html" class="hover:text-white transition-colors">Home</a>
                <span class="breadcrumb-separator"></span>
                <a href="index.html#services" class="hover:text-white transition-colors">Services</a>
                <span class="breadcrumb-separator"></span>
                <span class="text-white">Logistics</span>
            </div>

            <div class="space-y-6">
                <!-- Badge -->
                <div class="inline-flex items-center gap-3 px-5 py-2 rounded-full border border-white/20 bg-white/5 text-white/90 text-xs font-medium uppercase tracking-[0.2em] backdrop-blur-sm animate-fade-in-down">
                    <i data-lucide="truck" class="w-4 h-4"></i>
                    Logistics Solutions
                </div>
                
                <!-- Main Heading -->
                <h1 class="text-4xl md:text-6xl lg:text-7xl font-display font-bold text-white tracking-tight leading-[1.1] animate-fade-in-up">
                    Architecting Global<br/>
                    <span class="gradient-text">Supply Chains</span> from Singapore
                </h1>
                
                <!-- Subheading -->
                <p class="text-lg md:text-xl text-slate-300 max-w-3xl mx-auto font-light leading-relaxed animate-fade-in-up" style="animation-delay: 0.2s;">
                    Comprehensive Freight Forwarding and Third-Party Logistics (3PL) Solutions engineered for speed, reliability, and cost-efficiency.
                </p>
            </div>
        </div>
    </section>

    <!-- MAIN INTRODUCTION -->
    <section class="py-24 bg-white relative overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-l from-slate-50 to-transparent"></div>
        <div class="kanji-decoration -top-20 -left-20 text-slate-900">精</div>

        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <!-- Content Side -->
                <div class="reveal">
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-red-50 rounded-full mb-6">
                        <span class="w-2 h-2 bg-brand-red rounded-full"></span>
                        <span class="text-brand-red font-bold tracking-widest uppercase text-xs">Strategic Partner</span>
                    </div>
                    
                    <h2 class="text-3xl md:text-4xl font-display font-bold mb-8 text-slate-900 leading-tight">
                        Your Competitive Advantage in a Volatile Market
                    </h2>
                    
                    <div class="space-y-6 text-slate-600 leading-relaxed text-lg">
                        <p>
                            In a volatile global market, the agility of your supply chain is your competitive advantage. Kaika Singapore operates at the heart of the world's busiest transshipment hub, providing a gateway that connects manufacturers in Japan and Asia to markets in the Americas, Europe, and Africa.
                        </p>
                        
                        <p>
                            We go beyond simple transport. We act as your strategic logistics partner, utilizing multimodal transport networks to optimize transit times and reduce overheads. Whether you are shipping high-value electronics, bulk commodities, or automotive fleets, our operations are governed by the Japanese principle of <strong class="text-slate-900">Kaizen</strong>—continuous improvement in route planning and cargo handling.
                        </p>
                    </div>

                    <div class="mt-10 flex flex-wrap gap-4">
                        <a href="https://wa.me/6583500509" target="_blank" rel="noopener noreferrer" class="btn-shimmer group px-8 py-4 bg-gradient-to-r from-brand-red to-brand-redLight hover:from-brand-redDark hover:to-brand-red text-white font-bold rounded-lg transition-all duration-300 shadow-lg hover:shadow-brand-red/40 flex items-center gap-3">
                            <span>Get a Quote</span>
                            <i data-lucide="arrow-right" class="w-5 h-5 group-hover:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>

                <!-- Stats Side -->
                <div class="reveal grid grid-cols-2 gap-6">
                    <div class="bg-gradient-to-br from-red-50 to-white p-8 rounded-2xl border border-red-100 shadow-sm hover:shadow-lg transition-all duration-300">
                        <div class="w-14 h-14 bg-gradient-to-br from-brand-red to-brand-redDark rounded-xl flex items-center justify-center mb-4">
                            <i data-lucide="globe-2" class="w-7 h-7 text-white"></i>
                        </div>
                        <h3 class="text-4xl font-display font-bold text-brand-red mb-2">150+</h3>
                        <p class="text-slate-600 font-medium">Countries Served</p>
                    </div>

                    <div class="bg-gradient-to-br from-blue-50 to-white p-8 rounded-2xl border border-blue-100 shadow-sm hover:shadow-lg transition-all duration-300">
                        <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center mb-4">
                            <i data-lucide="container" class="w-7 h-7 text-white"></i>
                        </div>
                        <h3 class="text-4xl font-display font-bold text-blue-600 mb-2">10K+</h3>
                        <p class="text-slate-600 font-medium">TEUs Annually</p>
                    </div>

                    <div class="bg-gradient-to-br from-emerald-50 to-white p-8 rounded-2xl border border-emerald-100 shadow-sm hover:shadow-lg transition-all duration-300">
                        <div class="w-14 h-14 bg-gradient-to-br from-emerald-500 to-emerald-600 rounded-xl flex items-center justify-center mb-4">
                            <i data-lucide="clock" class="w-7 h-7 text-white"></i>
                        </div>
                        <h3 class="text-4xl font-display font-bold text-emerald-600 mb-2">24/7</h3>
                        <p class="text-slate-600 font-medium">Operations Support</p>
                    </div>

                    <div class="bg-gradient-to-br from-orange-50 to-white p-8 rounded-2xl border border-orange-100 shadow-sm hover:shadow-lg transition-all duration-300">
                        <div class="w-14 h-14 bg-gradient-to-br from-orange-500 to-orange-600 rounded-xl flex items-center justify-center mb-4">
                            <i data-lucide="shield-check" class="w-7 h-7 text-white"></i>
                        </div>
                        <h3 class="text-4xl font-display font-bold text-orange-600 mb-2">99.8%</h3>
                        <p class="text-slate-600 font-medium">On-Time Delivery</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TECHNICAL CAPABILITIES -->
    <section class="py-24 bg-gradient-to-b from-slate-50 to-white relative overflow-hidden">
        <!-- Decorative Elements -->
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-brand-red/5 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-blue-500/5 rounded-full blur-3xl"></div>
        <div class="kanji-decoration top-20 right-20 text-slate-900">力</div>

        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-20 reveal">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-red-50 rounded-full mb-6">
                    <span class="w-2 h-2 bg-brand-red rounded-full"></span>
                    <span class="text-brand-red font-bold tracking-widest uppercase text-xs">Our Capabilities</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-display font-bold text-slate-900 mb-6">
                    Comprehensive Technical Solutions
                </h2>
                <p class="text-slate-600 text-lg max-w-3xl mx-auto">
                    From ocean freight to air cargo, warehousing to customs clearance—we provide end-to-end logistics solutions tailored to your business needs.
                </p>
            </div>

            <!-- Services Grid -->
            <div class="space-y-8">
                
                <!-- Service 1: Ocean Freight -->
                <div class="service-card group bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-500 border border-slate-100 overflow-hidden reveal">
                    <div class="grid lg:grid-cols-3 gap-8 p-10">
                        <!-- Icon & Title -->
                        <div class="flex flex-col">
                            <div class="w-16 h-16 bg-gradient-to-br from-blue-50 to-blue-100 text-blue-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                                <i data-lucide="ship" class="w-8 h-8"></i>
                            </div>
                            <h3 class="text-2xl font-display font-bold text-slate-900 mb-3">Ocean Freight Management</h3>
                            <p class="text-sm text-slate-500 uppercase tracking-widest font-bold">(NVOCC)</p>
                        </div>

                        <!-- Details -->
                        <div class="lg:col-span-2 space-y-6">
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-2 h-2 bg-blue-500 rounded-full mt-2"></div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-2">FCL (Full Container Load)</h4>
                                    <p class="text-slate-600 leading-relaxed">Exclusive container usage for high-volume shipments, offering secure and cost-effective routing.</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-2 h-2 bg-blue-500 rounded-full mt-2"></div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-2">LCL (Less than Container Load)</h4>
                                    <p class="text-slate-600 leading-relaxed">Consolidation services for smaller shipments, allowing you to pay only for the space you use while maintaining regular sailing schedules.</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-2 h-2 bg-blue-500 rounded-full mt-2"></div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-2">RORO (Roll-on/Roll-off)</h4>
                                    <p class="text-slate-600 leading-relaxed">Specialized handling for vehicles and heavy machinery, leveraging our group's deep expertise in the automotive sector.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service 2: Air Freight -->
                <div class="service-card group bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-500 border border-slate-100 overflow-hidden reveal">
                    <div class="grid lg:grid-cols-3 gap-8 p-10">
                        <!-- Icon & Title -->
                        <div class="flex flex-col">
                            <div class="w-16 h-16 bg-gradient-to-br from-sky-50 to-sky-100 text-sky-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                                <i data-lucide="plane" class="w-8 h-8"></i>
                            </div>
                            <h3 class="text-2xl font-display font-bold text-slate-900 mb-3">Air Freight Solutions</h3>
                            <p class="text-sm text-slate-500 uppercase tracking-widest font-bold">EXPRESS & HYBRID</p>
                        </div>

                        <!-- Details -->
                        <div class="lg:col-span-2 space-y-6">
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-2 h-2 bg-sky-500 rounded-full mt-2"></div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-2">Time-Critical Cargo</h4>
                                    <p class="text-slate-600 leading-relaxed">Priority air services for urgent consignments, utilizing direct flights to major global hubs.</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-2 h-2 bg-sky-500 rounded-full mt-2"></div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-2">Air-Sea Hybrid</h4>
                                    <p class="text-slate-600 leading-relaxed">A balanced solution combining the speed of air freight with the cost benefits of ocean transport, routed via Singapore's Free Trade Zone (FTZ).</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service 3: Cross-Trade -->
                <div class="service-card group bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-500 border border-slate-100 overflow-hidden reveal">
                    <div class="grid lg:grid-cols-3 gap-8 p-10">
                        <!-- Icon & Title -->
                        <div class="flex flex-col">
                            <div class="w-16 h-16 bg-gradient-to-br from-purple-50 to-purple-100 text-purple-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                                <i data-lucide="shuffle" class="w-8 h-8"></i>
                            </div>
                            <h3 class="text-2xl font-display font-bold text-slate-900 mb-3">Cross-Trade & Switch B/L</h3>
                            <p class="text-sm text-slate-500 uppercase tracking-widest font-bold">CONFIDENTIAL TRADING</p>
                        </div>

                        <!-- Details -->
                        <div class="lg:col-span-2 space-y-6">
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-2 h-2 bg-purple-500 rounded-full mt-2"></div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-2">Singapore Control Tower</h4>
                                    <p class="text-slate-600 leading-relaxed">Manage shipments between two countries (e.g., China to USA) without the cargo entering Singapore, managed centrally by our Singapore control tower.</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-2 h-2 bg-purple-500 rounded-full mt-2"></div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-2">Switch Bill of Lading</h4>
                                    <p class="text-slate-600 leading-relaxed">Strict confidentiality protection for suppliers and buyers through compliant Switch Bill of Lading documentation.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service 4: 3PL Warehousing -->
                <div class="service-card group bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-500 border border-slate-100 overflow-hidden reveal">
                    <div class="grid lg:grid-cols-3 gap-8 p-10">
                        <!-- Icon & Title -->
                        <div class="flex flex-col">
                            <div class="w-16 h-16 bg-gradient-to-br from-emerald-50 to-emerald-100 text-emerald-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                                <i data-lucide="warehouse" class="w-8 h-8"></i>
                            </div>
                            <h3 class="text-2xl font-display font-bold text-slate-900 mb-3">3PL Warehousing</h3>
                            <p class="text-sm text-slate-500 uppercase tracking-widest font-bold">FTZ FACILITIES</p>
                        </div>

                        <!-- Details -->
                        <div class="lg:col-span-2 space-y-6">
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-2 h-2 bg-emerald-500 rounded-full mt-2"></div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-2">Regional Distribution Centre (RDC)</h4>
                                    <p class="text-slate-600 leading-relaxed">Secure storage in Singapore's Free Trade Zone (FTZ), allowing for duty suspension and re-export efficiency.</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-2 h-2 bg-emerald-500 rounded-full mt-2"></div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-2">Value-Added Services (VAS)</h4>
                                    <p class="text-slate-600 leading-relaxed">Pick-and-pack, labeling, kitting, and quality control inspections before final distribution.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service 5: Customs Brokerage -->
                <div class="service-card group bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-500 border border-slate-100 overflow-hidden reveal">
                    <div class="grid lg:grid-cols-3 gap-8 p-10">
                        <!-- Icon & Title -->
                        <div class="flex flex-col">
                            <div class="w-16 h-16 bg-gradient-to-br from-orange-50 to-orange-100 text-orange-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                                <i data-lucide="file-check" class="w-8 h-8"></i>
                            </div>
                            <h3 class="text-2xl font-display font-bold text-slate-900 mb-3">Customs Brokerage</h3>
                            <p class="text-sm text-slate-500 uppercase tracking-widest font-bold">COMPLIANCE EXPERTS</p>
                        </div>

                        <!-- Details -->
                        <div class="lg:col-span-2 space-y-6">
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-2 h-2 bg-orange-500 rounded-full mt-2"></div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-2">Singapore Customs Clearance</h4>
                                    <p class="text-slate-600 leading-relaxed">Expert handling of Singapore Customs permits (Inward/Outward/Transshipment).</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-2 h-2 bg-orange-500 rounded-full mt-2"></div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-2">FTA & COO Consultancy</h4>
                                    <p class="text-slate-600 leading-relaxed">Consultancy on Free Trade Agreements (FTA) and Certificate of Origin (COO) issuance to maximize duty savings for your buyers.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- KAIKA ADVANTAGE -->
    <section class="py-24 bg-brand-dark text-white relative overflow-hidden">
        <!-- Background Effects -->
        <div class="absolute inset-0 seigaiha-pattern opacity-10"></div>
        <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-l from-brand-red/10 to-transparent"></div>
        <div class="kanji-decoration top-10 right-20 text-white">優</div>

        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-20 reveal">
                <div class="inline-flex items-center gap-3 px-5 py-2 bg-white/5 border border-white/10 rounded-full mb-6">
                    <i data-lucide="award" class="w-4 h-4 text-brand-gold"></i>
                    <span class="text-brand-gold font-bold tracking-widest uppercase text-xs">Why Choose Kaika</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-display font-bold mb-6">
                    The Kaika Advantage
                </h2>
                <p class="text-slate-300 text-lg max-w-3xl mx-auto">
                    When you partner with Kaika Singapore, you gain more than a logistics provider—you gain a strategic ally committed to your success.
                </p>
            </div>

            <!-- Advantages Grid -->
            <div class="grid md:grid-cols-3 gap-8">
                
                <!-- Advantage 1 -->
                <div class="group bg-white/5 border border-white/10 rounded-2xl p-10 hover:bg-white/10 hover:border-brand-red/50 transition-all duration-500 reveal">
                    <div class="w-16 h-16 bg-gradient-to-br from-brand-red/20 to-brand-red/5 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i data-lucide="monitor-dot" class="w-8 h-8 text-brand-red"></i>
                    </div>
                    <h3 class="text-2xl font-display font-bold mb-4">Control Tower Visibility</h3>
                    <p class="text-slate-300 leading-relaxed">
                        Real-time tracking and status updates from origin to destination. Complete transparency throughout your supply chain journey.
                    </p>
                </div>

                <!-- Advantage 2 -->
                <div class="group bg-white/5 border border-white/10 rounded-2xl p-10 hover:bg-white/10 hover:border-brand-red/50 transition-all duration-500 reveal" style="transition-delay: 100ms;">
                    <div class="w-16 h-16 bg-gradient-to-br from-brand-gold/20 to-brand-gold/5 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i data-lucide="shield-check" class="w-8 h-8 text-brand-gold"></i>
                    </div>
                    <h3 class="text-2xl font-display font-bold mb-4">Japanese Standard of Care</h3>
                    <p class="text-slate-300 leading-relaxed">
                        We treat your cargo with the highest level of respect, ensuring zero-damage handling protocols inspired by Japanese precision.
                    </p>
                </div>

                <!-- Advantage 3 -->
                <div class="group bg-white/5 border border-white/10 rounded-2xl p-10 hover:bg-white/10 hover:border-brand-red/50 transition-all duration-500 reveal" style="transition-delay: 200ms;">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500/20 to-blue-500/5 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i data-lucide="network" class="w-8 h-8 text-blue-400"></i>
                    </div>
                    <h3 class="text-2xl font-display font-bold mb-4">Global Network</h3>
                    <p class="text-slate-300 leading-relaxed">
                        Direct access to Kaika's own branches in Japan, Sri Lanka, Australia, and Africa, ensuring a closed-loop chain of custody.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="relative bg-gradient-to-br from-brand-dark to-slate-800 rounded-3xl overflow-hidden">
                <!-- Pattern Overlay -->
                <div class="absolute inset-0 seigaiha-pattern opacity-10"></div>
                
                <!-- Content -->
                <div class="relative z-10 px-8 md:px-16 py-20 text-center">
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 rounded-full mb-8">
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-brand-red opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-brand-red"></span>
                        </span>
                        <span class="text-white/90 font-bold tracking-widest uppercase text-xs">Ready to Optimize?</span>
                    </div>

                    <h2 class="text-3xl md:text-5xl font-display font-bold text-white mb-6 leading-tight">
                        Let's Build Your Supply Chain<br/>
                        <span class="gradient-text">Success Story</span>
                    </h2>
                    
                    <p class="text-slate-300 text-lg max-w-2xl mx-auto mb-10">
                        Connect with our logistics experts to discuss how we can streamline your operations and reduce costs.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="index.html#contact" class="btn-shimmer group px-10 py-5 bg-gradient-to-r from-brand-red to-brand-redLight hover:from-brand-redDark hover:to-brand-red text-white font-bold rounded-xl transition-all duration-300 shadow-lg hover:shadow-brand-red/40 flex items-center justify-center gap-3">
                            <span>Request Consultation</span>
                            <i data-lucide="arrow-right" class="w-5 h-5 group-hover:translate-x-1 transition-transform"></i>
                        </a>
                        <a href="index.html#contact" class="group px-10 py-5 bg-white/10 border border-white/30 hover:bg-white/20 hover:border-white/50 text-white font-bold rounded-xl transition-all duration-300 backdrop-blur-sm flex items-center justify-center gap-3">
                            <span>Download Brochure</span>
                            <i data-lucide="download" class="w-5 h-5"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include 'footer.php'; ?>