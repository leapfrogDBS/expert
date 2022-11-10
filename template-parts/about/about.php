<?php
$about_copy = get_field('about_copy');	

if($about_copy) {
?>

<section class="bg-white">
    <div class="container">
        <div class="row">
            <div class="col md:col-span-10 md:col-start-2">
                <?php echo $about_copy; ?>
            </div>
        </div>
    </div>
</section>

<?php
}
?>