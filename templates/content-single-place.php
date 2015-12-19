<?php
$theme_options = get_option('look_and_feel');
$color = $theme_options['website_color'];
?>
<?php while (have_posts()) : the_post(); ?>
    <!-- Varialbles -->
    <?php $address = get_post_meta($post->ID,'place_address'); ?>
    <?php $npa = get_post_meta($post->ID,'place_npa'); ?>
    <?php $city = get_post_meta($post->ID,'place_city'); ?>
    <?php $phone = get_post_meta($post->ID,'place_phone',true); ?>
    <?php $email = get_post_meta($post->ID,'place_email',true); ?>
    <?php $website = get_post_meta($post->ID,'place_website',true); ?>
    <?php $social_media = get_post_meta($post->ID,'place_social_media'); ?>
    <?php $place_media_link = get_post_meta($post->ID,'place_media_link'); ?>
    <?php $map_link = get_post_meta($post->ID,'place_map_link') ?>
    <?php $map =  get_post_meta($post->ID,'place_map'); ?>

    <?php $place_salsa_days = get_post_meta($post->ID,'place_salsa_days'); ?>
    <?php $place_price = get_post_meta($post->ID,'place_price'); ?>
    <?php $place_salsa_schedule = get_post_meta($post->ID,'place_salsa_schedule'); ?>
    <?php $place_styles = get_post_meta($post->ID,'place_styles'); ?>
    <?php $place_schedule_comment = get_post_meta($post->ID,'place_schedule_comment'); ?>

    <!-- Place detail -->
    <article <?php post_class(); ?>>
        <header>
            <h1 class="entry-title"><?php the_title(); ?></h1>
        </header>
        <br><br>
        <div class="entry-content">
            <div class="ui two column grid stackable">
                <div class="five wide column">
                    <div class="ui card">
                        <div class="image">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="content">
                            <div class="description">
                                <?php if ($phone): ?>
                                    <i class="call icon"></i> <?php echo $phone;  ?><br>
                                <?php endif; ?>
                                <?php if ($email): ?>
                                    <i class="mail icon"></i> <?php echo $email; ?><br>
                                <?php endif; ?>
                                <?php if ($website): ?>
                                    <a href="<?php esc_url($website); ?>" target="_blank"><i class="world icon"></i><?php echo $website;?><br></a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="extra content">
                            <?php if ($social_media[0] != ''): ?>
                                <?php for ($i=0; $i < count($social_media); $i++): ?>
                                    <a href="<?php echo $place_media_link[$i]; ?>" target="_blank">
                                        <i class="<?php echo $social_media[$i];  ?> circular <?= $color ?> inverted icon"></i>
                                    </a>
                                <?php endfor ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="eleven wide column">
                    <table class="ui table">
                        <thead>
                            <tr>
                                <th><?php _e('Salsa days','sage'); ?></th>
                                <th><?php _e('Price','sage'); ?></th>
                                <th><?php _e('Schedule','sage'); ?></th>
                                <th><?php _e('Styles','sage'); ?></th>
                                <th><?php _e('Comments','sage'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i = 0; $i < count($place_styles); $i++): ?>
                                <tr>
                                    <td><?php echo $place_salsa_days[$i]; ?></td>
                                    <td><?php echo $place_price[$i]; ?></td>
                                    <td><?php echo $place_salsa_schedule[$i]; ?></td>
                                    <td><?php echo $place_styles[$i]; ?></td>
                                    <td><?php echo $place_schedule_comment[$i]; ?></td>
                                </tr>
                            <?php endfor; ?>
                        </tbody>
                    </table>
                    <br>
                    <?php the_content(); ?>
                </div>
            </div>
            <br>
            <br>
            <br>
            <hr>
            <h1><?php _e('Location','sage'); ?></h1>
            <div class="ui grid stackable">
                <?php for ($i=0; $i < count($address); $i++): ?>
                    <div class="four wide column">
                        <table>
                            <tr valign="top">
                                <td><i class="home icon"></i></td>
                                <td>
                                    <?php echo $address[$i]; ?><br>
                                    <?php echo $npa[$i] . ', ' . $city[$i];  ?>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="twelve wide column">
                        <?php echo $map[$i]; ?>
                    </div>
                <?php endfor ?>
            </div>
        </div>
    </article>
<?php endwhile; ?>
