<?php

/**
 * Sets up the content width value based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 510;

class OrangeSky {
  public function __construct() {
    add_action( 'init', array($this, 'init') );
  }

  // This theme uses wp_nav_menu() in one location.
  public function init() {
    register_nav_menu('header-menu', __('Header Menu', 'orangesky'));

    load_theme_textdomain( 'orangesky', get_template_directory() . '/languages' );

    add_theme_support( 'automatic-feed-links' );
  }
}

$orangeSky = new OrangeSky();
