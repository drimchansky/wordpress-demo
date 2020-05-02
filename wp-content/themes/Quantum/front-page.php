<?php get_header(); ?>

<div class="banner front_banner"
  style="background-image: url('<?php echo get_theme_file_uri(); ?>/images/small-banner-1.jpg)">
  <div class="container">
    <div class="banner__content">
      <h1><span>Детский хоккейный клуб</span>Квантум</h1>
      <a href="#" class="button banner_button">Подать заявку</a>
    </div>
  </div>
</div>

<div class="container front-page_container">

  <!-- POST -->
  <?php get_template_part('template-parts/front-post'); ?>

  <!-- VK Viget -->
  <?php get_template_part('template-parts/vk'); ?>

  <!-- Latest photos -->
  <?php get_template_part('template-parts/photos'); ?>

</div>
</div>

<?php get_footer(); ?>