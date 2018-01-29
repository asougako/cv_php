<!DOCTYPE html>
<?php
/*
https://fr.wix.com/website-template/view/html/1919?originUrl=https%3A%2F%2Ffr.wix.com%2Fwebsite%2Ftemplates%2Fhtml%2Fportfolio-cv%2F3&bookName=&galleryDocIndex=8&category=portfolio-cv
https://fr.wix.com/website-template/view/html/748?originUrl=https%3A%2F%2Ffr.wix.com%2Fwebsite%2Ftemplates%2Fhtml%2Fportfolio-cv%2F1&bookName=&galleryDocIndex=2&category=portfolio-cv
https://fr.wix.com/website-template/view/html/1323?originUrl=https%3A%2F%2Ffr.wix.com%2Fwebsite%2Ftemplates%2Fhtml%2Fportfolio-cv%2F1&bookName=&galleryDocIndex=10&category=portfolio-cv
https://fr.wix.com/website-template/view/html/1885?originUrl=https%3A%2F%2Ffr.wix.com%2Fwebsite%2Ftemplates%2Fhtml%2Fportfolio-cv%2F2&bookName=&galleryDocIndex=5&category=portfolio-cv
https://fr.wix.com/website-template/view/html/1892?originUrl=https%3A%2F%2Ffr.wix.com%2Fwebsite%2Ftemplates%2Fhtml%2Fportfolio-cv%2F2&bookName=&galleryDocIndex=7&category=portfolio-cv
https://codepen.io/sdras/full/gojoYb
https://www.alsacreations.com/tuto/lire/1417-zoom-sur-effet-parallaxe.html
*/
?>

<HTML lang="fr">
	<HEAD>
		<meta charset="UTF-8">
		<link rel="icon" type="image/png" src="http://piq.codeus.net/static/media/userpics/piq_261595_400x400.png">
		<link type="text/css" rel="stylesheet" href="style.css">
		<script src="./resp.js"></script>
		<script src="./ajax.js"></script>
		<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.debug.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
		<script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>

	</HEAD>
	<BODY>


			<a id="top" href="#bot">TO BOTTOM</a>
		<div id="bg">
			<div id="content">
				<div id="author">
					<p class="author-name">Gontrand Théogal</p>
					<hr class="author-separator" />
					<p class="author-job">Mage de 12ème niveau</p>
				</div>
				<div id="portrait">
					<div id="rotate">
						<img src="./resources/troll.png" title="portrait" alt="troll" />
					</div>
				</div>
				<div id="div1">
					<div id="div2">
						<H2 onclick="myFunction2('para_info')">Infos perso</H2>
						<p id="para_info"><?php $para='info'; include 'lorem_ipsum.php';?></p>
						<H2 onclick="myFunction2('para_info2')">Infos perso</H2>
						<p id="para_info2"><?php $para='info'; include 'lorem_ipsum.php';?></p>
					</div>
					<div id="div3">
						<div id="comp">
							<H2 onclick="myFunction('para_comp')">Competences</H2>
							<p id="para_comp"><?php $para='comp'; include 'lorem_ipsum.php';?></p>
						</div>
						<div id="form">
							<H2 onclick="myFunction('para_form')">Formations</H2>
							<p id="para_form"><?php $para='form'; include 'lorem_ipsum.php';?></p>
						</div>
						<div id="exp">
							<H2 onclick="myFunction('para_exp')">Experiences</H2>
							<p id="para_exp"><?php $para='exp'; include 'lorem_ipsum.php';?></p>
						</div>
						<div id="hob">
							<H2 onclick="myFunction('hob_img')">Hobbits</H2>
							<img id="hob_img" src="resources/hobbits.jpeg" title="Hobbit" alt="Hobbit" />
						</div>
					</div>
					<div id="div4">
						<H2>Projets</H2>
						<ul>
							<li><a href="">EOE		</a></li>
							<li><a href="">IVL-2	</a></li>
							<li><a href="">ft_ls	</a></li>
							<li><a href="">ft_printf</a></li>
							<li><a href="">push_swap</a></li>
						</ul>
						<H2>Projets</H2>
						<ul>
							<li id="but">Click me!</li>
							<ul id="projects">
								<li>EOE</li>
								<li>IVL-2</li>
								<li>ft_ls</li>
								<li>ft_printf</li>
								<li>push_swap</li>
							</ul>
						</ul>
					</div>
				</div><!--portrait-->
			</div><!--content-->
		</div><!--bg-->
<<<<<<< HEAD
		<nav>
		<a id="bot" href="#top">TO TOP</a>
		</nav>
=======
		<img id="icon_DL_PDF" src="resources/download.png" />
		<a href="includes/convertToPDF.php"><img id="icon_DL_PDF" src="resources/download.png" /></a>
		<button id="DL_PDF">Télécharger en PDF</button>
		<button id="elevator">Revenir en haut de la page</button>
		<script>
			$('#elevator').on('click', function() { elevator(); });
			$('#icon_DL_PDF').click(function () { downloadPDF(); });
			window.onscroll = scroll;

			function scroll () {
				document.body.style.backgroundPosition = "0px "+Math.round(window.pageYOffset/2)+"px";
			}
		</script>
>>>>>>> d6a7d12fe14bd2330db25dfacb2232dc5821954d
	</BODY>
</HTML>

