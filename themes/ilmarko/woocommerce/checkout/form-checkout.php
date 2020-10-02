<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout.
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
	echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );

	return;
}

?>

<div class="cart-step is-active">
    <h1 class="cart__title">Куда доставить?</h1>
    <div class="cart-switch">
        <label class="cart-switch__knob">
            <input type="radio" name="delievery_type" value="delievery"/>
            <span>Доставка</span>
        </label>
        <label class="cart-switch__knob">
            <input type="radio" name="delievery_type" checked="checked" value="pickup"/>
            <span>Самовывоз</span>
        </label>
    </div>
    <div class="cart-delievery-types">
        <div class="cart-delievery-type" id="delievery">
            <!--            <form>-->
            <!--                <div class="cart-delievery__input-wrapper">-->
            <!--                    <input type="text" class="cart-delievery__input w75" placeholder="Улица">-->
            <!--                    <input type="text" class="cart-delievery__input w25" placeholder="Дом">-->
            <!--                    <input type="text" class="cart-delievery__input w25" placeholder="Квартира">-->
            <!--                    <input type="text" class="cart-delievery__input w25" placeholder="Подъезд">-->
            <!--                    <input type="text" class="cart-delievery__input w25" placeholder="Код двери">-->
            <!--                    <input type="text" class="cart-delievery__input w25" placeholder="Этаж">-->
            <!--                    <textarea name="order_comments" class="cart-delievery__textarea" placeholder="Комментарий к заказу"></textarea>-->
            <!--                </div>-->
            <!--                <div class="cart-order-confirm cart-order-confirm_column">-->
            <!--                    <input type="text" class="cart-order-confirm__input" placeholder="Введите номер телефона">-->
            <!--                    <div class="cart-order-confirm__btn-wrapper">-->
            <!--                        <button type="submit" class="cart-order-confirm__btn cart__btn-next">Подтвердить заказ</button>-->
            <!--                        <label class="cart-order-confirm__label">-->
            <!--                            <input type="checkbox" required>-->
            <!--                            <span>Я принимаю условия <a href="#">передачи информации</a></span>-->
            <!--                        </label>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </form>-->
<!--			--><?php //echo do_shortcode( '[contact-form-7 id="130" title="Доставка"]' ) ?>

            <form name="checkout" method="post" class="checkout woocommerce-checkout"
                  action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">

				<?php if ( $checkout->get_checkout_fields() ) : ?>

					<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

                    <div class="col2-set" id="customer_details">
                        <div class="col-1">
							<?php do_action( 'woocommerce_checkout_billing' ); ?>
                        </div>

                        <div class="col-2">
							<?php do_action( 'woocommerce_checkout_shipping' ); ?>
                        </div>
                    </div>

					<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

				<?php endif; ?>

				<?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>

                <h3 id="order_review_heading"><?php esc_html_e( 'Your order', 'woocommerce' ); ?></h3>

				<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

                <div id="order_review" class="woocommerce-checkout-review-order">
					<?php do_action( 'woocommerce_checkout_order_review' ); ?>
                </div>

				<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>

            </form>
        </div>
        <div class="cart-delievery-type is-active" id="pickup">
            <!--            <form>-->
            <!--                <div class="cart-pickup__label-wrapper">-->
            <!--                    <label class="cart-pickup__label">-->
            <!--                        <input type="radio" name="point">-->
            <!--                        <span class="cart-pickup__radio"></span>-->
            <!--                        <div class="cart-pickup__content">-->
            <!--                            <p class="cart-pickup__title">Химки</p>-->
            <!--                            <p class="cart-pickup__subtitle">ул. Правобережная, 1Б</p>-->
            <!--                            <p class="cart-pickup__subtitle">с 10.00 до 23.00</p>-->
            <!--                        </div>-->
            <!--                    </label>-->
            <!--                    <label class="cart-pickup__label">-->
            <!--                        <input type="radio" name="point">-->
            <!--                        <span class="cart-pickup__radio"></span>-->
            <!--                        <div class="cart-pickup__content">-->
            <!--                            <p class="cart-pickup__title">Хамовники</p>-->
            <!--                            <p class="cart-pickup__subtitle">ул. Льва Толстого, 23/7C3</p>-->
            <!--                            <p class="cart-pickup__subtitle">с 10.00 до 23.00</p>-->
            <!--                        </div>-->
            <!--                    </label>-->
            <!--                </div>-->
            <!--                <div class="cart-order-confirm">-->
            <!--                    <input type="text" class="cart-order-confirm__input" placeholder="Введите номер телефона">-->
            <!--                    <div class="cart-order-confirm__btn-wrapper">-->
            <!--                        <button type="submit" class="cart-order-confirm__btn cart__btn-next">Подтвердить заказ</button>-->
            <!--                        <label class="cart-order-confirm__label">-->
            <!--                            <input type="checkbox" required>-->
            <!--                            <span>Я принимаю условия <a href="#">передачи информации</a></span>-->
            <!--                        </label>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </form>-->
			<?php echo do_shortcode( '[contact-form-7 id="131" title="Самовывоз"]' ) ?>

            <div id="zurab">check</div>

            <form name="checkout" method="post" class="checkout woocommerce-checkout" action="
			<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">

		        <?php if ( $checkout->get_checkout_fields() ) : ?>

			        <?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

                    <div class="col2-set" id="customer_details">
                        <div class="col-1">
					        <?php do_action( 'woocommerce_checkout_billing' ); ?>
                        </div>

                        <div class="col-2">
					        <?php do_action( 'woocommerce_checkout_shipping' ); ?>
                        </div>
                    </div>

			        <?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

		        <?php endif; ?>

		        <?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>

                <h3 id="order_review_heading">
			        <?php esc_html_e( 'Your order', 'woocommerce' ); ?></h3>

		        <?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

                <div id="order_review" class="woocommerce-checkout-review-order">
			        <?php do_action( 'woocommerce_checkout_order_review' ); ?>
                </div>

		        <?php do_action( 'woocommerce_checkout_after_order_review' ); ?>

            </form>
        </div>
    </div>
</div>


<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
