<!DOCTYPE html>
	<html>

			<head>
				<link rel="stylesheet" type="text/css" href="css/global.css" />
			</head>
		<body>
			<?php include("partials/block-nav.php"); ?>
				<div class="title--mywork">
					<h3>Web</h3>
				</div>



				<div class="trombinoscope">

					<div class="print--section_1">
							<a href="web--1.php" title="premiere oeuvre"<?php echo($active == "print--1" ? "class='active'" : ""); ?>><img src="images/enalp.jpg" alt="Logo Morgan Webfolio" width="200"/></a>
							<a href="web--2.php" title="deuxieme oeuvre"<?php echo($active == "print--1" ? "class='active'" : ""); ?>><img src="images/btdv.jpg" alt="Logo Morgan Webfolio" width="200"/></a>
							<a href="web--3.php" title="troisieme oeuvre"<?php echo($active == "print--1" ? "class='active'" : ""); ?>><img src="images/eclt.jpg" alt="Logo Morgan Webfolio" width="200"/></a>
					</div>

					<div class="print--section_2">
						<a href="web--4.php" title="quatrieme oeuvre"<?php echo($active == "print--1" ? "class='active'" : ""); ?>><img src="images/iga.jpg" alt="Logo Morgan Webfolio" width="200"/></a>
						<a href="web--5.php" title="cinquieme oeuvre"<?php echo($active == "print--1" ? "class='active'" : ""); ?>><img src="images/line.jpg" alt="Logo Morgan Webfolio" width="200"/></a>
						<a href="web--6.php" title="sixieme oeuvre"<?php echo($active == "print--1" ? "class='active'" : ""); ?>><img src="images/ldl.jpg" alt="Logo Morgan Webfolio" width="200"/></a>
					</div>

					<div class="print--section_3">
						<a href="web--7.php" title="septieme oeuvre"<?php echo($active == "print--1" ? "class='active'" : ""); ?>><img src="images/tdm.jpg" alt="Logo Morgan Webfolio" width="200"/></a>
						<a href="web--8.php" title="huitieme oeuvre"<?php echo($active == "print--1" ? "class='active'" : ""); ?>><img src="images/otgsvd.jpg" alt="Logo Morgan Webfolio" width="200"/></a>
					</div>
				</div>


          </main>
          <!-- /page--content -->

					<?php include("partials/footer.php"); ?>

        </div>
        <!-- /page -->


			</body>
	</html>
