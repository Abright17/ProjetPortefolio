<?php

require_once __DIR__ . '/serveur/Connexion.php';
require_once __DIR__ . '/serveur/donnees/RegionDAO.php';
require_once __DIR__ . '/serveur/modele/Region.php';

$dao = new RegionDAO();
$regions = $dao->lister();
?>
<?php include "header.php"; ?>
<body>
<h1>Régions</h1>
<p>Cette page présente quelque régions d'Afrique:</p>

<div class="sous-items">
  <div id="liste"></div>

  <?php foreach ($regions as $index => $region): ?>
    <?php $picId = 'pic' . ($index + 1); ?>

    <div class="notes">
      <h1><?= $region->encodeText($region->getNom()) ?></h1>

      <img
        src="<?= $region->encodeText($region->getImage()) ?>"
        alt="<?= $region->encodeText($region->getNom()) ?>"
        id="<?= $region->encodeText($picId) ?>"
      />

      <p class="texte">
        <?= $region->getDescriptionAffichable() ?>
      </p>

      <div class="bande">
        <a href="region.php?id=<?= (int)$region->getId() ?>" class="bouton">
          Plus d'informations
        </a>
      </div>
    </div>

  <?php endforeach; ?>
</div>
