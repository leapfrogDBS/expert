<div class="flex">        
    <?php
  $menu_name = 'header';
  $locations = get_nav_menu_locations();
  $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
  $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
?>

<nav>
<ul id="desktop-nav" class="main-nav flex items-center">
    <?php
    $count = 0;
    $submenu = false;

    foreach( $menuitems as $item ):

        $link = $item->url;
        $title = $item->title;
        $menu_classes = $item->classes;
        $classes =  implode(" ",$menu_classes);
              
        
        // item does not have a parent so menu_item_parent equals 0 (false)
        if ( !$item->menu_item_parent ):

        // save this id for later comparison with sub-menu items
        $parent_id = $item->ID;
    ?>

    <li class="items-start group">
        <?php
        if (str_contains($classes, 'mega-menu')) {
           ?>

            <p class="title text-base font-normal mb-0 px-2 py-2 cursor-pointer <?php echo $classes; ?>" aria-haspopup="true">
                <?php echo $title; ?>
        </p>
        <?php    
        } else {  
        ?>
            <a href="<?php echo $link; ?>" class="title text-base font-normal mb-0 px-2 py-2 <?php echo $classes; ?>" <?php echo $popup; ?>> 
            <?php echo $title; ?>
        </a>
    <?php } 
    endif; ?>

        <?php if ( $parent_id == $item->menu_item_parent ): ?>

            <?php if ( !$submenu ): $submenu = true; ?>
            <div id="mega-menu" class="fixed -translate-x-full left-0 right-0 transition opacity-0 bg-transparent pt-[20px] group-hover:opacity-100 group-hover:block group-hover:transform min-w-[560px] transform hover:text-white group-hover:translate-x-0 ">
                <div class="container rounded-b-3xl relative py-12 px-24 bg-white shadow-xl w-full">
                    <div class="relative z-10">
                        <div>											
                            <ul class="grid grid-cols-3 gap-x-6 gap-y-2">
                            <?php endif; ?>

                            <li>
                            <?php $icon = get_field('icon', $item);
                            ?>
                                <a href="<?php echo $link; ?>" class="block p-2 -mx-2 rounded-lg hover:bg-turquoise transition ease-in-out duration-300 text-gray-800 font-semibold hover:text-white">
                                    <div class="mega-link flex items-center gap-x-4 ">
                                        <?php echo $icon; ?>
                                        <p><?php echo $title; ?></p>
                                    </div>
                                </a>
                            </li>

                            <?php if ( $menuitems[ $count + 1 ]->menu_item_parent != $parent_id && $submenu ): ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
                
            <?php $submenu = false; endif; ?>

        <?php endif; ?>

    <?php if ( $menuitems[ $count + 1 ]->menu_item_parent != $parent_id ): ?>
    </li>                           
    <?php $submenu = false; endif; ?>

<?php $count++; endforeach; ?>

</ul>
</nav>                      
</div>

