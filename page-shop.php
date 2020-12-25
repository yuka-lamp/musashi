<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); the_post(); ?>

<!-- ▼ 三条本店 -->
<section class="shop__item">
  <div class="container-small">
    <h3 class="shop__item-ttl d-block text-center f-24 mincho">三条本店</h3>
    <div class="d-block d-lg-flex justify-content-between">
      <!-- ▼ 写真 + 概要 -->
      <div class="shop__item-about">
        <div class="shop__item-about-img">
          <img class="w-100" src="<?php echo $wp_url ?>/dist/images/top_shop_1.png" alt="三条本店" srcset="<?php echo $wp_url ?>/dist/images/top_shop_1.png 1x, <?php echo $wp_url ?>/dist/images/top_shop_1@2x.png 2x">
        </div>
        <p class="shop__item-about-text">1977年創業以来、職人がさばき握る回転寿司店で多くの常連のお客様に愛され、観光でこられた方々や外国の方にも安心してお寿司を食べていただけるよう、日本一親切なお店を目指して頑張っております。</p>
        <!-- ▼ マーク -->
        <div class="shop__item-about-mark">
          <div class="shop__item-about-mark-item text-center d-inline-block mr-2">
            <div class="shop__item-about-mark-img">
              <img src="<?php echo $wp_url ?>/dist/images/shop_mark_eatin.png" alt="イートイン対応" srcset="<?php echo $wp_url ?>/dist/images/shop_mark_eatin.png 1x, <?php echo $wp_url ?>/dist/images/shop_mark_eatin@2x.png 2x">
            </div>
            <p class="shop__item-about-mark-text">イートイン<br>対応</p>
          </div>
          <div class="shop__item-about-mark-item text-center d-inline-block">
            <div class="shop__item-about-mark-img">
              <img src="<?php echo $wp_url ?>/dist/images/shop_mark_net.png" alt="お持ち帰りネット予約対応" srcset="<?php echo $wp_url ?>/dist/images/shop_mark_net.png 1x, <?php echo $wp_url ?>/dist/images/shop_mark_net@2x.png 2x">
            </div>
            <p class="shop__item-about-mark-text">お持ち帰り<br>ネット予約対応</p>
          </div>
        </div>
        <!-- ▲ マーク -->
      </div>
      <!-- ▲ 写真 + 概要 -->
      <!-- ▼ テーブル -->
      <div class="shop__item-table table deco-1">
        <div class="table-lines d-block">
          <p class="shop__item-table-ttl text-primary mb-2">住所</p>
          <p class="mb-2 d-block">〒604-8005<br>京都市中京区河原町三条上ル恵比須町440</p>
          <a href="https://goo.gl/maps/Ayi7XDgpyXt38nKAA" target="_blank" class="link-arrow f-16">googlemapをみる</a>
        </div>
        <div class="table-lines d-block">
          <p class="shop__item-table-ttl text-primary mb-2">電話番号</p>
          <a href="tel:075-222-0634" class="underline f-16">075-222-0634</a>
        </div>
        <div class="table-lines d-block">
          <p class="shop__item-table-ttl text-primary mb-2">座席数</p>
          <p class="w-100 m-0">1F／カウンター36席<br>2F／BOX5席・カウンター8席</p>
        </div>
        <div class="table-lines d-block">
          <p class="shop__item-table-ttl text-primary mb-2">営業時間</p>
          <p class="m-0">11:00～21:45（LO.21:30）<br>※最終入店は21:20</p>
        </div>
        <div class="table-lines d-block">
          <p class="shop__item-table-ttl text-primary mb-2">定休日</p>
          <p class="m-0">1月1日（元旦のみ）</p>
        </div>
      </div>
      <!-- ▲ テーブル -->
    </div>
  </div>
</section>
<!-- ▲ 三条本店 -->

