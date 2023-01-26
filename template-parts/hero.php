<?php
	$hero_headline = get_field('hero_headline');
	$poi1 = get_field('hero_point_of_interest_one');
    $poi2 = get_field('hero_point_of_interest_two');
    $poi3 = get_field('hero_point_of_interest_three');
    $poi4 = get_field('hero_point_of_interest_four');
    $hero_button_title = get_field('hero_button_title');
    $hero_button_link = get_field('hero_button_link');

?>
<section class="bg-cover pt-36 py-20" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/hero-background.png')">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="headingOne"><?php echo $hero_headline; ?></h1>
                <div class="poi-container">
                    <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/img/white-tick.png" class="h-5 w-auto" alt="">
                    <p class="subtitleTwo"><?php echo $poi1; ?></p>
                </div>
                <div class="poi-container">
                    <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/img/white-tick.png" class="h-5 w-auto" alt="">
                    <p class="subtitleTwo"><?php echo $poi2; ?></p>
                </div>
                <div class="poi-container">
                    <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/img/white-tick.png" class="h-5 w-auto" alt="">
                    <p class="subtitleTwo"><?php echo $poi3; ?></p>
                </div>
                <div class="poi-container mb-8">
                    <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/img/white-tick.png" class="h-5 w-auto" alt="">
                    <p class="subtitleTwo"><?php echo $poi4; ?></p>
                </div>
                

                <?php
                    if ($hero_button_title && $hero_button_link) { ?>
                        <a class="cta-button cta-button-black" href="<?php echo $hero_button_link['url']; ?>"><?php echo $hero_button_title; ?></a>    
                    <?php
                    }

                ?>
            </div>
        </div>
    </div>
</section>