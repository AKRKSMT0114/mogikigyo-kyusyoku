<?php
/**
 * Template Name: きょうの献立
 */
get_header(); ?>

<main class="menu-page">
    <div class="container">
        <div class="menu-header">
            <h2 class="front-common-title">きょうの献立</h2>
            <div class="menu-date">◯月◯日（金）献立</div>
        </div>

        <div class="menu-flex-container">
            <div class="menu-photo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/kondate.png" alt="今日の給食">
            </div>
            <div class="menu-item">
                <div class="menu-list">
                    <p>ご飯</p>
                    <p>牛乳</p>
                    <p>井笠港産サーモンのメンチカツ</p>
                    <p>具だくさん味噌汁</p>
                    <p>ノンエッグマヨのポテトサラダ</p>
                    <p>21世紀梨ゼリー</p>
                </div>
                
                <div class="menu-info-flex">
                    <div class="info-item">
                        <strong>地産地消食材</strong>
                        <p>流星米</p>
                        <p>牛乳</p>
                        <p>井笠港産サーモン</p>
                    </div>
                    <div class="info-item blue-text">
                        <p>アレルギー情報</p>
                        <p>牛乳</p>
                        <p>＊メンチカツの衣（米粉）</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-footer-content">
            <div class="message-box">
                テキストテキストテキストテキストテキストテキスト
            </div>
            <div class="history-button">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn-white">トップへ戻る ＞</a>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>