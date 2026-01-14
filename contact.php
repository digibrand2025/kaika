<?php 
$page_title = "CONTACT US - KAIKA HOLDINGS";
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

        /* Form Input Styling */
        .form-input {
            transition: all 0.3s ease;
        }
        .form-input:focus {
            border-color: #D32F2F;
            box-shadow: 0 0 0 3px rgba(211, 47, 47, 0.1);
        }

        /* Hotspot Pulse for Map */
        @keyframes hotspot-pulse {
            0% { box-shadow: 0 0 0 0 rgba(211, 47, 47, 0.7); }
            70% { box-shadow: 0 0 0 10px rgba(211, 47, 47, 0); }
            100% { box-shadow: 0 0 0 0 rgba(211, 47, 47, 0); }
        }
    </style>

    <!-- HERO SECTION -->
    <section class="relative h-[60vh] min-h-[500px] w-full overflow-hidden bg-slate-900">
        <div class="absolute inset-0 overflow-hidden">
            <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&q=80&w=2000" class="w-full h-full object-cover animate-ken-burns" alt="Contact Us">
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-slate-900 via-slate-900/90 to-red-900/80"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/20 to-transparent"></div>

        <!-- Content -->
        <div class="absolute inset-0 flex items-center">
            <div class="max-w-7xl mx-auto px-6 lg:px-8 w-full">
                <div class="max-w-4xl space-y-6 animate-fade-in-up">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="h-px w-12 bg-brand-red"></span>
                        <span class="text-brand-red font-bold tracking-widest uppercase text-sm">Connect With Us</span>
                    </div>
                    
                    <h1 class="text-5xl md:text-7xl font-bold text-white leading-tight text-glow">
                        Let's Build<br/>Something Together
                    </h1>
                    
                    <p class="text-xl md:text-2xl text-slate-100 mt-6 max-w-2xl font-light leading-relaxed">
                        Partner with a global enterprise committed to innovation, excellence, and sustainable growth across diverse industries
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT METHODS STRIP -->
    <div class="relative z-30 -mt-20 max-w-7xl mx-auto px-6 lg:px-8 reveal-on-scroll">
        <div class="grid grid-cols-1 md:grid-cols-3 bg-white shadow-2xl rounded-sm border-t-4 border-brand-red overflow-hidden">

            <!-- Email -->
            <div class="p-8 text-center border-r border-slate-100 hover:bg-slate-50 transition-colors group">
                <div class="w-16 h-16 mx-auto bg-gradient-to-br from-red-100 to-red-200 
                            rounded-full flex items-center justify-center text-brand-red 
                            mb-5 shadow-md group-hover:scale-110 transition-transform">
                    <i data-lucide="mail" class="w-7 h-7"></i>
                </div>
                <h4 class="font-bold text-lg mb-2 tracking-tight text-slate-900">Corporate Correspondence</h4>
                <p class="text-xs uppercase tracking-widest text-slate-500 mb-3">Business Inquiries</p>
                <a href="mailto:info@kaikaholdings.com" 
                   class="text-brand-red font-bold text-sm hover:underline underline-offset-4">
                    info@kaikaholdings.com
                </a>
            </div>

            <!-- Call -->
            <div class="p-8 text-center border-r border-slate-100 hover:bg-slate-50 transition-colors group">
                <div class="w-16 h-16 mx-auto bg-gradient-to-br from-blue-100 to-blue-200 
                            rounded-full flex items-center justify-center text-blue-600 
                            mb-5 shadow-md group-hover:scale-110 transition-transform">
                    <i data-lucide="phone" class="w-7 h-7"></i>
                </div>
                <h4 class="font-bold text-lg mb-2 tracking-tight text-slate-900">Executive Office</h4>
                <p class="text-xs uppercase tracking-widest text-slate-500 mb-3">Board of Directors</p>
                <div class="space-y-1">
                    <a href="tel:+94779919198" 
                       class="block text-brand-red font-semibold text-sm hover:underline underline-offset-4">
                        Gayan Thilina: +94 77 991 9198
                    </a>
                    <a href="tel:+818055050522" 
                       class="block text-brand-red font-semibold text-sm hover:underline underline-offset-4">
                        Ryo Kamikura: +81 80-5505-0522
                    </a>
                    <a href="tel:+818042949331" 
                       class="block text-brand-red font-semibold text-sm hover:underline underline-offset-4">
                        Takuro Kobayashi: +81 80-4294-9331
                    </a>
                </div>
            </div>

            <!-- Visit -->
            <div class="p-8 text-center hover:bg-slate-50 transition-colors group">
                <div class="w-16 h-16 mx-auto bg-gradient-to-br from-emerald-100 to-emerald-200 
                            rounded-full flex items-center justify-center text-emerald-600 
                            mb-5 shadow-md group-hover:scale-110 transition-transform">
                    <i data-lucide="map-pin" class="w-7 h-7"></i>
                </div>
                <h4 class="font-bold text-lg mb-2 tracking-tight text-slate-900">Global Headquarters</h4>
                <p class="text-xs uppercase tracking-widest text-slate-500 mb-3">Strategic Command</p>
                <p class="text-brand-red font-bold text-sm">Tokyo / Chiba, Japan</p>
            </div>

        </div>
    </div>

    <!-- CONTACT FORM & INFO SECTION -->
    <section class="py-32 bg-slate-50">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-5 gap-16">
                
                <!-- Contact Form -->
                <div class="lg:col-span-3 reveal-on-scroll">
                    <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12 border border-slate-200">
                        <h2 class="text-3xl font-bold mb-3 text-slate-900">Initiate a Conversation</h2>
                        <p class="text-slate-600 mb-8">Submit your inquiry below and our dedicated team will respond within one business day to discuss potential collaboration opportunities.</p>
                        
                        <form class="space-y-6" id="contact-form">
                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2" for="first-name">
                                        First Name <span class="text-brand-red">*</span>
                                    </label>
                                    <input 
                                        type="text" 
                                        id="first-name" 
                                        required
                                        class="form-input w-full px-4 py-3 border border-slate-300 rounded-lg focus:outline-none"
                                        placeholder="Enter first name"
                                    >
                                </div>
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2" for="last-name">
                                        Last Name <span class="text-brand-red">*</span>
                                    </label>
                                    <input 
                                        type="text" 
                                        id="last-name" 
                                        required
                                        class="form-input w-full px-4 py-3 border border-slate-300 rounded-lg focus:outline-none"
                                        placeholder="Enter last name"
                                    >
                                </div>
                            </div>

                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2" for="email">
                                        Business Email <span class="text-brand-red">*</span>
                                    </label>
                                    <input 
                                        type="email" 
                                        id="email" 
                                        required
                                        class="form-input w-full px-4 py-3 border border-slate-300 rounded-lg focus:outline-none"
                                        placeholder="your.name@company.com"
                                    >
                                </div>
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2" for="phone">
                                        Contact Number
                                    </label>
                                    <input 
                                        type="tel" 
                                        id="phone"
                                        class="form-input w-full px-4 py-3 border border-slate-300 rounded-lg focus:outline-none"
                                        placeholder="+1 (555) 000-0000"
                                    >
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-2" for="company">
                                    Organization
                                </label>
                                <input 
                                    type="text" 
                                    id="company"
                                    class="form-input w-full px-4 py-3 border border-slate-300 rounded-lg focus:outline-none"
                                    placeholder="Company or institution name"
                                >
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-2" for="subject">
                                    Inquiry Type <span class="text-brand-red">*</span>
                                </label>
                                <select 
                                    id="subject" 
                                    required
                                    class="form-input w-full px-4 py-3 border border-slate-300 rounded-lg focus:outline-none bg-white"
                                >
                                    <option value="">Select inquiry category...</option>
                                    <option value="partnership">Strategic Partnership</option>
                                    <option value="investment">Investment & Capital</option>
                                    <option value="subsidiary">Subsidiary Services</option>
                                    <option value="procurement">Procurement & Supply Chain</option>
                                    <option value="careers">Executive Recruitment</option>
                                    <option value="media">Media Relations & Press</option>
                                    <option value="other">General Business Inquiry</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-2" for="message">
                                    Detailed Message <span class="text-brand-red">*</span>
                                </label>
                                <textarea 
                                    id="message" 
                                    required
                                    rows="6"
                                    class="form-input w-full px-4 py-3 border border-slate-300 rounded-lg focus:outline-none resize-none"
                                    placeholder="Please provide comprehensive details regarding your inquiry, including specific objectives, timeline considerations, and any relevant background information..."
                                ></textarea>
                            </div>

                            <div class="flex items-start gap-3">
                                <input 
                                    type="checkbox" 
                                    id="consent" 
                                    required
                                    class="mt-1 w-4 h-4 text-brand-red border-slate-300 rounded focus:ring-brand-red"
                                >
                                <label for="consent" class="text-sm text-slate-600">
                                    I acknowledge and consent to the processing of my personal information in accordance with applicable data protection regulations, and authorize Kaika Holdings to contact me regarding this business inquiry. <span class="text-brand-red">*</span>
                                </label>
                            </div>

                            <button 
                                type="submit"
                                class="w-full px-8 py-4 bg-brand-red hover:bg-red-700 text-white font-bold tracking-widest uppercase transition-all hover:shadow-[0_0_30px_rgba(220,38,38,0.4)] rounded-lg flex items-center justify-center gap-3 group"
                            >
                                Submit Inquiry
                                <i data-lucide="send" class="w-5 h-5 group-hover:translate-x-1 transition-transform"></i>
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Contact Info Sidebar -->
                <div class="lg:col-span-2 space-y-8 reveal-on-scroll" style="transition-delay: 200ms;">
                    
                    <!-- Why Contact Us -->
                    <div class="bg-slate-900 rounded-2xl shadow-2xl shadow-black/40 p-8 border border-slate-700">
                        <h3 class="text-xl font-bold mb-4 text-white">Business Development Opportunities</h3>

                        <ul class="space-y-4">
                            <li class="flex items-start gap-3">
                                <div class="w-6 h-6 rounded-full bg-brand-red/20 flex items-center justify-center text-brand-red shrink-0 mt-1">
                                    <i data-lucide="handshake" class="w-3 h-3"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-white mb-1">Strategic Alliances</h4>
                                    <p class="text-sm text-slate-400">
                                        Explore collaborative ventures across our diversified business portfolio spanning multiple continents
                                    </p>
                                </div>
                            </li>

                            <li class="flex items-start gap-3">
                                <div class="w-6 h-6 rounded-full bg-brand-red/20 flex items-center justify-center text-brand-red shrink-0 mt-1">
                                    <i data-lucide="trending-up" class="w-3 h-3"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-white mb-1">Investment Opportunities</h4>
                                    <p class="text-sm text-slate-400">
                                        Engage in discussions regarding capital deployment, equity participation, and growth initiatives
                                    </p>
                                </div>
                            </li>

                            <li class="flex items-start gap-3">
                                <div class="w-6 h-6 rounded-full bg-brand-red/20 flex items-center justify-center text-brand-red shrink-0 mt-1">
                                    <i data-lucide="briefcase" class="w-3 h-3"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-white mb-1">Enterprise Solutions</h4>
                                    <p class="text-sm text-slate-400">
                                        Access comprehensive service offerings through our subsidiary network in logistics, technology, and consulting
                                    </p>
                                </div>
                            </li>

                            <li class="flex items-start gap-3">
                                <div class="w-6 h-6 rounded-full bg-brand-red/20 flex items-center justify-center text-brand-red shrink-0 mt-1">
                                    <i data-lucide="users" class="w-3 h-3"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-white mb-1">Talent Acquisition</h4>
                                    <p class="text-sm text-slate-400">
                                        Join our expanding international team of professionals driving innovation across diverse sectors
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <!-- Response Time -->
                    <div class="bg-gradient-to-br from-brand-red to-red-700 rounded-2xl shadow-lg p-8 text-white">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center">
                                <i data-lucide="clock" class="w-6 h-6"></i>
                            </div>
                            <h3 class="text-xl font-bold">Prompt Response Commitment</h3>
                        </div>
                        <p class="text-white/90 leading-relaxed">
                            Our corporate development team maintains a <strong>24-hour response protocol</strong> for all business inquiries. For time-sensitive matters requiring immediate attention, please contact our executive office directly via telephone.
                        </p>
                    </div>

                    <!-- Social Media -->
                    <div class="bg-slate-900 rounded-2xl shadow-2xl shadow-black/40 p-8 border border-slate-700">
                        <h3 class="text-xl font-bold mb-4 text-white">Corporate Network</h3>
                        <div class="flex gap-3">
                            <a href="#" class="w-12 h-12 rounded-lg bg-slate-800 text-slate-300 hover:bg-brand-red hover:text-white flex items-center justify-center transition-all duration-300 hover:shadow-lg hover:shadow-brand-red/30">
                                <i data-lucide="linkedin" class="w-5 h-5"></i>
                            </a>
                            <a href="#" class="w-12 h-12 rounded-lg bg-slate-800 text-slate-300 hover:bg-brand-red hover:text-white flex items-center justify-center transition-all duration-300 hover:shadow-lg hover:shadow-brand-red/30">
                                <i data-lucide="facebook" class="w-5 h-5"></i>
                            </a>
                            <a href="#" class="w-12 h-12 rounded-lg bg-slate-800 text-slate-300 hover:bg-brand-red hover:text-white flex items-center justify-center transition-all duration-300 hover:shadow-lg hover:shadow-brand-red/30">
                                <i data-lucide="globe" class="w-5 h-5"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- OFFICE LOCATIONS -->
    <section class="py-32 bg-slate-950">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 reveal-on-scroll">
                <h2 class="text-brand-red font-bold tracking-widest uppercase text-sm mb-4">International Presence</h2>
                <h3 class="text-4xl md:text-5xl font-bold mb-6 text-white">Regional Offices & Operations</h3>
                <p class="text-lg text-slate-400">
                    Strategically positioned across five continents to deliver localized expertise with global reach and operational excellence.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">

                <!-- Japan HQ -->
                <div class="reveal-on-scroll group">
                    <div class="bg-slate-900 rounded-2xl p-8 border-2 border-brand-red hover:shadow-2xl hover:shadow-brand-red/30 transition-all duration-300">
                        <div class="flex items-start justify-between mb-4">
                            <div class="w-12 h-12 bg-brand-red rounded-lg flex items-center justify-center text-white">
                                <i data-lucide="building-2" class="w-6 h-6"></i>
                            </div>
                            <span class="px-3 py-1 bg-brand-red text-white text-xs font-bold rounded-full uppercase">Headquarters</span>
                        </div>
                        <h4 class="text-xl font-bold mb-2 text-white">Tokyo / Chiba, Japan</h4>
                        <p class="text-sm text-slate-400 mb-4">Global Strategic Command & Corporate Governance</p>
                        <div class="space-y-2 text-sm text-slate-400">
                            <p class="flex items-start gap-2">
                                <i data-lucide="map-pin" class="w-4 h-4 text-brand-red shrink-0 mt-0.5"></i>
                                <span>5-2 Toyo, Koto-ku, Tokyo, Japan</span>
                            </p>
                            <p class="flex items-center gap-2">
                                <i data-lucide="mail" class="w-4 h-4 text-brand-red"></i>
                                <span>japan@kaikaholdings.com</span>
                            </p>
                            <p class="flex items-center gap-2">
                                <i data-lucide="phone" class="w-4 h-4 text-brand-red"></i>
                                <span>+81 80-5505-0522</span>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Sri Lanka -->
                <div class="reveal-on-scroll group" style="transition-delay: 100ms;">
                    <div class="bg-slate-900 rounded-2xl p-8 border border-slate-700 hover:border-brand-red hover:shadow-2xl hover:shadow-brand-red/20 transition-all duration-300">
                        <div class="flex items-start justify-between mb-4">
                            <div class="w-12 h-12 bg-orange-500/20 rounded-lg flex items-center justify-center text-orange-400">
                                <i data-lucide="building-2" class="w-6 h-6"></i>
                            </div>
                        </div>
                        <h4 class="text-xl font-bold mb-2 text-white">Colombo, Sri Lanka</h4>
                        <p class="text-sm text-slate-400 mb-4">South Asian Operations & Business Development</p>
                        <div class="space-y-2 text-sm text-slate-400">
                            <p class="flex items-start gap-2">
                                <i data-lucide="map-pin" class="w-4 h-4 text-brand-red shrink-0 mt-0.5"></i>
                                <span>1 Parkway, Park Road, Colombo 5</span>
                            </p>
                            <p class="flex items-center gap-2">
                                <i data-lucide="mail" class="w-4 h-4 text-brand-red"></i>
                                <span>colombo@kaikaholdings.com</span>
                            </p>
                            <p class="flex items-center gap-2">
                                <i data-lucide="phone" class="w-4 h-4 text-brand-red"></i>
                                <span>+94 77 991 9198</span>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Singapore -->
                <div class="reveal-on-scroll group" style="transition-delay: 200ms;">
                    <div class="bg-slate-900 rounded-2xl p-8 border border-slate-700 hover:border-brand-red hover:shadow-2xl hover:shadow-brand-red/20 transition-all duration-300">
                        <div class="flex items-start justify-between mb-4">
                            <div class="w-12 h-12 bg-blue-500/20 rounded-lg flex items-center justify-center text-blue-400">
                                <i data-lucide="building-2" class="w-6 h-6"></i>
                            </div>
                        </div>
                        <h4 class="text-xl font-bold mb-2 text-white">Singapore</h4>
                        <p class="text-sm text-slate-400 mb-4">Financial Services & Regional Treasury</p>
                        <div class="space-y-2 text-sm text-slate-400">
                            <p class="flex items-start gap-2">
                                <i data-lucide="map-pin" class="w-4 h-4 text-brand-red shrink-0 mt-0.5"></i>
                                <span>River Valley, Singapore</span>
                            </p>
                            <p class="flex items-center gap-2">
                                <i data-lucide="mail" class="w-4 h-4 text-brand-red"></i>
                                <span>singapore@kaikaholdings.com</span>
                            </p>
                            <p class="flex items-center gap-2">
                                <i data-lucide="phone" class="w-4 h-4 text-brand-red"></i>
                                <span>+65 8350 0509</span>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Australia -->
                <div class="reveal-on-scroll group" style="transition-delay: 300ms;">
                    <div class="bg-slate-900 rounded-2xl p-8 border border-slate-700 hover:border-brand-red hover:shadow-2xl hover:shadow-brand-red/20 transition-all duration-300">
                        <div class="w-12 h-12 bg-emerald-500/20 rounded-lg flex items-center justify-center text-emerald-400 mb-4">
                            <i data-lucide="building-2" class="w-6 h-6"></i>
                        </div>
                        <h4 class="text-xl font-bold mb-2 text-white">Melbourne, Australia</h4>
                        <p class="text-sm text-slate-400 mb-4">Pacific Region & Oceania Operations</p>
                        <div class="space-y-2 text-sm text-slate-400">
                            <p class="flex items-start gap-2">
                                <i data-lucide="map-pin" class="w-4 h-4 text-brand-red shrink-0 mt-0.5"></i>
                                <span>Narre Warren 3805, Melbourne, Australia</span>
                            </p>
                            <p class="flex items-center gap-2">
                                <i data-lucide="mail" class="w-4 h-4 text-brand-red"></i>
                                <span>australia@kaikaholdings.com</span>
                            </p>
                            <p class="flex items-center gap-2">
                                <i data-lucide="phone" class="w-4 h-4 text-brand-red"></i>
                                <span>+61 (Contact via email)</span>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Guinea -->
                <div class="reveal-on-scroll group" style="transition-delay: 400ms;">
                    <div class="bg-slate-900 rounded-2xl p-8 border border-slate-700 hover:border-brand-red hover:shadow-2xl hover:shadow-brand-red/20 transition-all duration-300">
                        <div class="w-12 h-12 bg-amber-500/20 rounded-lg flex items-center justify-center text-amber-400 mb-4">
                            <i data-lucide="building-2" class="w-6 h-6"></i>
                        </div>
                        <h4 class="text-xl font-bold mb-2 text-white">Guinea, West Africa</h4>
                        <p class="text-sm text-slate-400 mb-4">African Market Development & Trade</p>
                        <div class="space-y-2 text-sm text-slate-400">
                            <p class="flex items-start gap-2">
                                <i data-lucide="map-pin" class="w-4 h-4 text-brand-red shrink-0 mt-0.5"></i>
                                <span>Republic of Guinea</span>
                            </p>
                            <p class="flex items-center gap-2">
                                <i data-lucide="mail" class="w-4 h-4 text-brand-red"></i>
                                <span>africa@kaikaholdings.com</span>
                            </p>
                            <p class="flex items-center gap-2">
                                <i data-lucide="phone" class="w-4 h-4 text-brand-red"></i>
                                <span>+224 (Contact via email)</span>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- FAQ SECTION -->
    <section class="py-32 bg-slate-50">
        <div class="max-w-4xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16 reveal-on-scroll">
                <h2 class="text-brand-red font-bold tracking-widest uppercase text-sm mb-4">Frequently Asked Questions</h2>
                <h3 class="text-4xl font-bold mb-6 text-slate-900">Corporate Information & Inquiries</h3>
            </div>

            <div class="space-y-4 reveal-on-scroll">
                
                <div class="bg-white rounded-xl border border-slate-200 overflow-hidden">
                    <button class="faq-button w-full px-8 py-6 text-left flex items-center justify-between hover:bg-slate-50 transition-colors">
                        <span class="font-bold text-lg text-slate-900">What is the organizational structure of Kaika Holdings?</span>
                        <i data-lucide="chevron-down" class="w-5 h-5 text-brand-red transition-transform"></i>
                    </button>
                    <div class="faq-content hidden px-8 pb-6">
                        <p class="text-slate-600 leading-relaxed">Kaika Holdings operates as a multinational parent corporation providing strategic oversight to eight specialized subsidiaries: Kamikura (authentic Japanese cuisine), Legend Pvt Ltd (consumer electronics and technology), Kaika International (international vehicle trading and automotive solutions), Kaika Logistics (integrated supply chain management), Kaika Japanese School (Japanese language and cultural education), Kaika Carriers (international recruitment and talent placement), Kaika Travel and Tourism (comprehensive travel services), and additional ventures. Our corporate governance model ensures operational autonomy while facilitating strategic synergies across all business units.</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl border border-slate-200 overflow-hidden">
                    <button class="faq-button w-full px-8 py-6 text-left flex items-center justify-between hover:bg-slate-50 transition-colors">
                        <span class="font-bold text-lg text-slate-900">What protocols govern partnership and investment engagement?</span>
                        <i data-lucide="chevron-down" class="w-5 h-5 text-brand-red transition-transform"></i>
                    </button>
                    <div class="faq-content hidden px-8 pb-6">
                        <p class="text-slate-600 leading-relaxed">Kaika Holdings welcomes strategic partnership proposals and qualified investment opportunities. Prospective partners are invited to submit comprehensive proposals via our corporate inquiry form or direct email correspondence to info@kaikaholdings.com. All submissions undergo rigorous evaluation by our business development and corporate strategy teams. Following initial assessment, qualified inquiries receive formal response within 24-48 business hours, with subsequent engagement protocols determined based on opportunity scope and strategic alignment.</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl border border-slate-200 overflow-hidden">
                    <button class="faq-button w-full px-8 py-6 text-left flex items-center justify-between hover:bg-slate-50 transition-colors">
                        <span class="font-bold text-lg text-slate-900">What is the geographic scope of Kaika Holdings' operations?</span>
                        <i data-lucide="chevron-down" class="w-5 h-5 text-brand-red transition-transform"></i>
                    </button>
                    <div class="faq-content hidden px-8 pb-6">
                        <p class="text-slate-600 leading-relaxed">Kaika Holdings maintains operational presence across five strategic markets: Japan (global headquarters and strategic command), Sri Lanka (South Asian regional hub), Singapore (financial services and treasury center), Australia (Pacific operations base), and Guinea (African market development). This international footprint enables localized market expertise while maintaining centralized corporate governance and strategic coordination across all territories.</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl border border-slate-200 overflow-hidden">
                    <button class="faq-button w-full px-8 py-6 text-left flex items-center justify-between hover:bg-slate-50 transition-colors">
                        <span class="font-bold text-lg text-slate-900">How can qualified candidates explore career opportunities?</span>
                        <i data-lucide="chevron-down" class="w-5 h-5 text-brand-red transition-transform"></i>
                    </button>
                    <div class="faq-content hidden px-8 pb-6">
                        <p class="text-slate-600 leading-relaxed">Kaika Holdings continuously seeks exceptional talent across our global operations and subsidiary network. Current executive and professional opportunities are published through our recruitment subsidiary, Kaika Carriers, accessible at kaika-international.com. For strategic inquiries regarding senior leadership positions or specialized roles, candidates may submit confidential applications through our contact portal, selecting "Executive Recruitment" as the inquiry category. All applications receive professional evaluation in accordance with our talent acquisition protocols.</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl border border-slate-200 overflow-hidden">
                    <button class="faq-button w-full px-8 py-6 text-left flex items-center justify-between hover:bg-slate-50 transition-colors">
                        <span class="font-bold text-lg text-slate-900">What is the protocol for subsidiary-specific inquiries?</span>
                        <i data-lucide="chevron-down" class="w-5 h-5 text-brand-red transition-transform"></i>
                    </button>
                    <div class="faq-content hidden px-8 pb-6">
                        <p class="text-slate-600 leading-relaxed">Each subsidiary operates dedicated communication channels accessible through their respective corporate websites. Comprehensive subsidiary directory and contact information is available on the Kaika Holdings homepage. For inquiries requiring corporate-level coordination or involving multiple business units, direct correspondence with Kaika Holdings is recommended. Our corporate liaison team will ensure appropriate routing and facilitate cross-subsidiary coordination as required.</p>
                    </div>
                </div>

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
                        A multinational enterprise committed to delivering excellence through strategic diversification, operational integrity, and sustainable growth across global markets.
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
                    <h4 class="font-bold mb-6">Corporate Office</h4>
                    <ul class="space-y-4 text-sm opacity-70 text-slate-300">
                        <li class="flex items-start gap-3">
                            <i data-lucide="map-pin" class="shrink-0 text-brand-red w-4 h-4 mt-1"></i>
                            <span>Global Headquarters<br/>Tokyo / Chiba, Japan</span>
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
                    <a href="#">Terms of Service</a>
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

        // --- Contact Form Submission ---
        const contactForm = document.getElementById('contact-form');
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(contactForm);
            const data = Object.fromEntries(formData);
            
            // Show success message (in real implementation, this would send to a server)
            alert('Thank you for your inquiry. A member of our corporate development team will respond within one business day.');
            
            // Reset form
            contactForm.reset();
        });

        // --- FAQ Accordion ---
        const faqButtons = document.querySelectorAll('.faq-button');
        faqButtons.forEach(button => {
            button.addEventListener('click', () => {
                const content = button.nextElementSibling;
                const icon = button.querySelector('[data-lucide="chevron-down"]');
                
                // Toggle current FAQ
                content.classList.toggle('hidden');
                icon.classList.toggle('rotate-180');
                
                // Close other FAQs
                faqButtons.forEach(otherButton => {
                    if (otherButton !== button) {
                        const otherContent = otherButton.nextElementSibling;
                        const otherIcon = otherButton.querySelector('[data-lucide="chevron-down"]');
                        otherContent.classList.add('hidden');
                        otherIcon.classList.remove('rotate-180');
                    }
                });
            });
        });

        // Re-initialize icons after DOM manipulation
        lucide.createIcons();
    </script>
</body>
</html>