<div class="bg-turquoise">
    <div class="row items-center">
        <div class="col col-span-12 md:col-span-6 h-full">
            <img class=" w-full h-full object-cover" src="<?php echo get_template_directory_uri(); ?>/img/start-business.jpg" loading="lazy" alt="">
        </div>
        <div class="col col-span-12 md:col-span-5 px-10 md:pr-0 py-10">
            <h2 class="headingFour text-white">Start a business today</h2>
            <h3 class="headingSix text-white">In our FREE course you will learn how to:</h3>
            <p class="bodyOne text-white flex items-center gap-x-2"><i class="fa-solid fa-circle-chevron-right text-blue"></i><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span></p>
            <p class="bodyOne text-white flex items-center gap-x-2"><i class="fa-solid fa-circle-chevron-right text-blue"></i><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span></p>
            <p class="bodyOne text-white flex items-center gap-x-2"><i class="fa-solid fa-circle-chevron-right text-blue"></i><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span></p>
            <p class="bodyOne text-white flex items-center gap-x-2"><i class="fa-solid fa-circle-chevron-right text-blue"></i><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span></p>
            <?php
            $cta_link_address = get_field('cta_link_address', 'option'); 		
			if ($cta_link_address) { ?>
                <a href="<?php echo $cta_link_address; ?>" class="ctaButton">Sign me up</a>
            <?php
            }
            ?>
        </div>
    </div>
</div>

