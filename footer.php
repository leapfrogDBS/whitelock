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
$facebook = get_field('facebook', 'options');

?>

	<footer id="colophon" class="site-footer">
		<section class="bg-black text-white py-20 lg:py-28">
			<div class="container">
				<div class="row pb-8 border-b border-white lg:pb-14">
					<div class="col lg:grid grid-cols-12 lg:items-center lg:gap-x-4">
						<h3 class="bodyText font-gothic-bold lg:col-span-3 lg:mb-0 lg:text-left">Join Our Newsletter</h3>
						<form action="" class="flex flex-col md:flex-row gap-y-3 gap-x-4 justify-center lg:col-span-6">
							<input type="text" name="email" id="email" placeholder="Email address here" class="bg-black text-white rounded-none border-white text-center bodyText mb-0 py-2 md:w-64">
							<input type="submit" value="Sign up" class="bg-black text-white rounded-none border-white text-center bodyText mb-0 py-2 md:w-64">
						</form>
							<p class="hidden subtitleTwo lg:bodyText lg:col-span-3 lg:mb-0 lg:text-right lg:block">&copy;<?php echo date("Y"); ?> by Whitelock Design Limited.</p>
					</div>
									
					
				</div>
			
				<div class="row mt-8 lg:items-center lg:mt-14">
					<div class="col flex gap-x-2 justify-center lg:col-span-6 lg:justify-end lg:order-2">
						<?php if($instagram) { ?>
							<a href="<?php echo $instagram['url']; ?>"><img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/img/social-media/insta.svg" class="w-8 h-auto" alt="instagram-link"></a>
						<?php } ?>
						<?php if($youtube) { ?>
							<a href="<?php echo $youtube['url']; ?>"><img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/img/social-media/youtube.svg" class="w-8 h-auto" alt="youtube-link"></a>
						<?php } ?>
						<?php if($imdb) { ?>
							<a href="<?php echo $imdb['url']; ?>"><img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/img/social-media/imdb.svg" class="w-8 h-auto" alt=imdb-link""></a>
						<?php } ?>
						<?php if($linkedin) { ?>
							<a href="<?php echo $linkedin['url']; ?>"><img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/img/social-media/linkedin.svg" class="w-8 h-auto" alt="linkedin-link"></a>
						<?php } ?>				
						<?php if($facebook) { ?>
							<a href="<?php echo $facebook['url']; ?>"><img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/img/social-media/fb.svg" class="w-8 h-auto" alt="facebook-link"></a>
						<?php } ?>
					</div>
					<div class="col mt-6 lg:col-span-6 lg:mt-0">
						<img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/img/white-logo.png"  class="w-16 h-auto mx-auto lg:ml-0 lg:order-1" alt="footer-logo">
					</div>
					<div class="col mt-6 lg:hidden">
							<p class="subtitleTwo">&copy;<?php echo date("Y"); ?> by Whitelock Design Limited.</p>
					</div>
				</div>
			</div>
		</section>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
