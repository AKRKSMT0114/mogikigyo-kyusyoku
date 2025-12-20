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
</main>
<?php get_footer() ?>