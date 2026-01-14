<?php include 'header.php'; ?>

    <!-- HERO SECTION -->
    <section class="relative h-[60vh] min-h-[500px] w-full overflow-hidden flex items-center justify-center">
        <!-- Background -->
        <div class="absolute inset-0 z-0 bg-brand-dark">
            <div class="absolute inset-0 tech-grid opacity-30"></div>
            <div class="absolute inset-0 hero-overlay"></div>
            <div class="absolute inset-0 seigaiha-pattern"></div>
            
            <!-- Animated Circuit Lines -->
            <div class="circuit-line h-px top-1/4 w-full" style="animation-delay: 0s;"></div>
            <div class="circuit-line h-px top-1/2 w-full" style="animation-delay: 1s;"></div>
            <div class="circuit-line h-px top-3/4 w-full" style="animation-delay: 2s;"></div>
        </div>

        <!-- Japanese Kanji -->
        <div class="kanji-decoration top-20 right-10 text-white">智</div>
        <div class="kanji-decoration bottom-10 left-10 text-white">能</div>

        <!-- Content -->
        <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-8 text-center pt-20">
            <!-- Breadcrumb -->
            <div class="flex items-center justify-center text-white/70 text-sm mb-8 animate-fade-in-down">
                <a href="index.php" class="hover:text-white transition-colors">Home</a>
                <span class="breadcrumb-separator"></span>
                <a href="index.php#services" class="hover:text-white transition-colors">Services</a>
                <span class="breadcrumb-separator"></span>
                <span class="text-white">IT & AI Solutions</span>
            </div>

            <div class="space-y-6">
                <!-- Badge -->
                <div class="inline-flex items-center gap-3 px-5 py-2 rounded-full border border-cyan-500/30 bg-cyan-500/10 text-cyan-400 text-xs font-medium uppercase tracking-[0.2em] backdrop-blur-sm animate-fade-in-down">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-cyan-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-cyan-400"></span>
                    </span>
                    Enterprise IT & AI Solutions
                </div>
                
                <!-- Main Heading -->
                <h1 class="text-4xl md:text-6xl lg:text-7xl font-display font-bold text-white tracking-tight leading-[1.1] animate-fade-in-up">
                    Powering Singapore's<br/>
                    <span class="gradient-text">Digital Future</span>
                </h1>
                
                <!-- Subheading -->
                <p class="text-lg md:text-xl text-slate-300 max-w-3xl mx-auto font-light leading-relaxed animate-fade-in-up" style="animation-delay: 0.2s;">
                    Enterprise-grade AI automation, custom ERP development, and intelligent systems that transform businesses across Singapore and beyond.
                </p>
            </div>
        </div>
    </section>

    <!-- MAIN INTRODUCTION -->
    <section class="py-24 bg-white relative overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-l from-slate-50 to-transparent"></div>
        <div class="kanji-decoration -top-20 -left-20 text-slate-900">革</div>

        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <!-- Content Side -->
                <div class="reveal">
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-cyan-50 rounded-full mb-6">
                        <span class="w-2 h-2 bg-cyan-500 rounded-full"></span>
                        <span class="text-cyan-600 font-bold tracking-widest uppercase text-xs">Complete Digital Partner</span>
                    </div>
                    
                    <h2 class="text-3xl md:text-4xl font-display font-bold mb-8 text-slate-900 leading-tight">
                        Beyond Code: Building Complete Digital Ecosystems
                    </h2>
                    
                    <div class="space-y-6 text-slate-600 leading-relaxed text-lg">
                        <p>
                            True digital transformation requires more than just code. We build robust systems that power your business—AI-driven platforms, enterprise ERPs, and intelligent automation—while simultaneously crafting the visual identity and marketing strategies that define your brand in the marketplace.
                        </p>
                        
                        <p>
                            Kaika Singapore is your <strong class="text-slate-900">complete, end-to-end digital partner</strong>, architecting interconnected ecosystems that drive organizational efficiency at scale. From Singapore's multilingual business environment to GovTech Smart Nation initiatives, we engineer solutions that align with local excellence.
                        </p>
                    </div>

                    <div class="mt-10 flex flex-wrap gap-4">
                        <a href="javascript:void(0)" onclick="openModal('consultationModal')" class="btn-shimmer group px-8 py-4 bg-gradient-to-r from-cyan-500 to-cyan-400 hover:from-cyan-600 hover:to-cyan-500 text-white font-bold rounded-lg transition-all duration-300 shadow-lg hover:shadow-cyan-500/40 flex items-center gap-3">
                            <span>Schedule Tech Consultation</span>
                            <i data-lucide="calendar-check" class="w-5 h-5 group-hover:scale-110 transition-transform"></i>
                        </a>
                        <a href="javascript:void(0)" onclick="openModal('quoteModal')" class="group px-8 py-4 border-2 border-slate-200 hover:border-cyan-500 text-slate-700 hover:text-cyan-600 font-bold rounded-lg transition-all duration-300 flex items-center gap-3">
                            <span>Request Demo</span>
                            <i data-lucide="presentation" class="w-5 h-5"></i>
                        </a>
                    </div>
                </div>

                <!-- Stats Grid -->
                <div class="reveal grid grid-cols-2 gap-6">
                    <div class="bg-gradient-to-br from-cyan-50 to-white p-8 rounded-2xl border border-cyan-100 shadow-sm hover:shadow-lg transition-all duration-300 animate-pulse-glow">
                        <div class="w-14 h-14 bg-gradient-to-br from-cyan-500 to-cyan-600 rounded-xl flex items-center justify-center mb-4">
                            <i data-lucide="brain-circuit" class="w-7 h-7 text-white"></i>
                        </div>
                        <h3 class="text-4xl font-display font-bold text-cyan-600 mb-2">50+</h3>
                        <p class="text-slate-600 font-medium">AI Models Deployed</p>
                    </div>

                    <div class="bg-gradient-to-br from-blue-50 to-white p-8 rounded-2xl border border-blue-100 shadow-sm hover:shadow-lg transition-all duration-300">
                        <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center mb-4">
                            <i data-lucide="building-2" class="w-7 h-7 text-white"></i>
                        </div>
                        <h3 class="text-4xl font-display font-bold text-blue-600 mb-2">100+</h3>
                        <p class="text-slate-600 font-medium">Enterprise Clients</p>
                    </div>

                    <div class="bg-gradient-to-br from-purple-50 to-white p-8 rounded-2xl border border-purple-100 shadow-sm hover:shadow-lg transition-all duration-300">
                        <div class="w-14 h-14 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center mb-4">
                            <i data-lucide="zap" class="w-7 h-7 text-white"></i>
                        </div>
                        <h3 class="text-4xl font-display font-bold text-purple-600 mb-2">99.8%</h3>
                        <p class="text-slate-600 font-medium">System Uptime</p>
                    </div>

                    <div class="bg-gradient-to-br from-orange-50 to-white p-8 rounded-2xl border border-orange-100 shadow-sm hover:shadow-lg transition-all duration-300">
                        <div class="w-14 h-14 bg-gradient-to-br from-orange-500 to-orange-600 rounded-xl flex items-center justify-center mb-4">
                            <i data-lucide="globe-2" class="w-7 h-7 text-white"></i>
                        </div>
                        <h3 class="text-4xl font-display font-bold text-orange-600 mb-2">15+</h3>
                        <p class="text-slate-600 font-medium">Countries Served</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CORE COMPETENCIES / SERVICES -->
    <section class="py-24 bg-gradient-to-b from-slate-50 to-white relative overflow-hidden">
        <!-- Decorative Elements -->
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-cyan-500/5 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-blue-500/5 rounded-full blur-3xl"></div>
        <div class="kanji-decoration top-20 right-20 text-slate-900">技</div>

        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-20 reveal">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-cyan-50 rounded-full mb-6">
                    <span class="w-2 h-2 bg-cyan-500 rounded-full"></span>
                    <span class="text-cyan-600 font-bold tracking-widest uppercase text-xs">Core Competencies</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-display font-bold text-slate-900 mb-6">
                    Singapore-Optimized Technology Solutions
                </h2>
                <p class="text-slate-600 text-lg max-w-3xl mx-auto">
                    Purpose-built systems designed for Singapore's unique business ecosystem—from multilingual AI to GovTech integration.
                </p>
            </div>

            <!-- Services Grid -->
            <div class="space-y-8">
                
                <!-- Service 1: AI-Powered Multilingual Solutions -->
                <div class="service-card group bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-500 border border-slate-100 overflow-hidden reveal">
                    <div class="grid lg:grid-cols-3 gap-8 p-10">
                        <!-- Icon & Title -->
                        <div class="flex flex-col">
                            <div class="w-16 h-16 bg-gradient-to-br from-purple-50 to-purple-100 text-purple-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                                <i data-lucide="languages" class="w-8 h-8"></i>
                            </div>
                            <h3 class="text-2xl font-display font-bold text-slate-900 mb-3">AI-Powered Multilingual Solutions</h3>
                            <p class="text-sm text-slate-500 uppercase tracking-widest font-bold">SINGAPORE'S DIVERSITY</p>
                            <div class="mt-4 flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-purple-50 text-purple-700 text-xs font-bold rounded-full">English</span>
                                <span class="px-3 py-1 bg-purple-50 text-purple-700 text-xs font-bold rounded-full">中文</span>
                                <span class="px-3 py-1 bg-purple-50 text-purple-700 text-xs font-bold rounded-full">日本語</span>
                                <span class="px-3 py-1 bg-purple-50 text-purple-700 text-xs font-bold rounded-full">Melayu</span>
                                <span class="px-3 py-1 bg-purple-50 text-purple-700 text-xs font-bold rounded-full">தமிழ்</span>
                            </div>
                        </div>

                        <!-- Details -->
                        <div class="lg:col-span-2 space-y-6">
                            <p class="text-slate-600 leading-relaxed">
                                Singapore's multicultural business environment demands systems that seamlessly handle <strong class="text-slate-900">English, Mandarin, Japanese, Malay, and Tamil</strong>. Our AI-powered multilingual platforms enable enterprises to serve diverse customer bases without language barriers.
                            </p>
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-2 h-2 bg-purple-500 rounded-full mt-2"></div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-2">Natural Language Processing (NLP) AI</h4>
                                    <p class="text-slate-600 leading-relaxed">Advanced machine learning models trained on Singapore's linguistic nuances, including Singlish patterns and code-switching behaviors for authentic local communication.</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-2 h-2 bg-purple-500 rounded-full mt-2"></div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-2">Multilingual Customer Service Automation</h4>
                                    <p class="text-slate-600 leading-relaxed">AI chatbots and voice assistants that automatically detect language preference and respond fluently across all five major Singapore languages—reducing support costs by up to 70%.</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-2 h-2 bg-purple-500 rounded-full mt-2"></div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-2">Real-Time Translation for Business Documents</h4>
                                    <p class="text-slate-600 leading-relaxed">Enterprise document management systems with instant, context-aware translation preserving legal terminology, technical jargon, and cultural nuances critical for cross-border operations.</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-2 h-2 bg-purple-500 rounded-full mt-2"></div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-2">Japanese-English Bridge Systems</h4>
                                    <p class="text-slate-600 leading-relaxed">Specialized bilingual platforms connecting Japanese MNCs with Singapore operations—our unique heritage enables authentic Japanese business cultural integration.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service 2: GovTech Integration -->
                <div class="service-card group bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-500 border border-slate-100 overflow-hidden reveal">
                    <div class="grid lg:grid-cols-3 gap-8 p-10">
                        <!-- Icon & Title -->
                        <div class="flex flex-col">
                            <div class="w-16 h-16 bg-gradient-to-br from-red-50 to-red-100 text-brand-red rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                                <i data-lucide="shield-check" class="w-8 h-8"></i>
                            </div>
                            <h3 class="text-2xl font-display font-bold text-slate-900 mb-3">GovTech Integration</h3>
                            <p class="text-sm text-slate-500 uppercase tracking-widest font-bold">SMART NATION READY</p>
                            <div class="mt-4 space-y-2">
                                <div class="flex items-center gap-2 text-sm">
                                    <i data-lucide="check-circle" class="w-4 h-4 text-brand-red"></i>
                                    <span class="text-slate-600 font-medium">MyInfo API</span>
                                </div>
                                <div class="flex items-center gap-2 text-sm">
                                    <i data-lucide="check-circle" class="w-4 h-4 text-brand-red"></i>
                                    <span class="text-slate-600 font-medium">SingPass Authentication</span>
                                </div>
                                <div class="flex items-center gap-2 text-sm">
                                    <i data-lucide="check-circle" class="w-4 h-4 text-brand-red"></i>
                                    <span class="text-slate-600 font-medium">CorpPass Integration</span>
                                </div>
                            </div>
                        </div>

                        <!-- Details -->
                        <div class="lg:col-span-2 space-y-6">
                            <p class="text-slate-600 leading-relaxed">
                                Singapore's government is at the forefront of digital innovation with its <strong class="text-slate-900">Smart Nation initiative</strong>. We specialize in seamlessly integrating your business systems with official government APIs, unlocking efficiency and compliance benefits.
                            </p>
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-2 h-2 bg-brand-red rounded-full mt-2"></div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-2">MyInfo API Integration</h4>
                                    <p class="text-slate-600 leading-relaxed">Enable customers to auto-fill forms with verified government data—eliminating manual data entry and reducing onboarding time by 80%. NRIC, address, employment details instantly validated.</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-2 h-2 bg-brand-red rounded-full mt-2"></div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-2">SingPass & CorpPass Authentication</h4>
                                    <p class="text-slate-600 leading-relaxed">Implement secure, government-backed login systems for both individuals and businesses—meeting PDPA compliance standards while enhancing user trust and reducing fraud risk.</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-2 h-2 bg-brand-red rounded-full mt-2"></div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-2">Government Grant Application Systems</h4>
                                    <p class="text-slate-600 leading-relaxed">Build platforms that help SMEs access Productivity Solutions Grant (PSG), Innovation & Capability Voucher (ICV), and other government funding—positioning your business as a government-approved solutions provider.</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-2 h-2 bg-brand-red rounded-full mt-2"></div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-2">PDPA-Compliant Data Architecture</h4>
                                    <p class="text-slate-600 leading-relaxed">Enterprise systems architected from the ground up to meet Singapore's Personal Data Protection Act requirements—with built-in consent management, data portability, and breach notification mechanisms.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service 3: Financial Services Digital Transformation -->
                <div class="service-card group bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-500 border border-slate-100 overflow-hidden reveal">
                    <div class="grid lg:grid-cols-3 gap-8 p-10">
                        <!-- Icon & Title -->
                        <div class="flex flex-col">
                            <div class="w-16 h-16 bg-gradient-to-br from-emerald-50 to-emerald-100 text-emerald-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                                <i data-lucide="banknote" class="w-8 h-8"></i>
                            </div>
                            <h3 class="text-2xl font-display font-bold text-slate-900 mb-3">Financial Services Transformation</h3>
                            <p class="text-sm text-slate-500 uppercase tracking-widest font-bold">FINTECH CAPITAL</p>
                            <div class="mt-4 inline-flex items-center gap-2 px-3 py-1.5 bg-emerald-50 rounded-lg">
                                <i data-lucide="shield-check" class="w-4 h-4 text-emerald-600"></i>
                                <span class="text-xs font-bold text-emerald-700">MAS Compliant</span>
                            </div>
                        </div>

                        <!-- Details -->
                        <div class="lg:col-span-2 space-y-6">
                            <p class="text-slate-600 leading-relaxed">
                                Singapore is Asia's leading financial hub with <strong class="text-slate-900">$4+ trillion in assets under management</strong>. We build enterprise-grade fintech systems for banks, wealth managers, and insurance firms navigating digital transformation.
                            </p>
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-2 h-2 bg-emerald-500 rounded-full mt-2"></div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-2">AI-Powered Fraud Detection Systems</h4>
                                    <p class="text-slate-600 leading-relaxed">Machine learning models analyzing transaction patterns in real-time—detecting anomalies with 99.7% accuracy and reducing false positives by 65% compared to rule-based systems. MAS technology risk management compliant.</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-2 h-2 bg-emerald-500 rounded-full mt-2"></div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-2">Automated Regulatory Reporting Platforms</h4>
                                    <p class="text-slate-600 leading-relaxed">End-to-end compliance automation for MAS regulatory submissions including AML/CFT reports, capital adequacy calculations, and audit trail generation—reducing manual compliance effort by 80%.</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-2 h-2 bg-emerald-500 rounded-full mt-2"></div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-2">Wealth Management & Robo-Advisory Platforms</h4>
                                    <p class="text-slate-600 leading-relaxed">Sophisticated investment platforms with AI-driven portfolio optimization, risk profiling, and automated rebalancing—serving Singapore's affluent market with personalized wealth strategies at scale.</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-2 h-2 bg-emerald-500 rounded-full mt-2"></div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-2">Core Banking System Modernization</h4>
                                    <p class="text-slate-600 leading-relaxed">Cloud-native banking platforms replacing legacy mainframes—API-first architecture enabling open banking, real-time payments, and seamless third-party integrations while maintaining security and compliance.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service 4: Smart Office IoT Solutions -->
                <div class="service-card group bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-500 border border-slate-100 overflow-hidden reveal">
                    <div class="grid lg:grid-cols-3 gap-8 p-10">
                        <!-- Icon & Title -->
                        <div class="flex flex-col">
                            <div class="w-16 h-16 bg-gradient-to-br from-blue-50 to-blue-100 text-blue-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                                <i data-lucide="building-2" class="w-8 h-8"></i>
                            </div>
                            <h3 class="text-2xl font-display font-bold text-slate-900 mb-3">Smart Office IoT Solutions</h3>
                            <p class="text-sm text-slate-500 uppercase tracking-widest font-bold">INTELLIGENT BUILDINGS</p>
                            <div class="mt-4 space-y-2">
                                <div class="flex items-center justify-between text-sm">
                                    <span class="text-slate-600">Energy Savings</span>
                                    <span class="font-bold text-blue-600">↓ 40%</span>
                                </div>
                                <div class="w-full bg-slate-100 rounded-full h-2">
                                    <div class="bg-gradient-to-r from-blue-500 to-blue-600 h-2 rounded-full" style="width: 40%"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Details -->
                        <div class="lg:col-span-2 space-y-6">
                            <p class="text-slate-600 leading-relaxed">
                                Singapore's premium commercial real estate market demands cutting-edge building technology. We deploy <strong class="text-slate-900">IoT sensor networks and AI analytics</strong> that transform traditional offices into intelligent, responsive environments.
                            </p>
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-2 h-2 bg-blue-500 rounded-full mt-2"></div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-2">AI-Optimized Climate Control Systems</h4>
                                    <p class="text-slate-600 leading-relaxed">Smart HVAC systems learning occupancy patterns and weather forecasts—automatically adjusting temperature zones to maximize comfort while reducing energy consumption by 35-45% in tropical Singapore climate.</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-2 h-2 bg-blue-500 rounded-full mt-2"></div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-2">Intelligent Space Management & Hot-Desking</h4>
                                    <p class="text-slate-600 leading-relaxed">Real-time desk and meeting room booking systems with occupancy sensors—enabling flexible workspace strategies that reduce real estate costs by 30% while improving employee satisfaction through data-driven space allocation.</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-2 h-2 bg-blue-500 rounded-full mt-2"></div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-2">Predictive Maintenance & Building Operations</h4>
                                    <p class="text-slate-600 leading-relaxed">IoT sensors monitoring elevators, air conditioning, and electrical systems—AI algorithms predicting equipment failures before they occur, reducing downtime by 60% and extending asset lifespan by 25%.</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-2 h-2 bg-blue-500 rounded-full mt-2"></div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-2">Integrated Security & Access Control</h4>
                                    <p class="text-slate-600 leading-relaxed">Biometric authentication systems with AI-powered surveillance—facial recognition, anomaly detection, and automated visitor management ensuring Grade A building security standards while streamlining employee access.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service 5: Japan-Singapore Business Bridge -->
                <div class="service-card group bg-gradient-to-br from-slate-900 to-slate-800 text-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 border border-slate-700 overflow-hidden reveal">
                    <div class="grid lg:grid-cols-3 gap-8 p-10">
                        <!-- Icon & Title -->
                        <div class="flex flex-col">
                            <div class="w-16 h-16 bg-white/10 text-yellow-400 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 border border-white/20">
                                <i data-lucide="globe-2" class="w-8 h-8"></i>
                            </div>
                            <h3 class="text-2xl font-display font-bold mb-3">Japan-Singapore Business Bridge</h3>
                            <p class="text-sm text-slate-400 uppercase tracking-widest font-bold">CULTURAL INTEGRATION</p>
                            <div class="mt-4 flex gap-3">
                                <div class="w-12 h-12 bg-white rounded-lg flex items-center justify-center text-2xl">🇯🇵</div>
                                <div class="flex items-center">
                                    <i data-lucide="arrow-right" class="w-5 h-5 text-yellow-400"></i>
                                </div>
                                <div class="w-12 h-12 bg-white rounded-lg flex items-center justify-center text-2xl">🇸🇬</div>
                            </div>
                        </div>

                        <!-- Details -->
                        <div class="lg:col-span-2 space-y-6">
                            <p class="text-slate-300 leading-relaxed">
                                With <strong class="text-white">1,000+ Japanese MNCs operating in Singapore</strong> and Kaika's Japanese heritage, we uniquely understand both cultures. We build bilingual enterprise systems that seamlessly bridge Tokyo headquarters with Singapore operations.
                            </p>
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-2 h-2 bg-yellow-400 rounded-full mt-2"></div>
                                <div>
                                    <h4 class="font-bold text-white mb-2">Bilingual Enterprise Resource Planning (ERP)</h4>
                                    <p class="text-slate-300 leading-relaxed">Custom ERP systems with native Japanese and English interfaces—enabling seamless communication between Tokyo HQ and Singapore operations with automatic data synchronization, currency conversion, and cultural business logic adaptation.</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-2 h-2 bg-yellow-400 rounded-full mt-2"></div>
                                <div>
                                    <h4 class="font-bold text-white mb-2">Cross-Border Workflow Automation</h4>
                                    <p class="text-slate-300 leading-relaxed">Intelligent systems understanding Japanese business hierarchies (ringi-sho approval processes) while integrating with Singapore's fast-paced operations—bridging cultural workflow differences through smart automation.</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-2 h-2 bg-yellow-400 rounded-full mt-2"></div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-2">Real-Time Translation & Communication Platforms</h4>
                                    <p class="text-slate-300 leading-relaxed">AI-powered business communication tools with context-aware Japanese-English translation—preserving honorific language (keigo) and business formality levels while enabling rapid cross-cultural collaboration.</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-2 h-2 bg-yellow-400 rounded-full mt-2"></div>
                                <div>
                                    <h4 class="font-bold text-white mb-2">Cultural Compliance & Localization</h4>
                                    <p class="text-slate-300 leading-relaxed">Systems architected to meet both Japanese corporate governance standards and Singapore regulatory requirements—ensuring seamless compliance across jurisdictions while respecting cultural business practices.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- TECHNOLOGY STACK -->
    <section class="py-24 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16 reveal">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-slate-100 rounded-full mb-6">
                    <span class="w-2 h-2 bg-slate-900 rounded-full"></span>
                    <span class="text-slate-900 font-bold tracking-widest uppercase text-xs">Enterprise-Grade Stack</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-display font-bold text-slate-900 mb-6">
                    Powered by Leading Technologies
                </h2>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 reveal">
                <!-- AI/ML -->
                <div class="bg-gradient-to-br from-slate-50 to-white p-6 rounded-xl border border-slate-200 hover:border-purple-300 hover:shadow-lg transition-all duration-300">
                    <h3 class="font-display font-bold text-slate-900 mb-4 flex items-center gap-2">
                        <i data-lucide="brain-circuit" class="w-5 h-5 text-purple-600"></i>
                        AI & Machine Learning
                    </h3>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-purple-50 text-purple-700 text-xs font-semibold rounded-full">TensorFlow</span>
                        <span class="px-3 py-1 bg-purple-50 text-purple-700 text-xs font-semibold rounded-full">PyTorch</span>
                        <span class="px-3 py-1 bg-purple-50 text-purple-700 text-xs font-semibold rounded-full">OpenAI GPT</span>
                        <span class="px-3 py-1 bg-purple-50 text-purple-700 text-xs font-semibold rounded-full">Hugging Face</span>
                    </div>
                </div>

                <!-- Cloud & Infrastructure -->
                <div class="bg-gradient-to-br from-slate-50 to-white p-6 rounded-xl border border-slate-200 hover:border-blue-300 hover:shadow-lg transition-all duration-300">
                    <h3 class="font-display font-bold text-slate-900 mb-4 flex items-center gap-2">
                        <i data-lucide="cloud" class="w-5 h-5 text-blue-600"></i>
                        Cloud Infrastructure
                    </h3>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-blue-50 text-blue-700 text-xs font-semibold rounded-full">AWS</span>
                        <span class="px-3 py-1 bg-blue-50 text-blue-700 text-xs font-semibold rounded-full">Azure</span>
                        <span class="px-3 py-1 bg-blue-50 text-blue-700 text-xs font-semibold rounded-full">GCP</span>
                        <span class="px-3 py-1 bg-blue-50 text-blue-700 text-xs font-semibold rounded-full">Kubernetes</span>
                    </div>
                </div>

                <!-- Backend -->
                <div class="bg-gradient-to-br from-slate-50 to-white p-6 rounded-xl border border-slate-200 hover:border-emerald-300 hover:shadow-lg transition-all duration-300">
                    <h3 class="font-display font-bold text-slate-900 mb-4 flex items-center gap-2">
                        <i data-lucide="server" class="w-5 h-5 text-emerald-600"></i>
                        Backend & APIs
                    </h3>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-emerald-50 text-emerald-700 text-xs font-semibold rounded-full">Node.js</span>
                        <span class="px-3 py-1 bg-emerald-50 text-emerald-700 text-xs font-semibold rounded-full">Python</span>
                        <span class="px-3 py-1 bg-emerald-50 text-emerald-700 text-xs font-semibold rounded-full">Java</span>
                        <span class="px-3 py-1 bg-emerald-50 text-emerald-700 text-xs font-semibold rounded-full">GraphQL</span>
                    </div>
                </div>

                <!-- Frontend -->
                <div class="bg-gradient-to-br from-slate-50 to-white p-6 rounded-xl border border-slate-200 hover:border-cyan-300 hover:shadow-lg transition-all duration-300">
                    <h3 class="font-display font-bold text-slate-900 mb-4 flex items-center gap-2">
                        <i data-lucide="smartphone" class="w-5 h-5 text-cyan-600"></i>
                        Frontend & Mobile
                    </h3>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-cyan-50 text-cyan-700 text-xs font-semibold rounded-full">React</span>
                        <span class="px-3 py-1 bg-cyan-50 text-cyan-700 text-xs font-semibold rounded-full">Vue.js</span>
                        <span class="px-3 py-1 bg-cyan-50 text-cyan-700 text-xs font-semibold rounded-full">React Native</span>
                        <span class="px-3 py-1 bg-cyan-50 text-cyan-700 text-xs font-semibold rounded-full">Flutter</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="py-24 bg-gradient-to-b from-slate-50 to-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="relative bg-gradient-to-br from-brand-dark via-slate-900 to-cyan-900 rounded-3xl overflow-hidden">
                <!-- Tech Grid Pattern -->
                <div class="absolute inset-0 tech-grid opacity-20"></div>
                <div class="absolute inset-0 seigaiha-pattern opacity-10"></div>
                
                <!-- Animated Glow -->
                <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-l from-cyan-500/20 to-transparent"></div>
                
                <!-- Content -->
                <div class="relative z-10 px-8 md:px-16 py-20 text-center">
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 rounded-full mb-8">
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-cyan-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-cyan-400"></span>
                        </span>
                        <span class="text-white/90 font-bold tracking-widest uppercase text-xs">Transform Your Business</span>
                    </div>

                    <h2 class="text-3xl md:text-5xl font-display font-bold text-white mb-6 leading-tight">
                        Ready to Build the Future?<br/>
                        <span class="gradient-text">Let's Engineer Your Success</span>
                    </h2>
                    
                    <p class="text-slate-300 text-lg max-w-2xl mx-auto mb-10">
                        From AI automation to enterprise systems—let our Singapore team architect your digital transformation.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="javascript:void(0)" onclick="openModal('consultationModal')" class="btn-shimmer group px-10 py-5 bg-gradient-to-r from-cyan-500 to-cyan-400 hover:from-cyan-600 hover:to-cyan-500 text-white font-bold rounded-xl transition-all duration-300 shadow-lg hover:shadow-cyan-500/40 flex items-center justify-center gap-3">
                            <span>Book Tech Consultation</span>
                            <i data-lucide="calendar-check" class="w-5 h-5 group-hover:scale-110 transition-transform"></i>
                        </a>
                        <a href="javascript:void(0)" onclick="openModal('quoteModal')" class="group px-10 py-5 bg-white/10 border-2 border-white/50 hover:bg-white/20 hover:border-white text-white font-bold rounded-xl transition-all duration-300 backdrop-blur-sm flex items-center justify-center gap-3">
                            <span>Request Demo</span>
                            <i data-lucide="presentation" class="w-5 h-5"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>