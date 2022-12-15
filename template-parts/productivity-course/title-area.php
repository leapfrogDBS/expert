<?php
$productivity_header_title = get_field('productivity_header_title');

if ($productivity_header_title) :
?>


<section class="bg-turquoise py-12">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="headingThree mb-0 text-white text-center">
                    <?php echo $productivity_header_title; ?>
                </h1>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>