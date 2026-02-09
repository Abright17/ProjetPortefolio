 <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="decoration/imagesdecoratives/afrique.png"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="decoration/css/general.css" />
    <link rel="stylesheet" href="decoration/css/afrique-centrale.css" />
    <link rel="stylesheet" href="decoration/css/afrique-du-nord.css" />
    <link rel="stylesheet" href="decoration/css/contact.css" />
    <link rel="stylesheet" href="decoration/css/regions.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="decoration/css/accueil.css" />
    <script src="decoration/js/horloge.js" defer></script>
    <script src="decoration/js/script.js" defer></script>
    <script src="decoration/js/hamburger.js" defer></script>
    <script src="decoration/js/pagefaq.js" defer></script>
    <title>menu en HTML</title>
  </head>
    <header>
      <!-- menu de navigation -->
      <!--nav>ul>il*4>a -->
      <!-- sous-menu-->
      <!--li>a+ul>li*2>a-->
      <nav class="navbar">
        <span class="navbar-toggle" id="js-navbar-toggle">
          <!-- icône hamburger avec animation CSS -->
          <div class="bar1"></div>
          <div class="bar2"></div>
          <div class="bar3"></div>
        </span>

        <ul class="menu" id="js-menu">
          <li>
            <a href="index.php"
              ><i class="fa-solid fa-house-chimney"></i> Accueil</a
            >
          </li>

          <li>
            <a href="mission.php">
              <i class="fa-solid fa-calendar-days"></i>Mission</a
            >
          </li>
          <li>
            <a href="regions.php"
              ><i class="fa-solid fa-location-dot"> </i>Régions</a
            >
            <ul>
              <li><a href="afrique-centrale.php">Afrique Centrale</a></li>
              <li><a href="afrique-du-nord.php">Afrique du Nord</a></li>
              <li><a href="afrique-du-sud.php">Afrique du Sud</a></li>
            </ul>
          </li>
          <li>
            <a href="member.php"> <i class="fa-solid fa-users"></i> Members</a>
          </li>
          <li>
            <a href="contact.php">
              <i class="fa-sharp fa-solid fa-phone"> </i> Contact</a
            >
          </li>
          <li>
            <a href="faq.php"
              ><i class="fa-solid fa-circle-question"></i> FAQ</a
            >
          </li>
        </ul>
      </nav>
      <img
        src="decoration/imagesdecoratives/image1.jpg"
        alt="header"
        class="header"
      />
      <div class="invitation">
        <p>
          Une envie de découverte,de safari et d'autres activités sans vous
          soucier de vos sous?
        </p>
        <a href="vignette.php" class="valid">
          <i class="fa-sharp fa-solid fa-phone"> </i> Contactez-nous!</a
        >
      </div>
    </header>
