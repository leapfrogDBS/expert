<?php
$facebook = get_field('facebook', 'option'); 
$linkedin = get_field('linkedin', 'option'); 
$youtube = get_field('youtube', 'option'); 
$pinterest = get_field('pinterest', 'option'); 
$twitter = get_field('twitter', 'option'); 

if ($facebook || $linknedin || $youtube || $pinterest || $twitter) :
?>

<section class="bg-white py-12">
    <div class="container">
        <div class="row">
            <div class="col md:col-span-8 md:col-start-3 text-center">
                <h2 class="headingTwo">Follow us on social media</h2>
            </div>
        </div>
        <div class="row">
            <div class="col flex justify-center items-center gap-x-10 mt-4">
                <?php if ($facebook) :?>
                    <a href="<?php echo $facebook; ?>" target="_blank"><i class="fa-brands fa-facebook-f col-start-5 text-4xl sm:text-5xl md:text-6xl  text-pink hover:text-turquoise cursor-pointer"></i></a>
                <?php endif; ?>
                <?php if ($linkedin) :?>
                    <a href="<?php echo $linkedin; ?>" target="_blank"><i class="fa-brands fa-linkedin-in text-4xl sm:text-5xl md:text-6xl  text-pink hover:text-turquoise cursor-pointer"></i></a>
                <?php endif; ?>
                <?php if ($youtube) :?>
                    <a href="<?php echo $youtube; ?>" target="_blank"><i class="fa-brands fa-youtube text-4xl sm:text-5xl md:text-6xl  text-pink hover:text-turquoise cursor-pointer"></i></a>
                <?php endif; ?>
                <?php if ($pinterest) :?>
                    <a href="<?php echo $pinterest; ?>" target="_blank"><i class="fa-brands fa-pinterest-p text-4xl sm:text-5xl md:text-6xl  text-pink hover:text-turquoise cursor-pointer"></i></a>
                <?php endif; ?>
                <?php if ($twitter) :?>
                    <a href="<?php echo $twitter; ?>" target="_blank"><i class="fa-brands fa-twitter text-4xl sm:text-5xl md:text-6xl  text-pink hover:text-turquoise cursor-pointer"></i></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php
endif;
?>