//This script open/close the #menuPrincipal when onclick="maFonction() is set on the element balise 
function openMenu() {
	var div = document.getElementById("menuPrincipal");
 	if (div.style.display === "none") {
		div.style.display = "block";
	  	} else {
	   	div.style.display = "none";
		}
}