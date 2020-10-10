<?php /* Template Name: Thank you */ ?>

<?php

get_header( 'thankyou' );

?>


<main>
    <section class="cart">
        <div class="container">
            <div class="cart-steps">
                <div class="cart-step is-active">
                    <div>
	                    <?php
	                    while ( have_posts() ) :
		                    the_post();

		                    the_title( '<h1 class="cart__title">', '</h1>' );

		                    the_content();

		                    // If comments are open or we have at least one comment, load up the comment template.
		                    if ( comments_open() || get_comments_number() ) :
			                    comments_template();
		                    endif;

	                    endwhile; // End of the loop.
	                    ?>

                        <div class="cart-btns">
                            <a href="/" class="cart-btns__btn cart-btns__btn_stroke">Вернуться на главную</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php

get_footer();

?>
