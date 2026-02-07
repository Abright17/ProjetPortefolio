const texte = document.querySelector("#pseudo");
texte.addEventListener("focus", avecFocus);
texte.addEventListener("blur", sansFocus);

texte.value = "exemple@gmail.com";

function avecFocus() {
  texte.value = "";
}
function sansFocus() {
  texte.value = "exemple@gmail.com";
}
