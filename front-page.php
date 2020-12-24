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
      <!-- ▼ ループするコンテンツ -->
      <div class="news-img__item">
        <div class="news-img__item__img">
          <a class="d-block" hraf="<?php echo $permalink ?>">
            <?php if ( has_post_thumbnail()): ?>
              <!-- サムネイルがあったら -->
              <img class="w-100" src="<?php echo $thumbnail; ?>" alt="<?php echo $ttl ?>">
              <?php else: ?>
                <!-- サムネイルがなかったら -->
              <img class="w-100" src="<?php echo $wp_url ?>/dist/images/news_imgnone.png" alt="noimage" srcset="<?php echo $wp_url ?>/dist/images/news_imgnone.png 1x, <?php echo $wp_url ?>/dist/images/news_imgnone@2x.png 2x">
            <?php endif; ?>
          </a>
        </div>
        <div class="news-img__item__txt">
          <a class="d-block text-weight-bold mt-4 mb-3" hraf="<?php echo $permalink ?>"><?php echo $ttl ?></a>
        </div>
      </div>
      <!-- ▲ ループするコンテンツ -->
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
        <p class="top-concept-link-page text-white mincho">お<br>品<br>書<br>き</p>
        <p class="top-concept-link-more text-white mincho m-0 f-16">詳しくみる</p>
      </a>
      <a class="top-concept-link-inner" href="<?php echo $home ?>/about/">
        <p class="top-concept-link-page text-white mincho">こ<br>だ<br>わ<br>り</p>
        <p class="top-concept-link-more text-white mincho m-0 f-16">詳しくみる</p>
      </a>
      <a class="top-concept-link-inner" href="<?php echo $home ?>/menu/">
        <div class="top-concept-link-page">
          <div class="2lines">
            <p class="2lines-item text-white mincho">宅<br>配</p>
            <p class="2lines-item text-white mincho">お<br>持<br>ち<br>帰<br>り</p>
          </div>
        </div>
        <p class="top-concept-link-more text-white mincho m-0 f-16">詳しくみる</p>
      </a>
    </div>
    <!-- ▲ 下層ページへのリンク -->
  </div>
</section>

<section class="top-shop my-5 py-5">
  <h2 class="ttl-2 mb-5">店舗紹介<span class="ttl-2-en en">shop</span></h2>
  <!-- ▼ 店舗一覧 -->
  <div class="d-block d-md-flex">
    <!-- ▼ 三条本店 -->
    <div class="top-shop-item col-12 col-md-3 m-0 p-0 d-flex d-md-block">
      <div class="top-shop-item-img">
        <img class="w-100" src="<?php echo $wp_url ?>/dist/images/top_shop_1.png" alt="三条本店 外観" srcset="<?php echo $wp_url ?>/dist/images/top_shop_1.png 1x, <?php echo $wp_url ?>/dist/images/top_shop_1@2x.png 2x">
      </div>
      <div class="top-shop-item-text deco-1">
        <div class="top-shop-item-text-inner">
          <h3 class="mincho f-18 mb-4 text-dark">三条本店</h3>
          <p class="m-0">〒604-8005<br>京都市中京区河原町三条上ル恵比須町440</p>
          <p class="m-0"><img class="mr-2 d-inline" src="<?php echo $wp_url ?>/dist/images/icon_walk.svg" alt="電車のアイコン">京都市営東西線 京都市役所前駅 3番口 徒歩4分</p>
        </div>
      </div>
    </div>
    <!-- ▲ 三条本店 -->
    <!-- ▼ 京都駅八条口店 -->
    <div class="top-shop-item col-12 col-md-3 m-0 p-0 d-flex d-md-block">
      <div class="top-shop-item-img">
        <img class="w-100" src="<?php echo $wp_url ?>/dist/images/top_shop_2.png" alt="京都駅八条口店 外観" srcset="<?php echo $wp_url ?>/dist/images/top_shop_2.png 1x, <?php echo $wp_url ?>/dist/images/top_shop_2@2x.png 2x">
      </div>
      <div class="top-shop-item-text deco-1">
        <div class="top-shop-item-text-inner">
          <h3 class="mincho f-18 mb-4 text-dark">京都駅八条口店</h3>
          <p class="m-0">〒600-8214<br>京都市下京区東塩小路高倉町8-3京都駅八条口構内 アスティロード京都おもてなし小路</p>
          <p class="m-0"><img class="mr-2 d-inline" src="<?php echo $wp_url ?>/dist/images/icon_car.svg" alt="電車のアイコン">京都駅八条口近く</p>
        </div>
      </div>
    </div>
    <!-- ▲ 京都駅八条口店 -->
    <!-- ▼ 上堀川店 -->
    <div class="top-shop-item col-12 col-md-3 m-0 p-0 d-flex d-md-block">
      <div class="top-shop-item-img">
        <img class="w-100" src="<?php echo $wp_url ?>/dist/images/top_shop_3.png" alt="上堀川店 外観" srcset="<?php echo $wp_url ?>/dist/images/top_shop_3.png 1x, <?php echo $wp_url ?>/dist/images/top_shop_3@2x.png 2x">
      </div>
      <div class="top-shop-item-text deco-1">
        <div class="top-shop-item-text-inner">
          <h3 class="mincho f-18 mb-4 text-dark">上堀川店</h3>
          <p class="m-0">〒603-8115<br>京都府京都市北区紫竹下本町28</p>
          <p class="m-0"><img class="mr-2 d-inline" src="<?php echo $wp_url ?>/dist/images/icon_car.svg" alt="電車のアイコン">京都市営地下鉄北大路駅から車で5分</p>
        </div>
      </div>
    </div>
    <!-- ▲ 上堀川店 -->
    <!-- ▼ Porta店 -->
    <div class="top-shop-item col-12 col-md-3 m-0 p-0 d-flex d-md-block">
      <div class="top-shop-item-img">
        <img class="w-100" src="<?php echo $wp_url ?>/dist/images/top_shop_4.png" alt="Porta店 外観" srcset="<?php echo $wp_url ?>/dist/images/top_shop_4.png 1x, <?php echo $wp_url ?>/dist/images/top_shop_4@2x.png 2x">
      </div>
      <div class="top-shop-item-text deco-1">
        <div class="top-shop-item-text-inner">
          <h3 class="mincho f-18 mb-4 text-dark">Porta店</h3>
          <p class="m-0">京都市下京区烏丸通塩小路下る東塩小路町902番地<br>京都駅前地下街ポルタ内</p>
          <p class="m-0"><img class="mr-2 d-inline" src="<?php echo $wp_url ?>/dist/images/icon_train.svg" alt="電車のアイコン">京都市営地下鉄烏丸線「京都駅」直結</p>
        </div>
      </div>
    </div>
    <!-- ▲ Porta店 -->
  </div>
  <!-- ▲ 店舗一覧 -->
  <div class="top-shop-deco deco-1">
    <a class="btn-primary" href="#"><span>店舗一覧を見る</span></a>
  </div>
</section>

<?php get_footer();
