<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vudinhhan
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php bloginfo( 'name' ); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="style.css">
    <script src="javascript.js"></script>
    <!-- CSS only -->
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="bootstrap.bundle.min.js"></script>
    <!--JQUERRY-->
    <script src="./jquery-3.6.1.js"></script>
	<?php wp_head(); ?>
</head>

<body>
		
</body>