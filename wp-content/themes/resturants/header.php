<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invite Resturants</title>

    <?php wp_head(); ?>
</head>
<body>

<header class="header-area">
    <div class="container">
        <div class="logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="invite-resturants"
                     class="logo-image">
            </a>
        </div>
        <div class="social-area">
            <div class="social-links">
                <?php
                $args = array(
                    'theme_location' => 'social-menu',
                    'container' => 'nav',
                    'container_class' => 'social-links',
                    'container_id' => 'social-links',
                    'link_before' => '<span class="sr-text">',
                    'link_after' => '</span>'
                );
                wp_nav_menu($args);
                ?>
                <div class="address">
                    <p>8179 Bay Avenue Mountain View, CA 94043 </p>
                    <p>Phone Number: +1-92-456-7890</p>
                </div>

            </div>
        </div>
    </div>
</header>
<div class="main-menu">
    <div class="mobile-menu">
        <a href="#" class="mobile">
            <i class="fas fa-bars"></i> Menu
        </a>
    </div>
    <div class="container">

        <div class="navigation">
            <?php
            $args = array(
                'theme_location' => 'header-menu',
                'container' => 'nav',
                'container_class' => 'site-nav'
            );
            wp_nav_menu($args);

            ?>
        </div>
    </div>
</div>




























