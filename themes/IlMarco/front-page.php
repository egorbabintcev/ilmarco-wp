<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package test
 */

get_header();
?>

<main>
  <section class="offer">
    <div class="container">
      <div class="benefits">
        <div class="benefits-item"><img class="benefits-item__img" src="<?= get_template_directory_uri(); ?>/assets/img/benefits-veggies.png" alt="" />
          <p class="benefits-item__text">Только натуральные итальянские ингредиенты</p>
        </div>
        <div class="benefits-item"><img class="benefits-item__img" src="<?= get_template_directory_uri(); ?>/assets/img/benefits-pizzabox.png" alt="" />
          <p class="benefits-item__text">Быстрая доставка до вашей двери</p>
        </div>
        <div class="benefits-item"><img class="benefits-item__img" src="<?= get_template_directory_uri(); ?>/assets/img/benefits-pizza.png" alt="" />
          <p class="benefits-item__text">Уникальная рецептура</p>
        </div>
      </div>
      <div class="content">
        <h1 class="content__title">
          <?= get_field('main_title', 'options') ?>
        </h1>
        <small class="content__small">
          <?= get_field('main_subtitle', 'options') ?>
        </small>
        <a class="content__btn" href="#catalog">Выбрать пиццу</a>
      </div>
      <a href="#catalog" class="offer-arrow">
        <svg class="offer-arrow">
          <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/icons-sprite.svg#arrow-down"></use>
        </svg>
      </a>
      <img class="bg-pic" src="<?= get_template_directory_uri(); ?>/assets/img/pic-pizza.png" />
    </div>
  </section>
  <section class="catalog" id="catalog">
    <div class="container">
      <h2 class="catalog__title"><?= get_field('catalog_title', 'options'); ?></h2>
      <div class="catalog-menu">
        <div class="catalog-menu__logo">
          <img src="<?= get_template_directory_uri(); ?>/assets/img/company-logo-xs.png" alt="">
        </div>
        <div class="catalog-radio">
          <label class="catalog-radio__label">
            <input type="radio" name="food_type" checked="checked" data-category="pizza" />
            <div class="catalog-radio__item"><img class="catalog-radio__item-img" src="<?= get_template_directory_uri(); ?>/assets/img/radio-pizza.png" alt="" />
              <p class="catalog-radio__item-text">Пиццы</p>
            </div>
          </label>
          <label class="catalog-radio__label">
            <input type="radio" name="food_type" data-category="salad-and-soup" />
            <div class="catalog-radio__item"><img class="catalog-radio__item-img" src="<?= get_template_directory_uri(); ?>/assets/img/radio-salad.png" alt="" />
              <p class="catalog-radio__item-text">Салаты и супы</p>
            </div>
          </label>
          <label class="catalog-radio__label">
            <input type="radio" name="food_type" data-category="dessert-and-drink" />
            <div class="catalog-radio__item"><img class="catalog-radio__item-img" src="<?= get_template_directory_uri(); ?>/assets/img/radio-drink.png" alt="" />
              <p class="catalog-radio__item-text">Десерты и напитки</p>
            </div>
          </label>
        </div>
        <div class="header-cart catalog-menu__cart">
          <a href="<?php echo esc_url(wc_get_cart_url()); ?>" class="header-cart__toggler">
            <div class="header-cart__btn <?php if (WC()->cart->get_cart_contents_count() == 0) : echo "is-empty"; endif; ?>">
              <span class="header-cart__text">Корзина</span>
              <div class="wrap">
                <div class="separator"></div>
                <svg class="header-cart__icon">
                  <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/icons-sprite.svg#cart"></use>
                </svg>
                <span class="header-cart__count">
                  <?php echo WC()->cart->get_cart_contents_count(); ?>
                </span>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="catalog-pages">
        <div class="food-page is-active" data-category="pizza">
          <?php
          $loop = new WP_Query(array(
            'post_type' => 'product',
            'posts_per_page' => 99999,
            'tax_query' => array(
              array(
                'taxonomy' => 'product_cat',
                'field' => 'slug',
                'terms' => 'pizza'
              )
            )
          ));

          while ($loop->have_posts()) :
            $loop->the_post();
            global $product;
          ?>
            <div class="food-card">
              <img src="<?= wp_get_attachment_image_url($product->get_image_id(), 'full') ?>" alt="" class="food-card__img">
              <div class="food-card-info">
                <p class="food-card__title"><?php the_title(); ?></p>
                <p class="food-card__descr"><?php the_field("pizza_ingredients"); ?></p>

                <div class="food-card__spec-wrapper">
                  <div class="food-card__spec">
                    <svg>
                      <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/icons-sprite.svg#scales"></use>
                    </svg>
                    <span><?php the_field("pizza_weight"); ?></span>
                  </div>
                  <div class="food-card__spec">
                    <svg>
                      <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/icons-sprite.svg#pizza"></use>
                    </svg>
                    <span><?php the_field("pizza_diameter"); ?></span>
                  </div>
                </div>
                <div class="food-card__sum">
                  <div class="food-card__counter">
                    <button class="food-card__counter-btn dec">
                      <svg>
                        <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/icons-sprite.svg#minus"></use>
                      </svg>
                    </button>
                    <span class="food-card__counter-num">1</span>
                    <button class="food-card__counter-btn inc">
                      <svg>
                        <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/icons-sprite.svg#plus"></use>
                      </svg>
                    </button>
                  </div>
                  <span class="food-card__price"><span class="price" data-start="<?= $product->get_price(); ?>"><?= $product->get_price(); ?></span>
                    <small>₽</small></span>
                </div>


                <a href="?add-to-cart=<?= $product->get_id() ?>" data-quantity="1"
                   class="food-card__btn food-card__btn_desktop button product_type_simple add_to_cart_button ajax_add_to_cart"
                   data-product_id="<?= $product->get_id() ?>" data-product_sku=""
                   aria-label="Добавить в корзину" rel="nofollow">В коробку</a>
                <a href="?add-to-cart=<?= $product->get_id() ?>" data-quantity="1"
                   class="food-card__btn food-card__btn_mobile button product_type_simple add_to_cart_button ajax_add_to_cart"
                   data-product_id="<?= $product->get_id() ?>" data-product_sku=""
                   aria-label="Добавить в корзину" rel="nofollow">В коробку за <?= $product->get_price(); ?> ₽</a>

                <!-- <a href="?add-to-cart=<?= $product->get_id() ?>" data-quantity="10" class="food-card__btn food-card__btn_desktop button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?= $product->get_id() ?>" data-product_sku="" aria-label="Добавить в корзину" rel="nofollow">В коробку</a>

                <a href="?add-to-cart=<?= $product->get_id() ?>" data-quantity="10" class="food-card__btn food-card__btn_mobile button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?= $product->get_id() ?>" data-product_sku="" aria-label="Добавить в корзину" rel="nofollow">В коробку за <?= $product->get_price(); ?> ₽</a> -->
              </div>
            </div>
          <?php
            wp_reset_postdata();
          endwhile;
          ?>
        </div>
        <div class="food-page" data-category="salad-and-soup">
          <?php
          $loop = new WP_Query(array(
            'post_type' => 'product',
            'posts_per_page' => 99999,
            'tax_query' => array(
              array(
                'taxonomy' => 'product_cat',
                'field' => 'slug',
                'terms' => 'salad-and-soup'
              )
            )
          ));

          while ($loop->have_posts()) :
            $loop->the_post();
            global $product;
          ?>
            <div class="food-card">
              <img src="<?= wp_get_attachment_image_url($product->get_image_id(), 'full') ?>" alt="" class="food-card__img">
              <div class="food-card-info">
                <p class="food-card__title"><?php the_title(); ?></p>
                <p class="food-card__descr"><?php the_field("dish_ingredients"); ?></p>

                <div class="food-card__spec-wrapper">
                  <div class="food-card__spec">
                    <svg>
                      <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/icons-sprite.svg#scales"></use>
                    </svg>
                    <span><?php the_field("dish_weight"); ?></span>
                  </div>
                  <!-- <div class="food-card__spec">
                    <svg>
                      <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/icons-sprite.svg#pizza"></use>
                    </svg>
                    <span><?php the_field("pizza_diameter"); ?> см</span>
                  </div> -->
                </div>
                <div class="food-card__sum">
                  <div class="food-card__counter">
                    <button class="food-card__counter-btn dec">
                      <svg>
                        <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/icons-sprite.svg#minus"></use>
                      </svg>
                    </button>
                    <span class="food-card__counter-num">1</span>
                    <button class="food-card__counter-btn inc">
                      <svg>
                        <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/icons-sprite.svg#plus"></use>
                      </svg>
                    </button>
                  </div>
                  <span class="food-card__price"><span class="price" data-start="<?= $product->get_price(); ?>"><?= $product->get_price(); ?></span>
                    <small>₽</small></span>
                </div>
                  <a href="?add-to-cart=<?= $product->get_id() ?>" data-quantity="1"
                     class="food-card__btn food-card__btn_desktop button product_type_simple add_to_cart_button ajax_add_to_cart"
                     data-product_id="<?= $product->get_id() ?>" data-product_sku=""
                     aria-label="Добавить в корзину" rel="nofollow">В коробку</a>
                  <a href="?add-to-cart=<?= $product->get_id() ?>" data-quantity="1"
                     class="food-card__btn food-card__btn_mobile button product_type_simple add_to_cart_button ajax_add_to_cart"
                     data-product_id="<?= $product->get_id() ?>" data-product_sku=""
                     aria-label="Добавить в корзину" rel="nofollow">В коробку за <?= $product->get_price(); ?> ₽</a>

                  <!-- <a href="?add-to-cart=<?= $product->get_id() ?>" data-quantity="10" class="food-card__btn food-card__btn_desktop button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?= $product->get_id() ?>" data-product_sku="" aria-label="Добавить в корзину" rel="nofollow">В коробку</a>

				  <a href="?add-to-cart=<?= $product->get_id() ?>" data-quantity="10" class="food-card__btn food-card__btn_mobile button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?= $product->get_id() ?>" data-product_sku="" aria-label="Добавить в корзину" rel="nofollow">В коробку за <?= $product->get_price(); ?> ₽</a> -->
              </div>
            </div>
          <?php
            wp_reset_postdata();
          endwhile;
          ?>
        </div>
        <div class="food-page" data-category="dessert-and-drink">
          <?php
          $loop = new WP_Query(array(
            'post_type' => 'product',
            'posts_per_page' => 99999,
            'tax_query' => array(
              array(
                'taxonomy' => 'product_cat',
                'field' => 'slug',
                'terms' => 'dessert-and-drink'
              )
            )
          ));

          while ($loop->have_posts()) :
            $loop->the_post();
            global $product;
          ?>
            <div class="food-card">
              <img src="<?= wp_get_attachment_image_url($product->get_image_id(), 'full') ?>" alt="" class="food-card__img">
              <div class="food-card-info">
                <p class="food-card__title"><?php the_title(); ?></p>
                <p class="food-card__descr"><?php the_field("dish_ingredients"); ?></p>
                <div class="food-card__sum">
                  <div class="food-card__counter">
                    <button class="food-card__counter-btn dec">
                      <svg>
                        <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/icons-sprite.svg#minus"></use>
                      </svg>
                    </button>
                    <span class="food-card__counter-num">1</span>
                    <button class="food-card__counter-btn inc">
                      <svg>
                        <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/icons-sprite.svg#plus"></use>
                      </svg>
                    </button>
                  </div>
                  <span class="food-card__price"><span class="price" data-start="<?= $product->get_price(); ?>"><?= $product->get_price(); ?></span>
                    <small>₽</small></span>
                </div>
                <a href="#" class="food-card__btn food-card__btn_desktop">В коробку</a>
                <a href="#" class="food-card__btn food-card__btn_mobile">В коробку за <?= $product->get_price(); ?> ₽</a>

                <!-- <a href="?add-to-cart=<?= $product->get_id() ?>" data-quantity="10" class="food-card__btn food-card__btn_desktop button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?= $product->get_id() ?>" data-product_sku="" aria-label="Добавить в корзину" rel="nofollow">В коробку</a>

                <a href="?add-to-cart=<?= $product->get_id() ?>" data-quantity="10" class="food-card__btn food-card__btn_mobile button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?= $product->get_id() ?>" data-product_sku="" aria-label="Добавить в корзину" rel="nofollow">В коробку за <?= $product->get_price(); ?> ₽</a> -->
              </div>
            </div>
          <?php
            wp_reset_postdata();
          endwhile;
          ?>
        </div>
      </div>
      <img class="bg-pic bg-pic_flag" src="<?= get_template_directory_uri(); ?>/assets/img/pic-flag.png" />
      <img class="bg-pic bg-pic_tomato" src="<?= get_template_directory_uri(); ?>/assets/img/pic-tomato.png" />
      <img class="bg-pic bg-pic_pizza-stroke" src="<?= get_template_directory_uri(); ?>/assets/img/pic-pizza-stroke.png" />
    </div>
  </section>
  <section class="stocks" id="stocks">
    <div class="container">
      <h2 class="stocks__title"><?= get_field('promo_title', 'options'); ?></h2>
    </div>
    <div class="stocks__slider">
      <?php
        $promo_images = get_field('promo_banners', 'options');
        foreach ($promo_images as $image):
      ?>
        <div class="stocks__slide"><img src="<?= $image['url']; ?>" alt=""></div>
      <?php
        endforeach;
      ?>
    </div>
  </section>
  <section class="advantages" id="technology">
    <div class="container">
      <img class="advantages__img" src="<?= get_template_directory_uri(); ?>/assets/img/love-italy.png" />
      <h2 class="advantages__title"><?= get_field('technology_title', 'options'); ?></h2>
      <div class="advantages-cards">
        <div class="item">
          <h3 class="item__title">Созревание теста более 24 часов</h3>
          <p class="item__subtitle">Тесто выдерживается более 24 часов для созвервани, что делает его
            более легким и полезным</p><img class="item__img" src="<?= get_template_directory_uri(); ?>/assets/img/advantage-dough.png" />
        </div>
        <div class="item item_reversed">
          <h3 class="item__title">Выпекается в печи при температуре более 400 градусов</h3>
          <p class="item__subtitle">Пицца сохраняется хруст и мягкость при приготовлении </p><img class="item__img" src="<?= get_template_directory_uri(); ?>/assets/img/advantage-oven.png" />
        </div>
        <div class="item">
          <h3 class="item__title">Готовится профессиональным пиццайоло</h3>
          <p class="item__subtitle">Каждая пицца индивидуальна — ручной работы, никогда не повторится</p>
          <img class="item__img" src="<?= get_template_directory_uri(); ?>/assets/img/advantage-yolo.png" />
        </div>
      </div>
    </div>
  </section>
  <section class="conditions">
    <div class="container">
      <h2 class="conditions__title"><?= get_field('ingredients_title', 'options'); ?></h2>
      <p class="conditions__subtitle"><?= get_field('ingredients_subtitle', 'options'); ?></p>
      <div class="conditions-wrapper">
        <div class="conditions-items">
          <div class="conditions-item">
            <div class="conditions-item__img"><img src="<?= get_template_directory_uri(); ?>/assets/img/conditions-item-flour.png" /><span>01</span>
            </div>
            <h3 class="conditions-item__text"><strong>Мука CAPUTO</strong>
              из мягких сортов пшеницы с высоким содержанием протеинов идеально подходит для долгого
              «созревания» теста, делает его более легким и полезным
            </h3>
          </div>
          <div class="conditions-item">
            <div class="conditions-item__img"><img src="<?= get_template_directory_uri(); ?>/assets/img/conditions-item-ferment.png" /><span>02</span>
            </div>
            <h3 class="conditions-item__text"><strong>Пшеничная закваска</strong>
              ускоряет созревание и улучшает вкус теста
            </h3>
          </div>
          <div class="conditions-item">
            <div class="conditions-item__img"><img src="<?= get_template_directory_uri(); ?>/assets/img/conditions-item-sauce.png" /><span>03</span>
            </div>
            <h3 class="conditions-item__text"><strong>
                Соус из очищенных
                <br />томатов в собственном соку</strong>
              <br />• Доставляется с острова Сардиния
              <br />• Без консервантов и красителей
            </h3>
          </div>
          <div class="conditions-item">
            <div class="conditions-item__img"><img src="<?= get_template_directory_uri(); ?>/assets/img/conditions-item-mozzarella.png" /><span>04</span>
            </div>
            <h3 class="conditions-item__text"><strong>Натуральная моцарелла с ферментами Mauro Casalli
