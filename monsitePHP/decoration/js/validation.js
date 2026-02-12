//Permet de lire html le id des input
const email = document.querySelector("#couriel");
//const pays = document.querySelector("zone");
// Lire le texte des messages d'erreurs (endroit où afficher le message dans le html)
const erreurEmail = document.querySelector("#erreurEmail");
//const erreurPays = document.querySelector("#erreurNom");

// Lire les labels du formulaire

const mailLabel = document.querySelector("#emailLabel");
//const paysLabel = document.querySelector("#zoneLabel");
let regexEmail = /^((?!\.)[\w\-_.]*[^.])(@\w+)(\.\w+(\.\w+)?[^.\W])$/;

document.querySelector("#formulaire").addEventListener("submit", valider, true);
function valider(e) {
  // if (pays.value.length < 3) {
  // e.preventDefault();

  if (regexEmail.test(email.value) == false) {
    e.preventDefault();
    erreurEmail.textContent = "Entrez une adresse email valide";
    email.className = "invalide";
    mailLabel.className = "label";
    email.focus();
    return false;
  } else {
    email.className = "valide";
    mailLabel.className = "labelOk";
  }
  if (email.value == "") {
    e.preventDefault();
    erreurEmail.textContent = "Veuillez entrer votre email";
    email.className = "invalide";
    mailLabel.className = "label";
    email.focus();
  }
  email.className = "valide";
  mailLabel.className = "labelOk";
}
