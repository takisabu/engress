<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php wp_head(); ?>
</head>

<body>
  <header id="js-header" class="l-header p-header">
    <div class="l-header__container p-header__inner">
      <div class="p-header__logo">
        <a href="<?php echo home_url(); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Engress">
        </a>
      </div>
      <button type="button" id="js-hamburger" class="p-header__hamburger c-hamburger" aria-controls="js-glabal-menu" aria-expanded="false" aria-label="メニューを開閉する">
        <span class="c-hamburger__line"></span>
        <span class="c-hamburger__line"></span>
        <span class="c-hamburger__line"></span>
      </button>
      <div class="p-header__content">
        <nav class="p-header__nav p-g-nav">
          <?php
          wp_nav_menu(array(
            'theme_location' => 'header',
            'menu_class' => 'p-g-nav__list',
            'container' => false,
          ));
          ?>
        </nav>
        <div class="p-header__info">
          <div class="p-header__hour">平日08:00〜20:00</div>
          <div class="p-header__phone">0123-456-7890</div>
        </div>
        <div class="p-header__btns">
          <div class="p-header__btn-wrapper p-header__btn-wrapper--download">
            <a href="<?php echo home_url('contact'); ?>" class="c-btn c-btn--primary p-header__btn">資料請求</a>
          </div>
          <div class="p-header__btn-wrapper p-header__btn-wrapper--contact">
            <a href="<?php echo home_url('contact'); ?>" class="c-btn c-btn--secondary p-header__btn">お問い合わせ</a>
          </div>
        </div>
      </div>
    </div>
  </header>