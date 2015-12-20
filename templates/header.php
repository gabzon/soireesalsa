<?php
$theme_options = get_option('look_and_feel');
$color = $theme_options['website_color'];
?>

<div class="ui <?php echo $color ?> inverted fixed padded borderless fluid menu">
    <a class="item sidebar-button">
        <i class="sidebar icon"></i> MENU
    </a>
    <a class="brand item" href="<?= esc_url(home_url('/')); ?>">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo.svg" alt="soiree salsa logo" class="ui mini image" style="margin:auto"/>&nbsp;<?php bloginfo('name'); ?>
    </a>
    <div class="right menu">
        <div class="menu-language item">
            <?php
            // $languages = icl_get_languages('skip_missing=0&orderby=code');
            // if(!empty($languages)){
            //     echo '<div class="ui languages floating dropdown labeled icon link inverted button">';
            //     echo '<i class="translate icon"></i>';
            //     echo '<span class="text">'. __('Languages','sage') .'</span>';
            //     echo '<div class="menu">';
            //     foreach($languages as $l){
            //         echo '<div class="item">';
            //         if(!$l['active']) echo '<a href="'.$l['url'].'" style="color:black">';
            //         echo icl_disp_language($l['native_name'], $l['translated_name']);
            //         if(!$l['active']) echo '</a>';
            //         echo '</div>';
            //     }
            //     echo '</div>';
            //     echo '</div>';
            // }
            // ?>
        </div>
    </div>
</div>
