<?php
/**
 * Email capture / newsletter signup component.
 *
 * @package joannahorton
 */
?>

<section id="guide" class="py-20 bg-gradient-to-br from-brand-cream to-[#e8e0cc]">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="bg-white p-8 md:p-16 rounded-3xl shadow-2xl relative overflow-hidden">
            <!-- Decorative circle -->
            <div class="absolute -top-24 -right-24 w-64 h-64 bg-brand-gold/10 rounded-full blur-3xl"></div>

            <div class="relative z-10">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-brand-cream rounded-full text-brand-gold mb-6">
                    <!-- Mail Icon -->
                    <svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                        <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                    </svg>
                </div>

                <h2 class="text-3xl md:text-4xl font-bold text-brand-charcoal mb-4">
                    Get Joanna's Free Brave Leadership Guide
                </h2>

                <p class="text-lg text-brand-slate mb-8 max-w-2xl mx-auto">
                    Join 5,000+ leaders receiving weekly insights on authentic influence, emotional clarity, and brave communication.
                </p>

                <form
                    class="flex flex-col sm:flex-row gap-4 max-w-lg mx-auto mb-6"
                    action="<?php echo esc_url(admin_url('admin-post.php')); ?>"
                    method="POST"
                >
                    <?php wp_nonce_field('email_subscribe_action', 'email_subscribe_nonce'); ?>
                    <input type="hidden" name="action" value="email_subscribe">
                    
                    <input
                        type="email"
                        name="email"
                        placeholder="Enter your email address"
                        class="flex-grow px-6 py-4 rounded-full border border-gray-200 focus:outline-none focus:ring-2 focus:ring-brand-gold focus:border-transparent text-lg"
                        required
                    />

                    <button
                        type="submit"
                        class="px-8 py-4 bg-brand-gold text-brand-charcoal font-bold rounded-full hover:bg-brand-charcoal hover:text-brand-gold transition-all duration-300 shadow-lg whitespace-nowrap flex items-center justify-center"
                    >
                        Subscribe Now
                        <!-- ArrowRight Icon -->
                        <svg class="ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                            <path d="m12 5 7 7-7 7"></path>
                        </svg>
                    </button>
                </form>

                <p class="text-xs text-gray-400">
                    No spam. Unsubscribe anytime. Your privacy is respected.
                </p>
            </div>
        </div>
    </div>
</section>
