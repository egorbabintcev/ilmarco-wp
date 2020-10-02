<?php /* Template Name: Cart */ ?>

<?php

get_header( 'cart' );

?>

<main>
    <section class="cart">
        <div class="container">
            <div class="cart-steps">
	            <?php
	            while ( have_posts() ) :
		            the_post();

		            the_content();

		            // If comments are open or we have at least one comment, load up the comment template.
		            if ( comments_open() || get_comments_number() ) :
			            comments_template();
		            endif;

	            endwhile; // End of the loop.
	            ?>
<!---->
<!--                <div class="cart-step">-->
<!--                    <h1 class="cart__title">Куда доставить?</h1>-->
<!--                    <div class="cart-switch">-->
<!--                        <label class="cart-switch__knob">-->
<!--                            <input type="radio" name="delievery_type" value="delievery" />-->
<!--                            <span>Доставка</span>-->
<!--                        </label>-->
<!--                        <label class="cart-switch__knob">-->
<!--                            <input type="radio" name="delievery_type" checked="checked" value="pickup" />-->
<!--                            <span>Самовывоз</span>-->
<!--                        </label>-->
<!--                    </div>-->
<!--                    <div class="cart-delievery-types">-->
<!--                        <div class="cart-delievery-type" id="delievery">-->
<!--                            <form>-->
<!--                                <div class="cart-delievery__input-wrapper">-->
<!--                                    <input type="text" class="cart-delievery__input w75" placeholder="Улица">-->
<!--                                    <input type="text" class="cart-delievery__input w25" placeholder="Дом">-->
<!--                                    <input type="text" class="cart-delievery__input w25" placeholder="Квартира">-->
<!--                                    <input type="text" class="cart-delievery__input w25" placeholder="Подъезд">-->
<!--                                    <input type="text" class="cart-delievery__input w25" placeholder="Код двери">-->
<!--                                    <input type="text" class="cart-delievery__input w25" placeholder="Этаж">-->
<!--                                    <textarea name="order_comments" class="cart-delievery__textarea" placeholder="Комментарий к заказу"></textarea>-->
<!--                                </div>-->
<!--                                <div class="cart-order-confirm cart-order-confirm_column">-->
<!--                                    <input type="text" class="cart-order-confirm__input" placeholder="Введите номер телефона">-->
<!--                                    <div class="cart-order-confirm__btn-wrapper">-->
<!--                                        <button type="submit" class="cart-order-confirm__btn cart__btn-next">Подтвердить заказ</button>-->
<!--                                        <label class="cart-order-confirm__label">-->
<!--                                            <input type="checkbox" required>-->
<!--                                            <span>Я принимаю условия <a href="#">передачи информации</a></span>-->
<!--                                        </label>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </form>-->
<!--                        </div>-->
<!--                        <div class="cart-delievery-type is-active" id="pickup">-->
<!--                            <form>-->
<!--                                <div class="cart-pickup__label-wrapper">-->
<!--                                    <label class="cart-pickup__label">-->
<!--                                        <input type="radio" name="point">-->
<!--                                        <span class="cart-pickup__radio"></span>-->
<!--                                        <div class="cart-pickup__content">-->
<!--                                            <p class="cart-pickup__title">Химки</p>-->
<!--                                            <p class="cart-pickup__subtitle">ул. Правобережная, 1Б</p>-->
<!--                                            <p class="cart-pickup__subtitle">с 10.00 до 23.00</p>-->
<!--                                        </div>-->
<!--                                    </label>-->
<!--                                    <label class="cart-pickup__label">-->
<!--                                        <input type="radio" name="point">-->
<!--                                        <span class="cart-pickup__radio"></span>-->
<!--                                        <div class="cart-pickup__content">-->
<!--                                            <p class="cart-pickup__title">Хамовники</p>-->
<!--                                            <p class="cart-pickup__subtitle">ул. Льва Толстого, 23/7C3</p>-->
<!--                                            <p class="cart-pickup__subtitle">с 10.00 до 23.00</p>-->
<!--                                        </div>-->
<!--                                    </label>-->
<!--                                </div>-->
<!--                                <div class="cart-order-confirm">-->
<!--                                    <input type="text" class="cart-order-confirm__input" placeholder="Введите номер телефона">-->
<!--                                    <div class="cart-order-confirm__btn-wrapper">-->
<!--                                        <button type="submit" class="cart-order-confirm__btn cart__btn-next">Подтвердить заказ</button>-->
<!--                                        <label class="cart-order-confirm__label">-->
<!--                                            <input type="checkbox" required>-->
<!--                                            <span>Я принимаю условия <a href="#">передачи информации</a></span>-->
<!--                                        </label>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </form>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
        </div>
    </section>
</main>

<?php

get_footer();

?>
