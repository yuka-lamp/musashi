<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); the_post(); ?>
<section class="post-main">
<div class="container">
<?php the_content(); ?>
</div>
</section>
<?php get_footer();
