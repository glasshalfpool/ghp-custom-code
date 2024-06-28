<?php
/**
 * Plugin Name: GHP Custom Plugin 
 * Description: Glasshalfpool Custom Code plugin
 * Version: 1.0
 * Author: Jamie Glasspool
 */

function custom_google_analytics_code() {
    $ga_tracking_code = '000';

    if (!empty($ga_tracking_code)) {
        ?>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo esc_attr($ga_tracking_code); ?>"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', '<?php echo esc_attr($ga_tracking_code); ?>');
        </script>
        <?php
    }
}

add_action('wp_head', 'custom_google_analytics_code');