</strong><br />• Без глютена
              <br />• Без ГМО
			  <br />• Без пальмового масла
			  <br />• Без лимонной кислоты
              <br /><small>(срок хранения всего 7 суток)</small>
            </h3>
          </div>
          <div class="conditions-item">
            <div class="conditions-item__img"><img src="<?= get_template_directory_uri(); ?>/assets/img/conditions-item-olive.png" /><span>05</span>
            </div>
            <h3 class="conditions-item__text"><strong>Оливковое масло </strong><br />Полностью усваивается
              <br />организмом и помогает
              <br />регулировать уровень холестерина
            </h3>
          </div>
          <img class="conditions-img" src="<?= get_template_directory_uri(); ?>/assets/img/conditions-pizza.png" />
        </div>
      </div>
      <img class="bg-pic" src="<?= get_template_directory_uri(); ?>/assets/img/pic-cutter.png" />
    </div>
  </section>
  <section class="reviews">
    <div class="container">
      <h2 class="reviews__title"><?= get_field('reviews_title', 'options'); ?></h2>
      <div class="reviews-rate">
        <div class="reviews-wrapper">
          <p class="reviews-rate__text">
            Средняя оценка
            <br />нашего заведения
          </p>
          <div class="reviews-rate__estimation">
            <p class="reviews-rate__estimation-count">5.0</p>
            <div>
              <div class="reviews-rate__stars">
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
              </div>
              <p class="reviews-rate__estimation-text">150+ оценок</p>
            </div>
          </div>
        </div>
        <div class="reviews-rate__links"><a class="reviews-rate__links-btn" href="https://yandex.ru/maps/org/pitstseriya_il_marko/35155027042/?ll=37.449340%2C55.881164&amp;oid=35155027042&amp;ol=biz&amp;sctx=ZAAAAAgBEAAaKAoSCWGxv%2ByeuUJAEc5D6BnG8EtAEhIJAIDDuP6kjT8RAEAIrfj1cj8iBQABAgQFKAowADjhjabhycivmSVAoZIHSAFVzczMPlgAagJydXAAnQHNzEw9oAEAqAEAvQHGHqfJwgEG4sic%2B4IB&amp;sll=37.449340%2C55.881164&amp;source=wizbiz_new_text_single&amp;sspn=0.010282%2C0.004629&amp;text=%D0%BF%D0%B8%D1%86%D1%86%D0%B5%D1%80%D0%B8%D1%8F%20%D0%B8%D0%BB%D1%8C%20%D0%BC%D0%B0%D1%80%D0%BA%D0%BE&amp;z=17.09" target="_blank"><img src="<?= get_template_directory_uri(); ?>/assets/img/reviews-yandex-maps.png" alt="" /></a><a class="reviews-rate__links-btn" href="https://www.google.com/maps/place/%D0%9F%D0%B8%D1%86%D1%86%D0%B5%D1%80%D0%B8%D1%8F+%D0%98%D0%BB%D1%8C+%D0%BC%D0%B0%D1%80%D0%BA%D0%BE/@55.8811769,37.4471002,17z/data=!3m1!4b1!4m5!3m4!1s0x46b538904c083e25:0xea93252a56fa0a36!8m2!3d55.8811769!4d37.4492889" target="_blank"><img src="<?= get_template_directory_uri(); ?>/assets/img/reviews-google-maps.png" alt="" /></a></div>
      </div>
      <div style="width: 100%;">
        <div class="reviews__slider">
          <?php
            $reviews_images = get_field('reviews_screenshots', 'options');
            foreach ($reviews_images as $image):
          ?>
            <div class="reviews__slide"><img src="<?= $image['url'] ?>" alt="" /></div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>
  <section class="delievery" id="delievery">
    <div class="container">
      <div class="delievery-1">
        <h2 class="delievery__title"><?= get_field('delievery_title', 'options'); ?></h2>
        <p class="delievery__subtitle"><?= get_field('delievery_subtitle', 'options'); ?></p>
        <div class="delievery__card"><img class="delievery__card-img" src="<?= get_template_directory_uri(); ?>/assets/img/delievery-bag.png" />
          <p class="delievery__card-text">
            В термосумках с подогревом,
            <br /><strong>
              пицца не теряет своего вкуса
              <br />и не черствеет</strong>
          </p>
        </div>
        <div class="delievery__card"><img class="delievery__card-img" src="<?= get_template_directory_uri(); ?>/assets/img/delievery-boxes.png" />
          <p class="delievery__card-text">
            Пицца упакована
            <br />в микрогофрокартонные
            <br />коробки повышенной
            <br />теплостойкости
          </p>
        </div>
        <img class="delievery-1-bg" src="<?= get_template_directory_uri(); ?>/assets/img/delievery-background.jpg" /><img class="delievery-1-man" src="<?= get_template_directory_uri(); ?>/assets/img/delievery-man.png" />
      </div>
      <div class="delievery-2">
        <div class="delievery__feature">
          <svg class="delievery__feature-icon">
            <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/icons-sprite.svg#street-map"></use>
          </svg>
          <p class="delievery__feature-text">
            Чтобы обеспечить максимальную
            <br />свежесть, мы
            <strong>
              доставляем пиццу только
              <br />в радиусе 4-5 км от пиццерии</strong>
          </p>
        </div>
        <div class="delievery__feature">
          <svg class="delievery__feature-icon">
            <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/icons-sprite.svg#clock"></use>
          </svg>
          <p class="delievery__feature-text">
            Принимаем и доставляем
            <br />заказы
            <strong>в рабочее время ресторана</strong>
          </p>
        </div>
        <a class="delievery__btn" href="#map">посмотреть зону доставки</a>
      </div>
      <img class="bg-pic" src="<?= get_template_directory_uri(); ?>/assets/img/pic-cola.png" alt="" />
    </div>
  </section>
  <section class="services">
    <div class="container">
      <div class="services-order">
        <h3 class="services-order__title services__title">
          Также
          <strong>
            вы можете
            <span class="yellow">
              заказать пиццу
              <br />через привычные сервисы
            </span></strong>прямо
          <br />с мобильного телефона
        </h3>
        <p class="services-order__text services__text">Особенно актульно если вы не входите в зону
          доставки</p>
        <div>
          <a href="https://eda.yandex/restaurant/ilmarco_pravoberezhnaya" class="services-order__card services-order__card_yellow"><img class="services-order__card-brand" src="<?= get_template_directory_uri(); ?>/assets/img/services-brand-yafood.png" alt="" /><img class="services-order__card-foodbag" src="<?= get_template_directory_uri(); ?>/assets/img/services-foodbag-yafood.png" />
            <p class="services-order__card-btn">Перейти</p>
          </a>
          <a href="https://www.delivery-club.ru/srv/IL_MARKO_msk?vendorCategoriesQuery=300777969" class="services-order__card services-order__card_green"><img class="services-order__card-brand" src="<?= get_template_directory_uri(); ?>/assets/img/services-brand-dclub.png" alt="" /><img class="services-order__card-foodbag" src="<?= get_template_directory_uri(); ?>/assets/img/services-foodbag-dclub.png" />
            <p class="services-order__card-btn">Перейти</p>
          </a>
        </div>
      </div>
      <div class="services-payment">
        <h3 class="services-payment__title services__title">
          Воспользуйтесь
          <strong>
            любым
            <br />удобным способом оплаты</strong>
        </h3>
        <div class="services-payment__types">
          <div class="services-payment__type">
            <p class="services-payment__subtitle">На сайте:</p>
            <p class="services-payment__text services__text">Можете оплатить банковкой картой</p>
            <div class="services-payment__wrap"><img src="<?= get_template_directory_uri(); ?>/assets/img/services-brand-visa.png" alt="" /><img src="<?= get_template_directory_uri(); ?>/assets/img/services-brand-mcard.png" alt="" /><img src="<?= get_template_directory_uri(); ?>/assets/img/services-brand-gpay.png" alt="" /><img src="<?= get_template_directory_uri(); ?>/assets/img/services-brand-applepay.png" alt="" /></div>
            <p class="services-payment__text services__text">Используя процессинговый центр Яндекс
              касса:</p>
            <div class="services-payment__wrap"><img class="big" src="<?= get_template_directory_uri(); ?>/assets/img/services-brand-yakassa.png" alt="" /></div>
          </div>
          <div class="services-payment__type">
            <p class="services-payment__subtitle">Курьеру при получении:</p>
            <div class="services-payment__card"><img src="<?= get_template_directory_uri(); ?>/assets/img/services-brand-paypass.png" alt="" />
              <p class="services__text">
                Банковской картой через терминал
                <br />с бесконтактной оплатой
              </p>
            </div>
            <div class="services-payment__card"><img src="<?= get_template_directory_uri(); ?>/assets/img/services-brand-cash.png" alt="" />
              <div>
                <p class="services__text">Наличными</p><small>
                  При оформлении заказа укажите сумму,
                  <br />с которой Вам необходима сдача</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="contacts" id="contacts">
    <div class="container">
      <h2 class="contacts__title"><?= get_field('contacts_title', 'options'); ?></h2>
      <div class="contacts-switch">
        <label class="contacts-switch__knob">
          <input
            type="radio"
            name="location"
            checked="checked"
            data-map="https://yandex.ru/map-widget/v1/?um=constructor%3A2c77f3705cfd06a9a0f0ec2bf96419774c378c0a435a260ab686838fe3c322b7&amp;amp;source=constructor"
            data-address="Москва, ул. Правобережная 1Б, ТЦ «Капитолий», 2 этаж, балкон"
            data-tel="+7 (499) 501-57-71"
            data-time="Пн-Вс: с 10:00 до 22:00"
            data-zone="https://yandex.ru/map-widget/v1/-/CCQ~MMdQxB" />
          <span>Химки</span>
        </label>
        <label class="contacts-switch__knob">
          <input
            type="radio"
            name="location"
            data-map="https://yandex.ru/map-widget/v1/?um=constructor%3A869bf185546c3c6b2c8292c6f4da5482067e050754aa3d2411577226a1d20e7b&amp;source=constructor"
            data-address="г. Москва ул. Льва Толстого, 23к7с3"
            data-tel="+7 (495) 500-86-12"
            data-time="Пн-Вс: с 11:00 до 22:00"
            data-zone="https://yandex.ru/map-widget/v1/-/CCQ~MMx0sD" />
          <span>Хамовники</span>
        </label>
      </div>
    </div>
    <div class="contacts-info__wrapper">
      <iframe id="map" src="https://yandex.ru/map-widget/v1/?um=constructor%3A2c77f3705cfd06a9a0f0ec2bf96419774c378c0a435a260ab686838fe3c322b7&amp;amp;source=constructor" frameborder="0"></iframe>
      <div class="contacts-info">
        <div class="contacts-info__group">
          <p class="contacts-info__title">Телефон:</p><a class="contacts-info__subtitle tel" href="tel:<?= clerphone(get_field('tel', 'options')); ?>"><?= get_field('tel', 'options'); ?></a>
        </div>
        <div class="contacts-info__group">
          <p class="contacts-info__title">WhatsApp | Viber | Telegram | Вконтакте</p><a class="contacts-info__subtitle tel" href="tel:<?= clerphone(get_field('tel', 'options')); ?>"><?= get_field('tel', 'options'); ?></a>
          <div class="contacts-info__btns"><a class="contacts-info__social-btn whatsapp" href="https://wa.me/74995015771">
              <svg>
                <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/icons-sprite.svg#whatsapp"></use>
              </svg>
            </a>
            <!-- <a class="contacts-info__social-btn viber">
              <svg>
                <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/icons-sprite.svg#viber"></use>
              </svg>
            </a><a class="contacts-info__social-btn telegram">
              <svg>
                <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/icons-sprite.svg#telegram"></use>
              </svg>
            </a><a class="contacts-info__social-btn vk">
              <svg>
                <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/icons-sprite.svg#vk"></use>
              </svg>
            </a>
            -->
          </div>
        </div>
        <div class="contacts-info__group">
          <p class="contacts-info__title">Почта для связи:</p><a class="contacts-info__subtitle mail" href="mailto:<?= get_field('email', 'options'); ?>"><?= get_field('email', 'options'); ?></a>
        </div>
        <div class="contacts-info__group">
          <p class="contacts-info__title">Адрес:</p>
          <p class="contacts-info__subtitle address">Москва, ул. Правобережная 1Б, ТЦ «Капитолий», 2 этаж,
            балкон</p>
        </div>
        <div class="contacts-info__group">
          <p class="contacts-info__title">Режим работы:</p>
          <p class="contacts-info__subtitle worktime">Пн-Вс: с 10:00 до 22:00</p>
        </div>
        <a class="contacts-info__btn shipping-zone">Посмотреть зону доставки</a>
      </div>
    </div>
  </section>
</main>

<?php

get_footer();
