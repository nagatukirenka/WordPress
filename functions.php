<?php 
register_sidebar();
add_theme_support('automatic-feed-links');
register_nav_menu('navigation','ナビゲーション');
add_theme_support('custom-header',array('width'=>1500,'height'=>250,'defaul-image'=>'%s/header.jpg','headr-text'=>false));
function mymenu_cat($src){
    $src = preg_replace('/<\/a> \((\d+)\)/','($1)</a>',$src);
    return $src;
}
add_filter('wp_list_categories','mymenu_cat');
function mymenu_month($src){
    $src = preg_replace('/<\/a>&nbsp;\((\d+)\)/','($1)</a>',$src);
    return $src;
}
add_filter('get_archives_link','mymenu_month');
function my_length($length){
    return 40;
}
add_filter('excerpt_mblength','my_length');
/*add_editor_style('editor-style.css');*/
