<?php
/*=============================================
=            BREADCRUMBS			            =
=============================================*/
//  to include in functions.php
function the_breadcrumb() {
    $sep = ' >';
    if (!is_front_page()) {
	
	// Start the breadcrumb with a link to your homepage
        echo '<ul class="list-unstyled mb-0 d-flex breadcrumbs">';
        echo '<li><a href="';
        echo get_option('home');
        echo '">';
        echo('Главная');
        echo '</a></li> <li>' . $sep . '</li>';
	
	// Check if the current page is a category, an archive or a single page. If so show the category or archive name.
        if (is_single()){
            echo '<li><a href="';
            echo get_permalink( get_option( 'page_for_posts' ));
            echo '">';
            echo('Последние новости');
            echo '</a></li>';
        } 
	// If the current page is a single post, show its title with the separator
        if (is_single()) {
            echo $sep;
            the_title();
        }
	
	// If the current page is a static page, show its title.
        if (is_page()) {
            echo the_title();
        }
	
	// if you have a static page assigned to be you posts list page. It will find the title of the static page and display it. i.e Home >> Blog
        if (is_home()){
            global $post;
            $page_for_posts_id = get_option('page_for_posts');
            if ( $page_for_posts_id ) { 
                $post = get_page($page_for_posts_id);
                setup_postdata($post);
                the_title();
                rewind_posts();
            }
        }
        echo '</ul>';
    }
}
/*
* Credit: http://www.thatweblook.co.uk/blog/tutorials/tutorial-wordpress-breadcrumb-function/
*/
?>