<?php
use Roots\Sage\Config;
use Roots\Sage\Wrapper;
require_once('conf/color.php');

$theme_options = get_option('look_and_feel');
$color = $theme_options['website_color'];

$website_color = get_the_color($color);

?>

<!doctype html>
<html <?php language_attributes(); ?>>
<?php get_template_part('templates/head'); ?>

<style media="screen">
table.em-calendar.fullcalendar thead { background-color: <?php echo $website_color; ?>;}
table.em-calendar td.eventless-today, table.em-calendar td.eventful-today { background-color: <?php echo $website_color; ?>;}
a{color:<?php echo $website_color; ?>;}
a:hover{color:<?php echo $website_color; ?>;text-decoration: underline;}
table.em-calendar.fullcalendar tbody tr td.eventful li:hover{background:<?php echo $website_color; ?>;}
table.em-calendar.fullcalendar tbody tr td.eventful li:hover a{color:white;}
table.em-calendar.fullcalendar tbody tr td.eventful li a{color:<?php echo $website_color; ?>;}
table.em-calendar td.eventful a, table.em-calendar td.eventful-today a {color: <?php echo $website_color; ?>;}
table.em-calendar td.eventful-today li:hover a { color: <?php echo $website_color; ?>; }
table.em-calendar td.eventful-today li:hover a:hover { color: <?php echo $website_color; ?>; }
</style>

<body <?php body_class(); ?>>
    <!--[if lt IE 9]>
    <div class="alert alert-warning">
    <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
</div>
<![endif]-->
<?php do_action('get_header');?>
<?php get_template_part('templates/sidebar'); ?>
<div class="pusher">
    <?php get_template_part('templates/header'); ?>
    <main id="main" class="ui container">
        <br>
        <div class="ui negative message">
            <?php _e('Our website is currently under development, if you have any question or comment please contact us at info(at)soireesalsa.ch','sage'); ?>
        </div>
        <?php include Wrapper\template_path(); ?>
    </main><!-- /.main -->
    <?php do_action('get_footer'); ?>
    <?php get_template_part('templates/footer'); ?>
    <?php wp_footer(); ?>
</div>

</body>
</html>
