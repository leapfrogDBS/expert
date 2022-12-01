<div class="bg-turquoise">
    <div class="row items-center">
        <div class="col col-span-12 md:col-span-6 h-full">
            <img class=" w-full h-full object-cover object-right" src="<?php echo get_template_directory_uri(); ?>/img/business.jpg" loading="lazy" alt="">
        </div>
        <div class="col col-span-12 md:col-span-5 px-10 md:pr-0 py-10">
            <h2 class="headingFour text-white">Start a business today</h2>
            <h3 class="headingSix text-white">In our FREE course you will learn how to:</h3>
            <p class="bodyOne text-white flex items-center gap-x-2">This 5-week course will teach you everything you need to know to set up and then scale a small, part-time business that will be profitable regardless of what's happening in the economy.</p>
            <p class="bodyOne text-white flex items-center gap-x-2">So if you've always wanted to be your own boss and have the flexibility and freedom that entails, then...</p>
            <p class="bodyOne text-white flex items-center gap-x-2">Do your future self a favor and check out our course designed to help you achieve exactly that.</p>
            <?php
            $cta_link_address = get_field('cta_link_address', 'option'); 		
			if ($cta_link_address) { ?>
                <a href="<?php echo $cta_link_address; ?>" class="ctaButton">Learn more</a>
            <?php
            }
            ?>
        </div>
    </div>
</div>

