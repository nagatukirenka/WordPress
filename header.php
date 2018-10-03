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
        <?php if(is_single()): ?> 
            <meta name="twitter:card" content="summary" />
            <meta name="twitter:site" content="@Nagatuki_46" />
            <meta name="twitter:title" content="<?php the_title(); ?>" />
            <meta name="twitter:description" content="<?php echo get_post_meta($post->ID, _aioseop_description, true); ?>" />
            <meta name="twitter:image" content="<?php
            if(has_post_thumbnail( $post->ID )):
                $thumbnail_id = get_post_thumbnail_id(); 
                $thumbnail_img = wp_get_attachment_image_src( $thumbnail_id , 'thumbnail' );
                echo $thumbnail_img[0];
            else:
                echo "https://nagatuki.org/wp-content/plugins/all-in-one-seo-pack/images/default-user-image.png";
            endif; ?>" />
        <?php endif; ?>
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