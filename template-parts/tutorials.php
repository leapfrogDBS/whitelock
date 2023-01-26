<?php
	$tutorials_headline = get_field('tutorials_headline');
    $tutorials_copy = get_field('tutorials_copy');
	
?>
<section class="py-20">
    <div class="container">
        <div class="row">  
            <div class="col mb-12 mx-auto max-w-3xl">
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
                        <div class="col bg-whitlockBlue text-white rounded-2xl mb-12 lg:grid lg:grid-cols-12">
                            <p class="bodyText my-1 pt-1 font-gothic-bold lg:hidden"><?php echo sprintf("%02d", $count); ?></p>
                            <img loading="lazy" src="<?php echo $tutorials_image['url']; ?>" class="lg:order-2 lg:col-span-8 lg:rounded-r-2xl lg:h-full lg:object-cover" alt="">
                            <div class="px-6 py-8 pb-10 lg:order-1 lg:col-span-4 lg:p-0 lg:flex lg:flex-col lg:justify-between">
                                <p class="hidden bodyText py-3 font-gothic-bold lg:block lg:border-b lg:border-white"><?php echo sprintf("%02d", $count); ?></p>
                                <div class="lg:px-6 lg:text-left">
                                    <h2 class="headingTwo uppercase leading-none"><?php echo $tutorials_title; ?></h2>
                                    <p class="bodyText mb-8"><?php echo $tutorials_info; ?></p>
                                </div>
                                <div class="lg:border-t lg:border-white lg:py-6 lg:text-left lg:pl-6">
                                    <a class="cta-button cta-button-white-outline" href="<?php echo $tutorials_link['url']; ?>">Find out more</a>
                                </div>
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

