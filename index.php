<!DOCTYPE html>
	<html>

			<head>
				<title>Webfolio morgan</title>
				<meta charset="utf-8"/>
				<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
				<meta name="description" content="Webfolio de morgan blanc"/>
				<meta name="keywords" content="webfolio, morgan, blanc, graphiste, designer"/>
				<meta http-equiv="cache-control" content="no-cache"/>
				<link rel="stylesheet" type="text/css" href="css/global.css" />
			</head>

			<body>
				<?php $active = "webfolio_morgan"; ?>
				<?php include("partials/block-nav.php"); ?>



				<div class="icon--menu">
					<ul>

						<li><img src="images/red-f.png" alt="logo mon travail" width="40"/></li>
						<li><img src="images/red-inst.png" alt="logo mon travail" width="40"/></li>
						<li><img src="images/red-in.png" alt="logo mon travail" width="40"/></li>

					</ul>
				</div>

        <div class="page page__home">
					<div class="logo-title">
						<img src="images/title-logo.svg" alt="Logo Morgan Webfolio" width="300"/>
					</div>
				</div>

				<ul class="list_home">

						<li>
							 <a href="#whoami"><img src="images/girl.png" alt="Logo qui suis je" width="300"/>
							 <h2>who am i ?</h2></a>
						</li>

					<li>
						  <a href="mywork.php" title="mywork"<?php echo($active == "mywork" ? "class='active'" : ""); ?>>
						 <img src="images/hand.png" alt="logo mon travail" width="300"/>
						 <h2>my work</h2>
					 </a>
					</li>
					<li>
						<a href="contact.php" title="contact"<?php echo($active == "mywork" ? "class='active'" : ""); ?>>
						 <img src="images/tel.png" alt="Logo qui suis je" width="300"/>
						 <h2>contact</h2>
					 </a>
					</li>
				</ul>

				<div class="deco--dot">

				</div>

				<div class="deco--ligne">

				</div>

				<div class="speach--button">
					<li><img src="images/red-in.png" alt="logo mon travail" width="40"/></li>
					<li><a href="CV_morgan.pdf">Get my cv</a></li>
				</div>


					<main class="page--content">
						<section class="section section--intro" id="whoami">

								<h3>Présentation</h3>
								<div class="presentation">
										<img src="images/morgan.png" alt="morgan portrait" width="100"/>
										<p>
											Salut à toi nouveau visiteur ! Peut - être es tu tombé là par hasard ? Ou peut - être as tu besoin d'un oeil nouveau dans ton équipe ? </br>
				Je m'appelle Morgan, je suis née en 1994 à Grenoble. </br>
				Pour t'impressionner je pourrais te raconter que je chantais du Brassens à 18 mois ou que je sais taper à l'ordinateur sans regarder les </br>touches mais de peur de t'effrayer je vais m'en tenir au principal.</br></br>

				Passionnée d'art en général je suis passée par le théâtre,  le cinéma,  la musique ( encore très présente dans ma vie aujourd'hui ) et le</br> dessin. Après mon Bac j'étais dans un premier temps persuadée que les études d'Art était couteuse et sans débouchés, j'ai donc été</br> contraintes de travailler dans diverse entreprises pour remplir mon frigo.</br>
				En 2017 un ami à moi sortait d'une école de graphisme, lors d'un après-midi autour d'un verre il m'a présenté son projet de fin d'année. J'ai </br>trouvé ça exceptionnel et impressionnant, c'était décidé, en septembre je reprenais mes études.</br></br>

				Après deux ans dans cette école j'ai rencontré des intervenants incroyables et des pédagogues passionnés qui m'ont permis de ne pas</br> douter une seule seconde que je voulais faire ce métier, et mes divers stages me l'ont confirmé.</br>
				J'ai découvert grace à ces stages que j'adorais travailler au sein d'une équipe, créer des visuels en répondant à une demande.</br></br>

				Mes expériences dans le théâtre m'ont apporté l'aisance avec les clients, mes experiences professionnelles antérieures m'ont appris à </br>aimer travailler en équipe et la rigueur, mes précédentes passions pour le dessin m'offrait une compétence en plus, voila , mon métier</br> réunit aujourd'hui tout ce que j'aime, et c'est pour ca que je suis très heureuse que tu sois sur mon site aujourd'hui, et que tu vois mon </br>travail.</br></br>

				Bonne visite !
										</p>
									</div>
					</section>



					<div class="deco--ligne2">

					</div>

					<div class="deco--dot">

					</div>

					<div class="deco--left--home">

					</div>





          </main>
          <!-- /page--content -->



        </div>
        <!-- /page -->

				<footer>

		<?php include("partials/footer.php"); ?>

				</footer>
			</body>
	</html>
