<?php
$term = get_queried_object();
$category_featured_image = get_field('category_featured_image', $term);
$category_content = get_field('category_content', $term);

if($category_featured_image or $category_content ) {
?>
    <section class="bg-white relative">
        <div class="container">
            <div class="row">
                <?php
                if($category_featured_image) {
                ?>    
                    <div class="col md:col-span-8 md:col-start-3">
                        <div id="featured-image-container">
                            <img class="w-full object-cover mb-12" src="<?php echo $category_featured_image['url']; ?> " alt="featured image" loading="lazy">
                        </div>
                    </div>
                <?php
                }
                ?>   
            </div>

            <?php
                if($category_content) {
                ?> 
                    <div class="xl:flex xl:justify-center relative">
                        <div class="hidden xl:block mx-auto xl:m-0 lg:max-w-[700px] xl:w-[215px] xl:sticky xl:top-40 xl:h-screen xl:-translate-y-7 transition-opacity">
                            <?php echo do_shortcode('[ez-toc]'); ?>
                        </div>    
                        <div class="lg:max-w-[700px] pt-8 xl:border-t border-toggl mx-auto">
                            <div class="entry-content block-editor-content">
                                <?php echo $category_content; ?>
                            </div>
                        </div>
                        <div class="hidden xl:block w-[215px] xl:sticky xl:top-40 xl:h-screen xl:max-h-screen sidebar-fade transition-opacity duration-1000 opacity-100">
                            <img src="<?php echo get_template_directory_uri();?>/img/add.png" class="mb-6" alt="ad image">
                            <img src="<?php echo get_template_directory_uri();?>/img/add.png" class="mb-6" alt="ad image">
                            <img src="<?php echo get_template_directory_uri();?>/img/add.png" class="mb-6" alt="ad image">
                        </div>
                    </div>
                <?php
                }
            ?>
        </div>
    </section>
    
<?php
}
include(locate_template('template-parts/social-media/sticky-social.php'));  
?>


