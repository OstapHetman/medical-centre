<!-- Start SECTION: Our Services -->
<section id="our-services">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="mb-0 text-center"><?php the_field('services_title'); ?></h2>
            </div>
        </div>
        <div class="row">
            <?php if( have_rows('services_repeater') ) : while ( have_rows('services_repeater') ) : the_row(); ?>
                <!-- Start Item -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 icons-col">
                    <div class="icons-item">
                        <div class="icons-item__icon text-center">
                            <img src="<?php the_sub_field('icon'); ?>" alt="Services icon">
                        </div>
                        <div class="icons-item__title">
                            <h5 class="mb-0 text-center"><?php the_sub_field('title'); ?></h5>
                        </div>
                        <div class="icons-item__text">
                            <p class="mb-0 text-center">
                                <?php the_sub_field('text'); ?>
                            </p>
                        </div>
                        <div class="icons-item__action text-center">
                            <a href="<?php the_sub_field('btn_link'); ?>" class="btn"><?php the_sub_field('btn_text'); ?></a>
                        </div>
                    </div>
                </div>
                <!-- End Item -->
            <?php endwhile; endif;?>     

        </div>
    </div>
</section>
<!-- End SECTION: Our Services -->