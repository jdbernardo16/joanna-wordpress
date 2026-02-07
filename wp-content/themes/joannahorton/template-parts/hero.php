<?php
/**
 * Hero section component.
 *
 * @package joannahorton
 */
?>

<section class="relative min-h-screen flex items-center pt-20 overflow-hidden bg-brand-cream">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Text Content -->
            <div class="z-10">
                <span class="inline-block text-brand-gold font-semibold tracking-widest uppercase text-sm mb-4">
                    Leadership & Executive Coaching
                </span>

                <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold leading-tight mb-6 text-brand-charcoal">
                    Speak with <span class="italic text-brand-gold">Influence</span>.<br />
                    Lead with <span class="italic text-brand-gold">Purpose</span>.
                </h1>

                <p class="text-lg md:text-xl text-brand-slate mb-8 max-w-lg leading-relaxed">
                    Joanna Horton McPherson helps leaders find their authentic voice through the True Influence Method™ — building trust, emotional clarity, and real-world impact.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 mb-10">
                    <a
                        href="mailto:info@mywomenofinfluence.com"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="inline-flex items-center justify-center px-8 py-4 bg-brand-gold text-brand-charcoal font-semibold rounded-full hover:bg-brand-charcoal hover:text-brand-gold transition-all duration-300 transform hover:scale-105 shadow-lg"
                    >
                        Book Joanna to Speak
                    </a>
                    <a
                        href="#guide"
                        class="inline-flex items-center justify-center px-8 py-4 border-2 border-brand-charcoal text-brand-charcoal font-semibold rounded-full hover:bg-brand-charcoal hover:text-white transition-all duration-300"
                    >
                        Get the Free Guide
                        <!-- ArrowRight Icon -->
                        <svg class="ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                            <path d="m12 5 7 7-7 7"></path>
                        </svg>
                    </a>
                </div>

                <p class="text-sm text-brand-slate/70 font-medium">
                    As featured on MTV, Harvard, USA Today
                </p>
            </div>

            <!-- Image Area -->
            <div class="relative h-[500px] lg:h-[700px] w-full rounded-2xl overflow-hidden shadow-2xl">
                <!-- Joanna's image with lighter background gradient -->
                <div class="absolute inset-0 bg-gradient-to-br from-brand-charcoal/30 to-gray-700/30">
                    <img
                        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/joanna-hero.webp"
                        alt="Joanna Horton McPherson speaking"
                        class="w-full h-full object-cover"
                        loading="eager"
                    />

                    <div class="absolute inset-0 bg-brand-gold/5 mix-blend-multiply"></div>
                </div>

                <!-- Decorative elements -->
                <div class="absolute bottom-8 left-8 bg-white/90 backdrop-blur-sm p-6 rounded-xl max-w-xs shadow-lg hidden md:block">
                    <p class="font-serif italic text-brand-charcoal text-lg mb-2">
                        "Brave as Hell"
                    </p>
                    <p class="text-xs text-brand-slate uppercase tracking-wider font-semibold">
                        Signature Keynote
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
