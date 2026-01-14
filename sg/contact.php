<?php include 'header.php'; ?>

    <!-- HERO SECTION -->
    <section class="relative h-auto min-h-screen md:h-[70vh] md:min-h-[600px] w-full overflow-hidden flex items-center justify-center">
        <!-- Background -->
        <div class="absolute inset-0 z-0">
            <img src="https://plus.unsplash.com/premium_photo-1697730373939-3ebcaa9d295e?q=80&w=2340&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Singapore Business District" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-b from-brand-dark/90 via-brand-dark/70 to-brand-red/50"></div>
            <div class="absolute inset-0 seigaiha-pattern opacity-20"></div>
        </div>

        <!-- Animated Elements -->
        <div class="absolute top-20 right-20 w-96 h-96 bg-brand-red/20 rounded-full blur-3xl animate-float"></div>
        <div class="absolute bottom-20 left-20 w-96 h-96 bg-cyan-500/20 rounded-full blur-3xl animate-float" style="animation-delay: 1s;"></div>

        <!-- Japanese Kanji -->
        <div class="kanji-decoration top-10 right-20 text-white">連</div>
        <div class="kanji-decoration bottom-10 left-20 text-white">絡</div>

        <!-- Content -->
        <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-8 text-center pt-24 pb-16 md:pt-32 md:pb-0">
            <!-- Breadcrumb -->
            <div class="flex items-center justify-center text-white/70 text-sm mb-6 md:mb-8 animate-fade-in-down">
                <a href="index.php" class="hover:text-white transition-colors">Home</a>
                <i data-lucide="chevron-right" class="w-4 h-4 mx-2"></i>
                <span class="text-white">Contact Us</span>
            </div>

            <div class="space-y-6 md:space-y-8">
                <!-- Badge -->
                <div class="inline-flex items-center gap-2 md:gap-3 px-4 md:px-5 py-2 rounded-full border border-white/20 bg-white/5 text-white/90 text-xs font-medium uppercase tracking-[0.1em] md:tracking-[0.2em] backdrop-blur-sm animate-fade-in-down">
                    <i data-lucide="message-circle" class="w-3 h-3 md:w-4 md:h-4"></i>
                    Get In Touch
                </div>
                
                <!-- Main Heading -->
                <h1 class="text-4xl sm:text-5xl md:text-7xl lg:text-8xl font-display font-bold text-white tracking-tight leading-[1.1] animate-fade-in-up">
                    Let's Build<br/>
                    <span class="gradient-text">Something Together</span>
                </h1>
                
                <!-- Subheading -->
                <p class="text-lg sm:text-xl md:text-2xl text-slate-300 max-w-4xl mx-auto font-light leading-relaxed animate-fade-in-up px-4" style="animation-delay: 0.2s;">
                    Partner with Kaika Singapore for integrated solutions in logistics, consulting, trading, and AI automation across Asia-Pacific.
                </p>

                <!-- Quick Stats -->
                <div class="grid grid-cols-3 gap-3 md:gap-6 max-w-3xl mx-auto pt-6 md:pt-8 pb-16 animate-fade-in-up" style="animation-delay: 0.3s;">
                    <div class="bg-white/5 backdrop-blur-sm rounded-xl md:rounded-2xl p-4 md:p-6 border border-white/10">
                        <i data-lucide="clock" class="w-6 h-6 md:w-8 md:h-8 text-brand-red mx-auto mb-2"></i>
                        <p class="text-xs md:text-sm text-slate-300 uppercase tracking-wider">24hr Response</p>
                    </div>
                    <div class="bg-white/5 backdrop-blur-sm rounded-xl md:rounded-2xl p-4 md:p-6 border border-white/10">
                        <i data-lucide="globe-2" class="w-6 h-6 md:w-8 md:h-8 text-cyan-400 mx-auto mb-2"></i>
                        <p class="text-xs md:text-sm text-slate-300 uppercase tracking-wider">Global Reach</p>
                    </div>
                    <div class="bg-white/5 backdrop-blur-sm rounded-xl md:rounded-2xl p-4 md:p-6 border border-white/10">
                        <i data-lucide="shield-check" class="w-6 h-6 md:w-8 md:h-8 text-emerald-400 mx-auto mb-2"></i>
                        <p class="text-xs md:text-sm text-slate-300 uppercase tracking-wider">Trusted Partner</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT OPTIONS -->
    <section class="py-24 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
            
            <!-- Section Header -->
            <div class="text-center mb-16 reveal">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-red-50 rounded-full mb-6">
                    <span class="w-2 h-2 bg-brand-red rounded-full"></span>
                    <span class="text-brand-red font-bold tracking-widest uppercase text-xs">Quick Contact</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-display font-bold text-slate-900 mb-6">
                    Reach Out Directly
                </h2>
                <p class="text-slate-600 text-lg max-w-3xl mx-auto">
                    Choose your preferred method of communication. Our team is ready to assist you.
                </p>
            </div>

            <!-- Contact Cards -->
            <div class="grid md:grid-cols-3 gap-8 mb-20">
                
                <!-- Location -->
                <div class="group bg-gradient-to-br from-red-50 to-white p-8 rounded-2xl border border-red-100 hover:border-red-300 hover:shadow-xl transition-all duration-300 reveal">
                    <div class="w-16 h-16 bg-gradient-to-br from-brand-red to-brand-redDark rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i data-lucide="map-pin" class="w-8 h-8 text-white"></i>
                    </div>
                    <h3 class="text-xl font-display font-bold text-slate-900 mb-4">Visit Our Office</h3>
                    <p class="text-slate-600 leading-relaxed mb-4">
                        River Valley<br/>
                        Singapore
                    </p>
                    <a href="#map" class="text-brand-red font-semibold hover:underline inline-flex items-center gap-2 group-hover:gap-3 transition-all">
                        View on Map <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </a>
                </div>

                <!-- Email -->
                <div class="group bg-gradient-to-br from-cyan-50 to-white p-8 rounded-2xl border border-cyan-100 hover:border-cyan-300 hover:shadow-xl transition-all duration-300 reveal" style="transition-delay: 100ms;">
                    <div class="w-16 h-16 bg-gradient-to-br from-cyan-500 to-cyan-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i data-lucide="mail" class="w-8 h-8 text-white"></i>
                    </div>
                    <h3 class="text-xl font-display font-bold text-slate-900 mb-4">Email Us</h3>
                    <p class="text-slate-600 leading-relaxed mb-4">
                        For general inquiries and detailed proposals
                    </p>
                    <a href="mailto:singapore@kaikaholdings.com" class="text-cyan-600 font-semibold hover:underline inline-flex items-center gap-2 group-hover:gap-3 transition-all break-all">
                        singapore@kaikaholdings.com
                    </a>
                </div>

                <!-- Phone -->
                <div class="group bg-gradient-to-br from-emerald-50 to-white p-8 rounded-2xl border border-emerald-100 hover:border-emerald-300 hover:shadow-xl transition-all duration-300 reveal" style="transition-delay: 200ms;">
                    <div class="w-16 h-16 bg-gradient-to-br from-emerald-500 to-emerald-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i data-lucide="phone" class="w-8 h-8 text-white"></i>
                    </div>
                    <h3 class="text-xl font-display font-bold text-slate-900 mb-4">Call Us</h3>
                    <p class="text-slate-600 leading-relaxed mb-4">
                        For urgent matters and immediate assistance
                    </p>
                    <a href="tel:+6583500509" class="text-emerald-600 font-semibold hover:underline inline-flex items-center gap-2 group-hover:gap-3 transition-all">
                        +65 8350 0509
                    </a>
                </div>

            </div>

            <!-- WhatsApp CTA -->
            <div class="bg-gradient-to-br from-green-600 to-green-500 rounded-2xl p-8 text-white text-center reveal">
                <div class="flex items-center justify-center gap-3 mb-4">
                    <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center">
                        <i data-lucide="message-circle" class="w-6 h-6"></i>
                    </div>
                    <h3 class="text-2xl font-display font-bold">Prefer WhatsApp?</h3>
                </div>
                <p class="text-green-100 mb-6 max-w-2xl mx-auto">
                    Chat with us directly on WhatsApp for quick responses and instant communication
                </p>
                <a href="https://wa.me/6583500509" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-3 px-8 py-4 bg-white hover:bg-green-50 text-green-600 font-bold rounded-xl transition-all duration-300 shadow-lg hover:shadow-xl">
                    <i data-lucide="message-circle" class="w-5 h-5"></i>
                    <span>Open WhatsApp Chat</span>
                    <i data-lucide="external-link" class="w-5 h-5"></i>
                </a>
            </div>

        </div>
    </section>

    <!-- CONTACT FORM -->
    <section class="py-24 bg-gradient-to-b from-slate-50 to-white relative overflow-hidden">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-brand-red/5 rounded-full blur-3xl"></div>
        <div class="kanji-decoration top-20 left-20 text-slate-900 opacity-5">問</div>

        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-2 gap-16 items-start">
                
                <!-- Form Info -->
                <div class="reveal-left">
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-purple-50 rounded-full mb-6">
                        <span class="w-2 h-2 bg-purple-600 rounded-full"></span>
                        <span class="text-purple-700 font-bold tracking-widest uppercase text-xs">Send Inquiry</span>
                    </div>
                    
                    <h2 class="text-4xl md:text-5xl font-display font-bold text-slate-900 mb-8 leading-tight">
                        Submit Your<br/>
                        <span class="gradient-text">Business Inquiry</span>
                    </h2>
                    
                    <p class="text-slate-600 text-lg leading-relaxed mb-12">
                        Fill out the form and our dedicated team will respond within one business day to discuss potential collaboration opportunities.
                    </p>

                    <!-- Service Types -->
                    <div class="space-y-6">
                        <h3 class="font-display font-bold text-slate-900 text-xl mb-6">What We Can Help With:</h3>
                        
                        <div class="flex items-start gap-4 p-4 bg-white rounded-xl border border-slate-100 hover:border-red-200 hover:shadow-md transition-all duration-300">
                            <div class="w-12 h-12 bg-red-50 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i data-lucide="truck" class="w-6 h-6 text-brand-red"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-900 mb-1">Global Logistics</h4>
                                <p class="text-sm text-slate-600">Ocean & air freight, warehousing, customs clearance</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 p-4 bg-white rounded-xl border border-slate-100 hover:border-orange-200 hover:shadow-md transition-all duration-300">
                            <div class="w-12 h-12 bg-orange-50 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i data-lucide="briefcase" class="w-6 h-6 text-orange-600"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-900 mb-1">Strategic Consulting</h4>
                                <p class="text-sm text-slate-600">Company setup, work passes, market entry</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 p-4 bg-white rounded-xl border border-slate-100 hover:border-blue-200 hover:shadow-md transition-all duration-300">
                            <div class="w-12 h-12 bg-blue-50 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i data-lucide="arrow-left-right" class="w-6 h-6 text-blue-600"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-900 mb-1">Import/Export Trading</h4>
                                <p class="text-sm text-slate-600">Japan-ASEAN trade, automotive, F&B, electronics</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 p-4 bg-white rounded-xl border border-slate-100 hover:border-cyan-200 hover:shadow-md transition-all duration-300">
                            <div class="w-12 h-12 bg-cyan-50 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i data-lucide="bot" class="w-6 h-6 text-cyan-600"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-900 mb-1">IT & AI Automation</h4>
                                <p class="text-sm text-slate-600">Custom ERP, multilingual AI, GovTech integration</p>
                            </div>
                        </div>
                    </div>

                    <!-- Response Time -->
                    <div class="mt-12 p-6 bg-gradient-to-br from-brand-dark to-slate-900 rounded-2xl text-white">
                        <div class="flex items-center gap-4">
                            <div class="w-14 h-14 bg-brand-red/20 rounded-xl flex items-center justify-center flex-shrink-0">
                                <i data-lucide="clock" class="w-7 h-7 text-brand-red"></i>
                            </div>
                            <div>
                                <h4 class="font-display font-bold mb-1">24-Hour Response</h4>
                                <p class="text-sm text-slate-300">We typically respond within one business day</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="reveal-right">
                    <form id="contactForm" class="bg-white p-8 md:p-10 rounded-3xl border border-slate-200 shadow-xl">
                        
                        <!-- Name Fields -->
                        <div class="grid md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label for="firstName" class="block text-sm font-bold text-slate-700 mb-3">First Name *</label>
                                <input type="text" id="firstName" name="firstName" required class="premium-input w-full px-5 py-4 rounded-xl border border-slate-200 focus:border-brand-red outline-none transition-all" placeholder="John">
                            </div>
                            <div>
                                <label for="lastName" class="block text-sm font-bold text-slate-700 mb-3">Last Name *</label>
                                <input type="text" id="lastName" name="lastName" required class="premium-input w-full px-5 py-4 rounded-xl border border-slate-200 focus:border-brand-red outline-none transition-all" placeholder="Doe">
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="mb-6">
                            <label for="email" class="block text-sm font-bold text-slate-700 mb-3">Business Email *</label>
                            <input type="email" id="email" name="email" required class="premium-input w-full px-5 py-4 rounded-xl border border-slate-200 focus:border-brand-red outline-none transition-all" placeholder="john@company.com">
                        </div>

                        <!-- Phone -->
                        <div class="mb-6">
                            <label for="phone" class="block text-sm font-bold text-slate-700 mb-3">Contact Number</label>
                            <input type="tel" id="phone" name="phone" class="premium-input w-full px-5 py-4 rounded-xl border border-slate-200 focus:border-brand-red outline-none transition-all" placeholder="+65 1234 5678">
                        </div>

                        <!-- Company -->
                        <div class="mb-6">
                            <label for="company" class="block text-sm font-bold text-slate-700 mb-3">Organization</label>
                            <input type="text" id="company" name="company" class="premium-input w-full px-5 py-4 rounded-xl border border-slate-200 focus:border-brand-red outline-none transition-all" placeholder="Your Company Name">
                        </div>

                        <!-- Inquiry Type -->
                        <div class="mb-6">
                            <label for="inquiryType" class="block text-sm font-bold text-slate-700 mb-3">Inquiry Type *</label>
                            <select id="inquiryType" name="inquiryType" required class="premium-input w-full px-5 py-4 rounded-xl border border-slate-200 focus:border-brand-red outline-none bg-white cursor-pointer transition-all">
                                <option value="">Select service category...</option>
                                <option value="logistics">Global Logistics</option>
                                <option value="consulting">Strategic Consulting</option>
                                <option value="trading">Import/Export Trading</option>
                                <option value="tech">IT & AI Automation</option>
                                <option value="partnership">Strategic Partnership</option>
                                <option value="investment">Investment Opportunity</option>
                                <option value="general">General Business Inquiry</option>
                            </select>
                        </div>

                        <!-- Message -->
                        <div class="mb-6">
                            <label for="message" class="block text-sm font-bold text-slate-700 mb-3">Detailed Message *</label>
                            <textarea id="message" name="message" rows="5" required class="premium-input w-full px-5 py-4 rounded-xl border border-slate-200 focus:border-brand-red outline-none resize-none transition-all" placeholder="Please provide details about your inquiry..."></textarea>
                        </div>

                        <!-- Consent -->
                        <div class="mb-8">
                            <label class="flex items-start gap-3 cursor-pointer group">
                                <input type="checkbox" id="consent" name="consent" required class="mt-1 w-5 h-5 text-brand-red border-slate-300 rounded focus:ring-brand-red cursor-pointer">
                                <span class="text-sm text-slate-600 leading-relaxed group-hover:text-slate-900 transition-colors">
                                    I acknowledge and consent to the processing of my personal information in accordance with applicable data protection regulations, and authorize Kaika Singapore to contact me regarding this business inquiry. *
                                </span>
                            </label>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn-shimmer w-full py-5 bg-gradient-to-r from-brand-red to-brand-redLight hover:from-brand-redDark hover:to-brand-red text-white font-bold rounded-xl shadow-lg hover:shadow-xl hover:shadow-brand-red/30 transition-all duration-300 uppercase tracking-widest flex items-center justify-center gap-3 group">
                            <span>Submit Inquiry</span>
                            <i data-lucide="send" class="w-5 h-5 group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform"></i>
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <!-- MAP SECTION -->
    <section id="map" class="py-24 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
            
            <!-- Section Header -->
            <div class="text-center mb-16 reveal">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-blue-50 rounded-full mb-6">
                    <span class="w-2 h-2 bg-blue-600 rounded-full"></span>
                    <span class="text-blue-600 font-bold tracking-widest uppercase text-xs">Our Location</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-display font-bold text-slate-900 mb-6">
                    Visit Us in Singapore
                </h2>
                <p class="text-slate-600 text-lg max-w-3xl mx-auto">
                    Strategically located in River Valley, at the heart of Singapore's business district
                </p>
            </div>

            <!-- Map Container -->
            <div class="reveal">
                <div class="bg-gradient-to-br from-slate-100 to-slate-50 rounded-3xl overflow-hidden shadow-2xl border border-slate-200">
                    <div class="aspect-[21/9] relative">
                        <!-- Placeholder for Google Maps -->
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15955.189586326946!2d103.8198!3d1.2931!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da19a20ba1f5f1%3A0x8d1c8c5a1d6e8b0c!2sRiver%20Valley%2C%20Singapore!5e0!3m2!1sen!2ssg!4v1234567890" 
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade"
                            class="absolute inset-0">
                        </iframe>
                    </div>
                    
                    <!-- Location Info Overlay -->
                    <div class="p-8 bg-white border-t border-slate-200">
                        <div class="grid md:grid-cols-3 gap-8">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-red-50 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <i data-lucide="map-pin" class="w-6 h-6 text-brand-red"></i>
                                </div>
                                <div>
                                    <h3 class="font-display font-bold text-slate-900 mb-2">Address</h3>
                                    <p class="text-slate-600">River Valley<br>Singapore</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-cyan-50 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <i data-lucide="clock" class="w-6 h-6 text-cyan-600"></i>
                                </div>
                                <div>
                                    <h3 class="font-display font-bold text-slate-900 mb-2">Business Hours</h3>
                                    <p class="text-slate-600">Monday - Friday<br>9:00 AM - 6:00 PM SGT</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-emerald-50 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <i data-lucide="train" class="w-6 h-6 text-emerald-600"></i>
                                </div>
                                <div>
                                    <h3 class="font-display font-bold text-slate-900 mb-2">How to Reach</h3>
                                    <p class="text-slate-600">MRT: Somerset / Orchard<br>Bus stops nearby</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- GLOBAL NETWORK -->
    <section class="py-24 bg-gradient-to-b from-slate-50 to-white relative overflow-hidden">
        <div class="kanji-decoration top-20 right-20 text-slate-900 opacity-5">界</div>

        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
            
            <!-- Section Header -->
            <div class="text-center mb-16 reveal">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-purple-50 rounded-full mb-6">
                    <span class="w-2 h-2 bg-purple-600 rounded-full"></span>
                    <span class="text-purple-700 font-bold tracking-widest uppercase text-xs">Kaika Holdings Group</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-display font-bold text-slate-900 mb-6">
                    Part of a Global Network
                </h2>
                <p class="text-slate-600 text-lg max-w-3xl mx-auto">
                    Connect with Kaika Holdings offices across five countries for regional expertise and global reach
                </p>
            </div>

            <!-- Regional Offices -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Japan HQ -->
                <div class="group bg-white p-8 rounded-2xl border border-slate-200 hover:border-red-300 hover:shadow-xl transition-all duration-300 reveal">
                    <div class="flex items-center gap-3 mb-6">
                        <span class="text-4xl">🇯🇵</span>
                        <div>
                            <h3 class="font-display font-bold text-slate-900 text-lg">Japan</h3>
                            <p class="text-xs text-slate-500 uppercase tracking-wider">Global Headquarters</p>
                        </div>
                    </div>
                    <p class="text-slate-600 text-sm mb-4">
                        Tokyo / Chiba, Japan<br>
                        5-2 Toyo, Koto-ku, Tokyo
                    </p>
                    <div class="space-y-2 text-sm">
                        <a href="mailto:japan@kaikaholdings.com" class="text-brand-red hover:underline block">japan@kaikaholdings.com</a>
                        <a href="tel:+818055050522" class="text-slate-600 hover:text-brand-red block">+81 80-5505-0522</a>
                    </div>
                </div>

                <!-- Singapore -->
                <div class="group bg-gradient-to-br from-brand-red to-brand-redDark p-8 rounded-2xl text-white shadow-xl reveal">
                    <div class="flex items-center gap-3 mb-6">
                        <span class="text-4xl">🇸🇬</span>
                        <div>
                            <h3 class="font-display font-bold text-lg">Singapore</h3>
                            <p class="text-xs text-white/70 uppercase tracking-wider">You Are Here</p>
                        </div>
                    </div>
                    <p class="text-white/90 text-sm mb-4">
                        River Valley, Singapore<br>
                        ASEAN Regional Hub
                    </p>
                    <div class="space-y-2 text-sm">
                        <a href="mailto:singapore@kaikaholdings.com" class="text-white hover:underline block">singapore@kaikaholdings.com</a>
                        <a href="tel:+6583500509" class="text-white/90 hover:text-white block">+65 8350 0509</a>
                    </div>
                </div>

                <!-- Sri Lanka -->
                <div class="group bg-white p-8 rounded-2xl border border-slate-200 hover:border-emerald-300 hover:shadow-xl transition-all duration-300 reveal">
                    <div class="flex items-center gap-3 mb-6">
                        <span class="text-4xl">🇱🇰</span>
                        <div>
                            <h3 class="font-display font-bold text-slate-900 text-lg">Sri Lanka</h3>
                            <p class="text-xs text-slate-500 uppercase tracking-wider">South Asian Hub</p>
                        </div>
                    </div>
                    <p class="text-slate-600 text-sm mb-4">
                        Colombo, Sri Lanka<br>
                        1 Parkway, Park Road, Colombo 5
                    </p>
                    <div class="space-y-2 text-sm">
                        <a href="mailto:colombo@kaikaholdings.com" class="text-emerald-600 hover:underline block">colombo@kaikaholdings.com</a>
                        <a href="tel:+94779919198" class="text-slate-600 hover:text-emerald-600 block">+94 77 991 9198</a>
                    </div>
                </div>

                <!-- Australia -->
                <div class="group bg-white p-8 rounded-2xl border border-slate-200 hover:border-blue-300 hover:shadow-xl transition-all duration-300 reveal">
                    <div class="flex items-center gap-3 mb-6">
                        <span class="text-4xl">🇦🇺</span>
                        <div>
                            <h3 class="font-display font-bold text-slate-900 text-lg">Australia</h3>
                            <p class="text-xs text-slate-500 uppercase tracking-wider">Pacific Operations</p>
                        </div>
                    </div>
                    <p class="text-slate-600 text-sm mb-4">
                        Melbourne, Australia<br>
                        Narre Warren 3805
                    </p>
                    <div class="space-y-2 text-sm">
                        <a href="mailto:australia@kaikaholdings.com" class="text-blue-600 hover:underline block">australia@kaikaholdings.com</a>
                    </div>
                </div>

                <!-- Africa -->
                <div class="group bg-white p-8 rounded-2xl border border-slate-200 hover:border-orange-300 hover:shadow-xl transition-all duration-300 reveal">
                    <div class="flex items-center gap-3 mb-6">
                        <span class="text-4xl">🇬🇳</span>
                        <div>
                            <h3 class="font-display font-bold text-slate-900 text-lg">Guinea</h3>
                            <p class="text-xs text-slate-500 uppercase tracking-wider">African Development</p>
                        </div>
                    </div>
                    <p class="text-slate-600 text-sm mb-4">
                        Republic of Guinea<br>
                        West Africa
                    </p>
                    <div class="space-y-2 text-sm">
                        <a href="mailto:africa@kaikaholdings.com" class="text-orange-600 hover:underline block">africa@kaikaholdings.com</a>
                    </div>
                </div>

                <!-- Parent Company -->
                <div class="group bg-gradient-to-br from-purple-600 to-purple-700 p-8 rounded-2xl text-white shadow-xl reveal">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center">
                            <i data-lucide="building-2" class="w-6 h-6"></i>
                        </div>
                        <div>
                            <h3 class="font-display font-bold text-lg">Parent Company</h3>
                            <p class="text-xs text-purple-200 uppercase tracking-wider">Corporate Office</p>
                        </div>
                    </div>
                    <p class="text-white/90 text-sm mb-4">
                        Kaika Holdings<br>
                        Global Strategic Command
                    </p>
                    <a href="https://kaikaholdings.com" target="_blank" class="inline-flex items-center gap-2 text-white hover:underline text-sm">
                        Visit Kaika Holdings <i data-lucide="external-link" class="w-4 h-4"></i>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- FAQ SECTION -->
    <section class="py-24 bg-white relative overflow-hidden">
        <div class="max-w-4xl mx-auto px-6 lg:px-8 relative z-10">
            
            <!-- Section Header -->
            <div class="text-center mb-16 reveal">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-slate-100 rounded-full mb-6">
                    <span class="w-2 h-2 bg-slate-900 rounded-full"></span>
                    <span class="text-slate-900 font-bold tracking-widest uppercase text-xs">Common Questions</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-display font-bold text-slate-900 mb-6">
                    Frequently Asked Questions
                </h2>
            </div>

            <!-- FAQ Items -->
            <div class="space-y-6">
                
                <div class="group bg-white border border-slate-200 rounded-2xl p-8 hover:border-brand-red hover:shadow-lg transition-all duration-300 reveal">
                    <h3 class="font-display font-bold text-slate-900 text-lg mb-3">How quickly will I receive a response?</h3>
                    <p class="text-slate-600 leading-relaxed">
                        Our team maintains a 24-hour response protocol for all business inquiries. You can expect an initial response within one business day. For urgent matters, please call us directly at +65 8350 0509.
                    </p>
                </div>

                <div class="group bg-white border border-slate-200 rounded-2xl p-8 hover:border-brand-red hover:shadow-lg transition-all duration-300 reveal">
                    <h3 class="font-display font-bold text-slate-900 text-lg mb-3">Do you provide services outside of Singapore?</h3>
                    <p class="text-slate-600 leading-relaxed">
                        Yes! While based in Singapore, we serve clients across the entire ASEAN region and facilitate trade between Japan, Singapore, and Southeast Asia. Our logistics network covers 150+ countries globally.
                    </p>
                </div>

                <div class="group bg-white border border-slate-200 rounded-2xl p-8 hover:border-brand-red hover:shadow-lg transition-all duration-300 reveal">
                    <h3 class="font-display font-bold text-slate-900 text-lg mb-3">Can I schedule an in-person meeting?</h3>
                    <p class="text-slate-600 leading-relaxed">
                        Absolutely! We welcome in-person consultations at our River Valley office. Please submit your inquiry through the form above or call us to schedule a meeting at your convenience.
                    </p>
                </div>

                <div class="group bg-white border border-slate-200 rounded-2xl p-8 hover:border-brand-red hover:shadow-lg transition-all duration-300 reveal">
                    <h3 class="font-display font-bold text-slate-900 text-lg mb-3">Which industries do you specialize in?</h3>
                    <p class="text-slate-600 leading-relaxed">
                        We serve clients across diverse industries including automotive, electronics, F&B, fintech, manufacturing, and e-commerce. Our integrated solutions are customized to meet the specific needs of each sector.
                    </p>
                </div>

                <div class="group bg-white border border-slate-200 rounded-2xl p-8 hover:border-brand-red hover:shadow-lg transition-all duration-300 reveal">
                    <h3 class="font-display font-bold text-slate-900 text-lg mb-3">How are you connected to Kaika Holdings?</h3>
                    <p class="text-slate-600 leading-relaxed">
                        Kaika Singapore is a proud subsidiary of Kaika Holdings Japan (established 2007). We inherit the group's Japanese excellence, quality standards, and global network while serving as the strategic hub for ASEAN markets.
                    </p>
                </div>

            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>

<script>
    // Form Submission Handler
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Get form data
        const formData = {
            firstName: document.getElementById('firstName').value,
            lastName: document.getElementById('lastName').value,
            email: document.getElementById('email').value,
            phone: document.getElementById('phone').value,
            company: document.getElementById('company').value,
            inquiryType: document.getElementById('inquiryType').value,
            message: document.getElementById('message').value
        };

        // Here you would typically send the data to your server
        console.log('Form submitted:', formData);
        
        // Show success message (you can customize this)
        alert('Thank you for your inquiry! We will respond within 24 hours.');
        
        // Reset form
        this.reset();
    });

    // Initialize Lucide icons after page load
    lucide.createIcons();
</script>