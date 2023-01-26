<?php
	$qa_headline = get_field('qa_headline');
    $qa_image = get_field('qa_image');
    $qa_button_text = get_field('qa_button_text');
    $qa_button_link = get_field('qa_button_link');
    	
?>
<section class="py-20">
    <div class="container">
        <div class="row"> 
            
            <div class="col mb-6">
                <img loading="lazy" src="<?php echo $qa_image['url']; ?>" alt="">
            </div>
            
            
            <div class="col">
                <img loading="lazy" class="h-6 w-auto mx-auto my-6" src="<?php echo get_stylesheet_directory_uri(); ?>/img/shield.png" alt="">
                <h2 class="headingTwo"><?php echo $qa_headline; ?></h2>
            </div>

            <?php
                if(have_rows('qa_points')) { ?>
                    <div class="col">
                    <?php     
                        while( have_rows('qa_points') ) : the_row(); 
                            $qa_point = get_sub_field('qa_point');
                        ?>
                            <div>
                                <img loading="lazy" class="h-5 w-auto mx-auto my-4" src="<?php echo get_stylesheet_directory_uri(); ?>/img/black-tick.png" alt="">
                                <p class="bodyText mb-8"><?php echo $qa_point; ?></p>
                            </div>
                            
                        <?php 
                        endwhile; ?>
                    </div>
                <?php
                }
            ?>

           
            <div class="col">
                <?php if($qa_button_text && $qa_button_link) {
                ?>
                    <a class="cta-button cta-button-black mt-6" href="<?php echo $qa_button_link['url']; ?>"><?php echo $qa_button_text; ?></a>
                <?php
                }
                ?>
            </div>

        </div>
    </div>
</section>

