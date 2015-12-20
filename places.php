<?php
/**
* Template Name: Places Template
*/

$theme_options = get_option('look_and_feel');
$color = $theme_options['website_color'];

$args = array (
'post_type'              => array( 'place' ),
'order'                  => 'ASC',
'orderby'                => 'rand',
'category_name'          => 'bar',
'posts_per_page'          => -1
);

$query = new WP_Query( $args );
?>
<br>
<br>
<?php if ( $query->have_posts() ) : ?>
    <div class="ui four column grid stackable">
        <?php while ( $query->have_posts() ): ?>
            <?php $query->the_post(); ?>
            <div class="column">
                <div class="ui card">
                    <div class="image">
                        <?php echo get_post_meta($post->ID,'place_map',true); ?>
                    </div>
                    <div class="content">
                        <a class="header" href="<?php //the_permalink(); ?>"><?php the_title(); ?></a>
                        <div class="meta">
                            <?php $address = get_post_meta($post->ID,'place_address',true) ?>
                            <?php $npa = get_post_meta($post->ID,'place_npa',true) ?>
                            <?php $city = get_post_meta($post->ID,'place_city',true) ?>
                            <?php $phone = get_post_meta($post->ID,'place_phone',true) ?>
                            <?php $email = get_post_meta($post->ID,'place_email',true) ?>
                            <?php $website = get_post_meta($post->ID,'place_website',true) ?>
                            <?php $map_link = get_post_meta($post->ID,'place_map_link',true) ?>
                            <?php $social_media = get_post_meta($post->ID,'place_social_media'); ?>
                            <?php $place_media_link = get_post_meta($post->ID,'place_media_link'); ?>
                            <?php if ($address): ?>
                                <a href="<?php echo $map_link ?>" target="_blank">
                                    <i class="pin point icon"></i>
                                    <?php echo $address; ?>
                                    <?php if ($npa): ?>
                                        <?php echo ', ' . $npa; ?>
                                    <?php endif; ?>
                                    <?php if ($city): ?>
                                        <?php echo ', ' . $city; ?>
                                    <?php endif; ?>
                                </a>
                            <?php endif; ?>
                            <?php if ($phone): ?>
                                <br>
                                <a href="tel:<?php echo $phone; ?>">
                                    <i class="call icon"></i>
                                    <?php echo $phone; ?>
                                </a>
                            <?php endif; ?>
                            <?php if ($email): ?>
                                <br>
                                <i class="mail icon"></i>
                                <?php echo $email; ?>
                            <?php endif; ?>
                            <?php if ($website): ?>
                                <br>
                                <a href="<?php echo $website; ?>" target="_blank">
                                    <i class="world icon"></i>
                                    website
                                </a>
                            <?php endif; ?>
                        </div>
                        <br>
                        <div class="description">
                            <?php $place_list_days = get_post_meta($post->ID,'place_salsa_days'); ?>
                            <?php $place_salsa_schedule = get_post_meta($post->ID,'place_salsa_schedule'); ?>
                            <?php $place_price = get_post_meta($post->ID,'place_price'); ?>
                            <?php $place_schedule_comment = get_post_meta($post->ID,'place_schedule_comment'); ?>
                            <?php if ($place_list_days[0] != ''): ?>
                                <b><?php _e('Days','sage') ?></b><br>
                            <?php endif; ?>
                            <?php if ($place_list_days): ?>
                                <?php for ($i=0; $i < count($place_list_days); $i++): ?>
                                    <?php echo $place_list_days[$i]; ?>
                                    <?php if ($place_salsa_schedule[$i]): ?>
                                        <?php echo ', ' . $place_salsa_schedule[$i]; ?>
                                    <?php endif; ?>
                                    <span class="right floated">
                                        <?php echo $place_price[$i]; ?>
                                        <?php if ($place_schedule_comment[$i]): ?>
                                            <?php echo ' - '. $place_schedule_comment[$i]; ?>
                                        <?php endif; ?>
                                    </span>
                                    <br>
                                <?php endfor;?>

                            <?php endif; ?>
                        </div>
                    </div>
                    <?php if ($social_media[0] != ''): ?>
                        <div class="extra content">
                            <?php for ($i=0; $i < count($social_media); $i++): ?>
                                <a href="<?php echo $place_media_link[$i]; ?>" class="">
                                    <i class="<?php echo $social_media[$i];  ?> circular <?= $color; ?> inverted icon"></i>
                                </a>
                            <?php endfor ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
<?php else : ?>
    There are not bars!
<?php endif; ?>
<?php // Restore original Post Data ?>
<?php wp_reset_postdata(); ?>
