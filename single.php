<?php
get_header();
?>

<section class="vitare-single-section">

    <div class="container vitare-blog-layout">

        <main class="vitare-single-main">

            <?php if (have_posts()) : ?>

                <?php while (have_posts()) : the_post(); ?>

                    <article <?php post_class('vitare-single-article'); ?>>

                        <div class="vitare-single-header">

                            <div class="vitare-post-meta">

                                <span>
                                    <?php echo esc_html(get_the_date('d M Y')); ?>
                                </span>

                                <span>
                                    <?php
                                    $categories = get_the_category();

                                    if (!empty($categories)) {
                                        echo esc_html($categories[0]->name);
                                    }
                                    ?>
                                </span>

                            </div>

                            <h1><?php the_title(); ?></h1>

                            <?php if (has_excerpt()) : ?>
                                <p class="vitare-single-excerpt">
                                    <?php echo esc_html(get_the_excerpt()); ?>
                                </p>
                            <?php endif; ?>

                        </div>

                        <?php if (has_post_thumbnail()) : ?>

                            <div class="vitare-single-featured-image">
                                <?php the_post_thumbnail('large'); ?>
                            </div>

                        <?php endif; ?>

                        <div class="vitare-single-content">
                            <?php
                            the_content();

                            wp_link_pages(array(
                                'before' => '<div class="vitare-page-links">Halaman: ',
                                'after' => '</div>',
                            ));
                            ?>
                        </div>

                        <div class="vitare-single-categories">
                            <strong>Kategori:</strong>
                            <?php the_category(', '); ?>
                        </div>

                        <div class="vitare-post-navigation">

                            <div>
                                <?php previous_post_link('%link', '← Artikel Sebelumnya'); ?>
                            </div>

                            <div>
                                <?php next_post_link('%link', 'Artikel Berikutnya →'); ?>
                            </div>

                        </div>

                    </article>

                <?php endwhile; ?>

            <?php else : ?>

                <p>Artikel tidak ditemukan.</p>

            <?php endif; ?>

            <a class="vitare-button vitare-button-secondary"
               href="<?php echo esc_url(home_url('/')); ?>">
                Kembali ke Beranda
            </a>

        </main>

        <?php get_sidebar(); ?>

    </div>

</section>

<?php
get_footer();
?>