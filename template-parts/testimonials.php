<?php
	$testimonials_headline = get_field('testimonials_headline');
    $testimonials_gumroad_rating = get_field('testimonials_gumroad_rating');
    $testimonials_button_text = get_field('testimonials_button_text');
    $testimonials_button_link = get_field('testimonials_button_link');
    
	
?>
<section class="bg-cover bg-no-repeat" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/loft-plan.png')">
    <div class="container">
        <div class="row">  
            
            <div class="col mb-12">
                <img class="h-6 w-auto mx-auto mb-6" src="<?php echo get_stylesheet_directory_uri(); ?>/img/black-stars.png" alt="">
                <h2 class="headingTwo"><?php echo $testimonials_headline; ?></h2>
            </div>

            <?php
                if(have_rows('testimonials_repeater')) {
                    while( have_rows('testimonials_repeater') ) : the_row(); 
                        $testimonials_image = get_sub_field('testimonials_image');
                        $testimonials_name = get_sub_field('testimonials_name');
                        $testimonials_position = get_sub_field('testimonials_position');
                        $testimonials_review = get_sub_field('testimonials_review');

                        ?>
                        <div class="col">
                            <div class="rounded-xl drop-shadow-2xl bg-white relative mb-12 p-8 pb-12">
                                <img class="h-24 w-24 mx-auto mb-6 -mt-16" src="<?php echo $testimonials_image['url']; ?>" alt="">
                                <img class="h-3 w-auto mx-auto mb-4" src="<?php echo get_stylesheet_directory_uri(); ?>/img/black-stars.png" alt="">
                                <h3 class="headingThree"><?php echo $testimonials_name; ?></h3>
                                <p class="subtitleTwo mb-4"><?php echo $testimonials_position; ?></p>
                                <p class="bodyText"><?php echo $testimonials_review; ?></p>
                            </div>
                        </div>
                    <?php 
                    endwhile;
                }
            ?>

            <div class="col bg-cover bg-no-repeat rounded-3xl p-8" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/gumroad-bg.png')">
                <h2 class="headingTwo mb-6"><?php echo $testimonials_gumroad_rating; ?></h2>
                <?php
                if ($testimonials_button_text && $testimonials_button_link) {
                ?>
                    <a class="cta-button cta-button-black" href="<?php echo $testimonials_button_link['url']; ?>"><?php echo $testimonials_button_text; ?></a>
                <?php
                }
                ?>
            </div>

        </div>
    </div>
</section>

