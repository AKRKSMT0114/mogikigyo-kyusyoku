<?php get_header(); ?>

<main class="error-page">
    <div class="container">
        <div class="error-image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/404-page.png" alt="404 Error">
        </div>

        <h1 class="error-code">404</h1>
        <p class="error-message">お探しのページが見つかりませんでした</p>
        
        <div class="home-link">
            <a href="<?php echo home_url(); ?>" class="btn">トップページへ戻る</a>
        </div>
    </div>
</main>

<?php get_footer(); ?>