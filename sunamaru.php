<?php

/**
 * Template Name: sunamaru
 */
get_header(); ?>

<main class="about-page">
    <div class="container">
        <h2 class="page-title">すなまるについて</h2>
        <div class="white-card">
            <div class="card-content">
                <div class="card-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/sunamaru-page.png" alt="すなまる">
                </div>
                <div class="card-text">
                    <h3 class="char-name">すなまる</h3>
                    <p>テキストテキストテキストテキスト<br>
                        テキストテキストテキストテキスト<br>
                        テキストテキストテキストテキスト<br>
                        テキストテキストテキストテキスト</p>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>