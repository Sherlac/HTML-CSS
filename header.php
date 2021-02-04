<!DOCTYPE html>

<html lang="fr">

	<head>
		<!-- Encoding characters in UFT-8 -->
        <meta charset="utf-8">
		<!-- Title of the page -->
        <title><?php wp_title(); ?></title>
         <!-- Define the viewport : page width = screen width with no zoom -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no, user-scalable=no">
        <!-- Link the main style.css file, for mobile in portrait orientation -->
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" type="text/css" media="screen">
		<!-- Link the style.css file, for mobile in landscape orientation -->
		<link media="(min-width: 500px)" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/Style/style_landscapeiphone.css" type="text/css">
		<!-- Link the style.css file, for ipad resolution -->
		<link media="(min-width: 700px)" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/Style/style_ipad.css" type="text/css">
		<!-- Link the style.css file, for ipad resolution -->
		<link media="(min-width: 1000px)" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/Style/style_laptop.css" type="text/css">
    </head>

    <body>

    	<header role="banner">
    		<!-- Logo -->
    		<a href="<?php bloginfo('url'); ?>" title="charles-mariot.fr"><p class="index_logo">CM</p></a>
    		<!-- Menu -->
    		<nav class="menu_opener" onclick="openMenu()">	
    			<!-- Logo du menu -->		
				<div class="menu_icon"></div>
				<div class="menu_icon"></div>
				<div class="menu_icon"></div>  
				<!-- Menu -->
				<div id="menuPrincipal">
					<div id="flou_arriere_plan"></div>
					<ul class="main_menu_ul">
						<div class="close_menu">
							<div class="close_menu_icon"></div>
						</div>
						<li><a href="<?php bloginfo('url'); ?>">Accueil</a></li>
						<li><a href="<?php bloginfo('url'); ?>#about">À Propos</a></li>
						<li><a href="<?php bloginfo('url'); ?>#portfolio">Portfolio</a></li>
						<li><a href="<?php bloginfo('url'); ?>#skills">Compétences</a></li>
						<li><a href="<?php bloginfo('url'); ?>#contact">Contact</a></li>
					</ul>
				</div>  
			</nav>
    	</header>



