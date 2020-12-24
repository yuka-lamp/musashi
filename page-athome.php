<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); the_post(); ?>

<!-- ▼ 注文ページ -->
<section class="athome__order">
  <div class="container-small">
    <h2 class="ttl-2 mb-5">注文ページ<span class="ttl-2-en en">order</span></h2>
    <div class="athome__order-content d-block d-md-flex justify-content-center align-items-center">
      <!-- ▼ テキスト -->
      <div class="athome__order-text text-center col-12 col-md-6">
        <img class="athome__order-text-logo" src="<?php echo $wp_url ?>/dist/images/home_order_logo.png" alt="寿司のむさし" srcset="<?php echo $wp_url ?>/dist/images/home_order_logo.png 1x, <?php echo $wp_url ?>/dist/images/home_order_logo@2x.png 2x">
        <p class="mincho f-18 m-0">公式注文ページ</p>
        <p class="athome__order-text-text">ネット注文でお近くのむさしに取りに行くだけ、<br>デリバリーは京都市内200円でお届け！</p>
        <a class="btn-primary mt-0" href="https://musashi.take-eats.jp/" target="_blank"><span>公式注文ページはこちら</span></a>
      </div>
      <!-- ▲ テキスト -->
      <!-- ▼ 写真 -->
      <div class="athome__order-img col-12 col-md-6">
        <img class="d-none d-md-block" src="<?php echo $wp_url ?>/dist/images/home_order_about_pc.png" alt="オトクなポイント貯まるむさしの公式注文ページ" srcset="<?php echo $wp_url ?>/dist/images/home_order_about_pc.png 1x, <?php echo $wp_url ?>/dist/images/home_order_about_pc@2x.png 2x">
        <img class="d-block d-md-none" src="<?php echo $wp_url ?>/dist/images/home_order_about_sp.png" alt="オトクなポイント貯まるむさしの公式注文ページ" srcset="<?php echo $wp_url ?>/dist/images/home_order_about_sp.png 1x, <?php echo $wp_url ?>/dist/images/home_order_about_sp@2x.png 2x">
      </div>
      <!-- ▲ 写真 -->
    </div>
  </div>
</section>
<!-- ▲ 注文ページ -->

<!-- ▼ らくらくネット注文 -->
<section class="athome__feature mt-5 py-5">
  <h2 class="ttl-2 mb-5">らくらくネット注文<span class="ttl-2-en en">feature</span></h2>
  <!-- ▼ ポイント一覧 -->
  <div class="athome__feature-bg">
    <div class="container-small d-block d-md-flex justify-content-between align-items-center">
      <!-- ▼ ポイント1 -->
      <div class="athome__feature-item col-12 col-md-4">
        <div class="d-flex align-items-center mb-3">
          <div class="athome__feature-item-img">
            <img src="<?php echo $wp_url ?>/dist/images/home_feature_1.png" alt="スマホから簡単に注文・決済" srcset="<?php echo $wp_url ?>/dist/images/home_feature_1.png 1x, <?php echo $wp_url ?>/dist/images/home_feature_1@2x.png 2x">
          </div>
          <h3 class="mincho f-18 ml-3 mb-0">スマホから簡単に<br>注文・決済</h3>
        </div>
        <p class="m-0">事前に決済ならびに注文を行っていただけるので、待つことなく受け取りができます。</p>
      </div>
      <!-- ▲  ポイント1-->
      <!-- ▼ ポイント2 -->
      <div class="athome__feature-item col-12 col-md-4">
        <div class="d-flex align-items-center mb-3">
          <div class="athome__feature-item-img">
            <img src="<?php echo $wp_url ?>/dist/images/home_feature_2.png" alt="会員登録なしだからいますぐ注文できる" srcset="<?php echo $wp_url ?>/dist/images/home_feature_2.png 1x, <?php echo $wp_url ?>/dist/images/home_feature_2@2x.png 2x">
          </div>
          <h3 class="mincho f-18 ml-3 mb-0">会員登録なしだから<br>いますぐ注文できる</h3>
        </div>
        <p class="m-0">事前に決済ならびに注文を行っていただけるので、待つことなく受け取りができます。</p>
      </div>
      <!-- ▲  ポイント2-->
      <!-- ▼ ポイント3 -->
      <div class="athome__feature-item col-12 col-md-4">
        <div class="d-flex align-items-center mb-3">
          <div class="athome__feature-item-img">
            <img src="<?php echo $wp_url ?>/dist/images/home_feature_3.png" alt="注文すると貰えるオトクなポイント" srcset="<?php echo $wp_url ?>/dist/images/home_feature_3.png 1x, <?php echo $wp_url ?>/dist/images/home_feature_3@2x.png 2x">
          </div>
          <h3 class="mincho f-18 ml-3 mb-0">注文すると貰える<br>オトクなポイント</h3>
        </div>
        <p class="m-0">事前に決済ならびに注文を行っていただけるので、待つことなく受け取りができます。</p>
      </div>
      <!-- ▲  ポイント3-->
    </div>
  </div>
  <!-- ▲ ポイント一覧 -->
