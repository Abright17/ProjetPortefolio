<?php include "header.php"; ?>
<body Class= "page-member">
 <h1>Nos Membres/Our Member</h1>

    <form action="member.html">
      <div class="input-container">
        <div class="message" id="message-aide"></div>
        <label
          class="outil"
          aria-label="Veuillez remplir ce champs "
          data-balloon-pos="left"
          for="pseudo"
          >Pseudonyme:</label
        >
        <input type="text" name="pseudo" id="pseudo" />
      </div>
      <br />
      <div>
        <label for="password">Mot de passe</label>
        <input
          type="password"
          name="motdepasse"
          id="password"
          class="motdepasse"
        />
      </div>
      <br />
      <input type="submit" value=" Envoyer" />
    </form>
    <br />
    <br />
 </body>
<?php include "footer.php"; ?>
