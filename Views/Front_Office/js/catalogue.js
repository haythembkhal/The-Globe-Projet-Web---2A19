


// function afficherArticle(){
//   var indiceArticle = urlParams.paramIndice;
//   var article = catalogue[indiceArticle];
//
//   var titre = document.getElementById('titre');
//   titre.innerHTML = article.titre;
//   var description = document.getElementById('description');//id fiche.html
//   description.innerHTML = article.description; //id index.html
//   var photo = document.getElementById('image');
//   photo.src = article.photo;
//   console.log(urlParams);
// }
$(document).ready(function(){
    var elementCatalogue = $('#catalogue');
    for (var i = 0; i < catalogue.length; i++) {
        var elementArticle = $('<div/>',{
            'class': 'article'
        }).appendTo('#catalogue');

        var row = $('<div/>',{
            'class': 'row'
        }).appendTo(elementArticle);

        var elementcolMd = $('<div/>',{
            'class': 'col-md-6'
        }).appendTo(row);

        var elementImg = $('<img/>', {
            "class" : "image",
            "src": catalogue[i].photo
        }).appendTo(elementcolMd);

        var elementcolMd = $('<div/>',{
            'class': 'col-md-6'
        }).appendTo(row);

        var elementH3 = $('<h3/>',{
            "class" : "h3",
            "html" : catalogue[i].titre
        }).appendTo(row);


        for (var j = 0; j < 5 ; j++) {
            var elementNote = $('<i/>',{
            "class" : "fa fa-reddit-alien"
            }).appendTo(row);
        }
        var elementParagraphe = $('<p/>',{
            "class" : "paragraphe",
            "text" : catalogue[i].description
        }).appendTo(row);


        var elementPrix = $('<span/>',{
            "class" : "span",
            "html" : catalogue[i].prix + "€"
        }).appendTo(row);


        var elementLink = $("<a/>",{
            "html" : "Accéder à la fiche produit",
            "href" : "ficheproduitmodele.html?idarticle=" + i
        }).appendTo(elementArticle);


        $(elementLink).css("padding", "19em" );

    }
});
