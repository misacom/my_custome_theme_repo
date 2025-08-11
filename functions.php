<?php
// カスタムメニューをサポート
function my_custom_theme_setup() {
  register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'my-custom-theme' ),
  ) );
}
add_action( 'after_setup_theme', 'my_custom_theme_setup' );
?>