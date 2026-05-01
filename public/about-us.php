<?php require('../resources/config.php'); ?>
<?php include_once(TEMPLATE_FRONT . DS . 'header.php'); ?>
<header class="tn-header">
    <?php include_once(TEMPLATE_FRONT . DS . 'navbar.php'); ?>
</header>

<main class="s1">
    <div class="main-wrapper">
        <div class="about-banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <h2>About Us</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="about-info-wrapper section-entry">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h3>Who We Are</h3>
                        <p>
                            Kinetiq is a energy solutions brand focused on advanced lithium battery technology. Built
                            with a vision to support the growing demand for clean, efficient, and dependable power,
                            Kinetiq combines innovation with strict quality standards.
                        </p>
                        <p>
                            We have associated professionals based in Hong Kong and Mainland China who directly monitor
                            our supply chain, ensuring transparency, quality control, and reliability without involving
                            unnecessary intermediaries. This allows us to source the best components while maintaining
                            cost efficiency and global quality benchmarks.
                        </p>
                        <p>
                            With the manufacturing of lithium-ion batteries in India, Kinetiq is committed to supporting
                            the vision of Atmanirbhar Bharat, contributing towards making India self-reliant in the
                            energy sector. Our goal is not only to deliver high-performance energy solutions but also to
                            strengthen India’s position in the global clean energy ecosystem.
                        </p>
                        <p>
                            We use only premium-grade lithium cells directly sourced from China, which are BIS approved
                            and tested under stringent quality protocols. Our strong supply chain management and
                            pan-India service network ensure timely delivery, technical support, and long-term customer
                            satisfaction.
                        </p>
                        <p>
                            Kinetiq is led by a team of well-educated and experienced directors who bring a strong
                            legacy of business leadership. Our founders and directors possess deep industry knowledge,
                            strategic vision, and hands-on experience in building and scaling successful enterprises.
                        </p>
                        <p>
                            Their expertise in operations, supply chain management, and market development enables
                            Kinetiq to operate with professionalism, transparency, and long-term sustainability. Under
                            their guidance, Kinetiq continues to evolve as a reliable and future-ready energy brand.
                        </p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <img src="<?php echo $path; ?>img/about-info-img.jpg" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>

        <div class="about-cards section-entry">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-10 offset-lg-1">
                        <h1>
                            What Makes Us Different
                        </h1>
                        <p>
                            Delivering high-quality lithium battery solutions with advanced technology and trusted
                            performance.
                            We ensure reliability, safety, and long-term value for every customer.
                        </p>
                    </div>
                    <!-- CARD 1 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="about-card">
                            <div class="icon">
                                <img src="<?php echo $path; ?>img/premium.png" alt="" class="img-fluid">
                            </div>
                            <h4>Premium Quality</h4>
                            <p>
                                We use BIS-approved lithium cells sourced with strict quality testing
                                to ensure high performance and reliability.
                            </p>
                        </div>
                    </div>

                    <!-- CARD 2 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="about-card">
                            <div class="icon">
                                <img src="<?php echo $path; ?>img/supply-chain-management.png" alt="" class="img-fluid">
                            </div>
                            <h4>Strong Supply Chain</h4>
                            <p>
                                Our pan-India network ensures fast delivery, smooth operations,
                                and dependable customer support.
                            </p>
                        </div>
                    </div>

                    <!-- CARD 3 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="about-card">
                            <div class="icon">
                                <img src="<?php echo $path; ?>img/thought-leadership.png" alt="" class="img-fluid">
                            </div>
                            <h4>Expert Leadership</h4>
                            <p>
                                Led by experienced professionals with deep industry knowledge and
                                a strong vision for growth.
                            </p>
                        </div>
                    </div>

                    <!-- CARD 4 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="about-card">
                            <div class="icon">
                                <img src="<?php echo $path; ?>img/business-development.png" alt="" class="img-fluid">
                            </div>
                            <h4>Professional Operations</h4>
                            <p>
                                We maintain transparency and efficiency in operations,
                                supply chain, and market execution.
                            </p>
                        </div>
                    </div>

                    <!-- CARD 5 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="about-card">
                            <div class="icon">
                                <img src="<?php echo $path; ?>img/save-the-world.png" alt="" class="img-fluid">
                            </div>
                            <h4>Sustainable Growth</h4>
                            <p>
                                Focused on long-term sustainability with eco-friendly
                                and future-ready energy solutions.
                            </p>
                        </div>
                    </div>

                    <!-- CARD 6 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="about-card">
                            <div class="icon">
                                <img src="<?php echo $path; ?>img/lighting.png" alt="" class="img-fluid">
                            </div>
                            <h4>Reliable Energy</h4>
                            <p>
                                Delivering consistent and dependable battery performance
                                for homes and businesses.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="process-section section-entry">
            <div class="container">

                <!-- HEADING -->
                <div class="text-center mb-5">
                    <h2 class="section-title">How It Works</h2>
                    <p class="section-subtitle">
                        Simple steps to deliver reliable and smart energy solutions for your needs.
                    </p>
                </div>

                <div class="row g-4">

                    <!-- STEP 1 -->
                    <div class="col-lg-3 col-md-6">
                        <div class="process-card">
                            <div class="step-number">01</div>
                            <h4>Consultation</h4>
                            <p>We understand your energy requirements and recommend the best solution.</p>
                        </div>
                    </div>

                    <!-- STEP 2 -->
                    <div class="col-lg-3 col-md-6">
                        <div class="process-card">
                            <div class="step-number">02</div>
                            <h4>Product Selection</h4>
                            <p>Choose from high-performance lithium batteries tailored to your needs.</p>
                        </div>
                    </div>

                    <!-- STEP 3 -->
                    <div class="col-lg-3 col-md-6">
                        <div class="process-card">
                            <div class="step-number">03</div>
                            <h4>Installation</h4>
                            <p>Our experts ensure smooth and safe installation at your location.</p>
                        </div>
                    </div>

                    <!-- STEP 4 -->
                    <div class="col-lg-3 col-md-6">
                        <div class="process-card">
                            <div class="step-number">04</div>
                            <h4>Support</h4>
                            <p>We provide ongoing support and monitoring for long-term performance.</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <div>
</main>

<?php include_once(TEMPLATE_FRONT . DS . 'footer.php'); ?>