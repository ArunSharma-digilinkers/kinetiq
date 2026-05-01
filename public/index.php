<?php require('../resources/config.php'); ?>
<?php include_once(TEMPLATE_FRONT . DS . 'header.php'); ?>

<header>
    <?php include_once(TEMPLATE_FRONT . DS . 'navbar.php'); ?>
</header>

<main class="s1">
    <div class="main-wrapper">

        <?php include_once(TEMPLATE_FRONT . DS . "carousel.php"); ?>
        <div class="mrb-large"></div>

        <div class="hm-product-wrapper section-entry">
            <div class="container">
                <div class="row align-items-center">

                    <!-- LEFT CONTENT -->
                    <div class="col-lg-8 offset-lg-2 mb-4" data-aos="fade-up">
                        <div class="product-intro text-center">
                            <h2>Our Range</h2>
                            <p>
                                Smart energy solutions for every need—powering homes, industries, and mobility with next-generation lithium technology.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-12">
 <!-- RIGHT PRODUCTS -->
                    <div class="product-grid" data-aos="fade-up">

                        <a href="<?php echo $path; ?>">
                            <div class="product-card">
                                <img src="<?php echo $path; ?>img/tuktuk.png" alt="E-rickshaw Lithium Batteries">
                                <h4>E-rickshaw Lithium <br>Batteries</h4>
                            </div>
                        </a>
                        <a href="<?php echo $path; ?>">
                            <div class="product-card">
                                <img src="<?php echo $path; ?>img/industrial.png" alt="E-rickshaw Lithium Batteries">
                                <h4>ESS for Industrial <br>& Home</h4>
                            </div>
                        </a>
                        <a href="<?php echo $path; ?>">
                            <div class="product-card">
                                <img src="<?php echo $path; ?>img/golfcart.png" alt="E-rickshaw Lithium Batteries">
                                <h4>Golf Cart <br>Batteries</h4>
                            </div>
                        </a>
                        <a href="<?php echo $path; ?>">
                            <div class="product-card">
                                <img src="<?php echo $path; ?>img/hybrid-inverter.png" alt="E-rickshaw Lithium Batteries">
                                <h4>Home Hybrid <br>Inverter</h4>
                            </div>
                        </a>
                        <a href="<?php echo $path; ?>">
                            <div class="product-card">
                                <img src="<?php echo $path; ?>img/inverter-batteries.png" alt="E-rickshaw Lithium Batteries">
                                <h4>Home Inverter Lithium <br>Batteries</h4>
                            </div>
                        </a>
                        <a href="<?php echo $path; ?>">
                            <div class="product-card">
                                <img src="<?php echo $path; ?>img/motorcycle.png" alt="E-rickshaw Lithium Batteries">
                                <h4>Two Wheeler Lithium <br>Batteries</h4>
                            </div>
                        </a>

                        <!-- <a href="<?php //echo $path; ?>">
                            <div class="product-card">
                                <img src="<?php //echo $path; ?>" alt="E-loader Lithium Batteries">
                                <h4>E-loader Lithium Batteries</h4>
                            </div>
                        </a>

                        <a href="<?php //echo $path; ?>">
                            <div class="product-card">
                                <img src="<?php //echo $path; ?>" alt="Home Inverter Lithium Batteries">
                                <h4>Home Inverter Lithium Batteries</h4>
                            </div>
                        </a>

                        <a href="<?php //echo $path; ?>">
                            <div class="product-card">
                                <img src="<?php //echo $path; ?>" alt="Golf Cart Batteries">
                                <h4>Golf Cart Batteries</h4>
                            </div>
                        </a>

                        <a href="<?php //echo $path; ?>">
                            <div class="product-card">
                                <img src="<?php //echo $path; ?>" alt="Home Hybrid Inverter">
                                <h4>Home Hybrid Inverter</h4>
                            </div>
                        </a>

                        <a href="<?php //echo $path; ?>">
                            <div class="product-card">
                                <img src="<?php //echo $path; ?>" alt="Ess for Industrial/Home">
                                <h4>Ess for Industrial/Home</h4>
                            </div>
                        </a>

                        <a href="<?php //echo $path; ?>">
                            <div class="product-card">
                                <img src="<?php //echo $path; ?>" alt="Two Wheelers Lithium Batteries">
                                <h4>Two Wheelers Lithium Batteries</h4>
                            </div>
                        </a> -->

                    </div>
                    </div>

                   
                </div>
            </div>
        </div>

        <div class="hm-wrapper section-entry" data-aos="fade-up">
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

                        <a href="<?php echo $path; ?>about-us" class="btn default-btn">Read More</a>

                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <img src="<?php echo $path; ?>img/hm-about-img.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="home-cta-wrapper" data-aos="fade-up">
        <div class="container">
            <div class="row align-items-center text-center text-lg-start">

                <!-- LEFT CONTENT -->
                <div class="col-lg-8">
                    <h2 class="cta-title">Power Your Future with Smart Energy Solutions</h2>
                    <p class="cta-text">
                        Upgrade to advanced lithium battery technology for better performance,
                        longer life, and reliable backup.
                    </p>
                </div>

                <!-- RIGHT BUTTON -->
                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                    <a href="tel:9871223427" class="cta-btn">Connect With Us</a>
                </div>

            </div>
        </div>
    </div>

    <div class="why-choose-kinetiq-wrapper section-entry" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Why Choose Kinetiq</h1>
                    <p>
                        Experience cutting-edge lithium battery technology designed for efficiency, safety, and long-lasting performance. Built to power your future with reliability and innovation.
                    </p>
                </div>
                   <!-- CARD 1 -->
        <div class="col-lg-4 col-md-6">
            <div class="feature-card">
                <div class="icon">
                    <img src="<?php echo $path; ?>img/power.png" alt="" class="img-fluid">
                </div>
                <h5>Latest Lithium-Ion Technology</h5>
                <p>Advanced battery technology ensuring high efficiency and long life.</p>
            </div>
        </div>

        <!-- CARD 2 -->
        <div class="col-lg-4 col-md-6">
            <div class="feature-card">
                <div class="icon">
                    <img src="<?php echo $path; ?>img/compact.png" alt="" class="img-fluid">
                </div>
                <h5>Compact & Lightweight</h5>
                <p>Easy to install, space-saving, and completely maintenance-free.</p>
            </div>
        </div>

        <!-- CARD 3 -->
        <div class="col-lg-4 col-md-6">
            <div class="feature-card">
                <div class="icon">
                    <img src="<?php echo $path; ?>img/energy.png" alt="" class="img-fluid">
                </div>
                <h5>Eco-Friendly Storage</h5>
                <p>Environment-friendly energy solution with zero emissions.</p>
            </div>
        </div>

        <!-- CARD 4 -->
        <div class="col-lg-4 col-md-6">
            <div class="feature-card">
                <div class="icon">
                    <img src="<?php echo $path; ?>img/production.png" alt="" class="img-fluid">
                </div>
                <h5>Smart BMS System</h5>
                <p>Intelligent battery management for safety and performance.</p>
            </div>
        </div>

        <!-- CARD 5 -->
        <div class="col-lg-4 col-md-6">
            <div class="feature-card">
                <div class="icon">
                    <img src="<?php echo $path; ?>img/security.png" alt="" class="img-fluid">
                </div>
                <h5>Thermal Protection</h5>
                <p>Advanced safety features to prevent overheating risks.</p>
            </div>
        </div>

        <!-- CARD 6 -->
        <div class="col-lg-4 col-md-6">
            <div class="feature-card">
                <div class="icon">
                    <img src="<?php echo $path; ?>img/desktop-pc.png" alt="" class="img-fluid">
                </div>
                <h5>Smart Monitoring</h5>
                <p>Track battery performance with real-time connectivity.</p>
            </div>
        </div>

            </div>
        </div>
    </div>

    <div class="testimonial-wrapper section-entry" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4>Testimonials</h4>
                </div>

                <div class="col-lg-12">
                    <div class="testimonials owl-carousel owl-theme">
                        <div class="item">
                            <div class="testimonial-card">
                                <p>
                                    “I’ve been using this battery for the past few months, and the performance is outstanding. The backup is reliable, and the build quality feels premium. Highly recommended for anyone looking for long-term energy solutions.”
                                </p>

                                <div class="testimonial-user">
                                    <img src="<?php echo $path; ?>img/default-profile.jpg" alt="Profile">
                                    <div>
                                        <h5>Anil Jha</h5>
                                        <span>Dealer, Delhi</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include_once(TEMPLATE_FRONT . DS . 'footer.php'); ?>