<!-- Start Header -->
<header>
    <div class="container-fluid px-0">
        <!-- START CAROUSEL -->
        <div id="headerCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
            <ol class="carousel-indicators">
            </ol>
            <div class="carousel-inner">
                <?php if( have_rows('carousel_repeater') ) : while ( have_rows('carousel_repeater') ) : the_row(); ?>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?php the_sub_field('image'); ?>" alt="Slider Image">
                        <div class="carousel-caption text-left">
                            <h5><?php the_sub_field('title'); ?></h5>
                            <ul class="list-unstyled">
                                <?php if( have_rows('list') ) : while ( have_rows('list') ) : the_row(); ?>
                                    <li><?php the_sub_field('text'); ?></li>
                                <?php endwhile; endif;?>  
                            </ul>
                            <a href="<?php the_sub_field('btn_link'); ?>" class="btn main-btn"><?php the_sub_field('btn_text'); ?></a>
                        </div>
                    </div>
                <?php endwhile; endif;?>   
                
            </div>
            <a class="carousel-control-prev" href="#headerCarousel" role="button" data-slide="prev">
                <i class="fa fa-angle-left"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#headerCarousel" role="button" data-slide="next">
                <i class="fa fa-angle-right"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- END CAROUSEL -->
    </div>
</header>
<!-- End Header -->