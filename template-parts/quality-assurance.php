<?php
	$qa_headline = get_field('qa_headline');
    $qa_image = get_field('qa_image');
    $qa_button_text = get_field('qa_button_text');
    $qa_button_link = get_field('qa_button_link');
    	
?>
<section class="py-20">
    <div class="container">
        <div class="row lg:gap-x-8"> 
            
            <div class="col mb-6 mx-auto max-w-3xl lg:col-span-8 lg:order-2">
                <img loading="lazy" src="<?php echo $qa_image['url']; ?>" alt="quality-assurance-image">
            </div>
            
            
            <div class="col lg:col-span-4 lg:order-1 lg:text-left">
                <img loading="lazy" class="h-6 w-auto mx-auto my-6 lg:ml-0 lg:h-7" src="<?php echo get_stylesheet_directory_uri(); ?>/img/shield.png" alt="shield-icon">
                <h2 class="headingTwo"><?php echo $qa_headline; ?></h2>
          

            <?php
                if(have_rows('qa_points')) { ?>
                   
                    <?php     
                        while( have_rows('qa_points') ) : the_row(); 
                            $qa_point = get_sub_field('qa_point');
                        ?>
                            <div class="lg:flex lg:mb-6 lg:gap-x-4 lg:text-left">
                                <img loading="lazy" class="h-5 w-auto mx-auto my-4 lg:m-0" src="<?php echo get_stylesheet_directory_uri(); ?>/img/black-tick.png" alt="tick-icon">
                                <p class="bodyText mb-8 lg:mb-0"><?php echo $qa_point; ?></p>
                            </div>
                            
                        <?php 
                        endwhile; ?>
        
                <?php
                }
            ?>

           
          
                <?php if($qa_button_text && $qa_button_link) {
                ?>
                <div class="lg:text-left">
                    <a class="cta-button cta-button-black mt-6 lg:text-left" href="<?php echo $qa_button_link['url']; ?>"><?php echo $qa_button_text; ?></a>
                </div>
                <?php
                }
                ?>
          
            </div>
        </div>
    </div>
</section>

