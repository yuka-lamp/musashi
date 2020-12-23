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
        <img src="<?php echo $wp_url ?>/dist/images/menu_cat_nigiri.png" alt="にぎり" srcset="<?php echo $wp_url ?>/dist/images/menu_cat_nigiri.png 1x, <?php echo $wp_url ?>/dist/images/menu_cat_nigiri@2x.png 2x">
        <p class="mincho f-18 mt-2 mb-0">にぎり</p>
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
        <p class="menu__list-ttl-sub f-18 d-inline m-0 p-3">463<span class="small">円+税</span></p>
      </div>
      <!-- ▲ 見出し -->
      <!-- ▼ メニュー一覧 -->
      <div class="menu__list-inner d-flex flex-wrap justify-content-between">
        <?php
        $args = [
          'posts_per_page' => -1,
          'post_type' => array('menu_item'),
              'tax_query' => array(
                  'relation' => 'OR',
                  array(
                      'taxonomy' => 'side',
                  ),
              ),
          'orderby' => 'date',
          'order' => 'ASC',
        ];
        $my_posts = get_posts($args);
        foreach ($my_posts as $post):
        setup_postdata($post);
        $id = get_the_ID();
        $ttl = get_the_title();
        ?>
        <!-- ▼ ループするコンテンツ -->
        <div class="menu__list-item">
          <!-- ▼ 商品写真 -->
          <div class="menu__list-item-img">
            <?php if(post_custom('image')):  // 画像がある場合 ?>
              <img class="w-100" src="<?php echo get_field('image'); ?>" alt="<?php echo $ttl ?>">
            <?php else: // 画像がない場合 ?>
              <img class="w-100" src="<?php echo $wp_url ?>/dist/images/menu_noimg.png" alt="noimage" srcset="<?php echo $wp_url ?>/dist/images/menu_noimg.png 1x, <?php echo $wp_url ?>/dist/images/menu_noimg@2x.png 2x">
            <?php endif; ?>
          </div>
          <!-- ▲ 商品写真 -->
          <!-- ▼ 商品画像 -->
          <div class="menu__list-item-text text-center">
            <p class="mincho m-0"><?php echo $ttl ?></p>
            <?php if(post_custom('cap')): // 入力がある場合 ?>
            <p class="cap"><?php echo get_field('cap'); ?></p>
            <?php endif; ?>
          </div>
          <!-- ▲ 商品画像 -->
        </div>
        <!-- ▲ ループするコンテンツ -->
        <?php endforeach; wp_reset_postdata(); ?>
      </div>
      <!-- ▲ メニュー一覧 -->
    </div>
    <!-- ▲ 金皿寿司 -->

    <!-- ▼ 特上寿司 -->
    <div id="toku" class="menu__list mb-5">
      <!-- ▼ 見出し -->
      <div class="menu__list-ttl">
        <h3 class="menu__list-ttl-main mincho f-24 d-inline m-0">特上寿司</h3>
        <p class="menu__list-ttl-sub f-18 d-inline m-0 p-3">364<span class="small">円+税</span></p>
      </div>
      <!-- ▲ 見出し -->
      <!-- ▼ メニュー一覧 -->
      <div class="menu__list-inner d-flex flex-wrap justify-content-between">
        <?php
        $args = [
          'posts_per_page' => -1,
          'post_type' => array('menu_item'),
              'tax_query' => array(
                  'relation' => 'OR',
                  array(
                      'taxonomy' => 'side',
                  ),
              ),
          'orderby' => 'date',
          'order' => 'ASC',
        ];
        $my_posts = get_posts($args);
        foreach ($my_posts as $post):
        setup_postdata($post);
        $id = get_the_ID();
        $ttl = get_the_title();
        ?>
        <!-- ▼ ループするコンテンツ -->
        <div class="menu__list-item">
          <!-- ▼ 商品写真 -->
          <div class="menu__list-item-img">
            <?php if(post_custom('image')):  // 画像がある場合 ?>
              <img class="w-100" src="<?php echo get_field('image'); ?>" alt="<?php echo $ttl ?>">
            <?php else: // 画像がない場合 ?>
              <img class="w-100" src="<?php echo $wp_url ?>/dist/images/menu_noimg.png" alt="noimage" srcset="<?php echo $wp_url ?>/dist/images/menu_noimg.png 1x, <?php echo $wp_url ?>/dist/images/menu_noimg@2x.png 2x">
            <?php endif; ?>
          </div>
          <!-- ▲ 商品写真 -->
          <!-- ▼ 商品画像 -->
          <div class="menu__list-item-text text-center">
            <p class="mincho m-0"><?php echo $ttl ?></p>
            <?php if(post_custom('cap')): // 入力がある場合 ?>
            <p class="cap"><?php echo get_field('cap'); ?></p>
            <?php endif; ?>
          </div>
          <!-- ▲ 商品画像 -->
        </div>
        <!-- ▲ ループするコンテンツ -->
        <?php endforeach; wp_reset_postdata(); ?>
      </div>
      <!-- ▲ メニュー一覧 -->
    </div>
    <!-- ▲ 特上寿司 -->

    <!-- ▼ にぎり -->
    <div id="nigiri" class="menu__list mb-5">
      <!-- ▼ 見出し -->
      <div class="menu__list-ttl">
        <h3 class="menu__list-ttl-main mincho f-24 d-inline m-0">にぎり</h3>
        <p class="menu__list-ttl-sub f-18 d-inline m-0 p-3">146<span class="small">円+税</span></p>
      </div>
      <!-- ▲ 見出し -->
      <!-- ▼ メニュー一覧 -->
      <div class="menu__list-inner d-flex flex-wrap justify-content-between">
        <?php
        $args = [
          'posts_per_page' => -1,
          'post_type' => array('menu_item'),
              'tax_query' => array(
                  'relation' => 'OR',
                  array(
                      'taxonomy' => 'side',
                  ),
              ),
          'orderby' => 'date',
          'order' => 'ASC',
        ];
        $my_posts = get_posts($args);
        foreach ($my_posts as $post):
        setup_postdata($post);
        $id = get_the_ID();
        $ttl = get_the_title();
        ?>
        <!-- ▼ ループするコンテンツ -->
        <div class="menu__list-item">
          <!-- ▼ 商品写真 -->
          <div class="menu__list-item-img">
            <?php if(post_custom('image')):  // 画像がある場合 ?>
              <img class="w-100" src="<?php echo get_field('image'); ?>" alt="<?php echo $ttl ?>">
            <?php else: // 画像がない場合 ?>
              <img class="w-100" src="<?php echo $wp_url ?>/dist/images/menu_noimg.png" alt="noimage" srcset="<?php echo $wp_url ?>/dist/images/menu_noimg.png 1x, <?php echo $wp_url ?>/dist/images/menu_noimg@2x.png 2x">
            <?php endif; ?>
          </div>
          <!-- ▲ 商品写真 -->
          <!-- ▼ 商品画像 -->
          <div class="menu__list-item-text text-center">
            <p class="mincho m-0"><?php echo $ttl ?></p>
            <?php if(post_custom('cap')): // 入力がある場合 ?>
            <p class="cap"><?php echo get_field('cap'); ?></p>
            <?php endif; ?>
          </div>
          <!-- ▲ 商品画像 -->
        </div>
        <!-- ▲ ループするコンテンツ -->
        <?php endforeach; wp_reset_postdata(); ?>
      </div>
      <!-- ▲ メニュー一覧 -->
    </div>
    <!-- ▲ にぎり -->

    <!-- ▼ サイドメニュー -->
    <div id="side" class="menu__list mb-5">
      <!-- ▼ 見出し -->
      <div class="menu__list-ttl">
        <h3 class="menu__list-ttl-main mincho f-24 d-inline m-0">サイドメニュー</h3>
      </div>
      <!-- ▲ 見出し -->
      <!-- ▼ メニュー一覧 -->
      <div class="menu__list-inner d-flex flex-wrap justify-content-between">
        <?php
        $args = [
            'posts_per_page' => -1,
            'post_type' => array('menu_item'),
                'tax_query' => array(
                    'relation' => 'OR',
                    array(
                        'taxonomy' => 'side',
                    ),
                ),
            'orderby' => 'date',
            'order' => 'ASC',
        ];
        $my_posts = get_posts($args);
        foreach ($my_posts as $post):
        setup_postdata($post);
        $id = get_the_ID();
        $ttl = get_the_title();
        ?>
        <!-- ▼ ループするコンテンツ -->
        <div class="menu__list-item">
          <!-- ▼ 商品写真 -->
          <div class="menu__list-item-img">
            <?php if(post_custom('image')):  // 画像がある場合 ?>
              <img class="w-100" src="<?php echo get_field('image'); ?>" alt="<?php echo $ttl ?>">
            <?php else: // 画像がない場合 ?>
              <img class="w-100" src="<?php echo $wp_url ?>/dist/images/menu_noimg.png" alt="noimage" srcset="<?php echo $wp_url ?>/dist/images/menu_noimg.png 1x, <?php echo $wp_url ?>/dist/images/menu_noimg@2x.png 2x">
            <?php endif; ?>
          </div>
          <!-- ▲ 商品写真 -->
          <!-- ▼ 商品画像 -->
          <div class="menu__list-item-text text-center">
            <p class="mincho m-0"><?php echo $ttl ?></p>
            <?php if(post_custom('cap')): // 入力がある場合 ?>
            <p class="cap"><?php echo get_field('cap'); ?></p>
            <?php endif; ?>
          </div>
          <!-- ▲ 商品画像 -->
        </div>
        <!-- ▲ ループするコンテンツ -->
        <?php endforeach; wp_reset_postdata(); ?>
      </div>
      <!-- ▲ メニュー一覧 -->
    </div>
    <!-- ▲ サイドメニュー -->


  </div>
</section>


<?php get_footer();
