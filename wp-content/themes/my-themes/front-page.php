<?php get_header(); ?>
<head>
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />
    <?php wp_head(); ?>
</head>

<section class="hero">
  <div class="container hero-grid">

    <div class="hero-text">
      <h1>We Are Providing<br>Best Health Services</h1>
      <p>
        Our skilled doctors have tremendous experience.
        It is a long established fact that a reader will be distracted.
      </p>

      <div class="appointment-box">
        <div class="input">Dhaka, Bangladesh</div>
        <div class="input">18 February, 2023</div>
        <div class="input">03 Adults, 02 Child</div>
        <button>Search</button>
      </div>
    </div>

    <div class="hero-image">
      <img src="http://jubha-hospitals.test/wp-content/uploads/2026/01/Happy-smiling-young-doctor-_-Premium-AI-generated-image.jpeg" alt="Doctor">
    </div>

  </div>
</section>

<!-- SERVICES -->
<section class="services">
  <div class="container">
    <div class="services-header">
      <h2>Services For Your Health</h2>
      <button class="btn-outline">Book an Appointment</button>
    </div>

    <div class="services-grid">
      <div class="service-card">
        <h4>Neurology Clinic</h4>
        <p>Improve your strength through many exercises.</p>
      </div>

      <div class="service-card">
        <h4>Pathology Clinic</h4>
        <p>Long established fact that reader will be distracted.</p>
      </div>

      <div class="service-card">
        <h4>Pediatric Clinic</h4>
        <p>The point of using Lorem Ipsum is that it has.</p>
      </div>

      <div class="service-card">
        <h4>Health Clinic</h4>
        <p>Designed for those who need medical support.</p>
      </div>
    </div>
  </div>
</section>

<!-- VISION -->
<section class="vision">
  <div class="container vision-grid">
    <div class="vision-image">
      <img src="http://jubha-hospitals.test/wp-content/uploads/2026/01/@rayhan20-ideogram.jpeg" alt="">
    </div>

    <div class="vision-text">
      <h2>Our Vision And Mission</h2>
      <p>
        We denounce with righteous indignation and dislike men
        who are so beguiled and demoralized.
      </p>
      <ul>
        <li>✔ High quality doctors</li>
        <li>✔ Modern medical equipment</li>
        <li>✔ Patient-centered care</li>
      </ul>
      <a href="#" class="btn">Learn More</a>
    </div>
  </div>
</section>
<?php get_footer(); ?>