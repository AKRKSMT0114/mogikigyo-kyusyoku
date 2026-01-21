<?php

/**
 * Template Name: 給食ができるまで
 */
get_header(); ?>

<main class="process-page">
    <div class="container">
        <h2 class="page-header">〜給食がどうやってできるのかみてみよう〜</h2>

        <div class="process-grid">
            <?php
            // 工程のデータを配列で作成（後でここを書き換えるだけで楽に修正できます）
            $steps = [
                ['img' => 'No1.png', 'text' => 'テキストテキストテキスト'],
                ['img' => 'No2.png', 'text' => 'テキストテキストテキスト'],
                ['img' => 'No3.png', 'text' => 'テキストテキストテキスト'],
                ['img' => 'No4.png', 'text' => 'テキストテキストテキスト'],
                ['img' => 'No5.png', 'text' => 'テキストテキストテキスト'],
                ['img' => 'No6.png', 'text' => 'テキストテキストテキスト'],
            ];

            foreach ($steps as $index => $step) : ?>
                <div class="process-item">
                    <div class="step-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/<?php echo $step['img']; ?>" alt="工程<?php echo $index + 1; ?>">
                    </div>
                    <p class="step-text"><?php echo $step['text']; ?></p>

                    <?php if ($index != 2 && $index != 5) : // 3番目と6番目以外に矢印を表示 
                    ?>
                        <div class="arrow"></div>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="bottom-char">
            <img src="<?php echo get_template_directory_uri(); ?>/img/no-page.png" alt="すなまる">
        </div>
        <div class="history-button">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="btn-white">トップへ戻る ＞</a>
        </div>
    </div>
</main>

<?php get_footer(); ?>