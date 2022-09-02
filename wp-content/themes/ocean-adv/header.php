<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<title>OCEAN ADV | ADVERTISING AGENCY</title>
	<meta charset="<?php bloginfo(); ?>">
	<meta name="format-detection" content="telephone=no">
	<!-- <style>body{opacity: 0;}</style> -->
	<!-- <link rel="stylesheet" href="css/style.min.css?_v=20220716144527"> -->
	<link rel="shortcut icon" href="favicon.ico">
	<meta name="robots" content="noindex, nofollow">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Ocean adv is a full-service advertising company with offices in Los Angeles (USA), Odessa (Ukraine)">
	<meta property="og:description" content="Ocean adv is a full-service advertising company with offices in Los Angeles (USA), Odessa (Ukraine)">
    <?php wp_head(); ?>
</head>

<body>
	<div class="wrapper">
		<header class="header">
			<div class="header__container">
				<div class="header__row">
					<a href="http://www.ocean-adv.com.ua" class="header__logo">
						<picture>
							<source srcset="<?php bloginfo( 'template_url' ); ?>/assets/img/decor/logo_horizontal.webp" type="image/webp"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/decor/logo_horizontal.webp" alt="logo">
						</picture>
					</a>
					<div class="header__menu menu">
						<button type="button" class="menu__icon icon-menu"><span></span></button>
						<nav class="menu__body">
							<ul class="menu__list">
								<li class="menu__item menu__item-burger-logo"><a href="#" class="header__logo">
										<picture>
											<source srcset="<?php bloginfo( 'template_url' ); ?>/assets/img/decor/logo_horizontal.webp" type="image/webp"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/decor/logo_horizontal.webp" alt="logo">
										</picture>
									</a></li>
								<li class="menu__item"><a data-goto=".complex-services" href="#" class="menu__link">Services</a></li>
								<li class="menu__item"><a data-goto=".our-team" href="#" class="menu__link">Team</a></li>
								<li class="menu__item"><a data-goto=".our-cases" href="#" class="menu__link">Cases</a></li>
								<li class="menu__item"><a data-goto=".footer" href="#" class="menu__link">Contacts</a></li>
							</ul>
						</nav>
					</div>
					<div class="header__flag-change">
						<a href="http://www.ocean-adv.com.ua/ukr/" class="flag-change__image-ibg">
							<picture>
								<source srcset="<?php bloginfo( 'template_url' ); ?>/assets/img/decor/flag.webp" type="image/webp"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/decor/flag.png" alt="change-flag">
							</picture>
						</a>
					</div>
				</div>
			</div>
		</header>