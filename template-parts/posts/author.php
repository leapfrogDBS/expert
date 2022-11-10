<section class="pt-4">
    <div class="container">
        <div class="row">
            <div class="col sm:flex justify-center">
                <div class="author-container max-w-[240px] sm:grid grid-cols-6 rounded-2xl shadow-xl sm:max-w-2xl m-auto">
                    <?php
                    // Get the author ID    
                    $author_id = get_the_author_meta('ID');
                    // Get the author image URL    
                    $output = get_avatar_url($author_id, array('size' => 250));
                    // Display the author image    
                    echo '<img class="col-span-2 w-full h-56 sm:h-full object-cover rounded-t-2xl sm:rounded-l-2xl" src="'.$output.'"/>';
                    ?>
                    <div class="author-details col-span-4 p-4">
                        <p class="headingFive mb-0"><?php echo get_the_author_meta( 'display_name', $post->post_author ); ?></p>
                        <p class="subtitleOne mb-0"><?php echo get_the_author_meta( 'nickname', $post->post_author ); ?></p>
                        <p class="subtitleTwo"><?php echo get_the_author_meta( 'user_description', $post->post_author ); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>