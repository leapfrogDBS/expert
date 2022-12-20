<?php
$term = get_queried_object();
$category_featured_image = get_field('category_featured_image', $term);
$category_content = get_field('category_content', $term);

if($category_featured_image or $category_content ) {
?>
    <section class="bg-white">
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
                <?php
                if($category_content) {
                ?> 
                    <div class="col md:col-span-10 md:col-start-2 expert-content block-editor-content">
                        <?php echo $category_content; ?>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>
<?php
}
?>
