<?php get_header(); ?>

<div class="l-contents">
  <div class="p-breadcrumb l-contents__full">
    <div class="p-breadcrumb__inner l-container">
      <?php
      if (function_exists('bcn_display')) {
        bcn_display();
      }
      ?>
    </div>
  </div>

  <div class="l-contents__col l-post l-container">
    <main class="l-contents__left l-post-main">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <div class="p-post">
            <div class="p-post__header">
              <?php
              $cats = get_the_category();
              if ($cats[0]) :
              ?>
                <div class="p-post__cat"><?php echo $cats[0]->name; ?></div>
              <?php endif; ?>
              <h1 class="p-post__ttl"><?php the_title(); ?></h1>
              <div class="p-post__meta">
                <div class="p-post__sns">
                  <?php wp_social_bookmarking_light_output_e(null, get_permalink(), the_title("", "", false)); ?>
                </div>
                <time datetime="<?php the_time('c'); ?>" class="p-post__date"><?php the_time('Y-m-d') ?></time>
              </div>
              <div class="p-post_thumb">
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail(); ?>
                <?php else : ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/no-image.png" alt="No Image">
                <?php endif; ?>
              </div>
            </div>
            <div class="p-post__body">
              <?php the_content(); ?>
            </div>
            <?php wp_link_pages(array(
              'before' => '<div class="p-post__link">',
              'after' => '</div>',
            )); ?>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
      <div class="p-post-footer">
        <h2 class="p-post-footer__ttl">おすすめの記事</h2>
        <div class="p-post-footer__body">
          <ul class="l-related">
            <?php
            $related_post = get_tag_pages(get_the_ID(), 'pickup', 'post', 3);
            if ($related_post->have_posts()) :
              while ($related_post->have_posts()) :
                $related_post->the_post();
            ?>
                <li class="l-related__item p-related">
                  <a href="<?php the_permalink(); ?>" class="p-related__inner">
                    <div class="p-related__body">
                      <time datetime="<?php the_time('c') ?>" class="p-related__date"><?php the_time('Y-m-d') ?></time>
                      <h3 class="p-related__ttl u-underline"><?php echo cut_text(get_the_title(), 40); ?></h3>
                    </div>
                    <div class="p-related__thumb">
                      <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('medium'); ?>
                      <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/no-image.png" alt="No Image">
                      <?php endif; ?>
                      <?php
                      $cats = get_the_category();
                      if ($cats[0]) :
                      ?>
                        <div class="p-related__cat"><?php echo $cats[0]->name; ?></div>
                      <?php endif; ?>
                    </div>
                  </a>
                </li>
            <?php
              endwhile;
            endif;
            wp_reset_postdata();
            ?>
          </ul>
        </div>
      </div>
    </main>
    <aside class="l-contents__right l-post-side">
      <div class="l-widgets">
        <div class="l-widgets__item p-widget">
          <h2 class="p-widget__ttl">関連記事</h2>
          <div class="p-widget__body">
            <ul class="l-related l-related--sm">
              <?php
              $related_post = get_related_pages(get_the_ID(), 'post', 3);
              if ($related_post->have_posts()) :
                while ($related_post->have_posts()) :
                  $related_post->the_post();
              ?>
                  <li class="l-related__item p-related p-related--sm">
                    <a href="<?php the_permalink(); ?>" class="p-related__inner">
                      <div class="p-related__body">
                        <h3 class="p-related__ttl u-underline"><?php echo cut_text(get_the_title(), 40); ?></h3>
                      </div>
                      <div class="p-related__thumb">
                        <?php if (has_post_thumbnail()) : ?>
                          <?php the_post_thumbnail('medium'); ?>
                        <?php else : ?>
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/no-image.png" alt="No Image">
                        <?php endif; ?>
                      </div>
                    </a>
                  </li>
              <?php
                endwhile;
              endif;
              wp_reset_postdata();
              ?>
            </ul>
          </div>
        </div>
        <div class="l-widgets__item p-widget">
          <h2 class="p-widget__ttl">カテゴリー</h2>
          <div class="p-widget__body">
            <ul class="p-cats">
              <?php
              $cats = get_categories('parent=0');
              foreach ($cats as $cat) :
              ?>
                <li class="p-cats__item"><a href="<?php echo get_category_link($cat->term_id); ?>" class="p-cats__link"><?php echo $cat->name; ?></a></li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      </div>
    </aside>
  </div>
</div>

<?php get_footer(); ?>