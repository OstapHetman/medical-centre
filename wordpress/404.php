<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Lavka-Zhizni
 * @since Lavka-Zhizni 1.0
 */

get_header(); ?>

<!-- Start navigation -->
<?php get_template_part( 'templates/template-nav' ); ?>
<!-- End Navigation -->

<div class="container not-found">
    <div class="row align-items-center">
        <div class="col-xl-5 col-lg-5 col-md-5 not-found-status">
            <h1 class="text-center">404</h1>
        </div>
        <div class="col-xl-7 col-lg-7 col-md-7 not-found-block">
            <h2 class="text-center">Страница не найдена</h2>
            <p>Возможные причины:</p>
            <ol>
                <li>Такой страницы не существует.</li>
                <li>Адрес был набран неправильно. Проверьте правильность адреса.</li>
                <li>Возможно, вы использовали неправильные символы в адресе.</li>
            </ol>
        </div>
    </div>
</div>

<!-- Start Modals -->
<?php get_template_part( 'templates/modal/signup-modal' ); ?>
<?php get_template_part( 'templates/modal/callBack-modal' ); ?>
<!-- End Modals -->

<!-- Start Footer -->
<?php get_footer(); ?>  
<!-- End Footer -->