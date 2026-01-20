<?php get_header(); ?>

    <section class="hero1">
        <div class="hero1-overlay"></div>
        <div class="hero1-content container">
            <h1>Overview </h1>
            <div class="breadcrumb1">
                <a href="">Home</a> / <a href="#">About Us</a> / Overview
            </div>
        </div>
    </section>
    <div class="contact">
        <div class="contact-box">
            <h1>Get in touch with us</h1>
            <p>At Almana Hospitals we value our clients’ opinions and feedback. We are constantly looking for ways to improve our services and support your needs.</p>
        </div>
    </div>

    <section class="contact-section">
        <div class="contact-container">
            <p class="contact-description">
                For any suggestions, or complaints, please fill out the form below.
            </p>
            <form class="contact-form" method="POST">


                <div class="form-row">
                    <select name="type" class="form-input">
                        <option value="">Type of Inquiry</option>
                        <option value="Doctor">Inquiries complaints</option>
                        <option value="Department">Suggestion</option>
                    </select>
                    <input type="text" name="phone" class="form-input"
                        placeholder="Subject" required>
                </div>
                <div class="form-row">
                    <input type="text" name="first_name" class="form-input"
                        placeholder=" Name " required>
                    <input type="email" name="email" class="form-input"
                        placeholder="Email Address *" required>
                </div>

                <div class="form-row">
                    <input type="text" name="phone" class="form-input"
                        placeholder="Phone Number *" required>

                    <select name="type" class="form-input">
                        <option value="">Locations</option>
                        <option value="Doctor">Phnom Penh</option>
                        <option value="Department">Kandal</option>
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