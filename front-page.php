<?php get_header() ?>
<main>
    <!-- fv -->
    <section class="front-fv">
        <img src="<?= get_template_directory_uri(); ?>/img/top.jpg" alt="ファーストビュー">
        <h2>
            今日も、<span>笑顔</span>がひろがる給食を
        </h2>
    </section>
    <!-- fv -->
    <!-- About -->
    <section class="front-about">
        <h2 class="front-common-title">わたしたちについて</h2>
        <img src="<?= get_template_directory_uri() ?>/img/tuite.png" alt="わたしたちについて">
    </section>
    <!-- process -->
    <section class="front-about">
        <h2 class="front-common-title">給食ができるまで</h2>
        <div class="process-container">
            <div class="process-item">
                <img src="<?= get_template_directory_uri() ?>/img/No1.png" alt="食材の受け取り">
            </div>
            <div class="arrow"></div>
            <div class="process-item">
                <img src="<?= get_template_directory_uri() ?>/img/No2.png" alt="洗浄">
            </div>
            <div class="arrow"></div>
            <div class="process-item">
                <img src="<?= get_template_directory_uri() ?>/img/No3.png" alt="調理">
            </div>
        </div>
        <h3 class="process-btn"><a href="#" class="btn-box">給食ができるまで＞</a></h3>
    </section>
    <!-- process -->
    <!-- menu -->
    <section class="front-about">
        <h2 class="front-common-title">きょうの献立</h2>
        <div class="today-menu">〇月〇日（金）献立</div>
        <div class="menu-list">
            <img src="<?= get_template_directory_uri() ?>/img/kondate.png" alt="献立">
            <div class="menu-item">
                <div class="menu-section">
                    <p>ご飯</p>
                    <p>牛乳</p>
                    <p>井笠港産サーモンのメンチカツ</p>
                    <p>具だくさん味噌汁</p>
                    <p>ノンエッグマヨのポテトサラダ</p>
                    <p>2世紀梨ゼリー</p>
                    <div class="menu-section-2">
                        <p>地産地消食材</p>
                        <p>流星米</p>
                        <p>牛乳</p>
                        <p>井笠港産サーモン</p>
                        <p>山大豚</p>
                        <p>麒麟県産大根</p>
                        <p>ジャガイモ</p>
                        <p>2世紀ナシ</p>
                        <span class="menu-ar">
                            <p>アレルギー情報</p>
                            <p>牛乳</p>
                            <p>※メンチカツの衣（米粉）</p>
                            <p>揚げ油（こめ油）</p>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <h3 class="process-btn"><a href="#" class="btn-box">きょうの献立＞</a></h3>
    </section>
    <!-- menu -->
    <!-- News -->
    <section class="front-about">
        <h2 class="front-common-title">おしらせ</h2>
        <div class="log-box">
            <div class="log-day">2025年12月〇日 <br>〇〇しました。</div>
            <div class="log-day">2025年12月〇日 <br>〇〇しました。</div>
            <div class="log-day">2025年12月〇日 <br>〇〇しました。</div>
            <div class="log-day">2025年12月〇日 <br>〇〇しました。</div>
            <div class="log-day">2025年12月〇日 <br>〇〇しました。</div>
            <div class="log-inner"></div>
        </div>
        <h3 class="process-btn"><a href="#" class="btn-box">もっとみる></a>
            </div>
    </section>
    <!-- News -->
    <section class="front-about">
        <h2 class="front-common-title">お問い合わせ</h2>
        <div class="contact-adress">
            <p>〒123-4566
                <br> 住所 麒麟県白砂の丘市栄町3丁目12番地
                <br>電話 0859-78-9012
                <br>※各種お問合わせは、お電話または「お問合わせ」ページの問合わせフォームより送信してください。
            </p>
            <img src="<?= get_template_directory_uri() ?>/img/contact.PNG" alt="コンタクト">
        </div>

</main>
<?php get_footer() ?>