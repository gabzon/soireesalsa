<?php
__('Students','sage');
__('Couple','sage');
__('Adult','sage');
__('Unemployed','sage');
__('AVS','sage');

?>

<?php while (have_posts()) : the_post(); ?>
    <!-- Varialbles -->
    <?php $phone = get_post_meta($post->ID,'school_phone',true); ?>
    <?php $email = get_post_meta($post->ID,'school_email',true); ?>
    <?php $website = get_post_meta($post->ID,'school_website',true); ?>
    <?php $social_media = get_post_meta($post->ID,'school_social_media'); ?>
    <?php $place_media_link = get_post_meta($post->ID,'school_media_link'); ?>

    <!-- Classes -->
    <?php $class_name = get_post_meta($post->ID,'class_name'); ?>
    <?php $class_level = get_post_meta($post->ID,'class_level'); ?>
    <?php $class_level_number = get_post_meta($post->ID,'class_level_number'); ?>
    <?php $class_day = get_post_meta($post->ID,'class_day'); ?>
    <?php $class_starting_time = get_post_meta($post->ID,'class_starting_time'); ?>
    <?php $class_ending_time = get_post_meta($post->ID,'class_ending_time'); ?>
    <?php $class_starting_period = get_post_meta($post->ID,'class_starting_period'); ?>
    <?php $class_ending_period = get_post_meta($post->ID,'class_ending_period'); ?>
    <?php $class_comments = get_post_meta($post->ID,'class_comments'); ?>
    <?php $class_place = get_post_meta($post->ID,'class_place'); ?>
    <?php $class_place_link = get_post_meta($post->ID,'class_place_link'); ?>

    <!-- Pricing -->
    <?php $school_price = get_post_meta($post->ID,'school_price'); ?>
    <?php $school_price_type = get_post_meta($post->ID,'school_price_type'); ?>
    <?php $school_payment_type = get_post_meta($post->ID,'school_payment_type'); ?>
    <?php $school_price_sessions = get_post_meta($post->ID,'school_price_sessions'); ?>
    <?php $school_price_comments = get_post_meta($post->ID,'school_price_comments'); ?>

    <!-- Location -->
    <?php $class_location = get_post_meta($post->ID,'class_location_name'); ?>
    <?php $class_address = get_post_meta($post->ID,'class_address'); ?>
    <?php $class_npa = get_post_meta($post->ID,'class_npa'); ?>
    <?php $class_city = get_post_meta($post->ID,'class_city'); ?>
    <?php $class_neighborhood = get_post_meta($post->ID,'class_neighborhood'); ?>
    <?php $class_map_link = get_post_meta($post->ID,'class_map_link'); ?>
    <?php $map =  get_post_meta($post->ID,'class_map'); ?>

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
                                    <a href="<?php echo esc_url($website); ?>" target="_blank"><i class="world icon"></i><?php echo $website;?><br></a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="extra content">
                            <?php if ($social_media[0] != ''): ?>
                                <?php for ($i=0; $i < count($social_media); $i++): ?>
                                    <a href="<?php echo $place_media_link[$i]; ?>" class="">
                                        <i class="<?php echo $social_media[$i];  ?> circular red inverted icon"></i>
                                    </a>
                                <?php endfor ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="eleven wide column">
                    <?php the_content(); ?>
                    <br>
                    <?php if ($school_price): ?>
                        <h1><?php _e('Pricing','sage') ?></h1>
                        <table class="ui table">
                            <thead>
                                <tr>
                                    <th width="25%"><?php _e('Category','sage'); ?></th>
                                    <th width="20%"><?php _e('Price','sage'); ?></th>
                                    <th width="25%"><?php _e('Payment type','sage'); ?></th>
                                    <th width="20%"><?php _e('Classes','sage'); ?></th>
                                    <th width="10%"><?php _e('Info','sage'); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i=0; $i < count($school_price); $i++) : ?>
                                    <tr>
                                        <td style="text-transform:capitalize"><?php echo __($school_price_type[$i],'sage'); ?></td>
                                        <td><?php echo $school_price[$i] . ' CHF'; ?></td>
                                        <td><?php echo $school_payment_type[$i]; ?></td>
                                        <td><?php echo $school_price_sessions[$i]; ?></td>
                                        <td>
                                            <?php if ($school_price_comments[$i]): ?>
                                                <i class="class-comment info circular inverted red icon" data-content="<?php echo $school_price_comments[$i]; ?>"></i>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endfor; ?>
                            </tbody>
                        </table>
                    <?php endif; ?>
                </div>
            </div>
            <br>
            <br>
            <hr>
            <section>
                <br>
                <h1><?php _e('Schedule','sage') ?></h1>
                <table class="ui table">
                    <thead>
                        <tr>
                            <th><?php _e('Name','sage'); ?></th>
                            <th><?php _e('Level','sage'); ?></th>
                            <th><?php _e('Day','sage'); ?></th>
                            <th><?php _e('Schedule','sage'); ?></th>
                            <th><?php _e('Starting day','sage'); ?></th>
                            <th><?php _e('Place','sage'); ?></th>
                            <th><?php _e('More info','sage'); ?></th>
                        </tr>
                    </thead>
                    <?php for ($i=0; $i < count($class_name); $i++) : ?>
                        <tr>
                            <td>
                                <?php if ($class_name[$i]): ?>
                                    <?php echo $class_name[$i]; ?>
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php if ($class_level[$i]): ?>
                                    <?php echo __($class_level[$i],'sage');?>
                                <?php endif; ?>
                                <?php if ($class_level_number[$i]):?>
                                    <?php echo ' ' . __($class_level_number[$i],'sage'); ?>
                                <?php endif ?>
                            </td>
                            <td><?php echo __($class_day[$i],'sage') ?></i></td>
                            <td><?php echo $class_starting_time[$i] . ' - ' . $class_ending_time[$i]; ?></td>
                            <td>
                                <?php if ($class_starting_period[$i]): ?>
                                    <?php echo $class_starting_period[$i]; if ($class_ending_period[$i]) {echo ' - ' . $class_ending_period[$i];} ?>
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php if ($class_place): ?>
                                    <a href="<?php echo $class_place_link[$i]; ?>" target="_blank">
                                        <?php echo $class_place[$i] . ' '; ?><i class="pin point icon"></i>
                                    </a>
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php if (!empty($class_comments[$i])): ?>
                                    <i class="class-comment info circular red inverted icon"
                                    data-content="<?php echo $class_comments[$i]; ?>">
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endfor ?>
                </table>
            </section>
            <br><br><br>
            <hr>
            <section class="school-location">
                <br>
                <?php if ($class_address): ?>
                    <h1><?php _e('Locations','sage'); ?></h1>
                    <div class="ui grid stackable">
                        <?php for ($i=0; $i < count($class_address); $i++): ?>
                            <div class="four wide column">
                                <table>
                                    <tr valign="top">
                                        <td><i class="home icon"></i></td>
                                        <td>
                                            <?php echo $class_location[$i]; ?>
                                            <?php if ($class_neighborhood): ?>
                                                <?php echo  '(' . $class_neighborhood[$i] . ')'; ?><br>
                                            <?php endif; ?>
                                            <?php echo $class_address[$i]; ?><br>
                                            <?php echo $class_npa[$i] . ', ' . $class_city[$i];  ?>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="twelve wide column">
                                <?php echo $map[$i]; ?>
                            </div>
                        <?php endfor ?>
                    </div>
                <?php endif; ?>
            </section>
        </div>
    </article>
<?php endwhile; ?>
