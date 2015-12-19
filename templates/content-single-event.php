<br><br>
<?php while (have_posts()) : the_post(); ?>
    <article <?php post_class(); ?>>
        <header>
            <h1 class="entry-title"><?php the_title(); ?></h1>
        </header>
        <br>
        <div class="entry-content">
            <?php the_post_thumbnail(); ?>
            <?php the_content(); ?>
        </div>
        <footer>
            <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
        </footer>
        <br>
        <?php comments_template('/templates/comments.php'); ?>
    </article>
<?php endwhile; ?>
