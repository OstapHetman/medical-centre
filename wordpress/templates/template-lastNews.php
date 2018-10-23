<!-- Start SECTION: Last news -->
<section id="last-news">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="mb-0 text-center">Последнии новости</h2>
            </div>
        </div>
        <div class="row">
            <?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>
                <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
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
                <?php endwhile; wp_reset_postdata();?>

        </div>
    </div>
</section>
<!-- End SECTION: Last news -->   