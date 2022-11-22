


<?php

if( have_rows('week') ):

    while( have_rows('week') ) : the_row();
        $lw_content = get_sub_field('lw_content');
?>

        <section class="bg-white">
            <div class="container">
                <div class="row">
                    <div class="col entry-content block-editor-content md:col-span-8 md:col-start-3">
                        <?php echo $lw_content; ?>
                    </div>
                </div>
            </div>
        </section>

<?php 
endwhile;
endif; ?>