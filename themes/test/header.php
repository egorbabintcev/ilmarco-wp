<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package test
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <?= the_field('metrics_code', 'options'); ?>

  <meta charset="<?php bloginfo('charset'); ?>">

  <meta name="description" content="" />
  <meta property="og:description" content="" />
  <meta property="og:image" content="" />

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>

  <link rel="icon" type="image-x/icon" href="<?= get_template_directory_uri(); ?>/assets/img/favicons/favicon.ico" />
  <link rel="icon" type="image/png" href="<?= get_template_directory_uri(); ?>/assets/img/favicons/favicon.png" />
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <header class="header">
    <div class="container">
      <a class="header-logo" href="/">
        <img class="header-logo__img" src="<?= get_template_directory_uri(); ?>/assets/img/company-logo.png" alt="" />
      </a>
      <div class="header-toggler">
      <svg class="ham hamRotate ham1" viewbox="0 0 100 100">
        <path class="line top" d="m 30,33 h 40 c 0,0 9.044436,-0.654587 9.044436,-8.508902 0,-7.854315 -8.024349,-11.958003 -14.89975,-10.85914 -6.875401,1.098863 -13.637059,4.171617 -13.637059,16.368042 v 40" />
        <path class="line middle" d="m 30,50 h 40" />
        <path class="line bottom" d="m 30,67 h 40 c 12.796276,0 15.357889,-11.717785 15.357889,-26.851538 0,-15.133752 -4.786586,-27.274118 -16.667516,-27.274118 -11.88093,0 -18.499247,6.994427 -18.435284,17.125656 l 0.252538,40" />
      </svg>
      </div>
      <div class="mobile-nav__logo" data-wrap="mobile-nav">
        <img src="<?= get_template_directory_uri(); ?>/assets/img/company-logo.png" alt="">
      </div>
      <div class="header-about" data-wrap="mobile-nav">
        <div class="header-about__slogan">
          <p>Доставка пиццы </p>
          <div class="header-about__switch">
            <svg class="header-about__switch-icon">
              <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/icons-sprite.svg#location"></use>
            </svg>
            <a href="#">Хамовники</a>
            <a href="#" class="is-active">Xимки</a>
          </div>
        </div>
        <div class="header-about__promises">
          <span class="header-about__time">42 мин</span>
          <div class="header-about__popup">
            <i class="header-about__popup-dot"></i>
            <div class="header-about__popup-window">
              <div class="col">
                <p class="title">42 минуты</p>
                <p class="subtitle subtitle_semi-transparent">Среднее время доставки</p>
                <!-- <p class="subtitle subtitle_semi-transparent">
                  Если не успеем за 60 минут,</br>
                  вы получите сертификат</br>
                  на большую пиццу
                </p> -->
              </div>
              <div class="col">
                <p class="title title_yellow">
                  5.00
                  <svg class="rate-star">
                    <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/icons-sprite.svg#rate-star"></use>
                  </svg>
                  <svg class="rate-star">
                    <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/icons-sprite.svg#rate-star"></use>
                  </svg>
                  <svg class="rate-star">
                    <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/icons-sprite.svg#rate-star"></use>
                  </svg>
                  <svg class="rate-star">
                    <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/icons-sprite.svg#rate-star"></use>
                  </svg>
                  <svg class="rate-star">
                    <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/icons-sprite.svg#rate-star"></use>
                  </svg>
                </p>
                <p class="subtitle subtitle_semi-transparent">150+ оценок</p>
                <!-- <p class="subtitle subtitle_semi-transparent">Оценить заказ можно</br> в мобильном приложении</p> -->
              </div>
            </div>
          </div>
          <span class="header-about__rating">
            5.00
            <svg>
              <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/icons-sprite.svg#rate-star"></use>
            </svg>
            <svg>
              <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/icons-sprite.svg#rate-star"></use>
            </svg>
            <svg>
              <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/icons-sprite.svg#rate-star"></use>
            </svg>
            <svg>
              <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/icons-sprite.svg#rate-star"></use>
            </svg>
            <svg>
              <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/icons-sprite.svg#rate-star"></use>
            </svg>
          </span>
        </div>
      </div>
      <ul class="mobile-nav__menu" data-wrap="mobile-nav">
        <li class="mobile-nav__menu-item">
          <a href="#stocks">Акции</a>
        </li>
        <li class="mobile-nav__menu-item">
          <a href="#catalog">Каталог</a>
        </li>
        <li class="mobile-nav__menu-item">
          <a href="#delievery">Доставка</a>
        </li>
        <li class="mobile-nav__menu-item">
          <a href="#technology">Технология приготовления</a>
        </li>
        <li class="mobile-nav__menu-item">
          <a href="#contacts">Контакты</a>
        </li>
      </ul>
      <a class="header-phone" data-wrap="mobile-nav" href="tel:<?= clerphone(get_field('tel', 'options')); ?>">
        <div class="header-phone__btn">
          <svg class="header-phone__btn-icon">
            <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/icons-sprite.svg#phone-light"></use>
          </svg>
        </div>
        <span class="header-phone__text"><?php the_field('tel', 'options'); ?></span>
      </a>


