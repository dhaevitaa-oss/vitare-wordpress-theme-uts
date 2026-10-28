
<?php get_header(); ?>

<div class="container">
    <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h2>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h2>

                <?php if (has_post_thumbnail()) : ?>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('large'); ?>
                    </a>
                <?php endif; ?>

                <div class="entry-content">
                    <?php the_excerpt(); ?>
                </div>
            </article>

        <?php endwhile; ?>

        <?php the_posts_pagination(); ?>

    <?php else : ?>

        <h1>Belum Ada Konten</h1>
        <p>Silakan tambahkan artikel melalui dashboard WordPress.</p>

    <?php endif; ?>
</div>

<?php get_footer(); ?>