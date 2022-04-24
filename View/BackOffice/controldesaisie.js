
function ctrlSaisie(event)
{
var adresse=document.getElementById("adresse").value;
var resto=document.getElementById("resto").value;
var hotel=document.getElementById("hotel").value;
var gare=document.getElementById("gare").value;
var carte=document.getElementById("carte").value;
var video=document.getElementById("video").value;
var realisateurs=document.getElementById("realisateurs").value;
var desc=document.getElementById("desc").value;
var imgL=document.getElementById("imgLand").value;
var imgP=document.getElementById("imgPort").value;


var titre=document.getElementById("titre").value;
var date=document.getElementById("date").value;
var duration=document.getElementById("duration").value;

var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
var yyyy = today.getFullYear();


var cmon=document.getElementById("input1")
var cprenom=document.getElementById("input2")
var cemail=document.getElementById("input3")

if(!(titre.charAt(0)>="A" && titre.charAt(0)<="Z"))
{
	// event.preventDefault();
	input1.innerHTML="Titre doit commencer par une majuscule!!";
	return false;
}

//date condition 
today = yyyy + '-' + mm + '-' + dd;
if (date<today){
	input2.innerHTML="Date doit etre superieur a la date d'aujourd'hui !!";
	return false;
}
if(duration.includes('m')==false){
	input3.innerHTML="Il faut saisir en mintues de la facon suivante XXX m"
return false;
}
if(adresse=="")
{
	input4.innerHTML="Il faut saisir des données";
	return false;
}
if(resto=="")
{
	input5.innerHTML="Il faut saisir des données";
	return false;
}
if(gare=="")
{
	input6.innerHTML="Il faut saisir des données";
	return false;
}
if(hotel=="")
{
	input7.innerHTML="Il faut saisir des données";
	return false;
}
if(imgL=="")
{
	input8.innerHTML="Il faut saisir des données";
	return false;
}
if(imgP=="")
{
	input9.innerHTML="Il faut saisir des données";
	return false;
}
if(video=="")
{
	input10.innerHTML="Il faut saisir des données";
	return false;
}
if(carte=="")
{
	input11.innerHTML="Il faut saisir des données";
	return false;
}
if(desc=="")
{
	input12.innerHTML="Il faut saisir des données";
	return false;
}
if(realisateurs=="")
{
	input13.innerHTML="Il faut saisir des données";
	return false;
}

}

function ctrlComment(event)
{
    // CONTROL DE SAISIE COMMENTAIRE
var comment=document.getElementById("comment").value;
// return false;
if(comment=="")
{
	inputComment.innerHTML="Il faut saisir des données";
	return false;
}

}