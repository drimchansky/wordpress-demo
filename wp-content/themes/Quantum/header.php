<!DOCTYPE html>
<html class="page" <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700&display=swap&subset=cyrillic"
    rel="stylesheet">
  <?php wp_head(); ?>
</head>

<!-- BODY -->

<body class="page__body" <?php body_class(); ?>>

  <!-- HAMBURGER -->
  <button id="hamburger" class="hamburger hamburger--spin" type="button" aria-label="Menu" aria-controls="navigation">
    <span class="hamburger-box">
      <span class="hamburger-inner"></span>
    </span>
  </button>

  <!-- PAGE-CONTENT WRAPPER(wrapping all except footer)-->
  <div class="page__content">

    <header class="header">
      <div class="container">
        <div class="header__line header__line_thick">

          <!-- LOGO -->
          <a href="<?php echo site_url(); ?>" class="logo header_logo">
            Квантум
            <span class="logo__desc">Хоккейный клуб</span>
          </a>

          <nav class="nav nav_type-one">
            <ul class="nav__list">
              <li class="nav__item">
                <a href="<?php echo site_url(
                  '/gallery'
                ); ?>" class="nav__link">
                  <svg>
                    <use xlink:href="<?php echo get_theme_file_uri() .
                      '/images/gallery.svg#gallery'; ?>"></use>
                  </svg>
                  <span>Галерея</span>
                </a>
              </li>
              <li class="nav__item">
                <a href="<?php echo site_url(
                  '/record'
                ); ?>" class="nav__link">
                  <svg>
                    <use xlink:href="<?php echo get_theme_file_uri() .
                      '/images/edit.svg#edit'; ?>"></use>
                  </svg>
                  <span>Запись</span>
                </a>
              </li>
              <li class="nav__item">
                <a href="<?php echo site_url(
                  '/matches'
                ); ?>" class="nav__link">
                  <svg>
                    <use xlink:href="<?php echo get_theme_file_uri() .
                      '/images/ball.svg#ball'; ?>"></use>
                  </svg>
                  <span>Матчи</span>
                </a>
              </li>
            </ul>
          </nav>

          <div class="social header_social">
            <snap class="social__tag">#квантумвперед</snap>
            <ul class="social__list">
              <li class="social__item">
                <a href="#" class="social__link">
                  <svg>
                    <use xlink:href="<?php echo get_theme_file_uri() .
                      '/images/call.svg#call'; ?>"></use>
                  </svg>
                </a>
              </li>
              <li class="social__item">
                <a href="#" class="social__link">
                  <svg>
                    <use xlink:href="<?php echo get_theme_file_uri() .
                      '/images/whatsapp.svg#whatsapp'; ?>"></use>
                  </svg>
                </a>
              </li>
              <li class="social__item">
                <a href="#" class="social__link">
                  <svg>
                    <use xlink:href="<?php echo get_theme_file_uri() .
                      '/images/instagram.svg#instagram'; ?>"></use>
                  </svg>
                </a>
              </li>
              <li class="social__item">
                <a href="#" class="social__link">
                  <svg>
                    <use xlink:href="<?php echo get_theme_file_uri() .
                      '/images/vk.svg#vk'; ?>"></use>
                  </svg>
                </a>
              </li>
              <li class="social__item">
                <a href="#" class="social__link">
                  <svg>
                    <use xlink:href="<?php echo get_theme_file_uri() .
                      '/images/youtube.svg#youtube'; ?>"></use>
                  </svg>
                </a>
              </li>
            </ul>
          </div>
        </div>


        <div id="menu" class="header__line header__line_thin">
          <nav class="nav nav_type-two">
            <ul class="nav__list">
              <li class="nav__item">
                <a href="<?php echo site_url(
                  '/shop'
                ); ?>" class="nav__link">
                  <svg>
                    <use xlink:href="<?php echo get_theme_file_uri() .
                      '/images/store.svg#store'; ?>"></use>
                  </svg>
                  <span>Магазин</span>
                </a>
              </li>
              <li class="nav__item">
                <a href="#" class="nav__link">
                  <span>Новости</span>
                </a>
              </li>
              <li class="nav__item">
                <a href="<?php echo site_url(
                  '/branches'
                ); ?>" class="nav__link">
                  <span>Филиалы</span>
                </a>
                <ul>
                  <li><a href="<?php echo site_url(
                    '/branches/kotlas'
                  ); ?>">Котлас</a></li>
                  <li><a href="<?php echo site_url(
                    '/branches/vychegodsky'
                  ); ?>">Вычегодский</a></li>
                  <li><a href="<?php echo site_url(
                    '/branches/limenda'
                  ); ?>">Лименда</a></li>
                </ul>
              </li>
              <li class="nav__item">
                <a href="<?php echo site_url(
                  '/trainings'
                ); ?>" class="nav__link">
                  <span>Тренировки</span>
                </a>
              </li>
              <li class="nav__item">
                <a href="#" class="nav__link">
                  <svg>
                    <use xlink:href="<?php echo get_theme_file_uri() .
                      '/images/enter.svg#enter'; ?>"></use>
                  </svg>
                  <span>Личный кабинет</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </header>