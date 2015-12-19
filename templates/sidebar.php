<?php
$theme_options = get_option('look_and_feel');
$color = $theme_options['website_color'];
?>

<div class="ui left sidebar menu <?php echo $color; ?> inverted vertical">
    <br>
    <br>
    <h1 class="ui header inverted center aligned logo">
        <a class="brand" href="<?= esc_url(home_url('/')); ?>">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo.svg" alt="soiree salsa logo" class="ui small image" style="margin:auto"/>
            <?php bloginfo('name'); ?>
        </a>
    </h1>
    <br>
    <div class="main-sidebar">
        <?php
        if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'item']);
        endif;
        ?>
    </div>
    <?php dynamic_sidebar('sidebar-primary'); ?>
</div>
