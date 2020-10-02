<?php
/**
 * ilMarko functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ilMarko
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'ilmarko_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function ilmarko_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on ilMarko, use a find and replace
		 * to change 'ilmarko' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'ilmarko', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'ilmarko' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'ilmarko_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'ilmarko_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ilmarko_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ilmarko_content_width', 640 );
}

add_action( 'after_setup_theme', 'ilmarko_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ilmarko_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'ilmarko' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'ilmarko' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}

add_action( 'widgets_init', 'ilmarko_widgets_init' );


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

/**
 * Enqueue scripts and styles.
 */
function ilmarko_scripts() {
	wp_enqueue_style( 'ilmarko-style', get_stylesheet_uri(), array() );
//	wp_style_add_data( 'ilmarko-style', 'rtl', 'replace' );
	wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css', array() );


	wp_enqueue_script( 'ilmarko-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '', true );


	// отменяем зарегистрированный jQuery
	wp_deregister_script('jquery-core');
	wp_deregister_script('jquery');

	// регистрируем
	wp_register_script( 'jquery-core', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', false, null, true );
	wp_register_script( 'jquery', false, array('jquery-core'), null, true );

	// подключаем
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'slick-slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js', array( 'jquery' ), '', true );

	wp_enqueue_script( 'main-scripts', get_template_directory_uri() . '/assets/js/main.js', array( 'slick-slider' ), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_deregister_style('woocommerce-general');
	wp_deregister_style('woocommerce-layout');
}
add_action( 'wp_enqueue_scripts', 'ilmarko_scripts' );

add_theme_support( 'woocommerce' );

/* Отключаем админ панель для всех, кроме администраторов. */
if ( ! current_user_can( 'administrator' ) ):
	show_admin_bar( false );
endif;


/* delete first word into name of product */
add_filter( 'woocommerce_cart_item_name', 'customizing_cart_item_name', 10, 3);
function customizing_cart_item_name( $item_name, $cart_item, $cart_item_key ) {
	$product = $cart_item['data'];
	$product_permalink = $product->is_visible() ? $product->get_permalink( $cart_item ) : '';

	$product_name = $product->get_name();
	$product_name = substr( strstr( $product_name, ' ' ), 1 );

	if ( $product_permalink && is_cart() ) {
		return sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $product_name );
	} elseif ( ! $product_permalink && is_cart() ) {
		return $product_name . '&nbsp;';
	} else {
		return $product_name;
	}
}


add_filter( 'woocommerce_add_to_cart_fragments', 'wc_mini_cart_refresh_number' );
function wc_mini_cart_refresh_number( $fragments ) {
	ob_start();
	?>

    <div class="wrap d-flex">
        <?php if ( ! WC()->cart->get_cart_contents_count() == 0 ) { ?>
            <div class="separator"></div>
            <svg class="header-cart__icon">
                <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/icons-sprite.svg#cart"></use>
            </svg>
            <span class="header-cart__count">
             <?php echo WC()->cart->get_cart_contents_count(); ?>
            </span>
        <?php } ?>
    </div>

	<?php
	$fragments['.wrap'] = ob_get_clean();

	return $fragments;
}


add_filter( 'woocommerce_add_to_cart_fragments', 'wc_mini_cart_refresh_items' );
function wc_mini_cart_refresh_items( $fragments ) {
	ob_start();
	?>
    <div class="mini-cart" style="display:block;">
		<?php woocommerce_mini_cart(); ?>
    </div>
	<?php
	$fragments['.mini-cart'] = ob_get_clean();

	return $fragments;
}


/* autoUpload cart */
add_action( 'wp_footer', 'cart_refresh_update_qty', 100 );

function cart_refresh_update_qty() {
	if ( is_cart() ) {
		?>
		<script type="text/javascript">
            jQuery('div.woocommerce').on('change', '.food-card__counter-btn', function(){
                setTimeout(function() {
                    jQuery('[name="update_cart"]').trigger('click');
                }, 100 );
            });
		</script>
		<?php
	}
}
