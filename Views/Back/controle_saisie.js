function Verif() {
  var test = false;
  let count = 0;
  var nomCt = document.forms["AddCategorie"]["nom"].value;
  var description = document.forms["AddCategorie"]["Description"].value;
  var nomArt = document.forms["AddArtistes"]["nom"].value;
  var nation = document.forms["AddArtistes"]["nationalite"].value;
  var descrip = document.forms["AddArtistes"]["description"].value;


  /*var mail = document.forms["FormAjout"]["Email"].value;
  var password = document.forms["FormAjout"]["Password"].value;
  var passwordC = document.forms["FormAjout"]["PasswordConf"].value;
  var username = document.forms["FormAjout"]["UserName"].value;
  var ville = document.forms["FormAjout"]["Ville"].value;*/

  var errorN = document.getElementById("errorNR");
  var errorP = document.getElementById("errorPR");
  var errorT = document.getElementById("errorPT");
  var errorV = document.getElementById("errorPV");
  var errorD = document.getElementById("errorPD");
  /*var errorEmail = document.getElementById("errorMR");
  var errorPass = document.getElementById("errorPass");
  var errorPassC = document.getElementById("errorPassC");
  var errorNU = document.getElementById("errorNU");
  var errorVille = document.getElementById("errorV");*/

  var letters = /^[A-Z a-z]+$/;
  var dateNow = new Date();
  if (nomCt == "") {
    errorN.innerHTML = "Veuillez entrer votre nom!";
  } else if (!(nomCt.match(letters) && nomCt.charAt(0).match(/^[A-Z]+$/))) {
    errorN.innerHTML = "Veuillez entrer un nom de categorie valide!";
  } else {
    errorN.innerHTML = "";
    count++;
  }

  if (nomArt == "") {
    errorN.innerHTML = "Veuillez entrer votre nom!";
  } else if (!(nomArt.match(letters) && nomArt.charAt(0).match(/^[A-Z]+$/))) {
    errorN.innerHTML = "Veuillez entrer un nom de categorie valide!";
  } else {
    errorN.innerHTML = "";
    count++;
  }

  if (nation == "") {
    errorN.innerHTML = "Veuillez entrer votre nationalite!";
  } else if (!(nation.match(letters) && nation.charAt(0).match(/^[A-Z]+$/))) {
    errorN.innerHTML = "Veuillez entrer un nom de nationalite valide!";
  } else {
    errorN.innerHTML = "";
    count++;
  }


  if (descrip == "") {
    errorN.innerHTML = "Veuillez entrer une description!";
  } else if (!(descrip.match(letters) && descrip.charAt(0).match(/^[A-Z]+$/))) {
    errorN.innerHTML = "Veuillez entrer un nom de description valide!";
  } else {
    errorN.innerHTML = "";
    count++;
  }


  if (description == "") {
    errorP.innerHTML = "Veuillez entrer une  description!";
  } else if (!(description.match(letters) && description.charAt(0).match(/^[A-Z]+$/))) {
    errorP.innerHTML = "Veuillez entrer une description valide!";
  } else {
    errorP.innerHTML = "";
    count++;
  }
  /*if (username == "") {
    errorP.innerHTML = "Veuillez entrer votre prenom!";
  } else if (
    !(username.match(letters) && username.charAt(0).match(/^[A-Z]+$/))
  ) {
    errorNU.innerHTML = "Veuillez entrer un nom d'utiliateur valid!";
  } else {
    errorNU.innerHTML = "";
    count++;
  }
  if (mail == "") {
    errorEmail.innerHTML = "Veuillez entrer votre email!";
  } else if (!mail.match("@esprit.tn")) {
    errorEmail.innerHTML = "Veuillez entrer un email valid!";
  } else {
    errorEmail.innerHTML = "";
    count++;
  }
  if (password == "") {
    errorPass.innerHTML = "Veuillez entrer votre mot de passe!";
  } else if (
    !(
      password.match(/[0-9]/g) &&
      password.match(/[A-Z]/g) &&
      password.match(/[a-z]/g) &&
      password.length >= 8
    )
  ) {
    errorPass.innerHTML =
      "Le mot de passe doit contenir au moins 8 caractères, dont au moins : Une lettre majuscule, Une lettre minuscule et un nombre.";
  } else {
    errorPass.innerHTML = "";
    count++;
  }
  if (VerifPassword()) {
    count++;
  }*/

  if (count === 2) {
    return true;
  }
  return false;
}

/*function VerifPassword() {
  var password = document.forms["FormAjout"]["Password"].value;
  var passwordC = document.forms["FormAjout"]["PasswordConf"].value;
  var errorPassC = document.getElementById("errorPassC");

  if (passwordC == "") {
    errorPassC.innerHTML = "Veuillez confirmer votre email!";
  }
  if (!(password == passwordC)) {
    errorPassC.innerHTML = "Les deux mot de passes ne sont pas identiques!";
  } else {
    errorPassC.innerHTML = "";
    return true;
  }
}*/

function validateForm() {
  alert(Verif());
  //e.preventDefault();
}
