<!-- PAGE-CONTENT(wrapping all except footer)-->
</div>

<!-- FOOTER -->
<footer class="footer">

  <div class="container footer_container">
    <!-- LEFT -->
    <div class="footer__left">

      <!-- LOGO -->
      <a href="/" class="logo footer_logo">
        Квантум
        <span class="logo__desc">Хоккейный клуб</span>
      </a>

      <div class="social footer_social">
        <span class="social__tag">#квантумвперед</span>
        <ul class="social__list">
          <li class="social__item">
            <a href="#" class="social__link">
              <?php get_template_part('images/inline/call'); ?>
            </a>
          </li>
          <li class="social__item">
            <a href="#" class="social__link">
              <?php get_template_part('images/inline/whatsapp'); ?>
            </a>
          </li>
          <li class="social__item">
            <a href="#" class="social__link">
              <?php get_template_part('images/inline/instagram'); ?>
            </a>
          </li>
          <li class="social__item">
            <a href="#" class="social__link">
              <?php get_template_part('images/inline/vk'); ?>
            </a>
          </li>
          <li class="social__item">
            <a href="#" class="social__link">
              <?php get_template_part('images/inline/youtube'); ?>
            </a>
          </li>
        </ul>
      </div>
    </div>



    <!-- CENTER -->
    <div class="footer__center">
      <nav class="site-map">
        <ul class="site-map__list">
          <li class="site-map__item"><a href="/" class="site-map__link">Главная</a></li>
          <li class="site-map__item"><a href="/" class="site-map__link">Галерея</a></li>
          <li class="site-map__item"><a href="/" class="site-map__link">Запись</a></li>
          <li class="site-map__item"><a href="/" class="site-map__link">Матчи</a></li>
        </ul>
      </nav>
      <nav class="site-map">
        <ul class="site-map__list">
          <li class="site-map__item"><a href="/" class="site-map__link">Тренировки</a></li>
          <li class="site-map__item"><a href="/" class="site-map__link">Расписание</a></li>
          <li class="site-map__item"><a href="/" class="site-map__link">Наш адрес</a></li>
        </ul>
      </nav>
    </div>

    <!-- LEFT -->
    <div class="footer__right">
      <nav class="nav footer_nav">
        <ul class="nav__list">
          <li class="nav__item">
            <a href="#" class="nav__link hide-pseudo">
              <?php get_template_part('images/inline/enter'); ?>
              <span>Личный кабинет</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>

    <!-- INFO -->
    <div class="footer__info">
      <p>Сделано <a href="#">DRIMchansky</a> на движке WordPress</p>
    </div>
  </div>


</footer>

<?php wp_footer(); ?>
</body>

</html>