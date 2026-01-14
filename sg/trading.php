<?php include 'header.php'; ?>

    <!-- HERO SECTION -->
    <section class="relative h-[60vh] min-h-[500px] w-full overflow-hidden flex items-center justify-center">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1578575437130-527eed3abbec?auto=format&fit=crop&q=80&w=2000" alt="Global Trading" class="w-full h-full object-cover">
            <div class="absolute inset-0 hero-overlay"></div>
            <div class="absolute inset-0 seigaiha-pattern"></div>
        </div>

        <!-- Japanese Kanji -->
        <div class="kanji-decoration top-20 right-10 text-white">貿</div>
        <div class="kanji-decoration bottom-10 left-10 text-white">易</div>

        <!-- Content -->
        <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-8 text-center pt-20">
            <!-- Breadcrumb -->
            <div class="flex items-center justify-center text-white/70 text-sm mb-8 animate-fade-in-down">
                <a href="index.html" class="hover:text-white transition-colors">Home</a>
                <span class="breadcrumb-separator"></span>
                <a href="index.html#services" class="hover:text-white transition-colors">Services</a>
                <span class="breadcrumb-separator"></span>
                <span class="text-white">Trading</span>
            </div>

            <div class="space-y-6">
                <!-- Badge -->
                <div class="inline-flex items-center gap-3 px-5 py-2 rounded-full border border-white/20 bg-white/5 text-white/90 text-xs font-medium uppercase tracking-[0.2em] backdrop-blur-sm animate-fade-in-down">
                    <i data-lucide="arrow-left-right" class="w-4 h-4"></i>
                    International Trading
                </div>
                
                <!-- Main Heading -->
                <h1 class="text-4xl md:text-6xl lg:text-7xl font-display font-bold text-white tracking-tight leading-[1.1] animate-fade-in-up">
                    Connecting Markets,<br/>
                    <span class="gradient-text">Creating Value</span>
                </h1>
                
                <!-- Subheading -->
                <p class="text-lg md:text-xl text-slate-300 max-w-3xl mx-auto font-light leading-relaxed animate-fade-in-up" style="animation-delay: 0.2s;">
                    Your trusted bridge connecting Japan, Singapore, and ASEAN markets through strategic trade solutions and quality assurance.
                </p>
            </div>
        </div>
    </section>

    <!-- MAIN INTRODUCTION -->
    <section class="py-24 bg-white relative overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-l from-slate-50 to-transparent"></div>
        <div class="kanji-decoration -top-20 -left-20 text-slate-900">橋</div>

        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <!-- Content Side -->
                <div class="reveal">
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-blue-50 rounded-full mb-6">
                        <span class="w-2 h-2 bg-blue-500 rounded-full"></span>
                        <span class="text-blue-600 font-bold tracking-widest uppercase text-xs">Three-Country Trade Specialist</span>
                    </div>
                    
                    <h2 class="text-3xl md:text-4xl font-display font-bold mb-8 text-slate-900 leading-tight">
                        Your Strategic Trade Partner Across Asia-Pacific
                    </h2>
                    
                    <div class="space-y-6 text-slate-600 leading-relaxed text-lg">
                        <p>
                            Kaika Singapore operates at the nexus of three powerful economies: <strong class="text-slate-900">Japan's technological excellence, Singapore's strategic location, and ASEAN's growing markets</strong>. We don't just move products—we create value through quality assurance, cultural understanding, and seamless logistics integration.
                        </p>
                        
                        <p>
                            Backed by <strong class="text-slate-900">Kaika Holdings Japan</strong>, we bring authentic Japanese business relationships and supply chain access. Combined with Singapore's world-class Free Trade Zone infrastructure and our deep ASEAN network, we offer a complete trading ecosystem that bridges cultures, manages risks, and optimizes every transaction.
                        </p>

                        <p>
                            From automotive parts to consumer electronics, Japanese food to industrial equipment—we ensure every product meets rigorous quality standards while navigating complex customs, logistics, and regulatory landscapes across borders.
                        </p>
                    </div>

                    <div class="mt-10 flex flex-wrap gap-4">
                        <a href="javascript:void(0)" onclick="openModal('quoteModal')" class="btn-shimmer group px-8 py-4 bg-gradient-to-r from-blue-500 to-blue-400 hover:from-blue-600 hover:to-blue-500 text-white font-bold rounded-lg transition-all duration-300 shadow-lg hover:shadow-blue-500/40 flex items-center gap-3">
                            <span>Request Trade Quote</span>
                            <i data-lucide="arrow-right" class="w-5 h-5 group-hover:translate-x-1 transition-transform"></i>
                        </a>
                        <a href="index.html#contact" class="group px-8 py-4 border-2 border-slate-200 hover:border-blue-500 text-slate-700 hover:text-blue-600 font-bold rounded-lg transition-all duration-300 flex items-center gap-3">
                            <span>Partner With Us</span>
                            <i data-lucide="handshake" class="w-5 h-5"></i>
                        </a>
                    </div>
                </div>

                <!-- Trade Flow Visualization -->
                <div class="reveal">
                    <div class="relative bg-gradient-to-br from-blue-50 to-white p-10 rounded-3xl border border-blue-100 shadow-xl">
                        <h3 class="text-xl font-display font-bold text-slate-900 mb-8 text-center">Our Trade Network</h3>
                        
                        <!-- Trade Flow Diagram -->
                        <div class="space-y-8">
                            <!-- Japan -->
                            <div class="flex items-center gap-6">
                                <div class="w-20 h-20 bg-gradient-to-br from-red-500 to-red-600 rounded-2xl flex items-center justify-center text-4xl shadow-lg flex-shrink-0">
                                    🇯🇵
                                </div>
                                <div class="flex-1">
                                    <h4 class="font-display font-bold text-slate-900 mb-1">Japan</h4>
                                    <p class="text-sm text-slate-600">Quality Products & Technology</p>
                                    <div class="mt-2 flex gap-2">
                                        <span class="px-2 py-1 bg-red-50 text-red-700 text-xs rounded">Automotive</span>
                                        <span class="px-2 py-1 bg-red-50 text-red-700 text-xs rounded">Electronics</span>
                                        <span class="px-2 py-1 bg-red-50 text-red-700 text-xs rounded">F&B</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Arrow Down -->
                            <div class="flex justify-center">
                                <div class="flow-arrow">
                                    <i data-lucide="arrow-down" class="w-8 h-8 text-blue-500"></i>
                                </div>
                            </div>

                            <!-- Singapore (Hub) -->
                            <div class="flex items-center gap-6 bg-gradient-to-r from-blue-500 to-blue-600 p-6 rounded-2xl text-white shadow-2xl">
                                <div class="w-20 h-20 bg-white rounded-2xl flex items-center justify-center text-4xl shadow-lg flex-shrink-0">
                                    🇸🇬
                                </div>
                                <div class="flex-1">
                                    <h4 class="font-display font-bold mb-1">Singapore Hub</h4>
                                    <p class="text-sm text-blue-100">Quality Control • FTZ Re-export • Trade Finance</p>
                                    <div class="mt-2 flex items-center gap-2 text-xs">
                                        <i data-lucide="shield-check" class="w-4 h-4"></i>
                                        <span>Kaika Singapore</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Arrow Down -->
                            <div class="flex justify-center">
                                <div class="flow-arrow" style="animation-delay: 0.5s;">
                                    <i data-lucide="arrow-down" class="w-8 h-8 text-blue-500"></i>
                                </div>
                            </div>

                            <!-- ASEAN -->
                            <div class="flex items-center gap-6">
                                <div class="w-20 h-20 bg-gradient-to-br from-emerald-500 to-emerald-600 rounded-2xl flex items-center justify-center shadow-lg flex-shrink-0">
                                    <span class="text-2xl font-bold text-white">ASEAN</span>
                                </div>
                                <div class="flex-1">
                                    <h4 class="font-display font-bold text-slate-900 mb-1">ASEAN Markets</h4>
                                    <p class="text-sm text-slate-600">680M Consumers • Growing Economy</p>
                                    <div class="mt-2 flex gap-1 text-xl">
                                        🇲🇾 🇹🇭 🇮🇩 🇻🇳 🇵🇭
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Stats -->
                        <div class="mt-8 pt-8 border-t border-blue-200 grid grid-cols-3 gap-4 text-center">
                            <div>
                                <p class="text-2xl font-display font-bold text-blue-600">15+</p>
                                <p class="text-xs text-slate-600 mt-1">Years Trading</p>
                            </div>
                            <div>
                                <p class="text-2xl font-display font-bold text-blue-600">30+</p>
                                <p class="text-xs text-slate-600 mt-1">Countries</p>
                            </div>
                            <div>
                                <p class="text-2xl font-display font-bold text-blue-600">500+</p>
                                <p class="text-xs text-slate-600 mt-1">Partners</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TRADING SERVICES -->
    <section class="py-24 bg-gradient-to-b from-slate-50 to-white relative overflow-hidden">
        <!-- Decorative Elements -->
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-blue-500/5 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-emerald-500/5 rounded-full blur-3xl"></div>
        <div class="kanji-decoration top-20 right-20 text-slate-900">商</div>

        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-20 reveal">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-blue-50 rounded-full mb-6">
                    <span class="w-2 h-2 bg-blue-500 rounded-full"></span>
                    <span class="text-blue-600 font-bold tracking-widest uppercase text-xs">Trading Solutions</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-display font-bold text-slate-900 mb-6">
                    Comprehensive Import/Export Services
                </h2>
                <p class="text-slate-600 text-lg max-w-3xl mx-auto">
                    From sourcing to delivery, we handle every aspect of international trade with Japanese precision and Singapore efficiency.
                </p>
            </div>

            <!-- Services Grid -->
            <div class="space-y-8">
                
                <!-- Service 1: Japan-ASEAN Trade Bridge -->
                <div class="service-card group bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-500 border border-slate-100 overflow-hidden reveal">
                    <div class="grid lg:grid-cols-3 gap-8 p-10">
                        <!-- Icon & Title -->
                        <div class="flex flex-col">
                            <div class="w-16 h-16 bg-gradient-to-br from-blue-50 to-blue-100 text-blue-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                                <i data-lucide="globe-2" class="w-8 h-8"></i>
                            </div>
                            <h3 class="text-2xl font-display font-bold text-slate-900 mb-3">Japan-ASEAN Trade Bridge</h3>
                            <p class="text-sm text-slate-500 uppercase tracking-widest font-bold">CULTURAL EXPERTISE</p>
                            <div class="mt-4 inline-flex items-center gap-2 px-3 py-1.5 bg-blue-50 rounded-lg">
                                <i data-lucide="star" class="w-4 h-4 text-blue-600"></i>
                                <span class="text-xs font-bold text-blue-700">Our Specialty</span>
                            </div>
                        </div>

                        <!-- Details -->
                        <div class="lg:col-span-2 space-y-6">
                            <p class="text-slate-600 leading-relaxed">
                                Leveraging our <strong class="text-slate-900">Japanese heritage and Singapore base</strong>, we uniquely connect quality Japanese products with growing ASEAN markets. We understand both cultures, speak both languages, and navigate both business environments seamlessly.
                            </p>
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-2 h-2 bg-blue-500 rounded-full mt-2"></div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-2">Japanese Product Sourcing</h4>
                                    <p class="text-slate-600 leading-relaxed">Direct relationships with Japanese manufacturers—from Tokyo to Osaka—enabling access to high-quality products at competitive prices with authentic Japanese QC standards.</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-2 h-2 bg-blue-500 rounded-full mt-2"></div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-2">ASEAN Market Distribution</h4>
                                    <p class="text-slate-600 leading-relaxed">Established distribution networks across Malaysia, Thailand, Indonesia, Vietnam, and Philippines—delivering Japanese excellence to 680 million ASEAN consumers.</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-2 h-2 bg-blue-500 rounded-full mt-2"></div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-2">Reverse Trade Flow (ASEAN to Japan)</h4>
                                    <p class="text-slate-600 leading-relaxed">Export ASEAN products to Japan—palm oil, rubber, textiles, electronics components—with quality certification meeting Japanese import standards.</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-2 h-2 bg-blue-500 rounded-full mt-2"></div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-2">Cultural & Language Support</h4>
                                    <p class="text-slate-600 leading-relaxed">Bilingual documentation, business etiquette guidance, and cultural mediation—eliminating misunderstandings and building long-term partnerships.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service 2: Automotive Parts Trading -->
                <div class="service-card group bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-500 border border-slate-100 overflow-hidden reveal">
                    <div class="grid lg:grid-cols-3 gap-8 p-10">
                        <!-- Icon & Title -->
                        <div class="flex flex-col">
                            <div class="w-16 h-16 bg-gradient-to-br from-red-50 to-red-100 text-brand-red rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                                <i data-lucide="car" class="w-8 h-8"></i>
                            </div>
                            <h3 class="text-2xl font-display font-bold text-slate-900 mb-3">Automotive Parts Trading</h3>
                            <p class="text-sm text-slate-500 uppercase tracking-widest font-bold">JAPANESE QUALITY</p>
                        </div>

                        <!-- Details -->
                        <div class="lg:col-span-2 space-y-6">
                            <p class="text-slate-600 leading-relaxed">
                                Singapore imports over <strong class="text-slate-900">$8 billion in vehicles and parts annually</strong>. We specialize in Japanese OEM and aftermarket parts distribution across Singapore and ASEAN—from Toyota to Honda, Nissan to Mazda.
                            </p>
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-2 h-2 bg-brand-red rounded-full mt-2"></div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-2">OEM & Genuine Parts Import</h4>
                                    <p class="text-slate-600 leading-relaxed">Direct sourcing from Japanese manufacturers ensuring authentic parts with full warranty support—engine components, transmissions, electronics, body parts.</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-2 h-2 bg-brand-red rounded-full mt-2"></div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-2">Aftermarket Parts Distribution</h4>
                                    <p class="text-slate-600 leading-relaxed">High-quality Japanese aftermarket brands at competitive pricing—serving workshops, dealers, and fleet operators across Singapore and Malaysia.</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-2 h-2 bg-brand-red rounded-full mt-2"></div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-2">Used Vehicle Export</h4>
                                    <p class="text-slate-600 leading-relaxed">Export quality used vehicles from Singapore to developing ASEAN markets—full inspection, refurbishment, and export documentation handled end-to-end.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service 3: Food & Beverage Trading -->
                <div class="service-card group bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-500 border border-slate-100 overflow-hidden reveal">
                    <div class="grid lg:grid-cols-3 gap-8 p-10">
                        <!-- Icon & Title -->
                        <div class="flex flex-col">
                            <div class="w-16 h-16 bg-gradient-to-br from-orange-50 to-orange-100 text-orange-500 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                                <i data-lucide="utensils" class="w-8 h-8"></i>
                            </div>
                            <h3 class="text-2xl font-display font-bold text-slate-900 mb-3">Japanese F&B Trading</h3>
                            <p class="text-sm text-slate-500 uppercase tracking-widest font-bold">AUTHENTIC IMPORTS</p>
                        </div>

                        <!-- Details -->
                        <div class="lg:col-span-2 space-y-6">
                            <p class="text-slate-600 leading-relaxed">
                                Japanese cuisine is booming across Singapore and ASEAN. We import <strong class="text-slate-900">authentic Japanese food products</strong>—from sake and snacks to frozen ingredients and specialty items—serving restaurants, retailers, and distributors.
                            </p>
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-2 h-2 bg-orange-500 rounded-full mt-2"></div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-2">Premium Japanese Beverages</h4>
                                    <p class="text-slate-600 leading-relaxed">Sake, shochu, whisky, and specialty teas directly from Japanese breweries—authentic products with proper licensing and halal certification where applicable.</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-2 h-2 bg-orange-500 rounded-full mt-2"></div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-2">Restaurant Supply Chain</h4>
                                    <p class="text-slate-600 leading-relaxed">Frozen seafood, wagyu beef, specialty ingredients, and cooking supplies for Japanese restaurants—temperature-controlled logistics ensuring freshness and quality.</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-2 h-2 bg-orange-500 rounded-full mt-2"></div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-2">Retail & Consumer Products</h4>
                                    <p class="text-slate-600 leading-relaxed">Snacks, instant noodles, sauces, and beverages for supermarkets and convenience stores—popular Japanese brands meeting regional taste preferences.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service 4: Electronics & Technology Equipment -->
                <div class="service-card group bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-500 border border-slate-100 overflow-hidden reveal">
                    <div class="grid lg:grid-cols-3 gap-8 p-10">
                        <!-- Icon & Title -->
                        <div class="flex flex-col">
                            <div class="w-16 h-16 bg-gradient-to-br from-purple-50 to-purple-100 text-purple-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                                <i data-lucide="smartphone" class="w-8 h-8"></i>
                            </div>
                            <h3 class="text-2xl font-display font-bold text-slate-900 mb-3">Electronics Trading</h3>
                            <p class="text-sm text-slate-500 uppercase tracking-widest font-bold">TECH DISTRIBUTION</p>
                        </div>

                        <!-- Details -->
                        <div class="lg:col-span-2 space-y-6">
                            <p class="text-slate-600 leading-relaxed">
                                Singapore is Southeast Asia's <strong class="text-slate-900">electronics trading hub</strong>. We facilitate trade in consumer electronics, industrial components, and technology equipment—leveraging Singapore's tax-free status for regional distribution.
                            </p>
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-2 h-2 bg-purple-500 rounded-full mt-2"></div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-2">Consumer Electronics Distribution</h4>
                                    <p class="text-slate-600 leading-relaxed">Smartphones, laptops, home appliances, and audio equipment—authorized distribution for major Japanese and Korean brands across ASEAN markets.</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-2 h-2 bg-purple-500 rounded-full mt-2"></div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-2">Industrial Electronic Components</h4>
                                    <p class="text-slate-600 leading-relaxed">Semiconductors, sensors, PCB components, and industrial electronics for manufacturing—serving Singapore's advanced electronics manufacturing sector.</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-2 h-2 bg-purple-500 rounded-full mt-2"></div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-2">Technology Equipment Trading</h4>
                                    <p class="text-slate-600 leading-relaxed">Office equipment, IT infrastructure, and automation systems—connecting global manufacturers with Singapore enterprises and regional distributors.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service 5: Consumer Goods Import/Export -->
                <div class="service-card group bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-500 border border-slate-100 overflow-hidden reveal">
                    <div class="grid lg:grid-cols-3 gap-8 p-10">
                        <!-- Icon & Title -->
                        <div class="flex flex-col">
                            <div class="w-16 h-16 bg-gradient-to-br from-pink-50 to-pink-100 text-pink-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                                <i data-lucide="shopping-bag" class="w-8 h-8"></i>
                            </div>
                            <h3 class="text-2xl font-display font-bold text-slate-900 mb-3">Consumer Goods Trading</h3>
                            <p class="text-sm text-slate-500 uppercase tracking-widest font-bold">LIFESTYLE PRODUCTS</p>
                        </div>

                        <!-- Details -->
                        <div class="lg:col-span-2 space-y-6">
                            <p class="text-slate-600 leading-relaxed">
                                From fashion to cosmetics, home goods to lifestyle products—we connect global brands with Singapore's affluent consumer market and help local brands reach international audiences.
                            </p>
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-2 h-2 bg-pink-500 rounded-full mt-2"></div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-2">Fashion & Apparel Import</h4>
                                    <p class="text-slate-600 leading-relaxed">Japanese and Korean fashion brands, sustainable clothing lines, and premium apparel—catering to Singapore's fashion-conscious market with trend forecasting and seasonal planning.</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-2 h-2 bg-pink-500 rounded-full mt-2"></div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-2">Beauty & Cosmetics Trading</h4>
                                    <p class="text-slate-600 leading-relaxed">K-beauty, J-beauty, and premium skincare products—Singapore is ASEAN's beauty hub with $2B+ annual cosmetics imports. We handle licensing, registration, and halal certification.</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-2 h-2 bg-pink-500 rounded-full mt-2"></div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-2">Home & Lifestyle Products</h4>
                                    <p class="text-slate-600 leading-relaxed">Furniture, homeware, kitchenware, and lifestyle goods—connecting minimalist Japanese design and innovative Asian products with Singapore's premium home goods market.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service 6: Re-Export Trading (FTZ) -->
                <div class="service-card group bg-gradient-to-br from-slate-900 to-slate-800 text-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 border border-slate-700 overflow-hidden reveal">
                    <div class="grid lg:grid-cols-3 gap-8 p-10">
                        <!-- Icon & Title -->
                        <div class="flex flex-col">
                            <div class="w-16 h-16 bg-white/10 text-yellow-400 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 border border-white/20">
                                <i data-lucide="package-check" class="w-8 h-8"></i>
                            </div>
                            <h3 class="text-2xl font-display font-bold mb-3">Re-Export via Singapore FTZ</h3>
                            <p class="text-sm text-slate-400 uppercase tracking-widest font-bold">TAX OPTIMIZATION</p>
                            <div class="mt-4 inline-flex items-center gap-2 px-3 py-1.5 bg-yellow-500/20 rounded-lg border border-yellow-500/30">
                                <i data-lucide="trending-down" class="w-4 h-4 text-yellow-400"></i>
                                <span class="text-xs font-bold text-yellow-300">Duty Savings</span>
                            </div>
                        </div>

                        <!-- Details -->
                        <div class="lg:col-span-2 space-y-6">
                            <p class="text-slate-300 leading-relaxed">
                                Singapore's <strong class="text-white">Free Trade Zone (FTZ)</strong> allows goods to enter tax-free, be stored, repackaged, or customized, then re-exported without import duties—maximizing cost efficiency for your supply chain.
                            </p>
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-2 h-2 bg-yellow-400 rounded-full mt-2"></div>
                                <div>
                                    <h4 class="font-bold text-white mb-2">Duty-Free Storage & Processing</h4>
                                    <p class="text-slate-300 leading-relaxed">Store goods in Singapore FTZ without paying import duties—repackage, relabel, or quality-check before shipping to final destination with optimized duty structure.</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-2 h-2 bg-yellow-400 rounded-full mt-2"></div>
                                <div>
                                    <h4 class="font-bold text-white mb-2">Value-Added Services in FTZ</h4>
                                    <p class="text-slate-300 leading-relaxed">Light assembly, kitting, customization, and quality control within the FTZ—adding value while maintaining duty-free status until final export.</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-2 h-2 bg-yellow-400 rounded-full mt-2"></div>
                                <div>
                                    <h4 class="font-bold text-white mb-2">Strategic Trade Hub Advantages</h4>
                                    <p class="text-slate-300 leading-relaxed">Singapore's 26 FTAs and strategic location enable duty savings of 5-35% depending on product and destination—we optimize your trade routes for maximum savings.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service 7: Sourcing & Procurement -->
                <div class="service-card group bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-500 border border-slate-100 overflow-hidden reveal">
                    <div class="grid lg:grid-cols-3 gap-8 p-10">
                        <!-- Icon & Title -->
                        <div class="flex flex-col">
                            <div class="w-16 h-16 bg-gradient-to-br from-emerald-50 to-emerald-100 text-emerald-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                                <i data-lucide="search-check" class="w-8 h-8"></i>
                            </div>
                            <h3 class="text-2xl font-display font-bold text-slate-900 mb-3">Sourcing & Procurement</h3>
                            <p class="text-sm text-slate-500 uppercase tracking-widest font-bold">SUPPLIER MANAGEMENT</p>
                        </div>

                        <!-- Details -->
                        <div class="lg:col-span-2 space-y-6">
                            <p class="text-slate-600 leading-relaxed">
                                Can't find the right supplier? We leverage our <strong class="text-slate-900">Japan-Singapore-ASEAN network</strong> to source quality products at competitive prices—handling negotiations, QC, and logistics so you can focus on your business.
                            </p>
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-2 h-2 bg-emerald-500 rounded-full mt-2"></div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-2">Supplier Identification & Vetting</h4>
                                    <p class="text-slate-600 leading-relaxed">Find reliable manufacturers in Japan, China, Taiwan, and ASEAN—factory audits, financial checks, and reference verification ensuring you partner with trustworthy suppliers.</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-2 h-2 bg-emerald-500 rounded-full mt-2"></div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-2">Quality Control & Factory Inspections</h4>
                                    <p class="text-slate-600 leading-relaxed">On-site inspections, production monitoring, and pre-shipment quality checks—ensuring products meet your specifications and international standards before they leave the factory.</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-2 h-2 bg-emerald-500 rounded-full mt-2"></div>
                                <div>
                                    <h4 class="font-bold text-slate-900 mb-2">Price Negotiation & Contract Management</h4>
                                    <p class="text-slate-600 leading-relaxed">Leverage our buying power and cultural expertise to secure competitive pricing—we handle contracts, payment terms, and dispute resolution in local languages.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- WHY CHOOSE KAIKA -->
    <section class="py-24 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16 reveal">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-red-50 rounded-full mb-6">
                    <span class="w-2 h-2 bg-brand-red rounded-full"></span>
                    <span class="text-brand-red font-bold tracking-widest uppercase text-xs">Competitive Advantages</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-display font-bold text-slate-900 mb-6">
                    Why Trade with Kaika Singapore?
                </h2>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="group bg-gradient-to-br from-slate-50 to-white p-8 rounded-2xl border border-slate-100 hover:border-blue-200 hover:shadow-lg transition-all duration-300 reveal">
                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i data-lucide="shield-check" class="w-7 h-7 text-white"></i>
                    </div>
                    <h3 class="text-xl font-display font-bold text-slate-900 mb-3">Japanese Quality Standards</h3>
                    <p class="text-slate-600 leading-relaxed">Every product undergoes rigorous QC meeting Japanese standards—leveraging Kaika Holdings' decades of quality assurance expertise.</p>
                </div>

                <div class="group bg-gradient-to-br from-slate-50 to-white p-8 rounded-2xl border border-slate-100 hover:border-emerald-200 hover:shadow-lg transition-all duration-300 reveal">
                    <div class="w-14 h-14 bg-gradient-to-br from-emerald-500 to-emerald-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i data-lucide="package" class="w-7 h-7 text-white"></i>
                    </div>
                    <h3 class="text-xl font-display font-bold text-slate-900 mb-3">Integrated Logistics</h3>
                    <p class="text-slate-600 leading-relaxed">Seamless connection with our logistics division—one-stop solution from sourcing to delivery, optimizing costs and transit times.</p>
                </div>

                <div class="group bg-gradient-to-br from-slate-50 to-white p-8 rounded-2xl border border-slate-100 hover:border-purple-200 hover:shadow-lg transition-all duration-300 reveal">
                    <div class="w-14 h-14 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i data-lucide="file-check" class="w-7 h-7 text-white"></i>
                    </div>
                    <h3 class="text-xl font-display font-bold text-slate-900 mb-3">Trade Finance Support</h3>
                    <p class="text-slate-600 leading-relaxed">Partner with major banks to offer LC arrangements, trade credit, and flexible payment terms—making international trade accessible to SMEs.</p>
                </div>

                <div class="group bg-gradient-to-br from-slate-50 to-white p-8 rounded-2xl border border-slate-100 hover:border-orange-200 hover:shadow-lg transition-all duration-300 reveal">
                    <div class="w-14 h-14 bg-gradient-to-br from-orange-500 to-orange-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i data-lucide="users" class="w-7 h-7 text-white"></i>
                    </div>
                    <h3 class="text-xl font-display font-bold text-slate-900 mb-3">Cultural & Language Bridge</h3>
                    <p class="text-slate-600 leading-relaxed">Bilingual teams fluent in Japanese, English, Mandarin, and Malay—eliminating communication barriers and cultural misunderstandings.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="py-24 bg-gradient-to-b from-slate-50 to-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="relative bg-gradient-to-br from-blue-600 via-blue-500 to-blue-400 rounded-3xl overflow-hidden">
                <!-- Pattern Overlay -->
                <div class="absolute inset-0 seigaiha-pattern opacity-10"></div>
                
                <!-- Content -->
                <div class="relative z-10 px-8 md:px-16 py-20 text-center">
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/20 rounded-full mb-8">
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-white opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-white"></span>
                        </span>
                        <span class="text-white/90 font-bold tracking-widest uppercase text-xs">Start Trading Today</span>
                    </div>

                    <h2 class="text-3xl md:text-5xl font-display font-bold text-white mb-6 leading-tight">
                        Ready to Expand Your<br/>
                        International Trade?
                    </h2>
                    
                    <p class="text-white/90 text-lg max-w-2xl mx-auto mb-10">
                        Let our experienced team connect you with quality suppliers and new markets across Asia-Pacific.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="javascript:void(0)" onclick="openModal('quoteModal')" class="btn-shimmer group px-10 py-5 bg-white hover:bg-slate-50 text-blue-600 font-bold rounded-xl transition-all duration-300 shadow-lg hover:shadow-xl flex items-center justify-center gap-3">
                            <span>Request Trade Quote</span>
                            <i data-lucide="arrow-right" class="w-5 h-5 group-hover:translate-x-1 transition-transform"></i>
                        </a>
                        <a href="index.html#contact" class="group px-10 py-5 bg-white/10 border-2 border-white/50 hover:bg-white/20 hover:border-white text-white font-bold rounded-xl transition-all duration-300 backdrop-blur-sm flex items-center justify-center gap-3">
                            <span>Schedule Meeting</span>
                            <i data-lucide="calendar" class="w-5 h-5"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>

    <!-- BACK TO TOP BUTTON -->
    <button id="back-to-top" class="fixed bottom-8 right-8 w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 text-white rounded-xl shadow-lg opacity-0 invisible hover:shadow-blue-500/40 transition-all duration-300 z-50 flex items-center justify-center group">
        <i data-lucide="chevron-up" class="w-6 h-6 group-hover:-translate-y-1 transition-transform"></i>
    </button>

    <!-- POPUP MODALS -->
    <!-- Add your modal HTML from previous responses here -->

    <script>
        // Initialize Icons
        lucide.createIcons();

        // Mobile Menu Toggle
        const mobileBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        
        mobileBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Scroll Progress Bar
        const scrollProgress = document.getElementById('scroll-progress');
        window.addEventListener('scroll', () => {
            const scrollTop = window.scrollY;
            const docHeight = document.documentElement.scrollHeight - window.innerHeight;
            const scrollPercent = (scrollTop / docHeight) * 100;
            scrollProgress.style.width = scrollPercent + '%';
        });

        // Back to Top Button
        const backToTop = document.getElementById('back-to-top');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 500) {
                backToTop.classList.remove('opacity-0', 'invisible');
                backToTop.classList.add('opacity-100', 'visible');
            } else {
                backToTop.classList.add('opacity-0', 'invisible');
                backToTop.classList.remove('opacity-100', 'visible');
            }
        });

        backToTop.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        // Scroll Reveal Animation
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

        // Modal Functions
        function openModal(modalId) {
            const modal = document.getElementById(modalId);
            if (modal) {
                modal.classList.remove('opacity-0', 'invisible');
                const content = modal.querySelector('[id$="ModalContent"]');
                setTimeout(() => {
                    content.classList.remove('scale-95');
                    content.classList.add('scale-100');
                }, 10);
                document.body.style.overflow = 'hidden';
                lucide.createIcons();
            }
        }

        function closeModal(modalId) {
            const modal = document.getElementById(modalId);
            if (modal) {
                const content = modal.querySelector('[id$="ModalContent"]');
                content.classList.remove('scale-100');
                content.classList.add('scale-95');
                setTimeout(() => {
                    modal.classList.add('opacity-0', 'invisible');
                }, 200);
                document.body.style.overflow = '';
            }
        }
    </script>
</body>
</html>