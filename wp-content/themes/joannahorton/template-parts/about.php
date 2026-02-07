<?php
/**
 * About section component.
 *
 * @package joannahorton
 */
?>

<section id="about" class="py-20 md:py-32 bg-brand-cream">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <!-- Image -->
            <div class="relative order-2 lg:order-1">
                <div class="relative h-[600px] w-full rounded-2xl overflow-hidden shadow-xl">
                    <img
                        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/joanna2.webp"
                        alt="Joanna Horton McPherson portrait"
                        class="w-full h-full object-cover"
                        loading="lazy"
                    />
                </div>
                <!-- Decorative background element -->
                <div class="absolute -bottom-6 -left-6 w-full h-full border-2 border-brand-gold rounded-2xl -z-10 hidden md:block"></div>
            </div>

            <!-- Content -->
            <div class="order-1 lg:order-2">
                <h2 class="text-4xl md:text-5xl font-bold mb-4 text-brand-charcoal">
                    Meet Joanna
                </h2>
                <h3 class="text-xl text-brand-gold font-serif italic mb-8">
                    Founder & Master Coach, True Influence Method™
                </h3>

                <div class="space-y-6 text-lg text-brand-slate leading-relaxed">
                    <p>
                        Joanna trains leaders to speak, and speakers to lead. She created the <strong>True Influence Method™</strong> to equip leaders with a clear reputation framework to craft powerful talks, keynote narratives, and social media messaging grounded in truth, emotional clarity, and real-world impact.
                    </p>
                    <p>
                        Through her signature interview-style process, Joanna surfaces the truth beneath performance and noise, instant-translating lived experience into purpose-driven language. This creates authoritative speakers whose openness feels effortless, embodied, and magnetic.
                    </p>
                    <p>
                        Joanna provides a powerful, human-centered solution for visionary leaders by bridging the gap between high-performance leadership, connection, and authentic truth.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
