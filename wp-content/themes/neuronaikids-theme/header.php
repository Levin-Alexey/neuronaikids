<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
    <style>
        .site-header::before {
            background-size: 100%;
            bottom: 0;
            content: "";
            height: 25px;
            left: 0;

            position: absolute;
            width: 100%;
            background: url('<?php echo get_template_directory_uri(); ?>/assets/images/header-gradient2.svg') no-repeat;
            background-size: cover;
            z-index: 11; /* чтобы быть выше остального */
            pointer-events: none;

            display: block;

        }

        .site-header::before {
            background-size: 100%;
            bottom: 0;
            content: "";
            height: 25px;
            left: 0;
            margin-bottom: -25px;
            position: absolute;
            width: 100%;
            background: url('<?php echo get_template_directory_uri(); ?>/assets/images/header-gradient2.svg') no-repeat;
            background-size: cover;
            z-index: 11;
            pointer-events: none;
            display: block;
        }


    </style>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="container header-inner">
        <!-- <div class="logo">
            <a href="<?php echo home_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Логотип школы">
            </a>
        </div> -->

        <nav class="main-nav">
            <?php wp_nav_menu(['theme_location' => 'main_menu']); ?>
        </nav>
        <div class="social-icons">
            <a href="https://tiktok.com" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/TikTok_Icon_Black_Circle1111.png" alt="TikTok">
            </a>
            <a href="https://vk.com" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/11zon_cropped.png" alt="VK">
            </a>
            <a href="https://t.me" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Logotg.png" alt="Telegram">
            </a>
             <a href="https://youtube.com" target="_blank">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/11zon_cropped (1).png" alt="YouTube">
    </a>
        </div>
        <div class="header-buttons">
            <a href="#" class="btn btn-outline">Войти</a>
            <a href="#" class="btn btn-primary">Записаться</a>
        </div>
    </div>
</header>