<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); the_post(); ?>


<section class="menu">
  <div class="container-small deco-1">

    <!-- ▼ カテゴリ -->
    <div class="menu__cat">
      <a href="#kin" class="menu__cat-item d-block text-center">
        <img src="<?php echo $wp_url ?>/dist/images/menu_cat_kin.png" alt="金皿寿司" srcset="<?php echo $wp_url ?>/dist/images/menu_cat_kin.png 1x, <?php echo $wp_url ?>/dist/images/menu_cat_kin@2x.png 2x">
        <p class="mincho f-18 mt-2 mb-0">金皿寿司</p>
      </a>
      <a href="#toku" class="menu__cat-item d-block text-center">
        <img src="<?php echo $wp_url ?>/dist/images/menu_cat_toku.png" alt="特上寿司" srcset="<?php echo $wp_url ?>/dist/images/menu_cat_toku.png 1x, <?php echo $wp_url ?>/dist/images/menu_cat_toku@2x.png 2x">
        <p class="mincho f-18 mt-2 mb-0">特上寿司</p>
      </a>
      <a href="#nigiri" class="menu__cat-item d-block text-center">
        <img src="<?php echo $wp_url ?>/dist/images/menu_cat_nigiri.png" alt="定番寿司" srcset="<?php echo $wp_url ?>/dist/images/menu_cat_nigiri.png 1x, <?php echo $wp_url ?>/dist/images/menu_cat_nigiri@2x.png 2x">
        <p class="mincho f-18 mt-2 mb-0">定番寿司</p>
      </a>
      <a href="#side" class="menu__cat-item d-block text-center">
        <img src="<?php echo $wp_url ?>/dist/images/menu_cat_side.png" alt="サイドメニュー" srcset="<?php echo $wp_url ?>/dist/images/menu_cat_side.png 1x, <?php echo $wp_url ?>/dist/images/menu_cat_side@2x.png 2x">
        <p class="mincho f-16 mt-2 mb-0">サイドメニュー</p>
      </a>
    </div>
    <!-- ▲ カテゴリ -->

    <!-- ▼ 金皿寿司 -->
    <div id="kin" class="menu__list mb-5">
      <!-- ▼ 見出し -->
      <div class="menu__list-ttl">
        <h3 class="menu__list-ttl-main mincho f-24 d-inline m-0">金皿寿司</h3>
        <p class="menu__list-ttl-sub f-18 d-inline m-0 p-3">509<span class="small">円(税込)</span></p>
      </div>
      <!-- ▲ 見出し -->
      <!-- ▼ メニュー一覧 -->
      <div class="menu__list-inner d-flex flex-wrap">
        <?php query_posts( array(
          'post_type' => 'menu_item', //カスタム投稿名を指定
          'taxonomy' => 'menu_cat',     //タクソノミー名を指定
          'term' => 'kin',           //タームのスラッグを指定
          'posts_per_page' => -1      ///表示件数（-1で全ての記事を表示）
        ));
        $id = get_the_ID();
        ?>
        <?php if(have_posts()): ?>
        <?php while(have_posts()):the_post(); ?>
        <!-- ▼ ループするコンテンツ -->
        <div class="menu__list-item">
          <!-- ▼ タグ -->
          <?php if(get_field('tag') == 'はい'): // 入力がある場合 ?>
          <p class="tag mincho bg-danger text-white">期間限定</p>
          <?php endif; ?>
          <!-- ▲ タグ -->
          <!-- ▼ 商品写真 -->
          <div class="menu__list-item-img">
            <?php if(post_custom('image')):  // 画像がある場合 ?>
              <img class="w-100" src="<?php echo get_field('image'); ?>" alt="<?php echo $ttl ?>">
            <?php else: // 画像がない場合 ?>
              <img class="w-100" src="<?php echo $wp_url ?>/dist/images/menu_noimg.png" alt="noimage" srcset="<?php echo $wp_url ?>/dist/images/menu_noimg.png 1x, <?php echo $wp_url ?>/dist/images/menu_noimg@2x.png 2x">
            <?php endif; ?>
          </div>
          <!-- ▲ 商品写真 -->
          <!-- ▼ 商品説明 -->
          <div class="menu__list-item-text text-center">
            <p class="mincho m-0"><?php the_title(); ?></p>
            <?php if(post_custom('cap')): // 入力がある場合 ?>
            <p class="cap"><?php echo get_field('cap'); ?></p>
            <?php endif; ?>
          </div>
          <!-- ▲ 商品説明 -->
        </div>
        <!-- ▲ ループするコンテンツ -->
        <?php endwhile; else: ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
      </div>
      <!-- ▲ メニュー一覧 -->
    </div>
    <!-- ▲ 金皿寿司 -->

    <!-- ▼ 特上寿司 -->
    <div id="toku" class="menu__list mb-5">
      <!-- ▼ 見出し -->
      <div class="menu__list-ttl">
        <h3 class="menu__list-ttl-main mincho f-24 d-inline m-0">特上寿司</h3>
        <p class="menu__list-ttl-sub f-18 d-inline m-0 p-3">400<span class="small">円(税込)</span></p>
      </div>
      <!-- ▲ 見出し -->
      <!-- ▼ メニュー一覧 -->
      <div class="menu__list-inner d-flex flex-wrap">
        <?php query_posts( array(
          'post_type' => 'menu_item', //カスタム投稿名を指定
          'taxonomy' => 'menu_cat',     //タクソノミー名を指定
          'term' => 'toku',           //タームのスラッグを指定
          'posts_per_page' => -1      ///表示件数（-1で全ての記事を表示）
        ));
        $id = get_the_ID();
        ?>
        <?php if(have_posts()): ?>
        <?php while(have_posts()):the_post(); ?>
        <!-- ▼ ループするコンテンツ -->
        <div class="menu__list-item">
          <!-- ▼ タグ -->
          <?php if(get_field('tag') == 'はい'): // 入力がある場合 ?>
          <p class="tag mincho bg-danger text-white">期間限定</p>
          <?php endif; ?>
          <!-- ▲ タグ -->
          <!-- ▼ 商品写真 -->
          <div class="menu__list-item-img">
            <?php if(post_custom('image')):  // 画像がある場合 ?>
              <img class="w-100" src="<?php echo get_field('image'); ?>" alt="<?php echo $ttl ?>">
            <?php else: // 画像がない場合 ?>
              <img class="w-100" src="<?php echo $wp_url ?>/dist/images/menu_noimg.png" alt="noimage" srcset="<?php echo $wp_url ?>/dist/images/menu_noimg.png 1x, <?php echo $wp_url ?>/dist/images/menu_noimg@2x.png 2x">
            <?php endif; ?>
          </div>
          <!-- ▲ 商品写真 -->
          <!-- ▼ 商品説明 -->
          <div class="menu__list-item-text text-center">
            <p class="mincho m-0"><?php the_title(); ?></p>
            <?php if(post_custom('cap')): // 入力がある場合 ?>
            <p class="cap"><?php echo get_field('cap'); ?></p>
            <?php endif; ?>
          </div>
          <!-- ▲ 商品説明 -->
        </div>
        <!-- ▲ ループするコンテンツ -->
        <?php endwhile; else: ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
      </div>
      <!-- ▲ メニュー一覧 -->
    </div>
    <!-- ▲ 特上寿司 -->

    <!-- ▼ 定番寿司 -->
    <div id="nigiri" class="menu__list mb-5">
      <!-- ▼ 見出し -->
      <div class="menu__list-ttl">
        <h3 class="menu__list-ttl-main mincho f-24 d-inline m-0">定番寿司</h3>
        <p class="menu__list-ttl-sub f-18 d-inline m-0 p-3">160<span class="small">円(税込)</span></p>
      </div>
      <!-- ▲ 見出し -->
      <!-- ▼ メニュー一覧 -->
      <div class="menu__list-inner d-flex flex-wrap">
        <?php query_posts( array(
          'post_type' => 'menu_item', //カスタム投稿名を指定
          'taxonomy' => 'menu_cat',     //タクソノミー名を指定
          'term' => 'nigiri',           //タームのスラッグを指定
          'posts_per_page' => -1      ///表示件数（-1で全ての記事を表示）
        ));
        $id = get_the_ID();
        ?>
        <?php if(have_posts()): ?>
        <?php while(have_posts()):the_post(); ?>
        <!-- ▼ ループするコンテンツ -->
        <div class="menu__list-item">
          <!-- ▼ タグ -->
          <?php if(get_field('tag') == 'はい'): // 入力がある場合 ?>
          <p class="tag mincho bg-danger text-white">期間限定</p>
          <?php endif; ?>
          <!-- ▲ タグ -->
          <!-- ▼ 商品写真 -->
          <div class="menu__list-item-img">
            <?php if(post_custom('image')):  // 画像がある場合 ?>
              <img class="w-100" src="<?php echo get_field('image'); ?>" alt="<?php echo $ttl ?>">
            <?php else: // 画像がない場合 ?>
              <img class="w-100" src="<?php echo $wp_url ?>/dist/images/menu_noimg.png" alt="noimage" srcset="<?php echo $wp_url ?>/dist/images/menu_noimg.png 1x, <?php echo $wp_url ?>/dist/images/menu_noimg@2x.png 2x">
            <?php endif; ?>
          </div>
          <!-- ▲ 商品写真 -->
          <!-- ▼ 商品説明 -->
          <div class="menu__list-item-text text-center">
            <p class="mincho m-0"><?php the_title(); ?></p>
            <?php if(post_custom('cap')): // 入力がある場合 ?>
            <p class="cap"><?php echo get_field('cap'); ?></p>
            <?php endif; ?>
          </div>
          <!-- ▲ 商品説明 -->
        </div>
        <!-- ▲ ループするコンテンツ -->
        <?php endwhile; else: ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
      </div>
      <!-- ▲ メニュー一覧 -->
    </div>
    <!-- ▲ 定番寿司 -->

    <!-- ▼ サイドメニュー -->
    <div id="side" class="menu__list mb-5">
      <!-- ▼ 見出し -->
      <div class="menu__list-ttl">
        <h3 class="menu__list-ttl-main mincho f-24 d-inline m-0">サイドメニュー</h3>
      </div>
      <!-- ▲ 見出し -->
      <!-- ▼ メニュー一覧 -->
      <div class="menu__list-inner d-flex flex-wrap">
        <?php query_posts( array(
          'post_type' => 'menu_item', //カスタム投稿名を指定
          'taxonomy' => 'menu_cat',     //タクソノミー名を指定
          'term' => 'side',           //タームのスラッグを指定
          'posts_per_page' => -1      ///表示件数（-1で全ての記事を表示）
        ));
        $id = get_the_ID();
        ?>
        <?php if(have_posts()): ?>
        <?php while(have_posts()):the_post(); ?>
        <!-- ▼ ループするコンテンツ -->
        <div class="menu__list-item">
          <!-- ▼ タグ -->
          <?php if(get_field('tag') == 'はい'): // 入力がある場合 ?>
          <p class="tag mincho bg-danger text-white">期間限定</p>
          <?php endif; ?>
          <!-- ▲ タグ -->
          <!-- ▼ 商品写真 -->
          <div class="menu__list-item-img">
            <?php if(post_custom('image')):  // 画像がある場合 ?>
              <img class="w-100" src="<?php echo get_field('image'); ?>" alt="<?php echo $ttl ?>">
            <?php else: // 画像がない場合 ?>
              <img class="w-100" src="<?php echo $wp_url ?>/dist/images/menu_noimg.png" alt="noimage" srcset="<?php echo $wp_url ?>/dist/images/menu_noimg.png 1x, <?php echo $wp_url ?>/dist/images/menu_noimg@2x.png 2x">
            <?php endif; ?>
          </div>
          <!-- ▲ 商品写真 -->
          <!-- ▼ 商品説明 -->
          <div class="menu__list-item-text text-center">
            <p class="mincho m-0"><?php the_title(); ?></p>
            <?php if(post_custom('cap')): // 入力がある場合 ?>
            <p class="cap"><?php echo get_field('cap'); ?></p>
            <?php endif; ?>
          </div>
          <!-- ▲ 商品説明 -->
        </div>
        <!-- ▲ ループするコンテンツ -->
        <?php endwhile; else: ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
      </div>
      <!-- ▲ メニュー一覧 -->
    </div>
    <!-- ▲ サイドメニュー -->


  </div>
</section>


<?php get_footer();
