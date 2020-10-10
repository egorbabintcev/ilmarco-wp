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

<footer class="footer zz">
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

<?php //if( ! is_cart() ) : ?>
    <!--== Start Mini Cart Wrapper ==-->
    <div class="modal-minicart" id="miniCart-popup">
        <div class="minicart-content-wrap">
			<?php woocommerce_mini_cart() ?>
        </div>
        <button title="Close (Esc)" type="button" class="mfp-close">×</button>
    </div>
    <!--== End Mini Cart Wrapper ==-->
<?php //endif; ?>

<div class="modal modal-callback" id="modal-callback">
  <div class="modal-wrapper">
    <div class="modal-content">
      <button class="modal-close">
        <svg>
          <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/icons-sprite.svg#close-btn"></use>
        </svg>
      </button>
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
<div class="modal modal-privacy" id="modal-privacy">
  <div class="modal-wrapper">
    <div class="modal-content">
      <button class="modal-close">
        <svg>
          <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/icons-sprite.svg#close-btn"></use>
        </svg>
      </button>
      <p>Администрация сайта https://ilmarco.ru/ (далее Сайт) с уважением относится к правам посетителей
        Сайта. Мы безоговорочно признаем важность конфиденциальности личной информации посетителей нашего Сайта.
      </p>
      <p>Посещая Сайт, Вы полностью соглашаетесь с данной Политикой конфиденциальности.<br>
        Основные положения нашей политики конфиденциальности формулируются следующим образом:<br>
        • Мы не передаем Вашу персональную информацию третьим лицам.<br>
        • Мы не передаем Вашу контактную информацию без Вашего согласия.<br>
        • Вы самостоятельно определяете объем раскрываемой персональной информации.</p>
      <p><strong><br>Собираемая информация</strong><br>
        Мы собираем следующую информацию:<br>
        • Ваша персональная информация, которую Вы сознательно согласились раскрыть нам.<br>
        • Техническая информация, автоматически собираемая программным обеспечением Сайта во время его
        посещения.<br>
        • Техническую информацию о посещении Сайта (обезличенную) также собирают установленные на сайте счетчики
        статистики.</p>
      <p><strong><br>Использование полученной информации</strong><br>
        • Информация, предоставляемая Вами при использовании виджетов обратной связи, а также техническая
        информация используется исключительно для улучшения работы сайта. Вся контактная информация, которую Вы
        нам предоставляете, раскрывается только с Вашего разрешения. Адреса электронной почты никогда не
        публикуются на Сайте и используются нами только для связи с Вами.</p>
      <p><strong><br>Использование cookies</strong><br>
        • Мы никогда не предоставляем Вашу личную информацию третьим лицам, кроме случаев, когда это прямо может
        требовать законодательство (например, по запросу суда).</p>
      <p><strong><br>
          Предоставление информации третьим лицам</strong><br>
        • На Сайте применяется технология идентификации пользователей, основанная на использовании файлов cookies.
        Сookies – это небольшие текстовые файлы, сохраняемые на Вашем компьютере посредством веб-браузера..<br>
        • При использовании Пользователем Сайта на компьютер, используемый им для доступа, могут быть записаны
        файлы cookies, которые в дальнейшем будут использованы для автоматической авторизации Пользователя на
        Сайте, а также для сбора статистических данных, в частности о посещаемости Сайта. При этом мы никогда не
        сохраняем персональные данные или пароли в файлах cookies.<br>
        • Если Вы все же полагаете, что по тем или иным причинам использование технологии cookies для Вас
        неприемлемо, Вы вправе запретить сохранение файлов cookies на компьютере, используемом для доступа к
        Сайту, соответствующим образом настроив браузер. При этом следует иметь в виду, что все сервисы в сети
        Интернет, использующие данную технологию, окажутся недоступными.</p>
      <p><strong><br>
          Защита данных</strong><br>
        • Администрация Сайта осуществляет защиту информации, предоставленной пользователями, и использует ее
        только в соответствии с принятой Политикой конфиденциальности. На Сайте используются общепринятые методы
        безопасности для обеспечения защиты информации от потери, искажения и несанкционированного
        распространения. Безопасность реализуется программными средствами сетевой защиты, процедурами проверки
        доступа, применением криптографических средств защиты информации, соблюдением политики конфиденциальности.
      </p>
      <p><strong><br>
          Заключительные положения</strong><br>
        Никакие из содержащихся здесь заявлений не означают заключения договора между Владельцем Сайта и
        Пользователем, предоставляющим персональную информацию. Политика конфиденциальности лишь проинформирует
        Вас о подходах Сайта к работе с персональными данными.<br>
        Мы оставляем за собой право вносить изменения в настоящую политику конфиденциальности в любое время без
        предварительного уведомления.</p>
    </div>
  </div>
</div>

<?php wp_footer(); ?>

</body>
</html>
