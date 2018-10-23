<!-- Start Navigation -->
<nav class="navbar navbar-expand-lg py-3 primary-nav">
    <div class="container">
        <a class="navbar-brand" href="<?php echo home_url(); ?>">
            <img src="<?php the_field('nav_logo', 2); ?>" alt="brand">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbars" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item d-flex align-items-center justify-content-center time-item">
                    <div class="time-item__icon">
                        <img src="<?php the_field('nav_icon1', 2); ?>" alt="icon">
                    </div>
                    <div class="time-item__text">
                        <?php if( have_rows('nav_time_rptr', 2) ) : while ( have_rows('nav_time_rptr', 2) ) : the_row(); ?>
                            <p class="mb-0"><?php the_sub_field('text', 2); ?></p>
                        <?php endwhile; endif;?>  
                    </div>
                </li>
                <li class="nav-item d-flex align-items-center justify-content-center phone-item">
                    <div class="phone-item__icon">
                        <img src="<?php the_field('nav_icon2', 2); ?>" alt="icon">
                    </div>
                    <div class="phone-item__text">
                        <?php if( have_rows('nav_time_rptr2', 2) ) : while ( have_rows('nav_time_rptr2', 2) ) : the_row(); ?>
                            <p class="mb-0"><?php the_sub_field('text', 2); ?></p>
                        <?php endwhile; endif;?>  
                    </div>
                </li>
                <li class="nav-item d-flex align-items-center location-item">
                    <div class="location-item__icon">
                        <img src="<?php the_field('nav_icon3', 2); ?>" alt="icon">
                    </div>
                    <div class="location-item__text">
                        <?php if( have_rows('nav_time_rptr3', 2) ) : while ( have_rows('nav_time_rptr3', 2) ) : the_row(); ?>
                            <p class="mb-0"><?php the_sub_field('text', 2); ?></p>
                        <?php endwhile; endif;?>  
                    </div>
                </li>
                <li class="nav-item d-flex align-items-center action-item">
                    <a href="#" class="btn" data-toggle="modal" data-target="#signup">
                        <?php the_field('nav_btn_text', 2); ?>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<nav class="navbar navbar-expand-lg secondary-nav">
    <div class="container">
        <div class="navbars collapse navbar-collapse">
            <ul class="navbar-nav w-100 d-flex justify-content-lg-around justify-content-xl-around">
                <?php
                    wp_nav_menu([
                        'menu'            => 'primary_menu',
                        'theme_location'  => 'primary_menu',
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
    </div>
</nav>
<!-- End Navigation -->