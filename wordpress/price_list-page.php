<?php
/*
  Template name: Прайс-лист 
*/
get_header();
?>

<!-- Start navigation -->
<?php get_template_part( 'templates/template-nav' ); ?>
<!-- End Navigation -->

<!-- Start MAIN CONTENT -->
<main id="price-list-page">
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
        <div class="row justify-content-center">
            <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10">
              <h1 class="text-center">
                <?php the_field('price_title'); ?>
              </h1>
              <h2 class="text-center">
                <?php the_field('price_subtitle'); ?>
              </h2>
                <!-- Start Table -->
                <div class="table-responsive">
                    <table class="table table-bordered ">
                          <thead>
                          <?php if( have_rows('table_flexible') ): while ( have_rows('table_flexible') ) : the_row(); ?>
                            <?php if( get_row_layout() == 'thead' ):  ?>
                              <tr class="text-center">
                                <?php if( have_rows('text_rptr') ): while ( have_rows('text_rptr') ) : the_row(); ?>
                                  <th scope="col"><?php the_sub_field('text'); ?></th>
                                <?php endwhile; endif;?> 
                              </tr>
                          </thead>
                        
                          <tbody>
                            <?php elseif( get_row_layout() == 'colspan2' ):  ?>
                              <!-- COLSPAN ROW START -->
                              <tr class="text-center colspan-row">
                                  <td colspan="2"><?php the_sub_field('text'); ?></td>
                              </tr>
                              <!-- COLSPAN ROW END -->
                              <?php elseif( get_row_layout() == 'default_row' ):  ?>
                              <!-- DEFAULT ROW START -->
                              <tr class="default-row">
                                  <td><?php the_sub_field('text'); ?></td>
                                  <td class="text-center price"><?php the_sub_field('price'); ?></td>
                              </tr>
                              <!-- DEFAULT ROW End -->
                              <?php elseif( get_row_layout() == 'empty_row' ):  ?>
                              <!-- Empty ROW START -->
                              <tr class="empty-row">
                                  <td colspan="2"></td>
                              </tr>
                              <!-- Empty ROW End -->
                          </tbody>
                            <?php endif; ?>
                      <?php endwhile; endif;?> 
                    </table>
                </div>
                <!-- End Table -->
            </div>
            <div class="col-12 text-center">
                <a href="#" class="btn" data-toggle="modal" data-target="#helpModal">
                  <?php the_field('price_btn'); ?>
                </a>
            </div>
        </div>
    </div>
</main>
<!-- Start END CONTENT -->

<!-- Start Modals -->
<?php get_template_part( 'templates/modal/signup-modal' ); ?>
<?php get_template_part( 'templates/modal/callBack-modal' ); ?>
<?php get_template_part( 'templates/modal/help-modal' ); ?>
<!-- End Modals -->

<!-- Start Footer -->
<?php get_footer(); ?>  
<!-- End Footer -->
