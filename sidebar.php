<aside class="vitare-sidebar">

    <div class="vitare-sidebar-widget vitare-sidebar-about">
        <span class="vitare-section-label">A LITTLE NOTE ✧</span>

        <h3>A Space to Grow.</h3>

        <p>
            Ruang untuk berbagi ide, karya, pengalaman, dan hal-hal baru
            yang kutemukan sepanjang perjalanan belajar.
        </p>
    </div>

    <div class="vitare-sidebar-widget">
        <h3>Find Something</h3>

        <?php get_search_form(); ?>
    </div>

    <div class="vitare-sidebar-widget">
        <h3>Explore Topics</h3>

        <ul class="vitare-sidebar-list">
            <?php
            wp_list_categories(array(
                'title_li' => '',
                'show_count' => true,
                'orderby' => 'name',
                'order' => 'ASC',
                'hide_empty' => false,
            ));
            ?>
        </ul>
    </div>

    <div class="vitare-sidebar-widget">
        <h3>Freshly Written</h3>

        <ul class="vitare-sidebar-list">
            <?php
            $vitare_recent_posts = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page' => 5,
                'post_status' => 'publish',
            ));

            if ($vitare_recent_posts->have_posts()) :
                while ($vitare_recent_posts->have_posts()) :
                    $vitare_recent_posts->the_post();
            ?>

                <li>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </li>

            <?php
                endwhile;
                wp_reset_postdata();
            else :
            ?>

                <li>Artikel terbaru akan muncul di sini.</li>

            <?php endif; ?>
        </ul>
    </div>

</aside>