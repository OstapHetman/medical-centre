<?php
/*
  Template name: Услуги 
*/
get_header();
?>

<!-- Start navigation -->
<?php get_template_part( 'templates/template-nav' ); ?>
<!-- End Navigation -->

<main class="services-page" id="transportirovka">
    <!-- Start breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php the_breadcrumb(); ?>
                </div>
            </div>
        </div>
        <!-- End breadcrumbs -->
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10">
              <h1 class="text-center">
                <?php the_field('services_page_title'); ?>
              </h1>
              <div class="row justify-content-center">
                  <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10">
                      <div class="services-slider">
                          <!-- Start Carousel -->
                          <div id="servicesCarousel" class="carousel slide" data-ride="carousel">
                              <ol class="carousel-indicators"></ol>
                              <div class="carousel-inner">

                                  <?php if( have_rows('services_page_carousel') ) : while ( have_rows('services_page_carousel') ) : the_row(); ?>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="<?php the_sub_field('image'); ?>" alt="Services Slider Image">
                                    </div>
                                  <?php endwhile; endif;?>  
                                 
                              </div>
                              <a class="carousel-control-prev" href="#servicesCarousel" role="button" data-slide="prev">
                                  <i class="fa fa-angle-left"></i>
                                  <span class="sr-only">Previous</span>
                              </a>
                              <a class="carousel-control-next" href="#servicesCarousel" role="button" data-slide="next">
                                  <i class="fa fa-angle-right"></i>
                                  <span class="sr-only">Next</span>
                              </a>
                          </div>
                          <!-- End Carousel -->
                      </div>
                  </div>
              </div>
                <!-- End row -->
                <!-- Start text -->
                <?php if( have_rows('main_text_flexible') ): while ( have_rows('main_text_flexible') ) : the_row(); ?>
                  <?php if( get_row_layout() == 'paragraph' ):  ?>
                    <p><?php the_sub_field('text'); ?></p>
                  <?php elseif( get_row_layout() == 'list' ):  ?>
                    <ul class="list-unstyled mb-0">
                        <h5><?php the_sub_field('title_of_list'); ?></h5>
                        <?php if( have_rows('list_rptr') ): while ( have_rows('list_rptr') ) : the_row(); ?>
                          <li>- <?php the_sub_field('text'); ?></li>
                        <?php endwhile; endif;?> 
                    </ul>
                  <?php endif; ?>
                <?php endwhile; endif;?> 
                
                <!-- End text -->
            </div>
            <div class="col-12 text-center">
              <a href="<?php the_field('services_page_btn_link'); ?>" class="btn"><?php the_field('services_page_btn_text'); ?></a>
            </div>
        </div>
    </div>
</main>

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
