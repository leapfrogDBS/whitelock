<?php
	$testimonials_headline = get_field('testimonials_headline2');
	
?>
<section id="testimonials-section2" class="bg-cover bg-no-repeat pt-20 lg:pt-8 lg:pb-20" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/loft-plan.png')">
    <div class="container">
        <div class="row">  
            
            <div class="col mb-12">
                <img loading="lazy" class="h-6 w-auto mx-auto mb-6 lg:h-8" src="<?php echo get_stylesheet_directory_uri(); ?>/img/black-stars.png" alt="5-star-rating">
                <h2 class="headingTwo"><?php echo $testimonials_headline; ?></h2>
            </div>  

            <?php
                if(have_rows('testimonials_repeater')) { ?>
                    <div class="splider col" id="testimonial-slider2">
                        <div class="splide__track">
                            <ul class="splide__list sm:grid sm:grid-cols-12 sm:gap-x-6 lg:gap-x-16"> 
                                <?php
                                while( have_rows('testimonials_repeater2') ) : the_row(); 
                                    $testimonials_image = get_sub_field('testimonials_image2');
                                    $testimonials_name = get_sub_field('testimonials_name2');
                                    $testimonials_position = get_sub_field('testimonials_position2');
                                    $testimonials_review = get_sub_field('testimonials_review2');

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

        </div>
    </div>
</section>

<script defer>
    var testimonailSlider2 = new Splide( '#testimonial-slider2', {
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
    testimonailSlider2.mount();
</script>