</section>
<!-- ▲ らくらくネット注文 -->

<!-- ▼ ご注文方法 -->
<section class="athome__flow py-5">
  <h2 class="ttl-2 mb-5">ご注文方法<span class="ttl-2-en en">flow</span></h2>
    <!-- ▼ ステップ一覧 -->
    <div class="container d-flex justify-content-between align-items-center flex-wrap">
      <!-- ▼ ステップ1 -->
      <div class="athome__flow-item col-6 col-md-3 text-center">
        <h3 class="f-16">商品を選択</h3>
        <img src="<?php echo $wp_url ?>/dist/images/home_flow_1.png" alt="商品を選択" srcset="<?php echo $wp_url ?>/dist/images/home_flow_1.png 1x, <?php echo $wp_url ?>/dist/images/home_flow_1@2x.png 2x">
      </div>
      <!-- ▲  ステップ1-->
      <!-- ▼ ステップ2 -->
      <div class="athome__flow-item col-6 col-md-3 text-center">
        <h3 class="f-16">商品をカートへ</h3>
        <img src="<?php echo $wp_url ?>/dist/images/home_flow_2.png" alt="商品をカートへ" srcset="<?php echo $wp_url ?>/dist/images/home_flow_2.png 1x, <?php echo $wp_url ?>/dist/images/home_flow_2@2x.png 2x">
      </div>
      <!-- ▲  ステップ2-->
      <!-- ▼ ステップ3 -->
      <div class="athome__flow-item col-6 col-md-3 text-center">
        <h3 class="f-16">情報入力</h3>
        <img src="<?php echo $wp_url ?>/dist/images/home_flow_3.png" alt="情報入力" srcset="<?php echo $wp_url ?>/dist/images/home_flow_3.png 1x, <?php echo $wp_url ?>/dist/images/home_flow_3@2x.png 2x">
      </div>
      <!-- ▲  ステップ3-->
      <!-- ▼ ステップ4 -->
      <div class="athome__flow-item col-6 col-md-3 text-center">
        <h3 class="f-16">注文完了！</h3>
        <img src="<?php echo $wp_url ?>/dist/images/home_flow_4.png" alt="注文完了！" srcset="<?php echo $wp_url ?>/dist/images/home_flow_4.png 1x, <?php echo $wp_url ?>/dist/images/home_flow_4@2x.png 2x">
      </div>
      <!-- ▲  ステップ4-->
    </div>
    <!-- ▲  ステップ一覧-->
    <a class="btn-primary" href="https://musashi.take-eats.jp/" target="_blank"><span>公式注文ページはこちら</span></a>
</section>
<!-- ▲ ご注文方法 -->

<!-- ▼ 対応エリア・店舗 -->
<section class="athome__support py-5">
  <div class="container">
    <h2 class="ttl-2 mb-5">対応エリア・店舗<span class="ttl-2-en en">support</span></h2>
    <!-- ▼ 2カラム -->
    <div class="d-block d-md-flex justify-content-between">
      <!-- ▼ デリバリーの対応地域 -->
      <div class="col-12 col-md-6 mb-5">
        <h3 class="athome-ttl3 f-18 mincho">デリバリーの対応地域</h3>
        <p class="font-weight-bold bg-light p-3">京都市内 (※ 一部地域を除く)</p>
        <p class="m-0">※ 以下のエリアは対応しておりません。
          <br>　 ＜北区＞中川・小野・杉阪・真弓・大森・雲ヶ畑
          <br>　 ＜右京区＞京北・嵯峨清滝・嵯峨水尾・嵯峨越畑・嵯峨樒原
          <br>　 ＜左京区＞花脊・広河原・久多・大原</p>
        <p class="m-0">※ エリア外の場合はタクシーメーター運賃で配達いたします。</p>
      </div>
      <!-- ▲ デリバリーの対応地域 -->
      <!-- ▼ お持ち帰りの対応店舗 -->
      <div class="col-12 col-md-6">
        <h3 class="athome-ttl3 f-18 mincho">お持ち帰りの対応店舗</h3>
        <!-- ▼ 三条本店 -->
        <h4 class="athome__support-ttl4 f-14">三条本店</h4>
        <table class="w-100">
          <tr class="athome__support-lines d-flex w-100">
            <td class="athome__support-item main bg-light col-5">注文可能時間</td>
            <td class="athome__support-item sub col-7">11:00~20:30</td>
          </tr>
          <tr class="athome__support-lines d-flex w-100">
            <td class="athome__support-item main bg-light col-5">お支払い方法</td>
            <td class="athome__support-item sub col-7">オンライン決済、店頭払い</td>
          </tr>
        </table>
        <!-- ▲ 三条本店 -->
        <!-- ▼ 上堀川店 -->
        <h4 class="athome__support-ttl4 f-14">上堀川店</h4>
        <table class="w-100">
          <tr class="athome__support-lines d-flex w-100">
            <td class="athome__support-item main bg-light col-5">注文可能時間</td>
            <td class="athome__support-item sub col-7">11:00〜19:00</td>
          </tr>
          <tr class="athome__support-lines d-flex w-100">
            <td class="athome__support-item main bg-light col-5">お支払い方法</td>
            <td class="athome__support-item sub col-7">オンライン決済</td>
          </tr>
        </table>
        <!-- ▲ 上堀川店 -->
        <!-- ▼ 京都駅八条口店 -->
        <h4 class="athome__support-ttl4 f-14">京都駅八条口店</h4>
        <table class="w-100">
          <tr class="athome__support-lines d-flex w-100">
            <td class="athome__support-item main bg-light col-5">注文可能時間</td>
            <td class="athome__support-item sub col-7">11:30〜19:00</td>
          </tr>
          <tr class="athome__support-lines d-flex w-100">
            <td class="athome__support-item main bg-light col-5">お支払い方法</td>
            <td class="athome__support-item sub col-7">店頭払い</td>
          </tr>
        </table>
        <!-- ▲ 京都駅八条口店 -->
      </div>
      <!-- ▲ お持ち帰りの対応店舗 -->
    </div>
    <!-- ▲ 2カラム -->
  </div>
