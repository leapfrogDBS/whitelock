
<section id="faq-section" class="bg-whitlockLightBlue py-20">
    <div class="container">
        <div class="row">  
            <div class="col">
                <h2 class="headingTwo mb-12">Frequently Asked Questions</h2>
            </div>
            <?php
                if(have_rows('faq')) {
                    while( have_rows('faq') ) : the_row(); 
                        $faq_question = get_sub_field('faq_question');
                        $faq_answer = get_sub_field('faq_answer');                      

                        ?>
                        <div class="col border-t-2 border-gray-400 py-8 text-left">
                            <p class="bodyText font-gothic-bold"><?php echo $faq_question; ?></p>
                            <p class="bodyText"><?php echo $faq_answer; ?></p>
                        </div>
                    <?php 
                    endwhile;
                }
            ?>

        </div>
    </div>
</section>

