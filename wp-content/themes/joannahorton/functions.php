<?php

if (is_file(__DIR__.'/vendor/autoload_packages.php')) {
    require_once __DIR__.'/vendor/autoload_packages.php';
}

/**
 * Enqueue Google Fonts.
 */
function tailpress_enqueue_fonts() {
    wp_enqueue_style(
        'tailpress-google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap',
        array(),
        null
    );
}
add_action('wp_enqueue_scripts', 'tailpress_enqueue_fonts');

function tailpress(): TailPress\Framework\Theme
{
    return TailPress\Framework\Theme::instance()
        ->assets(fn($manager) => $manager
            ->withCompiler(new TailPress\Framework\Assets\ViteCompiler, fn($compiler) => $compiler
                ->registerAsset('resources/css/app.css')
                ->registerAsset('resources/js/app.js')
                ->editorStyleFile('resources/css/editor-style.css')
            )
            ->enqueueAssets()
        )
        ->features(fn($manager) => $manager->add(TailPress\Framework\Features\MenuOptions::class))
        ->menus(fn($manager) => $manager->add('primary', __( 'Primary Menu', 'tailpress')))
        ->themeSupport(fn($manager) => $manager->add([
            'title-tag',
            'custom-logo',
            'post-thumbnails',
            'align-wide',
            'wp-block-styles',
            'responsive-embeds',
            'html5' => [
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
            ]
        ]));
}

tailpress();

/**
 * Handle email subscription form submission
 */
function joannahorton_handle_email_subscription() {
    // Verify nonce for security
    if (!isset($_POST['email_subscribe_nonce']) || !wp_verify_nonce($_POST['email_subscribe_nonce'], 'email_subscribe_action')) {
        wp_die('Security check failed');
    }
    
    // Validate email
    if (!isset($_POST['email']) || !is_email($_POST['email'])) {
        wp_redirect(add_query_arg('status', 'invalid', wp_get_referer()));
        exit;
    }
    
    $email = sanitize_email($_POST['email']);
    $subscribers = get_option('joannahorton_email_subscribers', array());
    
    // Check for duplicates
    foreach ($subscribers as $subscriber) {
        if ($subscriber['email'] === $email) {
            wp_redirect(add_query_arg('status', 'duplicate', wp_get_referer()));
            exit;
        }
    }
    
    // Add new subscriber
    $subscribers[] = array(
        'email' => $email,
        'subscribed_at' => current_time('mysql'),
        'ip_address' => $_SERVER['REMOTE_ADDR']
    );
    update_option('joannahorton_email_subscribers', $subscribers);
    wp_redirect(add_query_arg('status', 'success', wp_get_referer()));
    exit;
}
add_action('admin_post_nopriv_email_subscribe', 'joannahorton_handle_email_subscription');
add_action('admin_post_email_subscribe', 'joannahorton_handle_email_subscription');

/**
 * Display subscription status modal
 */
