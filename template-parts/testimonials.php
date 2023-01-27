<?php
	$testimonials_headline = get_field('testimonials_headline');
    $testimonials_gumroad_rating = get_field('testimonials_gumroad_rating');
    $testimonials_button_text = get_field('testimonials_button_text');
    $testimonials_button_link = get_field('testimonials_button_link');
    
	
?>
<section id="testimonials-section" class="bg-cover bg-no-repeat lg:pt-8 lg:pb-20" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/loft-plan.png')">
    <div class="container">
        <div class="row">  
            
            <div class="col mb-12">
                <img loading="lazy" class="h-6 w-auto mx-auto mb-6 lg:h-8" src="<?php echo get_stylesheet_directory_uri(); ?>/img/black-stars.png" alt="5-star-rating">
                <h2 class="headingTwo"><?php echo $testimonials_headline; ?></h2>
            </div>

            <?php
                if(have_rows('testimonials_repeater')) { ?>
                    <div class="splider col" id="testimonial-slider">
                        <div class="splide__track">
                            <ul class="splide__list sm:grid sm:grid-cols-12 sm:gap-x-6 lg:gap-x-16"> 
                                <?php
                                while( have_rows('testimonials_repeater') ) : the_row(); 
                                    $testimonials_image = get_sub_field('testimonials_image');
                                    $testimonials_name = get_sub_field('testimonials_name');
                                    $testimonials_position = get_sub_field('testimonials_position');
                                    $testimonials_review = get_sub_field('testimonials_review');

                                    ?>
                                    <li class="splide__slide sm:col-span-4 relative pt-12 lg:pt-16">
                                       
                                        <img  class="h-24 w-24 mx-auto mb-6 absolute top-0 left-0 right-0 z-50 lg:h-36 lg:w-36" data-splide-lazy="<?php echo $testimonials_image['url']; ?>" alt="5-star-rating">
                                        <div class="rounded-xl bg-white relative mb-12 p-8 pb-12 pt-16 shadow-md lg:pt-32">
                                            <img loading="lazy" class="h-3 w-auto mx-auto mb-4 lg:h-5" src="<?php echo get_stylesheet_directory_uri(); ?>/img/black-stars.png" alt="5-star-rating">
                                            <h3 class="headingThree"><?php echo $testimonials_name; ?></h3>
                                            <p class="subtitleTwo mb-4"><?php echo $testimonials_position; ?></p>
                                            <p class="bodyText"><?php echo $testimonials_review; ?></p>
                                        </div>
                                       
                                    </li>
                                <?php 
                                endwhile; ?>
                            </ul>
                        </div>
                    </div>
                <?php    
                }
                ?>

            <div class="col bg-cover bg-no-repeat rounded-3xl p-8 lg:p-16" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/gumroad-bg.png')">
                <h2 class="headingTwo mb-6 lg:mb-12"><?php echo $testimonials_gumroad_rating; ?></h2>
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

<script defer>
    var testimonailSlider = new Splide( '#testimonial-slider', {
        pagination: false,
        autoplay: false,
        lazyLoad: true,
        arrows: false,
        type: 'loop',
        mediaQuery: 'min',
        padding: '2rem',
        gap: '1rem',
        breakpoints: {
            640: {
                destroy: true,
            },
        },
    });
    testimonailSlider.mount();
</script>