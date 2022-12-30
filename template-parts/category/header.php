<section class="bg-turquoise pt-0">
    <div class="container">
        <div class="row ">
            <div class="col flex flex-row gap-x-12 md:items-start justify-between mb-6 sm:mb-12 mt-6 md:mb-24 gap-y-6">
                <div class="breadcrumbs text-xs md:text-sm subtitleTwo mb-0 text-white font-medium"><?php display_breadcrumb(); ?></div>
                
            </div>
            
        </div>
        <div class="row">
            <div class="col lg:col-span-8 lg:col-start-3">
                <h1 class="headingTwo text-white text-center"><?php echo single_cat_title() ; ?></h1>
                <p class="headingSix text-white text-center"><?php echo category_description('', false); ?></p>
            </div>
        </div>
    </div>
</section>