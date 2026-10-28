
<?php
get_header();
?>

<section class="vitare-page-section">

    <div class="container vitare-blog-layout">

        <main class="vitare-page-main">

            <?php if (have_posts()) : ?>

                <?php while (have_posts()) : the_post(); ?>

                    <article <?php post_class('vitare-page-article'); ?>>

                        <header class="vitare-page-header">
                            <span class="vitare-section-label">A PAGE OF MY JOURNEY ✧</span>
                            <h1><?php the_title(); ?></h1>
                        </header>

                        <?php if (has_post_thumbnail()) : ?>
                            <div class="vitare-page-featured-image">
                                <?php the_post_thumbnail('large'); ?>
                            </div>
                        <?php endif; ?>

                        <div class="vitare-page-content">
                            <?php
                            the_content();

                            wp_link_pages(array(
                                'before' => '<div class="vitare-page-links">Halaman: ',
                                'after' => '</div>',
                            ));
                            ?>
                        </div>

                    </article>

                <?php endwhile; ?>

            <?php else : ?>

                <p>Halaman tidak ditemukan.</p>

            <?php endif; ?>

        </main>

        <?php get_sidebar(); ?>

    </div>

</section>

<?php
get_footer();
?>
