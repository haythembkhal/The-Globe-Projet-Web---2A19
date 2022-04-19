$(document).ready(function(){
    panier = jQuery.parseJSON(sessionStorage.panierSauvegarde);
    var elementPanier = $("#panier");
     for (var i = 0; i < panier.length; i++){
         console.log("coucou");
         var elementTr = $("<tr/>").appendTo(elementPanier);
         var elementTdProduit = $("<td/>").appendTo(elementTr);
         var elementTdTaille = $("<td/>",{
             "html" : panier[i].taille
         }).appendTo(elementTr);

         var elementTdQuantite = $("<td/>").appendTo(elementTr);
         var elementTdPrix = $("<td/>",{
             "html" : catalogue[panier[i].id].prix + "€"
         }).appendTo(elementTr);

         var elementImg = $("<img/>",{
             "src" : catalogue[panier[i].id].photo
         }).appendTo(elementTdProduit);

         var elementH4 = $("<h4/>",{
             "html" : catalogue[panier[i].id].titre
         }).appendTo(elementTdProduit);

         var elementInput = $("<input/>",{
             "type" : "number",
             "value": panier[i].quantite
         }).appendTo(elementTdQuantite);
     }
});
