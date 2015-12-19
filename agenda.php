<?php
/**
* Template Name: Agenda template
*/
?>

<?php
$theme_options = get_option('look_and_feel');
$color = $theme_options['website_color'];

$today = date('l');
$today_date = date('d F Y');
?>

<?php
date_default_timezone_set("UTC");
date_default_timezone_set('Europe/Zurich');
$date = date('h:i:s a', time());
?>

<h2><?php _e('Soirées','sage'); ?></h2>
<div class="ui pointing secondary <?php echo $color; ?> fluid three item menu salsa-days">
    <a class="item active" data-tab="today">
        <h3><?php echo __('Today','sage'); ?></h3>
    </a>
    <a class="item" data-tab="future-events">
        <h3><?php echo __('Future soirées','sage'); ?></h3>
    </a>
    <a class="item" data-tab="calendar">
        <h3><?php echo __('Calendar','sage'); ?></h3>
    </a>
</div>
<div class="ui tab active" data-tab="today">
    <h4><?php echo __($today,'sage') .' '. $today_date; ?></h4>
    <?php echo do_shortcode('[events_list scope="today"]'); ?>
</div>
<div class="ui tab" data-tab="future-events">
    <?php echo do_shortcode('[events_list limit="10"]'); ?>
</div>
<div class="ui tab" data-tab="calendar">
    <?php echo do_shortcode('[events_calendar full=1]'); ?>
</div>
<br>
<br>
<br>
<div class="agenda-page">
    <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('templates/content', 'page'); ?>
    <?php endwhile; ?>
</div>
