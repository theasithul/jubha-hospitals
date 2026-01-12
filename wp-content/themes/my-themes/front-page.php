<?php get_header(); ?>
<head>
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/section.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />
    <?php wp_head(); ?>
</head>
<?php wp_body_open(); ?>
<body <?php body_class(); ?>>
    <section class="hero">
    <div class="slider">
        <div class="slide s1">
        <div class="content">
            <span>BEHIND EVERY CONTINUOUS MEDICAL CARE</span>
            <h1>Dedicated <br>National Talent</h1>
            <a href="">BOOK NOW ></a>
        </div>
        </div>

        <div class="slide s2">
        <div class="content">
            <span>GROUP OF HOSPITALS</span>
            <h1>Care At Your<br>Fingertips</h1>
            <a href="">BOOK NOW ></a>
        </div>
        </div>

        <div class="slide s3">
        <div class="content">
            <span>YOUR HEALTH, OUR PRIORITY</span>
            <h1>Easier<br>Communicate</h1>
            <a href="">BOOK NOW ></a>
        </div>
        </div>
    </div>
    </section>

</body>

<?php get_footer(); ?>