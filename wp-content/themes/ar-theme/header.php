<html>
    <head>
        <?php wp_head(); ?>
        <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/jquery.js'; ?>">
        </script>
        <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/jquery-ui.min.js'; ?>">
        </script>
        <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/bootstrap.js'; ?>">
        </script>
        <script src="https://kit.fontawesome.com/a6f4713d55.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/css/bootstrap.css'; ?>">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    </head>
    <body <?php body_class(); ?>>
    <div id="header" class="jumbotron">
        <div class="site-logo center-txt"><img src="<?php echo wp_get_attachment_image_url(18, $size = 'full', $icon = 'false'); ?>"> </div>
        <div class="navigation-menu is-flex hidden-on-mob"><?php wp_nav_menu(array('theme_location' => 'nav menu')); ?></div>
        <div class="account-menu">
            <button class="login">Login</button>
            <button class="sign-up hidden-on-mob">Sign Up</button>
            <button class="contact hidden-on-mob">Talk To Us</button>
            <div class="mobile_nav_wrapper">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width:20px;">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </div>
        </div>
    </div>