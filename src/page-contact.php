<?php get_header(); ?>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>

    <main class="l-contents">
      <section class="l-mv p-mv p-mv--contact">
        <div class="p-mv__content l-container">
          <h1 class="p-mv__ttl">お問い合わせ・資料請求</h1>
        </div>
      </section>

      <div class="p-breadcrumb">
        <div class="p-breadcrumb__inner l-container">
          <?php
          if (function_exists('bcn_display')) {
            bcn_display();
          }
          ?>
        </div>
      </div>

      <section class="p-cp-section p-cp-section--contact">
        <div class="l-container l-container--narrow p-cp-section__inner">
          <div class="p-cp-section__content p-contact">
            <p class="p-contact__lead">
              弊社に興味を持って頂きありがとうございます。商談やサービスのご利用、資料請求について下記のフォームよりお問い合わせください。
            </p>
            <div class="p-contact__form">
              <?php the_content(); ?>
            </div>
          </div>
        </div>
      </section>
    </main>

  <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>