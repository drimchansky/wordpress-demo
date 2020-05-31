<?php get_header(); ?>

<div class="banner front_banner"
  style="background-image: url('<?php echo get_theme_file_uri(); ?>/images/small-banner-1.jpg')">
  <div class="container">
    <div class="banner__content">
      <h1><span>Детский хоккейный клуб</span>Квантум</h1>
      <a href="#" class="button banner_button">Подать заявку</a>
    </div>
  </div>
</div>

<div class="container front-page_container">


  <?php
  $args = array(
      'post_type' => 'post',
      'nopaging' => false,
      'posts_per_page' => '30',
      'order' => 'DESC',
      'orderby' => 'ID'
  );

  $query = new WP_Query($args);
  ?>

  <div class="post-list">

    <?php if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post(); ?>
    <!-- POST -->
    <?php get_template_part('template-parts/post'); ?>

    <?php
        } ?>

  </div>

  <?php
    } else {
         ?>
  <div>Постов не найдено</div>
  <?php wp_reset_postdata();
    } ?>

  <div class="sidebar">
    <!-- VK Viget -->
    <?php get_template_part('template-parts/vk'); ?>

    <!-- Latest photos -->
    <?php get_template_part('template-parts/photos'); ?>

  </div>


</div>
</div>

<?php get_footer(); ?>