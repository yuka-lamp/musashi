<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); the_post(); ?>

<section class="contact pb-5">
  <div class="container-small">
    <div class="">
      <p class="text-md-center mb-5">お問い合わせご希望の方は下記フォームよりどうぞ。
      <br>送信内容を確認させていただき、担当者よりご連絡させていただきます。
      <span class="d-block mt-3"><i class="text-danger small mr-1">※</i>は入力必須項目です。</span></p>
      <div class="contact__form">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer();
