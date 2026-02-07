<?php
/**
 * Testimonials component.
 *
 * @package joannahorton
 */
?>

<section id="testimonials" class="py-20 md:py-32 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-brand-charcoal mb-6">
                What Leaders Are Saying
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            <!-- Testimonial 1 -->
            <div class="relative bg-brand-cream p-10 md:p-12 rounded-2xl">
                <!-- Quote Icon -->
                <svg class="absolute top-8 left-8 text-brand-gold opacity-20 h-16 w-16 transform -scale-x-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M3 21c3 0 7-1 7-8V5c0-1.25-.756-2.017-2-2H4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 .008-1 1.031V20c0 1 0 1 1 1z"></path>
                    <path d="M15 21c3 0 7-1 7-8V5c0-1.25-.757-2.017-2-2h-4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 .008-1 1.031V20c0 1 0 1 1 1z"></path>
                </svg>
                
                <div class="relative z-10">
                    <p class="text-xl md:text-2xl font-serif italic text-brand-charcoal mb-8 leading-relaxed">
                        "Working with Joanna McPherson has been nothing short of life changing. Her skill, patience, and intuition make her truly exceptional, and I can't recommend her enough."
                    </p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-gray-300 rounded-full mr-4 overflow-hidden">
                            <img
                                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/img.webp"
                                alt="A. Robinson"
                                class="w-full h-full object-cover"
                                loading="lazy"
                            />
                        </div>
                        <div>
                            <p class="font-bold text-brand-charcoal">
                                A. Robinson
                            </p>
                            <p class="text-sm text-brand-slate uppercase tracking-wide">
                                Investment Company Owner
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="relative bg-brand-cream p-10 md:p-12 rounded-2xl">
                <!-- Quote Icon -->
                <svg class="absolute top-8 left-8 text-brand-gold opacity-20 h-16 w-16 transform -scale-x-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M3 21c3 0 7-1 7-8V5c0-1.25-.756-2.017-2-2H4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 .008-1 1.031V20c0 1 0 1 1 1z"></path>
                    <path d="M15 21c3 0 7-1 7-8V5c0-1.25-.757-2.017-2-2h-4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 .008-1 1.031V20c0 1 0 1 1 1z"></path>
                </svg>
                
                <div class="relative z-10">
                    <p class="text-xl md:text-2xl font-serif italic text-brand-charcoal mb-8 leading-relaxed">
                        "Joanna brought a level of safety and clarity to our team that was beyond valuable. We knew the training would be good, but got far more from it than we expected. I tell everyone I know to work with her."
                    </p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-gray-300 rounded-full mr-4 overflow-hidden">
                            <img
                                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/img2.webp"
                                alt="K. Johnson"
                                class="w-full h-full object-cover"
                                loading="lazy"
                            />
                        </div>
                        <div>
                            <p class="font-bold text-brand-charcoal">
                                K. Johnson
                            </p>
                            <p class="text-sm text-brand-slate uppercase tracking-wide">
                                President & CEO
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
