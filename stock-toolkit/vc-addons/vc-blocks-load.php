<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

// Class started
class StockVCExtendAddonClass {

    function __construct() {
        // We safely integrate with VC with this hook
        add_action( 'init', array( $this, 'StockIntegrateWithVC' ) );
    }
 
    public function StockIntegrateWithVC() {
        // Checks if Visual composer is not installed
        if ( ! defined( 'WPB_VC_VERSION' ) ) {
            add_action('admin_notices', array( $this, 'StockShowVcVersionNotice' ));
            return;
        }
 

        // visual composer addons.
        
    include Stock_ACC_PATH . 'vc-addons/vc-slide-addons.php';
    include Stock_ACC_PATH . 'vc-addons/vc-section-title.php';
    include Stock_ACC_PATH . 'vc-addons/vc-solution.php';
    include Stock_ACC_PATH . 'vc-addons/vc-button.php';
    include Stock_ACC_PATH . 'vc-addons/vc-support.php';
    include Stock_ACC_PATH . 'vc-addons/vc-counter.php';
    include Stock_ACC_PATH . 'vc-addons/vc-quick-shortcode.php';
    include Stock_ACC_PATH . 'vc-addons/vc-client-caruosal.php';
     include Stock_ACC_PATH . 'vc-addons/vc-address.php';
     include Stock_ACC_PATH . 'vc-addons/vc-product.php';
 
        
    

    }
 
    public function StockShowVcVersionNotice() {
        $theme_data = wp_get_theme();
        echo '
        <div class="notice notice-warning">
          <p>'.sprintf(__('<strong>%s</strong> recommends <strong><a href="'.esc_url(site_url()).'/wp-admin/themes.php?page=tgmpa-install-plugins" target="_blank">Visual Composer</a></strong> plugin to be installed and activated on your site.', 'stock-toolkit'), $theme_data->get('Name')).'</p>
        </div>';
    }
}
// Finally initialize code 
new StockVCExtendAddonClass();