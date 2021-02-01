<!DOCTYPE html>

<html lang="fr">

	<head>
		<!-- Encoding characters in UFT-8 -->
        <meta charset="utf-8">
		<!-- Title of the page -->
        <title><?php wp_title(); ?></title>
         <!-- Define the viewport : page width = screen width with no zoom -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no, user-scalable=no">
        <!-- Link the main style.css file -->
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" type="text/css" media="screen">
    </head>

    <body>

    	<header role="banner">
    		<!-- Logo -->
    		<a href="https://charles-mariot.fr" title="charles-mariot.fr"><p class="index_logo">CM</p></a>
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
						<li><a href="https://charles-mariot.fr">Accueil</a></li>
						<li><a href="https://charles-mariot.fr#about">À Propos</a></li>
						<li><a href="https://charles-mariot.fr#portfolio">Portfolio</a></li>
						<li><a href="https://charles-mariot.fr#skills">Compétences</a></li>
						<li><a href="https://charles-mariot.fr#contact">Contact</a></li>
					</ul>
				</div>  
			</nav>
    	</header>



