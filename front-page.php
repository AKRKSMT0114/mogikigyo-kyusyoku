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
        <h3><a href="#" class="btn-box">給食ができるまで＞</a></h3>
    </section>
    <section class="front-about">
        <h2 class="front-common-title">きょうの献立</h2>
        <div class="today-menu">〇月〇日（金）献立</div>
        <div class="menu-list">
            <img src="<?= get_template_directory_uri() ?>/img/kondate.png" alt="献立">
            <div class="menu-item">
                <div class="menu-section">
                    <ul>
                        <li>ご飯</li>
                        <li>牛乳</li>
                        <li>井笠港産サーモンのメンチカツ</li>
                        <li>具だくさん味噌汁</li>
                        <li>ノンエッグマヨのポテトサラダ</li>
                        <li>2世紀梨ゼリー</li>
                        <div class="menu-section-2">
                            <li>流星米</li>
                            <li>牛乳</li>
                            <li>井笠港産サーモン</li>
                            <li>山大豚</li>
                            <li>麒麟県産大根</li>
                            <li>ジャガイモ</li>
                            <li>2世紀ナシ</li>
                            <span class="menu-ar">
                                <p>牛乳</p>
                                <p>※メンチカツの衣（米粉）</p>
                                <p>揚げ油（こめ油）</p>
                            </span>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </section>
</main>
<?php get_footer() ?>