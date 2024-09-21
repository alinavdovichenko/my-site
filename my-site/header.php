<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AlinaVdovichenko
 */

?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta property="og:title" content="Web - разработка">
	<meta property="og:site_name" content="Alina Vdovichenko">
	<meta property="og:url" content="https://alinavdovichenko.ru/">
	<meta property="og:description" content="Full-Stack, Ux, Ui">
	<meta property="og:image" content="img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/aos.css">
  <link rel="stylesheet" href="css/style.css">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

  <!-- Header -->
  <header class="header" id="header">
		<div class="container">
			<div class="header__inner">
				<div class="header__logo">
					<a class="logo__link" href="#">
						<img class="logo__icon" src="img/logo.png" alt="icon-logo">
					</a>
				</div>
				<nav class="nav" id="nav">
					<a class="nav__link" href="#" data-hover="Главная">Главная</a>
				</nav>
			</div>
		</div>
	</header>


	


