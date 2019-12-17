<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible"  content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
	<?php
    wp_head();
	wp_indigo_typography();
    ?>
</head>
<body <?php body_class(); ?>>
<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-indigo' ); ?></a>

<div class="wrapper-normal">
    <div class="page">
	    <?php if ( ! is_page_template( 'page-templates/home.php' ) ) : ?><?php wp_indigo_show_menu(); ?><?php endif; ?>
