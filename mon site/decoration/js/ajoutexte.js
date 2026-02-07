const boutonLirePlus = document.querySelectorAll(".bouton-lire-plus");
const texte = document.querySelectorAll(".texte");
for (let i = 0; i < boutonLirePlus.length; i++) {
  boutonLirePlus[i].addEventListener("click", function () {
    texte[i].classList.toggle("voirplus");
    if (
      boutonLirePlus[i].innerHTML ===
      '<i class="fa-solid fa-chevron-down fa-2xl" style="color: #56d758"></i>'
    ) {
      boutonLirePlus[i].innerHTML =
        '<i class="fa-solid fa-chevron-up fa-2xl" style="color: #56d758;"></i>';
    } else {
      boutonLirePlus[i].innerHTML =
        '<i class="fa-solid fa-chevron-down fa-2xl" style="color: #2ac05f;"></i>';
    }
  });
}
