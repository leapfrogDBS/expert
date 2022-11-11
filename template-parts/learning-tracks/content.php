<?php
$term = get_queried_object();
$learning_tracks_featured_image = get_field('learning_tracks_featured_image', 'option');
$learning_tracks_content = get_field('learning_tracks_content', 'option');

if($learning_tracks_featured_image or $learning_tracks_content ) {
?>
    <section class="bg-white">
        <div class="container">
            <div class="row">
                <?php
                if($learning_tracks_featured_image) {
                ?>    
                    <div class="col md:col-span-8 md:col-start-3">
                        <div id="featured-image-container">
                            <img class="w-full object-cover mb-12" src="<?php echo $learning_tracks_featured_image['url']; ?> " alt="" loading="lazy">
                        </div>
                    </div>
                <?php
                }
                ?>
                <?php
                if($learning_tracks_content) {
                ?> 
                    <div class="col md:col-span-10 md:col-start-2 expert-content block-editor-content">
                        <?php echo $learning_tracks_content; ?>
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
