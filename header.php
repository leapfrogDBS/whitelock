<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package whitelock
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site relative">
	<header id="masthead" class="site-header py-6 bg-transparent absolute top-0 left-0 right-0 z-50">
		<div class="container flex items-center justify-between">
			<img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/img/blue-logo.png" class="w-12 h-auto md:order-3 lg:w-24" alt="">
			<img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/img/blue-logo-text.png" class="w-40 h-auto md:order-1 lg:w-72" alt="">
		
			<div id="mobile-menu-header" class="w-[28px] h-[18px] md:w-[40px] md:order-2 md:hidden">
				<div class="hamburger md:hidden relative w-8 h-[22px] cursor-pointer transition-all duration-[0.25s] z-[999] md:w-[40px]" id="menu-btn">
					<span class="hamburger-top w-8 h-[3px] absolute top-0 left-0 rotate-0 transition-all duration-500 translate-y-0 md:w-[40px] bg-whitlockBlue"></span>
					<span class="hamburger-middle w-8 h-[3px] absolute top-0 left-0 rotate-0 transition-all duration-500 translate-y-[10px] md:w-[40px] bg-whitlockBlue"></span>
					<span class="hamburger-bottom w-8 h-[3px] absolute top-0 left-0 rotate-0 transition-all duration-500 translate-y-[20px] md:w-[40px] bg-whitlockBlue"></span>
				</div>
			</div>
			<div id="desktop-menu" class="hidden md:block md:order-2">
				<?php wp_nav_menu( array('menu' => 'primary-menu')); ?>
			</div>
		</div>
	</header><!-- #masthead -->

<div id="mobile-menu" class="fixed left-0 right-0 bg-white py-32 top-12 w-full z-40 mobile-menu invisible opacity-0 overflow-y-scroll">
	<section>	
		<div class="container">
			<div class="row">
				<div class="col">
					<?php include(locate_template('template-parts/menu/mobile-menu.php')); ?>
				</div>
			</div>
		</div>
	</section>
</div>

<script>
	// handle hamburger //
	document.addEventListener("DOMContentLoaded", function(){
		const menuBtn = document.getElementById('menu-btn');
		const menu = document.getElementById('mobile-menu');
		const body = document.querySelector('body');
		

		menuBtn.addEventListener('click', () => {
      		menuBtn.classList.toggle('open')
			menu.classList.toggle('invisible')
			menu.classList.toggle('opacity-0')
			menu.classList.toggle('opacity-100')
			body.classList.toggle('no-scroll');  
		});

		
	}); //end DOM Load
</script>