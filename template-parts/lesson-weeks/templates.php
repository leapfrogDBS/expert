<?php
if( have_rows('lw_templates') ):
?>

<section class="bg-white pt-0">
    <div class="container">  
        <div class="row">
            <div class="col">
                <h2 class="headingTwo text-center">Templates</h2>
            </div>
        </div>         
        <?php while( have_rows('lw_templates') ) : the_row(); 
           $lw_template_title = get_sub_field('lw_template_title');
           $lw_template_url = get_sub_field('lw_template_link');
            ?>
            <div class="row mb-6">
                <div class="col md:col-span-8 md:col-start-3">
                    <a href="<?php echo $lw_template_url['url']; ?>" class="flex items-center gap-x-4" target="_blank">
                        <h4 class="headingFive font-semibold text-blue  mb-0 text-center"><?php echo $lw_template_title; ?></h4>
                        <i class="headingFour mb-0 text-turquoise fa-solid fa-file-pdf"></i>
                    </a>
                </div>
            </div>
        <?php endwhile; ?>      
    </div>
</section>

<?php endif; ?>

