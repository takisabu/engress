<?php if (!(is_page('contact') or is_page('thanks'))) : ?>
  <section class="p-cta">
    <div class="p-cta__inner l-container">
      <h2 class="p-cta__ttl">まずは無料で資料請求から</h2>
      <div class="p-cta__btn-wrapper">
        <a href="<?php echo home_url('contact'); ?>" class="c-btn c-btn--primary p-cta__btn">資料請求</a>
      </div>
      <a href="<?php echo home_url('contact'); ?>" class="p-cta__contact u-underline">お問い合わせ</a>
    </div>
  </section>

  <div class="p-phone-contact l-container">
    <p class="p-phone-contact__txt">お電話でのお問い合わせはこちら</p>
    <div class="p-phone-contact__num">0123-456-7890</div>
    <div class="p-phone-contact__hour">平日 08:00~20:00</div>
  </div>
<?php endif; ?>

<footer class="l-footer p-footer">
  <div class="l-footer__container p-footer__inner">
    <div class="p-footer__left">
      <div class="p-footer__nav">
        <?php
        wp_nav_menu(array(
          'theme_location' => 'footer',
          'menu_class' => 'p-footer__nav-list',
          'container' => false,
        ));
        ?>
      </div>
    </div>
    <div class="p-footer__right">
      <div class="p-footer__logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Engress">
      </div>
      <div class="p-footer__phone">
        <span class="p-footer__phone-inner">0123-456-7890</span>
      </div>
      <div class="p-footer__hour">平日08:00~20:00</div>
    </div>
  </div>
</footer>

<div class="p-copy">
  <div class="p-copy__inner">
    <small class="p-copy__txt">&copy; 2020 Engress.</small>
  </div>
</div>

<?php wp_footer(); ?>
</body>

</html>