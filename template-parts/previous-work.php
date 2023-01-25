<?php
	$prev_work_copy = get_field('prev_work_copy');
    	
?>
<section class="bg-black text-white">
    <div class="container">
        <div class="row">  
            
            <div class="col mb-12">
                <p class="body-text"><?php echo $prev_work_copy; ?></p>
            </div>

            <?php
                if(have_rows('prev_work_sliders')) {
                    while( have_rows('prev_work_sliders') ) : the_row(); 
                        $prev_work_slide_title = get_sub_field('prev_work_slide_title');
                        $prev_work_slide_subtitle = get_sub_field('prev_work_slide_subtitle');
                        $prev_work_slide_images = get_sub_field('prev_work_slide_images');                      

                        ?>
                        <div class="col">
                            <p><?php echo $prev_work_slide_title; ?></p>
                            <p><?php echo $prev_work_slide_subtitle; ?></p>
                            <?php if ($prev_work_slide_images) { 
                                foreach ($prev_work_slide_images as $slide_image) {
                                ?>
                                    <img src="<?php echo $slide_image['url']; ?>" alt="">
                                <?php 
                                }
                            } 
                            ?>

                        </div>
                    <?php 
                    endwhile;
                }
            ?>

        </div>
    </div>
</section>

