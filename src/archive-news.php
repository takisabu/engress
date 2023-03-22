<?php get_header(); ?>

<main class="l-contents">
  <section class="l-mv p-mv p-mv--news">
    <div class="p-mv__content l-container">
      <h1 class="p-mv__ttl">お知らせ</h1>
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

  <section class="p-cp-section p-cp-section--news">
    <div class="l-container p-cp-section__inner">
      <h2 class="p-cp-section__ttl">お知らせ一覧</h2>
      <div class="p-cp-section__content l-news-list">
        <ul class="l-news-list__body">
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <li class="l-news-list__item p-news-headline">
                <a href="<?php the_permalink(); ?>" class="p-news-headline__inner">
                  <time datetime="<?php the_time('c'); ?>" class="p-news-headline__date"><?php the_time('Y-m-d'); ?></time>
                  <h3 class="p-news-headline__ttl u-underline"><?php echo cut_text(get_the_title(), 47); ?></h3>
                </a>
              </li>
            <?php endwhile; ?>
          <?php endif; ?>
        </ul>
        <div class="l-news-list__pagination p-pagination">
          <?php
          the_posts_pagination(array(
            'mid_size' => 2,
            'prev_next' => false,
            'screen_reader_text' => '投稿ナビゲーション',
          ));
          ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>