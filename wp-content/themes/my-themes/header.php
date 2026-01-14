<?php get_header(); ?>
<head>
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />
    <?php wp_head(); ?>
</head>
<?php wp_body_open(); ?>
<header class="header">
  <div class="container">
    <div class="logo">
        <img src="http://jubha-hospitals.test/wp-content/uploads/2026/01/jubha.png" alt="">
    </div>
    <div class="menu-bar">
    
    <input type="checkbox" id="menu-toggle">
    <label for="menu-toggle" class="menu-icon">☰</label>

    <nav class="nav">
      <ul class="menu">
        <li><a href="#" <?= home_url(); ?>>Home</a></li>
        <li><a href="#" <?= home_url(); ?>/find-a-doctor>Find A Doctor</a></li>

        <li class="dropdown">
          <a href="#" <?= home_url(); ?>/hospital-&-clinics>Hospital & Clinics</a>
          <ul class="dropdown-menu">
            <li><a href="#">All Locations</a></li>
            <li><a href="#">Phnom Penh</a></li>
            <li><a href="#">Kompong Speu</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" <?= home_url(); ?>/patient-information>Patient Information</a>
          <ul class="dropdown-menu">
            <li><a href="#">Patient</a></li>
            <li><a href="#">Visitor Information</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" <?= home_url(); ?>/about-us>About Us</a>
        </li>

        <li class="dropdown">
          <a href="#">Media</a>
          <ul class="dropdown-menu">
            <li><a href="#">News</a></li>
            <li><a href="#">Specialized</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" <?= home_url(); ?>/contact>Contact</a>
          <ul class="dropdown-menu">
            <li><a href="#">Got In Touch</a></li>
            <li><a href="#">Suggestion</a></li>
          </ul>
        </li>

        <li><a href="#" <?= home_url(); ?>/national-day-offers>National Day Offers</a></li>
      </ul>
    </nav>

    <div class="actions">
      <a href="#" class="btn">Book an Appointment</a>
      <a href="#" class="lang"><i class="fa-solid fa-circle-user" style="color: #63E6BE; font-size: 28px;"></i></a>
    </div>

  </div>
</div>
</header>
