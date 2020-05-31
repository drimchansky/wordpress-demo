<div class="post">
  <div class="post__inner">
    <h2 class="post__title"><?php the_title(); ?></h2>
    <div class="post__info">
      <div class="post__info-item">
        <?php get_template_part('images/inline/calendar'); ?>
        <span><?php the_date(); ?></span>
      </div>
      <div class="post__info-item">
        <?php get_template_part('images/inline/user'); ?>
        <span><?php the_author(); ?></span>
      </div>
    </div>
    <?php the_excerpt(); ?>
    <a class="post__link" href="<?php the_permalink(); ?>">Читать далее</a>
  </div>
</div>