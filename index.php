<?php get_template_part('header'); ?>

<!-- Organisation of the sections -->
<div id="index_grid">

	<!-- Landing section -->
	<section id="landing_section">
		<h1>Bonjour, 
		</br>je m'appelle Charles</h1>
		<p>Créateur de contenu, Développeur & Étudiant,
		</br>Je cherche à produire des choses innovantes, avec des cycles d'itérations rapides.</p>
		<a href="#contact"><button>Discutons</button></a>
	</section>

	<!-- About section -->
	<section id="about">
		<img id="about_image" src="<?php bloginfo('template_url'); ?>/Images/Charles_Mariot.jpeg" alt="Photo de profil de Charles Mariot">
		<div>
			<!-- WHY ? -->
    		<p><span class="guillemets">"</span>J'étudie le développement web pour avoir le plaisir de construire et partager des choses innovantes.  
    		</p>
    		<!-- WHAT ? -->
    		<p>J'apprécie construire des applications web, des jeux et dépasser mes limites pour apprendre de nouvelles choses.
    		</p>
    		<!-- HOW ? -->
    		<p>La résolution de problèmes qui me semblaient à la base insurmontable  est ce qui me motive à utiliser de nouvelles technologies.<span class="guillemets">"</span>
    		</p>
		</div>
	</section>

	<!-- Portfolio section : 4 projects that I'm proud to show you -->
	<section id="portfolio">
		<h2>Ce sur quoi j'ai travaillé</h2>
		<!-- First project -->
		<div id="index_portfolio">
			<article class="article_portfolio article_portfolio-active">
					<img class="image_article_portfolio_index" src="<?php bloginfo('template_url'); ?>/Images/projet1.jpg" alt="">
					<span>
	    				<h3>Portfolio Web Développeur - En production</h3>
	    				<p>Pour vous faire découvrir mon travail et vous permettre de me contacter, ce portfolio a été développé pour être accessible, avec un design adapté à chaque type d'écran et pensé pour une utilisation mobile en premier lieu.
	    				</br>HTML, CSS.
	    				</p>
			    		<button class="portfolio__btn" id="portfolio_btn-1-next">Suivant</button>		
					</span>
			</article>
			<!-- Second project -->
			<article class="article_portfolio">
					
					<img class="image_article_portfolio_index" src="<?php bloginfo('template_url'); ?>/Images/projet2.jpg" alt="">
	    			<span>
	    				<h3>Blog - (Prochainement)</h3>
	    				<p>Description 2 courte, sur deux trois lignes, histoire de savoir ce qu'il en est et pourquoi ce travail est dans ce portfolio, valeur ajoutée.</p>
			    		<button class="portfolio__btn" id="portfolio_btn-2-next">Suivant</button>
					</span>
			</article>
			<!-- Third project -->
			<article class="article_portfolio">
					<img class="image_article_portfolio_index" src="<?php bloginfo('template_url'); ?>/Images/projet3.jpg" alt="">
    				<span>
    					<h3>E-commerce - (Prochainement)</h3>
    					<p>Description 3 courte, sur deux trois lignes, histoire de savoir ce qu'il en est et pourquoi ce travail est dans ce 
    					portfolio, valeur ajoutée.</p>
			    		<button class="portfolio__btn" id="portfolio_btn-3-next">Suivant</button>
					</span>
			</article>
			<!-- Last project -->
			<article class="article_portfolio">
					<img class="image_article_portfolio_index" src="<?php bloginfo('template_url'); ?>/Images/projet4.jpg" alt="">
    				<span>
    					<h3>Application Web - (Prochainement)</h3>
    					<p>Description 4 courte, sur deux trois lignes, histoire de savoir ce qu'il en est et pourquoi ce travail est dans ce portfolio, valeur ajoutée.</p>
			    		<button class="portfolio__btn" id="portfolio_btn-4-next">Suivant</button>
		    		</span>
			</article>
		</div>
	</section>

	<!-- Skills section -->
	<section id="skills">
		<h2>Les compétences que j'ai développé</h2>
		<!-- How I develop my skills -->
		<p><span class="guillemets">"</span>J'ai appris les bases du développement en suivant des cours en ligne, mais c'est en développant mes propres projets que j'ai découvert l'étendue des possibilités.<span class="guillemets">"</span>
   		</p>
   		<!-- Skills unorganised list -->
   		<p class="skills_category">Web Design</p>
   		<ul>
   			<li>Responsive</li>
   			<li>Accessible</li>
   			<li>Mobile 1st</li>
   		</ul>
		</section>

	<!-- Contact -->
	<section id="contact">
		<h2 id="tell_me">Parlez moi de vos projets</h2>

		<form action="<?php bloginfo('template_url'); ?>/contact_form.php" method="post">
			
			<!-- Formulaire 1/3 : Objet -->
			<div class="form form-active">

				<div class="form--header-container">
					<h3 class="form--header-title">
						Objet (1/3)
					</h3>
					<p>
						Pourquoi souhaitez-vous me contacter ?
					</p>
				</div>

				<div id="select_container">
					<label for="objet" class="hidden_label">
						Selectionnez l'objet du formulaire de contact
					</label>
					<select name="objet" id="objet">
						<option name="objet" value="Je cherche un développeur" selected="">Je cherche un développeur</option>
						<option name="objet" value="J'ai une question">J'ai une question</option>
						<option name="objet" value="Je veux entrer en contact">Je veux entrer en contact</option>
						<option name="objet" value="Je veux parler de mes projets">Je veux parler de mes projets</option>
						<option name="objet" value="Rapporter un problème">Rapporter un problème</option>
						<option name="objet" value="Proposer une amélioration">Proposer une amélioration</option>
						<option name="objet" value="Autre">Autre</option> 
					</select>	
				</div>

		   		<button class="form__btn" id="contact_btn-1-next" checked="">Suivant</button>

			</div>


			<!-- Formulaire 2/3 : Message -->

			<div class="form">
				<div class="form--header-container">
					
					<h3 class="form--header-title">
					Votre message (2/3)
					</h3>
					<p class="form--header-text">
					Exprimez-vous.
					</p>
		    	</div>
		    	<label for="message" class="hidden_label">Votre message</label>
		    	<textarea name="message" id="message" placeholder="Message" required=""></textarea>	    	
				<button class="form__btn" id="contact_btn-2-prev">Précédent</button>
				<button class="form__btn" id="contact_btn-2-next" checked="">Suivant</button>
			</div>

			<!-- Formulaire 3/3 : Infos-->
			<div class="form">
				<div class="form--header-container">
					<h3 class="form--header-title">
					Vos informations (3/3)
					</h3>
					<p class="form--header-text">
					Pour que je puisse vous répondre.
					</p>
				</div>

				<div class="form_labelinput">
					<label class="hidden_label" for="prenom">Votre prénom</label>
					<input type="text" name="prenom" id="prenom" placeholder="Prénom" required="">
				</div>
				<div class="form_labelinput">
					<label class="hidden_label" for="nom">Votre nom</label>
					<input type="text" name="nom" id="nom" placeholder="Nom" required="">
				</div>
				<div class="form_labelinput">
					<label class="hidden_label" for="email">Votre e-mail</label>
					<input type="email" name="email" id="email" placeholder="Email" required="">
				</div>
		
				<button class="form__btn" id="contact_btn-3-prev">Précédent</button>

				<input type="submit" value="envoyer" class="form__btn" id="contact_btn-3-send" checked="">
			</div>

	</form>

	</section>
</div>
<!-- Link the menu JS script -->   
<script src="<?php bloginfo('template_url'); ?>/JavaScript/menu.js" async=""></script>
<!-- Link the multi steps form JS script -->   
<script src="<?php bloginfo('template_url'); ?>/JavaScript/multi_steps_form.js" async=""></script>
<!-- Link the multi steps portfolio JS script -->
<script src="<?php bloginfo('template_url'); ?>/JavaScript/multi_steps_portfolio.js" async=""></script>

<?php get_template_part('footer'); ?>
