const listeVignettes = document.querySelectorAll(".vignette-lieu");
for (let i = 0; i < listeVignettes.length; i++) {
  listeVignettes[i].addEventListener("mousedown", function () {
    afficherDetailLieu(this.id);
  });
}
function afficherDetailLieu(lieu) {
  let detail = document.querySelector("#detail-" + lieu);
  let zoneAffichage = document.querySelector("#zone-affichage");

  zoneAffichage.innerHTML = detail.innerHTML;
  console.log(zoneAffichage);
}
