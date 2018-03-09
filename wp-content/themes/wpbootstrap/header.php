<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php bloginfo('description');?>">

    <link rel="icon" href="../../favicon.ico">

    <title>
        <?php bloginfo('name'); ?> |
        <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url');?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
    <style>
       .showcase {
       background: url(
       <?php if(is_front_page()) :?>
        <?php echo get_theme_mod('showcase_image',get_bloginfo('template_url').'/img/showcase.jpg');?>

       <?php endif ;?>
       )


       }


    </style>

</head>

<body>

<div class="blog-masthead">

        <nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
            <?php
            wp_nav_menu( array(
                'theme_location'	=> 'primary',
                'depth'				=> 1, // 1 = with dropdowns, 0 = no dropdowns.
                'container'			=> 'div',
                'container_class'	=> 'collapse navbar-collapse',
                'container_id'		=> 'bs-example-navbar-collapse-1',
                'menu_class'		=> 'navbar-nav mr-auto',
                'fallback_cb'		=> 'WP_Bootstrap_Navwalker::fallback',
                'walker'			=> new WP_Bootstrap_Navwalker()
            ) );
            ?>
        </nav>
</div>
<div class="container">

    <div class="blog-header">
        <h1 class="blog-title"><?php bloginfo('name') ;?></h1>
        <p class="lead blog-description"><?php bloginfo('description');?></p>
    </div>