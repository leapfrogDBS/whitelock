<?php
	$tutorials_headline = get_field('tutorials_headline');
    $tutorials_copy = get_field('tutorials_copy');
	
?>
<section class="py-20">
    <div class="container">
        <div class="row">  
            <div class="col mb-12">
                <h2 class="headingTwo"><?php echo $tutorials_headline; ?></h2>
                <p class="bodyText"><?php echo $tutorials_copy; ?></p>
            </div>
        </div>
    </div>
</section>

<section id="tutorials-section" class="bg-no-repeat bg-black" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/bg-mesh.png')">
    <div class="container">
        <div class="row">
            <div class="-mt-20 col-span-12">
                <?php
                if(have_rows('tutorials_repeater')) {
                    $count = 1;                    
                    while( have_rows('tutorials_repeater') ) : the_row(); 
                        $tutorials_image = get_sub_field('tutorials_image');
                        $tutorials_title = get_sub_field('tutorials_title');
                        $tutorials_info = get_sub_field('tutorials_info');
                        $tutorials_link = get_sub_field('tutorials_link');
                        

                        ?>
                        <div class="col bg-whitlockBlue text-white rounded-2xl mb-12">
                            <p class="bodyText my-1"><?php echo $count; ?></p>
                            <img src="<?php echo $tutorials_image['url']; ?>" alt="">
                            <div class="px-6 py-8">
                                <h2 class="headingTwo uppercase leading-none"><?php echo $tutorials_title; ?></h2>
                                <p class="bodyText"><?php echo $tutorials_info; ?></p>
                                <a class="cta-button cta-button-white-outline" href="<?php echo $tutorials_link['url']; ?>">Find out more</a>
                            </div>
                        </div>
                    <?php 
                    $count++;
                    endwhile;
                }
                ?>
            </div>
        </div>
    </div>
</section>

