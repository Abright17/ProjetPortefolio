function compterRebours() {
  const decompte = document.querySelector("#evenement");
  const dateActuelle = new Date().getTime();
  decompte.innerText = "visite";

  const dateEvenement = new Date("Feb 28 00:00:00 2024").getTime();

  const totalSecondes = (dateEvenement - dateActuelle) / 1000;
  if (totalSecondes < 0) {
    clearTimeout(compterRebours);
  }
  if (totalSecondes > 0) {
    const jours = Math.floor(totalSecondes / (60 * 60 * 24));

    const heures = Math.floor(
      (totalSecondes - jours * 60 * 60 * 24) / (60 * 60)
    );
    const minutes = Math.floor(
      (totalSecondes - (jours * 60 * 60 * 24 + heures * 60 * 60)) / 60
    );
    const secondes = Math.floor(
      totalSecondes - (jours * 60 * 60 * 24 + heures * 60 * 60 + minutes * 60)
    );
    console.log(jours, heures, minutes, secondes);

    decompte.innerText =
      jours + "jours" + "" + heures + ":" + minutes + ":" + secondes + "s";
  } else {
    decompte.innerText = "compte à rebours est terminé!";
  }

  let actualisation = setTimeout(compterRebours, 1000);
}
compterRebours();
decompte.className = "event";
