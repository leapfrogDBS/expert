<?php 
$lw_content = get_field('lw_content');

if ($lw_content) :
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

<?php endif; ?>