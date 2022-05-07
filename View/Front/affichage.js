// control de saisie pour commentaires

function ctrlComment(event)
{
    // CONTROL DE SAISIE COMMENTAIRE
var comment=document.getElementById("comment").value;
// return false;
if(comment=="")
{
	commmentControl.innerHTML="Il faut saisir des données";
	return false;
}

}
// OPTIONS FOR ACCUIEL SEARCH BAR

function first(){
    document.getElementById("search_box").setAttribute("value","Will Smith");
}
function second(){
document.getElementById("search_box").setAttribute("value","BTS");
}
function third(){
document.getElementById("search_box").setAttribute("value","PNL");
}


//FUNCTION TO DISABLE OR ACTIVATE RESERVATIO BUTTON 

function afficherRes() {
	var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = today.getFullYear();
    today = yyyy + '-' + mm + '-' + dd;
	if(document.getElementById("spectacleDate").innerText < today)
	{
    	document.getElementById("spectacleReservation").setAttribute("style","pointer-events: none;");
		document.getElementById("spectacleReservation").innerHTML="Date Dépassée";
	}
}	


