```php
<?php
get_header();
?>

<section class="vitare-blog-section vitare-search-section">

    <div class="container">

        <header class="vitare-blog-heading">
            <span class="vitare-section-label">LET'S FIND SOMETHING ✧</span>

            <h1>
                Hasil Pencarian<span>.</span>
            </h1>

            <p>
                Kata kunci:
                <strong><?php echo esc_html(get_search_query()); ?></strong>
            </p>

            <div class="vitare-search-form">
                <?php get_search_form(); ?>
            </div>
        </header>

        <?php if (have_posts()) : ?>

            <div class="vitare-post-grid">

                <?php while (have_posts()) : the_post(); ?>

                    <article <?php post_class('vitare-post-card'); ?>>

                        <a class="vitare-post-thumbnail" href="<?php the_permalink(); ?>">

                            <?php if (has_post_thumbnail()) : ?>

                                <?php the_post_thumbnail('large'); ?>

                            <?php else : ?>

                                <div class="vitare-image-placeholder">
                                    <span>✧</span>
                                    <small>A STORY TO TELL</small>
                                </div>

                            <?php endif; ?>

                        </a>

                        <div class="vitare-post-content">

                            <span class="vitare-post-meta">
                                <?php echo esc_html(get_the_date('d M Y')); ?>
                            </span>

                            <h2>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h2>

                            <p>
                                <?php echo esc_html(wp_trim_words(get_the_excerpt(), 25)); ?>
                            </p>

                            <a class="vitare-text-link" href="<?php the_permalink(); ?>">
                                Baca Ceritanya ↗
                            </a>

                        </div>

                    </article>

                <?php endwhile; ?>

            </div>

            <div class="vitare-pagination">
                <?php the_posts_pagination(); ?>
            </div>

        <?php else : ?>

            <div class="vitare-empty-blog">
                <h2>Belum Menemukan Cerita yang Cocok.</h2>
                <p>
                    Coba gunakan kata kunci lain untuk menemukan artikel yang kamu cari.
                </p>
            </div>

        <?php endif; ?>

    </div>

</section>

<?php
get_footer();
?>
```