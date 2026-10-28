<?php
get_header();
?>

<section class="vitare-blog-hero">
    <div class="container">
        <span class="vitare-section-label">LITTLE NOTES, BIG JOURNEYS ✧</span>

        <h1>Stories, Ideas <span>&amp; Everything In Between.</span></h1>

        <p>
            Catatan perjalanan, hal-hal yang kupelajari, proyek yang kukerjakan,
            dan cerita kecil yang punya makna.
        </p>
    </div>
</section>

<section class="vitare-blog-section">
    <div class="container">
        <div class="vitare-blog-heading">
            <span class="vitare-section-label">FROM MY JOURNAL</span>
            <h2>Latest Stories<span>.</span></h2>
        </div>

        <?php if (have_posts()) : ?>

            <div class="vitare-post-grid">

                <?php while (have_posts()) : the_post(); ?>

                    <article class="vitare-post-card">

                        <a class="vitare-post-thumbnail"
                           href="<?php the_permalink(); ?>">

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

                            <a class="vitare-text-link"
                               href="<?php the_permalink(); ?>">
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
                <h2>Belum Ada Cerita di Sini.</h2>

                <p>
                    Artikel yang kamu publikasikan nantinya akan muncul di sini.
                </p>
            </div>

        <?php endif; ?>

    </div>
</section>

<?php
get_footer();
?>