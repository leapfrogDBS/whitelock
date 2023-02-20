<?php
	$prev_work_copy = get_field('prev_work_copy');
    $prev_work_bottom_section_copy = get_field('prev_work_bottom_section_copy');
    $prev_work_button_text = get_field('prev_work_button_text');
    $prev_work_button_link = get_field('prev_work_button_link');
    	
?>
<section class="bg-black text-white pb-20 lg:pb-36 pt-20">
    <div class="container">
        <div class="row lg:gap-12">  
            
            <div class="col mb-12 mx-auto max-w-3xl">
                <p class="body-text"><?php echo $prev_work_copy; ?></p>
            </div>

            <?php
                if(have_rows('prev_work_sliders')) {
                    $count = 1;
                    while( have_rows('prev_work_sliders') ) : the_row(); 
                        $prev_work_slide_title = get_sub_field('prev_work_slide_title');
                        $prev_work_slide_subtitle = get_sub_field('prev_work_slide_subtitle');
                        $prev_work_slide_images = get_sub_field('prev_work_slide_images');                      

                        ?>
                        <div class="col slider-container mb-12 lg:col-span-6 lg:mb-0">
                            <?php if ($prev_work_slide_images) { ?>
                                <div id="image-slider" class="splide relative">
                                    <div class="splide__arrows absolute right-6 bottom-6 flex gap-x-2">
                                        <button class="splide__arrow splide__arrow--prev border-none bg-transparent opacity-100 relative translate-x-0 left-auto">
                                            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/img/white-arrow-left.png" class="w-5 h-auto" alt="left-arrow">
                                        </button>
                                        <button class="splide__arrow splide__arrow--next border-none bg-transparent opacity-100 relative translate-x-0 right-auto ">
                                            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/img/white-arrow-right.png" alt="right-arrow" class="w-5 h-auto">
                                        </button>
                                    </div>
                                    <div class="splide__track relative">
                                        <ul class="splide__list">
                                        <?php
                                        foreach ($prev_work_slide_images as $slide_image) {
                                        ?>
                                            <li class="splide__slide img-gradient relative inline-block h-0 pt-[56.25%]">
                                            
                                                <img class="rounded-2xl object-cover absolute h-full w-full inset-0" data-splide-lazy="<?php echo $slide_image['url']; ?>" alt="previous-work-image">
                                            </li>
                                        <?php 
                                        }
                                        ?>
                                        </ul>
                                        <p class="bodyText absolute top-6 left-6 font-gothic-bold"><?php echo sprintf("%02d", $count); ?></p>
                                        <div class="absolute bottom-6 left-6">
                                            <h2 class="headingTwo mb-0"><?php echo $prev_work_slide_title; ?></h2>
                                            <p class="bodyText text-left font-gothic-bold mb-0"><?php echo $prev_work_slide_subtitle; ?></p>
                                        </div>
                                        <div class="zoom-in absolute top-6 right-6 text-white pl-12 pb-12">
                                            <i class="fa-solid fa-magnifying-glass bodyText text-2xl"></i>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            } 
                            ?>
                        </div>
                    <?php 
                    $count++;
                    endwhile;
                }
            ?>

        </div>
        <?php if ($prev_work_button_text && $prev_work_button_link) { ?>
            <div class="row">
                <div class="col lg:mt-16">
                    <p class="bodyText mt-12 mb-12"><?php echo $prev_work_bottom_section_copy; ?></p>
                    <a href="<?php echo $prev_work_button_link['url']; ?>" class="cta-button cta-button-white-outline"><?php echo $prev_work_button_text; ?></a>
                </div>
            </div>
        <?php } ?>
    </div>
</section>

<script>
    
    function buildSplides(){
    var elms = document.getElementsByClassName( 'splide' );

    for ( var i = 0; i < elms.length; i++ ) {
        new Splide( elms[ i ], {
            type: 'loop',
            lazyLoad: true,
        } ).mount();
    }
}

buildSplides();
    document.querySelectorAll('.zoom-in').forEach(item => {
        item.addEventListener('click', event => {
            item.closest(".slider-container").classList.toggle("zoom");
            buildSplides();
        })
    })
</script>