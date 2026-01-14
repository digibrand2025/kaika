<?php 
$page_title = "OUR COMPANIES - KAIKA HOLDINGS";
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
        
        .animate-fade-in-up {
            animation: fade-in-up 0.8s ease-out forwards;
        }
        .animate-ken-burns {
            animation: ken-burns 20s ease-out infinite alternate;
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

        /* Text Glow */
        .text-glow {
            text-shadow: 0 0 20px rgba(255,255,255,0.3);
        }

        /* Company Logo Styling */
        .company-logo {
            transition: all 0.3s ease;
        }
        .company-logo:hover {
            transform: scale(1.05);
        }
    </style>

    <!-- HERO SECTION -->
    <section class="relative h-[60vh] min-h-[500px] w-full overflow-hidden bg-slate-900">
        <div class="absolute inset-0 overflow-hidden">
            <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&q=80&w=2000" class="w-full h-full object-cover animate-ken-burns" alt="Our Companies">
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-brand-red to-slate-900 mix-blend-multiply opacity-80"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/20 to-transparent"></div>

        <!-- Content -->
        <div class="absolute inset-0 flex items-center">
            <div class="max-w-7xl mx-auto px-6 lg:px-8 w-full">
                <div class="max-w-4xl space-y-6 animate-fade-in-up">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="h-px w-12 bg-brand-red"></span>
                        <span class="text-brand-red font-bold tracking-widest uppercase text-sm">Our Ecosystem</span>
                    </div>
                    
                    <h1 class="text-5xl md:text-7xl font-bold text-white leading-tight text-glow">
                        The Kaika Family
                    </h1>
                    
                    <p class="text-xl md:text-2xl text-slate-100 mt-6 max-w-2xl font-light leading-relaxed">
                        Eight dynamic companies, one unified vision of excellence
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- STATS STRIP -->
    <div class="relative z-30 -mt-20 max-w-7xl mx-auto px-6 lg:px-8 reveal-on-scroll">
        <div class="grid grid-cols-2 md:grid-cols-4 bg-white shadow-2xl rounded-sm border-t-4 border-brand-red overflow-hidden">
            <div class="p-8 text-center border-r border-slate-100 hover:bg-slate-50 transition-colors group">
                <div class="text-3xl md:text-4xl font-black text-slate-900 mb-1 group-hover:scale-110 transition-transform">8</div>
                <div class="text-xs uppercase tracking-widest text-slate-500">Subsidiaries</div>
            </div>
            <div class="p-8 text-center border-r border-slate-100 hover:bg-slate-50 transition-colors group">
                <div class="text-3xl md:text-4xl font-black text-slate-900 mb-1 group-hover:scale-110 transition-transform">7</div>
                <div class="text-xs uppercase tracking-widest text-slate-500">Industries</div>
            </div>
            <div class="p-8 text-center border-r border-slate-100 hover:bg-slate-50 transition-colors group">
                <div class="text-3xl md:text-4xl font-black text-slate-900 mb-1 group-hover:scale-110 transition-transform">5</div>
                <div class="text-xs uppercase tracking-widest text-slate-500">Countries</div>
            </div>
            <div class="p-8 text-center hover:bg-slate-50 transition-colors group">
                <div class="text-3xl md:text-4xl font-black text-slate-900 mb-1 group-hover:scale-110 transition-transform">100+</div>
                <div class="text-xs uppercase tracking-widest text-slate-500">Employees</div>
            </div>
        </div>
    </div>

    <!-- OVERVIEW SECTION -->
    <section class="py-32 bg-slate-50">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="max-w-4xl mx-auto text-center mb-20 reveal-on-scroll">
                <h2 class="text-brand-red font-bold tracking-widest uppercase text-sm mb-4">Portfolio Overview</h2>
                <h3 class="text-4xl md:text-5xl font-bold mb-6 text-slate-900">Diverse Excellence</h3>
                <p class="text-lg text-slate-600 leading-relaxed">
                    From authentic Japanese dining to cutting-edge digital solutions, our subsidiaries represent the best of Japanese quality and innovation across multiple sectors. Each company operates independently while benefiting from the strategic guidance and synergies of the Kaika Holdings network.
                </p>
            </div>

            <!-- Industry Categories -->
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 reveal-on-scroll">
                <div class="bg-white rounded-2xl p-8 shadow-lg border border-slate-200 hover:border-brand-red transition-all duration-300">
                    <div class="w-14 h-14 bg-orange-100 rounded-xl flex items-center justify-center mb-6">
                        <i data-lucide="utensils-crossed" class="w-7 h-7 text-orange-600"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-3 text-slate-900">Hospitality</h4>
                    <p class="text-slate-600 mb-4 leading-relaxed text-sm">Premium Japanese dining & travel</p>
                    <div class="flex items-center text-sm font-bold text-orange-600">
                        <span>2 Companies</span>
                    </div>
                </div>

                <div class="bg-white rounded-2xl p-8 shadow-lg border border-slate-200 hover:border-brand-red transition-all duration-300">
                    <div class="w-14 h-14 bg-blue-100 rounded-xl flex items-center justify-center mb-6">
                        <i data-lucide="truck" class="w-7 h-7 text-blue-600"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-3 text-slate-900">Trade & Logistics</h4>
                    <p class="text-slate-600 mb-4 leading-relaxed text-sm">Global supply chain solutions</p>
                    <div class="flex items-center text-sm font-bold text-blue-600">
                        <span>3 Companies</span>
                    </div>
                </div>

                <div class="bg-white rounded-2xl p-8 shadow-lg border border-slate-200 hover:border-brand-red transition-all duration-300">
                    <div class="w-14 h-14 bg-purple-100 rounded-xl flex items-center justify-center mb-6">
                        <i data-lucide="laptop-2" class="w-7 h-7 text-purple-600"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-3 text-slate-900">Technology</h4>
                    <p class="text-slate-600 mb-4 leading-relaxed text-sm">Digital & IT solutions</p>
                    <div class="flex items-center text-sm font-bold text-purple-600">
                        <span>1 Company</span>
                    </div>
                </div>

                <div class="bg-white rounded-2xl p-8 shadow-lg border border-slate-200 hover:border-brand-red transition-all duration-300">
                    <div class="w-14 h-14 bg-emerald-100 rounded-xl flex items-center justify-center mb-6">
                        <i data-lucide="users" class="w-7 h-7 text-emerald-600"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-3 text-slate-900">Education & HR</h4>
                    <p class="text-slate-600 mb-4 leading-relaxed text-sm">Training and recruitment</p>
                    <div class="flex items-center text-sm font-bold text-emerald-600">
                        <span>2 Companies</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- COMPANY PROFILES -->
    <section class="py-32 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16 reveal-on-scroll">
                <h2 class="text-brand-red font-bold tracking-widest uppercase text-sm mb-4">Company Profiles</h2>
                <h3 class="text-4xl md:text-5xl font-bold mb-6 text-slate-900">Meet Our Subsidiaries</h3>
            </div>

            <div class="space-y-24">

                <!-- KAMIKURA -->
                <div class="reveal-on-scroll">
                    <div class="grid lg:grid-cols-2 gap-12 items-center">
                        <div class="relative group order-2 lg:order-1">
                            <div class="absolute -inset-4 bg-gradient-to-r from-orange-500 to-red-600 rounded-2xl blur opacity-25 group-hover:opacity-40 transition duration-1000"></div>
                            <div class="relative rounded-2xl overflow-hidden shadow-2xl h-[400px]">
                                <img src="https://wallpapercat.com/w/full/5/8/8/610794-3840x2160-desktop-4k-sushi-background.jpg" class="w-full h-full object-cover transform group-hover:scale-105 transition duration-700" alt="Kamikura">
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/50 to-transparent"></div>
                            </div>
                        </div>
                        <div class="order-1 lg:order-2">
                            <div class="inline-flex items-center gap-3 mb-6">
                                <div class="w-16 h-16 rounded-xl bg-orange-100 flex items-center justify-center">
                                    <i data-lucide="utensils-crossed" class="w-8 h-8 text-orange-600"></i>
                                </div>
                                <div>
                                    <h3 class="text-3xl font-bold text-slate-900">Kamikura</h3>
                                    <p class="text-sm text-orange-600 font-bold uppercase tracking-wider">Japanese Restaurant</p>
                                </div>
                            </div>
                            
                            <p class="text-lg text-slate-600 leading-relaxed mb-6">
                                Kamikura brings the authentic flavors of Japan to Colombo. Guided by master chefs trained in Tokyo, we offer a refined Japanese dining experience featuring traditional kaiseki courses, premium sushi, and carefully crafted seasonal specialties bringing true Japanese culinary artistry to the heart of the city.
                            </p>

                            <div class="grid grid-cols-2 gap-4 mb-8">
                                <div class="bg-slate-50 rounded-lg p-4">
                                    <div class="text-2xl font-bold text-orange-600 mb-1">2020</div>
                                    <div class="text-xs uppercase tracking-wider text-slate-600">Founded</div>
                                </div>
                                <div class="bg-slate-50 rounded-lg p-4">
                                    <div class="text-2xl font-bold text-orange-600 mb-1">150+</div>
                                    <div class="text-xs uppercase tracking-wider text-slate-600">Menu Items</div>
                                </div>
                            </div>

                            <div class="space-y-3 mb-8">
                                <div class="flex items-center gap-3">
                                    <i data-lucide="map-pin" class="w-5 h-5 text-brand-red"></i>
                                    <span class="text-slate-700">Colombo, Sri Lanka</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <i data-lucide="award" class="w-5 h-5 text-brand-red"></i>
                                    <span class="text-slate-700">Premium Japanese Cuisine</span>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <a href="kamikura.html" class="inline-flex items-center px-6 py-3 bg-orange-600 hover:bg-orange-700 text-white font-bold uppercase tracking-wider transition-all rounded-lg text-sm group">
                                    Learn More
                                    <i data-lucide="arrow-right" class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform"></i>
                                </a>
                                <a href="contact.php" class="inline-flex items-center px-6 py-3 border-2 border-slate-300 hover:border-orange-600 text-slate-700 hover:text-orange-600 font-bold uppercase tracking-wider transition-all rounded-lg text-sm">
                                    Contact
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- KAIKA TRAVEL AND TOURISM - NEW -->
                <div class="reveal-on-scroll">
                    <div class="grid lg:grid-cols-2 gap-12 items-center">
                        <div>
                            <div class="inline-flex items-center gap-3 mb-6">
                                <div class="w-16 h-16 rounded-xl bg-gradient-to-br from-sky-100 to-blue-100 flex items-center justify-center shadow-lg">
                                    <i data-lucide="plane" class="w-8 h-8 text-sky-600"></i>
                                </div>
                                <div>
                                    <h3 class="text-3xl font-bold text-slate-900">Kaika Travel and Tourism</h3>
                                    <p class="text-sm text-sky-600 font-bold uppercase tracking-wider">Travel Services</p>
                                </div>
                            </div>
                            
                            <p class="text-lg text-slate-600 leading-relaxed mb-6">
                                Kaika Travel and Tourism curates exceptional travel experiences across Sri Lanka through expertly managed vehicle and fleet services. Whether for business travel, leisure tours, or executive transportation, we offer dependable, high-quality transport solutions designed for comfort, safety, and efficiency at every mile.
                            </p>

                            <div class="grid grid-cols-2 gap-4 mb-8">
                                <div class="bg-slate-50 rounded-lg p-4">
                                    <div class="text-2xl font-bold text-sky-600 mb-1">50+</div>
                                    <div class="text-xs uppercase tracking-wider text-slate-600">Destinations</div>
                                </div>
                                <div class="bg-slate-50 rounded-lg p-4">
                                    <div class="text-2xl font-bold text-sky-600 mb-1">5000+</div>
                                    <div class="text-xs uppercase tracking-wider text-slate-600">Happy Travelers</div>
                                </div>
                            </div>

                            <div class="space-y-3 mb-8">
    <div class="flex items-center gap-3">
        <i data-lucide="car" class="w-5 h-5 text-brand-red"></i>
        <span class="text-slate-700">Premium Vehicle & Fleet Services Nationwide</span>
    </div>
    <div class="flex items-center gap-3">
        <i data-lucide="briefcase" class="w-5 h-5 text-brand-red"></i>
        <span class="text-slate-700">Executive & Corporate Mobility Solutions</span>
    </div>
    <div class="flex items-center gap-3">
        <i data-lucide="map" class="w-5 h-5 text-brand-red"></i>
        <span class="text-slate-700">Curated Chauffeur-Driven Travel Experiences</span>
    </div>
    <div class="flex items-center gap-3">
        <i data-lucide="plane" class="w-5 h-5 text-brand-red"></i>
        <span class="text-slate-700">Seamless Airport Transfers & VIP Transport</span>
    </div>
</div>


                            <div class="flex gap-4">
                                <a href="travel-tourism.html" class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-sky-600 to-blue-600 hover:from-sky-700 hover:to-blue-700 text-white font-bold uppercase tracking-wider transition-all rounded-lg text-sm group shadow-lg">
                                    Explore Tours
                                    <i data-lucide="arrow-right" class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform"></i>
                                </a>
                                <a href="contact.php" class="inline-flex items-center px-6 py-3 border-2 border-slate-300 hover:border-sky-600 text-slate-700 hover:text-sky-600 font-bold uppercase tracking-wider transition-all rounded-lg text-sm">
                                    Contact
                                </a>
                            </div>
                        </div>
                        <div class="relative group">
                            <div class="absolute -inset-4 bg-gradient-to-r from-sky-500 to-blue-600 rounded-2xl blur opacity-25 group-hover:opacity-40 transition duration-1000"></div>
                            <div class="relative rounded-2xl overflow-hidden shadow-2xl h-[400px]">
                                <img src="../blog/uploads/Kaika_travels.png" class="w-full h-full object-cover transform group-hover:scale-105 transition duration-700" alt="Kaika Travel and Tourism">
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/50 to-transparent"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- LEGEND PVT LTD -->
                <div class="reveal-on-scroll">
                    <div class="grid lg:grid-cols-2 gap-12 items-center">
                        <div class="relative group order-2 lg:order-1">
                            <div class="absolute -inset-4 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-2xl blur opacity-25 group-hover:opacity-40 transition duration-1000"></div>
                            <div class="relative rounded-2xl overflow-hidden shadow-2xl h-[400px]">
                                <img src="https://images.unsplash.com/photo-1612977060650-77024e7aac63?q=80&w=872&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="w-full h-full object-cover transform group-hover:scale-105 transition duration-700" alt="Legend">
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/50 to-transparent"></div>
                            </div>
                        </div>
                        <div class="order-1 lg:order-2">
                            <div class="inline-flex items-center gap-3 mb-6">
                                <div class="w-16 h-16 rounded-xl bg-indigo-100 flex items-center justify-center">
                                    <i data-lucide="zap" class="w-8 h-8 text-indigo-600"></i>
                                </div>
                                <div>
                                    <h3 class="text-3xl font-bold text-slate-900">Legend Pvt Ltd</h3>
                                    <p class="text-sm text-indigo-600 font-bold uppercase tracking-wider">Electronics & Production</p>
                                </div>
                            </div>
                            
                            <p class="text-lg text-slate-600 leading-relaxed mb-6">
                                Legend Pvt Ltd specializes in importing high-quality electronics. We bridge Japanese technology innovation with global markets through reliable supply chains and expert product knowledge.
                            </p>

                            <div class="grid grid-cols-2 gap-4 mb-8">
                                <div class="bg-slate-50 rounded-lg p-4">
                                    <div class="text-2xl font-bold text-indigo-600 mb-1">100+</div>
                                    <div class="text-xs uppercase tracking-wider text-slate-600">Products</div>
                                </div>
                                <div class="bg-slate-50 rounded-lg p-4">
                                    <div class="text-2xl font-bold text-indigo-600 mb-1">3</div>
                                    <div class="text-xs uppercase tracking-wider text-slate-600">Countries</div>
                                </div>
                            </div>

                            <div class="space-y-3 mb-8">
                                <div class="flex items-center gap-3">
                                    <i data-lucide="map-pin" class="w-5 h-5 text-brand-red"></i>
                                    <span class="text-slate-700">Sri Lanka & Southeast Asia</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <i data-lucide="package" class="w-5 h-5 text-brand-red"></i>
                                    <span class="text-slate-700">Electronics Import & Distribution</span>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <a href="legend.html" class="inline-flex items-center px-6 py-3 bg-indigo-600 hover:bg-indigo-700 text-white font-bold uppercase tracking-wider transition-all rounded-lg text-sm group">
                                    Learn More
                                    <i data-lucide="arrow-right" class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform"></i>
                                </a>
                                <a href="contact.php" class="inline-flex items-center px-6 py-3 border-2 border-slate-300 hover:border-indigo-600 text-slate-700 hover:text-indigo-600 font-bold uppercase tracking-wider transition-all rounded-lg text-sm">
                                    Contact
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- KAIKA IT & AUTOMATION -->
                <div class="reveal-on-scroll">
                    <div class="grid lg:grid-cols-2 gap-12 items-center">
                        <div>
                            <div class="inline-flex items-center gap-3 mb-6">
                                <div class="w-16 h-16 rounded-xl bg-gradient-to-br from-purple-100 to-pink-100 flex items-center justify-center shadow-lg">
                                    <i data-lucide="laptop-2" class="w-8 h-8 text-purple-600"></i>
                                </div>
                                <div>
                                    <h3 class="text-3xl font-bold text-slate-900">Kaika IT & Automation</h3>
                                    <p class="text-sm text-purple-600 font-bold uppercase tracking-wider">Digital Solutions</p>
                                </div>
                            </div>
                            
                            <p class="text-lg text-slate-600 leading-relaxed mb-6">
                                Kaika IT & Automation delivers comprehensive digital solutions that transform businesses. From cutting-edge web development to intelligent business automation, we combine technical expertise with creative innovation to drive your digital success.
                            </p>

                            <div class="grid grid-cols-2 gap-4 mb-8">
                                <div class="bg-slate-50 rounded-lg p-4">
                                    <div class="text-2xl font-bold text-purple-600 mb-1">100+</div>
                                    <div class="text-xs uppercase tracking-wider text-slate-600">Projects Delivered</div>
                                </div>
                                <div class="bg-slate-50 rounded-lg p-4">
                                    <div class="text-2xl font-bold text-purple-600 mb-1">24/7</div>
                                    <div class="text-xs uppercase tracking-wider text-slate-600">Support</div>
                                </div>
                            </div>

                            <div class="space-y-3 mb-8">
                                <div class="flex items-center gap-3">
                                    <i data-lucide="globe" class="w-5 h-5 text-brand-red"></i>
                                    <span class="text-slate-700">Web Development & Design</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <i data-lucide="trending-up" class="w-5 h-5 text-brand-red"></i>
                                    <span class="text-slate-700">Digital Marketing Solutions</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <i data-lucide="cpu" class="w-5 h-5 text-brand-red"></i>
                                    <span class="text-slate-700">Business Automation</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <i data-lucide="palette" class="w-5 h-5 text-brand-red"></i>
                                    <span class="text-slate-700">Graphic Design Services</span>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <a href="it-automation.html" class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-purple-600 to-pink-600 hover:from-purple-700 hover:to-pink-700 text-white font-bold uppercase tracking-wider transition-all rounded-lg text-sm group shadow-lg">
                                    View Services
                                    <i data-lucide="arrow-right" class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform"></i>
                                </a>
                                <a href="contact.php" class="inline-flex items-center px-6 py-3 border-2 border-slate-300 hover:border-purple-600 text-slate-700 hover:text-purple-600 font-bold uppercase tracking-wider transition-all rounded-lg text-sm">
                                    Contact
                                </a>
                            </div>
                        </div>
                        <div class="relative group">
                            <div class="absolute -inset-4 bg-gradient-to-r from-purple-500 to-pink-600 rounded-2xl blur opacity-25 group-hover:opacity-40 transition duration-1000"></div>
                            <div class="relative rounded-2xl overflow-hidden shadow-2xl h-[400px]">
                                <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?auto=format&fit=crop&q=80&w=600" class="w-full h-full object-cover transform group-hover:scale-105 transition duration-700" alt="Kaika IT & Automation">
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/50 to-transparent"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- KAIKA INTERNATIONAL -->
                <div class="reveal-on-scroll">
                    <div class="grid lg:grid-cols-2 gap-12 items-center">
                        <div class="relative group order-2 lg:order-1">
                            <div class="absolute -inset-4 bg-gradient-to-r from-red-500 to-orange-600 rounded-2xl blur opacity-25 group-hover:opacity-40 transition duration-1000"></div>
                            <div class="relative rounded-2xl overflow-hidden shadow-2xl h-[400px]">
                                <img src="https://images.unsplash.com/photo-1547245324-d777c6f05e80?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="w-full h-full object-cover transform group-hover:scale-105 transition duration-700" alt="Kaika International">
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/50 to-transparent"></div>
                            </div>
                        </div>
                        <div class="order-1 lg:order-2">
                            <div class="inline-flex items-center gap-3 mb-6">
                                <div class="w-16 h-16 rounded-xl bg-red-100 flex items-center justify-center">
                                    <i data-lucide="car" class="w-8 h-8 text-red-600"></i>
                                </div>
                                <div>
                                    <h3 class="text-3xl font-bold text-slate-900">Kaika International</h3>
                                    <p class="text-sm text-red-600 font-bold uppercase tracking-wider">Vehicle Trading Platform</p>
                                </div>
                            </div>
                            
                            <p class="text-lg text-slate-600 leading-relaxed mb-6">
                                Kaika International is a premier vehicle listing and trading platform connecting Japanese sellers with buyers worldwide. We specialize in quality Japanese used vehicles, offering transparency, trust, and seamless international transactions.
                            </p>

                            <div class="grid grid-cols-2 gap-4 mb-8">
                                <div class="bg-slate-50 rounded-lg p-4">
                                    <div class="text-2xl font-bold text-red-600 mb-1">10K+</div>
                                    <div class="text-xs uppercase tracking-wider text-slate-600">Vehicles Traded</div>
                                </div>
                                <div class="bg-slate-50 rounded-lg p-4">
                                    <div class="text-2xl font-bold text-red-600 mb-1">50+</div>
                                    <div class="text-xs uppercase tracking-wider text-slate-600">Countries</div>
                                </div>
                            </div>

                            <div class="space-y-3 mb-8">
                                <div class="flex items-center gap-3">
                                    <i data-lucide="globe" class="w-5 h-5 text-brand-red"></i>
                                    <span class="text-slate-700">Global Operations</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <i data-lucide="shield-check" class="w-5 h-5 text-brand-red"></i>
                                    <span class="text-slate-700">Quality Certified Vehicles</span>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <a href="https://kaikainternational.com" target="_blank" class="inline-flex items-center px-6 py-3 bg-red-600 hover:bg-red-700 text-white font-bold uppercase tracking-wider transition-all rounded-lg text-sm group">
                                    Visit Website
                                    <i data-lucide="external-link" class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform"></i>
                                </a>
                                <a href="contact.php" class="inline-flex items-center px-6 py-3 border-2 border-slate-300 hover:border-red-600 text-slate-700 hover:text-red-600 font-bold uppercase tracking-wider transition-all rounded-lg text-sm">
                                    Contact
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- KAIKA LOGISTICS -->
                <div class="reveal-on-scroll">
                    <div class="grid lg:grid-cols-2 gap-12 items-center">
                        <div>
                            <div class="inline-flex items-center gap-3 mb-6">
                                <div class="w-16 h-16 rounded-xl bg-cyan-100 flex items-center justify-center">
                                    <i data-lucide="container" class="w-8 h-8 text-cyan-600"></i>
                                </div>
                                <div>
                                    <h3 class="text-3xl font-bold text-slate-900">Kaika Logistics</h3>
                                    <p class="text-sm text-cyan-600 font-bold uppercase tracking-wider">Supply Chain Solutions</p>
                                </div>
                            </div>
                            
                            <p class="text-lg text-slate-600 leading-relaxed mb-6">
                                Kaika Logistics provides comprehensive supply chain management and freight forwarding services. From warehousing to last-mile delivery, we ensure your goods arrive safely and on time, anywhere in the world.
                            </p>

                            <div class="grid grid-cols-2 gap-4 mb-8">
                                <div class="bg-slate-50 rounded-lg p-4">
                                    <div class="text-2xl font-bold text-cyan-600 mb-1">24/7</div>
                                    <div class="text-xs uppercase tracking-wider text-slate-600">Operations</div>
                                </div>
                                <div class="bg-slate-50 rounded-lg p-4">
                                    <div class="text-2xl font-bold text-cyan-600 mb-1">5</div>
                                    <div class="text-xs uppercase tracking-wider text-slate-600">Countries</div>
                                </div>
                            </div>

                            <div class="space-y-3 mb-8">
                                <div class="flex items-center gap-3">
                                    <i data-lucide="truck" class="w-5 h-5 text-brand-red"></i>
                                    <span class="text-slate-700">Air, Sea & Land Freight</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <i data-lucide="warehouse" class="w-5 h-5 text-brand-red"></i>
                                    <span class="text-slate-700">Warehousing & Distribution</span>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <a href="https://kaikalogistics.com" target="_blank" class="inline-flex items-center px-6 py-3 bg-cyan-600 hover:bg-cyan-700 text-white font-bold uppercase tracking-wider transition-all rounded-lg text-sm group">
                                    Visit Website
                                    <i data-lucide="external-link" class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform"></i>
                                </a>
                                <a href="contact.php" class="inline-flex items-center px-6 py-3 border-2 border-slate-300 hover:border-cyan-600 text-slate-700 hover:text-cyan-600 font-bold uppercase tracking-wider transition-all rounded-lg text-sm">
                                    Contact
                                </a>
                            </div>
                        </div>
                        <div class="relative group">
                            <div class="absolute -inset-4 bg-gradient-to-r from-cyan-500 to-blue-600 rounded-2xl blur opacity-25 group-hover:opacity-40 transition duration-1000"></div>
                            <div class="relative rounded-2xl overflow-hidden shadow-2xl h-[400px]">
                                <img src="https://images.unsplash.com/photo-1578575437130-527eed3abbec?auto=format&fit=crop&q=80&w=600" class="w-full h-full object-cover transform group-hover:scale-105 transition duration-700" alt="Kaika Logistics">
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/50 to-transparent"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- KAIKA JAPANESE SCHOOL -->
                <div class="reveal-on-scroll">
                    <div class="grid lg:grid-cols-2 gap-12 items-center">
                        <div class="relative group order-2 lg:order-1">
                            <div class="absolute -inset-4 bg-gradient-to-r from-blue-500 to-cyan-600 rounded-2xl blur opacity-25 group-hover:opacity-40 transition duration-1000"></div>
                            <div class="relative rounded-2xl overflow-hidden shadow-2xl h-[400px]">
                                <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&q=80&w=800" class="w-full h-full object-cover transform group-hover:scale-105 transition duration-700" alt="Kaika Japanese School">
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/50 to-transparent"></div>
                            </div>
                        </div>
                        <div class="order-1 lg:order-2">
                            <div class="inline-flex items-center gap-3 mb-6">
                                <div class="w-16 h-16 rounded-xl bg-blue-100 flex items-center justify-center">
                                    <i data-lucide="graduation-cap" class="w-8 h-8 text-blue-600"></i>
                                </div>
                                <div>
                                    <h3 class="text-3xl font-bold text-slate-900">Kaika Japanese School</h3>
                                    <p class="text-sm text-blue-600 font-bold uppercase tracking-wider">Language Education</p>
                                </div>
                            </div>
                            
                            <p class="text-lg text-slate-600 leading-relaxed mb-6">
                                Kaika Japanese School offers comprehensive Japanese language courses from beginner to advanced levels. Our native instructors prepare students for JLPT certification and opportunities to work or study in Japan.
                            </p>

                            <div class="grid grid-cols-2 gap-4 mb-8">
                                <div class="bg-slate-50 rounded-lg p-4">
                                    <div class="text-2xl font-bold text-blue-600 mb-1">1000+</div>
                                    <div class="text-xs uppercase tracking-wider text-slate-600">Students</div>
                                </div>
                                <div class="bg-slate-50 rounded-lg p-4">
                                    <div class="text-2xl font-bold text-blue-600 mb-1">95%</div>
                                    <div class="text-xs uppercase tracking-wider text-slate-600">Pass Rate</div>
                                </div>
                            </div>

                            <div class="space-y-3 mb-8">
                                <div class="flex items-center gap-3">
                                    <i data-lucide="book-open" class="w-5 h-5 text-brand-red"></i>
                                    <span class="text-slate-700">JLPT Preparation (N5-N1)</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <i data-lucide="users" class="w-5 h-5 text-brand-red"></i>
                                    <span class="text-slate-700">Native Japanese Instructors</span>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <a href="japanese-school.html" class="inline-flex items-center px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-bold uppercase tracking-wider transition-all rounded-lg text-sm group">
                                    Learn More
                                    <i data-lucide="arrow-right" class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform"></i>
                                </a>
                                <a href="contact.php" class="inline-flex items-center px-6 py-3 border-2 border-slate-300 hover:border-blue-600 text-slate-700 hover:text-blue-600 font-bold uppercase tracking-wider transition-all rounded-lg text-sm">
                                    Contact
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- KAIKA CARRIERS -->
                <div class="reveal-on-scroll">
                    <div class="grid lg:grid-cols-2 gap-12 items-center">
                        <div>
                            <div class="inline-flex items-center gap-3 mb-6">
                                <div class="w-16 h-16 rounded-xl bg-emerald-100 flex items-center justify-center">
                                    <i data-lucide="briefcase" class="w-8 h-8 text-emerald-600"></i>
                                </div>
                                <div>
                                    <h3 class="text-3xl font-bold text-slate-900">Kaika Carriers</h3>
                                    <p class="text-sm text-emerald-600 font-bold uppercase tracking-wider">Recruitment Services</p>
                                </div>
                            </div>
                            
                            <p class="text-lg text-slate-600 leading-relaxed mb-6">
                                Kaika Carriers specializes in connecting talented professionals with leading enterprises across Asia and beyond. We provide comprehensive recruitment, HR consulting, and career development services tailored to both employers and job seekers.
                            </p>

                            <div class="grid grid-cols-2 gap-4 mb-8">
                                <div class="bg-slate-50 rounded-lg p-4">
                                    <div class="text-2xl font-bold text-emerald-600 mb-1">5000+</div>
                                    <div class="text-xs uppercase tracking-wider text-slate-600">Placements</div>
                                </div>
                                <div class="bg-slate-50 rounded-lg p-4">
                                    <div class="text-2xl font-bold text-emerald-600 mb-1">200+</div>
                                    <div class="text-xs uppercase tracking-wider text-slate-600">Partner Companies</div>
                                </div>
                            </div>

                            <div class="space-y-3 mb-8">
                                <div class="flex items-center gap-3">
                                    <i data-lucide="target" class="w-5 h-5 text-brand-red"></i>
                                    <span class="text-slate-700">Executive Search & Placement</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <i data-lucide="trending-up" class="w-5 h-5 text-brand-red"></i>
                                    <span class="text-slate-700">Career Development Programs</span>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <a href="http://kaika-international.com" target="_blank" class="inline-flex items-center px-6 py-3 bg-emerald-600 hover:bg-emerald-700 text-white font-bold uppercase tracking-wider transition-all rounded-lg text-sm group">
                                    Visit Website
                                    <i data-lucide="external-link" class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform"></i>
                                </a>
                                <a href="contact.php" class="inline-flex items-center px-6 py-3 border-2 border-slate-300 hover:border-emerald-600 text-slate-700 hover:text-emerald-600 font-bold uppercase tracking-wider transition-all rounded-lg text-sm">
                                    Contact
                                </a>
                            </div>
                        </div>
                        <div class="relative group">
                            <div class="absolute -inset-4 bg-gradient-to-r from-emerald-500 to-teal-600 rounded-2xl blur opacity-25 group-hover:opacity-40 transition duration-1000"></div>
                            <div class="relative rounded-2xl overflow-hidden shadow-2xl h-[400px]">
                                <img src="https://plus.unsplash.com/premium_photo-1723780879422-3840c3c1d78c?q=80&w=880&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="w-full h-full object-cover transform group-hover:scale-105 transition duration-700" alt="Kaika Carriers">
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/50 to-transparent"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- SYNERGY SECTION -->
    <section class="py-32 bg-slate-900 text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-5 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-slate-700 via-slate-900 to-black"></div>
        
        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-16 reveal-on-scroll">
                <h2 class="text-brand-red font-bold tracking-widest uppercase text-sm mb-4">Group Synergy</h2>
                <h3 class="text-4xl md:text-5xl font-bold mb-6">Stronger Together</h3>
                <p class="text-lg text-slate-300 leading-relaxed">
                    While each subsidiary operates independently, they benefit from shared resources, strategic coordination, and cross-sector opportunities that emerge from being part of the Kaika Holdings family.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 reveal-on-scroll">
                <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl p-8 hover:bg-white/10 transition-all">
                    <div class="w-14 h-14 bg-brand-red/20 rounded-xl flex items-center justify-center mb-6">
                        <i data-lucide="network" class="w-7 h-7 text-brand-red"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-3">Shared Networks</h4>
                    <p class="text-slate-300 leading-relaxed">Access to group-wide business networks, partnerships, and market intelligence across multiple industries and geographies.</p>
                </div>

                <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl p-8 hover:bg-white/10 transition-all">
                    <div class="w-14 h-14 bg-brand-red/20 rounded-xl flex items-center justify-center mb-6">
                        <i data-lucide="lightbulb" class="w-7 h-7 text-brand-red"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-3">Knowledge Sharing</h4>
                    <p class="text-slate-300 leading-relaxed">Cross-pollination of expertise, best practices, and innovation across dining, logistics, technology, education, and recruitment sectors.</p>
                </div>

                <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl p-8 hover:bg-white/10 transition-all">
                    <div class="w-14 h-14 bg-brand-red/20 rounded-xl flex items-center justify-center mb-6">
                        <i data-lucide="trending-up" class="w-7 h-7 text-brand-red"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-3">Strategic Support</h4>
                    <p class="text-slate-300 leading-relaxed">Centralized financial planning, legal guidance, and business development support to help each company scale effectively.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="py-32 bg-white">
        <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center reveal-on-scroll">
            <h2 class="text-4xl md:text-5xl font-bold mb-6 text-slate-900">Ready to Work With Us?</h2>
            <p class="text-xl text-slate-600 mb-10 leading-relaxed">
                Whether you're interested in partnership opportunities, employment, or learning more about our services, we'd love to hear from you.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="contact.php" class="px-8 py-4 bg-brand-red hover:bg-red-700 text-white font-bold tracking-widest uppercase transition-all hover:shadow-[0_0_30px_rgba(220,38,38,0.4)] rounded-lg inline-flex items-center justify-center gap-3">
                    Contact Us
                    <i data-lucide="arrow-right" class="w-5 h-5"></i>
                </a>
                <a href="index.php" class="px-8 py-4 border-2 border-slate-300 hover:border-brand-red text-slate-700 hover:text-brand-red font-bold tracking-widest uppercase transition-all rounded-lg">
                    Back to Home
                </a>
            </div>
        </div>
    </section>

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

        // Re-initialize icons after page load
        document.addEventListener('DOMContentLoaded', () => {
            lucide.createIcons();
        });
    </script>
</body>
</html>