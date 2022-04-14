function ctrlSaisie()
{

var titre=document.getElementById("titre").value;
var date=document.getElementById("date").value;
var duration=document.getElementById("duration").value;

  

if(!(titre.charAt(0)>="A" && titre.charAt(0)<="Z"))
{    e.preventDefault();
    alert("Titre doit commence par majuscule!!");
}

if(duration.includes('m')==false){
    e.preventDefault();
   alert('Il faut saisir en mintues de la facon suivante XXX m');

}

//date condition 
var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
var yyyy = today.getFullYear();
today = yyyy + '-' + mm + '-' + dd;
if (date<today){
    e.preventDefault();
    alert("Date doit etre superieur a la date d'aujourd'hui !!");

}
}
