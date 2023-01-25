<?php
	$intro_image = get_field('intro_image');
	$intro_headline = get_field('intro_headline');
    $intro_copy = get_field('intro_copy');
    
?>
<section class="pt-10">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="bg-contain bg-no-repeat pt-20 pb-14" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/lines.png')">
                    <img src="<?php echo $intro_image['url']; ?>">
                </div>
                <h2 class="headingTwo"><?php echo $intro_headline; ?></h2>
                <p class="bodyText"><?php echo $intro_copy; ?></p>
            </div>
        </div>
    </div>
</section>


