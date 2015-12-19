<?php
/**
* Template Name: School Template
*/

$args = array (
'post_type'              => array( 'school' ),
'order'                  => 'ASC',
'orderby'                => 'rand',
'category_name'          => 'school',
'posts_per_page'          => -1
);

$query = new WP_Query( $args );
?>
<br>
<br>
<br>
<?php if ( $query->have_posts() ) : ?>
    <div class="ui four column grid stackable">        
        <pre>
            <?php print_r($query); ?>
        </pre>
        <br>
        <?php while ( $query->have_posts() ): ?>
            <?php $query->the_post(); ?>
            <div class="column">
                <div class="ui card">
                    <div class="image">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail'); ?>
                            <a href="<?php the_permalink(); ?>" class="ui image">
                                <img src="<?php echo $image[0]; ?>" alt="" />
                            </a>
                        <?php else: ?>
                            <?php echo get_post_meta($post->ID,'place_map',true); ?>
                        <?php endif; ?>
                    </div>
                    <div class="content">
                        <a class="header" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        <div class="meta">
                            <?php $address = get_post_meta($post->ID,'class_address') ?>
                            <?php $npa = get_post_meta($post->ID,'class_npa'); ?>
                            <?php $city = get_post_meta($post->ID,'class_city'); ?>
                            <?php $neighborhood = get_post_meta($post->ID,'class_neighborhood'); ?>
                            <?php $phone = get_post_meta($post->ID,'school_phone',true); ?>
                            <?php $email = get_post_meta($post->ID,'school_email',true); ?>
                            <?php $website = get_post_meta($post->ID,'school_website',true); ?>
                            <?php $social_media = get_post_meta($post->ID,'school_social_media'); ?>
                            <?php $place_media_link = get_post_meta($post->ID,'school_media_link'); ?>
                            <?php $map_link = get_post_meta($post->ID,'class_map_link') ?>

                            <?php $quartier = array_unique($neighborhood) ?>

                            <?php if ($quartier[0]): ?>
                                <?php for ($i=0; $i < count($quartier); $i++) : ?>
                                    <a href="<?php echo esc_url($map_link[$i]); ?>" target="_blank">
                                        <i class="pin point icon"></i>
                                        <?php echo $quartier[$i]; ?>
                                    </a><br>
                                <?php endfor ?>
                            <?php endif; ?>
                            <?php if ($phone): ?>
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
                        </div>
                        <br>
                        <div class="description">

                        </div>
                    </div>
                    <div class="extra content">
                        <?php if ($website): ?>
                            <a href="<?php echo $website; ?>" target="_blank">
                                <i class="world icon"></i>
                                website
                            </a>
                        <?php endif; ?>
                        <?php if ($place_media_link[0] != ''): ?>
                            <span class="right floated">
                                <?php for ($i=0; $i < count($place_media_link) ; $i++): ?>
                                    <a href="<?php echo $place_media_link[$i] ?>" target="_blank">
                                        <i class="<?php echo $social_media[$i]; ?> icon"></i>
                                    </a>
                                <?php endfor ?>
                            </span>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
<?php else : ?>
    There are not bars!
<?php endif; ?>
<?php // Restore original Post Data ?>
<?php wp_reset_postdata(); ?>
