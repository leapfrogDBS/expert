

<section class="bg-white relative">
        <div class="container">
            <div class="row">
                               
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
            
            <?php
            if (have_rows('learning_track_goals')) {
            ?>
            <div class="row mt-12">
                <?php
                $i= 1;
                while( have_rows('learning_track_goals') ) : the_row();    
                    $goal = get_sub_field('goal');

                    $fade = 'slide-left';

                    $backgroundColour = 'bg-blue';

                    if ($i % 2 == 0) { // 2 4 6 8 10 12 14 16 18 20 22 24 26
                        
                        $backgroundColour = 'bg-yellow';
                        $fade="slide-right";
                    }
                    if ($i % 3 == 0) { // 3 6 9 12 15 18 21 24 27
                       
                        $backgroundColour = 'bg-turquoise';
                    }   
                    if ($i % 4 == 0) { // 4 8 12 16 20 24 28 32 
                        $backgroundColour = 'bg-pink';
                    }

                ?>
                    <div class="col mb-4 flex p-4 rounded-2xl border-2  fade-in-bottom <?php echo $backgroundColour; ?> items-center gap-x-6 md:gap-x-12 shadow-lg learning-goal md:col-span-8 md:col-start-3">
                        <h5 class="headingOne mb-0 text-white"><?php echo $i; ?></h5>
                        <h5 class="headingFive mb-0 text-white"><?php echo $goal; ?></h5>
                    </div>
                <?php
                $i++;
                endwhile;
                ?>
            </div>
            <?php
            }
            ?>
            

        </div>
    </section>