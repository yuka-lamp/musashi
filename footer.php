<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>

</main>

<footer class="footer">
  <div class="container main">
    <div class="d-md-flex d-block justify-content-between">
      <!-- ▼ 会社情報 -->
      <div class="footer__info col-md-8 mb-0">
        <img src="<?php echo $wp_url ?>/dist/images/logo.png" alt="寿司のむさしのロゴ" srcset="<?php echo $wp_url ?>/dist/images/logo.png 1x, <?php echo $wp_url ?>/dist/images/logo@2x.png 2x">
        <!-- <div class="footer__info__address">
          <div class="row mb-2">
            <p class="col-4 col-md-3 text-info m-0">三条本店</p>
            <p class="col-8 col-md-9 text-info m-0">京都市中京区河原町通三条上ル恵比須町440</p>
          </div>
          <div class="row mb-2">
            <p class="col-4 col-md-3 text-info m-0">京都駅八条口店</p>
            <p class="col-8 col-md-9 text-info m-0">京都市下京区東塩小路高倉町8-3京都駅八条口構内 アスティロード京都おもてなし小路</p>
          </div>
          <div class="row">
            <p class="col-4 col-md-3 text-info m-0">上堀川店<br><span class="small">（テイクアウト専門店）</span></p>
            <p class="col-8 col-md-9 text-info m-0">京都府京都市北区紫竹下本町28</p>
          </div>
          <div class="row">
            <p class="col-4 col-md-3 text-info m-0">Porta店<br><span class="small">（テイクアウト専門店）</span></p>
            <p class="col-8 col-md-9 text-info m-0">京都市下京区烏丸通塩小路下る東塩小路町902番地 京都駅前地下街ポルタ内</p>
          </div>
          <div class="row">
            <p class="col-4 col-md-3 text-info m-0">キッチンセンター</p>
            <p class="col-8 col-md-9 text-info m-0">京都市北区堀川通北山上ル</p>
          </div>
        </div> -->
        <ul class="footer__info__link my-4 mx-0 p-0">
          <li class="d-inline mr-3">
            <a class="link-arrow text-info" href="<?php echo $home ?>/company/">会社紹介</a>
          </li>
          <li class="d-inline">
            <a class="link-arrow text-info" href="<?php echo $home ?>/link/">関連リンク</a>
          </li>
        </ul>
      </div>
      <!-- ▲ 会社情報 -->
      <!-- ▼ SNSリンクボタン -->
      <!-- <div class="footer__sns col-md-3">
        <a class="d-inline-block mr-3" href="" target="_blank">
          <img src="<?php echo $wp_url ?>/dist/images/icon_fb.svg" alt="Facebook">
        </a>
        <a class="d-inline-block" href="" target="_blank">
          <img src="<?php echo $wp_url ?>/dist/images/icon_inst.svg" alt="Instagram">
        </a>
      </div> -->
      <!-- ▲ SNSリンクボタン -->
    </div>
    <!-- ▼ トップへ戻る -->
    <div class="footer__pagetop">
      <a href="#top">
        <img src="<?php echo $wp_url ?>/dist/images/footer_pagetop.png" alt="Instagram" srcset="<?php echo $wp_url ?>/dist/images/footer_pagetop.png 1x, <?php echo $wp_url ?>/dist/images/footer_pagetop@2x.png 2x">
      </a>
    </div>
    <!-- ▲ トップへ戻る -->
  </div>
  <!-- ▼ コピーライト + プライバシーポリシー -->
  <div class="footer__small bg-dark py-2">
    <div class="container">
      <div class="d-md-flex d-block justify-content-between">
        <!-- <a class="small text-white" href="<?php echo $home ?>/privacy-policy/">プライバシーポリシー</a> -->
        <p class="small text-white m-0">2020 (C) copyright All reserved.SUSHINOMUSASHI</p>
      </div>
    </div>
  </div>
  <!-- ▲ コピーライト + プライバシーポリシー -->
</footer>

<?php wp_footer(); ?>
</body>
</html>
