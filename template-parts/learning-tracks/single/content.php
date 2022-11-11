<section class="bg-white relative">
        <div class="container">
            <div class="row">
                
                <div class="col md:col-span-8 md:col-start-3">
                    <div id="featured-image-container">
                        <?php expert_post_thumbnail(); ?>
                    </div>
                </div>
                
                <div class="col md:col-span-10 md:col-start-2">
                    <div class="entry-content block-editor-content">
                    <?php
                    the_content(
                        sprintf(
                            wp_kses(
                                /* translators: %s: Name of current post. Only visible to screen readers */
                                __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'expert' ),
                                array(
                                    'span' => array(
                                        'class' => array(),
                                    ),
                                )
                            ),
                            wp_kses_post( get_the_title() )
                        )
                    );

                    wp_link_pages(
                        array(
                            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'expert' ),
                            'after'  => '</div>',
                        )
                    );
                    ?>
                    </div><!-- .entry-content -->

                </div>
            </div>
        </div>
    </section>