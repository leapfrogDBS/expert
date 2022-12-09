<?php

if( have_rows('week') ): ?>
    <div class="bg-blue">
        <div class="container">
            <div class="row">
                <div class="col md:col-span-8 md:col-start-3">
                    <div class="tab flex gap-x-6">
                        <?php while( have_rows('week') ) : the_row();
                            $lw_week_title = get_sub_field('lw_week_title');
                            $weekClass = strtolower(str_replace(' ', '', $lw_week_title));
                            ?>
                                <button class="tablinks border-none text-white headingSix mb-0 px-2 py-4 rounded-none" onclick="openTab(event, '<?php echo $weekClass; ?>')"><?php echo $lw_week_title; ?></button> 
                        <?php
                        endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php reset_rows();
    
    while( have_rows('week') ) : the_row();
        $lw_content = get_sub_field('lw_content');
        $lw_week_title = get_sub_field('lw_week_title');
        $weekClass = strtolower(str_replace(' ', '', $lw_week_title)); ?>
        
        <div id="<?php echo $weekClass; ?>" class="tabcontent">   

            <?php if ($lw_content) : ?>
                                
                <section class="bg-white py-4">
                    <div class="container">
                        <div class="row">
                            <div class="col entry-content block-editor-content md:col-span-8 md:col-start-3">
                                <?php echo $lw_content; ?>
                            </div>
                        </div>
                    </div>
                </section>

            <?php
            endif;
            if( have_rows('nlw_videos') ):
            ?>

            <section class="bg-white py-0">
                <div class="container">           
                    <?php while( have_rows('nlw_videos') ) : the_row(); 
                    $lw_video_title = get_sub_field('nlw_video_title');
                    $lw_video_url = get_sub_field('nlw_video_url');
                        ?>
                        <div class="row mb-12 lg:mb-24">
                            <div class="col md:col-span-8 md:col-start-3">
                                <h3 class="headingThree mb-0 text-center"><?php echo $lw_video_title; ?></h1>
                            </div>
                            <div class="col md:col-span-8 md:col-start-3">
                                <figure class="content-media content-media--video rounded-xl">
                                    <iframe loading="lazy" class="content-media__object z-40 rounded-xl" src="<?php echo $lw_video_url; ?>" frameborder="0"></iframe>
                                </figure>
                            </div>
                        </div>
                    <?php endwhile; ?>      
                </div>
            </section>

            <?php endif; ?>

            <?php
            if( have_rows('nlw_templates') ):
            ?>

            <section class="bg-white pt-0">
                <div class="container">  
                    <div class="row">
                        <div class="col">
                            <h2 class="headingTwo text-center">Templates</h2>
                        </div>
                    </div>         
                    <?php while( have_rows('nlw_templates') ) : the_row(); 
                    $lw_template_title = get_sub_field('nlw_template_title');
                    $lw_template_url = get_sub_field('nlw_template_link');
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

        </div>
<?php 
endwhile;

endif; ?>

<style>
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
</style>

<script defer>
    document.querySelector('.tablinks').click();
    function openTab(evt, week) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(week).style.display = "block";
    evt.currentTarget.className += " active";
    }
</script>