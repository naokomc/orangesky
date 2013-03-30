<?php

class OrangeSky {
  public function __construct() {
    add_action( 'init', array($this, 'init') );
  }

  public function init() {
    register_nav_menu('header-menu', __('Header Menu'));
  }
}

$orangeSky = new OrangeSky();
