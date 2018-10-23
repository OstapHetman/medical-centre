<?php 

  require_once('wp_bootstrap_pagination.php');
  require_once('bs4navwalker.php');
  require_once('breadcrumbs.php');

  function wpb_theme_setup() {
      add_theme_support('post-thumbnails');
    }
  add_action('after_setup_theme', 'wpb_theme_setup');

  function success_redirect() {
    ?>
      <script type="text/javascript">
          document.addEventListener( 'wpcf7mailsent', function( event ) {
              const msg = document.getElementsByClassName('thankYouMsg')[0];
              setTimeout(function() {
                  $('.modal').modal('hide');
              }, 500);
                setTimeout(function() {
                      msg.style.display="flex";
              }, 700);
                 setTimeout(function() {
                      msg.style.display="none";
              }, 3000);
          }, false );
      </script>
    <?
  }
  add_action( 'wp_footer', 'success_redirect' );

  function register_my_menu() {
    register_nav_menus(
      array(
        'primary_menu' => __( 'Главное меню' ),
        'primary_footer_menu' => __( 'Меню футера' ),
        'secondary_footer_menu' => __( 'Услуги' ),
      )
    );
  }
  add_action( 'init', 'register_my_menu' );

  function my_custom_login() {
    echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/css/login.css" />';
  }
    add_action('login_head', 'my_custom_login');
?>