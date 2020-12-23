<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<section class="top-topic mt-5 py-5 bg-light">
  <div class="container-small">
    <h2 class="ttl-2 mb-5">トピックス<span class="ttl-2-en en">topicks</span></h2>
    <!-- ▼ 記事の取得 -->
    <div class="slick-news news-img__wrap">
      <?php
      $args = [
          'posts_per_page' => 4,
          'post_type' => 'post',
          'category' => 'news',
          'orderby' => 'date',
          'order' => 'ASC',
      ];
      $my_posts = get_posts($args);
      foreach ($my_posts as $post):
      setup_postdata($post);
      $id = get_the_ID();
      $thumbnail = get_the_post_thumbnail_url($id, 'large');
      $ttl = get_the_title();
      $permalink = get_the_permalink();
      ?>
      <!-- ▼ 繰り返すコンテンツ -->
      <div class="news-img__item">
        <div class="news-img__item__img">
          <a class="d-block" hraf="<?php echo $permalink ?>">
            <?php if ( has_post_thumbnail()): ?>
              <!-- サムネイルがあったら -->
              <img class="w-100" src="<?php echo $thumbnail; ?>" alt="<?php echo $ttl ?>">
              <?php else: ?>
                <!-- サムネイルがなかったら -->
              <img class="w-100" src="<?php echo $wp_url ?>/dist/images/news_imgnone.png" alt="<?php get_the_title() ?>" srcset="<?php echo $wp_url ?>/dist/images/news_imgnone.png 1x, <?php echo $wp_url ?>/dist/images/news_imgnone@2x.png 2x">
            <?php endif; ?>
          </a>
        </div>
        <div class="news-img__item__txt">
          <a class="d-block text-weight-bold mt-4 mb-3" hraf="<?php echo $permalink ?>"><?php echo $ttl ?></a>
        </div>
      </div>
      <!-- ▲ 繰り返すコンテンツ -->
      <?php endforeach; wp_reset_postdata(); ?>
    </div>
    <!-- ▲ 記事の取得 -->
  </div>
</section>

<section class="top-concept my-5 py-5">
  <div class="container text-center">
    <!-- ▼ テキスト -->
    <div class="top-concept-deco">
      <h2 class="ttl-2 mb-5">むさしのおもい<span class="ttl-2-en en">concept</span></h2>
      <p class="mt-4 pb-3 lh-large text-center mincho">ネタは勿論、米や酢、お茶や醤油、わさび、海苔、それに店内の清潔さ、
      <br class="d-none d-md-block">スタッフの気配り心配りと細部にまでしっかりこだわっています。
      <br class="d-none d-md-block">むさしのすしは、1977年創業以来、独自の美味への道を貫き、
      <br class="d-none d-md-block">オリジナルの食材、調理、調味にこだわりつづけています。
      <br class="d-none d-md-block">その基本にあるのが真心です。</p>
      <a class="link-arrow mt-5 f-18 mincho" href="<?php echo $home ?>/about/">詳しくみる</a>
    </div>
    <!-- ▲ テキスト -->
    <!-- ▼ 下層ページへのリンク -->
    <div class="top-concept-link d-block d-md-flex mt-5 justify-content-between">
      <a class="top-concept-link-inner" href="<?php echo $home ?>/menu/">
        <p class="top-concept-link-page text-white mincho f-24">お<br>品<br>書<br>き</p>
        <p class="top-concept-link-more text-white mincho m-0 f-16">詳しくみる</p>
      </a>
      <a class="top-concept-link-inner" href="<?php echo $home ?>/about/">
        <p class="top-concept-link-page text-white mincho f-24">こ<br>だ<br>わ<br>り</p>
        <p class="top-concept-link-more text-white mincho m-0 f-16">詳しくみる</p>
      </a>
      <a class="top-concept-link-inner" href="<?php echo $home ?>/menu/">
        <div class="top-concept-link-page">
          <div class="2lines">
            <p class="2lines-item text-white mincho f-24">宅<br>配</p>
            <p class="2lines-item text-white mincho f-24">お<br>持<br>ち<br>帰<br>り</p>
          </div>
        </div>
        <p class="top-concept-link-more text-white mincho m-0 f-16">詳しくみる</p>
      </a>
    </div>
    <!-- ▲ 下層ページへのリンク -->
  </div>
</section>

<a class="btn-primary" href="#"><span>店舗一覧を見る</span></a>

<?php get_footer();
