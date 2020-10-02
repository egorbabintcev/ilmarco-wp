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

<?php wp_footer(); ?>

</body>
</html>
