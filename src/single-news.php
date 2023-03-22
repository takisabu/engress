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

  <div class="l-post l-post--news l-container">
    <main class="l-post-main">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <div class="p-post p-post--news">
            <div class="p-post__header">
              <?php
              $cats = get_the_category();
              if ($cats[0]) :
              ?>
                <div class="p-post__cat"><?php echo $cats[0]->name; ?></div>
              <?php endif; ?>
              <h1 class="p-post__ttl"><?php the_title(); ?></h1>
              <div class="p-post__meta">
                <time datetime="<?php the_time('c'); ?>" class="p-post__date"><?php the_time('Y-m-d') ?></time>
              </div>
              <?php if (has_post_thumbnail()) : ?>
                <div class="p-post_thumb"><?php the_post_thumbnail(); ?></div>
              <?php endif; ?>
            </div>
            <div class="p-post__body">
              <?php the_content(); ?>
            </div>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </main>
  </div>
</div>

<?php get_footer(); ?>