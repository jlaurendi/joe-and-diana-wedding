<?php
/**
 * Plugin Name: Joe and Diana's Wedding
 * Plugin URI:
 * Description: Our wedding!
 * Version: 0.0.1
 * Author: Joe Laurendi and Diana Wu
 * Author URI: http://www.josephlaurendi.com
 * Requires at least: 3.5
 * Tested up to: 3.5
 */


class Wedding {

  public function __construct() {
    add_shortcode('homepage', array($this, 'homepage'));

    $plugin_dir = basename(dirname(__FILE__));
    load_plugin_textdomain( 'wedding', false, $plugin_dir );
  }

  function homepage() {
    return $this->get_include_view('views/home.php');
  }

  function get_include_view($filename, $data = array()) {
    extract($data);
    ob_start();
    include $filename;
    return ob_get_clean();
  }
}

$wedding = new Wedding();
