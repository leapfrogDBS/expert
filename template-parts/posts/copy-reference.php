
 <section class="pt-0">
    <div class="container">
        <div class="row">
            <div class="col">
                <div onClick="copyFunction()" class="citation relative flex flex-col items-center justify-center cursor-pointer">
                    <h3 class="headingFour">Cite this article</h3>
                    <div id="citation-text" class="block subtitleOne">
                        <span class="author"><?php the_author(); ?></span>
                        <span class="published-date">(<?php echo get_the_date( 'Y' ); ?>)</span>
                        <span class="title"><?php the_title(); ?></span>
                        <span class="website-name"><?php echo get_bloginfo( 'name' ); ?></span>
                        <span class="accessed-date">acessed <?php echo date('d F Y');; ?></span>
                        <p id="copy-text" class="hidden"><?php the_author(); ?> (<?php echo get_the_date( Y ); ?>) <?php the_permalink(); ?> <?php the_title(); ?> <?php echo get_bloginfo( 'name' ); ?> acessed <?php echo date('d F Y');; ?></p>			
                    </div>
                    <div id="click-to-copy" class="ctaButton">Click to copy</div>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
    function copyFunction() {

        var copyData = document.getElementById("copy-text").innerHTML;
        var showText = document.getElementById("click-to-copy");



    navigator.clipboard.writeText(copyData).then(
  () => {
    /* clipboard successfully set */
  },
  () => {
    /* clipboard write failed */
  }
);;

    showText.innerHTML = "Copied!";

    }
</script>