<?php include 'header.php'; ?>

<!-- HERO SECTION -->
    <section class="relative h-[60vh] min-h-[500px] w-full overflow-hidden flex items-center justify-center">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&q=80&w=2000" alt="Singapore Business" class="w-full h-full object-cover">
            <div class="absolute inset-0 hero-overlay"></div>
            <div class="absolute inset-0 seigaiha-pattern"></div>
        </div>

        <!-- Japanese Kanji -->
        <div class="kanji-decoration top-20 right-10 text-white">門</div>
        <div class="kanji-decoration bottom-10 left-10 text-white">道</div>

        <!-- Content -->
        <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-8 text-center pt-20">
            <!-- Breadcrumb -->
            <div class="flex items-center justify-center text-white/70 text-sm mb-8 animate-fade-in-down">
                <a href="index.html" class="hover:text-white transition-colors">Home</a>
                <span class="breadcrumb-separator"></span>
                <a href="index.html#services" class="hover:text-white transition-colors">Services</a>
                <span class="breadcrumb-separator"></span>
                <span class="text-white">Consulting</span>
            </div>

            <div class="space-y-6">
                <!-- Badge -->
                <div class="inline-flex items-center gap-3 px-5 py-2 rounded-full border border-white/20 bg-white/5 text-white/90 text-xs font-medium uppercase tracking-[0.2em] backdrop-blur-sm animate-fade-in-down">
                    <i data-lucide="briefcase" class="w-4 h-4"></i>
                    Business Consulting
                </div>
                
                <!-- Main Heading -->
                <h1 class="text-4xl md:text-6xl lg:text-7xl font-display font-bold text-white tracking-tight leading-[1.1] animate-fade-in-up">
                    Your Gateway to<br/>
                    <span class="gradient-text">Business in Singapore</span>
                </h1>
                
                <!-- Subheading -->
                <p class="text-lg md:text-xl text-slate-300 max-w-3xl mx-auto font-light leading-relaxed animate-fade-in-up" style="animation-delay: 0.2s;">
                    Comprehensive market entry and investment support for Japanese enterprises and global entrepreneurs.
                </p>
            </div>
        </div>
    </section>

    <!-- MAIN INTRODUCTION -->
    <section class="py-24 bg-white relative overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-l from-slate-50 to-transparent"></div>
        <div class="kanji-decoration -top-20 -left-20 text-slate-900">誠</div>

        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <!-- Content Side -->
                <div class="reveal">
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-orange-50 rounded-full mb-6">
                        <span class="w-2 h-2 bg-orange-500 rounded-full"></span>
                        <span class="text-orange-500 font-bold tracking-widest uppercase text-xs">Your Dedicated Launchpad</span>
                    </div>
                    
                    <h2 class="text-3xl md:text-4xl font-display font-bold mb-8 text-slate-900 leading-tight">
                        Navigate Singapore's Business Landscape with Confidence
                    </h2>
                    
                    <div class="space-y-6 text-slate-600 leading-relaxed text-lg">
                        <p>
                            Singapore is Asia's premier business hub, renowned for its stability, connectivity, and tax efficiency. However, navigating a new legal and cultural landscape can be challenging.
                        </p>
                        
                        <p>
                            Kaika Singapore acts as your dedicated launchpad. While we hold a specialized focus on assisting <strong class="text-slate-900">Japanese enterprises</strong> in bringing their quality and capital to Singapore, our doors are open to investors from every corner of the globe.
                        </p>

                        <p>
                            We bridge the gap between your vision and Singapore's reality, providing end-to-end support from the moment you decide to invest until your office doors open.
                        </p>
                    </div>

                    <div class="mt-10 flex flex-wrap gap-4">
                        <a href="javascript:void(0)" onclick="openModal('consultationModal')" class="btn-shimmer group px-8 py-4 bg-gradient-to-r from-orange-500 to-orange-400 hover:from-orange-600 hover:to-orange-500 text-white font-bold rounded-lg transition-all duration-300 shadow-lg hover:shadow-orange-500/40 flex items-center gap-3">
                            <span>Schedule Consultation</span>
                            <i data-lucide="calendar" class="w-5 h-5 group-hover:scale-110 transition-transform"></i>
                        </a>
                        <a href="index.html#contact" class="group px-8 py-4 border-2 border-slate-200 hover:border-orange-500 text-slate-700 hover:text-orange-500 font-bold rounded-lg transition-all duration-300 flex items-center gap-3">
                            <span>Learn More</span>
                            <i data-lucide="arrow-right" class="w-5 h-5"></i>
                        </a>
                    </div>
                </div>

                <!-- Image Side -->
                <div class="reveal">
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl border border-slate-100">
                        <img src="https://images.unsplash.com/photo-1542621323-be463117ee66?auto=format&fit=crop&q=80&w=1000" alt="Singapore Skyline" class="w-full h-[500px] object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-orange-900/60 via-transparent to-transparent"></div>
                        
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
                </div>
            </div>
        </div>
    </section>

    <!-- CONSULTING SERVICES -->
    <section class="py-24 bg-gradient-to-b from-slate-50 to-white relative overflow-hidden">
        <!-- Decorative Elements -->
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-orange-500/5 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-blue-500/5 rounded-full blur-3xl"></div>
        <div class="kanji-decoration top-20 right-20 text-slate-900">助</div>

        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-20 reveal">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-orange-50 rounded-full mb-6">
                    <span class="w-2 h-2 bg-orange-500 rounded-full"></span>
                    <span class="text-orange-500 font-bold tracking-widest uppercase text-xs">Our Services</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-display font-bold text-slate-900 mb-6">
                    End-to-End Business Setup Solutions
                </h2>
                <p class="text-slate-600 text-lg max-w-3xl mx-auto">
                    From company registration to team building—we handle every aspect of your Singapore market entry.
                </p>
            </div>

            <!-- Services Grid -->
            <div class="space-y-8">
                
                <!-- Service 1: Company Incorporation -->
                <div class="service-card group bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-500 border border-slate-100 overflow-hidden reveal">
                    <div class="grid lg:grid-cols-3 gap-8 p-10">
                        <!-- Icon & Title -->
                        <div class="flex flex-col">
                            <div class="w-16 h-16 bg-gradient-to-br from-orange-50 to-orange-100 text-orange-500 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                                <i data-lucide="building-2" class="w-8 h-8"></i>
                            </div>
                            <h3 class="text-2xl font-display font-bold text-slate-900 mb-3">Company Incorporation</h3>
                            <p class="text-sm text-slate-500 uppercase tracking-widest font-bold">& STRUCTURING</p>
                        </div>

                        <!-- Details -->
                        <div class="lg:col-span-2 space-y-6">
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-2 h-2 bg-orange-500 rounded-full mt-2"></div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-2">Entity Formation</h4>
                                    <p class="text-slate-600 leading-relaxed">Fast and compliant registration of Private Limited Companies (Pte Ltd) with ACRA (Accounting and Corporate Regulatory Authority).</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-2 h-2 bg-orange-500 rounded-full mt-2"></div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-2">Corporate Secretarial Services</h4>
                                    <p class="text-slate-600 leading-relaxed">Acting as your named company secretary to ensure ongoing compliance with Singaporean statutory requirements.</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-2 h-2 bg-orange-500 rounded-full mt-2"></div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-2">Bank Account Opening</h4>
                                    <p class="text-slate-600 leading-relaxed">Facilitating introductions and paperwork for corporate banking with leading Singaporean and international banks.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service 2: Immigration & Work Passes -->
                <div class="service-card group bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-500 border border-slate-100 overflow-hidden reveal">
                    <div class="grid lg:grid-cols-3 gap-8 p-10">
                        <!-- Icon & Title -->
                        <div class="flex flex-col">
                            <div class="w-16 h-16 bg-gradient-to-br from-blue-50 to-blue-100 text-blue-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                                <i data-lucide="plane-takeoff" class="w-8 h-8"></i>
                            </div>
                            <h3 class="text-2xl font-display font-bold text-slate-900 mb-3">Immigration & Work Passes</h3>
                            <p class="text-sm text-slate-500 uppercase tracking-widest font-bold">VISA SERVICES</p>
                        </div>

                        <!-- Details -->
                        <div class="lg:col-span-2 space-y-6">
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-2 h-2 bg-blue-500 rounded-full mt-2"></div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-2">Employment Pass (EP) Application</h4>
                                    <p class="text-slate-600 leading-relaxed">Managing visa applications for foreign professionals and executives relocating to Singapore.</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-2 h-2 bg-blue-500 rounded-full mt-2"></div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-2">EntrePass & Investor Schemes</h4>
                                    <p class="text-slate-600 leading-relaxed">Specialized support for entrepreneurs and high-net-worth individuals seeking to start a venture or invest in Singapore.</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-2 h-2 bg-blue-500 rounded-full mt-2"></div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-2">Dependent Passes</h4>
                                    <p class="text-slate-600 leading-relaxed">Assisting with the relocation of families to ensure a smooth transition for your key personnel.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service 3: Market Entry Strategy -->
                <div class="service-card group bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-500 border border-slate-100 overflow-hidden reveal">
                    <div class="grid lg:grid-cols-3 gap-8 p-10">
                        <!-- Icon & Title -->
                        <div class="flex flex-col">
                            <div class="w-16 h-16 bg-gradient-to-br from-emerald-50 to-emerald-100 text-emerald-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                                <i data-lucide="target" class="w-8 h-8"></i>
                            </div>
                            <h3 class="text-2xl font-display font-bold text-slate-900 mb-3">Market Entry Strategy</h3>
                            <p class="text-sm text-slate-500 uppercase tracking-widest font-bold">STRATEGIC PLANNING</p>
                        </div>

                        <!-- Details -->
                        <div class="lg:col-span-2 space-y-6">
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-2 h-2 bg-emerald-500 rounded-full mt-2"></div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-2">Feasibility Studies</h4>
                                    <p class="text-slate-600 leading-relaxed">In-depth market research to assess the viability of your product or service in the Southeast Asian market.</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-2 h-2 bg-emerald-500 rounded-full mt-2"></div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-2">Location Scouting</h4>
                                    <p class="text-slate-600 leading-relaxed">Assistance in finding the perfect commercial real estate, from high-end CBD offices to industrial warehousing.</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-2 h-2 bg-emerald-500 rounded-full mt-2"></div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-2">Local Partnership</h4>
                                    <p class="text-slate-600 leading-relaxed">Leveraging our network to connect you with trusted local vendors, legal advisors, and potential business partners.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service 4: Business Support Services -->
                <div class="service-card group bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-500 border border-slate-100 overflow-hidden reveal">
                    <div class="grid lg:grid-cols-3 gap-8 p-10">
                        <!-- Icon & Title -->
                        <div class="flex flex-col">
                            <div class="w-16 h-16 bg-gradient-to-br from-purple-50 to-purple-100 text-purple-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                                <i data-lucide="life-buoy" class="w-8 h-8"></i>
                            </div>
                            <h3 class="text-2xl font-display font-bold text-slate-900 mb-3">Business Support Services</h3>
                            <p class="text-sm text-slate-500 uppercase tracking-widest font-bold">ONGOING OPERATIONS</p>
                        </div>

                        <!-- Details -->
                        <div class="lg:col-span-2 space-y-6">
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-2 h-2 bg-purple-500 rounded-full mt-2"></div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-2">Tax & Accounting Advisory</h4>
                                    <p class="text-slate-600 leading-relaxed">Guidance on Singapore's tax incentives, GST registration, and annual filing requirements.</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-2 h-2 bg-purple-500 rounded-full mt-2"></div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-2">HR & Recruitment</h4>
                                    <p class="text-slate-600 leading-relaxed">Helping you build your initial team, ensuring compliance with local Ministry of Manpower (MOM) regulations.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- WHY SINGAPORE -->
    <section class="py-24 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16 reveal">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-red-50 rounded-full mb-6">
                    <span class="w-2 h-2 bg-brand-red rounded-full"></span>
                    <span class="text-brand-red font-bold tracking-widest uppercase text-xs">Why Singapore</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-display font-bold text-slate-900 mb-6">
                    Asia's Premier Business Hub
                </h2>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="group bg-gradient-to-br from-slate-50 to-white p-8 rounded-2xl border border-slate-100 hover:border-orange-200 hover:shadow-lg transition-all duration-300 reveal">
                    <div class="w-14 h-14 bg-gradient-to-br from-orange-500 to-orange-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i data-lucide="shield-check" class="w-7 h-7 text-white"></i>
                    </div>
                    <h3 class="text-xl font-display font-bold text-slate-900 mb-3">Political Stability</h3>
                    <p class="text-slate-600 leading-relaxed">Consistently ranked among the world's most stable and transparent governments.</p>
                </div>

                <div class="group bg-gradient-to-br from-slate-50 to-white p-8 rounded-2xl border border-slate-100 hover:border-blue-200 hover:shadow-lg transition-all duration-300 reveal">
                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i data-lucide="percent" class="w-7 h-7 text-white"></i>
                    </div>
                    <h3 class="text-xl font-display font-bold text-slate-900 mb-3">Tax Efficiency</h3>
                    <p class="text-slate-600 leading-relaxed">17% corporate tax rate with numerous exemptions and incentives for startups.</p>
                </div>

                <div class="group bg-gradient-to-br from-slate-50 to-white p-8 rounded-2xl border border-slate-100 hover:border-emerald-200 hover:shadow-lg transition-all duration-300 reveal">
                    <div class="w-14 h-14 bg-gradient-to-br from-emerald-500 to-emerald-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i data-lucide="globe-2" class="w-7 h-7 text-white"></i>
                    </div>
                    <h3 class="text-xl font-display font-bold text-slate-900 mb-3">Strategic Location</h3>
                    <p class="text-slate-600 leading-relaxed">Gateway to 680M ASEAN consumers and major Asian markets.</p>
                </div>

                <div class="group bg-gradient-to-br from-slate-50 to-white p-8 rounded-2xl border border-slate-100 hover:border-purple-200 hover:shadow-lg transition-all duration-300 reveal">
                    <div class="w-14 h-14 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i data-lucide="users" class="w-7 h-7 text-white"></i>
                    </div>
                    <h3 class="text-xl font-display font-bold text-slate-900 mb-3">Skilled Workforce</h3>
                    <p class="text-slate-600 leading-relaxed">Highly educated, multilingual talent pool with strong work ethic.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="py-24 bg-gradient-to-b from-slate-50 to-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="relative bg-gradient-to-br from-orange-600 via-orange-500 to-orange-400 rounded-3xl overflow-hidden">
                <!-- Pattern Overlay -->
                <div class="absolute inset-0 seigaiha-pattern opacity-10"></div>
                
                <!-- Content -->
                <div class="relative z-10 px-8 md:px-16 py-20 text-center">
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/20 rounded-full mb-8">
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-white opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-white"></span>
                        </span>
                        <span class="text-white/90 font-bold tracking-widest uppercase text-xs">Start Your Journey</span>
                    </div>

                    <h2 class="text-3xl md:text-5xl font-display font-bold text-white mb-6 leading-tight">
                        Ready to Establish Your<br/>
                        Singapore Presence?
                    </h2>
                    
                    <p class="text-white/90 text-lg max-w-2xl mx-auto mb-10">
                        Let our experienced team guide you through every step of setting up your business in Singapore.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="javascript:void(0)" onclick="openModal('consultationModal')" class="btn-shimmer group px-10 py-5 bg-white hover:bg-slate-50 text-orange-600 font-bold rounded-xl transition-all duration-300 shadow-lg hover:shadow-xl flex items-center justify-center gap-3">
                            <span>Book Free Consultation</span>
                            <i data-lucide="calendar-check" class="w-5 h-5 group-hover:scale-110 transition-transform"></i>
                        </a>
                        <a href="index.html#contact" class="group px-10 py-5 bg-white/10 border-2 border-white/50 hover:bg-white/20 hover:border-white text-white font-bold rounded-xl transition-all duration-300 backdrop-blur-sm flex items-center justify-center gap-3">
                            <span>Contact Us</span>
                            <i data-lucide="arrow-right" class="w-5 h-5"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>