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
                    <div class="benefits-item"><img class="benefits-item__img"
                                                    src="<?= get_template_directory_uri(); ?>/assets/img/benefits-veggies.png"
                                                    alt=""/>
                        <p class="benefits-item__text">Только натуральные итальянские ингредиенты</p>
                    </div>
                    <div class="benefits-item"><img class="benefits-item__img"
                                                    src="<?= get_template_directory_uri(); ?>/assets/img/benefits-pizzabox.png"
                                                    alt=""/>
                        <p class="benefits-item__text">Доставим до вашей двери за 35 минут</p>
                    </div>
                    <div class="benefits-item"><img class="benefits-item__img"
                                                    src="<?= get_template_directory_uri(); ?>/assets/img/benefits-pizza.png"
                                                    alt=""/>
                        <p class="benefits-item__text">Будет надолго приятное насыщение</p>
                    </div>
                </div>
                <div class="content">
                    <h1 class="content__title">
                        Попробуйте<br/>
                        <span class="orange">неаполитанскую</span><br/>
                        пиццу,
                        <br/>
                    </h1>
                    <small class="content__small">
                      приготовленную по авторскому<br />
                      рецепту, которому нет аналогов<br />
                      в России
                    </small>
                    <a class="content__btn" href="#catalog">Подобрать пиццу для себя</a>
                </div>
                <a href="#catalog" class="offer-arrow">
                    <svg class="offer-arrow">
                        <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/icons-sprite.svg#arrow-down"></use>
                    </svg>
                </a>
                <img class="bg-pic" src="<?= get_template_directory_uri(); ?>/assets/img/pic-pizza.png"/>
            </div>
        </section>
        <section class="catalog" id="catalog">
            <div class="container">
                <h2 class="catalog__title">
                    Попробуйте всего 1 кусочек
                    <br/>и вы
                    <strong>будто окажетесь в Италии</strong>
                </h2>
                <div class="catalog-radio">
                    <label class="catalog-radio__label">
                        <input type="radio" name="food_type" checked="checked" data-category="pizza"/>
                        <div class="catalog-radio__item"><img class="catalog-radio__item-img"
                                                              src="<?= get_template_directory_uri(); ?>/assets/img/radio-pizza.png"
                                                              alt=""/>
                            <p class="catalog-radio__item-text">Пиццы</p>
                        </div>
                    </label>
                    <label class="catalog-radio__label">
                        <input type="radio" name="food_type" data-category="salad-and-soup"/>
                        <div class="catalog-radio__item"><img class="catalog-radio__item-img"
                                                              src="<?= get_template_directory_uri(); ?>/assets/img/radio-salad.png"
                                                              alt=""/>
                            <p class="catalog-radio__item-text">Салаты и супы</p>
                        </div>
                    </label>
                    <label class="catalog-radio__label">
                        <input type="radio" name="food_type" data-category="dessert-and-drink"/>
                        <div class="catalog-radio__item"><img class="catalog-radio__item-img"
                                                              src="<?= get_template_directory_uri(); ?>/assets/img/radio-drink.png"
                                                              alt=""/>
                            <p class="catalog-radio__item-text">Десерты и напитки</p>
                        </div>
                    </label>
                </div>
                <div class="catalog-pages">
                    <div class="food-page is-active" data-category="pizza">
                      <?php
                      $loop = new WP_Query( array( 'post_type' => 'product' ) );

                      while ( $loop->have_posts() ):
                        $loop->the_post();
                        global $product;
                        ?>
                                      <div class="food-card">
                                          <img src="<?php the_field( "pizza_preview" ); ?>" alt="" class="food-card__img">
                                          <div class="food-card-info">
                                              <p class="food-card__title"><?php the_title(); ?></p>
                                              <p class="food-card__descr"><?php the_field( "pizza_ingredients" ); ?></p>

                                              <div class="food-card__spec-wrapper">
                                                  <div class="food-card__spec">
                                                      <svg>
                                                          <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/icons-sprite.svg#scales"></use>
                                                      </svg>
                                                      <span><?php the_field( "pizza_weight" ); ?> гр.</span>
                                                  </div>
                                                  <div class="food-card__spec">
                                                      <svg>
                                                          <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/icons-sprite.svg#pizza"></use>
                                                      </svg>
                                                      <span><?php the_field( "pizza_diameter" ); ?> см</span>
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
                                                  <span class="food-card__price"><span class="price"
                                                                                      data-start="<?= $product->get_price(); ?>"><?= $product->get_price(); ?></span>
                                <small>₽</small></span>
                                              </div>
                                              <a class="food-card__btn food-card__btn_desktop" href="?add-to-cart=<?= $product->get_id() ?>">В коробку</a>
                                              <a class="food-card__btn food-card__btn_mobile" href="?add-to-cart=<?= $product->get_id() ?>">В коробку
                                                  за <?= $product->get_price(); ?> ₽</a>
                                          </div>
                                      </div>
                        <?php
                        wp_reset_postdata();
                      endwhile;
                      ?>
                    </div>
                    <div class="food-page" data-category="salad-and-soup">
                      <?php
                      $loop = new WP_Query( array( 'post_type' => 'product' ) );

                      while ( $loop->have_posts() ):
                        $loop->the_post();
                        global $product;
                        ?>
                                      <div class="food-card">
                                          <img src="<?php the_field( "pizza_preview" ); ?>" alt="" class="food-card__img">
                                          <div class="food-card-info">
                                              <p class="food-card__title"><?php the_title(); ?></p>
                                              <p class="food-card__descr"><?php the_field( "pizza_ingredients" ); ?></p>

                                              <div class="food-card__spec-wrapper">
                                                  <div class="food-card__spec">
                                                      <svg>
                                                          <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/icons-sprite.svg#scales"></use>
                                                      </svg>
                                                      <span><?php the_field( "pizza_weight" ); ?> гр.</span>
                                                  </div>
                                                  <div class="food-card__spec">
                                                      <svg>
                                                          <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/icons-sprite.svg#pizza"></use>
                                                      </svg>
                                                      <span><?php the_field( "pizza_diameter" ); ?> см</span>
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
                                                  <span class="food-card__price"><span class="price"
                                                                                      data-start="<?= $product->get_price(); ?>"><?= $product->get_price(); ?></span>
                                <small>₽</small></span>
                                              </div>
                                              <a class="food-card__btn food-card__btn_desktop" href="?add-to-cart=<?= $product->get_id() ?>">В коробку</a>
                                              <a class="food-card__btn food-card__btn_mobile" href="?add-to-cart=<?= $product->get_id() ?>">В коробку
                                                  за <?= $product->get_price(); ?> ₽</a>
                                          </div>
                                      </div>
                        <?php
                        wp_reset_postdata();
                      endwhile;
                      ?>
                    </div>
                    <div class="food-page" data-category="dessert-and-drink">
                      <?php
                      $loop = new WP_Query( array( 'post_type' => 'product' ) );

                      while ( $loop->have_posts() ):
                        $loop->the_post();
                        global $product;
                        ?>
                                      <div class="food-card">
                                          <img src="<?php the_field( "pizza_preview" ); ?>" alt="" class="food-card__img">
                                          <div class="food-card-info">
                                              <p class="food-card__title"><?php the_title(); ?></p>
                                              <p class="food-card__descr"><?php the_field( "pizza_ingredients" ); ?></p>

                                              <div class="food-card__spec-wrapper">
                                                  <div class="food-card__spec">
                                                      <svg>
                                                          <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/icons-sprite.svg#scales"></use>
                                                      </svg>
                                                      <span><?php the_field( "pizza_weight" ); ?> гр.</span>
                                                  </div>
                                                  <div class="food-card__spec">
                                                      <svg>
                                                          <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/icons-sprite.svg#pizza"></use>
                                                      </svg>
                                                      <span><?php the_field( "pizza_diameter" ); ?> см</span>
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
                                                  <span class="food-card__price"><span class="price"
                                                                                      data-start="<?= $product->get_price(); ?>"><?= $product->get_price(); ?></span>
                                <small>₽</small></span>
                                              </div>
                                              <a class="food-card__btn food-card__btn_desktop" href="?add-to-cart=<?= $product->get_id() ?>">В коробку</a>
                                              <a class="food-card__btn food-card__btn_mobile" href="?add-to-cart=<?= $product->get_id() ?>">В коробку
                                                  за <?= $product->get_price(); ?> ₽</a>
                                          </div>
                                      </div>
                        <?php
                        wp_reset_postdata();
                      endwhile;
                      ?>
                    </div>
                </div>
                <img class="bg-pic bg-pic_flag" src="<?= get_template_directory_uri(); ?>/assets/img/pic-flag.png"/>
                <img class="bg-pic bg-pic_tomato" src="<?= get_template_directory_uri(); ?>/assets/img/pic-tomato.png"/>
                <img class="bg-pic bg-pic_pizza-stroke" src="<?= get_template_directory_uri(); ?>/assets/img/pic-pizza-stroke.png"/>
            </div>
        </section>
        <section class="stocks">
            <div class="container">
                <h2 class="stocks__title"><strong>Получите скидки на комбо-наборы,</strong><br/>в дни рождения и при
                    корпоративном заказе</h2>
            </div>
            <div class="stocks__slider">
                <div class="stocks__slide"><img src="<?= get_template_directory_uri(); ?>/assets/img/slider-image.jpg"
                                                alt=""/></div>
                <div class="stocks__slide"><img src="<?= get_template_directory_uri(); ?>/assets/img/slider-image.jpg"
                                                alt=""/></div>
                <div class="stocks__slide"><img src="<?= get_template_directory_uri(); ?>/assets/img/slider-image.jpg"
                                                alt=""/></div>
                <div class="stocks__slide"><img src="<?= get_template_directory_uri(); ?>/assets/img/slider-image.jpg"
                                                alt=""/></div>
                <div class="stocks__slide"><img src="<?= get_template_directory_uri(); ?>/assets/img/slider-image.jpg"
                                                alt=""/></div>
            </div>
        </section>
        <section class="advantages">
            <div class="container"><img class="advantages__img"
                                        src="<?= get_template_directory_uri(); ?>/assets/img/love-italy.png"/>
                <h2 class="advantages__title">Изготавливаем<strong><span class="yellow">
              100% натуральную
              <br/>пиццу</span></strong>
                    по технологиям Неаполя
                </h2>
                <div class="advantages-cards">
                    <div class="item">
                        <h3 class="item__title">Пицца легко откусывается и жуётся как обычный хлеб</h3>
                        <p class="item__subtitle">Тесто выдерживается более 24 часов для созвервани, что делает его
                            более легким и полезным</p><img class="item__img"
                                                            src="<?= get_template_directory_uri(); ?>/assets/img/advantage-dough.png"/>
                    </div>
                    <div class="item item_reversed">
                        <h3 class="item__title">Сохраняется хруст и мягкость при приготовлении</h3>
                        <p class="item__subtitle">Пицца выпекается в итальянской печи при температуре 450 градусов в
                            течение 90-120 секунд</p><img class="item__img"
                                                          src="<?= get_template_directory_uri(); ?>/assets/img/advantage-oven.png"/>
                    </div>
                    <div class="item">
                        <h3 class="item__title">Готовится профессиональным пиццайоло</h3>
                        <p class="item__subtitle">Каждая пицца индивидуальна — ручной работы, никогда не повторится</p>
                        <img class="item__img"
                             src="<?= get_template_directory_uri(); ?>/assets/img/advantage-yolo.png"/>
                    </div>
                </div>
            </div>
        </section>
        <section class="conditions">
            <div class="container">
                <h2 class="conditions__title">
                    В состав нашего теста входят
                    <br/>только<strong><span class="yellow">
              натуральные ингредиенты,
              <br/>привезённые из Италии</span></strong>
                </h2>
                <p class="conditions__subtitle">
                    У нашего рецепта теста нет аналогов,
                    <br/>мы практически добились идеала
                </p>
                <div class="conditions-wrapper">
                    <div class="conditions-items">
                        <div class="conditions-item">
                            <div class="conditions-item__img"><img
                                        src="<?= get_template_directory_uri(); ?>/assets/img/conditions-item-flour.png"/><span>01</span>
                            </div>
                            <h3 class="conditions-item__text"><strong>Мука CAPUTO</strong>
                                из мягких сортов пшеницы с высоким содержанием протеинов идеально подходит для долгого
                                «созревания» теста, делает его более легким и полезным
                            </h3>
                        </div>
                        <div class="conditions-item">
                            <div class="conditions-item__img"><img
                                        src="<?= get_template_directory_uri(); ?>/assets/img/conditions-item-ferment.png"/><span>02</span>
                            </div>
                            <h3 class="conditions-item__text"><strong>Пшеничная закваска</strong>
                                ускоряет созревание и улучшает вкус теста
                            </h3>
                        </div>
                        <div class="conditions-item">
                            <div class="conditions-item__img"><img
                                        src="<?= get_template_directory_uri(); ?>/assets/img/conditions-item-sauce.png"/><span>03</span>
                            </div>
                            <h3 class="conditions-item__text"><strong>
                                    Соус из очищенных
                                    <br/>томатов в собственном соку</strong>
                                <br/>• Доставляется с острова Сардиния
                                <br/>• Без консервантов и красителей
                            </h3>
                        </div>
                        <div class="conditions-item">
                            <div class="conditions-item__img"><img
                                        src="<?= get_template_directory_uri(); ?>/assets/img/conditions-item-mozzarella.png"/><span>04</span>
                            </div>
                            <h3 class="conditions-item__text"><strong>Моцарелла Fior di Latte</strong><br/>которая
                                тянется и не сгорает
                                <br/>при высокой температуре
                                <br/><small>(срок хранения всего 7 суток)</small>
                            </h3>
                        </div>
                        <div class="conditions-item">
                            <div class="conditions-item__img"><img
                                        src="<?= get_template_directory_uri(); ?>/assets/img/conditions-item-olive.png"/><span>05</span>
                            </div>
                            <h3 class="conditions-item__text"><strong>Масло оливковое</strong><br/>Полностью усваивается
                                <br/>организмом и помогает
                                <br/>регулировать уровень холестерина
                            </h3>
                        </div>
                        <img class="conditions-img"
                             src="<?= get_template_directory_uri(); ?>/assets/img/conditions-pizza.png"/>
                    </div>
                </div>
                <img class="bg-pic" src="<?= get_template_directory_uri(); ?>/assets/img/pic-cutter.png"/>
            </div>
        </section>
        <section class="reviews">
            <div class="container">
                <h2 class="reviews__title">
                    Почитайте
                    <strong><span class="yellow">отзывы более 150 гурманов,</span></strong><br/>которые уже
                    <strong>оценили качество</strong>
                    нашей пиццы
                </h2>
                <div class="reviews-rate">
                    <div class="reviews-wrapper">
                        <p class="reviews-rate__text">
                            Средняя оценка
                            <br/>нашего заведения
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
                    <div class="reviews-rate__links"><a class="reviews-rate__links-btn"
                                                        href="https://yandex.ru/maps/org/pitstseriya_il_marko/35155027042/?ll=37.449340%2C55.881164&amp;oid=35155027042&amp;ol=biz&amp;sctx=ZAAAAAgBEAAaKAoSCWGxv%2ByeuUJAEc5D6BnG8EtAEhIJAIDDuP6kjT8RAEAIrfj1cj8iBQABAgQFKAowADjhjabhycivmSVAoZIHSAFVzczMPlgAagJydXAAnQHNzEw9oAEAqAEAvQHGHqfJwgEG4sic%2B4IB&amp;sll=37.449340%2C55.881164&amp;source=wizbiz_new_text_single&amp;sspn=0.010282%2C0.004629&amp;text=%D0%BF%D0%B8%D1%86%D1%86%D0%B5%D1%80%D0%B8%D1%8F%20%D0%B8%D0%BB%D1%8C%20%D0%BC%D0%B0%D1%80%D0%BA%D0%BE&amp;z=17.09"
                                                        target="_blank"><img
                                    src="<?= get_template_directory_uri(); ?>/assets/img/reviews-yandex-maps.png"
                                    alt=""/></a><a class="reviews-rate__links-btn"
                                                   href="https://www.google.com/maps/place/%D0%9F%D0%B8%D1%86%D1%86%D0%B5%D1%80%D0%B8%D1%8F+%D0%98%D0%BB%D1%8C+%D0%BC%D0%B0%D1%80%D0%BA%D0%BE/@55.8811769,37.4471002,17z/data=!3m1!4b1!4m5!3m4!1s0x46b538904c083e25:0xea93252a56fa0a36!8m2!3d55.8811769!4d37.4492889"
                                                   target="_blank"><img
                                    src="<?= get_template_directory_uri(); ?>/assets/img/reviews-google-maps.png"
                                    alt=""/></a></div>
                </div>
                <div style="width: 100%;">
                    <div class="reviews__slider">
                        <div class="reviews__slide"><img
                                    src="<?= get_template_directory_uri(); ?>/assets/img/reviews-slider-image-1.jpg"
                                    alt=""/></div>
                        <div class="reviews__slide"><img
                                    src="<?= get_template_directory_uri(); ?>/assets/img/reviews-slider-image-2.png"
                                    alt=""/></div>
                        <div class="reviews__slide"><img
                                    src="<?= get_template_directory_uri(); ?>/assets/img/reviews-slider-image-3.png"
                                    alt=""/></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="delievery">
            <div class="container">
                <div class="delievery-1">
                    <h2 class="delievery__title">
                        Наслаждайтесь
                        <strong>
                            горячей
                            <br/>и сочной пиццей,</strong>
                        прямо из печи
                    </h2>
                    <p class="delievery__subtitle">
                        Благодаря собственной службе доставки, пицца будет у вас
                        <br/>уже через ⏱ 35 минут и не потеряет сочность и аромат
                    </p>
                    <div class="delievery__card"><img class="delievery__card-img"
                                                      src="<?= get_template_directory_uri(); ?>/assets/img/delievery-bag.png"/>
                        <p class="delievery__card-text">
                            В термосумках с подогревом,
                            <br/><strong>
                                пицца не теряет своего вкуса
                                <br/>и не черствеет</strong>
                        </p>
                    </div>
                    <div class="delievery__card"><img class="delievery__card-img"
                                                      src="<?= get_template_directory_uri(); ?>/assets/img/delievery-boxes.png"/>
                        <p class="delievery__card-text">
                            Пицца упакована
                            <br/>в микрогофрокартонные
                            <br/>коробки повышенной
                            <br/>теплостойкости
                        </p>
                    </div>
                    <img class="delievery-1-bg"
                         src="<?= get_template_directory_uri(); ?>/assets/img/delievery-background.jpg"/><img
                            class="delievery-1-man"
                            src="<?= get_template_directory_uri(); ?>/assets/img/delievery-man.png"/>
                </div>
                <div class="delievery-2">
                    <div class="delievery__feature">
                        <svg class="delievery__feature-icon">
                            <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/icons-sprite.svg#street-map"></use>
                        </svg>
                        <p class="delievery__feature-text">
                            Чтобы обеспечить максимальную
                            <br/>свежесть, мы
                            <strong>
                                доставляем пиццу только
                                <br/>в радиусе 5-7 км от пиццерии</strong>
                        </p>
                    </div>
                    <div class="delievery__feature">
                        <svg class="delievery__feature-icon">
                            <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/icons-sprite.svg#clock"></use>
                        </svg>
                        <p class="delievery__feature-text">
                            Принимаем и доставляем
                            <br/>заказы
                            <strong>с 11:00 до 22:30</strong>
                        </p>
                    </div>
                    <a class="delievery__btn" href="#map">посмотреть зону доставки</a>
                </div>
                <img class="bg-pic" src="<?= get_template_directory_uri(); ?>/assets/img/pic-cola.png" alt=""/>
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
                <br/>через привычные сервисы
              </span></strong>прямо
                        <br/>с мобильного телефона
                    </h3>
                    <p class="services-order__text services__text">Особенно актульно если вы не входите в зону
                        доставки</p>
                    <div>
                        <a href="https://eda.yandex/restaurant/ilmarco_pravoberezhnaya"
                           class="services-order__card services-order__card_yellow"><img
                                    class="services-order__card-brand"
                                    src="<?= get_template_directory_uri(); ?>/assets/img/services-brand-yafood.png"
                                    alt=""/><img class="services-order__card-foodbag"
                                                 src="<?= get_template_directory_uri(); ?>/assets/img/services-foodbag-yafood.png"/>
                            <p class="services-order__card-btn">Перейти</p></a>
                        <a href="https://www.delivery-club.ru/srv/IL_MARKO_msk?vendorCategoriesQuery=300777969"
                           class="services-order__card services-order__card_green"><img
                                    class="services-order__card-brand"
                                    src="<?= get_template_directory_uri(); ?>/assets/img/services-brand-dclub.png"
                                    alt=""/><img class="services-order__card-foodbag"
                                                 src="<?= get_template_directory_uri(); ?>/assets/img/services-foodbag-dclub.png"/>
                            <p class="services-order__card-btn">Перейти</p></a>
                    </div>
                </div>
                <div class="services-payment">
                    <h3 class="services-payment__title services__title">
                        Воспользуйтесь
                        <strong>
                            любым
                            <br/>удобным способом оплаты</strong>
                    </h3>
                    <div class="services-payment__types">
                        <div class="services-payment__type">
                            <p class="services-payment__subtitle">На сайте:</p>
                            <p class="services-payment__text services__text">Можете оплатить банковкой картой</p>
                            <div class="services-payment__wrap"><img
                                        src="<?= get_template_directory_uri(); ?>/assets/img/services-brand-visa.png"
                                        alt=""/><img
                                        src="<?= get_template_directory_uri(); ?>/assets/img/services-brand-mcard.png"
                                        alt=""/><img
                                        src="<?= get_template_directory_uri(); ?>/assets/img/services-brand-gpay.png"
                                        alt=""/><img
                                        src="<?= get_template_directory_uri(); ?>/assets/img/services-brand-applepay.png"
                                        alt=""/></div>
                            <p class="services-payment__text services__text">Используя процессинговый центр Яндекс
                                касса:</p>
                            <div class="services-payment__wrap"><img class="big"
                                                                     src="<?= get_template_directory_uri(); ?>/assets/img/services-brand-yakassa.png"
                                                                     alt=""/></div>
                        </div>
                        <div class="services-payment__type">
                            <p class="services-payment__subtitle">Курьеру при получении:</p>
                            <div class="services-payment__card"><img
                                        src="<?= get_template_directory_uri(); ?>/assets/img/services-brand-paypass.png"
                                        alt=""/>
                                <p class="services__text">
                                    Банковской картой через терминал
                                    <br/>с бесконтактной оплатой
                                </p>
                            </div>
                            <div class="services-payment__card"><img
                                        src="<?= get_template_directory_uri(); ?>/assets/img/services-brand-cash.png"
                                        alt=""/>
                                <div>
                                    <p class="services__text">Наличными</p><small>
                                        При оформлении заказа укажите сумму,
                                        <br/>с которой Вам необходима сдача</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contacts" id="contacts">
            <div class="container">
                <h2 class="contacts__title">
                    Выберите подходящий филиал,
                    <br/>чтобы посмотреть
                    <strong>контакты для связи</strong>
                </h2>
                <div class="contacts-switch">
                    <label class="contacts-switch__knob">
                        <input
                          type="radio"
                          name="location"
                          checked="checked"
                          data-map="https://yandex.ru/map-widget/v1/?um=constructor%3A2c77f3705cfd06a9a0f0ec2bf96419774c378c0a435a260ab686838fe3c322b7&amp;amp;source=constructor"
                          data-address="Москва, ул. Правобережная 1Б, ТЦ «Капитолий», 2 этаж, балкон"
                        />
                        <span>Химки</span>
                    </label>
                    <label class="contacts-switch__knob">
                        <input
                          type="radio"
                          name="location"
                          data-map="https://yandex.ru/map-widget/v1/?um=constructor%3A869bf185546c3c6b2c8292c6f4da5482067e050754aa3d2411577226a1d20e7b&amp;source=constructor"
                          data-address="ул. Доватора, 11, корп. 1, Москва"
                        />
                        <span>Хамовники</span>
                    </label>
                </div>
            </div>
            <div class="contacts-info__wrapper">
                <iframe id="map"
                        src="https://yandex.ru/map-widget/v1/?um=constructor%3A2c77f3705cfd06a9a0f0ec2bf96419774c378c0a435a260ab686838fe3c322b7&amp;amp;source=constructor"
                        frameborder="0"></iframe>
                <div class="contacts-info">
                    <div class="contacts-info__group">
                        <p class="contacts-info__title">Телефон:</p><a class="contacts-info__subtitle"
                                                                       href="tel:+74995015771">+7 (499) 501-57-71</a>
                    </div>
                    <div class="contacts-info__group">
                        <p class="contacts-info__title">WhatsApp | Viber | Telegram | Вконтакте</p><a
                                class="contacts-info__subtitle" href="tel:+74995015771">+7 (499) 501-57-71</a>
                        <div class="contacts-info__btns"><a class="contacts-info__social-btn whatsapp">
                                <svg>
                                    <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/icons-sprite.svg#whatsapp"></use>
                                </svg>
                            </a><a class="contacts-info__social-btn viber">
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
                            </a></div>
                    </div>
                    <div class="contacts-info__group">
                        <p class="contacts-info__title">Почта для связи:</p><a class="contacts-info__subtitle mail"
                                                                               href="mailto:">feedback@ilmarco.ru</a>
                    </div>
                    <div class="contacts-info__group">
                        <p class="contacts-info__title">Адрес:</p>
                        <p class="contacts-info__subtitle address">Москва, ул. Правобережная 1Б, ТЦ «Капитолий», 2 этаж,
                            балкон</p>
                    </div>
                    <div class="contacts-info__group">
                        <p class="contacts-info__title">Режим работы:</p>
                        <p class="contacts-info__subtitle">Пн-Вс: с 10:00 до 22:00</p>
                    </div>
                    <a class="contacts-info__btn">Посмотреть зону доставки</a>
                </div>
            </div>
        </section>
    </main>

<?php

get_footer();
