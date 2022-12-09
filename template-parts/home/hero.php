<?php
$typewritter_effect_headings = get_field('typewritter_effect_headings');
$hero_subtitle = get_field('hero_subtitle');
?>
<section id="home-hero" class="bg-turquoise relative z-10">
    <div class="container">
        <div class="row relative items-center">
            <div class="col pt-12 pb-24 sm:col-span-7 lg:col-span-8 z-30">
                <h1 id="header-title" class="whitespace-nowrap text-center headingOne text-white mb-0 sm:text-left"></h1>
                <div class="grid grid-cols-8">
                    <div class="col-span-8 mb-12 sm:border-l-2 sm:border-white sm:pl-8 text-center sm:text-left xl:col-span-5 z-30">
                        <h2 class="headingFive text-white mb-0 font-nunito"><?php echo $hero_subtitle; ?></h2>
                    </div>
                </div>
                <div class="text-center sm:text-left lg:mt-14">
                    <a href="<?php echo home_url(); ?>/track/" class="ctaButton">Get Started</a>
                </div>
            </div>
            <div class="col absolute inset-0 opacity-20 z-20 sm:relative sm:col-span-5 sm:opacity-100 lg:col-span-4">
                <img class="w-auto mx-auto sm:w-full h-full sm:ml-auto sm:mr-0" src="<?php echo get_template_directory_uri(); ?>/img/top-lady.svg" alt="">
            </div>
        </div>
    </div>
</section>



<script defer type="text/javascript">
	document.addEventListener('DOMContentLoaded',function(event){
	var typewritterHeadings = <?php echo json_encode((array)$typewritter_effect_headings); ?>;
	var dataText = [];

	for (i=0; i<typewritterHeadings.length; i++) {
		dataText.push(typewritterHeadings[i]['typewritter_heading']);
	}

	var headerTitle = document.querySelector('#header-title');
	// type one text in the typwriter
	// keeps calling itself until the text is finished
	function typeWriter(text, i, fnCallback) {
		// chekc if text isn't finished yet
		if (i < (text.length)) {
		// add next character to h1
		headerTitle.innerHTML = text.substring(0, i+1) +'<span id="cursor" aria-hidden="true"></span>';

		// wait for a while and call this function again for next character
		setTimeout(function() {
			typeWriter(text, i + 1, fnCallback)
		}, 100);
		}
		// text finished, call callback if there is a callback function
		else if (typeof fnCallback == 'function') {
		// call callback after timeout
		setTimeout(fnCallback, 700);
		}
	}
	// start a typewriter animation for a text in the dataText array
	function StartTextAnimation(i) {
		if (typeof dataText[i] == 'undefined'){
			setTimeout(function() {
			StartTextAnimation(0);
			}, 20000);
		}
		// check if dataText[i] exists
		if (i < dataText.length) {
		// text exists! start typewriter animation
		typeWriter(dataText[i], 0, function(){
		// after callback (and whole text has been animated), start next text
		StartTextAnimation(i + 1);
		});
		}
	}
	// start the text animation
	StartTextAnimation(0);
	});
</script>
