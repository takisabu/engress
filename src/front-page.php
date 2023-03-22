<?php get_header(); ?>

<main class="l-contents">
  <section class="p-fv">
    <div class="p-fv__content l-container">
      <h1 class="p-fv__ttl">TOEFL対策は<br class="u-only-sp">Engress</h1>
      <p class="p-fv__lead">
        日本人へのTOEFL指導歴豊かな講師陣の<br>
        コーチング型TOEFLスクール
      </p>
      <div class="p-fv__download">
        <a href="<?php echo home_url('contact'); ?>" class="c-btn c-btn--primary p-fv__btn">資料請求</a>
      </div>
      <div class="p-fv__contact">
        <a href="<?php echo home_url('contact'); ?>" class="u-underline">お問い合わせ</a>
      </div>
    </div>
  </section>

  <section class="p-main-msg">
    <div class="p-main-msg__inner l-container">
      <p class="p-main-msg__ttl">TOEFL学習で<br class="u-only-sp">こんな悩みありませんか？</p>
      <ul class="p-main-msg__list">
        <li class="p-main-msg__item">勉強の習慣が<br>身についていない</li>
        <li class="p-main-msg__item">勉強しているはず<br>なのに点数が伸びない</li>
        <li class="p-main-msg__item">正しい勉強方法が<br>わからない</li>
      </ul>
      <div class="p-main-msg__board p-msg-board">
        <div class="p-msg-board__inner">
          <h2 class="p-msg-board__ttl">Engressは<br><span class="u-underline u-underline--primary">TOEFLに特化したスクール</span>です</h2>
          <p class="p-msg-board__txt">完全オーダーメイドで、<br class="u-only-sp">１人１人の悩みに合わせた最適な指導で<br>TOEFLの苦手分野を克服します。</p>
        </div>
      </div>
    </div>
  </section>

  <section class="p-fp-section p-fp-section--strength">
    <div class="l-container l-container--sp-full p-fp-section__inner">
      <h2 class="p-fp-section__ttl">TOEFL対策に特化した<br class="u-only-sp">Engress3つの強み</h2>
      <ul class="p-fp-section__content l-features">
        <li class="l-features__item p-feature">
          <div class="p-feature__body">
            <div class="p-feature__num">特長 １</div>
            <h3 class="p-feature__ttl">TOEFLに最適化された<br>無駄のないカリキュラム</h3>
            <p class="p-feature__txt">
              TOEFLではビジネス英語には登場しない数多くの学術的内容が出題されます。そのため、ベースとなる知識も必要になります。Engressでは過去1000題を分析し、最適なカリキュラムを組んでいます。
            </p>
          </div>
          <figure class="p-feature__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/feature01.jpg" alt="">
          </figure>
        </li>
        <li class="l-features__item p-feature p-feature--rev">
          <div class="p-feature__body">
            <div class="p-feature__num">特長 ２</div>
            <h3 class="p-feature__ttl">日本人指導歴10年以上の<br>経験豊富な講師陣</h3>
            <p class="p-feature__txt">
              Engressの講師陣は、もともと日本人向けにTOEFLを教えていた人が大多数です。また全メンバーがTESOL(英語教授法)を取得しており、知識と経験を兼ね備えている教育のプロフェッショナルです。
            </p>
          </div>
          <figure class="p-feature__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/feature02.jpg" alt="">
          </figure>
        </li>
        <li class="l-features__item p-feature">
          <div class="p-feature__body">
            <div class="p-feature__num">特長 ３</div>
            <h3 class="p-feature__ttl">平均3ヶ月で<br class="u-only-sp">TOEFL iBT20点アップ</h3>
            <p class="p-feature__txt">
              Engressは高校生からサラリーマンまで様々な年齢層の方々が通われていますが、完全オーダーメイドのカリキュラムで柔軟に対応しているため、平均3ヶ月でTOEFLスコアを20点アップさせています。
            </p>
          </div>
          <figure class="p-feature__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/feature03.jpg" alt="">
          </figure>
        </li>
      </ul>
    </div>
  </section>

  <section class="l-container l-container--sp-full">
    <div class="p-fp-plan">
      <h2 class="p-fp-plan__ttl">Engressの料金プランはこちら</h2>
      <div class="p-fp-plan__btn-wrapper">
        <a href="<?php echo home_url('plan'); ?>" class="c-btn c-btn--ghost p-fp-plan__btn">料金を見てみる</a>
      </div>
    </div>
  </section>

  <section class="p-fp-section p-fp-section--success">
    <div class="p-fp-section__inner l-container">
      <h2 class="p-fp-section__ttl">TOEFL成功事例</h2>
      <ul class="p-fp-section__content l-successes">
        <li class="l-successes__item p-success">
          <h3 class="p-success__ttl"><?php the_field('title1'); ?></h3>
          <figure class="p-success__img">
            <img src="<?php echo wp_get_attachment_image_url(get_field('image1')); ?>" alt="">
          </figure>
          <div class="p-success__body">
            <div class="p-success__row">
              <div class="p-success__info p-success__info--100"><?php the_field('type1'); ?></div>
              <div class="p-success__info p-success__info--full"><?php the_field('name1'); ?></div>
            </div>
            <div class="p-success__row">
              <div class="p-success__info p-success__info--full"><?php the_field('detail1'); ?></div>
            </div>
          </div>
        </li>
        <li class="l-successes__item p-success">
          <h3 class="p-success__ttl"><?php the_field('title2'); ?></h3>
          <figure class="p-success__img">
            <img src="<?php echo wp_get_attachment_image_url(get_field('image2')); ?>" alt="">
          </figure>
          <div class="p-success__body">
            <div class="p-success__row">
              <div class="p-success__info p-success__info--100"><?php the_field('type2'); ?></div>
              <div class="p-success__info p-success__info--full"><?php the_field('name2'); ?></div>
            </div>
            <div class="p-success__row">
              <div class="p-success__info p-success__info--full"><?php the_field('detail2'); ?></div>
            </div>
          </div>
        </li>
        <li class="l-successes__item p-success">
          <h3 class="p-success__ttl"><?php the_field('title3'); ?></h3>
          <figure class="p-success__img">
            <img src="<?php echo wp_get_attachment_image_url(get_field('image3')); ?>" alt="">
          </figure>
          <div class="p-success__body">
            <div class="p-success__row">
              <div class="p-success__info p-success__info--100"><?php the_field('type3'); ?></div>
              <div class="p-success__info p-success__info--full"><?php the_field('name3'); ?></div>
            </div>
            <div class="p-success__row">
              <div class="p-success__info p-success__info--full"><?php the_field('detail3'); ?></div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <section class="p-fp-section p-fp-section--flow">
    <div class="l-container p-fp-section__inner">
      <h2 class="p-fp-section__ttl">ご利用の流れ</h2>
      <ol class="p-fp-section__content l-flow">
        <li class="l-flow__item p-step">
          <div class="p-step__num">01</div>
          <div class="p-step__body">
            <h3 class="p-step__ttl">お問い合わせ</h3>
            <p class="p-step__txt">まずはフォームまたはお電話からお申し込みください。</p>
          </div>
        </li>
        <li class="l-flow__item p-step">
          <div class="p-step__num">02</div>
          <div class="p-step__body">
            <h3 class="p-step__ttl">ヒアリング</h3>
            <p class="p-step__txt">現在の学習状況やTOEFLスコア、目標のスコアをお聞きします。</p>
          </div>
        </li>
        <li class="l-flow__item p-step">
          <div class="p-step__num">03</div>
          <div class="p-step__body">
            <h3 class="p-step__ttl">学習プランのご提供</h3>
            <p class="p-step__txt">目標達成のために最適な学習プランをご提案致します。</p>
          </div>
        </li>
        <li class="l-flow__item p-step">
          <div class="p-step__num">04</div>
          <div class="p-step__body">
            <h3 class="p-step__ttl">ご入会</h3>
            <p class="p-step__txt">お申込み完了後、レッスンがスタートします。</p>
          </div>
        </li>
      </ol>
    </div>
  </section>

  <section class="p-fp-section p-fp-section--faq">
    <div class="l-container p-fp-section__inner">
      <h2 class="p-fp-section__ttl">よくある質問</h2>
      <dl class="p-fp-section__content l-qa-list">
        <div class="l-qa-list__item p-qa">
          <button class="p-qa__btn js-qa-btn"></button>
          <dt class="p-qa__q js-qa-q">Engressはサラリーマンでも学習を続けられるでしょうか？</dt>
          <dd class="p-qa__a" aria-hidden="true">Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</dd>
        </div>
        <div class="l-qa-list__item p-qa">
          <button class="p-qa__btn js-qa-btn"></button>
          <dt class="p-qa__q js-qa-q">教材はオリジナルのものを使用しているのでしょうか？</dt>
          <dd class="p-qa__a">Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</dd>
        </div>
        <div class="l-qa-list__item p-qa">
          <button class="p-qa__btn js-qa-btn"></button>
          <dt class="p-qa__q js-qa-q">講師に日本人はいますか？</dt>
          <dd class="p-qa__a">Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</dd>
        </div>
        <div class="l-qa-list__item p-qa">
          <button class="p-qa__btn js-qa-btn"></button>
          <dt class="p-qa__q js-qa-q">TOEFL以外の海外大学合格のサポートもしてもらえるのでしょうか？</dt>
          <dd class="p-qa__a">Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</dd>
        </div>
      </dl>
    </div>
  </section>

  <div class="l-fp-post l-container">
    <section class="l-fp-post__left p-fp-section p-fp-section--blog">
      <h2 class="p-fp-section__ttl">ブログ</h2>
      <ul class="p-fp-section__content l-blog-cards">
        <?php
        $post_pages = get_new_pages('post', 3);
        $i = 0;
        if ($post_pages->have_posts()) :
          while ($post_pages->have_posts() && $i < 3) :
            $post_pages->the_post();
            $i++;
        ?>
            <li class="l-blog-cards__item p-blog-card">
              <a href="<?php the_permalink(); ?>" class="p-blog-card__inner">
                <div class="p-blog-card__body">
                  <h3 class="p-blog-card__ttl u-underline"><?php echo cut_text(get_the_title(), 40); ?></h3>
                  <time datetime="<?php the_time('c') ?>" class="p-blog-card__date"><?php the_time('Y-m-d') ?></time>
                </div>
                <div class="p-blog-card__thumb">
                  <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('medium'); ?>
                  <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/no-image.png" alt="No Image">
                  <?php endif; ?>
                  <?php
                  $cats = get_the_category();
                  if ($cats[0]) :
                  ?>
                    <div class="p-blog-card__cat"><?php echo $cats[0]->name; ?></div>
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
    </section>
    <section class="l-fp-post__right p-fp-section p-fp-section--news">
      <h2 class="p-fp-section__ttl">お知らせ</h2>
      <ul class="p-fp-section__content l-headlines">
        <?php
        $post_pages = get_new_pages('news', 3);
        if ($post_pages->have_posts()) :
          while ($post_pages->have_posts()) :
            $post_pages->the_post();
        ?>
            <li class="l-headlines__item p-headline">
              <a href="<?php the_permalink(); ?>" class="p-headline__inner">
                <time datetime="<?php the_time('c') ?>" class="p-headline__date"><?php the_time('Y-m-d') ?></time>
                <h3 class="p-headline__ttl u-underline"><?php echo cut_text(get_the_title(), 40); ?></h3>
              </a>
            </li>
        <?php
          endwhile;
        endif;
        wp_reset_postdata();
        ?>
      </ul>
    </section>
  </div>
</main>

<?php get_footer(); ?>