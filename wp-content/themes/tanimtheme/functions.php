<?php

function register_tanim_menu() {
  register_nav_menu( 'primary', __( 'Main Menu', 'tanimtheme' ) );

}

add_action( 'after_setup_theme', 'register_tanim_menu' );
?>