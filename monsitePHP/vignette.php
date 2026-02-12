<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="decoration/js/destination.js" defer></script>
    <script src="decoration/js/hamburger.js" defer></script>
    <title>Destinations Touristiques</title>
    <style>
      body {
        background-color: rgb(241, 138, 87);
        font-family: Arial, sans-serif;
      }

      .flex-container {
        display: flex;
        justify-content: center;
        padding: 20px;
      }

      .vignette-lieu {
        background-color: white;
        height: 205px;
        width: 205px;
        border: 1px black solid;
        border-radius: 100px;
        margin-right: 10px;
        cursor: pointer;
        overflow: hidden;
      }

      .vignette-lieu:hover {
        opacity: 0.7;
      }

      .vignette-lieu img {
        height: 200px;
        width: 220px;
        object-fit: cover;
      }

      #zone-affichage {
        background-color: white;
        display: flex;
        width: 900px;
        height: 700px;
        margin: 0 auto;
        margin-top: 10px;
        border: solid 3px #333333;
        border-radius: 30px;
      }

      .detail-lieu {
        display: none;
        width: 700px;
        height: 500px;
        border: solid 1px black;
      }

      .destination {
        font-size: 30px;
        position: absolute;
        margin-right: 30%;
        padding: 10px;
      }

      .dest-description {
        font-size: 18px; /* Ajusté pour la lisibilité du texte long */
        width: 350px;
        position: relative;
        left: 50px;
        top: 80px;
      }

      .destination-images {
        width: 400px;
        height: 480px;
        text-align: left;
        margin: 20px;
        padding-top: 80px;
        object-fit: cover;
      }
    </style>
  </head>
  <body>
    <div class="flex-container">
      <div class="vignette-lieu" id="maroc">
        <img src="decoration/imagesdecoratives/maroc.webp" alt="Maroc" />
      </div>
      <div class="vignette-lieu" id="cameroun">
        <img src="decoration/imagesdecoratives/cameroun.jpg" alt="Cameroun" />
      </div>
      <div class="vignette-lieu" id="congo">
        <img src="decoration/imagesdecoratives/congo.jpg" alt="Congo" />
      </div>
      <div class="vignette-lieu" id="botswana">
        <img src="decoration/imagesdecoratives/botswana.jpg" alt="Botswana" />
      </div>
      <div class="vignette-lieu" id="sudafriq">
        <img src="decoration/imagesdecoratives/sudafriq.jpg" alt="Afrique du Sud" />
      </div>
    </div>

    <div id="zone-affichage"></div>

    <div class="detail-lieu" id="detail-maroc">
      <h4 class="destination">Chefchaouen</h4>
      <img class="destination-images" src="decoration/imagesdecoratives/chefkouen.jpg" />
      <div class="dest-description">
        <p>
          Surnommée "la ville bleue", Chefchaouen est une perle nichée dans les montagnes du Rif. Ses ruelles escarpées, peintes de toutes les nuances de bleu, offrent une atmosphère paisible et hors du temps. C’est un lieu sacré pour les photographes et les voyageurs en quête de sérénité et d'artisanat traditionnel marocain.
        </p>
        <a href="https://www.visitmorocco.com/fr/voyage/chefchaouen" style="color: white; font-weight: bold; text-decoration: none; background: #333; padding: 10px 20px; border-radius: 5px;" >Informations plus détaillées</a>
      </div>
    </div>

    <div class="detail-lieu" id="detail-cameroun">
      <h4 class="destination">Musée Royal Bamoun</h4>
      <img class="destination-images" src="decoration/imagesdecoratives/Foumban8-1.jpeg" alt="Foumban" />
      <div class="dest-description">
        <p>
          Situé à Foumban, ce musée est un chef-d'œuvre architectural représentant les symboles du peuple Bamoun. Il abrite une collection inestimable d'objets d'art, de masques et d'attributs royaux qui témoignent de la richesse culturelle et de l'histoire séculaire de l'un des plus anciens royaumes d'Afrique centrale.
        </p>
        <a href="https://routedeschefferies.com/destinations/le-nouveau-musee-royal-bamoun-ville-de-foumban/" style="color: white; font-weight: bold; text-decoration: none; background: #333; padding: 10px 20px; border-radius: 5px;" >Informations plus détaillées</a>
      </div>
    </div>

    <div class="detail-lieu" id="detail-congo">
      <h4 class="destination">Sainte Anne de Brazzaville</h4>
      <img class="destination-images" src="decoration/imagesdecoratives/sainteanne.jpeg" alt="Brazzaville" />
      <div class="dest-description">
        <p>
          La basilique Sainte-Anne du Congo est le monument emblématique de Brazzaville. Construite avec des tuiles vernissées vertes qui rappellent la forêt tropicale, elle est un symbole de réconciliation et de beauté architecturale, mêlant techniques européennes et esthétique africaine.
        </p>
        <a href="https://fr.wikipedia.org/wiki/Basilique_Sainte-Anne-du-Congo_de_Brazzaville"  style="color: white; font-weight: bold; text-decoration: none; background: #333; padding: 10px 20px; border-radius: 5px;" >Informations plus détaillées</a>
      </div>
    </div>

    <div class="detail-lieu" id="detail-botswana">
      <h4 class="destination">Le Delta de l'Okavango</h4>
      <img class="destination-images" src="decoration/imagesdecoratives/okavango.jpg" alt="Okavango" />
      <div class="dest-description">
        <p>
          Véritable miracle de la nature, ce delta s'évapore au milieu du désert du Kalahari. Classé au patrimoine mondial, il offre un labyrinthe de lagunes et de canaux où l'on peut observer une faune exceptionnelle, notamment en pirogue traditionnelle (Mokoro), pour une immersion sauvage totale.
        </p>
        <a href="https://www.nationalgeographic.fr/environnement/2018/12/decouvrez-le-delta-de-lokavango-en-360deg" style="color: white; font-weight: bold; text-decoration: none; background: #333; padding: 10px 20px; border-radius: 5px; ">Informations plus détaillées</a>
      </div>
    </div>

    <div class="detail-lieu" id="detail-sudafriq">
      <h2 class="destination">Blyde River Canyon</h2>
      <img class="destination-images" src="decoration/imagesdecoratives/blyderiver.jpg" alt="Blyde River" />
      <div class="dest-description">
        <p>
          Le troisième plus grand canyon au monde offre des panoramas vertigineux. Entre les "Three Rondavels" et la fenêtre de Dieu (God's Window), les visiteurs découvrent des formations rocheuses spectaculaires surplombant une végétation luxuriante et des cascades étincelantes le long de la Panorama Route.
        </p>
        <a href="https://fr.wikipedia.org/wiki/Blyde_River_Canyon" style="color: white; font-weight: bold; text-decoration: none; background: #333; padding: 10px 20px; border-radius: 5px;" >Informations plus détaillées</a>
      </div>
    </div>

    <div style="text-align: center; margin-top: 20px;">
        <a href="index.php" style="color: white; font-weight: bold; text-decoration: none; background: #333; padding: 10px 20px; border-radius: 5px;">Revenir à l'accueil</a>
    </div>
  </body>
