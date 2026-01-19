<?php get_header(); ?>
<head>
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/page-hospital-clinics.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />
    <?php wp_head(); ?>
</head>


   <section class="locations-section">
  <!-- Header -->
  <div class="locations-header">
    <div class="title-txt">
      <span class="breadcrumb">
      <a href="" style="text-decoration: none; color: blue;">Home</a> / Hospital & Clinics / All Locations</span>
      <h1>All Locations</h1>
      <p>
        We continue to expand our healthcare network with tertiary care
        hospitals and outpatient medical centers across the Eastern Province.
      </p>
    </div>
  </div>

  <div class="locations-grid">
    <div class="location-card">
      <img src="<?php echo get_template_directory_uri(); ?>/images/DSC01.jpg" alt="My Logo">
      <div class="card-content">
        <h3>AMC Rakkah</h3>
      </div>
    </div>

    <div class="location-card">
      <img src="<?php echo get_template_directory_uri(); ?>/images/local02.jpg" alt="My Logo">
      <div class="card-content">
        <h3>AGH Khobar</h3>
      </div>
    </div>

    <div class="location-card">
      <img src="<?php echo get_template_directory_uri(); ?>/images/local03.jpg" alt="Medical Center">
      <div class="card-content">
        <h3>Medical Center</h3>
      </div>
    </div>
  </div>
  <div class="locations-grid">
    <div class="location-card">
      <img src="<?php echo get_template_directory_uri(); ?>/images/local04.jpg" alt="My Logo">
      <div class="card-content">
        <h3>AMC Rakkah</h3>
      </div>
    </div>

    <div class="location-card">
      <img src="<?php echo get_template_directory_uri(); ?>/images/local05.jpg" alt="AGH Khobar">
      <div class="card-content">
        <h3>AGH Khobar</h3>
      </div>
    </div>

    <div class="location-card">
      <img src="<?php echo get_template_directory_uri(); ?>/images/local06.jpg" alt="Medical Center">
      <div class="card-content">
        <h3>Medical Center</h3>
      </div>
    </div>
  </div>
  <div class="locations-grid">
    <div class="location-card">
      <img src="<?php echo get_template_directory_uri(); ?>/images/local07.jpg" alt="My Logo">
      <div class="card-content">
        <h3>AMC Rakkah</h3>
      </div>
    </div>

    <div class="location-card">
      <img src="<?php echo get_template_directory_uri(); ?>/images/local08.jpg" alt="AGH Khobar">
      <div class="card-content">
        <h3>AGH Khobar</h3>
      </div>
    </div>

    <div class="location-card">
      <img src="<?php echo get_template_directory_uri(); ?>/images/local09.jpg" alt="Medical Center">
      <div class="card-content">
        <h3>Medical Center</h3>
      </div>
    </div>
  </div>
  
  </div>
</section>