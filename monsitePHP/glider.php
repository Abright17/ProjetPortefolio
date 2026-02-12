 <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="decoration/css/glider.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.6.0/glide.min.js"
      integrity="sha512-2sI5N95oT62ughlApCe/8zL9bQAXKsPPtZZI2KE3dznuZ8HpE2gTMHYzyVN7OoSPJCM1k9ZkhcCo3FvOirIr2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.6.0/css/glide.core.min.css"
      integrity="sha512-tYKqO78H3mRRCHa75fms1gBvGlANz0JxjN6fVrMBvWL+vOOy200npwJ69OBl9XEsTu3yVUvZNrdWFIIrIf8FLg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.6.0/css/glide.theme.min.css"
      integrity="sha512-8vDOoSF7kZUYkn7BiQulRCTvpRoenljlkQDZhM6+IqDJi5jHDH9QEYH9NfMBB8LlqiYc7O17YGxbGx7dOxKrpw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <title>Glider</title>
  </head>
 <body class= "glider">
    <div class="images glide">
      <div class="glide__track" data-glide-el="track">
        <ul class="glide__slides">
          <li class="glide__slide">
            <img src="decoration/imagesdecoratives/1.jpg" alt="image1" />
          </li>
          <li class="glide__slide">
            <img src="decoration/imagesdecoratives/2.jpg" alt="image2" />
          </li>
          <li class="glide__slide">
            <img src="decoration/imagesdecoratives/3.jpg" alt="image3" />
          </li>
          <li class="glide__slide">
            <img src="decoration/imagesdecoratives/4.jpg" alt="image4" />
          </li>
          <li class="glide__slide">
            <img src="decoration/imagesdecoratives/5.png" alt="image5" />
          </li>
          <li class="glide__slide">
            <img src="decoration/imagesdecoratives/6.jpg" alt="image6" />
          </li>
          <li class="glide__slide">
            <img src="decoration/imagesdecoratives/7.jpg" alt="image7" />
          </li>
        </ul>
      </div>

      <!--fleches-->
      <div class="glide__track" data-glide-el="track">...</div>

      <div class="glide__arrows" data-glide-el="controls">
        <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
          prev
        </button>
        <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
          next
        </button>
      </div>
      <!--Les cercles-->
      <div class="glide__track" data-glide-el="track">...</div>

      <div class="glide__bullets" data-glide-el="controls[nav]">
        <button class="glide__bullet" data-glide-dir="=0"></button>
        <button class="glide__bullet" data-glide-dir="=1"></button>
        <button class="glide__bullet" data-glide-dir="=2"></button>
        <button class="glide__bullet" data-glide-dir="=3"></button>
        <button class="glide__bullet" data-glide-dir="=4"></button>
        <button class="glide__bullet" data-glide-dir="=5"></button>
        <button class="glide__bullet" data-glide-dir="=6"></button>
      </div>
    </div>
    <div>
      <a class="glide__track"  href="index.php" > Nos destinations </a>
    </div>
    <script>
      new Glide(".images", {
        type: "carousel",
        startAt: 0,
        perView: 5,
        focusAt: "center",
        gap: 25,
        autoplay: 2750,
        breakpoints: {
          1200: {
            perView: 3,
          },
          800: {
            perView: 2,
          },
        },
      }).mount();
    </script>
 </body>
<?php include "footer.php"; ?>
