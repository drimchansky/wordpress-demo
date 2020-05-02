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
  <div class="post">
    <div class="post__inner">
      <h2 class="post__title">Placeholder title</h2>
      <div class="post__info">
        <div class="post__info-item">
          <?php get_template_part('images/inline/calendar'); ?>
          <span>Date</span>
        </div>
        <div class="post__info-item">
          <svg>
            <?php get_template_part('images/inline/user'); ?>
            <span>Author</span>
        </div>
      </div>
      <p class="post__text">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem rerum esse facere atque, mollitia
        doloribus corporis maiores sapiente quaerat! Aperiam maxime voluptatibus alias voluptate, esse saepe
        reprehenderit! Placeat, obcaecati sit!
      </p>
      <a class="post__link" href="#">Читать далее</a>
    </div>
    <a class="button post_button">Читайте наш блог!</a>
  </div>

  <!-- VK Viget -->
  <div class="vk">vk placeholder</div>

  <!-- Latest photos -->
  <div class="photos">
    <div class="photos__inner">
      <h2 class="photos__title">Последние фото</h2>
      <ul class="photos__list">
        <li class="photos__item">
          <div>
            <img src="" alt="" class="photos__img">
          </div>
        </li>
        <li class="photos__item">
          <div>
            <img src="" alt="" class="photos__img">
          </div>
        </li>
        <li class="photos__item">
          <div>
            <img src="" alt="" class="photos__img">
          </div>
        </li>
        <li class="photos__item">
          <div>
            <img src="" alt="" class="photos__img">
          </div>
        </li>
      </ul>
    </div>
    <a class="button post_button">Все фото</a>
  </div>

  <div class="matches">

    <div class="matches__line">
      <h2 class="matches__title">Матчи</h2>
      <button class="matches__button">Прошедшие</button>
      <button class="matches__button">Предстоящие</button>
    </div>

    <ul class="matches__list">
      <li class="matches__item">
        <div class="matches__info">
          <span class="matches__date">18 ноября 2019, пн</span>
          <span class="matches__city">Котлас</span>
        </div>
      </li>
    </ul>

    <div class="matches__center">
      <div class="matches__team">
        <h3 class="matches__team-title">Квантум</h3>
        <span class="matches__city">Котлас</span>
      </div>

      <div class="matches__score">
        <span>6</span> - <span>5</span>
      </div>

      <div class="matches__team">
        <h3 class="matches__team-title">Квантум</h3>
        <span class="matches__city">Котлас</span>
      </div>
    </div>
  </div>



</div>
</div>

<?php get_footer(); ?>