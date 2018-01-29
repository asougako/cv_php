function getXMLHttpRequest() {
	var xhr = null;

	if (window.XMLHttpRequest || window.ActiveXObject) {
		if (window.ActiveXObject) {
			try {
				xhr = new ActiveXObject("Msxml2.XMLHTTP");
			} catch(e) {
				xhr = new ActiveXObject("Microsoft.XMLHTTP");
			}
		} else {
			xhr = new XMLHttpRequest(); 
		}
	} else {
		alert("Votre navigateur ne supporte pas l'objet XMLHTTPRequest...");
		return null;
	}

	return xhr;
}

function downloadPDF() {
	console.log("OKKFK");
	var xhr = getXMLHttpRequest();
	xhr.open("POST", "includes/convertToPDF.php", true);
	xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	xhr.onreadystatechange = function() {
		if(xhr.readyState == 4 && xhr.status == 200) 
		{ 
			console.log("OKAY");
			//console.log(xhr.responseText);
			//document.getElementById('verif_test').innerHTML = xhr.responseText;
		}
		else
			console.log("FAIL");
		console.log(xhr.responseText);
	}
	xhr.send("");
}

function elevator() {
	var page = $(this).attr('href'); // Page cible
	var speed = 750; // Durée de l'animation (en ms)
	$('html, body').animate( { scrollTop: $('body').offset().top }, speed ); // Go
	return false;
}