<!-- ▼ 京都駅八条口店 -->
<section class="shop__item mt-5">
  <div class="container-small">
    <h3 class="shop__item-ttl d-block text-center f-24 mincho">京都駅八条口店</h3>
    <div class="d-block d-lg-flex justify-content-between">
      <!-- ▼ 写真 + 概要 -->
      <div class="shop__item-about">
        <div class="shop__item-about-img">
          <img class="w-100" src="<?php echo $wp_url ?>/dist/images/top_shop_2.png" alt="京都駅八条口店" srcset="<?php echo $wp_url ?>/dist/images/top_shop_2.png 1x, <?php echo $wp_url ?>/dist/images/top_shop_2@2x.png 2x">
        </div>
        <p class="shop__item-about-text">京都の町家をイメージしてシンプルで落ち着ける空間を作り、心より皆様のご来店をお待ちしております。昼間のピーク時間は12時～14時。夕方のピークは18時～20時30分頃です。その他の時間が狙い目です。</p>
        <!-- ▼ マーク -->
        <div class="shop__item-about-mark">
          <div class="shop__item-about-mark-item text-center d-inline-block mr-2">
            <div class="shop__item-about-mark-img">
              <img src="<?php echo $wp_url ?>/dist/images/shop_mark_eatin.png" alt="イートイン対応" srcset="<?php echo $wp_url ?>/dist/images/shop_mark_eatin.png 1x, <?php echo $wp_url ?>/dist/images/shop_mark_eatin@2x.png 2x">
            </div>
            <p class="shop__item-about-mark-text">イートイン<br>対応</p>
          </div>
          <div class="shop__item-about-mark-item text-center d-inline-block">
            <div class="shop__item-about-mark-img">
              <img src="<?php echo $wp_url ?>/dist/images/shop_mark_net.png" alt="お持ち帰りネット予約対応" srcset="<?php echo $wp_url ?>/dist/images/shop_mark_net.png 1x, <?php echo $wp_url ?>/dist/images/shop_mark_net@2x.png 2x">
            </div>
            <p class="shop__item-about-mark-text">お持ち帰り<br>ネット予約対応</p>
          </div>
        </div>
        <!-- ▲ マーク -->
      </div>
      <!-- ▲ 写真 + 概要 -->
      <!-- ▼ テーブル -->
      <div class="shop__item-table table deco-1">
        <div class="table-lines d-block">
          <p class="shop__item-table-ttl text-primary mb-2">住所</p>
          <p class="mb-2 d-block">〒600-8214<br>京都市下京区東塩小路高倉町8-3<br>京都駅八条口構内 アスティロード京都おもてなし小路</p>
          <a href="https://goo.gl/maps/Mwt4L2DNC8rozUoS9" target="_blank" class="link-arrow f-16">googlemapをみる</a>
        </div>
        <div class="table-lines d-block">
          <p class="shop__item-table-ttl text-primary mb-2">電話番号</p>
          <a href="tel:075-662-0634" class="underline f-16">075-662-0634</a>
        </div>
        <div class="table-lines d-block">
          <p class="shop__item-table-ttl text-primary mb-2">座席数</p>
          <p class="w-100 m-0">カウンター34席</p>
        </div>
        <div class="table-lines d-block">
          <p class="shop__item-table-ttl text-primary mb-2">営業時間</p>
          <p class="m-0">10:30～21:45（LO.21:30）<br>※最終入店は21:20<br>※テイクアウトは9:00～21:45</p>
        </div>
        <div class="table-lines d-block">
          <p class="shop__item-table-ttl text-primary mb-2">定休日</p>
          <p class="m-0">年中無休</p>
        </div>
      </div>
      <!-- ▲ テーブル -->
    </div>
  </div>
</section>
<!-- ▲ 京都駅八条口店 -->