<!--      <div class="header-cart">-->
<!--        <a href="#" class="header-cart__btn">-->
<!--          <span class="header-cart__text">Корзина</span>-->
<!--          <div class="separator"></div>-->
<!--          <svg class="header-cart__icon">-->
<!--            <use xlink:href="--><?//= get_template_directory_uri(); ?><!--/assets/img/icons-sprite.svg#cart"></use>-->
<!--          </svg>-->
<!--          <span class="header-cart__count">3</span>-->
<!--        </a>-->
<!---->
<!---->
<!--        <div class="mini-cart">-->
<!--          <ul class="mini-cart__list">-->
<!--            <li class="mini-cart__item">-->
<!--              <div class="col">-->
<!--                <img src="--><?//= get_template_directory_uri(); ?><!--/assets/img/catalog-pizza-2.jpg" class="mini-cart__item-img">-->
<!--                <div>-->
<!--                  <p class="mini-cart__item-title">Баварская</p>-->
<!--                  <div class="mini-cart__item-counter">-->
<!--                    <button class="mini-cart__item-counter-btn dec">-->
<!--                      <svg>-->
<!--                        <use xlink:href="--><?//= get_template_directory_uri(); ?><!--/assets/img/icons-sprite.svg#minus"></use>-->
<!--                      </svg>-->
<!--                    </button>-->
<!--                    <span class="mini-cart__item-counter-num">1</span>-->
<!--                    <button class="mini-cart__item-counter-btn inc">-->
<!--                      <svg>-->
<!--                        <use xlink:href="--><?//= get_template_directory_uri(); ?><!--/assets/img/icons-sprite.svg#plus"></use>-->
<!--                      </svg>-->
<!--                    </button>-->
<!--                  </div>-->
<!--                </div>-->
<!--              </div>-->
<!--              <div class="col">-->
<!--                <span class="mini-cart__item-price"><span class="price" data-start="575">575</span>-->
<!--                  <small>₽</small></span>-->
<!--                <a href="#" class="mini-cart__item-del">-->
<!--                  <svg>-->
<!--                    <use xlink:href="--><?//= get_template_directory_uri(); ?><!--/assets/img/icons-sprite.svg#trash-icon"></use>-->
<!--                  </svg>-->
<!--                </a>-->
<!--              </div>-->
<!--            </li>-->
<!--            <li class="mini-cart__item">-->
<!--              <div class="col">-->
<!--                <img src="--><?//= get_template_directory_uri(); ?><!--/assets/img/catalog-pizza-2.jpg" class="mini-cart__item-img">-->
<!--                <div>-->
<!--                  <p class="mini-cart__item-title">Баварская</p>-->
<!--                  <div class="mini-cart__item-counter">-->
<!--                    <button class="mini-cart__item-counter-btn dec">-->
<!--                      <svg>-->
<!--                        <use xlink:href="--><?//= get_template_directory_uri(); ?><!--/assets/img/icons-sprite.svg#minus"></use>-->
<!--                      </svg>-->
<!--                    </button>-->
<!--                    <span class="mini-cart__item-counter-num">1</span>-->
<!--                    <button class="mini-cart__item-counter-btn inc">-->
<!--                      <svg>-->
<!--                        <use xlink:href="--><?//= get_template_directory_uri(); ?><!--/assets/img/icons-sprite.svg#plus"></use>-->
<!--                      </svg>-->
<!--                    </button>-->
<!--                  </div>-->
<!--                </div>-->
<!--              </div>-->
<!--              <div class="col">-->
<!--                <span class="mini-cart__item-price"><span class="price" data-start="575">575</span>-->
<!--                  <small>₽</small></span>-->
<!--                <a href="#" class="mini-cart__item-del">-->
<!--                  <svg>-->
<!--                    <use xlink:href="--><?//= get_template_directory_uri(); ?><!--/assets/img/icons-sprite.svg#trash-icon"></use>-->
<!--                  </svg>-->
<!--                </a>-->
<!--              </div>-->
<!--            </li>-->
<!--            <li class="mini-cart__item">-->
<!--              <div class="col">-->
<!--                <img src="--><?//= get_template_directory_uri(); ?><!--/assets/img/catalog-pizza-2.jpg" class="mini-cart__item-img">-->
<!--                <div>-->
<!--                  <p class="mini-cart__item-title">Баварская</p>-->
<!--                  <div class="mini-cart__item-counter">-->
<!--                    <button class="mini-cart__item-counter-btn dec">-->
<!--                      <svg>-->
<!--                        <use xlink:href="--><?//= get_template_directory_uri(); ?><!--/assets/img/icons-sprite.svg#minus"></use>-->
<!--                      </svg>-->
<!--                    </button>-->
<!--                    <span class="mini-cart__item-counter-num">1</span>-->
<!--                    <button class="mini-cart__item-counter-btn inc">-->
<!--                      <svg>-->
<!--                        <use xlink:href="--><?//= get_template_directory_uri(); ?><!--/assets/img/icons-sprite.svg#plus"></use>-->
<!--                      </svg>-->
<!--                    </button>-->
<!--                  </div>-->
<!--                </div>-->
<!--              </div>-->
<!--              <div class="col">-->
<!--                <span class="mini-cart__item-price"><span class="price" data-start="575">575</span>-->
<!--                  <small>₽</small></span>-->
<!--                <a href="#" class="mini-cart__item-del">-->
<!--                  <svg>-->
<!--                    <use xlink:href="--><?//= get_template_directory_uri(); ?><!--/assets/img/icons-sprite.svg#trash-icon"></use>-->
<!--                  </svg>-->
<!--                </a>-->
<!--              </div>-->
<!--            </li>-->
<!--            <li class="mini-cart__item">-->
<!--              <div class="col">-->
<!--                <img src="--><?//= get_template_directory_uri(); ?><!--/assets/img/catalog-pizza-2.jpg" class="mini-cart__item-img">-->
<!--                <div>-->
<!--                  <p class="mini-cart__item-title">Баварская</p>-->
<!--                  <div class="mini-cart__item-counter">-->
<!--                    <button class="mini-cart__item-counter-btn dec">-->
<!--                      <svg>-->
<!--                        <use xlink:href="--><?//= get_template_directory_uri(); ?><!--/assets/img/icons-sprite.svg#minus"></use>-->
<!--                      </svg>-->
<!--                    </button>-->
<!--                    <span class="mini-cart__item-counter-num">1</span>-->
<!--                    <button class="mini-cart__item-counter-btn inc">-->
<!--                      <svg>-->
<!--                        <use xlink:href="--><?//= get_template_directory_uri(); ?><!--/assets/img/icons-sprite.svg#plus"></use>-->
<!--                      </svg>-->
<!--                    </button>-->
<!--                  </div>-->
<!--                </div>-->
<!--              </div>-->
<!--              <div class="col">-->
<!--                <span class="mini-cart__item-price"><span class="price" data-start="575">575</span>-->
<!--                  <small>₽</small></span>-->
<!--                <a href="#" class="mini-cart__item-del">-->
<!--                  <svg>-->
<!--                    <use xlink:href="--><?//= get_template_directory_uri(); ?><!--/assets/img/icons-sprite.svg#trash-icon"></use>-->
<!--                  </svg>-->
<!--                </a>-->
<!--              </div>-->
<!--            </li>-->
<!--          </ul>-->
<!--          <div class="mini-cart__total">-->
<!--            <span>Сумма заказа</span>-->
<!--            <span>575 <small>₽</small></span>-->
<!--          </div>-->
<!--        </div>-->
<!---->
<!--          <div class="mini-cart">-->
<!--		      --><?php //woocommerce_mini_cart(); ?>
<!--          </div>-->
<!--      </div>-->

        <div class="header-cart">
            <a href="<?php echo esc_url( wc_get_cart_url() ); ?>" class="header-cart__btn">
                <span class="header-cart__text">Корзина</span>
                <div class="wrap">
                <?php if ( ! WC()->cart->get_cart_contents_count() == 0 ) { ?>
                  <div class="separator"></div>
                  <svg class="header-cart__icon">
                    <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/icons-sprite.svg#cart"></use>
                  </svg>
                  <span class="header-cart__count">
                        <?php echo WC()->cart->get_cart_contents_count(); ?>
                        </span>
                <?php } elseif ( WC()->cart->get_cart_contents_count() == 0 ) { ?>
                  <div class="separator"></div>
                  <svg class="header-cart__icon">
                    <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/icons-sprite.svg#cart"></use>
                  </svg>
                  <span class="header-cart__count">
                        <?php // echo WC()->cart->get_cart_contents_count(); ?>
                        0
                        </span>
                <?php } ?>
                </div>
            </a>
        </div>
    </div>
  </header>
