<?php
/**
 * Footer component.
 *
 * @package joannahorton
 */
?>

<footer id="contact" class="bg-brand-charcoal text-white pt-20 pb-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-16">
            <!-- Brand -->
            <div>
                <h3 class="text-2xl font-serif font-bold mb-4">
                    Joanna Horton McPherson
                </h3>
                <p class="text-gray-400 mb-6 max-w-xs">
                    Speak with Influence. Lead with Purpose. Helping leaders build trust and emotional clarity.
                </p>
                <div class="flex space-x-4">
                    <!-- Instagram -->
                    <a
                        href="https://www.instagram.com/joannahortonmcpherson/?hl=en"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="text-gray-400 hover:text-brand-gold transition-colors"
                        aria-label="Instagram"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                            <line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line>
                        </svg>
                    </a>
                    <!-- LinkedIn -->
                    <a
                        href="https://www.linkedin.com/in/joanna-horton-mcpherson"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="text-gray-400 hover:text-brand-gold transition-colors"
                        aria-label="LinkedIn"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                            <rect width="4" height="12" x="2" y="9"></rect>
                            <circle cx="4" cy="4" r="2"></circle>
                        </svg>
                    </a>
                    <!-- Twitter/X -->
                    <a
                        href="https://x.com/hortonatorr"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="text-gray-400 hover:text-brand-gold transition-colors"
                        aria-label="Twitter"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 4l11.733 16h4.267l-11.733 -16z"></path>
                            <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Links -->
            <div>
                <h4 class="text-lg font-bold mb-6 text-brand-gold">
                    Quick Links
                </h4>
                <ul class="space-y-3 text-gray-400">
                    <li>
                        <a
                            href="#about"
                            class="hover:text-white transition-colors"
                        >
                            About Joanna
                        </a>
                    </li>
                    <li>
                        <a
                            href="#speaking"
                            class="hover:text-white transition-colors"
                        >
                            Speaking Topics
                        </a>
                    </li>
                    <li>
                        <a
                            href="#services"
                            class="hover:text-white transition-colors"
                        >
                            Coaching Services
                        </a>
                    </li>
                    <li>
                        <a
                            href="#testimonials"
                            class="hover:text-white transition-colors"
                        >
                            Testimonials
                        </a>
                    </li>
                    <li>
                        <a
                            href="#guide"
                            class="hover:text-white transition-colors"
                        >
                            Free Guide
                        </a>
                    </li>
                </ul>
            </div>

            <!-- CTA -->
            <div>
                <h4 class="text-lg font-bold mb-6 text-brand-gold">
                    Ready to Transform?
                </h4>
                <p class="text-gray-400 mb-6">
                    Take the first step towards brave leadership and authentic influence.
                </p>
                <a
                    href="mailto:info@mywomenofinfluence.com"
                    class="inline-flex items-center justify-center px-6 py-3 bg-white text-brand-charcoal font-bold rounded-lg hover:bg-brand-gold transition-colors w-full md:w-auto"
                >
                    <!-- Mail Icon -->
                    <svg class="mr-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                        <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                    </svg>
                    Book a Call
                </a>
            </div>
        </div>

        <div class="border-t border-gray-800 pt-8 text-center text-gray-500 text-sm">
            <p>
                &copy; <?php echo esc_html(date_i18n('Y')); ?> Joanna Horton McPherson. All rights reserved.
            </p>
        </div>
    </div>
</footer>
