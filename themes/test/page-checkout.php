<?php /* Template Name: Checkout */ ?>

<?php

get_header( 'checkout' );

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
            </div>
        </div>
    </section>
</main>

<?php

get_footer();

?>
