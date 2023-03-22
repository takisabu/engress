<?php get_header(); ?>

<main class="l-contents">
  <section class="l-mv p-mv p-mv--blog">
    <div class="p-mv__content l-container">
      <h1 class="p-mv__ttl">ブログ</h1>
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

  <section class="p-cp-section p-cp-section--blog">
    <div class="l-container p-cp-section__inner">
      <h2 class="p-cp-section__ttl"><?php echo get_the_archive_title(); ?></h2>
      <div class="p-cp-section__content l-blog-cards-type2">
        <ul class="l-blog-cards-type2__content">
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <li class="l-blog-cards-type2__item p-blog-card-type2">
                <a href="<?php the_permalink(); ?>" class="p-blog-card-type2__inner">
                  <div class="p-blog-card-type2__body">
                    <time datetime="<?php the_time('c'); ?>" class="p-blog-card-type2__date"><?php the_time('Y-m-d') ?></time>
                    <h2 class="p-blog-card-type2__ttl u-underline"><?php echo cut_text(get_the_title(), 40); ?></h2>
                    <div class="p-blog-card-type2__expect">
                      <?php the_excerpt(); ?>
                    </div>
                  </div>
                  <div class="p-blog-card-type2__thumb">
                    <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail('medium'); ?>
                    <?php else : ?>
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/no-image.png" alt="No Image">
                    <?php endif; ?>
                    <?php
                    $cats = get_the_category();
                    if ($cats[0]) :
                    ?>
                      <div class="p-blog-card-type2__cat"><?php echo $cats[0]->name; ?></div>
                    <?php endif; ?>
                  </div>
                </a>
              </li>
            <?php endwhile; ?>
          <?php endif; ?>
        </ul>
        <div class="l-blog-cards-type2__pagination p-pagination">
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