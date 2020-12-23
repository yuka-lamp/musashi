<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); the_post(); ?>

<!-- ▼ 三条本店 -->
<section class="shop__item py-5 mt-5">
  <div class="container-small">
    <h3 class="shop__item-ttl d-block text-center f-24 mincho py-4">三条本店</h3>
    <div class="d-block d-lg-flex justify-content-between">
      <!-- ▼ 写真 + 概要 -->
      <div class="shop__item-about">

      </div>
      <!-- ▲ 写真 + 概要 -->
      <!-- ▼ テーブル -->
      <div class="shop__item-table deco">

      </div>
      <!-- ▲ テーブル -->
    </div>
  </div>
</section>
<!-- ▲ 三条本店 -->


<?php get_footer();
