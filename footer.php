<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package whitelock
 */

?>

<?php
$linkedin = get_field('linkedin', 'options');
$youtube = get_field('youtube', 'options');
$instagram = get_field('instagram', 'options');
$imdb = get_field('imdb', 'options');
$lfacebook = get_field('facebook', 'options');

?>

	<footer id="colophon" class="site-footer">
		<section class="bg-black text-white py-20">
			<div class="container">
				<div class="row">
					<div class="col">
						<h3 class="headingThree">Join Our Newsletter</h3>
						<p class="bodyText">Email Address Here</p>
						<p class="bodyText">Sign Up</p>
					</div>
				</div>
			
				<div class="row">
					<div class="col flex gap-x-2 justify-center">
						<?php if($linkedin) { ?>
							<a href="<?php echo $linkedin['url']; ?>"><img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/img/social-media/linkedin.svg" class="w-8 h-auto" alt=""></a>
						<?php } ?>
						<?php if($youtube) { ?>
							<a href="<?php echo $youtube['url']; ?>"><img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/img/social-media/youtube.svg" class="w-8 h-auto" alt=""></a>
						<?php } ?>
						<?php if($instagram) { ?>
							<a href="<?php echo $instagram['url']; ?>"><img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/img/social-media/insta.svg" class="w-8 h-auto" alt=""></a>
						<?php } ?>
						<?php if($imdb) { ?>
							<a href="<?php echo $imdb['url']; ?>"><img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/img/social-media/imdb.svg" class="w-8 h-auto" alt=""></a>
						<?php } ?>
						<?php if($facebook) { ?>
							<a href="<?php echo $facebook['url']; ?>"><img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/img/social-media/fb.svg" class="w-8 h-auto" alt=""></a>
						<?php } ?>
					</div>
					<div class="col mt-6">
						<img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/img/white-logo.png"  class="mx-auto" alt="">
					</div>
					<div class="col mt-6">
							<p class="subtitleTwo">&copy; Copyright <?php echo date("Y"); ?>by Whitelock Design Limited.</p>
					</div>
				</div>
			</div>
		</section>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
