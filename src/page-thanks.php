<?php get_header(); ?>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>

    <main class="l-contents">
      <div class="p-breadcrumb">
        <div class="p-breadcrumb__inner l-container">
          <?php
          if (function_exists('bcn_display')) {
            bcn_display();
          }
          ?>
        </div>
      </div>

      <section class="p-cp-section p-cp-section--thanks">
        <div class="l-container l-container--narrow p-cp-section__inner">
          <div class="p-cp-section__content p-thanks">
            <p class="p-thanks__txt">
              お問い合わせいただきありがとうございます<br>
              内容を確認した後、担当者よりご連絡いたします
            </p>
            <p class="p-thanks__txt"><a href="<?php echo home_url(); ?>" class="p-thanks__link u-underline">ホームへ戻る</a></p>
          </div>
        </div>
      </section>
    </main>

  <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>