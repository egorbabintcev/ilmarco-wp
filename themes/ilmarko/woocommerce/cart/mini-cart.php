<?php
/**
 * Mini-cart
 *
 * Contains the markup for the mini-cart, used by the cart widget.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/mini-cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.7.0
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_mini_cart' ); ?>

<?php if ( ! WC()->cart->is_empty() ) : ?>

    <!--    <ul class="mini-cart__list">-->
    <!--        <li class="mini-cart__item">-->
    <!--            <div class="col">-->
    <!--                <img src="--><? //= get_template_directory_uri(); ?><!--/assets/img/catalog-pizza-2.jpg"-->
    <!--                     class="mini-cart__item-img">-->
    <!--                <div>-->
    <!--                    <p class="mini-cart__item-title">Баварская</p>-->
    <!--                    <div class="mini-cart__item-counter">-->
    <!--                        <button class="mini-cart__item-counter-btn dec">-->
    <!--                            <svg>-->
    <!--                                <use xlink:href="--><? //= get_template_directory_uri(); ?><!--/assets/img/icons-sprite.svg#minus"></use>-->
    <!--                            </svg>-->
    <!--                        </button>-->
    <!--                        <span class="mini-cart__item-counter-num">1</span>-->
    <!--                        <button class="mini-cart__item-counter-btn inc">-->
    <!--                            <svg>-->
    <!--                                <use xlink:href="--><? //= get_template_directory_uri(); ?><!--/assets/img/icons-sprite.svg#plus"></use>-->
    <!--                            </svg>-->
    <!--                        </button>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col">-->
    <!--                <span class="mini-cart__item-price"><span class="price" data-start="575">575</span>-->
    <!--                  <small>₽</small></span>-->
    <!--                <a href="#" class="mini-cart__item-del">-->
    <!--                    <svg>-->
    <!--                        <use xlink:href="--><? //= get_template_directory_uri(); ?><!--/assets/img/icons-sprite.svg#trash-icon"></use>-->
    <!--                    </svg>-->
    <!--                </a>-->
    <!--            </div>-->
    <!--        </li>-->
    <!--        <li class="mini-cart__item">-->
    <!--            <div class="col">-->
    <!--                <img src="--><? //= get_template_directory_uri(); ?><!--/assets/img/catalog-pizza-2.jpg"-->
    <!--                     class="mini-cart__item-img">-->
    <!--                <div>-->
    <!--                    <p class="mini-cart__item-title">Баварская</p>-->
    <!--                    <div class="mini-cart__item-counter">-->
    <!--                        <button class="mini-cart__item-counter-btn dec">-->
    <!--                            <svg>-->
    <!--                                <use xlink:href="--><? //= get_template_directory_uri(); ?><!--/assets/img/icons-sprite.svg#minus"></use>-->
    <!--                            </svg>-->
    <!--                        </button>-->
    <!--                        <span class="mini-cart__item-counter-num">1</span>-->
    <!--                        <button class="mini-cart__item-counter-btn inc">-->
    <!--                            <svg>-->
    <!--                                <use xlink:href="--><? //= get_template_directory_uri(); ?><!--/assets/img/icons-sprite.svg#plus"></use>-->
    <!--                            </svg>-->
    <!--                        </button>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col">-->
    <!--                <span class="mini-cart__item-price"><span class="price" data-start="575">575</span>-->
    <!--                  <small>₽</small></span>-->
    <!--                <a href="#" class="mini-cart__item-del">-->
    <!--                    <svg>-->
    <!--                        <use xlink:href="--><? //= get_template_directory_uri(); ?><!--/assets/img/icons-sprite.svg#trash-icon"></use>-->
    <!--                    </svg>-->
    <!--                </a>-->
    <!--            </div>-->
    <!--        </li>-->
    <!--        <li class="mini-cart__item">-->
    <!--            <div class="col">-->
    <!--                <img src="--><? //= get_template_directory_uri(); ?><!--/assets/img/catalog-pizza-2.jpg"-->
    <!--                     class="mini-cart__item-img">-->
    <!--                <div>-->
    <!--                    <p class="mini-cart__item-title">Баварская</p>-->
    <!--                    <div class="mini-cart__item-counter">-->
    <!--                        <button class="mini-cart__item-counter-btn dec">-->
    <!--                            <svg>-->
    <!--                                <use xlink:href="--><? //= get_template_directory_uri(); ?><!--/assets/img/icons-sprite.svg#minus"></use>-->
    <!--                            </svg>-->
    <!--                        </button>-->
    <!--                        <span class="mini-cart__item-counter-num">1</span>-->
    <!--                        <button class="mini-cart__item-counter-btn inc">-->
    <!--                            <svg>-->
    <!--                                <use xlink:href="--><? //= get_template_directory_uri(); ?><!--/assets/img/icons-sprite.svg#plus"></use>-->
    <!--                            </svg>-->
    <!--                        </button>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col">-->
    <!--                <span class="mini-cart__item-price"><span class="price" data-start="575">575</span>-->
    <!--                  <small>₽</small></span>-->
    <!--                <a href="#" class="mini-cart__item-del">-->
    <!--                    <svg>-->
    <!--                        <use xlink:href="--><? //= get_template_directory_uri(); ?><!--/assets/img/icons-sprite.svg#trash-icon"></use>-->
    <!--                    </svg>-->
    <!--                </a>-->
    <!--            </div>-->
    <!--        </li>-->
    <!---->
    <!--        <li class="mini-cart__item">-->
    <!--            <div class="col">-->
    <!--                <img src="--><? //= get_template_directory_uri(); ?><!--/assets/img/catalog-pizza-2.jpg"-->
    <!--                     class="mini-cart__item-img">-->
    <!---->
    <!--                <div>-->
    <!--                    <p class="mini-cart__item-title">Баварская</p>-->
    <!--                    <div class="mini-cart__item-counter">-->
    <!--                        <button class="mini-cart__item-counter-btn dec">-->
    <!--                            <svg>-->
    <!--                                <use xlink:href="--><? //= get_template_directory_uri(); ?><!--/assets/img/icons-sprite.svg#minus"></use>-->
    <!--                            </svg>-->
    <!--                        </button>-->
    <!--                        <span class="mini-cart__item-counter-num">1</span>-->
    <!--                        <button class="mini-cart__item-counter-btn inc">-->
    <!--                            <svg>-->
    <!--                                <use xlink:href="--><? //= get_template_directory_uri(); ?><!--/assets/img/icons-sprite.svg#plus"></use>-->
    <!--                            </svg>-->
    <!--                        </button>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col">-->
    <!--                <span class="mini-cart__item-price"><span class="price" data-start="575">575</span>-->
    <!--                  <small>₽</small></span>-->
    <!--                <a href="#" class="mini-cart__item-del">-->
    <!--                    <svg>-->
    <!--                        <use xlink:href="--><? //= get_template_directory_uri(); ?><!--/assets/img/icons-sprite.svg#trash-icon"></use>-->
    <!--                    </svg>-->
    <!--                </a>-->
    <!--            </div>-->
    <!--        </li>-->
    <!--    </ul>-->

    <!--    <div class="mini-cart__total">-->
    <!--        <span>Сумма заказа</span>-->
    <!--        <span>575 <small>₽</small></span>-->
    <!--    </div>-->

    <ul class="test woocommerce-mini-cart cart_list product_list_widget <?php echo esc_attr( $args['list_class'] ); ?> mini-cart__list">
		<?php
		do_action( 'woocommerce_before_mini_cart_contents' );

		foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
			$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
			$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

			if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_widget_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
				$product_name      = apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key );
				$thumbnail         = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );
				$product_price     = apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );
				$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
				?>
                <li class="woocommerce-mini-cart-item  <?php echo esc_attr( apply_filters( 'woocommerce_mini_cart_item_class', 'mini_cart_item', $cart_item, $cart_item_key ) ); ?> mini-cart__item">
                    <div class="col">
						<?php if ( empty( $product_permalink ) ) : ?>
                            <img src="<?php the_field( 'pizza_preview', $_product->id ); ?>" class="cart-item__img">
						<?php else : ?>
                            <img src="<?php the_field( 'pizza_preview', $_product->id ); ?>" class="cart-item__img">
						<?php endif; ?>

                        <div>
                            <p class="mini-cart__item-title"><?php echo $product_name; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
                            <div class="mini-cart__item-counter">
                                <!--                                <button class="mini-cart__item-counter-btn dec">-->
                                <!--                                    <svg>-->
                                <!--                                        <use xlink:href="-->
                                <!--							-->
								<?//= get_template_directory_uri(); ?><!--/assets/img/icons-sprite.svg#minus"></use>-->
                                <!--                                    </svg>-->
                                <!--                                </button>-->
                                <span class="mini-cart__item-counter-num">
							<?php echo $cart_item['quantity'] ?></span>
                                <!--                                <button class="mini-cart__item-counter-btn inc">-->
                                <!--                                    <svg>-->
                                <!--                                        <use xlink:href="-->
                                <!--							-->
								<?//= get_template_directory_uri(); ?><!--/assets/img/icons-sprite.svg#plus"></use>-->
                                <!--                                    </svg>-->
                                <!--                                </button>-->
                            </div>

<!--							--><?php //echo apply_filters( 'woocommerce_widget_cart_item_quantity', '<span class="quantity">' . sprintf( '%s &times; %s', $cart_item['quantity'], $product_price ) . '</span>', $cart_item, $cart_item_key ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                        </div>

						<?php echo wc_get_formatted_cart_item_data( $cart_item ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

                    </div>

                    <div class="col">
                        <span class="mini-cart__item-price">
                            <span class="price" data-start="575">
                                <?php echo WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ) ?>
                            </span>
                            <!--                            <small>₽</small>-->
                        </span>
                        <!-- delete -->
						<?php
						echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
							'woocommerce_cart_item_remove_link',
							sprintf(
								'<a href="%s" class="remove remove_from_cart_button mini-cart__item-del" aria-label="%s" data-product_id="%s" data-cart_item_key="%s" data-product_sku="%s">
                                <svg><use xlink:href="' . get_template_directory_uri() . '/assets/img/icons-sprite.svg#trash-icon"></use>
                                </svg>
                            </a>',
								esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
								esc_attr__( 'Remove this item', 'woocommerce' ),
								esc_attr( $product_id ),
								esc_attr( $cart_item_key ),
								esc_attr( $_product->get_sku() )
							),
							$cart_item_key
						);
						?>
                    </div>
                </li>
				<?php
			}
		}

		do_action( 'woocommerce_mini_cart_contents' );
		?>
    </ul>

    <!--    <p class="woocommerce-mini-cart__total total mini-cart__total">-->
    <!--		--><?php
//		/**
//		 * Hook: woocommerce_widget_shopping_cart_total.
//		 *
//		 * @hooked woocommerce_widget_shopping_cart_subtotal - 10
//		 */
//		do_action( 'woocommerce_widget_shopping_cart_total' );
//		?>
    <!--    </p>-->

    <div class="mini-cart__total">
        <span>Сумма заказа</span>
        <span><?php echo WC()->cart->get_cart_subtotal(); ?>
<!--            <small>₽</small>-->
        </span>
    </div>

    <!--	--><?php //do_action( 'woocommerce_widget_shopping_cart_before_buttons' ); ?>
    <!---->
    <!--    <p class="woocommerce-mini-cart__buttons buttons">-->
    <!--		--><?php //do_action( 'woocommerce_widget_shopping_cart_buttons' ); ?>
    <!--    </p>-->
    <!---->
    <!--	--><?php //do_action( 'woocommerce_widget_shopping_cart_after_buttons' ); ?>

<?php else : ?>

    <p class="woocommerce-mini-cart__empty-message"><?php esc_html_e( 'No products in the cart.', 'woocommerce' ); ?></p>

<?php endif; ?>

<?php do_action( 'woocommerce_after_mini_cart' ); ?>
