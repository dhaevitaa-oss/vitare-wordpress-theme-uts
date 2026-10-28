
<?php
get_header();
?>

<section class="vitare-blog-section vitare-archive-section">

    <div class="container">

        <header class="vitare-blog-heading">
            <span class="vitare-section-label">EXPLORE THE COLLECTION ✧</span>

            <h1>
                <?php
                if (is_category()) {
                    echo 'Kategori: ' . esc_html(single_cat_title('', false));
                } elseif (is_tag()) {
                    echo 'Tag: ' . esc_html(single_tag_title('', false));
                } elseif (is_author()) {
                    echo 'Tulisan oleh ' . esc_html(get_the_author());
                } elseif (is_year()) {
                    echo 'Arsip Tahun ' . esc_html(get_the_date('Y'));
                } elseif (is_month()) {
                    echo 'Arsip ' . esc_html(get_the_date('F Y'));
                } else {
                    echo 'Jelajahi Semua Cerita';
                }
                ?>
            </h1>

            <?php the_archive_description('<div class="vitare-archive-description">', '</div>'); ?>
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
                <h2>Belum Ada Cerita di Kategori Ini.</h2>
                <p>Coba jelajahi kategori lainnya.</p>
            </div>

        <?php endif; ?>

    </div>

</section>

<?php
get_footer();
?>
