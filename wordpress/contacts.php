<?php
/*
  Template name: Контакты
*/
get_header();
?>

<!-- Start navigation -->
<?php get_template_part( 'templates/template-nav' ); ?>
<!-- End Navigation -->

<main id="contacts-page">
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
        <div class="row align-items-center">
            <div class="col-12">
                <h1 class="text-center mb-0 section-title"><?php the_field('contacts_title'); ?></h1>
            </div>
            <div class="col-md-5 col-lg-4 contacts">
                <div class="contacts__info">
                  <ul class="list-unstyled mb-0">
                    <?php if( have_rows('contacts_repeater') ): while ( have_rows('contacts_repeater') ) : the_row(); ?>
                        <li class="mb-4 mb-md-5 mb-lg-5 mb-xl-5">
                            <img src="<?php the_sub_field('icon'); ?>" alt="icon">
                            <ul class="list-unstyled mb-0">
                                <?php if( have_rows('info_repeater') ): while ( have_rows('info_repeater') ) : the_row(); ?>
                                    <?php if( get_row_layout() == 'street_flexible' ):?>
                                        <li><?php the_sub_field('text');?></li>
                                    <?php elseif( get_row_layout() == 'phone_flexible' ):  ?>
                                        <?php if( have_rows('title_or_number') ): while ( have_rows('title_or_number') ) : the_row(); ?>
                                            <?php if( get_row_layout() == 'phone_title' ):  ?>
                                                <li><?php the_sub_field('title');?></li>
                                            <?php elseif( get_row_layout() == 'phone_number' ):  ?>
                                                <li><a href="tel:<?php the_sub_field('number');?>"><?php the_sub_field('number');?></a></li>    
                                            <?php endif; ?>
                                        <?php endwhile; endif;?> 
                                    <?php elseif( get_row_layout() == 'email_flexible' ):  ?> 
                                        <?php if( have_rows('title_or_email') ): while ( have_rows('title_or_email') ) : the_row(); ?>
                                            <?php if( get_row_layout() == 'email_title' ):?>
                                                <li><?php the_sub_field('title');?></li>
                                            <?php elseif( get_row_layout() == 'email_email' ):  ?>
                                                <li><a href="mailto:<?php the_sub_field('email');?>"><?php the_sub_field('email');?></a></li>
                                            <?php endif; ?>
                                        <?php endwhile; endif;?>         
                                    <?php endif; ?>
                                <?php endwhile; endif;?>  
                            </ul>
                        </li>
                    <?php endwhile; endif;?>   
                  </ul>
                </div>
                <div class="contacts__button mt-0 mt-md-5 mt-lg-5 mt-xl-5 mb-4 mb-md-0 mb-lg-0 mb-xl-0">
                  <a href="#" class="btn" data-toggle="modal" data-target="#helpModal">
                    <?php the_field('contacts_btn'); ?>
                  </a>
                </div>
            </div>
            <div class="col-md-7 col-lg-6 offset-lg-2">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2678.507767413691!2d35.160345215195534!3d47.82975568052948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40dc675577c81c6d%3A0x52d26cc77e79653a!2zNTdBLCDQstGD0LvQuNGG0Y8g0KPQutGA0LDRl9C90YHRjNC60LAsIDU30JAsINCX0LDQv9C-0YDRltC20LbRjywg0JfQsNC_0L7RgNGW0LfRjNC60LAg0L7QsdC70LDRgdGC0YwsIDY5MDAw!5e0!3m2!1suk!2sua!4v1539847682717" width="100%" height="415" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</main>


<!-- Start Modals -->
<?php get_template_part( 'templates/modal/signup-modal' ); ?>
<?php get_template_part( 'templates/modal/callBack-modal' ); ?>
<?php get_template_part( 'templates/modal/help-modal' ); ?>
<!-- End Modals -->

<!-- Start Footer -->
<?php get_footer(); ?>  
<!-- End Footer -->
