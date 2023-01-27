<?php
	$intro_image = get_field('intro_image');
	$intro_headline = get_field('intro_headline');
    $intro_copy = get_field('intro_copy');
    
?>
<section class="pt-10 lg:pb-36">
    <div class="container">
        <div class="row">
            <div class="col mx-auto max-w-3xl">
                <div class="bg-contain bg-no-repeat bg-center pt-20 pb-14" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/lines.png')">
                    <img loading="lazy" src="<?php echo $intro_image['url']; ?>" class="mx-auto max-w-3xl w-full h-auto rounded-2xl">
                </div>
                <h2 class="headingTwo lg:mt-20"><?php echo $intro_headline; ?></h2>
                <p class="bodyText"><?php echo $intro_copy; ?></p>
            </div>
        </div>
    </div>
</section>


