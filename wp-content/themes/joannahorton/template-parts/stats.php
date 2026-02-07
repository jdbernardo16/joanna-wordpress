<?php
/**
 * Statistics section component.
 *
 * @package joannahorton
 */
?>

<section class="py-20 bg-brand-charcoal text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <!-- Leaders Coached -->
            <div class="p-4">
                <div class="text-4xl md:text-5xl font-bold text-brand-gold mb-2 font-serif">
                    <span class="stat-counter" data-target="1200">0</span>+
                </div>
                <div class="text-sm md:text-base text-gray-300 font-medium tracking-wide uppercase">
                    Leaders Coached
                </div>
            </div>

            <!-- Keynotes Delivered -->
            <div class="p-4">
                <div class="text-4xl md:text-5xl font-bold text-brand-gold mb-2 font-serif">
                    <span class="stat-counter" data-target="250">0</span>+
                </div>
                <div class="text-sm md:text-base text-gray-300 font-medium tracking-wide uppercase">
                    Keynotes Delivered
                </div>
            </div>

            <!-- Years Experience -->
            <div class="p-4">
                <div class="text-4xl md:text-5xl font-bold text-brand-gold mb-2 font-serif">
                    <span class="stat-counter" data-target="18">0</span>+
                </div>
                <div class="text-sm md:text-base text-gray-300 font-medium tracking-wide uppercase">
                    Years Experience
                </div>
            </div>

            <!-- Global Impact -->
            <div class="p-4">
                <div class="text-4xl md:text-5xl font-bold text-brand-gold mb-2 font-serif">
                    <span class="stat-counter" data-target="45">0</span>K
                </div>
                <div class="text-sm md:text-base text-gray-300 font-medium tracking-wide uppercase">
                    Global Impact
                </div>
            </div>
        </div>
    </div>
</section>

<script>
(function() {
    // Animated counter function
    function animateCounters() {
        const counters = document.querySelectorAll('.stat-counter');
        
        counters.forEach(counter => {
            const target = parseInt(counter.getAttribute('data-target'));
            const duration = 2000; // 2 seconds
            const startTime = performance.now();
            const startValue = 0;
            
            function updateCounter(currentTime) {
                const elapsed = currentTime - startTime;
                const progress = Math.min(elapsed / duration, 1);
                
                // Easing function for smoother animation
                const easeOutQuart = 1 - Math.pow(1 - progress, 4);
                
                const currentValue = Math.floor(startValue + (target - startValue) * easeOutQuart);
                counter.textContent = currentValue;
                
                if (progress < 1) {
                    requestAnimationFrame(updateCounter);
                } else {
                    counter.textContent = target;
                }
            }
            
            requestAnimationFrame(updateCounter);
        });
    }

    // Intersection Observer to trigger animation when section is visible
    const statsSection = document.querySelector('.stat-counter')?.closest('section');
    
    if (statsSection) {
        let hasAnimated = false;
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !hasAnimated) {
                    hasAnimated = true;
                    animateCounters();
                }
            });
        }, {
            threshold: 0.3 // Trigger when 30% of the section is visible
        });
        
        observer.observe(statsSection);
    }
})();
</script>
