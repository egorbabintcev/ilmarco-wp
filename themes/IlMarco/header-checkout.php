<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package test
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">

    <meta name="description" content=""/>
    <meta property="og:description" content=""/>
    <meta property="og:image" content=""/>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

    <link rel="icon" type="image-x/icon" href="<?= get_template_directory_uri(); ?>/assets/img/favicons/favicon.ico"/>
    <link rel="icon" type="image/png" href="<?= get_template_directory_uri(); ?>/assets/img/favicons/favicon.png"/>
</head>

<body <?php body_class('cart-page'); ?>>
<?php wp_body_open(); ?>

<header class="header header_column-direction">
    <div class="container">
        <a class="header-logo">
            <img class="header-logo__img" src="<?= get_template_directory_uri(); ?>/assets/img/company-logo.png" alt="" />
        </a>
        <div class="header-steps">
          <div class="header-step is-completed">
            <span class="header-step__num">1</span>
            <span class="header-step__text">Корзина</span>
          </div>
          <div class="header-step is-active">
            <span class="header-step__num">2</span>
            <span class="header-step__text">Оформление заказа</span>
          </div>
          <div class="header-step">
            <span class="header-step__num">3</span>
            <span class="header-step__text">Заказ принят</span>
          </div>
        </div>
    </div>
</header>
