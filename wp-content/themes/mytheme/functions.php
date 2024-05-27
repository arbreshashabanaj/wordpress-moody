<?php

/*


*/
if(!defined('ABSPATH')){
    exit;
}

require_once("init.php");
require_once("Vite.php");
require_once("settings.php");



//Initialize theme
require_once(get_template_directory() . "/init.php");


function moody_studio_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'moody_studio_add_woocommerce_support' );




//email
function mailtrap($phpmailer) {
    $phpmailer->isSMTP();
    $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = '58e40aad567e8e';
    $phpmailer->Password = 'c725bdc3de5501';
  }

  add_action('phpmailer_init', 'mailtrap');