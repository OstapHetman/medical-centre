<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
get_header();
?>

<!-- Start navigation -->
<?php get_template_part( 'templates/template-nav' ); ?>
<!-- End Navigation -->

<main class="single-page">
    <!-- Start breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php the_breadcrumb(); ?>
                </div>
            </div>
        </div>
    </div>
    <!-- End breadcrumbs -->
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-12 col-lg-9 col-xl-9">
                  <div class="post-title">
                      <h1 class="text-center">
                        <?php the_title(); ?>
                      </h1>
                  </div>
                  <div class="post-img">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <?php the_post_thumbnail(); ?>
                      <?php else : ?>    
                        <img src="<?php bloginfo('template_url'); ?>/img/nophoto.png" alt="NoPhoto">
                    <?php endif; ?>
                  </div>
                  <div class="post-text">
                      <?php the_content(); ?>
                      <!-- Previous -->
                      <?php previous_post_link('%link', 'Предыдущая новость'); ?>
                      <!-- <a href="" class="btn previous">Предыдущая новость</a> -->
                      <!-- Next -->
                      <?php next_post_link('%link','Следующая новость'); ?>
                      <!-- <a href="" class="btn next">Следующая новость</a> -->
                  </div>
              </div>
          </div>
      </div>
    <?php endwhile; endif;?>   
</main>

<!-- Start Modals -->
<?php get_template_part( 'templates/modal/signup-modal' ); ?>
<?php get_template_part( 'templates/modal/callBack-modal' ); ?>
<!-- End Modals -->

<!-- START SCROLL TOP BTN -->
<div class='scrolltop'>
    <div class='scroll icon'><i class="fa fa-4x fa-angle-up"></i></div>
</div>
<!-- END SCROLL TOP BTN -->

<!-- Start Footer -->
<?php get_footer(); ?>  
<!-- End Footer -->
