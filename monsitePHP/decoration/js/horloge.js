function compterRebours() {
  const decompte = document.querySelector("#evenement");
  const dateActuelle = new Date().getTime();
  decompte.innerText = "visite";

  const dateEvenement = new Date("Nov 28 00:00:00 2026").getTime();

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

    decompte.innerHTML =
  `<span class="cd-number">${jours}</span><span class="cd-label">j</span>
   <span class="cd-number">${heures}</span><span class="cd-label">h</span>
   <span class="cd-number">${minutes}</span><span class="cd-label">min</span>
   <span class="cd-number">${secondes}</span><span class="cd-label">s</span>`;

  } else {
    decompte.innerText = "compte à rebours est terminé!";
  }

  let actualisation = setTimeout(compterRebours, 1000);
}
compterRebours();
decompte.className = "event";
