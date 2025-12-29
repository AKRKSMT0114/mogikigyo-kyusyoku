<?php

/**
 * Template Name: わたしたちについて
 */
get_header(); ?>

<main class="about-page">
    <section class="main-visual">
        <img src="<?php echo get_template_directory_uri(); ?>/img/tuite.png" alt="調理風景">
        <div class="overlay-text">
            <h2>わたしたちについて</h2>
        </div>
    </section>

    <div class="bg-cream">
        <div class="container">
            <section class="info-card">
                <h3 class="section-title">沿革</h3>

                <div class="card-flex">
                    <div class="text-area">
                        <p>テキストテキストテキストテキストテキストテキスト
                            テキストテキストテキストテキストテキストテキスト
                            テキストテキストテキストテキストテキストテキスト
                            テキストテキストテキストテキストテキストテキスト
                            テキストテキストテキストテキストテキストテキスト（ここに沿革の内容）
                        </p>
                    </div>

                    <div class="image-area">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/tuite-page.PNG" alt="すなまる">
                    </div>
                </div>
            </section>
        </div>
    </div>
</main>
<?php get_footer(); ?>