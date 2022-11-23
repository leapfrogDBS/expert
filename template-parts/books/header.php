<?php
$books_title = get_field('books_title');
$books_subtitle = get_field('books_subtitle');

if ($books_title) :
?>
<section class="bg-turquoise py-12">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="headingThree mb-2 text-white text-center">
                    <?php echo $books_title; ?>
                </h1>
                <?php if ($books_subtitle) : ?>
                    <p class="headingSix text-white text-center"><?php echo $books_subtitle; ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>