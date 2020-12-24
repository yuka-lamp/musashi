<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); the_post(); ?>

<section class="news pb-5">
  <div class="container-small">
    <!-- ▼ カテゴリ -->
    <div class="text-center mb-5">
      <ul class="news__nav nav nav-pills nav-fill">
        <li class="nav-item">
          <a class="nav-link text-primary" href="<?php echo $home ?>/news/">ニュース</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active bg-primary text-white" href="<?php echo $home ?>/action/">取り組み</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-primary" href="<?php echo $home ?>/club/">むさし倶楽部</a>
        </li>
      </ul>
    </div>
    <!-- ▲ カテゴリ-->
    <!-- ▼ 記事の取得 -->
    <div class="news-img__wrap d-flex flex-wrap">
      <?php query_posts( array(
        'post_type' => 'post', //カスタム投稿名を指定
        'cat' => '8',     //タクソノミー名を指定
        'posts_per_page' => -1      ///表示件数（-1で全ての記事を表示）
      ));
      $id = get_the_ID();
      $thumbnail = get_the_post_thumbnail_url($id, 'large');
      ?>
      <?php if(have_posts()): ?>
      <?php while(have_posts()):the_post(); ?>
      <!-- ▼ ループするコンテンツ -->
      <div class="news-img__item col-12 col-md-4 mb-3">
        <a class="d-block" hraf="<?php echo the_permalink(); ?>">
          <div class="news-img__item__img">
              <?php if ( has_post_thumbnail()): //サムネイルがあったら ?>
                <img class="w-100" src="<?php echo the_post_thumbnail_url($id, 'large'); ?>" alt="<?php echo $ttl ?>">
                <?php else: // サムネイルがなかったら ?>
                <img class="w-100" src="<?php echo $wp_url ?>/dist/images/news_imgnone.png" alt="noimage" srcset="<?php echo $wp_url ?>/dist/images/news_imgnone.png 1x, <?php echo $wp_url ?>/dist/images/news_imgnone@2x.png 2x">
              <?php endif; ?>
          </div>
          <div class="news-img__item__txt pb-3">
            <p class="d-block text-weight-bold mt-4 mb-2"><?php the_title(); ?></p>
            <time class="post-time" data-time="<?php the_time('Y-m-d'); ?>"><i class="far fa-calendar-alt mr-1"></i><?php the_time('Y年n月j日'); ?></time>
          </div>
        </a>
      </div>
      <!-- ▲ ループするコンテンツ -->
      <?php endwhile; else: ?>
        <p class="mincho text-center d-block py-5 w-100">まだ記事が投稿されていません</p>
      <?php endif; ?>
      <?php wp_reset_query(); ?>
    </div>
    <!-- ▲ 記事の取得 -->
    <!-- ▼ ページネーション -->
    <?php
    if (function_exists('wp_pagenavi')) {
    wp_pagenavi(['query' => $wp_query]);
    }
    ?>
    <!-- ▲ ページネーション -->
  </div>
</section>


<?php get_footer();
