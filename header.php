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
<header class="header">
  <nav class="header__nav site-header sticky-top">
  <div class="container d-flex flex-column flex-md-row mt-4">
    <div class="header__nav-inner">
      <a href="<?php echo $home ?>">
        <h1 class="" href="#">
          <img class="" style="width: 195.37px; height:58.81px;" src="<?php echo $wp_url ?>/dist/images/logo.png" alt="<?php get_the_title() ?>" srcset="<?php echo $wp_url ?>/dist/images/logo.png 1x, <?php echo $wp_url ?>/dist/images/logo@2x.png 2x">
        </h1>
      </a>
      <div class="header__nav-list ml-md-auto">
        <a class="header__nav-list-item d-md-inline-block text-white" href="<?php echo $home ?>/about/">こだわり<span>about</span></a>
        <a class="header__nav-list-item d-md-inline-block text-white" href="<?php echo $home ?>/menu/">お品書き<span>menu</span></a>
        <a class="header__nav-list-item d-md-inline-block text-white" href="<?php echo $home ?>/about/">こだわり<span>about</span></a>
        <a class="header__nav-list-item d-md-inline-block text-white" href="<?php echo $home ?>/menu/">お品書き<span>menu</span></a>
      </div>
    </div>
    <a href="header__nav-btn"><img class="" style="width: 32.52px; height:29.2px;" src="<?php echo $wp_url ?>/dist/images/btn_takeout_icon.png" alt="お持ち帰りアイコン" srcset="<?php echo $wp_url ?>/dist/images/btn_takeout_icon.png 1x, <?php echo $wp_url ?>/dist/images/btn_takeout_icon@2x.png 2x">お持ち帰り・宅配</a>
  </div>
  </nav>
</header>
<!-- /header -->

<main>
