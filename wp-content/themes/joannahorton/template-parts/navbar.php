<?php
/**
 * Navigation component.
 *
 * @package joannahorton
 */
?>

<nav id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-transparent py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center">
            <!-- Logo -->
            <a href="<?php echo esc_url(home_url('/')); ?>" class="font-serif text-xl md:text-2xl font-bold text-brand-charcoal tracking-tight">
                Joanna Horton McPherson
            </a>

            <!-- Desktop Nav -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="#about" class="text-brand-charcoal hover:text-brand-gold transition-colors font-medium text-sm tracking-wide">
                    About
                </a>
                <a href="#speaking" class="text-brand-charcoal hover:text-brand-gold transition-colors font-medium text-sm tracking-wide">
                    Speaking
                </a>
                <a href="#services" class="text-brand-charcoal hover:text-brand-gold transition-colors font-medium text-sm tracking-wide">
                    Services
                </a>
                <a href="#testimonials" class="text-brand-charcoal hover:text-brand-gold transition-colors font-medium text-sm tracking-wide">
                    Testimonials
                </a>
                <a href="mailto:info@mywomenofinfluence.com" target="_blank" rel="noopener noreferrer" class="bg-brand-gold text-brand-charcoal px-6 py-2.5 rounded-full font-medium hover:bg-brand-charcoal hover:text-brand-gold transition-all duration-300 transform hover:scale-105 shadow-sm">
                    Book Joanna
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button
                id="mobile-menu-toggle"
                class="md:hidden text-brand-charcoal"
                aria-label="Toggle menu"
                aria-expanded="false"
            >
                <!-- Menu Icon -->
                <svg id="menu-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="4" x2="20" y1="12" y2="12"></line>
                    <line x1="4" x2="20" y1="6" y2="6"></line>
                    <line x1="4" x2="20" y1="18" y2="18"></line>
                </svg>
                <!-- X Icon (hidden by default) -->
                <svg id="close-icon" class="hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 6 6 18"></path>
                    <path d="m6 6 12 12"></path>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden bg-white border-t border-gray-100 overflow-hidden hidden">
        <div class="px-4 py-6 space-y-4 flex flex-col">
            <a href="#about" class="mobile-nav-link text-brand-charcoal text-lg font-medium hover:text-brand-gold transition-colors">
                About
            </a>
            <a href="#speaking" class="mobile-nav-link text-brand-charcoal text-lg font-medium hover:text-brand-gold transition-colors">
                Speaking
            </a>
            <a href="#services" class="mobile-nav-link text-brand-charcoal text-lg font-medium hover:text-brand-gold transition-colors">
                Services
            </a>
            <a href="#testimonials" class="mobile-nav-link text-brand-charcoal text-lg font-medium hover:text-brand-gold transition-colors">
                Testimonials
            </a>
            <a href="#guide" class="mobile-nav-link bg-brand-gold text-brand-charcoal px-6 py-3 rounded-full font-medium text-center hover:bg-brand-charcoal hover:text-brand-gold transition-colors mt-4">
                Book Joanna
            </a>
        </div>
    </div>
</nav>

<script>
(function() {
    const navbar = document.getElementById('navbar');
    const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = document.getElementById('menu-icon');
    const closeIcon = document.getElementById('close-icon');
    const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');
    let isScrolled = false;
    let isMobileMenuOpen = false;

    // Handle scroll effect
    function handleScroll() {
        const shouldBeScrolled = window.scrollY > 50;
        if (shouldBeScrolled !== isScrolled) {
            isScrolled = shouldBeScrolled;
            if (isScrolled) {
                navbar.classList.remove('bg-transparent', 'py-6');
                navbar.classList.add('bg-white/95', 'backdrop-blur-md', 'shadow-md', 'py-4');
            } else {
                navbar.classList.remove('bg-white/95', 'backdrop-blur-md', 'shadow-md', 'py-4');
                navbar.classList.add('bg-transparent', 'py-6');
            }
        }
    }

    // Toggle mobile menu
    function toggleMobileMenu() {
        isMobileMenuOpen = !isMobileMenuOpen;
        mobileMenuToggle.setAttribute('aria-expanded', isMobileMenuOpen);
        
        if (isMobileMenuOpen) {
            mobileMenu.classList.remove('hidden');
            menuIcon.classList.add('hidden');
            closeIcon.classList.remove('hidden');
        } else {
            mobileMenu.classList.add('hidden');
            menuIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');
        }
    }

    // Handle mobile nav link clicks
    function handleMobileNavClick(e) {
        e.preventDefault();
        const href = e.target.getAttribute('href');
        
        toggleMobileMenu();
        
        setTimeout(() => {
            const element = document.querySelector(href);
            if (element) {
                element.scrollIntoView({ behavior: 'smooth' });
            }
        }, 300);
    }

    // Event listeners
    window.addEventListener('scroll', handleScroll);
    mobileMenuToggle.addEventListener('click', toggleMobileMenu);
    mobileNavLinks.forEach(link => {
        link.addEventListener('click', handleMobileNavClick);
    });

    // Initial check
    handleScroll();
})();
</script>