</section>
<!-- ▲ 対応エリア・店舗 -->

<!-- ▼ お支払いについて -->
<section class="athome__payment py-5">
  <div class="container">
    <h2 class="ttl-2 mb-5">お支払いについて<span class="ttl-2-en en">payment</span></h2>
    <p class="text-center">お持ち帰りをご予約される場合は、店舗によってお支払い方法が異なりますのでご注意ください。<br>デリバリーのご予約はオンライン決済、PayPay支払いのみになります。</p>
    <div class="athome__payment-card">
      <h3 class="m-0 font-weight-bold bg-light f-14 text-center py-3">利用可能なお支払い方法</h3>
      <div class="text-center py-4">
        <img class="athome__payment-card-img d-inline" src="<?php echo $wp_url ?>/dist/images/home_pay_pay.png" alt="paypay" srcset="<?php echo $wp_url ?>/dist/images/home_pay_pay.png 1x, <?php echo $wp_url ?>/dist/images/home_pay_pay@2x.png 2x">
        <img class="athome__payment-card-img d-inline" src="<?php echo $wp_url ?>/dist/images/home_pay_visa.png" alt="visa" srcset="<?php echo $wp_url ?>/dist/images/home_pay_visa.png 1x, <?php echo $wp_url ?>/dist/images/home_pay_visa@2x.png 2x">
        <img class="athome__payment-card-img d-inline" src="<?php echo $wp_url ?>/dist/images/home_pay_master.png" alt="master card" srcset="<?php echo $wp_url ?>/dist/images/home_pay_master.png 1x, <?php echo $wp_url ?>/dist/images/home_pay_master@2x.png 2x">
        <img class="athome__payment-card-img d-inline" src="<?php echo $wp_url ?>/dist/images/home_pay_dc.png" alt="diners club" srcset="<?php echo $wp_url ?>/dist/images/home_pay_dc.png 1x, <?php echo $wp_url ?>/dist/images/home_pay_dc@2x.png 2x">
        <img class="athome__payment-card-img d-inline" src="<?php echo $wp_url ?>/dist/images/home_pay_pay.png" alt="jcb" srcset="<?php echo $wp_url ?>/dist/images/home_pay_pay.png 1x, <?php echo $wp_url ?>/dist/images/home_pay_jcb@2x.png 2x">
        <img class="athome__payment-card-img d-inline" src="<?php echo $wp_url ?>/dist/images/home_pay_ae.png" alt="AMERICAN EXPRESS" srcset="<?php echo $wp_url ?>/dist/images/home_pay_ae.png 1x, <?php echo $wp_url ?>/dist/images/home_pay_ae@2x.png 2x">
      </div>
    </div>
    <a class="btn-primary" href="https://musashi.take-eats.jp/" target="_blank"><span>公式注文ページはこちら</span></a>
  </div>
</section>
<!-- ▲ お支払いについて -->

<!-- ▼ ご注意事項 -->
<section class="athome__payment py-5">
  <div class="container">
    <h2 class="ttl-2 mb-5">ご注意事項<span class="ttl-2-en en">attention</span></h2>
    <h3 class="athome-ttl3 f-18 mincho">キャンセルについて</h3>
    <p>キャンセルは前日19時までとなります。当日のキャンセルをご希望の場合は直接店舗までお電話にてお問い合わせください。<br>尚、お受け取りご指定日に商品を受け取りに来られない場合はキャンセル料として全額をご負担いただきます。</p>
    <h3 class="athome-ttl3 f-18 mincho mt-5">注文確認メールが届かない場合</h3>
    <p>注文確認メールが届かない場合はお手数ですが念のため各店舗へご確認をお願いいたします。<br>(ドメイン拒否をされている場合は受信できません。info@take-eats.jpからのメールが受信可能にしてください)</p>
  </div>
</section>
<!-- ▲ ご注意事項 -->

<?php get_footer();
