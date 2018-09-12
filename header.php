<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>
        <?php bloginfo('name');?>
        <?php wp_title();?>
    </title>
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>?v=<?php echo filemtime(get_stylesheet_directory().'/style.css')?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="siteinfo">
            <div class="container">
                <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
                <p><?php bloginfo('description'); ?></p>
            </div>        
        </div>
        <?php if(!is_front_page()): ?>
            <?php if(get_header_image()): ?>
                <img src="<?php echo header_image(); ?>"width="<?php echo get_custom_header()->width; ?>"height="<?php echo get_custom_header()->height; ?>"alt="">
            <?php endif; ?>
        <?php endif; ?>
        <nav>
            <div class="container">
                <?php wp_nav_menu('theme_location=navigation'); ?>
            </div>
        </nav>
    </header>