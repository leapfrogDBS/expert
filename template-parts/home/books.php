<?php
$book_one_title = get_field('book_one_title', 'options');
$book_one_image = get_field('book_one_image', 'options');
$book_one_copy = get_field('book_one_copy', 'options');
$book_one_product_link = get_field('book_one_product_link', 'options');
$book_two_title = get_field('book_two_title', 'options');
$book_two_image = get_field('book_two_image', 'options');
$book_two_copy = get_field('book_two_copy', 'options');
$book_two_product_link = get_field('book_two_product_link', 'options');

?>

<section class="bg-[#ffD103]">
    <div class="container">
        <div class="row items-center">
            <div class="col col-span-5 hidden md:block">
                <img loading="lazy" class="w-full h-full max-w-md m-auto" src="<?php echo $book_one_image['url']; ?>" alt="">
            </div>
            <div class="col md:col-span-5 md:col-start-7">
                <h2 class="headingThree text-black text-center md:mb-20 md:text-left"><?php echo $book_one_title; ?></h2>
                <p class="bodyOne text-black text-center md:text-left"><?php echo $book_one_copy; ?></p>
                    <img loading="lazy" class="w-full h-full md:hidden my-8 max-w-sm m-auto" src="<?php echo $book_one_image['url']; ?>" alt="book image">
                <div class="text-center md:text-left">
                    <a href="<?php echo $book_one_product_link; ?>" class="ctaButton">Buy now</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-blue">
    <div class="container">
        <div class="row items-center">
            <div class="col md:col-span-5">
                <h2 class=" text-white headingThree text-center md:mb-20 md:text-left"><?php echo $book_two_title; ?></h2>
                <p class="text-white bodyOne text-center md:text-left"><?php echo $book_two_copy; ?></p>
                    <img loading="lazy" class="w-full h-full md:hidden my-8 max-w-sm m-auto" src="<?php echo $book_two_image['url']; ?>" alt="book image">
                <div class="text-center md:text-left">
                    <a href="<?php echo $book_two_product_link; ?>" class="ctaButton">Buy now</a>
                </div>
            </div>
            <div class="col col-span-5 hidden md:block md:col-start-7">
                <img loading="lazy" class="w-full h-full max-w-md m-auto bg-turquoise" src="<?php echo $book_two_image['url']; ?>" alt="book image">
            </div>  
        </div>
    </div>
</section>
