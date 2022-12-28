
 <section class="pt-0">
    <div class="container">
        <div class="row">
            <div class="col">
                <div onClick="copyFunction()" class="citation relative flex flex-col items-center justify-center cursor-pointer">
                    <h3 class="headingFour">Cite this article</h3>
                    <div id="citation-text" class="block subtitleTwo">
                        <span class="author">Minute Tools Content Team,</span>
                        <span class="title"><?php the_title(); ?>,</span>
                        <span class="organisation">Minute Tools,</span>
                        <span class="published-month"><?php echo get_the_date( 'M' ); ?>,</span>
                        <span class="published-year"><?php echo get_the_date( 'Y' ); ?>,</span>
                        <span class="website-address"><?php the_permalink(); ?></span>
                        <p id="copy-text" class="hidden">Minute Tools Content Team, <?php the_title(); ?>, Minute Tools, <?php echo get_the_date( 'M' ); ?>, <?php echo get_the_date( Y ); ?> <?php the_permalink(); ?> </p>			
                    </div>
                    <div id="click-to-copy" class="ctaButton">Click to copy</div>
                </div>
            </div>
        </div>
    </div>
</section>
<script defer>
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