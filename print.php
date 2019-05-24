<!DOCTYPE html>
	<html>

			<head>
				<link rel="stylesheet" type="text/css" href="css/global.css" />
			</head>
		<body>
			<?php include("partials/block-nav.php"); ?>
				<div class="title--mywork">
					<h3>Print</h3>
				</div>

				<div class="deco--print--1"></div>
				<div class="deco--print--2"></div>
				<div class="deco--print--3"></div>

				<div class="trombinoscope">

					<div class="print--section_1">
							<a href="print--1.php" title="premiere oeuvre"<?php echo($active == "print--1" ? "class='active'" : ""); ?>><img src="images/romeo.png" alt="Logo Morgan Webfolio" width="200"/></a>
							<a href="print--2.php" title="deuxieme oeuvre"<?php echo($active == "print--1" ? "class='active'" : ""); ?>><img src="images/XPRIME.png" alt="Logo Morgan Webfolio" width="200"/></a>
							<a href="print--1.php" title="troisieme oeuvre"<?php echo($active == "print--1" ? "class='active'" : ""); ?>><img src="images/SHM.png" alt="Logo Morgan Webfolio" width="200"/></a>
					</div>

					<div class="print--section_2">
						<a href="print--1.php" title="quatrieme oeuvre"<?php echo($active == "print--1" ? "class='active'" : ""); ?>><img src="images/ldmz.png" alt="Logo Morgan Webfolio" width="200"/></a>
						<a href="print--1.php" title="cinquieme oeuvre"<?php echo($active == "print--1" ? "class='active'" : ""); ?>><img src="images/vl.png" alt="Logo Morgan Webfolio" width="200"/></a>
						<a href="print--1.php" title="sixieme oeuvre"<?php echo($active == "print--1" ? "class='active'" : ""); ?>><img src="images/ppmgmt.png" alt="Logo Morgan Webfolio" width="200"/></a>
					</div>

					<div class="print--section_3">
						<a href="print--1.php" title="septieme oeuvre"<?php echo($active == "print--1" ? "class='active'" : ""); ?>><img src="images/MTG.png" alt="Logo Morgan Webfolio" width="200"/></a>
						<a href="print--1.php" title="huitieme oeuvre"<?php echo($active == "print--1" ? "class='active'" : ""); ?>><img src="images/IGA.png" alt="Logo Morgan Webfolio" width="200"/></a>
						<a href="print--1.php" title="neuvieme oeuvre"<?php echo($active == "print--1" ? "class='active'" : ""); ?>><img src="images/fest.png" alt="Logo Morgan Webfolio" width="200"/></a>
					</div>
				</div>

				<div class="deco--print--4"></div>
				<div class="deco--print--5"></div>
				<div class="deco--print--6"></div>


          </main>
          <!-- /page--content -->

			<?php include("partials/footer.php"); ?>

        </div>
        <!-- /page -->


			</body>
	</html>
