<?php
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
$apccss_settings = array();
$apccss_textarea = $_POST['apccss_textarea'];
$apccss_settings['css'] = $apccss_textarea;
update_option( APCCSS_SETTINGS, $apccss_settings );
$_SESSION['apccss_message'] = __( 'Custom CSS Saved Successfully.', 'accesspress-custom-css' );
wp_redirect( admin_url() . 'admin.php?page=accesspress-custom-css' );
exit;
?>