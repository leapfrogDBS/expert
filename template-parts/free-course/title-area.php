<?php
$fc_page_title = get_field('fc_page_title');

if ($fc_page_title) :
?>


<section class="bg-pink py-12">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="headingThree mb-0 text-white text-center">
                    <?php echo $fc_page_title; ?>
                </h1>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>