<div id="comments">
    <?php if(have_comments() ): ?>
    <h4>コメント</h4>
    <ul>
        <?php wp_list_comments('format=html5');?>
    </ul>
    <?php endif; ?>
    <?php comment_form('format=html5&title_reply=コメント&label_submit=送信'); ?>
</div>