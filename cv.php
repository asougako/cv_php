<!DOCTYPE html>

<HTML lang="fr">
	<HEAD>
		<meta charset="UTF-8">
		<link type="text/css" rel="stylesheet" href="styles/cv.css">
		<!--<script src="./resp.js"></script>-->
		<script src="./ajax.js"></script>
		<script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>

	</HEAD>
	<BODY>
		<div id="content">
			<div id="author">
				<p class="author-name">Gontrand Théogal</p>
				<hr class="author-separator" />
				<p class="author-job">Mage de 12ème niveau</p>
			</div>

		</div><!--content-->
		<button id="DL_PDF" onclick="window.open('includes/convertToPDF.php')">Télécharger en PDF</button>
		<div id="elevator" title="Revenir en haut de la page"><img src="resources/ScrollUp.png" id="elevator_img" /></div>
		<script>
			$('#elevator').on('click', function() { elevator(); });
			window.onscroll = scroll;

			function scroll () {
				document.body.style.backgroundPosition = "0px "+Math.round(window.pageYOffset/2)+"px";
			}
		</script>
	</BODY>
</HTML>

