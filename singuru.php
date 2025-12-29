<!-- 投稿ページ作成ファイル -->
<?php get_header(); ?>
<div class="contact-fv">
    <p>おしらせ</p>
</div>
<div class="news-inner">
    <p class="news-time"><?php the_time('Y-m-d'); ?></p>
    <p class="news-title"><?php the_title(); ?></p>
    <p class="news-category"><?php the_category(','); ?></p>
    <div class="news-thumbnail"><?php the_post_thumbnail(); ?></div>
    <div class="news-content"><?php the_content(); ?></div>
</div>
<?php get_footer(); ?>