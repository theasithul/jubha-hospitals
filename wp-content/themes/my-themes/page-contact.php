<?php get_header(); ?>

    <section class="hero">
        <div class="hero-overlay"></div>
            <div class="hero-content container">
                <h1>Got In Touch</h1>
            <div class="breadcrumb">
                <a href="">Home</a> / <a href="#">About Us</a> / Got In Touch
            </div>
        </div>
    </section>
    <div class="contact">
        <div class="contact-box">
            <p>We serve our clients from multiple locations in Saudi Arabia. In case of inquiries, complaints or suggestions please contact us through one of the beneath listed channels.</p>
            <div class="contact-boxx">
                <div class="contact-text">
                    <p>For inquiries or appointments, </p> <br>
                    <span>call our care center at:</span> <br>
                    <div class="box11">
                        <i class="fa-solid fa-phone"></i>
                        <h2>099 88777653</h2>
                    </div> <br><br><br>
                    <a href="#" class="btn">Book an Appointment</a>

                </div>
                <div class="contact-image">
                    <img src="http://jubha-hospitals.test/wp-content/uploads/2026/01/hehe.png" alt="">
                </div>
            </div>
        </div>
    </div>



    <section class="contact-section">
        <div class="contact-container">
            <p class="contact-description">
                If you want to find out more about our hospital, services, doctors, or departments,
                please fill in the form below or email us at
            </p>
            <form class="contact-form" method="POST">
                <div class="form-row">
                    <input type="text" name="first_name" class="form-input"
                        placeholder="First Name *" required>
                    <input type="email" name="email" class="form-input"
                        placeholder="Email Address *" required>
                </div>

                <div class="form-row">
                    <input type="text" name="phone" class="form-input"
                        placeholder="Phone Number *" required>

                    <select name="type" class="form-input">
                        <option value="">Type of Inquiry</option>
                        <option value="Doctor">Inquiries complaints</option>
                        <option value="Department">Suggestion</option>
                    </select>
                </div>

                <textarea name="message" class="form-textarea" placeholder="Your Message *" required></textarea>

                <button type="submit" class="form-submit-btn">
                    SUBMIT →
                </button>
            </form>

        </div>
    </section>


<?php get_footer(); ?>