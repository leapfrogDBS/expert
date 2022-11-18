<?php
$lw_title = get_field('lw_title');
$lw_subtitle = get_field('lw_subtitle');

if ($lw_title) :
?>


<section class="bg-orange py-12">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="headingThree mb-2 text-white text-center">
                    <?php echo $lw_title; ?>
                </h1>
                <?php if ($lw_subtitle) : ?>
                    <p class="headingSix text-white text-center"><?php echo $lw_subtitle; ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>