function joannahorton_subscription_message() {
    if (isset($_GET['status'])) {
        $status = sanitize_text_field($_GET['status']);
        
        $modal_data = array(
            'success' => array(
                'icon' => 'check-circle',
                'title' => 'Welcome to the Community!',
                'message' => 'Thank you for subscribing! Your Brave Leadership Guide is on its way to your inbox.',
                'color' => 'bg-brand-gold'
            ),
            'invalid' => array(
                'icon' => 'alert-circle',
                'title' => 'Oops!',
                'message' => 'Please enter a valid email address to continue.',
                'color' => 'bg-red-500'
            ),
            'duplicate' => array(
                'icon' => 'info',
                'title' => 'Already Subscribed',
                'message' => 'You are already part of our community. Check your inbox for the latest insights!',
                'color' => 'bg-blue-500'
            )
        );
        
        if (isset($modal_data[$status])) {
            $data = $modal_data[$status];
            ?>
            <!-- Subscription Modal -->
            <div id="subscription-modal" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/50 backdrop-blur-sm" role="dialog" aria-modal="true">
                <div class="bg-white rounded-3xl shadow-2xl max-w-md w-full relative overflow-hidden transform transition-all">
                    <!-- Decorative background elements -->
                    <div class="absolute top-0 right-0 w-32 h-32 bg-brand-gold/10 rounded-full blur-3xl"></div>
                    <div class="absolute bottom-0 left-0 w-24 h-24 bg-brand-cream/50 rounded-full blur-2xl"></div>
                    
                    <!-- Close button -->
                    <button onclick="closeSubscriptionModal()" class="absolute top-4 right-4 z-10 w-10 h-10 flex items-center justify-center rounded-full bg-gray-100 hover:bg-gray-200 transition-colors" aria-label="Close modal">
                        <svg class="w-5 h-5 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </button>
                    
                    <div class="relative z-10 p-8 md:p-10 text-center">
                        <!-- Icon -->
                        <div class="inline-flex items-center justify-center w-20 h-20 <?php echo esc_attr($data['color']); ?> rounded-full mb-6">
                            <?php if ($data['icon'] === 'check-circle'): ?>
                                <svg class="w-10 h-10 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                </svg>
                            <?php elseif ($data['icon'] === 'alert-circle'): ?>
                                <svg class="w-10 h-10 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="12" y1="8" x2="12" y2="12"></line>
                                    <line x1="12" y1="16" x2="12.01" y2="16"></line>
                                </svg>
                            <?php else: ?>
                                <svg class="w-10 h-10 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="12" y1="16" x2="12" y2="12"></line>
                                    <line x1="12" y1="8" x2="12.01" y2="8"></line>
                                </svg>
                            <?php endif; ?>
                        </div>
                        
                        <!-- Title -->
                        <h3 class="text-2xl md:text-3xl font-bold text-brand-charcoal mb-4">
                            <?php echo esc_html($data['title']); ?>
                        </h3>
                        
                        <!-- Message -->
                        <p class="text-brand-slate text-lg mb-8">
                            <?php echo esc_html($data['message']); ?>
                        </p>
                        
                        <!-- Action button -->
                        <button onclick="closeSubscriptionModal()" class="w-full px-8 py-4 bg-brand-gold text-brand-charcoal font-bold rounded-full hover:bg-brand-charcoal hover:text-brand-gold transition-all duration-300 shadow-lg">
                            Got it, thanks!
                        </button>
                    </div>
                </div>
            </div>
            
            <script>
                function closeSubscriptionModal() {
                    const modal = document.getElementById('subscription-modal');
                    if (modal) {
                        modal.style.opacity = '0';
                        modal.style.transition = 'opacity 0.3s ease';
                        setTimeout(() => {
                            modal.remove();
                            // Remove status from URL without page reload
                            const url = new URL(window.location);
                            url.searchParams.delete('status');
                            window.history.replaceState({}, '', url);
                        }, 300);
                    }
                }
                
                // Close modal when clicking outside
                document.addEventListener('click', function(e) {
                    const modal = document.getElementById('subscription-modal');
                    if (modal && e.target === modal) {
                        closeSubscriptionModal();
                    }
                });
                
                // Close modal on Escape key
                document.addEventListener('keydown', function(e) {
                    if (e.key === 'Escape') {
                        closeSubscriptionModal();
                    }
                });
                
                // Auto-close after 5 seconds for success message
                <?php if ($status === 'success'): ?>
                setTimeout(closeSubscriptionModal, 5000);
                <?php endif; ?>
            </script>
            <?php
        }
    }
}
add_action('wp_footer', 'joannahorton_subscription_message');

/**
 * Add admin menu page for viewing subscribers
 */
function joannahorton_subscribers_admin_menu() {
    add_menu_page(
        'Email Subscribers',
        'Subscribers',
        'manage_options',
        'joannahorton-subscribers',
        'joannahorton_subscribers_page',
        'dashicons-email',
        30
    );
}
add_action('admin_menu', 'joannahorton_subscribers_admin_menu');

/**
 * Display subscribers in admin
 */
function joannahorton_subscribers_page() {
    $subscribers = get_option('joannahorton_email_subscribers', array());
    ?>
    <div class="wrap">
        <h1>Email Subscribers</h1>
        <p>Total subscribers: <?php echo count($subscribers); ?></p>
        
        <?php if (!empty($subscribers)): ?>
        <table class="wp-list-table widefat fixed striped">
            <thead>
                <tr>
                    <th>Email</th>
                    <th>Subscribed At</th>
                    <th>IP Address</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach (array_reverse($subscribers) as $subscriber): ?>
                <tr>
                    <td><?php echo esc_html($subscriber['email']); ?></td>
                    <td><?php echo esc_html($subscriber['subscribed_at']); ?></td>
                    <td><?php echo esc_html($subscriber['ip_address']); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        
        <p>
            <a href="<?php echo wp_nonce_url(admin_url('?page=joannahorton-subscribers&action=export'), 'export_subscribers'); ?>" class="button">
                Export as CSV
            </a>
        </p>
        <?php else: ?>
        <p>No subscribers yet.</p>
        <?php endif; ?>
    </div>
    <?php
}

/**
 * Handle CSV export
 */
function joannahorton_export_subscribers() {
    if (isset($_GET['action']) && $_GET['action'] === 'export' && 
        isset($_GET['page']) && $_GET['page'] === 'joannahorton-subscribers' &&
        wp_verify_nonce($_GET['_wpnonce'], 'export_subscribers')) {
        
        $subscribers = get_option('joannahorton_email_subscribers', array());
        
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename=subscribers.csv');
        
        $output = fopen('php://output', 'w');
        fputcsv($output, array('Email', 'Subscribed At', 'IP Address'));
        
        foreach ($subscribers as $subscriber) {
            fputcsv($output, $subscriber);
        }
        
        fclose($output);
        exit;
    }
}
add_action('admin_init', 'joannahorton_export_subscribers');
