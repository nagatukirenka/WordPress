<?php get_header(); ?>
<img src="<?php echo get_template_directory_uri(); ?>/top-header.jpg"width="1500"height="460"alt=""class="topheader">
<div class="topmenu">
    <div class="container">
        <div class="link">
            <a href="<?php echo get_permalink(get_page_by_title('日記')->ID); ?>">
                <i class="fa fa-book"></i>日記
            </a>
        </div>
        <div class="link">
            <a href="<?php echo get_permalink(get_page_by_title('作品')->ID); ?>">
                <i class="fa fa-wrench"></i>作品
            </a>
        </div>
        <div class="link">
            <a href="<?php echo get_permalink(get_page_by_title('サイト説明')->ID); ?>">
                <i class="fa fa-info"></i>サイト説明
            </a>
        </div>
        <div class="link">
            <a href="<?php echo get_permalink(get_page_by_title('問い合わせ')->ID); ?>">
                <i class="fa fa-envelope"></i>問い合わせ
            </a>
        </div>
    </div>
</div>
<?php get_footer(); ?>