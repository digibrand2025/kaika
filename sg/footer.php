    <!-- FOOTER -->
    <footer class="bg-brand-dark text-white pt-20 pb-8 relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 seigaiha-pattern opacity-30"></div>
        
        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 sm:gap-12 mb-12 sm:mb-16">
                <!-- Brand Column -->
                <div class="col-span-1 sm:col-span-2">
                    <div class="flex items-center gap-4 mb-8">
                        <div class="w-12 h-12 bg-gradient-to-br from-brand-red to-brand-redDark text-white flex items-center justify-center font-display font-bold text-xl rounded shadow-lg">K</div>
                        <div>
                            <span class="font-display font-bold text-xl tracking-[0.3em]">KAIKA</span>
                            <span class="block text-xs text-slate-400 tracking-widest">SINGAPORE</span>
                        </div>
                    </div>
                    <p class="text-slate-400 leading-relaxed max-w-sm mb-8">
                        A subsidiary of Kaika Holdings Japan. We bring Japanese reliability and innovation to the heart of Singapore's business landscape.
                    </p>
                    <div class="flex gap-4">
                        <a href="#" class="w-12 h-12 rounded-xl bg-white/5 flex items-center justify-center hover:bg-brand-red transition-all duration-300 border border-white/10 hover:border-brand-red group">
                            <i data-lucide="linkedin" class="w-5 h-5 text-slate-400 group-hover:text-white transition-colors"></i>
                        </a>
                        <a href="#" class="w-12 h-12 rounded-xl bg-white/5 flex items-center justify-center hover:bg-brand-red transition-all duration-300 border border-white/10 hover:border-brand-red group">
                            <i data-lucide="twitter" class="w-5 h-5 text-slate-400 group-hover:text-white transition-colors"></i>
                        </a>
                        <a href="#" class="w-12 h-12 rounded-xl bg-white/5 flex items-center justify-center hover:bg-brand-red transition-all duration-300 border border-white/10 hover:border-brand-red group">
                            <i data-lucide="instagram" class="w-5 h-5 text-slate-400 group-hover:text-white transition-colors"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Services Column -->
                <div>
                    <h4 class="font-display font-bold mb-8 text-white">Our Services</h4>
                    <ul class="space-y-4 text-sm text-slate-400">
                        <li><a href="logistics.php" class="hover:text-brand-red transition-colors flex items-center gap-2 group"><i data-lucide="chevron-right" class="w-4 h-4 opacity-0 group-hover:opacity-100 transition-all"></i>Global Logistics</a></li>
                        <li><a href="tech.php" class="hover:text-brand-red transition-colors flex items-center gap-2 group"><i data-lucide="chevron-right" class="w-4 h-4 opacity-0 group-hover:opacity-100 transition-all"></i>IT & AI Automation</a></li>
                        <li><a href="consulting.php" class="hover:text-brand-red transition-colors flex items-center gap-2 group"><i data-lucide="chevron-right" class="w-4 h-4 opacity-0 group-hover:opacity-100 transition-all"></i>Strategic Consulting</a></li>
                        <li><a href="trading.php" class="hover:text-brand-red transition-colors flex items-center gap-2 group"><i data-lucide="chevron-right" class="w-4 h-4 opacity-0 group-hover:opacity-100 transition-all"></i>Import/Export Trading</a></li>
                    </ul>
                </div>

                <!-- HQ Column -->
                <div>
                    <h4 class="font-display font-bold mb-8 text-white">Headquarters</h4>
                    <div class="space-y-4 text-sm text-slate-400">
                        <p class="flex items-center gap-2">
                            <span class="text-brand-red font-bold">Kaika Holdings</span>
                        </p>
                        <p>Tokyo, Japan</p>
                        <a href="#" class="inline-flex items-center gap-2 text-brand-red hover:gap-3 transition-all text-sm mt-4 group">
                            Visit Parent Site <i data-lucide="external-link" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Bottom Bar -->
            <div class="border-t border-white/10 pt-6 sm:pt-8 flex flex-col md:flex-row justify-between items-center text-xs text-slate-500 gap-4">
                <p class="text-center md:text-left">&copy; 2024 Kaika Singapore Pte Ltd. All rights reserved.</p>
                <div class="flex flex-wrap gap-4 sm:gap-8 justify-center">
                    <a href="#" class="hover:text-white transition-colors">Privacy Policy</a>
                    <a href="#" class="hover:text-white transition-colors">Terms of Service</a>
                    <a href="#" class="hover:text-white transition-colors">Cookie Policy</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- BACK TO TOP BUTTON -->
    <button id="back-to-top" class="fixed bottom-8 right-8 w-14 h-14 bg-gradient-to-br from-brand-red to-brand-redDark text-white rounded-xl shadow-lg opacity-0 invisible hover:shadow-brand-red/40 transition-all duration-300 z-50 flex items-center justify-center group">
        <i data-lucide="chevron-up" class="w-6 h-6 group-hover:-translate-y-1 transition-transform"></i>
    </button>

    <script>
        // Initialize Icons
        lucide.createIcons();

        // --- HERO CAROUSEL LOGIC ---
        const slides = document.querySelectorAll('.hero-slide');
        const indicatorFills = document.querySelectorAll('.indicator-fill');
        let currentSlide = 0;
        let slideInterval;

        function updateSlides() {
            slides.forEach((slide, index) => {
                if (index === currentSlide) {
                    slide.classList.remove('inactive');
                    slide.classList.add('active');
                } else {
                    slide.classList.remove('active');
                    slide.classList.add('inactive');
                }
            });

            // Update Indicators
            indicatorFills.forEach((fill, index) => {
                if (index === currentSlide) {
                    fill.classList.remove('scale-x-0');
                    fill.classList.add('scale-x-100');
                } else {
                    fill.classList.remove('scale-x-100');
                    fill.classList.add('scale-x-0');
                }
            });
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            updateSlides();
        }

        function setSlide(index) {
            clearInterval(slideInterval);
            currentSlide = index;
            updateSlides();
            slideInterval = setInterval(nextSlide, 6000);
        }

        slideInterval = setInterval(nextSlide, 6000);
        // --- END HERO CAROUSEL LOGIC ---

        // --- NAVBAR SCROLL EFFECT ---
        const navbar = document.getElementById('navbar');
        const navBrand = document.getElementById('nav-brand');
        const navSub = document.getElementById('nav-sub');
        const navLinks = navbar.querySelectorAll('.nav-link');
        const mobileBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navbar.classList.add('glass-nav', 'shadow-lg');
                navbar.classList.remove('py-5', 'bg-transparent');
                navbar.classList.add('py-3');
                
                navBrand.classList.remove('text-white');
                navBrand.classList.add('text-slate-900');
                
                navSub.classList.remove('text-white/70');
                navSub.classList.add('text-brand-red');

                navLinks.forEach(link => {
                    link.classList.remove('text-white/90', 'hover:text-white', 'hover:bg-white/10');
                    link.classList.add('text-slate-600', 'hover:text-brand-red', 'hover:bg-red-50');
                });

                mobileBtn.classList.remove('text-white');
                mobileBtn.classList.add('text-slate-900');
            } else {
                navbar.classList.remove('glass-nav', 'shadow-lg');
                navbar.classList.add('py-5', 'bg-transparent');
                navbar.classList.remove('py-3');

                navBrand.classList.add('text-white');
                navBrand.classList.remove('text-slate-900');

                navSub.classList.add('text-white/70');
                navSub.classList.remove('text-brand-red');

                navLinks.forEach(link => {
                    link.classList.add('text-white/90', 'hover:text-white', 'hover:bg-white/10');
                    link.classList.remove('text-slate-600', 'hover:text-brand-red', 'hover:bg-red-50');
                });

                mobileBtn.classList.add('text-white');
                mobileBtn.classList.remove('text-slate-900');
            }
        });

        // Mobile Menu Toggle
        mobileBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Mobile Dropdown Toggle Function
        function toggleMobileDropdown() {
            const content = document.getElementById('mobile-dropdown-content');
            const icon = document.getElementById('mobile-dropdown-icon');
            content.classList.toggle('active');
            icon.style.transform = content.classList.contains('active') ? 'rotate(180deg)' : 'rotate(0)';
        }

        // --- SCROLL PROGRESS BAR ---
        const scrollProgress = document.getElementById('scroll-progress');
        window.addEventListener('scroll', () => {
            const scrollTop = window.scrollY;
            const docHeight = document.documentElement.scrollHeight - window.innerHeight;
            const scrollPercent = (scrollTop / docHeight) * 100;
            scrollProgress.style.width = scrollPercent + '%';
        });

        // --- BACK TO TOP BUTTON ---
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

        // --- SCROLL REVEAL ANIMATION ---
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

        document.querySelectorAll('.reveal, .reveal-left, .reveal-right').forEach(el => observer.observe(el));

        // --- STAGGER ANIMATION TRIGGER ---
        setTimeout(() => {
            document.querySelectorAll('[style*="opacity: 0"]').forEach((el, i) => {
                setTimeout(() => {
                    el.style.opacity = '1';
                    el.style.animation = 'fadeInUp 1s cubic-bezier(0.22, 1, 0.36, 1) forwards';
                }, i * 150);
            });
        }, 300);
    </script>
</body>
</html>