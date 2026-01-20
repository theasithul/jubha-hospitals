<?php get_header(); ?>
<head>
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />
    <?php wp_head(); ?>
</head>

<!-- <section class="hero">
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
        <button class="btn-top">Search</button>
      </div>
    </div>

    <div class="hero-image">
      <img src="http://jubha-hospitals.test/wp-content/uploads/2026/01/Happy-smiling-young-doctor-_-Premium-AI-generated-image.jpeg" alt="Doctor">
    </div>

  </div>
</section> -->
<div class="slider">

  <div class="slide active" style="background-image: url('<?= get_template_directory_uri(); ?>/images/banner.jpg');">
    <div class="content-1">
      <h1>Behind every continuous medical care</h1>
      <p>Dedicated</p>
      <a href="#" class="btn">Read More</a>
    </div>
  </div>

  <div class="slide" style="background-image: url('<?= get_template_directory_uri(); ?>/images/banner2.jpg');">
    <div class="content-1">
      <h1>Easier Communication</h1>
      <p>with Almana WhatsApp</p>
      <a href="#" class="btn">Our Services</a>
    </div>
  </div>

    <div class="slide" style="background-image: url('<?= get_template_directory_uri(); ?>/images/banner3.jpg');">
      <div class="content-1">
        <h1>Quality Healthcare Closer to You</h1>
        <p>Almana Group of Hospitals</p>
        <a href="#" class="btn">Contact Us</a>
      </div>
  </div>

</div>


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
      <a href="#" class="btn-top-2">Learn More</a>
    </div>
  </div>
</section>
<section class="stats-section">
  <div class="overlay"></div>

  <div class="container">
    <!-- Left stats -->
    <div class="stats-grid">
      <div class="stat-card">
        <span class="stat-number">6500</span>
        <span class="stat-label">QUALIFIED WORKFORCE</span>
      </div>
      <div class="stat-card">
        <span class="stat-number">800</span>
        <span class="stat-label">SPECIALIZED DOCTORS</span>
      </div>
      <div class="stat-card">
        <span class="stat-number">8</span>
        <span class="stat-label">MEDICAL FACILITIES</span>
      </div>
      <div class="stat-card">
        <span class="stat-number">1300</span>
        <span class="stat-label">TOTAL BEDS</span>
      </div>
    </div>

    <!-- Right content -->
    <div class="stats-content">
      <span class="subtitle">STATISTICS</span>
      <h2>AGH At a Glance</h2>
      <p>
        We provide specialized units in various medical specialties.
        <br /><br />
        A continuation of a series of successes in the Group, we provide
        specialized units in various medical specialties, where we meet the
        caregivers and the modern medical equipment to serve the community and
        people.
      </p>
      <a href="#" class="btn-outline">OUR BRANCHES →</a>
    </div>
  </div>
</section>

<!-- Bottom banner -->
<section class="departments">
  <div class="container dept-flex">
    <div>
      <span class="dept-sub">DEPARTMENTS</span>
      <h3>7 Decades of Excellence</h3>
    </div>
    <a href="#" class="dept-link">ALL DEPARTMENTS →</a>
  </div>
</section>

<section class="departments-section">
  <div class="cards">

    <!-- Card 1 -->
    <div class="card">
     <img src="<?php echo get_template_directory_uri(); ?>/images/home.jpg" alt="">
      <div class="card-overlay">
        <img src="<?php echo get_template_directory_uri(); ?>/images/Anesthesiology.svg" alt="">
        <h3>Anesthesiology</h3>
        <p>
          Comprehensive anesthesia services ensuring patient safety,
          comfort, and advanced perioperative care.
        </p>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="card">
      <img src="<?php echo get_template_directory_uri(); ?>/images/home1.jpg" alt="">
      <div class="card-overlay">
          <img src="<?php echo get_template_directory_uri(); ?>/images/cardiology.svg" alt="">
        <h3>Cardiac Surgery</h3>
        <p>
          Advanced heart surgeries using state-of-the-art technology
          and highly specialized cardiac teams.
        </p>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="card">
      <img src="<?php echo get_template_directory_uri(); ?>/images/home2.jpg" alt="">
      <div class="card-overlay">
        <img src="<?php echo get_template_directory_uri(); ?>/images/cath.svg" alt="">
        <h3>Cath Lab</h3>
        <p>
          Fully equipped catheterization laboratories for accurate
          diagnosis and minimally invasive procedures.
        </p>
      </div>
    </div>

  </div>
</section>

<section class="media-update">
    <div class="container">
        <p class="subtitle">MEDIA UPDATE</p>
        <h2 class="title">Latest Happenings</h2>

        <div class="class-v2-grid">
            <div class="class-v2">
                <div class="class-v2-image">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/pic.png" alt="">
                </div>
                <div class="class-v2-content">
                    <p class="category">SPECIALIZED CARE</p>
                    <h3>Home Healthcare Service</h3>
                    <a href="#" class="read-more">READ MORE <span>→</span></a>
                </div>
            </div>

            <div class="class-v2">
                <div class="class-v2-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/pic1.jpg" alt="Immune System">
                </div>
                <div class="class-v2-content">
                    <p class="category">MEDICAL ENCYCLOPEDIA</p>
                    <h3>Signs of a Weak Immune System: How Your Body Sends Distress...</h3>
                    <a href="#" class="read-more">READ MORE <span>→</span></a>
                </div>
            </div>

            <div class="class-v2">
                <div class="class-v2-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/pic2.jpg" alt="Leukemia">
                </div>
                <div class="class-v2-content">
                    <p class="category">MEDICAL ENCYCLOPEDIA</p>
                    <h3>Leukemia Symptoms, Causes and Treatment</h3>
                    <a href="#" class="read-more">READ MORE <span>→</span></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="branches-section">
    <div class="header-section">
        <span class="label">Branches</span>
        <h2 class="title">Hospital Locations</h2>
    </div>

    <div class="grid">
        <div class="location-card">
              <img src="<?php echo get_template_directory_uri(); ?>/images/cp-vorn.jpg" alt="Leukemia">
            <div class="overlay">
                <h3 class="location-name">Chompu Vorn</h3>
            </div>
        </div>

        <div class="location-card">
                <img src="<?php echo get_template_directory_uri(); ?>/images/st-mean.png" alt="Leukemia">
            <div class="overlay">
                <h3 class="location-name">Stueng Meanchey</h3>
            </div>
        </div>

        <div class="location-card">
            <img src="<?php echo get_template_directory_uri(); ?>/images/kp.jpg" alt="AGH Dammam">
            <div class="overlay">
                <h3 class="location-name">Koa Pech</h3>
            </div>
        </div>
    </div>
</section>



<script>
  let slides = document.querySelectorAll('.slide');
let index = 0;

function autoSlide() {
  slides[index].classList.remove('active');
  index = (index + 1) % slides.length;
  slides[index].classList.add('active');
}

setInterval(autoSlide, 4000); // 4 seconds

</script>


<?php get_footer(); ?>