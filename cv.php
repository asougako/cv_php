<!DOCTYPE html>
<!-- https://www.alsacreations.com/tuto/lire/1417-zoom-sur-effet-parallaxe.html -->
<HTML lang="fr">
	<HEAD>
		<meta charset="UTF-8">
		<link type="text/css" rel="stylesheet" href="styles/cv.css">
		<link rel="icon" href="resources/favicon.png" />
		<!--<script src="./resp.js"></script>-->
		<script src="./scripts/ajax.js"></script>
		<script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>

	</HEAD>
	
	<body>
		<button id="DL_PDF" onclick="window.open('includes/convertToPDF.php')">Télécharger en PDF</button>
		<div id="elevator" title="Revenir en haut de la page"><img src="resources/ScrollUp.png" id="elevator_img" /></div>
		
		<div id="slide1">

			<div class="slide_inside">					

				<div id="author">
					<p class="author-name">Gontrand Théogal</p>
					<hr class="author-separator" />
					<p class="author-job">Mage de 12ème niveau</p>
				</div>

			</div> <!--.slide_inside-->	 

		</div> <!--#slide1-->


		<div id="slide2">

			<div class="slide_inside">

				<h2>Un titre de niveau 2</h2>

				<p>Lorem Salu bissame ! Wie geht's les samis ? Hans apporte moi une Wurschtsalad avec un picon bitte, s'il te plaît.Voss ? Une Carola et du Melfor ? Yo dû, espèce de Knäckes, ch'ai dit un picon !</p>

				<p>Hopla vous savez que la mamsell Huguette, la miss Miss Dahlias du messti de Bischheim était au Christkindelsmärik en compagnie de Richard Schirmeck (celui qui a un blottkopf), le mari de Chulia Roberstau, qui lui trempait sa Nüdle dans sa Schneck ! Yo dû, Pfourtz ! Ch'espère qu'ils avaient du Kabinetpapier, Gal !</p>

				<p>Yoo ch'ai lu dans les DNA que le Racing a encore perdu contre Oberschaeffolsheim. Verdammi et moi ch'avais donc parié deux knacks et une flammekueche. Ah so ? T'inquiète, ch'ai ramené du schpeck, du chambon, un kuglopf et du schnaps dans mon rucksack. Allez, s'guelt ! Wotch a kofee avec ton bibalaekaess et ta wurscht ? Yeuh non che suis au réchime, je ne mange plus que des Grumbeere light et che fais de la chym avec Chulien. Tiens, un rottznoz sur le comptoir.</p>

				<p>Tu restes pour le lotto-owe ce soir, y'a baeckeoffe ? Yeuh non, merci vielmols mais che dois partir à la Coopé de Truchtersheim acheter des mänele et des rossbolla pour les gamins. Hopla tchao bissame ! Consectetur adipiscing elit</p>

			</div> <!--.slide_inside-->	     	

		</div> <!--#slide2-->


		<div id="slide3">

			<div class="slide_inside">			

				<h2>Crédits</h2>		

				<ul>
					<li>Page de démonstration de l'article <a href="/astuce/lire/1417-effet-parallaxe.html">Zoom sur l'effet parallaxe</a> sur <a href="http://www.alsacreations.com">Alsacréations.com</a></li>
					<li>Photos : <a href="http://www.flickr.com/photos/legofenris/">leg0fenris</a></li>
					<li>Utilisation du script : <a href="https://github.com/IanLunn/jQuery-Parallax">jQuery-Parallax</a></li>
				</ul>

			</div> <!--.slide_inside-->	    

		</div> <!--#slide3-->
		<script type="text/javascript" src="scripts/parallax.js"></script>
		<script type="text/javascript">
			$('#elevator').on('click', function() { elevator(); });

			window.onscroll = scroll;

			function scroll () {
				document.body.style.backgroundPosition = "0px "+Math.round(window.pageYOffset/2)+"px";
			}
			
			$(document).ready(function(){

				//.parallax(xPosition, adjuster, inertia, outerHeight) 
				//xPosition - Position horizontale de l'élément (css)
				//adjuster - La position Y de départ
				//inertia - Vitesse en fonction du Scroll. Exemple: 0.1 est 1/10 ème de la vitesse du scroll. 2 = deux fois la vitesse du scroll.
				//outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport
				$('#slide1').parallax("center", 0, 0.1, true);
				$('#slide2').parallax("center", 300, 0.1, true);
				$('#slide3').parallax("center", 2900, 0.1, true);
			})
		</script>

	</body>

	<!--
	<BODY>
		<div id="content">
			
			<div id="slide1" >
				<div class="slide_inside">
					
				</div>
			</div>
			<div id="slide2" >
				<div class="slide_inside"></div>
			</div>
			<div id="slide3" >
				<div class="slide_inside"></div>
			</div>
		</div>
		

		<!--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script type="text/javascript" src="script/jquery.parallax-1.1.js"></script>-->
	<!--
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
		<script type="text/javascript" src="script/jquery.parallax-1.1.js"></script>
		<script>
			$('#elevator').on('click', function() { elevator(); });
			window.onscroll = scroll;

			function scroll () {
				document.body.style.backgroundPosition = "0px "+Math.round(window.pageYOffset/2)+"px";
			}

			$(document).ready(function(){
				$('#slide1').parallax("center", 0, 0.1, true);
				$('#slide2').parallax("center", 900, 0.1, true);
				$('#slide3').parallax("center", 2900, 0.1, true);
			})

		</script>
	</BODY>
-->
</HTML>