<!-- ▼ 上堀川店 -->
<section class="shop__item mt-5">
  <div class="container-small">
    <h3 class="shop__item-ttl d-block text-center f-24 mincho">上堀川店</h3>
    <div class="d-block d-lg-flex justify-content-between">
      <!-- ▼ 写真 + 概要 -->
      <div class="shop__item-about">
        <div class="shop__item-about-img">
          <img class="w-100" src="<?php echo $wp_url ?>/dist/images/top_shop_3.png" alt="上堀川店" srcset="<?php echo $wp_url ?>/dist/images/top_shop_3.png 1x, <?php echo $wp_url ?>/dist/images/top_shop_3@2x.png 2x">
        </div>
        <p class="shop__item-about-text">お持ち帰りの専門店として営業しております。<br>ご注文はスマホ・インターネットからのご予約に限ります。店頭でのご注文及びお支払いには対応しておりません。店内でのご飲食もできませんので予めご了承下さい。</p>
        <!-- ▼ マーク -->
        <div class="shop__item-about-mark">
          <div class="shop__item-about-mark-item text-center d-inline-block">
            <div class="shop__item-about-mark-img">
              <img src="<?php echo $wp_url ?>/dist/images/shop_mark_net.png" alt="お持ち帰りネット予約対応" srcset="<?php echo $wp_url ?>/dist/images/shop_mark_net.png 1x, <?php echo $wp_url ?>/dist/images/shop_mark_net@2x.png 2x">
            </div>
            <p class="shop__item-about-mark-text">お持ち帰り<br>ネット予約対応</p>
          </div>
        </div>
        <!-- ▲ マーク -->
      </div>
      <!-- ▲ 写真 + 概要 -->
      <!-- ▼ テーブル -->
      <div class="shop__item-table table deco-1">
        <div class="table-lines d-block">
          <p class="shop__item-table-ttl text-primary mb-2">住所</p>
          <p class="mb-2 d-block"> 〒603-8115<br>京都府京都市北区紫竹下本町２８</p>
          <a href="https://goo.gl/maps/KvypJBcCQC9RFUxZ6" target="_blank" class="link-arrow f-16">googlemapをみる</a>
        </div>
        <div class="table-lines d-block">
          <p class="shop__item-table-ttl text-primary mb-2">電話番号</p>
          <a href="tel:080-2424-0760" class="underline f-16">080-2424-0760</a>
        </div>
        <div class="table-lines d-block">
          <p class="shop__item-table-ttl text-primary mb-2">受け取り時間</p>
          <p class="w-100 m-0">11:30～19:00</p>
        </div>
      </div>
      <!-- ▲ テーブル -->
    </div>
  </div>
</section>
<!-- ▲ 上堀川店 -->

<!-- ▼ porta店 -->
<section class="shop__item mt-5">
  <div class="container-small">
    <h3 class="shop__item-ttl d-block text-center f-24 mincho">porta店</h3>
    <div class="d-block d-lg-flex justify-content-between">
      <!-- ▼ 写真 + 概要 -->
      <div class="shop__item-about">
        <div class="shop__item-about-img">
          <img class="w-100" src="<?php echo $wp_url ?>/dist/images/top_shop_1.png" alt="porta店" srcset="<?php echo $wp_url ?>/dist/images/top_shop_1.png 1x, <?php echo $wp_url ?>/dist/images/top_shop_1@2x.png 2x">
        </div>
        <p class="shop__item-about-text">Porta東海エリアにあるお持ち帰り専門店です。<br>定番の人気商品に加えて、ポルタ店限定のにぎり寿司も販売しております。ぜひ一度お立ち寄りくださいませ！</p>
        <!-- ▼ マーク -->
        <div class="shop__item-about-mark">
          <div class="shop__item-about-mark-item text-center d-inline-block mr-2">
            <div class="shop__item-about-mark-img">
              <img src="<?php echo $wp_url ?>/dist/images/shop_mark_takeout.png" alt="イートイン対応" srcset="<?php echo $wp_url ?>/dist/images/shop_mark_takeout.png 1x, <?php echo $wp_url ?>/dist/images/shop_mark_takeout@2x.png 2x">
            </div>
            <p class="shop__item-about-mark-text">お持ち帰り<br>対応</p>
          </div>
        </div>
        <!-- ▲ マーク -->
      </div>
      <!-- ▲ 写真 + 概要 -->
      <!-- ▼ テーブル -->
      <div class="shop__item-table table deco-1">
        <div class="table-lines d-block">
          <p class="shop__item-table-ttl text-primary mb-2">住所</p>
          <p class="mb-2 d-block">京都市下京区烏丸通塩小路下る東塩小路町902番地<br>京都駅前地下街ポルタ内</p>
          <a href="https://goo.gl/maps/8AHBeWvocK7S7WaJ8" target="_blank" class="link-arrow f-16">googlemapをみる</a>
        </div>
        <div class="table-lines d-block">
          <p class="shop__item-table-ttl text-primary mb-2">受け取り時間</p>
          <p class="w-100 m-0">11:00～19:00</p>
        </div>
      </div>
      <!-- ▲ テーブル -->
    </div>
  </div>
</section>
<!-- ▲ porta店 -->


<?php get_footer();
