<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php if(is_front_page()): echo get_bloginfo('name'). ' | ' . get_bloginfo('description'); else: wp_title( '|', true, 'right' ); endif; ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="icon" type="image/png" href="favicon.png">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/normalize.min.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/hover-min.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/main.css">
		<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,900,700italic,900italic|Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900' rel='stylesheet' type='text/css'>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

<?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="modal">
            <div class="modal-wrapper">
                <a class="close"></a>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cupcake.jpg" alt="Weekday Promotion">
            </div>
        </div>
        <div class="mobile-nav">
            <a id="mobile-nav-btn">Navigation</a>
        </div>
        <div class="header-container">
            <header class="wrapper clearfix">
                <h1 class="title"><a href="<?php echo home_url(); ?>"><?php echo get_bloginfo('name'); ?></a></h1>
                <nav>
                    <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
                </nav>
            </header>
            <div class="header-copy">
                <span><?php echo get_post_meta(get_the_ID(), 'banner_title', true);  ?></span>
                
            </div>
        </div>