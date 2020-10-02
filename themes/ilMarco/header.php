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

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header">
    <div class="container">
        <a class="header-logo" href="/">
            <img class="header-logo__img" src="<?= get_template_directory_uri(); ?>/assets/img/company-logo.png" alt="" />
        </a>
        <a class="header-phone" href="tel:+74995015771">
            <div class="header-phone__btn">
                <svg class="header-phone__btn-icon">
                    <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/icons-sprite.svg#phone-light"></use>
                </svg>
            </div><span class="header-phone__text">+7 499 501 57 71</span>
        </a>
    </div>
</header>
