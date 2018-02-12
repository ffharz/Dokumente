<?php
//if ( function_exists('register_sidebar') )
//register_sidebar();
if ( function_exists( 'register_nav_menu' ) ) {
  register_nav_menu( 'primary', 'Primary Navigation Menu' );
  register_nav_menu( 'secondary', 'Secondary Navigation Menu' );
}
?>