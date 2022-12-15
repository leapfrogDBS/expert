<?php
    $books_content_area = get_field('books_content_area');
    
    if ($books_content_area) :
?>

<section class="bg-white">
    <div class="container">
        <div class="row">
            <div class="col block-editor-content">
                <?php echo $books_content_area; ?>
            </div>
        </div>
    </div>
</section>
<?php
endif;
?>