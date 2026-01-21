<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"> <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <h1 class="logo">
            <div class="logo-name">白砂の丘市立学校給食センター</div>
        </h1>
        <ul class="menu-pc">
            <li><a href="<?php echo home_url('/tuite_page/'); ?>">わたしたちについて＞</a></li>
            <li><a href="<?php echo home_url('/kyusyoku_no/'); ?>">給食ができるまで＞</a></li>
            <li><a href="<?php echo home_url('/menu/'); ?>" >きょうの献立＞</a></li>
            <li><a href="<?php echo home_url('/news_page/'); ?>">おしらせ</a></li>
            <li><a href="<?php echo home_url('/contact/'); ?>" class="btn-box">お問い合わせ＞</a></li>
        </ul>
        <div id="btn" class="hamburger__btn">
            <i class="fas fa-bars"></i>
        </div>
        <ul id="menu" class="menu-sp">
            <li><a href="<?php echo home_url('/tuite_page/'); ?>">わたしたちについて</a></li>
            <li><a href="<?php echo home_url('/kyusyoku_no/'); ?>" >給食ができるまで＞</a>></li>
            <li><a href="<?php echo home_url('/menu/'); ?>">きょうの献立＞</a></li>
            <li><a href="<?php echo home_url('/news_page/'); ?>">おしらせ</a></li>
            <li><a href="<?php echo home_url('/contact/'); ?>" class="btn-box">お問い合わせ＞</a></li>
        </ul>
        <div id="modal" class="modal-sp"></div>
    </header>