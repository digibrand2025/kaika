<?php 
$page_title = "GLOBAL - KAIKA HOLDINGS";
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
        @keyframes pulse-ring {
            0% { transform: scale(0.95); opacity: 1; }
            100% { transform: scale(1.5); opacity: 0; }
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

        /* Map Hotspot Pulse */
        .hotspot-pulse {
            animation: pulse-ring 2s infinite;
        }

        /* Timeline Line */
        .timeline-line {
            position: absolute;
            left: 50%;
            top: 0;
            bottom: 0;
            width: 2px;
            background: linear-gradient(to bottom, #D32F2F, transparent);
        }

        @media (max-width: 768px) {
            .timeline-line {
                left: 20px;
            }
        }

        /* Region Card Hover Effect */
        .region-card {
            transition: all 0.3s ease;
        }
        .region-card:hover {
            transform: translateY(-8px);
        }
    </style>

    <!-- HERO SECTION -->
    <section class="relative h-[70vh] min-h-[600px] w-full overflow-hidden bg-slate-900">
        <div class="absolute inset-0 overflow-hidden">
            <img src="https://images.unsplash.com/photo-1526778548025-fa2f459cd5c1?auto=format&fit=crop&q=80&w=2000" class="w-full h-full object-cover animate-ken-burns" alt="Global Network">
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-brand-red via-slate-900 to-slate-900 mix-blend-multiply opacity-80"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/20 to-transparent"></div>

        <!-- Content -->
        <div class="absolute inset-0 flex items-center">
            <div class="max-w-7xl mx-auto px-6 lg:px-8 w-full">
                <div class="max-w-4xl space-y-6 animate-fade-in-up">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="h-px w-12 bg-brand-red"></span>
                        <span class="text-brand-red font-bold tracking-widest uppercase text-sm">International Presence</span>
                    </div>
                    
                    <h1 class="text-5xl md:text-7xl font-bold text-white leading-tight text-glow">
                        Our Global Reach
                    </h1>
                    
                    <p class="text-xl md:text-2xl text-slate-100 mt-6 max-w-2xl font-light leading-relaxed">
                        Connecting continents through Japanese excellence and strategic operations
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- GLOBAL STATS STRIP -->
    <div class="relative z-30 -mt-20 max-w-7xl mx-auto px-6 lg:px-8 reveal-on-scroll">
        <div class="grid grid-cols-2 md:grid-cols-5 bg-white shadow-2xl rounded-sm border-t-4 border-brand-red overflow-hidden">
            <div class="p-8 text-center border-r border-slate-100 hover:bg-slate-50 transition-colors group">
                <div class="text-3xl md:text-4xl font-black text-slate-900 mb-1 group-hover:scale-110 transition-transform">5</div>
                <div class="text-xs uppercase tracking-widest text-slate-500">Countries</div>
            </div>
            <div class="p-8 text-center border-r border-slate-100 hover:bg-slate-50 transition-colors group">
                <div class="text-3xl md:text-4xl font-black text-slate-900 mb-1 group-hover:scale-110 transition-transform">3</div>
                <div class="text-xs uppercase tracking-widest text-slate-500">Continents</div>
            </div>
            <div class="p-8 text-center border-r border-slate-100 hover:bg-slate-50 transition-colors group">
                <div class="text-3xl md:text-4xl font-black text-slate-900 mb-1 group-hover:scale-110 transition-transform">8</div>
                <div class="text-xs uppercase tracking-widest text-slate-500">Subsidiaries</div>
            </div>
            <div class="p-8 text-center border-r border-slate-100 hover:bg-slate-50 transition-colors group">
                <div class="text-3xl md:text-4xl font-black text-slate-900 mb-1 group-hover:scale-110 transition-transform">100+</div>
                <div class="text-xs uppercase tracking-widest text-slate-500">Employees</div>
            </div>
            <div class="p-8 text-center hover:bg-slate-50 transition-colors group">
                <div class="text-3xl md:text-4xl font-black text-slate-900 mb-1 group-hover:scale-110 transition-transform">24/7</div>
                <div class="text-xs uppercase tracking-widest text-slate-500">Operations</div>
            </div>
        </div>
    </div>

    <!-- INTERACTIVE MAP SECTION -->
    <section class="py-32 bg-slate-900 text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-5 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-slate-700 via-slate-900 to-black"></div>
        <div class="absolute inset-0 tech-grid opacity-10"></div>

        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16 reveal-on-scroll">
                <h2 class="text-brand-red font-bold tracking-widest uppercase text-sm mb-4">Global Network</h2>
                <h3 class="text-4xl md:text-5xl font-bold mb-6">Our Worldwide Operations</h3>
                <p class="text-lg text-slate-300 max-w-3xl mx-auto">
                    From our headquarters in Tokyo to strategic operations across Asia-Pacific, Oceania, and Africa, we maintain focused presence in key markets.
                </p>
            </div>

            <!-- Interactive Map Container (Desktop) -->
            <div class="hidden md:block relative w-full aspect-[2/1] bg-slate-800/50 rounded-2xl border border-white/10 shadow-2xl overflow-hidden reveal-on-scroll mb-16">
                
                <!-- Map Image Base -->
                <img src="https://upload.wikimedia.org/wikipedia/commons/8/80/World_map_-_low_resolution.svg" class="absolute inset-0 w-full h-full object-cover opacity-30 mix-blend-screen" alt="World Map">
                
                <!-- Hotspot: Tokyo/Chiba (Japan) - HQ -->
                <div class="absolute top-[32%] left-[84%] group" style="transform: translate(-50%, -50%);">
                    <div class="relative flex items-center justify-center w-10 h-10 cursor-pointer">
                        <span class="absolute inline-flex h-full w-full rounded-full bg-brand-red opacity-30 animate-ping"></span>
                        <span class="relative inline-flex rounded-full h-4 w-4 bg-brand-red shadow-[0_0_20px_rgba(211,47,47,0.9)]"></span>
                    </div>
                    <div class="absolute bottom-full left-1/2 -translate-x-1/2 mb-4 w-72 bg-white text-slate-900 p-6 rounded-xl shadow-2xl opacity-0 translate-y-2 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 pointer-events-none z-20">
                        <div class="absolute -bottom-2 left-1/2 -translate-x-1/2 w-4 h-4 bg-white rotate-45"></div>
                        <div class="flex items-start justify-between mb-3">
                            <div>
                                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider block mb-1">HEADQUARTERS</span>
                                <h4 class="text-xl font-bold text-brand-red">Tokyo / Chiba, Japan</h4>
                            </div>
                            <img src="https://upload.wikimedia.org/wikipedia/en/9/9e/Flag_of_Japan.svg" class="w-8 border border-slate-200 shadow-sm">
                        </div>
                        <p class="text-sm text-slate-600 leading-relaxed mb-3">Global headquarters, strategic operations center, and corporate governance hub.</p>
                        <div class="flex items-center gap-2 text-xs text-slate-500">
                            <i data-lucide="building-2" class="w-3 h-3"></i>
                            <span>Est. 2015 • Primary Hub</span>
                        </div>
                    </div>
                </div>

                <!-- Hotspot: Colombo (Sri Lanka) -->
                <div class="absolute top-[56%] left-[71%] group" style="transform: translate(-50%, -50%);">
                    <div class="relative flex items-center justify-center w-8 h-8 cursor-pointer">
                        <span class="absolute inline-flex h-full w-full rounded-full bg-orange-500 opacity-30 hotspot-pulse" style="animation-delay: 0.5s;"></span>
                        <span class="relative inline-flex rounded-full h-3 w-3 bg-orange-500 shadow-[0_0_15px_rgba(249,115,22,0.8)]"></span>
                    </div>
                    <div class="absolute bottom-full left-1/2 -translate-x-1/2 mb-4 w-72 bg-white text-slate-900 p-6 rounded-xl shadow-2xl opacity-0 translate-y-2 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 pointer-events-none z-20">
                        <div class="absolute -bottom-2 left-1/2 -translate-x-1/2 w-4 h-4 bg-white rotate-45"></div>
                        <div class="flex items-start justify-between mb-3">
                            <div>
                                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider block mb-1">REGIONAL HUB</span>
                                <h4 class="text-xl font-bold text-orange-600">Colombo, Sri Lanka</h4>
                            </div>
                            <img src="https://upload.wikimedia.org/wikipedia/commons/1/11/Flag_of_Sri_Lanka.svg" class="w-8 border border-slate-200 shadow-sm">
                        </div>
                        <p class="text-sm text-slate-600 leading-relaxed mb-3">Kamikura restaurant, Legend electronics, logistics operations, IT services, and education programs.</p>
                        <div class="flex items-center gap-2 text-xs text-slate-500">
                            <i data-lucide="briefcase" class="w-3 h-3"></i>
                            <span>Multi-Subsidiary Hub</span>
                        </div>
                    </div>
                </div>

                <!-- Hotspot: Singapore -->
                <div class="absolute top-[60%] left-[76%] group" style="transform: translate(-50%, -50%);">
                    <div class="relative flex items-center justify-center w-8 h-8 cursor-pointer">
                        <span class="absolute inline-flex h-full w-full rounded-full bg-blue-500 opacity-30 hotspot-pulse" style="animation-delay: 0.2s;"></span>
                        <span class="relative inline-flex rounded-full h-3 w-3 bg-blue-500 shadow-[0_0_15px_rgba(59,130,246,0.8)]"></span>
                    </div>
                    <div class="absolute bottom-full left-1/2 -translate-x-1/2 mb-4 w-72 bg-white text-slate-900 p-6 rounded-xl shadow-2xl opacity-0 translate-y-2 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 pointer-events-none z-20">
                        <div class="absolute -bottom-2 left-1/2 -translate-x-1/2 w-4 h-4 bg-white rotate-45"></div>
                        <div class="flex items-start justify-between mb-3">
                            <div>
                                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider block mb-1">FINANCIAL HUB</span>
                                <h4 class="text-xl font-bold text-blue-600">Singapore</h4>
                            </div>
                            <img src="https://upload.wikimedia.org/wikipedia/commons/4/48/Flag_of_Singapore.svg" class="w-8 border border-slate-200 shadow-sm">
                        </div>
                        <p class="text-sm text-slate-600 leading-relaxed mb-3">Regional finance and trade facilitation center for Southeast Asian operations.</p>
                        <div class="flex items-center gap-2 text-xs text-slate-500">
                            <i data-lucide="landmark" class="w-3 h-3"></i>
                            <span>Financial Services</span>
                        </div>
                    </div>
                </div>

                <!-- Hotspot: Melbourne (Australia) -->
                <div class="absolute top-[80%] left-[88%] group" style="transform: translate(-50%, -50%);">
                    <div class="relative flex items-center justify-center w-8 h-8 cursor-pointer">
                        <span class="absolute inline-flex h-full w-full rounded-full bg-emerald-500 opacity-30 hotspot-pulse" style="animation-delay: 1s;"></span>
                        <span class="relative inline-flex rounded-full h-3 w-3 bg-emerald-500 shadow-[0_0_15px_rgba(16,185,129,0.8)]"></span>
                    </div>
                    <div class="absolute bottom-full left-1/2 -translate-x-1/2 mb-4 w-72 bg-white text-slate-900 p-6 rounded-xl shadow-2xl opacity-0 translate-y-2 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 pointer-events-none z-20">
                        <div class="absolute -bottom-2 left-1/2 -translate-x-1/2 w-4 h-4 bg-white rotate-45"></div>
                        <div class="flex items-start justify-between mb-3">
                            <div>
                                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider block mb-1">PACIFIC DIVISION</span>
                                <h4 class="text-xl font-bold text-emerald-600">Melbourne, Australia</h4>
                            </div>
                            <img src="https://upload.wikimedia.org/wikipedia/commons/b/b9/Flag_of_Australia.svg" class="w-8 border border-slate-200 shadow-sm">
                        </div>
                        <p class="text-sm text-slate-600 leading-relaxed mb-3">Oceania operations center and distribution hub serving Pacific markets.</p>
                        <div class="flex items-center gap-2 text-xs text-slate-500">
                            <i data-lucide="globe" class="w-3 h-3"></i>
                            <span>Regional Operations</span>
                        </div>
                    </div>
                </div>

                <!-- Hotspot: Guinea (Africa) -->
                <div class="absolute top-[56%] left-[48%] group" style="transform: translate(-50%, -50%);">
                    <div class="relative flex items-center justify-center w-8 h-8 cursor-pointer">
                        <span class="absolute inline-flex h-full w-full rounded-full bg-amber-500 opacity-30 hotspot-pulse" style="animation-delay: 0.7s;"></span>
                        <span class="relative inline-flex rounded-full h-3 w-3 bg-amber-500 shadow-[0_0_15px_rgba(245,158,11,0.8)]"></span>
                    </div>
                    <div class="absolute bottom-full left-1/2 -translate-x-1/2 mb-4 w-72 bg-white text-slate-900 p-6 rounded-xl shadow-2xl opacity-0 translate-y-2 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 pointer-events-none z-20">
                        <div class="absolute -bottom-2 left-1/2 -translate-x-1/2 w-4 h-4 bg-white rotate-45"></div>
                        <div class="flex items-start justify-between mb-3">
                            <div>
                                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider block mb-1">AFRICA GATEWAY</span>
                                <h4 class="text-xl font-bold text-amber-600">Guinea, West Africa</h4>
                            </div>
                            <img src="https://upload.wikimedia.org/wikipedia/commons/e/ed/Flag_of_Guinea.svg" class="w-8 border border-slate-200 shadow-sm">
                        </div>
                        <p class="text-sm text-slate-600 leading-relaxed mb-3">Strategic West African operations center and regional expansion gateway.</p>
                        <div class="flex items-center gap-2 text-xs text-slate-500">
                            <i data-lucide="map-pin" class="w-3 h-3"></i>
                            <span>Regional Gateway</span>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Mobile Country List (Alternative to Map) -->
            <div class="md:hidden space-y-4 reveal-on-scroll">
                <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-xl p-6">
                    <div class="flex items-center gap-4 mb-3">
                        <img src="https://upload.wikimedia.org/wikipedia/en/9/9e/Flag_of_Japan.svg" class="w-12 border border-white/20">
                        <div>
                            <h4 class="font-bold text-lg">Tokyo / Chiba, Japan</h4>
                            <span class="text-xs text-brand-red uppercase font-bold">Headquarters</span>
                        </div>
                    </div>
                    <p class="text-sm text-slate-300">Global headquarters and strategic operations center</p>
                </div>
                
                <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-xl p-6">
                    <div class="flex items-center gap-4 mb-3">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/1/11/Flag_of_Sri_Lanka.svg" class="w-12 border border-white/20">
                        <div>
                            <h4 class="font-bold text-lg">Colombo, Sri Lanka</h4>
                            <span class="text-xs text-orange-400 uppercase font-bold">Regional Hub</span>
                        </div>
                    </div>
                    <p class="text-sm text-slate-300">Multi-subsidiary operations center</p>
                </div>

                <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-xl p-6">
                    <div class="flex items-center gap-4 mb-3">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/4/48/Flag_of_Singapore.svg" class="w-12 border border-white/20">
                        <div>
                            <h4 class="font-bold text-lg">Singapore</h4>
                            <span class="text-xs text-blue-400 uppercase font-bold">Financial Hub</span>
                        </div>
                    </div>
                    <p class="text-sm text-slate-300">Regional finance and trade facilitation</p>
                </div>

                <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-xl p-6">
                    <div class="flex items-center gap-4 mb-3">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/b/b9/Flag_of_Australia.svg" class="w-12 border border-white/20">
                        <div>
                            <h4 class="font-bold text-lg">Melbourne, Australia</h4>
                            <span class="text-xs text-emerald-400 uppercase font-bold">Pacific Division</span>
                        </div>
                    </div>
                    <p class="text-sm text-slate-300">Oceania operations and distribution</p>
                </div>

                <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-xl p-6">
                    <div class="flex items-center gap-4 mb-3">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/e/ed/Flag_of_Guinea.svg" class="w-12 border border-white/20">
                        <div>
                            <h4 class="font-bold text-lg">Guinea, West Africa</h4>
                            <span class="text-xs text-amber-400 uppercase font-bold">Africa Gateway</span>
                        </div>
                    </div>
                    <p class="text-sm text-slate-300">West African operations center</p>
                </div>
            </div>

        </div>
    </section>

    <!-- REGIONAL BREAKDOWN -->
    <section class="py-32 bg-slate-50">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16 reveal-on-scroll">
                <h2 class="text-brand-red font-bold tracking-widest uppercase text-sm mb-4">Regional Divisions</h2>
                <h3 class="text-4xl md:text-5xl font-bold mb-6 text-slate-900">Strategic Regional Focus</h3>
                <p class="text-lg text-slate-600 max-w-3xl mx-auto">
                    Our operations are organized into strategic regions, each with specialized teams and local expertise to serve markets effectively.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Asia-Pacific -->
                <div class="region-card bg-white rounded-2xl p-8 shadow-lg border border-slate-200 hover:border-brand-red transition-all reveal-on-scroll">
                    <div class="w-16 h-16 bg-red-100 rounded-xl flex items-center justify-center mb-6">
                        <i data-lucide="map" class="w-8 h-8 text-brand-red"></i>
                    </div>
                    <h4 class="text-2xl font-bold mb-3 text-slate-900">Asia-Pacific</h4>
                    <p class="text-slate-600 mb-6 leading-relaxed">Our headquarters and largest regional presence with comprehensive operations across Japan, Sri Lanka, and Singapore.</p>
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-slate-600">Countries</span>
                            <span class="font-bold text-slate-900">3</span>
                        </div>
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-slate-600">Subsidiaries</span>
                            <span class="font-bold text-slate-900">7</span>
                        </div>
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-slate-600">Staff</span>
                            <span class="font-bold text-slate-900">400+</span>
                        </div>
                    </div>
                    <div class="pt-4 border-t border-slate-200">
                        <div class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-2">Key Locations</div>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-slate-100 rounded-full text-xs font-medium text-slate-700">Tokyo/Chiba</span>
                            <span class="px-3 py-1 bg-slate-100 rounded-full text-xs font-medium text-slate-700">Colombo</span>
                            <span class="px-3 py-1 bg-slate-100 rounded-full text-xs font-medium text-slate-700">Singapore</span>
                        </div>
                    </div>
                </div>

                <!-- Oceania -->
                <div class="region-card bg-white rounded-2xl p-8 shadow-lg border border-slate-200 hover:border-emerald-500 transition-all reveal-on-scroll" style="transition-delay: 100ms;">
                    <div class="w-16 h-16 bg-emerald-100 rounded-xl flex items-center justify-center mb-6">
                        <i data-lucide="waves" class="w-8 h-8 text-emerald-600"></i>
                    </div>
                    <h4 class="text-2xl font-bold mb-3 text-slate-900">Oceania</h4>
                    <p class="text-slate-600 mb-6 leading-relaxed">Operations and distribution presence serving Australian and Pacific markets with excellence.</p>
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-slate-600">Countries</span>
                            <span class="font-bold text-slate-900">1</span>
                        </div>
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-slate-600">Offices</span>
                            <span class="font-bold text-slate-900">1</span>
                        </div>
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-slate-600">Staff</span>
                            <span class="font-bold text-slate-900">50+</span>
                        </div>
                    </div>
                    <div class="pt-4 border-t border-slate-200">
                        <div class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-2">Key Locations</div>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-slate-100 rounded-full text-xs font-medium text-slate-700">Melbourne</span>
                        </div>
                    </div>
                </div>

                <!-- Africa -->
                <div class="region-card bg-white rounded-2xl p-8 shadow-lg border border-slate-200 hover:border-amber-500 transition-all reveal-on-scroll" style="transition-delay: 200ms;">
                    <div class="w-16 h-16 bg-amber-100 rounded-xl flex items-center justify-center mb-6">
                        <i data-lucide="sun" class="w-8 h-8 text-amber-600"></i>
                    </div>
                    <h4 class="text-2xl font-bold mb-3 text-slate-900">Africa</h4>
                    <p class="text-slate-600 mb-6 leading-relaxed">Strategic gateway in West Africa for regional expansion and market development.</p>
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-slate-600">Countries</span>
                            <span class="font-bold text-slate-900">1</span>
                        </div>
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-slate-600">Offices</span>
                            <span class="font-bold text-slate-900">1</span>
                        </div>
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-slate-600">Staff</span>
                            <span class="font-bold text-slate-900">50+</span>
                        </div>
                    </div>
                    <div class="pt-4 border-t border-slate-200">
                        <div class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-2">Key Locations</div>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-slate-100 rounded-full text-xs font-medium text-slate-700">Guinea</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- EXPANSION TIMELINE -->
    <!--<section class="py-32 bg-white relative overflow-hidden">-->
    <!--    <div class="max-w-5xl mx-auto px-6 lg:px-8">-->
    <!--        <div class="text-center mb-20 reveal-on-scroll">-->
    <!--            <h2 class="text-brand-red font-bold tracking-widest uppercase text-sm mb-4">Growth Journey</h2>-->
    <!--            <h3 class="text-4xl md:text-5xl font-bold mb-6 text-slate-900">Our Global Expansion</h3>-->
    <!--            <p class="text-lg text-slate-600 max-w-2xl mx-auto">-->
    <!--                From our founding in Japan to becoming a multi-continental enterprise, discover the milestones of our international growth.-->
    <!--            </p>-->
    <!--        </div>-->

            <!-- Timeline -->
    <!--        <div class="relative">-->
                <!-- Timeline Line -->
    <!--            <div class="timeline-line"></div>-->

                <!-- Timeline Items -->
    <!--            <div class="space-y-16">-->
                    
                    <!-- 2015 - Founded -->
    <!--                <div class="reveal-on-scroll relative">-->
    <!--                    <div class="flex flex-col md:flex-row items-center md:items-start gap-8">-->
    <!--                        <div class="md:w-1/2 md:text-right md:pr-12">-->
    <!--                            <div class="inline-block px-4 py-2 bg-brand-red text-white rounded-full text-sm font-bold mb-4">2015</div>-->
    <!--                            <h4 class="text-2xl font-bold text-slate-900 mb-3">Founded in Tokyo</h4>-->
    <!--                            <p class="text-slate-600 leading-relaxed">Kaika Holdings established in Tokyo/Chiba with a vision to connect Japanese excellence to global markets.</p>-->
    <!--                        </div>-->
    <!--                        <div class="relative flex items-center justify-center">-->
    <!--                            <div class="w-5 h-5 rounded-full bg-brand-red border-4 border-white shadow-lg z-10"></div>-->
    <!--                        </div>-->
    <!--                        <div class="md:w-1/2"></div>-->
    <!--                    </div>-->
    <!--                </div>-->

                    <!-- 2017 - Sri Lanka -->
    <!--                <div class="reveal-on-scroll relative">-->
    <!--                    <div class="flex flex-col md:flex-row items-center md:items-start gap-8">-->
    <!--                        <div class="md:w-1/2"></div>-->
    <!--                        <div class="relative flex items-center justify-center">-->
    <!--                            <div class="w-5 h-5 rounded-full bg-orange-500 border-4 border-white shadow-lg z-10"></div>-->
    <!--                        </div>-->
    <!--                        <div class="md:w-1/2 md:pl-12">-->
    <!--                            <div class="inline-block px-4 py-2 bg-orange-500 text-white rounded-full text-sm font-bold mb-4">2017</div>-->
    <!--                            <h4 class="text-2xl font-bold text-slate-900 mb-3">Sri Lanka Operations</h4>-->
    <!--                            <p class="text-slate-600 leading-relaxed">Opened Colombo office, launched Kamikura restaurant, Legend electronics, and education services.</p>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->

                    <!-- 2018 - Singapore -->
    <!--                <div class="reveal-on-scroll relative">-->
    <!--                    <div class="flex flex-col md:flex-row items-center md:items-start gap-8">-->
    <!--                        <div class="md:w-1/2 md:text-right md:pr-12">-->
    <!--                            <div class="inline-block px-4 py-2 bg-blue-500 text-white rounded-full text-sm font-bold mb-4">2018</div>-->
    <!--                            <h4 class="text-2xl font-bold text-slate-900 mb-3">Singapore Financial Hub</h4>-->
    <!--                            <p class="text-slate-600 leading-relaxed">Established Singapore operations as regional financial and trade facilitation center, expanding Southeast Asian market presence.</p>-->
    <!--                        </div>-->
    <!--                        <div class="relative flex items-center justify-center">-->
    <!--                            <div class="w-5 h-5 rounded-full bg-blue-500 border-4 border-white shadow-lg z-10"></div>-->
    <!--                        </div>-->
    <!--                        <div class="md:w-1/2"></div>-->
    <!--                    </div>-->
    <!--                </div>-->

                    <!-- 2019 - Australia -->
    <!--                <div class="reveal-on-scroll relative">-->
    <!--                    <div class="flex flex-col md:flex-row items-center md:items-start gap-8">-->
    <!--                        <div class="md:w-1/2"></div>-->
    <!--                        <div class="relative flex items-center justify-center">-->
    <!--                            <div class="w-5 h-5 rounded-full bg-emerald-500 border-4 border-white shadow-lg z-10"></div>-->
    <!--                        </div>-->
    <!--                        <div class="md:w-1/2 md:pl-12">-->
    <!--                            <div class="inline-block px-4 py-2 bg-emerald-500 text-white rounded-full text-sm font-bold mb-4">2019</div>-->
    <!--                            <h4 class="text-2xl font-bold text-slate-900 mb-3">Pacific Expansion</h4>-->
    <!--                            <p class="text-slate-600 leading-relaxed">Established operations in Melbourne, Australia, expanding into Oceania markets with vehicle trading and logistics.</p>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->

                    <!-- 2021 - Africa Entry -->
    <!--                <div class="reveal-on-scroll relative">-->
    <!--                    <div class="flex flex-col md:flex-row items-center md:items-start gap-8">-->
    <!--                        <div class="md:w-1/2 md:text-right md:pr-12">-->
    <!--                            <div class="inline-block px-4 py-2 bg-amber-500 text-white rounded-full text-sm font-bold mb-4">2021</div>-->
    <!--                            <h4 class="text-2xl font-bold text-slate-900 mb-3">African Markets</h4>-->
    <!--                            <p class="text-slate-600 leading-relaxed">Strategic expansion into Guinea, West Africa as a gateway for continental operations.</p>-->
    <!--                        </div>-->
    <!--                        <div class="relative flex items-center justify-center">-->
    <!--                            <div class="w-5 h-5 rounded-full bg-amber-500 border-4 border-white shadow-lg z-10"></div>-->
    <!--                        </div>-->
    <!--                        <div class="md:w-1/2"></div>-->
    <!--                    </div>-->
    <!--                </div>-->

                    <!-- 2023 - Technology Division -->
    <!--                <div class="reveal-on-scroll relative">-->
    <!--                    <div class="flex flex-col md:flex-row items-center md:items-start gap-8">-->
    <!--                        <div class="md:w-1/2"></div>-->
    <!--                        <div class="relative flex items-center justify-center">-->
    <!--                            <div class="w-5 h-5 rounded-full bg-purple-500 border-4 border-white shadow-lg z-10"></div>-->
    <!--                        </div>-->
    <!--                        <div class="md:w-1/2 md:pl-12">-->
    <!--                            <div class="inline-block px-4 py-2 bg-purple-500 text-white rounded-full text-sm font-bold mb-4">2023</div>-->
    <!--                            <h4 class="text-2xl font-bold text-slate-900 mb-3">Digital Innovation</h4>-->
    <!--                            <p class="text-slate-600 leading-relaxed">Launched Kaika IT & Automation, expanding into web solutions, digital marketing, and business automation.</p>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->

                    <!-- 2024 - Present -->
    <!--                <div class="reveal-on-scroll relative">-->
    <!--                    <div class="flex flex-col md:flex-row items-center md:items-start gap-8">-->
    <!--                        <div class="md:w-1/2 md:text-right md:pr-12">-->
    <!--                            <div class="inline-block px-4 py-2 bg-gradient-to-r from-brand-red to-purple-500 text-white rounded-full text-sm font-bold mb-4">2024 - Present</div>-->
    <!--                            <h4 class="text-2xl font-bold text-slate-900 mb-3">Continued Growth</h4>-->
    <!--                            <p class="text-slate-600 leading-relaxed">Strengthening operations across 5 countries, 7 subsidiaries, 100+ employees with focus on excellence and innovation.</p>-->
    <!--                        </div>-->
    <!--                        <div class="relative flex items-center justify-center">-->
    <!--                            <div class="w-5 h-5 rounded-full bg-gradient-to-r from-brand-red to-purple-500 border-4 border-white shadow-lg z-10 animate-pulse"></div>-->
    <!--                        </div>-->
    <!--                        <div class="md:w-1/2"></div>-->
    <!--                    </div>-->
    <!--                </div>-->

    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->

    <!-- WHY GO GLOBAL WITH KAIKA -->
    <section class="py-32 bg-slate-900 text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-5 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-slate-700 via-slate-900 to-black"></div>
        
        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="reveal-on-scroll">
                    <h2 class="text-brand-red font-bold tracking-widest uppercase text-sm mb-4">Global Advantage</h2>
                    <h3 class="text-4xl md:text-5xl font-bold mb-6">Why Partner With Kaika?</h3>
                    <p class="text-lg text-slate-300 leading-relaxed mb-8">
                        Our strategic global presence offers unique advantages for businesses looking to expand internationally or access Japanese markets.
                    </p>
                    
                    <div class="space-y-6">
                        <div class="flex gap-4">
                            <div class="w-12 h-12 rounded-xl bg-red-100 flex items-center justify-center shrink-0">
                                <i data-lucide="globe" class="w-6 h-6 text-brand-red"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg mb-2">Multi-Continental Access</h4>
                                <p class="text-slate-300 leading-relaxed">Direct connections to Asia-Pacific, Oceania, and African markets through our established network.</p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center shrink-0">
                                <i data-lucide="shield-check" class="w-6 h-6 text-blue-600"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg mb-2">Japanese Quality Standards</h4>
                                <p class="text-slate-300 leading-relaxed">Every operation adheres to rigorous Japanese business practices and quality control.</p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="w-12 h-12 rounded-xl bg-emerald-100 flex items-center justify-center shrink-0">
                                <i data-lucide="users" class="w-6 h-6 text-emerald-600"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg mb-2">Local Expertise</h4>
                                <p class="text-slate-300 leading-relaxed">Regional teams with deep understanding of local markets and cultural nuances.</p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="w-12 h-12 rounded-xl bg-purple-100 flex items-center justify-center shrink-0">
                                <i data-lucide="zap" class="w-6 h-6 text-purple-600"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg mb-2">Diversified Services</h4>
                                <p class="text-slate-300 leading-relaxed">Access to 7 specialized subsidiaries spanning hospitality, technology, logistics, education, and recruitment.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="reveal-on-scroll" style="transition-delay: 200ms;">
                    <div class="relative group">
                        <div class="absolute -inset-4 bg-gradient-to-r from-red-600 to-orange-600 rounded-2xl blur opacity-25 group-hover:opacity-40 transition duration-1000"></div>
                        <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                            <img src="https://images.unsplash.com/photo-1521737711867-e3b97375f902?auto=format&fit=crop&q=80&w=1000" class="w-full h-full object-cover transform group-hover:scale-105 transition duration-700" alt="Global Team">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="py-32 bg-gradient-to-br from-brand-red to-red-700 text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&q=80&w=2000" class="w-full h-full object-cover">
        </div>
        
        <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center relative z-10 reveal-on-scroll">
            <h2 class="text-4xl md:text-5xl font-bold mb-6">Ready to Expand Globally?</h2>
            <p class="text-xl mb-10 leading-relaxed opacity-90">
                Whether you're looking to expand into new markets or establish partnerships across continents, we're here to help you succeed.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="contact.php" class="px-8 py-4 bg-white text-brand-red hover:bg-slate-100 font-bold tracking-widest uppercase transition-all rounded-lg inline-flex items-center justify-center gap-3 shadow-xl">
                    Contact Us
                    <i data-lucide="arrow-right" class="w-5 h-5"></i>
                </a>
                <a href="companies.php" class="px-8 py-4 border-2 border-white hover:bg-white/10 text-white font-bold tracking-widest uppercase transition-all rounded-lg">
                    Explore Companies
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