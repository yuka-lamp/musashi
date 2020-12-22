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

</section>
<!-- ▲ トップページのメインビジュアル -->

<?php elseif (is_archive()) : ?>

<!-- ▼ 下層ページのメインビジュアル -->
<section class="submv">
  <div class="container">

  </div>
</section>
<!-- ▲ 下層ページのメインビジュアル -->

<?php endif; ?>
