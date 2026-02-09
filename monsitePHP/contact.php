<h1>Contact</h1>
    <div class="container">
      <!-- formulaire-->
      <form action="contact.html" method="post" id="formulaire">
        <fieldset>
          <legend>Identification</legend>
          <div class="input-container" id="nomlabel">
            <!--input:text.nom-->
            <div class="message" id="message-aide"></div>
            <label
              class="outil"
              for="nom"
              aria-label="Veuillez renseigners sur cette information "
              data-balloon-pos="left"
              >Entrez votre nom:</label
            >
            <input
              type="text"
              name="nom"
              id="name"
              class="nom"
              placeholder="nom"
              size="20"
              date-baloon-length="xlarge"
              aria-label="Champs obligatoire"
            />
            <span id="erreurNom" class="erreur"></span>

            <br />
            <br />

            <!--input:text.prenom-->
            <input
              type="text"
              name="prenom"
              id="prenom"
              class="prenom"
              placeholder="prénom"
            />
          </div>
          <div>
            <input type="checkbox" id="genre1" name="genre1" value="boy" />
            <label for="genre1">Homme</label>
          </div>
          <div>
            <input type="checkbox" id="genre2" name="genre2" value="girl" />
            <label for="genre2">Femme</label>
          </div>

          <!--input:text.nom-->
          <div class="input-container" id="emailLabel">
            <label for="couriel"> Email:</label>
            <input
              type="text"
              name="email"
              id="couriel"
              class="email"
              placeholder="example@email.com"
            />
            <span id="erreurEmail" class="erreur"></span>
          </div>

          <div class="input-container" id="zoneLabel">
            <!--input:text.nom-->
            <label for="pays"> Pays:</label>
            <input
              type="text"
              name="pays"
              id="pays"
              class="pays"
              placeholder="Autres"
            />
            <select name="list-pays" id="list-pays">
              <option value="afrique">Afrique du sud</option>
              <option value="allemagne">Allemagne</option>
              <option value="algérie">Algérie</option>
              <option value="burundi">Burundi</option>
              <option value="cameroun">Cameroun</option>
              <option value="canada">Canada</option>
              <option value="cote d'ivoire">cote d'ivoire</option>
              <option value="etats unis">États-unis</option>
            </select>
          </div>
        </fieldset>

        <br />
        <label for="titre">titre</label>
        <input type="text" name="titre" id="titre" class="titre" />
        <br />
        <br />
        <div class="commentaire">
          <br />
          <label for="commentaire"> Commentaire </label>
          <textarea
            rows="10"
            cols="35"
            name="commentaire"
            id="commentaire"
            placeholder="Laisser un commentaire à l'auteur"
          ></textarea
          ><br />
        </div>
        <div class="input-container">
          <input type="submit" value=" Envoyer" />
        </div>
      </form>
    </div>
