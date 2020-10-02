<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package test
 */

?>

<footer class="footer">
    <div class="container">
        <div class="footer-info">
            <div class="footer-logo"><a href="/"><img src="<?= get_template_directory_uri(); ?>/assets/img/company-logo.png" alt=""/></a>
                <p>Настоящая неаполитанская пицца в Москве</p>
            </div>
            <div class="footer-social">
                <p>
                    Подписывайтесь
                    <br/>на нас в соцсетях:
                </p>
                <div class="footer-social__btn-group"><a class="footer-social__btn instagram">
                        <svg>
                            <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/icons-sprite.svg#instagram"></use>
                        </svg></a><a class="footer-social__btn vk">
                        <svg>
                            <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/icons-sprite.svg#vk"></use>
                        </svg></a><a class="footer-social__btn facebook">
                        <svg>
                            <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/icons-sprite.svg#facebook"></use>
                        </svg></a></div>
            </div>
            <div class="footer-contact"><a class="footer-contact__phone" href="tel:+74995015771">+7 499 501 57 71</a><a class="footer-contact__btn">Перезвоните мне</a></div>
        </div>
        <div class="footer-further"><small class="footer-further__oferta">Информация на сайте ilmarco.ru не является публичной офертой.</small><a class="footer-further__policy">Политика конфиденциальности</a></div>
    </div>
</footer>

<!-- Modal windows -->
<div class="modal modal-callback" id="modal-callback">
  <div class="modal-wrapper">
    <button class="modal-close">
      <svg>
        <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/icons-sprite.svg#close-btn"></use>
      </svg>
    </button>
    <div class="modal-content">
      <img src="<?= get_template_directory_uri(); ?>/assets/img/modal-callback-phone.png" alt="" class="modal-callback__img">
      <form class="modal-callback__form">
        <input type="hidden" name="order">
        <h3 class="modal-callback__title">Укажите ваши контактные данные</h3>
        <p class="modal-callback__subtitle">Наш оператор свяжется с Вами для уточнения деталей заказа</p>
        <div>
          <p class="modal-callback__hint">Введите ваше имя</p>
          <input type="text" name="name" class="modal-callback__input" placeholder="Например, Константин" required>
        </div>
        <div>
          <p class="modal-callback__hint">Введите ваш телефон</p>
          <input type="tel" name="phone" class="modal-callback__input" placeholder="+7 (___) ___-__-__" required>
        </div>
        <button type="submit" class="modal-callback__btn">Перезвоните мне</button>
        <label>
          <input type="checkbox" required checked="checked">
          <span class="modal-callback__confirm">
            Я принимаю условия <a href="#">передачи информации</a>
          </span>
        </label>
      </form>
    </div>
  </div>
</div>

<?php wp_footer(); ?>

</body>
</html>
