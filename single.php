<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<div class="container py-5">
<?php
if (have_posts()):
while (have_posts()): the_post();
$id = get_the_ID();
$t = get_the_title();
$p = get_the_permalink();
$category = get_the_category();
$cat = $category[0];
$cat_slug = $cat->slug;
$thumbnail = get_the_post_thumbnail_url($id, 'large');
?>
<article class="post-wrap col-md-9 p-0">
  <!-- ▼ 画像 + タイトル + 日付 -->
  <header class="post-header">
    <!-- ▼ サムネイル -->
      <?php if ( has_post_thumbnail()): //サムネイルがあったら ?>
      <img class="post-thumbnail" src="<?php echo $thumbnail; ?>" alt="<?php echo $ttl ?>">
      <?php else: // サムネイルがなかったら ?>
      <img class="post-thumbnail" src="<?php echo $wp_url ?>/dist/images/news_imgnone.png" alt="noimage" srcset="<?php echo $wp_url ?>/dist/images/news_imgnone.png 1x, <?php echo $wp_url ?>/dist/images/news_imgnone@2x.png 2x">
      <?php endif; ?>
    <!-- ▲ サムネイル -->
    <h2 class="post-ttl mincho"><?php echo $t; ?></h2>
    <time class="post-time" data-time="<?php the_time('Y-m-d'); ?>"><i class="far fa-calendar-alt mr-1 text-primary"></i><?php the_time('Y年n月j日'); ?></time>
  </header>
  <!-- ▲ 画像 + タイトル + 日付 -->
  <div class="post-main">
  <?php the_content(); ?>
  </div>
  <div class="text-center pt-5">
    <a class="link-arrow" href="<?php echo $home ?>/<?php echo $cat_slug ?>/">一覧に戻る</a>
  </div>
</article>
<?php endwhile; endif; ?>
</div>
<?php get_footer();
