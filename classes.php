<?php
/**
* Template Name: Find class
*/

$theme_options = get_option('look_and_feel');
$color = $theme_options['website_color'];

$args = array (
'post_type'              => array( 'school' ),
'order'                  => 'ASC',
'category_name'          => 'school',
'posts_per_page'          => -1
);

$query = new WP_Query( $args );

__('Beginner','sage');
__('Intermediate','sage');
__('Advanced','sage');
__('Professional','sage');
__('Intermediate advanced','sage');

?>

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css">
<br>
<br>
<br>
<h1 id="title">List of classes</h1>
<br>
<?php if ( $query->have_posts() ) : ?>
    <table id="classes" class="display ui table" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th width="15%" class="table-filter"><?php _e('Class','sage'); ?></th>
                <th width="15%" class="table-filter"><?php _e('Level','sage'); ?></th>
                <th width="10%" class="table-filter"><?php _e('Day','sage'); ?></th>
                <th width="10%" class="table-filter"><?php _e('Place','sage'); ?></th>
                <th width="15%" class="table-filter"><?php _e('School','sage'); ?></th>
                <th width="10%"><?php _e('Time','sage'); ?></th>
                <th width="15%"><?php _e('Price (Lessons)','sage'); ?></th>
                <th><?php _e('Details','sage'); ?></th>
                <th><?php _e('Info','sage'); ?></th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th width="15%"><?php _e('Class','sage'); ?></th>
                <th width="15%"><?php _e('Level','sage'); ?></th>
                <th width="10%"><?php _e('Day','sage'); ?></th>
                <th width="10%"><?php _e('Place','sage'); ?></th>
                <th width="15%"><?php _e('School','sage'); ?></th>
                <th width="10%"><?php _e('Time','sage'); ?></th>
                <th width="15%"><?php _e('Price','sage'); ?></th>
                <th><?php _e('Details','sage'); ?></th>
                <th><?php _e('Info','sage'); ?></th>
            </tr>
        </tfoot>
        <tbody>
        <?php while ( $query->have_posts() ): ?>
            <?php $query->the_post(); ?>

            <?php $website = get_post_meta($post->ID,'school_website',true); ?>
            <?php $class_name = get_post_meta($post->ID,'class_name'); ?>
            <?php $class_level = get_post_meta($post->ID,'class_level'); ?>
            <?php $class_level_number = get_post_meta($post->ID,'class_level_number'); ?>
            <?php $class_day = get_post_meta($post->ID,'class_day'); ?>
            <?php $class_starting_time = get_post_meta($post->ID,'class_starting_time'); ?>
            <?php $class_ending_time = get_post_meta($post->ID,'class_ending_time'); ?>
            <?php $class_starting_period = get_post_meta($post->ID,'class_starting_period'); ?>
            <?php $class_ending_period = get_post_meta($post->ID,'class_ending_period'); ?>
            <?php $class_comments = get_post_meta($post->ID,'class_comments'); ?>

            <?php $price = get_post_meta($post->ID,'school_price'); ?>
            <?php $price_sessions = get_post_meta($post->ID,'school_price_sessions'); ?>

            <?php $class_place = get_post_meta($post->ID,'class_place'); ?>
            <?php $class_place_link = get_post_meta($post->ID,'class_map_link'); ?>

                <?php for ($i=0; $i < count($class_name); $i++) : ?>

                    <tr>
                        <td><?php echo $class_name[$i]; ?></td>
                        <td><?php echo __($class_level[$i],'sage'); ?></td>
                        <td><?php echo __($class_day[$i],'sage'); ?></td>
                        <td>
                            <?php if ($class_place): ?>
                                <?php echo $class_place[$i]; ?>
                            <?php endif; ?>
                        </td>
                        <td><?php the_title(); ?></td>
                        <td><?php echo $class_starting_time[$i] . ' - ' . $class_ending_time[$i]; ?></td>
                        <td>
                            <?php if ($price): ?>
                                <?php echo $price[0] . ' CHF/ ' . $price_sessions[0] . ' '. __('lessons','sage'); ?>
                            <?php endif; ?>
                        </td>
                        <td style="text-align:center">
                            <?php if ($website): ?>
                                <a href="<?php echo the_permalink(); ?>"><i class="world <?= $color; ?> icon"></i></a>
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if (!empty($class_comments[$i])): ?>
                                <i class="class-comment info <?= $color; ?> inverted icon"
                                data-content="<?php echo $class_comments[$i]; ?>">
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endfor;  ?>
        <?php endwhile; ?>
        </tbody>
    </table>
<?php else : ?>
    <?php _e('There are no classes!','sage'); ?>
<?php endif; ?>
<?php // Restore original Post Data ?>
<?php wp_reset_postdata(); ?>

<!-- <script type="text/javascript" src="//code.jquery.com/jquery-1.11.3.min.js"></script> -->
<!-- <script type="text/javascript" src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script> -->
