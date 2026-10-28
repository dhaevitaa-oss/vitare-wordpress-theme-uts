
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="container">

        <div class="site-branding">

            <?php if (has_custom_logo()) : ?>

                <?php the_custom_logo(); ?>

            <?php else : ?>

                <a class="site-title vitare-brand-logo" href="<?php echo esc_url(home_url('/')); ?>">
    <span class="vitare-logo-symbol">✧</span>
    <span class="vitare-logo-text">VITARE</span>
</a>

            <?php endif; ?>

            <p class="site-description">
                Creative Portfolio &amp; Journal
            </p>

        </div>

        <nav class="main-navigation" aria-label="Menu utama">

            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container'      => false,
                'fallback_cb'    => false
            ));
            ?>

        </nav>

    </div>
</header>

<main class="site-main">
