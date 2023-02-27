<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package whitelock
 */

get_header();
?>

	<main id="primary" class="site-main">

	<?php 
        include(locate_template('template-parts/hero.php'));
        include(locate_template('template-parts/intro.php'));
        include(locate_template('template-parts/testimonials.php'));
        include(locate_template('template-parts/tutorials.php'));
        include(locate_template('template-parts/previous-work.php')); 
        include(locate_template('template-parts/testimonials2.php'));
        include(locate_template('template-parts/quality-assurance.php'));
		include(locate_template('template-parts/faqs.php'));
        
    ?>

	</main><!-- #main -->

<?php

get_footer();
