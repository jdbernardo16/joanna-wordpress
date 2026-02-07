<?php
/**
 * Social proof / client logos component.
 *
 * @package joannahorton
 */
?>

<section class="py-10 bg-white border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-center text-sm font-semibold text-brand-slate/60 uppercase tracking-widest mb-8">
            Trusted by organizations worldwide
        </p>
        <div class="flex flex-wrap justify-center items-center gap-8 md:gap-16">
            <!-- MTV Logo -->
            <div class="grayscale hover:grayscale-0 transition-all duration-300 cursor-default select-none opacity-70 hover:opacity-100">
                <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/mtv.png"
                    alt="MTV Logo"
                    class="h-12 md:h-16 w-auto object-contain"
                    loading="lazy"
                />
            </div>

            <!-- Harvard Logo -->
            <div class="grayscale hover:grayscale-0 transition-all duration-300 cursor-default select-none opacity-70 hover:opacity-100">
                <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/harvard.svg"
                    alt="Harvard University Logo"
                    class="h-12 md:h-16 w-auto object-contain"
                    loading="lazy"
                />
            </div>

            <!-- Bioneers Logo -->
            <div class="grayscale hover:grayscale-0 transition-all duration-300 cursor-default select-none opacity-70 hover:opacity-100">
                <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/bioneers.png"
                    alt="Bioneers Logo"
                    class="h-12 md:h-16 w-auto object-contain"
                    loading="lazy"
                />
            </div>

            <!-- USA Today Logo -->
            <div class="grayscale hover:grayscale-0 transition-all duration-300 cursor-default select-none opacity-70 hover:opacity-100">
                <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/usa-today.svg"
                    alt="USA Today Logo"
                    class="h-12 md:h-16 w-auto object-contain"
                    loading="lazy"
                />
            </div>

            <!-- Flagler College Logo -->
            <div class="grayscale hover:grayscale-0 transition-all duration-300 cursor-default select-none opacity-70 hover:opacity-100">
                <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/flagler.png"
                    alt="Flagler College Logo"
                    class="h-12 md:h-16 w-auto object-contain"
                    loading="lazy"
                />
            </div>
        </div>
    </div>
</section>
