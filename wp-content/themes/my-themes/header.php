<head>
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />
    <?php wp_head(); ?>
</head>
<?php wp_body_open(); ?>
<body <?php body_class(); ?>>
    <header>
        <div class="menu-section">
            <div class="menu-top">
                <a href="" class="logo">
                    <img src="http://jubha-hospitals.test/wp-content/uploads/2026/01/jubha.png" alt="">
                </a>
                <div class="booking">
                    <a href="">Careers</a>
                    <button class="btn"><i class="fa-solid fa-book-atlas"></i> BOOK AN APPOINMENT</button>
                    <a href="" class="user-acc"><i class="fa-solid fa-circle-user" style="color: #000"></i></a>
                </div>
            </div>
            <nav class="menu-link">
                <ul>
                    <li><a href="<?= home_url(); ?>">Home</a></li>
                    <li><a href="<?= home_url(); ?>/find-a-doctor">Find A Doctor</a></li>
                    <li>
                        <a href="<?= home_url(); ?>/hospital-&-clinics">Hospital & Clinics</a>
                        <div class="dropdown">
                            <a href="">All Location</a>
                            <a href="">Phnom Penh</a>
                            <a href="">Kandal</a>
                        </div>
                    </li>
                    <li>
                        <a href="<?= home_url(); ?>/patient-information">Patient Information</a>
                        <div class="dropdown">
                            <a href="">In Patient</a>
                            <a href="">Outpatient</a>
                            <a href="">Visitor Information</a>
                        </div>
                    </li>
                    <li>
                        <a href="<?= home_url(); ?>/about-us">About Us</a>
                        <div class="dropdown">
                            <a href="">Overview</a>
                            <a href="">Our Culture</a>
                            <a href="">CEO Message</a>
                            <a href="">Plan Tree</a>
                        </div>
                    </li>
                    <li>
                        <a href="<?= home_url(); ?>/media">Media</a>
                        <div class="dropdown">
                            <a href="">News</a>
                            <a href="">Specialized</a>
                        </div>
                    </li>
                    <li>
                        <a href="<?= home_url(); ?>/contact">Contact</a>
                        <div class="dropdown">
                            <a href="">Get In Touch</a>
                            <a href="">Complaints & Suggest</a>
                        </div>
                    </li>
                    <li><a href="<?= home_url(); ?>/national-day-offers">National Day Offers</a></li>
                </ul>
            </nav>
        </div>
    </header>