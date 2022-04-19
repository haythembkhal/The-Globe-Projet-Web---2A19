
$(document).ready(function(){
var panier = [];
if (sessionStorage.panierSauvegarde != undefined ) {
    panier = JSON.parse(sessionStorage.panierSauvegarde);
}
    var i = urlParams.idarticle;
    if (i >= 0) {
    $("#photo").attr({"src": catalogue[i].photo}).appendTo($("#divimage"));
    $("#titre").html(catalogue[i].titre);
    $("#description").html(catalogue[i].description);
    $("#prix").html(catalogue[i].prix + " €");
}
    $("#boutonpanier").click(function(){

        var lignePanier = {
            id : urlParams.idarticle,
            quantite : $("#qt").val(),
            taille : $("#taille").val()
        }

        panier.push(lignePanier);
        sessionStorage.setItem("panierSauvegarde", JSON.stringify(panier));
    });
});

// function ajouterPanier() {
//   var idArticle = urlParams.idarticle;
  // var elementQuantite = document.getElementById("qt");
  // var elementTaille = document.getElementById("taille");
  // var quantite = elementQuantite.value;
  // var taille = elementTaille.value;
//   var lignePanier = {
//     id : idArticle,
//     quantite : quantite,
//     taille : taille
//   }
//   panier.push(lignePanier);
//   sessionStorage.setItem("panierSauvegarde", JSON.stringify(panier));
// }

// function afficher_fiche() {
//   var i = urlParams.idarticle;
//   if (i >= 0) {
//     var elementDiv = document.getElementById("divimage");
//     var elementImg = document.getElementById("photo");
//     elementImg.src = catalogue[i].photo;
//     elementDiv.appendChild(elementImg);
    // var elementTitre = document.getElementById("titre");
//     elementTitre.innerHTML = catalogue[i].titre;
    // var elementDescription = document.getElementById("description");
//     elementDescription.innerHTML = catalogue[i].description;
//     var elementPrix = document.getElementById("prix");
//     elementPrix.innerHTML = catalogue[i].prix + " €";
//   }
// }
// //
