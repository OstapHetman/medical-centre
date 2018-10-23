<!-- Start SECTION: Consultation -->
<section id="consultation" 
style="
background: url(<?php the_field('consultation_bg', 2); ?>);
background-size: cover;
background-repeat: no-repeat no-repeat;
background-position: center center; 
">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="mb-0 text-center">
                    <?php the_field('consultation_title', 2); ?>
                </h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-9 col-xl-9">
                <!-- Start Form -->
                <?php echo do_shortcode( '[contact-form-7 id="5" title="Бесплатная консультация"]' ); ?>
                <!-- End Form -->
            </div>
        </div>
    </div>
</section>
<!-- End SECTION: Consultation -->

<!-- Start Footer -->
<footer>
    <div class="container">
        <div class="row brand-row">
            <div class="col-12 brand">
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php the_field('footer_logo', 2); ?>" alt="Logo">
                </a>
            </div>
        </div>
        <div class="row footer-row">
            <!-- Start Item -->
            <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 footer-col">
                <?php if( have_rows('footer_phone_rptr', 2) ) : while ( have_rows('footer_phone_rptr', 2) ) : the_row(); ?>
                    <!-- Start Item -->
                    <div class="phone-item d-flex align-items-center">
                        <div class="icon">
                            <img src="<?php the_sub_field('icon', 2); ?>" alt="Phone Icon">
                        </div>
                        <div class="text">
                            <p class="mb-0"><?php the_sub_field('text', 2); ?></p>
                            <a href="tel:<?php the_sub_field('phone', 2); ?>"><?php the_sub_field('phone', 2); ?></a>
                        </div>
                    </div>
                    <!-- End Item -->
                <?php endwhile; endif;?>  
            </div>
            <!-- End Item -->

            <!-- Start Item -->
            <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 footer-col">
                <ul class="mb-0 list-unstyled">
                    <?php
                        wp_nav_menu([
                            'menu'            => 'primary_footer_menu',
                            'theme_location'  => 'primary_footer_menu',
                            'container'       => '',
                            'container_id'    => '',
                            'container_class' => '',
                            'items_wrap'      => '%3$s',
                            'menu_id'         => false,
                            'menu_class'      => false,
                            'depth'           => 0,
                            'fallback_cb'     => 'bs4navwalker::fallback',
                            'walker'          => new bs4navwalker()
                            ]);
                    ?>
                </ul>
            </div>
            <!-- End Item -->

            <!-- Start Item -->
            <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 footer-col">
                <ul class="mb-0 list-unstyled">
                    <?php
                        wp_nav_menu([
                            'menu'            => 'secondary_footer_menu',
                            'theme_location'  => 'secondary_footer_menu',
                            'container'       => '',
                            'container_id'    => '',
                            'container_class' => '',
                            'items_wrap'      => '%3$s',
                            'menu_id'         => false,
                            'menu_class'      => false,
                            'depth'           => 0,
                            'fallback_cb'     => 'bs4navwalker::fallback',
                            'walker'          => new bs4navwalker()
                            ]);
                        ?>
                </ul>
            </div>
            <!-- End Item -->

            <!-- Start Item -->
            <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 footer-col">
                <ul class="list-unstyled mb-0">
                    <li><?php the_field('footer_mail_text', 2); ?></li>
                    <li><a href="mailto:<?php the_field('footer_email', 2); ?>"><?php the_field('footer_email', 2); ?></a></li>
                    <li>
                        <?php the_field('footer_social_text', 2); ?>
                        <a href="<?php the_field('footer_social_link', 2); ?>" target="_blank">
                            <img src="<?php the_field('footer_social_icon', 2); ?>" alt="Social Icon">
                        </a>
                    </li>
                </ul>
                <a href="#" class="btn" data-toggle="modal" data-target="#callBackModal">
                    <?php the_field('footer_btn_text', 2); ?>
                </a>
            </div>
            <!-- End Item -->
        </div>
    </div>
    <!-- Start Bottom Footer -->
    <div class="bottom-footer">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <p class="mb-1"><?php the_field('copyright', 2); ?></p>
                    <p class="mb-0">Разработка сайта <a href="http://mark-lab.biz/" target="_blank">“Mark-Lab”</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bottom Footer -->
</footer>
<!-- End Footer -->

<!-- Start Thank you -->
<?php get_template_part( 'templates/template-thxMessage' ); ?>
<!-- End Thank you -->

<!-- Start Modals -->
<?php get_template_part( 'templates/modals/template-modalHeaderFooter' ); ?>
<?php get_template_part( 'templates/modals/template-modalFreeConsult' ); ?>
<!-- End Modals -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?php bloginfo('template_url'); ?>/js/jquery-3.3.1.slim.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>

<!-- Main JavaScript File -->
<script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
<?php wp_footer(); ?>
</body>

</html>
