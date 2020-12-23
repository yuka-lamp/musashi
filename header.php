<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>
<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="header w-100 bg-white">
    <nav class="navbar navbar-expand-lg w-100">
      <div class="w-100">
        <div class="d-block d-lg-flex align-items-center">
          <!-- ▼ メイン -->
          <div>
            <h1 class="d-inline-block navbar-brand mr-4 p-0">
              <a class="d-inline-block " href="<?php echo $home ?>">
              <img class="navbar-brand-img" src="<?php echo $wp_url ?>/dist/images/logo.png" alt="<?php get_the_title() ?>" srcset="<?php echo $wp_url ?>/dist/images/logo.png 1x, <?php echo $wp_url ?>/dist/images/logo@2x.png 2x">
              </a>
            </h1>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#Navber" aria-controls="Navber" aria-expanded="false" aria-label="ナビゲーションの切替">
              <span class="navbar-toggler-icon"></span>
              <p class="mb-0 text-white font-weight-bold">メニュー</p>
            </button>
          </div>
          <!-- ▲ メイン -->
          <!-- ▼ ページ一覧 -->
          <div class="collapse navbar-collapse bg-white" id="Navber">
            <ul class="navbar-nav">
              <li class="nav-item d-lg-inline-block pl-4 pr-4">
                <a class="nav-link" href="<?php echo $home ?>/about/">こだわり<span class="en">about</span></a>
              </li>
              <li class="nav-item d-lg-inline-block pl-4 pr-4">
                <a class="nav-link" href="<?php echo $home ?>/menu/">お品書き<span class="en">menu</span></a>
              </li>
              <li class="nav-item d-lg-inline-block pl-4 pr-4">
                <a class="nav-link" href="<?php echo $home ?>/shop/">店舗紹介<span class="en">shop</span></a>
              </li>
              <li class="nav-item d-lg-inline-block pl-4">
                <a class="nav-link" href="<?php echo $home ?>/news/">むさしニュース<span class="en">news</span></a>
              </li>
            </ul>
          </div>
          <!-- ▲ ページ一覧 -->
        </div>
        <!-- ▼ ボタン(/athome/) -->
        <a class="header__btn mincho" href="<?php echo $home ?>/athome/">
          <img class="header__btn-icon" src="<?php echo $wp_url ?>/dist/images/btn_takeout_icon.png" alt="お持ち帰りアイコン" srcset="<?php echo $wp_url ?>/dist/images/btn_takeout_icon.png 1x, <?php echo $wp_url ?>/dist/images/btn_takeout_icon@2x.png 2x">お持ち帰り<br class="d-block d-lg-none"><span class="d-lg-block d-none">・</span>宅配
        </a>
        <!-- ▲ ボタン(/athome/) -->
      </div>
  </nav>
</header>
<!-- /header -->

<main id="top">

<?php if (is_front_page()): ?>

<!-- ▼ トップページのメインビジュアル -->
<section class="mv">
  <div class="mv__wrap">
    <!-- ▼ キャッチコピー -->
    <div class="mv__catch col-7 col-md-6 col-lg-4">
      <h2 class="mv__catch-h2 mincho">真心も<br class="d-block d-md-none">美味しさも<br><span class="text-primary">特上</span>です</h2>
      <p class="d-none d-md-block">やるからには「お客様に愛される店」。<br>ネタは勿論、米や酢、お茶や醤油、わさび、海苔、それに店内の清潔さ、スタッフの気配り心配りと細部にまでしっかりこだわっています。</p>
    </div>
    <!-- ▲ キャッチコピー -->
  </div>
  <!-- ▼ お知らせ -->
  <div class="mv__news bg-light py-3 m-0">
    <?php
      $args = [
          'posts_per_page' => 1,
          'post_type' => 'post',
          'category' => 'news',
          'orderby' => 'date',
          'order' => 'ASC',
      ];
      $my_posts = get_posts($args);
      foreach ($my_posts as $post):
      setup_postdata($post);
      $id = get_the_ID();
      $ttl = get_the_title();
      $permalink = get_the_permalink();
      $date = get_the_date();
      ?>
    <div class="mv__news__inner row w-100 m-0">
      <div class="col-2 p-0">
        <p class="mv__news-ttl text-uppercase m-0 p-0">NEWS</p>
      </div>
      <a class="col-10 m-0 p-0" href="<?php echo $permalink ?>"><span class="d-block "><?php echo $date ?></span><?php echo $ttl ?></a>
    </div>
    <?php endforeach; wp_reset_postdata(); ?>
  </div>
  <!-- ▲ お知らせ -->
  <!-- ▼ キャンペーン画像 -->
  <a class="mv__cam mincho d-none d-md-block" href="<?php echo $home ?>/athome/">
    <img style="width: 223px; height: 222px;" src="<?php echo $wp_url ?>/dist/images/fix_takeout.png" alt="おうちdeむさし" srcset="<?php echo $wp_url ?>/dist/images/fix_takeout.png 1x, <?php echo $wp_url ?>/dist/images/fix_takeout@2x.png 2x">
  </a>
  <!-- ▲ キャンペーン画像 -->
</section>
<!-- ▲ トップページのメインビジュアル -->

<?php
else:
  global $post;
  $ttl = $post->post_title;
  $slug = $post->post_name;
?>

<!-- ▼ 下層ページのメインビジュアル -->
<style media="screen">
.submv {
  background: url("<?php echo $wp_url ?>/dist/images/submv_<?php echo $slug ?>_pc.png");
  background-size: cover;
}
 @media(max-width:999.98px){
   .submv {
    background: url("<?php echo $wp_url ?>/dist/images/submv_<?php echo $slug ?>_sp.png");
    background-size: cover;
  }
}
</style>
<section class="submv <?php echo $slug ?>">
  <div class="container d-flex align-items-center justify-content-center">
    <div class="text-center">
      <h2 class="submv__ttl mincho f-28 text-white"><?php echo $ttl ?></h2>
      <p class="submv__en text-white"><?php echo $slug ?></p>
    </div>
  </div>
</section>
<!-- ▲ 下層ページのメインビジュアル -->

<?php endif; ?>
