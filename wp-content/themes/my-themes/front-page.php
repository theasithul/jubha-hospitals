<?php get_header(); ?>
<head>
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />
    <?php wp_head(); ?>
</head>
<?php wp_body_open(); ?>
<body <?php body_class(); ?>>
    <section class="hero">
        <div class="auto-slider">

  <div class="slide active">
    <img src="http://jubha-hospitals.test/wp-content/uploads/2026/01/hero1.jpg" alt="">
    <div class="slide-content">
      <h2>Web Design</h2>
      <p>Modern and responsive website design</p>
      <a href="https://example.com" target="_blank">Visit Website</a>
    </div>
  </div>

  <div class="slide">
    <img src="img2.jpg" alt="">
    <div class="slide-content">
      <h2>Development</h2>
      <p>Fast and secure web applications</p>
      <a href="https://google.com" target="_blank">Learn More</a>
    </div>
  </div>

  <div class="slide">
    <img src="img3.jpg" alt="">
    <div class="slide-content">
      <h2>Marketing</h2>
      <p>Grow your business online</p>
      <a href="https://yourwebsite.com" target="_blank">Our Website</a>
    </div>
  </div>

</div>

    </section>


    <script>
           const slides = document.querySelectorAll(".auto-slider .slide");
let currentIndex = 0;

setInterval(() => {
  slides[currentIndex].classList.remove("active");
  currentIndex = (currentIndex + 1) % slides.length;
  slides[currentIndex].classList.add("active");
}, 4000);

    </script>
</body>
<?php get_footer(); ?>