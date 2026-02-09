 <body>
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
