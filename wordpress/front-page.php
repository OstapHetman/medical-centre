<?php
/*
  Template name: Главная 
*/
get_header();
?>

<!-- Start navigation -->
<?php get_template_part( 'templates/template-nav' ); ?>
<!-- End Navigation -->

<!-- Start Header -->
<?php get_template_part( 'templates/template-head' ); ?>
<!-- End Header -->

<!-- Start Services -->
<?php get_template_part( 'templates/template-services' ); ?>
<!-- End Services -->

<!-- Start About -->
<?php get_template_part( 'templates/template-about' ); ?>
<!-- End About -->

<!-- Start Last News -->
<?php get_template_part( 'templates/template-lastNews' ); ?>
<!-- End Last News -->

<!-- Start Modals -->
<?php get_template_part( 'templates/modal/signup-modal' ); ?>
<?php get_template_part( 'templates/modal/callBack-modal' ); ?>
<!-- End Modals -->

<!-- Start Footer -->
<?php get_footer(); ?>  
<!-- End Footer -->
