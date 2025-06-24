<?php include 'partials/main.php'; ?>

<?php include 'partials/title-meta.php'; ?>

<?php include 'partials/head-css.php'; ?>


<body>
	<div class="main-page-wrapper dark-bg-five">
		<!-- ===================================================
			Loading Transition
		==================================================== -->
		<?php include 'partials/preloader.php'; ?>


		<!-- 
		=============================================
			Theme Main Menu
		============================================== 
		-->
		<header class="theme-main-menu menu-style-nine sticky-menu menu-overlay">
			<div class="inner-content gap-one">
				<div class="top-header position-relative">
					<div class="d-flex align-items-center">
						<div class="logo order-lg-0 me-lg-5">
							<a href="index.php" class="d-flex align-items-center">
								<img src="assets/images/logo/logo_09.svg" alt="">
							</a>
						</div>
						<!-- logo -->
						<div class="right-widget ms-auto order-lg-3">
							<ul class="d-flex align-items-center style-none">
								<li>
									<a href="login.php" class="login-btn-one text-white fw-500 d-flex align-items-center tran3s"><img src="assets/images/icon/icon_18.svg" alt="" class="me-2"> <span>Login</span></a>
                                </li>
								<li class="d-none d-md-inline-block ms-3">
                                    <a href="signup.php" class="btn-eighteen">Register</a>
                                </li>
							</ul>
						</div>
						<nav class="navbar navbar-expand-lg p0 order-lg-2 ms-lg-5 ms-3">
							<button class="navbar-toggler d-block d-lg-none" type="button" data-bs-toggle="collapse"
								data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
								aria-label="Toggle navigation">
								<span></span>
							</button>
							<div class="collapse navbar-collapse" id="navbarNav">
								<ul class="navbar-nav align-items-lg-center">
									<li class="d-block d-lg-none"><div class="logo"><a href="index.php" class="d-block"><img src="assets/images/logo/logo_09.svg" alt=""></a></div></li>
									<li class="nav-item dropdown mega-dropdown">
										<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
											data-bs-auto-close="outside" aria-expanded="false">Home
										</a>
										<ul class="dropdown-menu">
											<li class="pe-3 ps-3">
												<div class="row gx-3">
													<div class="col-lg-3">
														<a href="index.php" class="home-item w-100">
															<div class="img-item"><img src="assets/images/menu/home01.jpg" alt="" class="w-100"></div>
															<span>Payment Service</span>
														</a>
													</div>
													<div class="col-lg-3">
														<a href="index-2.php" class="home-item w-100">
															<div class="img-item"><img src="assets/images/menu/home02.jpg" alt="" class="w-100"></div>
															<span>AI Writer</span>
														</a>
													</div>
													<div class="col-lg-3">
														<a href="index-3.php" class="home-item w-100">
															<div class="img-item"><img src="assets/images/menu/home03.jpg" alt="" class="w-100"></div>
															<span>Website Builder</span>
														</a>
													</div>
													<div class="col-lg-3">
														<a href="index-4.php" class="home-item w-100">
															<div class="img-item"><img src="assets/images/menu/home04.jpg" alt="" class="w-100"></div>
															<span>CRM</span>
														</a>
													</div>
													<div class="col-lg-3">
														<a href="index-5.php" class="home-item w-100">
															<div class="img-item"><img src="assets/images/menu/home05.jpg" alt="" class="w-100"></div>
															<span>Project Management </span>
														</a>
													</div>
													<div class="col-lg-3">
														<a href="index-6.php" class="home-item w-100">
															<div class="img-item"><img src="assets/images/menu/home06.jpg" alt="" class="w-100"></div>
															<span>Mobile App Landing</span>
														</a>
													</div>
													<div class="col-lg-3">
														<a href="index-7.php" class="home-item w-100">
															<div class="img-item"><img src="assets/images/menu/home07.jpg" alt="" class="w-100"></div>
															<span>Digital Agency</span>
														</a>
													</div>
													<div class="col-lg-3">
														<a href="index-8.php" class="home-item w-100">
															<div class="img-item"><img src="assets/images/menu/home08.jpg" alt="" class="w-100"></div>
															<span>Help Desk</span>
														</a>
													</div>
													<div class="col-lg-3">
														<a href="index-9.php" class="home-item w-100">
															<div class="img-item"><img src="assets/images/menu/home09.jpg" alt="" class="w-100"></div>
															<span>Web Hosting </span>
														</a>
													</div>
													<div class="col-lg-3">
														<a href="index-10.php" class="home-item w-100">
															<div class="img-item"><img src="assets/images/menu/home10.jpg" alt="" class="w-100"></div>
															<span>Cyber Security</span>
														</a>
													</div>
												</div>
											</li>
										</ul>
									</li>
									<li class="nav-item dropdown mega-dropdown-sm">
							        	<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Pages
										</a>
						                <ul class="dropdown-menu">
							                <li class="row gx-1">
												<div class="col-lg-4">
													<div class="menu-column">
														<h6 class="mega-menu-title">Essential</h6>
														<ul class="style-none mega-dropdown-list">
															<li><a href="about-us-v1.php" class="dropdown-item"><span>About Us-1</span></a></li>
															<li><a href="about-us-v2.php" class="dropdown-item"><span>About Us-2</span></a></li>
															<li><a href="about-us-v3.php" class="dropdown-item"><span>About Us-3</span></a></li>
															<li><a href="team-v1.php" class="dropdown-item"><span>Team-1</span></a></li>
															<li><a href="team-v2.php" class="dropdown-item"><span>Team-2</span></a></li>
															
														</ul>
													</div> <!--/.menu-column -->
												</div>
												<div class="col-lg-4">
													<div class="menu-column">
														<h6 class="mega-menu-title">Features</h6>
														<ul class="style-none mega-dropdown-list">
															<li><a href="service-v1.php" class="dropdown-item"><span>Service-1</span></a></li>
															<li><a href="service-v2.php" class="dropdown-item"><span>Service-2</span></a></li>
															<li><a href="service-v3.php" class="dropdown-item"><span>Service-3</span></a></li>
															<li><a href="service-details.php" class="dropdown-item"><span>Service Details</span></a></li>
															<li><a href="pricing-v1.php" class="dropdown-item"><span>Pricing-1</span></a></li>
															<li><a href="pricing-v2.php" class="dropdown-item"><span>Pricing-2</span></a></li>
															
														</ul>
													</div> <!--/.menu-column -->
												</div>
												<div class="col-lg-4">
													<div class="menu-column">
														<h6 class="mega-menu-title">Others</h6>
														<ul class="style-none mega-dropdown-list">
															<li><a href="faq-v1.php" class="dropdown-item"><span>FAQ-1</span></a></li>
															<li><a href="faq-v2.php" class="dropdown-item"><span>FAQ-2</span></a></li>
															<li><a href="login.php" class="dropdown-item"><span>Login</span></a></li>
															<li><a href="signup.php" class="dropdown-item"><span>Sign Up</span></a></li>
															<li><a href="404.php" class="dropdown-item"><span>404 Error</span></a></li>
														</ul>
													</div> <!--/.menu-column -->
												</div>
											</li>
						                </ul>
						            </li>
									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
											data-bs-auto-close="outside" aria-expanded="false">Project
										</a>
										<ul class="dropdown-menu">
											<li><a href="project-v1.php" class="dropdown-item"><span>Project-1</span></a></li>
											<li><a href="project-v2.php" class="dropdown-item"><span>Project-2</span></a></li>
											<li><a href="project-v3.php" class="dropdown-item"><span>Project-3</span></a></li>
											<li><a href="project-v4.php" class="dropdown-item"><span>Project-4</span></a></li>
											<li><a href="project-v5.php" class="dropdown-item"><span>Project-5</span></a></li>
											<li><a href="project-v6.php" class="dropdown-item"><span>Project-6</span></a></li>
											<li><a href="project-details.php" class="dropdown-item"><span>Project Details</span></a></li>
										</ul>
									</li>
									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
											data-bs-auto-close="outside" aria-expanded="false">Blog
										</a>
										<ul class="dropdown-menu">
											<li><a href="blog-v1.php" class="dropdown-item"><span>Blog Full Width</span></a></li>
											<li><a href="blog-v2.php" class="dropdown-item"><span>Blog List</span></a></li>
											<li><a href="blog-v3.php" class="dropdown-item"><span>Blog 2 column</span></a></li>
											<li><a href="blog-details.php" class="dropdown-item"><span>Blog Details</span></a></li>
										</ul>
									</li>
									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
											data-bs-auto-close="outside" aria-expanded="false">Contact
										</a>
										<ul class="dropdown-menu">
											<li><a href="contact-v1.php" class="dropdown-item"><span>Contact Us-1</span></a></li>
											<li><a href="contact-v2.php" class="dropdown-item"><span>Contact Us-2</span></a></li>
										</ul>
									</li>
									<li class="d-md-none ps-3 pe-3 mt-20">
										<a href="signup.php" class="btn-eighteen w-100">Register</a>
									</li>
								</ul>
							</div>
						</nav>
					</div>
				</div> <!--/.top-header-->
			</div> <!-- /.inner-content -->
		</header> 
		<!-- /.theme-main-menu -->



		<!-- 
		=============================================
			Hero Banner
		============================================== 
		-->
		<div class="hero-banner-nine z-1 position-relative pt-225 md-pt-150 pb-225 xl-pb-200 md-pb-120">
			<div class="container lg">
                <div class="row">
                    <div class="col-lg-6 col-md-8">
                        <h1 class="hero-heading font-Playfair wow fadeInUp">Easily Create your website Now</h1>
                        <p class="fs-24 pt-35 lg-pt-30 pb-30 pe-xxl-5 wow fadeInUp" data-wow-delay="0.1s">Guaranteeing fast, secure, always-online site for trust from visitors, search engines.</p>
                        <a href="pricing-v1.php" class="btn-eighteen">Start Now</a>
                        <p class="fs-22 pt-40 lg-pt-20">From <span class="fw-500 text-white">$3.99/mo.</span> <del>Regular $17.99/mo.</del>  exc VAT</p>
                    </div>
                </div>

                <div class="illustration">
                    <img src="assets/images/assets/ils_24.svg" alt="">
                </div>
            </div>
		</div>
		<!-- /.hero-banner-nine -->


		


		<!--
		=====================================================
			Block Feature Twenty Four
		=====================================================
		-->
		<div class="block-feature-twentyFour pb-80 lg-pb-40">
			<div class="container lg">
				<div class="row gx-xxl-5">
					<div class="col-lg-4">
						<div class="card-style-eleven">
							<img src="assets/images/icon/icon_46.svg" alt="">
							<h4>WordPress Hosting</h4>
							<p class="m0">Start from <span class="fw-500 text-white">$2.99/mo</span></p>
							<div class="d-flex justify-content-end">
								<a href="#" class="stretched-link"><img src="assets/images/icon/icon_49.svg" alt=""></a>
							</div>
						</div>
						<!-- /.card-style-eleven -->
					</div>
					<div class="col-lg-4">
						<div class="card-style-eleven md-mt-30">
							<img src="assets/images/icon/icon_47.svg" alt="">
							<h4>Website Hosting</h4>
							<p class="m0">Start from <span class="fw-500 text-white">$2.99/mo</span></p>
							<div class="d-flex justify-content-end">
								<a href="#" class="stretched-link"><img src="assets/images/icon/icon_49.svg" alt=""></a>
							</div>
						</div>
						<!-- /.card-style-eleven -->
					</div>
					<div class="col-lg-4">
						<div class="card-style-eleven md-mt-30">
							<img src="assets/images/icon/icon_48.svg" alt="">
							<h4>Domain Names</h4>
							<p class="m0">Start from <span class="fw-500 text-white">$2.99/mo</span></p>
							<div class="d-flex justify-content-end">
								<a href="#" class="stretched-link"><img src="assets/images/icon/icon_49.svg" alt=""></a>
							</div>
						</div>
						<!-- /.card-style-eleven -->
					</div>
				</div>

				<form action="#" class="d-flex">
					<input type="text" placeholder="Find you perfect domain name...">
					<button>Search</button>
				</form>
				<div class="d-flex justify-content-center justify-content-md-between flex-wrap logos">
					<div><img src="assets/images/assets/d_n_01.png" alt=""></div>
					<div><img src="assets/images/assets/d_n_02.png" alt=""></div>
					<div><img src="assets/images/assets/d_n_03.png" alt=""></div>
					<div><img src="assets/images/assets/d_n_04.png" alt=""></div>
					<div><img src="assets/images/assets/d_n_05.png" alt=""></div>
				</div>
			</div>
		</div>
		<!-- /.block-feature-twentyFour -->


		<!--
		=====================================================
			Pricing Section Six
		=====================================================
		-->
		<div class="pricing-section-six mt-170 lg-mt-80">
			<div class="container lg">
				<div class="row">
                    <div class="col-xl-4 col-lg-6 m-auto m-xl-0 text-center text-xl-start">
                        <div class="title-eleven">
                            <h2>Solo, Agency or Team? Choose your plan.</h2>
                        </div>
						<div class="fs-20 fw-500 text-white mt-55 lg-mt-40 mb-15">Billing Cycle</div>
						<nav class="pricing-nav-four d-flex justify-content-center justify-content-xl-start lg-mb-40">
							<div class="nav nav-tabs justify-content-between" role="tablist">
								<a class="nav-link active" id="monthly-tab" data-bs-toggle="tab" data-bs-target="#monthly" type="button" role="tab" aria-controls="monthly" aria-selected="true">Monthly</a>
								<a class="nav-link" id="yearly-tab" data-bs-toggle="tab" data-bs-target="#yearly" type="button" role="tab" aria-controls="yearly" aria-selected="false">Yearly</a>
							</div>
						</nav>
                    </div>
					<div class="col-xl-8">
						<div class="tab-content ps-xxl-5">
							<div class="tab-pane show active fade" id="monthly" role="tabpanel" aria-labelledby="buy-tab" tabindex="0">
								<div class="row">
									<div class="col-lg-6 d-flex">
										<div class="pr-column w-100">
											<div class="pr-header text-center mb-25">
												<div class="plane-name">Personal</div>
												<div class="info1 fs-20">Available for single person</div>
												<div class="save-line fs-20 fw-500">Save 75%</div>
												<div class="price">$3.99<sub>/mo*</sub></div>
												<div class="info2 fs-20">Reguler price <del class="fw-500 text-white">$13.99</del></div>
												
											</div>
											<!-- /.pr-header -->
											<a href="#" class="btn-eleven w-100 d-flex justify-content-between align-items-center">Start Free Trial<span class="icon tran3s d-flex align-items-center justify-content-center"><i class="bi bi-chevron-right"></i></span></a>
											<h6>Features</h6>
											<ul class="style-none package-feature">
												<li>1 Website</li>
												<li>Unlimited Traffic</li>
												<li>Unlimited Free Domain</li>
												<li>Fast SSD Storage</li>
												<li>10 Email & Domain</li>
												<li>WP Installer</li>
												<li>Free SSL Certificate</li>
												<li>Free Migration</li>
												<li>WP Website Builder</li>
											</ul>
										</div>
										<!-- /.pr-column -->
									</div>
									<div class="col-lg-6 d-flex">
										<div class="pr-column w-100 md-mt-30">
											<div class="pr-header text-center mb-25">
												<div class="plane-name">Business</div>
												<div class="info1 fs-20">Available for single person</div>
												<div class="save-line fs-20 fw-500">Save 80%</div>
												<div class="price">$7.99<sub>/mo*</sub></div>
												<div class="info2 fs-20">Reguler price <del class="fw-500 text-white">$29.99</del></div>
												
											</div>
											<!-- /.pr-header -->
											<a href="#" class="btn-eleven w-100 d-flex justify-content-between align-items-center">Start Free Trial<span class="icon tran3s d-flex align-items-center justify-content-center"><i class="bi bi-chevron-right"></i></span></a>
											<h6>Features</h6>
											<ul class="style-none package-feature">
												<li>Unlimited Website</li>
												<li>Unlimited Traffic</li>
												<li>Unlimited Free Domain</li>
												<li>Fast SSD Storage</li>
												<li>Unlimited Email & Domain</li>
												<li>WP Installer</li>
												<li>Free SSL Certificate</li>
												<li>Free Migration</li>
												<li>WP Website Builder</li>
											</ul>
										</div>
										<!-- /.pr-column -->
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="yearly" role="tabpanel" aria-labelledby="rent-tab" tabindex="0">
								<div class="row">
									<div class="col-lg-6 d-flex">
										<div class="pr-column w-100">
											<div class="pr-header text-center mb-25">
												<div class="plane-name">Personal</div>
												<div class="info1 fs-20">Available for single person</div>
												<div class="save-line fs-20 fw-500">Save 75%</div>
												<div class="price">$3.99<sub>/mo*</sub></div>
												<div class="info2 fs-20">Reguler price <del class="fw-500 text-white">$13.99</del></div>
												
											</div>
											<!-- /.pr-header -->
											<a href="#" class="btn-eleven w-100 d-flex justify-content-between align-items-center">Start Free Trial<span class="icon tran3s d-flex align-items-center justify-content-center"><i class="bi bi-chevron-right"></i></span></a>
											<h6>Features</h6>
											<ul class="style-none package-feature">
												<li>1 Website</li>
												<li>Unlimited Traffic</li>
												<li>Unlimited Free Domain</li>
												<li>Fast SSD Storage</li>
												<li>10 Email & Domain</li>
												<li>WP Installer</li>
												<li>Free SSL Certificate</li>
												<li>Free Migration</li>
												<li>WP Website Builder</li>
											</ul>
										</div>
										<!-- /.pr-column -->
									</div>
									<div class="col-lg-6 d-flex">
										<div class="pr-column w-100 md-mt-30">
											<div class="pr-header text-center mb-25">
												<div class="plane-name">Business</div>
												<div class="info1 fs-20">Available for single person</div>
												<div class="save-line fs-20 fw-500">Save 80%</div>
												<div class="price">$7.99<sub>/mo*</sub></div>
												<div class="info2 fs-20">Reguler price <del class="fw-500 text-white">$29.99</del></div>
												
											</div>
											<!-- /.pr-header -->
											<a href="#" class="btn-eleven w-100 d-flex justify-content-between align-items-center">Start Free Trial<span class="icon tran3s d-flex align-items-center justify-content-center"><i class="bi bi-chevron-right"></i></span></a>
											<h6>Features</h6>
											<ul class="style-none package-feature">
												<li>Unlimited Website</li>
												<li>Unlimited Traffic</li>
												<li>Unlimited Free Domain</li>
												<li>Fast SSD Storage</li>
												<li>Unlimited Email & Domain</li>
												<li>WP Installer</li>
												<li>Free SSL Certificate</li>
												<li>Free Migration</li>
												<li>WP Website Builder</li>
											</ul>
										</div>
										<!-- /.pr-column -->
									</div>
								</div>
							</div>
						</div>
						<!-- /.tab-content -->
					</div>
                </div>
			</div>
		</div>
		<!-- /.pricing-section-six -->



		<!--
		=====================================================
			Block Feature Twenty Five
		=====================================================
		-->
		<div class="block-feature-twentyFive mt-180 lg-mt-80">
			<div class="container lg">
				<div class="border-top border-bottom border-white border-2 pt-90 lg-pt-40 pb-90 lg-pb-40">
					

					<div class="row gx-xxl-5">
						<div class="col-lg-4">
							<div class="card-style-twelve text-center mt-20">
								<img src="assets/images/icon/icon_50.svg" alt="" class="m-auto">
								<h4>24/7 Support</h4>
								<p class="pe-xxl-4 ps-xxl-4">Our team will seamlessly transfer your websites to the new server, free of charge.</p>
							</div>
							<!-- /.card-style-twelve -->
						</div>
						<div class="col-lg-4">
							<div class="card-style-twelve text-center mt-20">
								<img src="assets/images/icon/icon_51.svg" alt="" class="m-auto">
								<h4>Free domain & easy set up</h4>
								<p class="pe-xxl-4 ps-xxl-4">Our team will seamlessly transfer your websites to the new server, free of charge.</p>
							</div>
							<!-- /.card-style-twelve -->
						</div>
						<div class="col-lg-4">
							<div class="card-style-twelve text-center mt-20">
								<img src="assets/images/icon/icon_52.svg" alt="" class="m-auto">
								<h4>Free SSL Security</h4>
								<p class="pe-xxl-4 ps-xxl-4">Our team will seamlessly transfer your websites to the new server, free of charge.</p>
							</div>
							<!-- /.card-style-twelve -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.block-feature-twentyFive -->



        <!--
		=====================================================
			Block Feature Twenty Six
		=====================================================
		-->
		<div class="block-feature-twentySix mt-180 xl-mt-150 lg-mt-80">
			<div class="container lg">
				<div class="row">
					<div class="col-xl-7 col-lg-7 m-auto">
						<div class="title-eleven text-center mb-30 lg-mb-10">
							<h2>Why it's right for you to stay with Piku hosting</h2>
						</div>
					</div>
				</div>
				<div class="row gx-xxl-5">
                   <div class="col-lg-4 d-flex">
						<div class="block-one d-flex flex-column justify-content-center w-100 mt-50 lg-mt-30">
							<div>
								<img src="assets/images/icon/icon_53.svg" alt="">
								<h3>Trustworthy hosting ensuring 99.9% uptime.</h3>
							</div>
						</div>
						<!-- /.block-one -->
				   </div>
				   <div class="col-lg-8 d-flex">
						<div class="block-two w-100 mt-50 lg-mt-30">
							<div class="row">
								<div class="col-xl-8 col-lg-7">
									<h3 class="md-mt-20">Install over 150 free apps with one click.</h3>
								</div>
							</div>
							<img src="assets/images/assets/card_23.png" alt="">
						</div>
				   </div>
				   <div class="col-lg-8 d-flex">
						<div class="block-three w-100 mt-50 lg-mt-30">
							<div class="row">
								<div class="col-md-8 ms-auto text-end">
									<div class="icon d-flex align-items-center justify-content-center rounded-circle"><img src="assets/images/icon/icon_54.svg" alt=""></div>
									<blockquote>“Efficient, knowledgeable, & smooth experience. Highly recommended”</blockquote>
									<div class="name color-dark fs-20"><span class="fw-500">Musa Jamy.</span> CEO babun</div>
								</div>
							</div>
							<img src="assets/images/assets/avatar_4.png" alt="" class="shapes shape_01">
							<img src="assets/images/shape/shape_80.svg" alt="" class="shapes shape_02">

						</div>
				   </div>
				   <div class="col-lg-4 d-flex">
						<div class="block-four d-flex flex-column justify-content-center w-100 mt-50 lg-mt-30">
							<div>
								<h3>Peak performance with rapid load times.</h3>
								<img src="assets/images/icon/icon_55.svg" alt="">
							</div>
						</div>
						<!-- /.block-one -->
				   </div>
                </div>
			</div>
		</div>
		<!-- /.block-feature-twentySix -->


		<!--
		=====================================================
			Feedback Section Nine
		=====================================================
		-->
		<div class="feedback-section-nine position-relative z-1 pt-120 xl-pt-100 lg-pt-70 pb-130 lg-pb-80 mt-180 lg-mt-80">
			<div class="container">
				<div class="text-center mb-70 lg-mb-30">
					<h2><span class="counter">12,0000</span>+</h2>
					<p class="fs-28 text-white opacity-75">Customer love our product with more 20+ years reparation</p>
				</div>
			</div>
			<div class="wrapper">
				<div class="feedback-slider-six">
					<div class="item">
						<div class="feedback-block">
							<img src="assets/images/logo/p_logo_65.png" alt="" class="logo">
							<blockquote>"Best decision ever, smooth hosting experience!"</blockquote>
							<div class="d-flex align-items-center justify-content-between">
								<div class="name text-white"><span class="fw-500">Adul Kashem,</span> Engineer</div>
								<img src="assets/images/icon/icon_56.svg" alt="" class="icon">
							</div>
						</div>
						<!-- /.feedback-block -->
					</div>
					<div class="item">
						<div class="feedback-block">
							<img src="assets/images/logo/p_logo_66.png" alt="" class="logo">
							<blockquote>"Best decision ever, smooth hosting experience!"</blockquote>
							<div class="d-flex align-items-center justify-content-between">
								<div class="name text-white"><span class="fw-500">Rashed Ka,</span> Engineer</div>
								<img src="assets/images/icon/icon_56.svg" alt="" class="icon">
							</div>
						</div>
						<!-- /.feedback-block -->
					</div>
					<div class="item">
						<div class="feedback-block">
							<img src="assets/images/logo/p_logo_65.png" alt="" class="logo">
							<blockquote>"Best decision ever, smooth hosting experience!"</blockquote>
							<div class="d-flex align-items-center justify-content-between">
								<div class="name text-white"><span class="fw-500">Hasan Abdul,</span> Engineer</div>
								<img src="assets/images/icon/icon_56.svg" alt="" class="icon">
							</div>
						</div>
						<!-- /.feedback-block -->
					</div>
					<div class="item">
						<div class="feedback-block">
							<img src="assets/images/logo/p_logo_66.png" alt="" class="logo">
							<blockquote>"Best decision ever, smooth hosting experience!"</blockquote>
							<div class="d-flex align-items-center justify-content-between">
								<div class="name text-white"><span class="fw-500">Zubayer Bin,</span> Engineer</div>
								<img src="assets/images/icon/icon_56.svg" alt="" class="icon">
							</div>
						</div>
						<!-- /.feedback-block -->
					</div>
				</div>
				<!-- /.feedback-slider-six -->

				<ul class="slider-arrows slick-arrow-one d-flex justify-content-center style-none mt-50">
					<li class="prev_b slick-arrow"><i class="fa-solid fa-arrow-left-long"></i></li>
					<li class="next_b slick-arrow"><i class="fa-solid fa-arrow-right-long"></i></li>
				</ul>
			</div>
			<img src="assets/images/shape/shape_81.svg" alt="" class="shapes shape_01">
		</div>
		<!-- /.feedback-section-nine -->



		<!--
		=====================================================
			Fancy Banner Ten
		=====================================================
		-->
		<div class="fancy-banner-ten mt-250 xl-mt-200 md-mt-130">
			<div class="container lg">
				<div class="wrapper">
					<img src="assets/images/assets/ils_25.svg" alt="" class="illustration">

					<div class="row">
						<div class="col-xl-7 col-lg-6">
							<div class="d-flex flex-wrap align-items-center">
								<a class="video-btn tran3s rounded-circle d-flex align-items-center justify-content-center" data-fancybox="" href="https://www.youtube.com/embed/aXFSJTjVjw0"><i class="fa-sharp fa-solid fa-play"></i></a>
								<h2>Win online business with piku.</h2>
							</div>
						</div>
						<div class="col-xl-5 col-lg-6">
							<p class="fs-24 md-mt-30">Elevate your online business success with our expert guidance & reliable hosting services. Let's win together!"</p>
						</div>
					</div>
				</div>
			</div>
		</div>



		<!--
		=====================================================
			FAQ Section Three
		=====================================================
		-->
		<div class="faq-section-three position-relative mt-180 lg-mt-80 mb-180 lg-mb-80">
			<div class="container lg">
				<div class="row">
                    <div class="col-lg-5">
						<div class="title-eleven">
							<div class="text-uppercase mb-25">FAQ</div>
							<h2>Frequently Asked Questions</h2>
						</div>
                    </div>
					<div class="col-lg-7">
						<div class="accordion accordion-style-two style-two p0 bg-transparent shadow-none ms-xxl-4 md-mt-40" id="accordionFour">
							<div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOneA" aria-expanded="false" aria-controls="collapseOneA">
										What is web hosting?
									</button>
								  </h2>
								  <div id="collapseOneA" class="accordion-collapse collapse" data-bs-parent="#accordionFour">
									<div class="accordion-body">
										<p class="fs-22">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore eligendi dolores animi quas blanditiis iusto mollitia quasi, ipsa numquam quaerat.</p>
									</div>
								  </div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoA" aria-expanded="false" aria-controls="collapseTwoA">
										How do you weigh different criteria in your process?
									</button>
								</h2>
								<div id="collapseTwoA" class="accordion-collapse collapse" data-bs-parent="#accordionFour">
									<div class="accordion-body">
										<p class="fs-22">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore eligendi dolores animi quas blanditiis iusto mollitia quasi, ipsa numquam quaerat.</p>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThreeA" aria-expanded="true" aria-controls="collapseThreeA">
										What can I use to build my website?
									</button>
								</h2>
								<div id="collapseThreeA" class="accordion-collapse collapse" data-bs-parent="#accordionFour">
									<div class="accordion-body">
										<p class="fs-22">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore eligendi dolores animi quas blanditiis iusto mollitia quasi, ipsa numquam quaerat.</p>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourA" aria-expanded="true" aria-controls="collapseFourA">
										I have running plan, How can I change or switch it?
									</button>
								</h2>
								<div id="collapseFourA" class="accordion-collapse collapse" data-bs-parent="#accordionFour">
									<div class="accordion-body">
										<p class="fs-22">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore eligendi dolores animi quas blanditiis iusto mollitia quasi, ipsa numquam quaerat.</p>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFiveA" aria-expanded="true" aria-controls="collapseFiveA">
										How can I accept credit cards online?
									</button>
								</h2>
								<div id="collapseFiveA" class="accordion-collapse collapse" data-bs-parent="#accordionFour">
									<div class="accordion-body">
										<p class="fs-22">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore eligendi dolores animi quas blanditiis iusto mollitia quasi, ipsa numquam quaerat.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
                </div>

			</div>
		</div>
		<!-- /.faq-section-three -->





		<!--
		=====================================================
			Footer Three
		=====================================================
		-->
		<div class="footer-three dark-version">
			<div class="container lg">
				<div class="address-wrapper">
					<h2>Need Some Help?</h2>

					<div class="row gx-xxl-5">
						<div class="col-lg-4 d-flex">
							<div class="block d-flex w-100 align-items-center mt-25">
								<div class="icon d-flex align-items-center justify-content-center rounded-circle"><img src="assets/images/icon/icon_57.svg" alt=""></div>
								<div class="text">
									<div class="title">We’r always happy to help</div>
									<span class="fs-20">ask@homy.com</span>
								</div>
							</div>
							<!-- /.block -->
						</div>
						<div class="col-lg-4 d-flex">
							<div class="block d-flex w-100 align-items-center mt-25">
								<div class="d-flex align-items-center">
									<div class="icon d-flex align-items-center justify-content-center rounded-circle"><img src="assets/images/icon/icon_58.svg" alt=""></div>
									<div class="text">
										<div class="title">Our Hotline Number</div>
										<span class="fs-20">+757 699 4478,  +991 377 9731</span>
									</div>
								</div>
							</div>
							<!-- /.block -->
						</div>
						<div class="col-lg-4 d-flex">
							<div class="block d-flex w-100 align-items-center mt-25">
								<div class="icon d-flex align-items-center justify-content-center rounded-circle"><img src="assets/images/icon/icon_59.svg" alt=""></div>
								<div class="text">
									<div class="title">Live chat</div>
									<span class="fs-20">www.lvesupport.com</span>
								</div>
							</div>
							<!-- /.block -->
						</div>
					</div>
				</div>
				<!-- /.address-wrapper -->
				<div class="position-relative">
					<div class="row justify-content-between">
						<div class="col-lg-2 order-lg-0 md-mb-40">
							<div class="logo mt-15">
								<a href="index.php">
									<img src="assets/images/logo/logo_10.svg" alt="">
								</a>
							</div> 
							<!-- logo -->
							<div class="fs-6 text-white mt-40 mb-15">Connect with us</div>
							<ul class="style-none d-flex align-items-center social-icon">
							<li><a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a></li>
							<li><a href="https://x.com/"><i class="fa-brands fa-twitter"></i></a></li>
								<li><a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a></li>
							</ul>
						</div>
						<div class="col-lg-2 col-6 order-lg-1">
							<div class="footer-nav">
								<ul class="footer-nav-link style-none">
									<li><a href="about-us-v1.php">About </a></li>
									<li><a href="project-v4.php">Work Gallery</a></li>
									<li><a href="pricing-v2.php">Pricing</a></li>
									<li><a href="blog-v2.php">Blog</a></li>
									<li><a href="contact-v1.php">Contact</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-2 col-6 order-lg-3">
							<div class="footer-nav">
								<ul class="footer-nav-link style-none">
									<li><a href="faq-v1.php">​​Take the tour</a></li>
									<li><a href="faq-v1.php">Live chat</a></li>
									<li><a href="contact-v1.php">Self-service</a></li>
									<li><a href="faq-v1.php">Social</a></li>
									<li><a href="faq-v1.php">Mobile</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-2 col-6 order-lg-2">
							<div class="footer-nav mb-20">
								<ul class="footer-nav-link style-none">
									<li><a href="faq-v1.php">Faq’s</a></li>
									<li><a href="faq-v2.php">Privacy Policy</a></li>
									<li><a href="faq-v1.php">Terms</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-2 col-6 order-lg-4">
							<div class="footer-nav mb-20">
								<ul class="footer-nav-link style-none">
									<li><a href="faq-v1.php">Help Docs</a></li>
									<li><a href="faq-v2.php">Chat</a></li>
									<li><a href="faq-v1.php">Developer</a></li>
								</ul>
							</div>
						</div>
					</div>
					<p class="copyright-text text-center m0"><span class="text-white fw-500">@2024.</span> All Right Reserved</p>
				</div>
			</div>
			<img src="assets/images/shape/shape_82.svg" alt="" class="shapes shape_01">
		</div> <!-- /.footer-three -->




		<button class="scroll-top">
			<i class="bi bi-arrow-up-short"></i>
		</button>

		<?php include 'partials/vendor-scripts.php'; ?>
</body>

</html>