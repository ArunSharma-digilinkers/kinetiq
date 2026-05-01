<?php require('../resources/config.php'); ?>
<?php include_once(TEMPLATE_FRONT . DS . 'header.php'); ?>
<header class="tns2-header">
	<?php include_once(TEMPLATE_FRONT . DS . 'navbar.php'); ?>
</header>

<main class="s1">
	<div class="main-wrapper">

		<div class="main-cover">
       <div class="about-banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <h2>Contact Us</h2>
                    </div>
                </div>
            </div>
        </div>
			<section class="section section-entry contact-wrapper">
				<div class="container">

					<div class="row">

						<div class="col-lg-8 col-md-12">
							<div class="contact-form-wrap contact-wrapper">
								<div class="section-title">
									<h1>Get in Touch</h1>
								</div>
								<div class="mrb30">
									<p>
										Please fill out this quick form and we will be in touch with you.
									</p>
								</div>

								<div class="row">
									<div class="col-lg-10 col-md-12">
										<form class="contact-form" action="mail/mail.php" method="POST">
											<div class="form-group mrb-small contact-form__group">
												<label class="contact-form__label" for="inputName">Your Name</label>
												<input type="text" class="form-control contact-form__input" id="inputName" name="name" placeholder="Enter your name">
											</div>
											<div class="form-group mrb-small contact-form__group">
												<label class="contact-form__label" for="inputMail">Your Email</label>
												<input type="email" class="form-control contact-form__input" id="inputMail" name="email" placeholder="Enter email">
											</div>
											<div class="form-group mrb-small contact-form__group">
												<label class="contact-form__label" for="inputPhone">Mobile Number</label>
												<input type="text" class="form-control contact-form__input" id="inputPhone" name="phone" placeholder="Enter your mobile">
											</div>
											<div class="form-group mrb-small contact-form__group">
												<label class="contact-form__label" for="inputMsg">Your Message</label>
												<textarea class="form-control contact-form__textarea" id="inputMsg" name="message" placeholder="Write your message" rows="5"></textarea>
											</div>
											<div class="contact-form__button">
												<button type="submit" class="btn c-btn" name="contact_submit">Submit</button>
											</div>
										</form>
									</div> 
								</div>

							</div>
						</div> 

						<div class="col-lg-4 col-md-12">
							<div class="contact-section">

								<div class="row">

									<div class="col-lg-12 col-md-6">
										<div class="contact-section__widget">
											<h5>Connect with us:</h5>
										</div>
									</div>

									<div class="col-lg-12 col-md-6">
										<div class="contact-section__widget">
											<p>
												<i class="fa-solid fa-phone"></i>  +91-9871223427 
											</p>
											<p>
												<i class="fa-solid fa-phone"></i>  +91-9899722509
											</p>
										</div> 
									</div> 

									<div class="col-lg-12 col-md-6">
										<div class="contact-section__widget">
											<p>
												<i class="fa-solid fa-envelope"></i>  sales@kinetiq.in
											</p>
												<p>
												<i class="fa-solid fa-envelope"></i>  info@kinetiq.in
											</p>
										</div> 
									</div> 

									<div class="col-lg-12 col-md-6">
										<div class="contact-section__widget">
											<ul class="social-list">
												<li>
													<a href=""><i class="fab fa-facebook-f"></i></a>
												</li>
												<li>
													<a href=""><i class="fab fa-instagram"></i></a>
												</li>
												<li>
													<a href=""><i class="fab fa-linkedin-in"></i></a>
												</li>
												<li>
													<a href=""><i class="fa-brands fa-youtube"></i></a>
												</li>

												
											</ul> 
										</div> 
									</div> 

									<div class="col-lg-12 col-md-6">
										<div class="contact-section__widget">
											<h5>Business Address:</h5>
											<p>
												3rd Floor, 22, Biplabi Rash Behari Basu Road, (Canning Street), Kolkata - 700001 (West Bengal)
											</p>
										</div>
									</div> 
										<div class="col-lg-12 col-md-6">
										<div class="contact-section__widget">
											<h5>Corporate Address:</h5>
											<p>
												Plot no A-61, Wazirpur Group Industrial Area, Delhi - 110052
											</p>
										</div>
									</div> 

								</div> 

							</div> 
						</div> 

					</div>

				</div>
			</section>
			
			<section class="contact-map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3493.3294413400854!2d77.09056407496632!3d28.88855687240922!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390daf0060a76b27%3A0xa53c646a88c21566!2sINFIGROW%20INDUSTRIES%20PVT.%20LTD.!5e0!3m2!1sen!2sin!4v1775217349600!5m2!1sen!2sin" width="1920" height="650" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</section>

		</div>

	<div>
</main>

<?php include_once(TEMPLATE_FRONT . DS . 'footer.php'); ?>