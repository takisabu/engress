<?php get_header(); ?>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>

    <main class="l-contents">
      <section class="l-mv p-mv p-mv--plan">
        <div class="p-mv__content l-container">
          <h1 class="p-mv__ttl"><?php the_title(); ?></h1>
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

      <section class="p-cp-section p-cp-section--plan">
        <div class="l-container p-cp-section__inner">
          <h2 class="p-cp-section__ttl">料金体系</h2>
          <div class="p-cp-section__content p-plan">
            <div class="p-plan__formula">
              <div class="p-plan__formula-item">入会金 39,800円</div>
              <div class="p-plan__formula-plus"></div>
              <div class="p-plan__formula-item">月額費用</div>
            </div>
            <p class="p-plan__txt">
              Engressのカリキュラムは完全オーダーメイドのため、カリキュラム内のサポート内容によって料金が変動します。おすすめのスタンダードプランでは、進学先に合わせたサポートまで包括的に行います。
            </p>
          </div>
        </div>
      </section>

      <section class="p-cp-section p-cp-section--plan-detail">
        <div class="l-container p-cp-section__inner">
          <h2 class="p-cp-section__ttl">料金表</h2>
          <div class="p-cp-section__content p-cp-section__content--scroll js-scrollable">
            <ul class="l-plan-cards">
              <li class="l-plan-cards__item p-plan-card">
                <div class="p-plan-card__header">
                  <h3 class="p-plan-card__ttl">基礎プラン</h3>
                </div>
                <div class="p-plan-card__body">
                  <div class="p-plan-card__price"><?php the_field('price1'); ?></div>
                  <div class="p-plan-card__monthly">*月額（税抜価格）</div>
                  <ul class="p-plan-card__features">
                    <li class="p-plan-card__feature"><span class="p-plan-card__feature-check">カリキュラム作成</span></li>
                    <li class="p-plan-card__feature"><span class="p-plan-card__feature-check">TOEFL学習サポート</span></li>
                    <li class="p-plan-card__feature"><span class="p-plan-card__feature-check">週一回のビデオMTG</span></li>
                  </ul>
                </div>
              </li>
              <li class="l-plan-cards__item p-plan-card">
                <div class="p-plan-card__header">
                  <h3 class="p-plan-card__ttl">演習プラン</h3>
                </div>
                <div class="p-plan-card__body">
                  <div class="p-plan-card__price"><?php the_field('price2'); ?></div>
                  <div class="p-plan-card__monthly">*月額（税抜価格）</div>
                  <ul class="p-plan-card__features">
                    <li class="p-plan-card__feature"><span class="p-plan-card__feature-check">カリキュラム作成</span></li>
                    <li class="p-plan-card__feature"><span class="p-plan-card__feature-check">TOEFL学習サポート</span></li>
                    <li class="p-plan-card__feature"><span class="p-plan-card__feature-check">週一回のビデオMTG</span></li>
                    <li class="p-plan-card__feature"><span class="p-plan-card__feature-check">月二回の模試（解説付き）</span></li>
                  </ul>
                </div>
              </li>
              <li class="l-plan-cards__item p-plan-card p-plan-card--strong">
                <div class="p-plan-card__header">
                  <h3 class="p-plan-card__ttl">おすすめ<br>志望校対策プラン</h3>
                </div>
                <div class="p-plan-card__body">
                  <div class="p-plan-card__price"><?php the_field('price3'); ?></div>
                  <div class="p-plan-card__monthly">*月額（税抜価格）</div>
                  <ul class="p-plan-card__features">
                    <li class="p-plan-card__feature"><span class="p-plan-card__feature-check">カリキュラム作成</span></li>
                    <li class="p-plan-card__feature"><span class="p-plan-card__feature-check">TOEFL学習サポート</span></li>
                    <li class="p-plan-card__feature"><span class="p-plan-card__feature-check">週一回のビデオMTG</span></li>
                    <li class="p-plan-card__feature"><span class="p-plan-card__feature-check">月二回の模試（解説付き）</span></li>
                    <li class="p-plan-card__feature"><span class="p-plan-card__feature-check">週一の英語面接対策</span></li>
                  </ul>
                </div>
              </li>
              <li class="l-plan-cards__item p-plan-card">
                <div class="p-plan-card__header">
                  <h3 class="p-plan-card__ttl">フレックスプラン</h3>
                </div>
                <div class="p-plan-card__body">
                  <div class="p-plan-card__price"><?php the_field('price4'); ?></div>
                  <div class="p-plan-card__monthly">*月額（税抜価格）</div>
                  <ul class="p-plan-card__features">
                    <li class="p-plan-card__feature">＊別途ご相談ください</li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </section>
    </main>

  <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>