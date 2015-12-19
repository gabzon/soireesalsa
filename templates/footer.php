<?php
$theme_options = get_option('look_and_feel');
$color = $theme_options['website_color'];
?>

<br><br>
<footer class="ui inverted vertical segment <?php echo $color; ?>" role="contentinfo">
    <br>
    <div class="ui container">
        <div class="ui grid center aligned">
            <div class="column">
                <a class="brand item" href="<?= esc_url(home_url('/')); ?>" style="color:white;">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo.svg" alt="soiree salsa logo" class="ui mini image" style="margin:auto; display:inline"/>
                    &nbsp;
                    <span style="font-weight:bold"><?php bloginfo('name'); ?></span>
                </a>
                <br><br>
                <i class="mail icon"></i> info@soireesalsa.ch
            </div>
        </div>
    </div>
    <br>
</footer>
