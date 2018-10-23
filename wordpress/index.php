<?php
/*
  Template name: Новости 
*/
get_header();
?>

<!-- Start navigation -->
<?php get_template_part( 'templates/template-nav' ); ?>
<!-- End Navigation -->

<main class="blog-page">
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
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center mb-0"><?php the_field('news_title', get_option('page_for_posts')); ?></h2>
            </div>
        </div>
        <!-- Start Blog -->
        <div class="row">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <!-- Start Item -->
            <div class="col-md-6 col-lg-4 col-xl-4 news-col">
                <div class="news-item">
                    <div class="news-item__cover">
                      <?php if ( has_post_thumbnail() ) : ?>
                          <?php the_post_thumbnail(); ?>
                      <?php else : ?>    
                          <img src="<?php bloginfo('template_url'); ?>/img/nophoto.png" alt="NoPhoto">
                      <?php endif; ?>
                    </div>
                    <div class="news-item__text">
                        <small class="d-block"><?php echo get_the_date(); ?></small>
                        <p class="mb-0">
                          <?php the_title(); ?>
                        </p>
                    </div>
                    <div class="news-item__action text-center">
                      <a href="<?php the_permalink();?>" class="btn">Читать далее</a>
                    </div>
                </div>
            </div>
            <!-- End Item -->
            <?php endwhile; else: ?>
              <div class="col-12">
                  <h2 id="no-news" class="text-center pt-3 pt-md-4 pt-lg-4 pt-xl-4">В этой категории нет новостей !</h2>
              </div>
            <?php  endif;?>

        </div>
        <!-- End Blog -->

        <div class="row mt-5 ">
            <!-- start pagination -->
            <div class="mx-auto col-4 d-flex justify-content-center align-items-center mt-5">
            <?php if ( function_exists('wp_bootstrap_pagination') )
                    wp_bootstrap_pagination(); ?>
            <!-- end pagination -->
            </div>
        </div>

    </div>
</main>

<!-- Start Modals -->
<?php get_template_part( 'templates/modal/signup-modal' ); ?>
<?php get_template_part( 'templates/modal/callBack-modal' ); ?>
<!-- End Modals -->

<!-- Start Footer -->
<?php get_footer(); ?>  
<!-- End Footer -->
