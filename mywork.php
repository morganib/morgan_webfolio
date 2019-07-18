<!DOCTYPE html>
	<html>

			<head>
				<title>Pages regroupants les travaux graphiques et design de morgan blanc</title>
				<link rel="stylesheet" type="text/css" href="css/global.css" />
			</head>
		<body>
			<?php include("partials/block-nav.php"); ?>
				<div class="title--mywork">
					<h3>My work</h3>
				</div>

				<main>

					<div class="deco--work--left">

					</div>

					<div class="mywork--jpg">

						<div class="print">
							 <a href="print.php" title="print"<?php echo($active == "print" ? "class='active'" : ""); ?>>
							<img src="images/print.jpg" alt="Réalisations print" width="300"/>
							<p>print</p>
						</a>
						</div>

						<div class="web">
							<a href="web.php" title="web"<?php echo($active == "web" ? "class='active'" : ""); ?>>
							<img src="images/web.jpg" alt="Réalisations web" width="300"/>
							<p>web</p>
							</a>
						</div>

					</div>

					<div class="deco--work--right">

					</div>

					<div class="deco--work--dot">

					</div>

				</main>

          </main>
          <!-- /page--content -->

				<?php include("partials/footer.php"); ?>

        </div>
        <!-- /page -->


			</body>
	</html>
