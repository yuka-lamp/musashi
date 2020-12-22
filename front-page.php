<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<section class="top__concept">
  <div class="container text-center">
    <h2 class="ttl-2 mb-5">むさしのおもい<span class="ttl-2-en en">concept</span></h2>
    <p class="mt-4 pb-3 lh-large text-center mincho">ネタは勿論、米や酢、お茶や醤油、わさび、海苔、それに店内の清潔さ、
    <br class="d-none d-md-block">スタッフの気配り心配りと細部にまでしっかりこだわっています。
    <br class="d-none d-md-block">むさしのすしは、1977年創業以来、独自の美味への道を貫き、
    <br class="d-none d-md-block">オリジナルの食材、調理、調味にこだわりつづけています。
    <br class="d-none d-md-block">その基本にあるのが真心です。</p>
    <a class="link-arrow mt-5 f-18 mincho" href="#">詳しくみる</a>
  </div>
</section>

<a class="btn-primary" href="#"><span>店舗一覧を見る</span></a>

<?php get_footer();
