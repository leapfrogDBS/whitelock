<?php
	$tutorials_headline = get_field('tutorials_headline');
    $tutorials_copy = get_field('tutorials_copy');
    $tutorials_whats_included = get_field('tutorials_whats_included');
    
	
?>
<section id="tutorials-section" class="py-20 mb-6">
    <div class="container">
        <div class="row">  
            <div class="col mb-20 mx-auto max-w-3xl">
                <h2 class="headingTwo"><?php echo $tutorials_headline; ?></h2>
                <p class="bodyText"><?php echo $tutorials_copy; ?></p>
            </div>
        </div>
        <div id="whats-included" class="col mb-12 mx-auto max-w-3xl">
            <h2 class="headingTwo">What's Included</h2>
            <p class="bodyText"><?php echo $tutorials_whats_included; ?></p>
        </div>
    </div>
</section>

<section class="bg-no-repeat bg-black bg-cover" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/bg-mesh.png')">
    <div class="row bg-whitlockBlue text-white py-6 mb-12">
        <div class="col">
            <h2 class="headingTwo mb-0">START HERE</h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div id="card-container" class="col-span-12">
                <?php
                if(have_rows('tutorials_repeater')) {
                    $count = 1;                    
                    while( have_rows('tutorials_repeater') ) : the_row(); 
                        $tutorials_image = get_sub_field('tutorials_image');
                        $tutorials_title = get_sub_field('tutorials_title');
                        $tutorials_info = get_sub_field('tutorials_info');
                        $tutorials_link = get_sub_field('tutorials_link');
                        $tutorials_price = get_sub_field('tutorials_price');
                        

                        ?>
                        <div class="col bg-whitlockBlue text-white rounded-2xl mb-12 xl:grid xl:grid-cols-12">
                            <p class="bodyText my-1 pt-1 font-gothic-bold xl:hidden"><?php echo sprintf("%02d", $count); ?></p>
                            <div style="background-image: url(<?php echo $tutorials_image['sizes']['large']; ?>)" class="order-2 xl:col-span-8 bg-cover bg-center xl:rounded-r-2xl h-72 xl:h-full" id="tutorial-image"></div>
                            <div id="blurb" class="px-6 py-8 pb-10 order-1 xl:col-span-4 xl:p-0 xl:flex xl:flex-col xl:justify-between">
                                <p class="hidden bodyText py-3 font-gothic-bold xl:block xl:border-b xl:border-white"><?php echo sprintf("%02d", $count); ?></p>
                                <div class="xl:px-6 xl:text-left">
                                    <h2 class="headingTwo uppercase leading-none xl: py-6"><?php echo $tutorials_title; ?></h2>
                                    <p class="bodyText mb-8 xl:pb-6"><?php echo $tutorials_info; ?></p>
                                </div>
                                <div class="xl:border-t xl:border-white xl:py-6 xl:text-left xl:px-6 flex justify-between items-center">
                                    <a class="cta-button cta-button-white-outline whitespace-nowrap mr-6" href="<?php echo $tutorials_link['url']; ?>">Buy now</a>
                                    <h3 class="headingFour uppercase leading-none font-bold"><?php echo $tutorials_price; ?></h3>
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

