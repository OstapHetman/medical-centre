<!-- Start SECTION: About -->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="mb-0 text-center"><?php the_field('about_title'); ?></h2>
            </div>
        </div>
        <div class="row">
            <?php if( have_rows('about_repeater') ) : while ( have_rows('about_repeater') ) : the_row(); ?>
                <!-- Start Item -->
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 about-col">
                    <div class="about-item">
                        <div class="about-item__icon text-center">
                            <img src="<?php the_sub_field('icon'); ?>" alt="About Icon">
                        </div>
                        <div class="about-item__text">
                            <p class="mb-0 text-center">
                                <?php the_sub_field('text'); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End Item -->
            <?php endwhile; endif;?>   
        </div>

        <div class="row justify-content-lg-between justify-content-xl-between align-items-center content">
            <!-- Start Left -->
            <div class="col-md-12 col-lg-5 col-xl-5 left-col">
                <div class="about-text">
                    <p class="text-justify mb-0">
                        <?php the_field('about_text'); ?>
                    </p>
                </div>
            </div>
            <!-- Start Right -->

            <div class="col-md-12 col-lg-6 col-xl-6 right-col">
                <div class="about-slider">
                    <!-- Start Carousel -->
                    <div id="aboutCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                         
                        </ol>
                        <div class="carousel-inner">
                            <?php if( have_rows('about_slider') ) : while ( have_rows('about_slider') ) : the_row(); ?>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="<?php the_sub_field('image'); ?>" alt="About Slider Image">
                                </div>
                            <?php endwhile; endif;?>  
                           
                        </div>
                        <a class="carousel-control-prev" href="#aboutCarousel" role="button" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#aboutCarousel" role="button" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <!-- End Carousel -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End SECTION: About -->