<?php include 'partials/main.php'; ?>

<?php include 'partials/title-meta.php'; ?>

<?php include 'partials/head-css.php'; ?>


<body>
	<div class="main-page-wrapper">
		<!-- ===================================================
			Loading Transition
		==================================================== -->
		<?php include 'partials/preloader.php'; ?>


		
		<!-- 
		=============================================
			Theme Main Menu
		============================================== 
		-->
		<header class="theme-main-menu menu-style-five dark-vr sticky-menu menu-overlay">
			<div class="inner-content gap-three">
				<div class="top-header position-relative">
					<div class="d-flex align-items-center justify-content-between">
						<div class="logo order-lg-0 me-lg-5">
							<a href="index" class="d-flex align-items-center">
								<img src="assets/images/logo/logo_05.svg" alt="">
							</a>
						</div>
						<!-- logo -->
						<div class="right-widget ms-auto ms-lg-0 me-3 me-lg-0 order-lg-3">
							<ul class="d-flex align-items-center style-none">
								<li>
									<a href="login" class="login-btn-three fw-500 tran3s">Login</a>
                                </li>
								<li class="d-none d-md-inline-block ms-3">
                                    <a href="signup" class="btn-seven style-two">Try it Now</a>
                                </li>
							</ul>
						</div>
						<nav class="navbar navbar-expand-lg p0 me-lg-auto ms-lg-5 order-lg-2">
							<button class="navbar-toggler d-block d-lg-none" type="button" data-bs-toggle="collapse"
								data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
								aria-label="Toggle navigation">
								<span></span>
							</button>
							<div class="collapse navbar-collapse" id="navbarNav">
								<ul class="navbar-nav align-items-lg-center">
									<li class="d-block d-lg-none"><div class="logo"><a href="index" class="d-block"><img src="assets/images/logo/logo_05.svg" alt=""></a></div></li>
									<li class="nav-item dropdown mega-dropdown">
										<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
											data-bs-auto-close="outside" aria-expanded="false">Home
										</a>
										<ul class="dropdown-menu">
											<li class="pe-3 ps-3">
												<div class="row gx-3">
													<div class="col-lg-3">
														<a href="index" class="home-item w-100">
															<div class="img-item"><img src="assets/images/menu/home01.jpg" alt="" class="w-100"></div>
															<span>Payment Service</span>
														</a>
													</div>
													<div class="col-lg-3">
														<a href="index-2" class="home-item w-100">
															<div class="img-item"><img src="assets/images/menu/home02.jpg" alt="" class="w-100"></div>
															<span>AI Writer</span>
														</a>
													</div>
													<div class="col-lg-3">
														<a href="index-3" class="home-item w-100">
															<div class="img-item"><img src="assets/images/menu/home03.jpg" alt="" class="w-100"></div>
															<span>Website Builder</span>
														</a>
													</div>
													<div class="col-lg-3">
														<a href="index-4" class="home-item w-100">
															<div class="img-item"><img src="assets/images/menu/home04.jpg" alt="" class="w-100"></div>
															<span>CRM</span>
														</a>
													</div>
													<div class="col-lg-3">
														<a href="index-5" class="home-item w-100">
															<div class="img-item"><img src="assets/images/menu/home05.jpg" alt="" class="w-100"></div>
															<span>Project Management </span>
														</a>
													</div>
													<div class="col-lg-3">
														<a href="index-6" class="home-item w-100">
															<div class="img-item"><img src="assets/images/menu/home06.jpg" alt="" class="w-100"></div>
															<span>Mobile App Landing</span>
														</a>
													</div>
													<div class="col-lg-3">
														<a href="index-7" class="home-item w-100">
															<div class="img-item"><img src="assets/images/menu/home07.jpg" alt="" class="w-100"></div>
															<span>Digital Agency</span>
														</a>
													</div>
													<div class="col-lg-3">
														<a href="index-8" class="home-item w-100">
															<div class="img-item"><img src="assets/images/menu/home08.jpg" alt="" class="w-100"></div>
															<span>Help Desk</span>
														</a>
													</div>
													<div class="col-lg-3">
														<a href="index-9" class="home-item w-100">
															<div class="img-item"><img src="assets/images/menu/home09.jpg" alt="" class="w-100"></div>
															<span>Web Hosting </span>
														</a>
													</div>
													<div class="col-lg-3">
														<a href="index-10" class="home-item w-100">
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
															<li><a href="about-us-v1" class="dropdown-item"><span>About Us-1</span></a></li>
															<li><a href="about-us-v2" class="dropdown-item"><span>About Us-2</span></a></li>
															<li><a href="about-us-v3" class="dropdown-item"><span>About Us-3</span></a></li>
															<li><a href="team-v1" class="dropdown-item"><span>Team-1</span></a></li>
															<li><a href="team-v2" class="dropdown-item"><span>Team-2</span></a></li>
															
														</ul>
													</div> <!--/.menu-column -->
												</div>
												<div class="col-lg-4">
													<div class="menu-column">
														<h6 class="mega-menu-title">Features</h6>
														<ul class="style-none mega-dropdown-list">
															<li><a href="service-v1" class="dropdown-item"><span>Service-1</span></a></li>
															<li><a href="service-v2" class="dropdown-item"><span>Service-2</span></a></li>
															<li><a href="service-v3" class="dropdown-item"><span>Service-3</span></a></li>
															<li><a href="service-details" class="dropdown-item"><span>Service Details</span></a></li>
															<li><a href="pricing-v1" class="dropdown-item"><span>Pricing-1</span></a></li>
															<li><a href="pricing-v2" class="dropdown-item"><span>Pricing-2</span></a></li>
															
														</ul>
													</div> <!--/.menu-column -->
												</div>
												<div class="col-lg-4">
													<div class="menu-column">
														<h6 class="mega-menu-title">Others</h6>
														<ul class="style-none mega-dropdown-list">
															<li><a href="faq-v1" class="dropdown-item"><span>FAQ-1</span></a></li>
															<li><a href="faq-v2" class="dropdown-item"><span>FAQ-2</span></a></li>
															<li><a href="login" class="dropdown-item"><span>Login</span></a></li>
															<li><a href="signup" class="dropdown-item"><span>Sign Up</span></a></li>
															<li><a href="404" class="dropdown-item"><span>404 Error</span></a></li>
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
											<li><a href="project-v1" class="dropdown-item"><span>Project-1</span></a></li>
											<li><a href="project-v2" class="dropdown-item"><span>Project-2</span></a></li>
											<li><a href="project-v3" class="dropdown-item"><span>Project-3</span></a></li>
											<li><a href="project-v4" class="dropdown-item"><span>Project-4</span></a></li>
											<li><a href="project-v5" class="dropdown-item"><span>Project-5</span></a></li>
											<li><a href="project-v6" class="dropdown-item"><span>Project-6</span></a></li>
											<li><a href="project-details" class="dropdown-item"><span>Project Details</span></a></li>
										</ul>
									</li>
									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
											data-bs-auto-close="outside" aria-expanded="false">Blog
										</a>
										<ul class="dropdown-menu">
											<li><a href="blog-v1" class="dropdown-item"><span>Blog Full Width</span></a></li>
											<li><a href="blog-v2" class="dropdown-item"><span>Blog List</span></a></li>
											<li><a href="blog-v3" class="dropdown-item"><span>Blog 2 column</span></a></li>
											<li><a href="blog-details" class="dropdown-item"><span>Blog Details</span></a></li>
										</ul>
									</li>
									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
											data-bs-auto-close="outside" aria-expanded="false">Contact
										</a>
										<ul class="dropdown-menu">
											<li><a href="contact-v1" class="dropdown-item"><span>Contact Us-1</span></a></li>
											<li><a href="contact-v2" class="dropdown-item"><span>Contact Us-2</span></a></li>
										</ul>
									</li>
									<li class="d-md-none ps-3 pe-3 mt-20">
										<a href="signup" class="btn-seven style-two w-100">Try it Now</a>
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
		<div class="hero-banner-four p-30 z-1 position-relative">
			<div class="bg-eight wrapper position-relative">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-10">
                            <h1 class="hero-heading color-dark font-Playfair wow fadeInUp">Develop lasting client relations  </h1>
                            <p class="fs-28 text-dark pt-15 pb-35 md-pb-20 pe-xxl-5 me-xxl-5 wow fadeInUp" data-wow-delay="0.1s">Piku delivered blazing performance, fast striking word soludtion</p>
                            <form action="#" class="position-relative wow fadeInUp" data-wow-delay="0.2s">
                                <input type="email" placeholder="Your Email address...">
                                <button class="tran3s">Get Started</button>
                            </form>
                        </div>
						<div class="col-lg-6">
							<img src="assets/images/assets/ils_15.svg" alt="" class="illustration wow fadeInRight">
						</div>
                    </div>

					<div class="client-logo-wrapper mt-100 lg-mt-50">
						<div class="container">
							<p class="fs-22 fw-500 text-dark mb-50 lg-mb-20">Trusted by over 5,000 businesses</p>
							<div class="partner-logo-one">
								<div class="item"><img src="assets/images/logo/p_logo_01_1.png" alt=""></div>
								<div class="item"><img src="assets/images/logo/p_logo_02_1.png" alt=""></div>
								<div class="item"><img src="assets/images/logo/p_logo_03_1.png" alt=""></div>
								<div class="item"><img src="assets/images/logo/p_logo_04_1.png" alt=""></div>
								<div class="item"><img src="assets/images/logo/p_logo_05_1.png" alt=""></div>
								<div class="item"><img src="assets/images/logo/p_logo_06_1.png" alt=""></div>
								<div class="item"><img src="assets/images/logo/p_logo_03_1.png" alt=""></div>
								<div class="item"><img src="assets/images/logo/p_logo_04_1.png" alt=""></div>
							</div>
						</div>
					</div>
                </div>
            </div>
		</div>
		<!-- /.hero-banner-four -->


		


		<!--
		=====================================================
			BLock Feature Twelve
		=====================================================
		-->
		<div class="block-feature-twelve pt-130 lg-pt-80">
			<div class="container">
                <div class="text-center mb-85 lg-mb-40">
					<div class="title-six">
						<h2>Top Rated Software Farm</h2>
					</div>
					<p class="fs-24 mb-25">“I couldn’t have asked for a better experience with piku!”</p>
					<ul class="rating d-flex justify-content-center align-items-center flex-wrap style-none">
						<li><i class="fa-sharp fa-solid fa-star-sharp"></i></li>
						<li><i class="fa-sharp fa-solid fa-star-sharp"></i></li>
						<li><i class="fa-sharp fa-solid fa-star-sharp"></i></li>
						<li><i class="fa-sharp fa-solid fa-star-sharp"></i></li>
						<li><i class="fa-sharp fa-solid fa-star-sharp"></i></li>
						<li><span><strong>5.00</strong> (27k Reviews)</span></li>
					</ul>
				</div>

				<div class="row">
					<div class="col-xxl-10 m-auto">
						<div class="row justify-content-between">
							<div class="col-xl-4 col-lg-5">
								<div class="card-style-six text-center border-line">
									<div class="icon d-flex align-items-center justify-content-center">
										<img src="assets/images/assets/ils_16.svg" alt="">
									</div>
									<h4>All in One</h4>
									<p class="fs-24">You design, we generate the code for everything from fully custom layouts to</p>
								</div>
								<!-- /.card-style-six -->
							</div>
							<div class="col-xl-4 col-lg-5">
								<div class="card-style-six text-center md-mt-30">
									<div class="icon d-flex align-items-center justify-content-center">
										<img src="assets/images/assets/ils_17.svg" alt="">
									</div>
									<h4>Customer Portal</h4>
									<p class="fs-24">You design, we generate the code for everything from fully custom layouts to</p>
								</div>
								<!-- /.card-style-six -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.block-feature-twelve -->



        <!--
		=====================================================
			BLock Feature Thirteen
		=====================================================
		-->
		<div class="block-feature-thirteen p-30 mt-150 xl-mt-120 lg-mt-60">
			<div class="bg-nine pt-130 lg-pt-80 pb-100 lg-pb-80">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 order-lg-last">
							<div class="ms-lg-5 ps-xxl-3">
								<div class="title-six">
									<h2 class="color-dark">We’r the Boss in This Market</h2>
								</div>
	
								<div class="accordion accordion-style-three mb-40" id="accordionThree">
									<div class="accordion-item">
										<h2 class="accordion-header">
											<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
												Easy to create Account
											</button>
										  </h2>
										  <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionThree">
											<div class="accordion-body">
												<p class="fs-22 color-dark">It only takes 5 minutes. Set-up is smooth & simple, with fully customisable filter to the right one.</p>
											</div>
										  </div>
									</div>
									<div class="accordion-item">
										<h2 class="accordion-header">
											<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
												Unbeatable Pricing Plan
											</button>
										</h2>
										<div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionThree">
											<div class="accordion-body">
												<p class="fs-22 color-dark">It only takes 5 minutes. Set-up is smooth & simple, with fully customisable filter to the right one.</p>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<h2 class="accordion-header">
											<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
												Quick Support
											</button>
										</h2>
										<div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionThree">
											<div class="accordion-body">
												<p class="fs-22 color-dark">It only takes 5 minutes. Set-up is smooth & simple, with fully customisable filter to the right one.</p>
											</div>
										</div>
									</div>
								</div>
								<a href="faq-v1" class="btn-seven style-two">Explore More <i class="fa-sharp fa-regular fa-arrow-right-long"></i></a>
							</div>
						</div>
						<div class="col-lg-6 col-md-10 m-auto order-lg-first">
							<div class="media position-relative mt-60">
								<div class="counter-box text-center d-inline-block box-one">
									<h2 class="color-dark">31,000+</h2>
									<p class="fs-24 text-dark">Reviews</p>
								</div>
								<div class="counter-box text-center d-inline-block box-two">
									<h2 class="color-dark">1.2m</h2>
									<p class="fs-24 text-dark">Clients</p>
								</div>
								<img src="assets/images/assets/ils_18.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.block-feature-thirteen -->




		<!--
		=====================================================
			BLock Feature Fourteen
		=====================================================
		-->
		<div class="block-feature-fourteen position-relative z-1 mt-150 lg-mt-70">
			<div class="container">
                <div class="row">
					<div class="col-xxl-9 col-xl-8 col-lg-10 m-auto">
						<div class="text-center mb-80 lg-mb-40">
							<div class="title-six">
								<h2>Coordinate Tasks Toward One Solution</h2>
							</div>
							<p class="fs-24">Piku for every business you need. we’r provide best offer with best services</p>
						</div>
					</div>
				</div>
				<div class="feature-tab">
                    <nav class="filter-nav">
                        <div class="nav nav-tabs align-items-center justify-content-center justify-content-xl-between border-0" role="tablist">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#finance" type="button" role="tab" aria-controls="finance" aria-selected="true">
                                <img src="assets/images/icon/icon_23.svg" alt="" class="shapes icon icon_D">
                                <img src="assets/images/icon/icon_23_w.svg" alt="" class="shapes icon">
                                Finance & Payment
                            </button>
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#task" type="button" role="tab" aria-controls="task" aria-selected="false">
                                <img src="assets/images/icon/icon_24.svg" alt="" class="shapes icon icon_D">
                                <img src="assets/images/icon/icon_24_w.svg" alt="" class="shapes icon">
                                Collaboration & Task
                            </button>
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#market" type="button" role="tab" aria-controls="market" aria-selected="false">
                                <img src="assets/images/icon/icon_25.svg" alt="" class="shapes icon icon_D">
                                <img src="assets/images/icon/icon_25_w.svg" alt="" class="shapes icon">
                                Marketing Automation
                            </button>
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#chat" type="button" role="tab" aria-controls="chat" aria-selected="false">
                                <img src="assets/images/icon/icon_23.svg" alt="" class="shapes icon icon_D">
                                <img src="assets/images/icon/icon_23_w.svg" alt="" class="shapes icon">
                                Chat & Support
                            </button>
                        </div>
                    </nav>
                    <div class="mt-80 lg-mt-40">
                        <div class="tab-content">
                            <div class="tab-pane show active" id="finance" role="tabpanel" tabindex="0">
                                <div class="row align-items-center">
									<div class="col-lg-5">
										<div class="title-seven mb-30">
											<h2>Handle Tasks with Expertise</h2>
										</div>
										<p class="fs-22 mb-50">commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat pariatu</p>
										<a href="#" class="btn-twelve"><span>Explore More</span> <i class="fa-sharp fa-regular fa-arrow-right-long"></i></a>
									</div>
									<div class="col-lg-7">
										<img src="assets/images/assets/card_07.png" alt="" class="ms-auto md-mt-40">
									</div>
								</div>
                            </div>
                            <div class="tab-pane" id="task" role="tabpanel" tabindex="0">
                                <div class="row align-items-center">
									<div class="col-lg-5">
										<div class="title-seven mb-30">
											<h2>Handle Tasks with Expertise</h2>
										</div>
										<p class="fs-22 mb-50">commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat pariatu</p>
										<a href="#" class="btn-twelve"><span>Explore More</span> <i class="fa-sharp fa-regular fa-arrow-right-long"></i></a>
									</div>
									<div class="col-lg-7">
										<img src="assets/images/assets/card_07.png" alt="" class="ms-auto md-mt-40">
									</div>
								</div>
                            </div>
                            <div class="tab-pane" id="market" role="tabpanel" tabindex="0">
                                <div class="row align-items-center">
									<div class="col-lg-5">
										<div class="title-seven mb-30">
											<h2>Handle Tasks with Expertise</h2>
										</div>
										<p class="fs-22 mb-50">commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat pariatu</p>
										<a href="#" class="btn-twelve"><span>Explore More</span> <i class="fa-sharp fa-regular fa-arrow-right-long"></i></a>
									</div>
									<div class="col-lg-7">
										<img src="assets/images/assets/card_07.png" alt="" class="ms-auto md-mt-40">
									</div>
								</div>
                            </div>
                            <div class="tab-pane" id="chat" role="tabpanel" tabindex="0">
                                <div class="row align-items-center">
									<div class="col-lg-5">
										<div class="title-seven mb-30">
											<h2>Handle Tasks with Expertise</h2>
										</div>
										<p class="fs-22 mb-50">commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat pariatu</p>
										<a href="#" class="btn-twelve"><span>Explore More</span> <i class="fa-sharp fa-regular fa-arrow-right-long"></i></a>
									</div>
									<div class="col-lg-7">
										<img src="assets/images/assets/card_07.png" alt="" class="ms-auto md-mt-40">
									</div>
								</div>
                            </div>
                        </div>
                        <!-- /.tab-content -->
                        
                    </div>
                </div>
                <!-- /.feature-tab -->
			</div>
		</div>
		<!-- /.block-feature-fourteen -->



		<!--
		=====================================================
			Feedback Section Four
		=====================================================
		-->
		<div class="feedback-section-four p-30 mt-150 xl-mt-130 lg-mt-80">
			<div class="bg-ten pt-130 lg-pt-80 pb-130 lg-pb-80">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 order-lg-last">
							<div class="ms-xl-5 ms-lg-4 ps-xxl-3">
								<div class="title mb-60 lg-mb-30">
									<h2 class="color-dark">Amazing!</h2>
									<p class="fs-24 text-uppercase text-dark">BEST CRM SOFTWARE</p>
								</div>
								<div class="feedback-slider-three">
									<div class="item">
										<div class="feedback-block-three">
											<blockquote>Game-changer! Boosted efficiency, simplified tasks, and saved time. Highly recommended!</blockquote>

											<div class="client-info fs-22 text-dark"><span>Stefan Jong,</span> Miami</div>
										</div>
										<!-- /.feedback-block-three -->
									</div>
									<div class="item">
										<div class="feedback-block-three">
											<blockquote>Game-changer! Boosted efficiency, simplified tasks, and saved time. Highly recommended!</blockquote>

											<div class="client-info fs-22 text-dark"><span>Stefan Jong,</span> Miami</div>
										</div>
										<!-- /.feedback-block-three -->
									</div>
									<div class="item">
										<div class="feedback-block-three">
											<blockquote>Game-changer! Boosted efficiency, simplified tasks, and saved time. Highly recommended!</blockquote>

											<div class="client-info fs-22 text-dark"><span>Stefan Jong,</span> Miami</div>
										</div>
										<!-- /.feedback-block-three -->
									</div>
								</div>
								<ul class="rating d-flex align-items-center flex-wrap style-none mt-70 md-mt-40">
									<li><i class="fa-sharp fa-solid fa-star-sharp"></i></li>
									<li><i class="fa-sharp fa-solid fa-star-sharp"></i></li>
									<li><i class="fa-sharp fa-solid fa-star-sharp"></i></li>
									<li><i class="fa-sharp fa-solid fa-star-sharp"></i></li>
									<li><i class="fa-sharp fa-solid fa-star-sharp"></i></li>
									<li><span><strong>5.00</strong> (27k Reviews)</span></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-6 order-lg-first">
							<div class="media position-relative md-mt-40">
								<img src="assets/images/assets/ils_19.png" alt="">
								<div class="card-wrapper d-flex align-items-center">
									<img src="assets/images/media/img_14.png" alt="" class="h-100">
									<div class="ps-4">
										<h2 class="color-dark">32,0000+</h2>
										<p class="fs-24 text-dark m0">Total Clients</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.feedback-section-four -->




		<!--
		=====================================================
			Pricing Section Three
		=====================================================
		-->
		<div class="pricing-section-three position-relative z-1 mt-150 xl-mt-120 lg-mt-80">
			<div class="container">
				<div class="row align-items-end">
					<div class="col-lg-7">
						<div class="title-six text-center text-lg-start">
							<h2>Transparent pricing, Select plan</h2>
						</div>
					</div>
					<div class="col-lg-5">
						<div class="d-flex justify-content-center justify-content-lg-end">
							<nav class="pricing-nav-two d-flex justify-content-center mb-35 md-mb-10 md-mt-30">
								<div class="nav nav-tabs" role="tablist">
									<button class="nav-link active" id="monthly-tab" data-bs-toggle="tab" data-bs-target="#monthly" type="button" role="tab" aria-controls="monthly" aria-selected="true">Monthly</button>
									<button class="nav-link" id="yearly-tab" data-bs-toggle="tab" data-bs-target="#yearly" type="button" role="tab" aria-controls="yearly" aria-selected="false">Yearly</button>
								</div>
							</nav>
						</div>
					</div>
				</div>
				
				<div class="tab-content mt-30 md-mt-10">
					<div class="tab-pane show active" id="monthly" role="tabpanel" aria-labelledby="buy-tab" tabindex="0">
						<div class="row gx-xxl-5">
							<div class="col-lg-4">
								<div class="pr-column">
									<div class="pr-header text-center">
										<div class="plan text-uppercase">Standard</div>
										<strong class="price fw-500 d-block">0</strong>
									</div>
									<!-- /.pr-header -->
									<ul class="style-none text-center">
										<li>1 Domain</li>
										<li>1 Year Premium Support</li>
										<li>3gb Hosting</li>
									</ul>
									<a href="#" class="btn-eight mt-50 mb-50">Get Started</a>
									<div class="illustration d-flex align-items-center justify-content-center">
										<img src="assets/images/assets/ils_20.png" alt="">
									</div>
								</div>
								<!-- /.pr-column -->
							</div>
							<div class="col-lg-4">
								<div class="pr-column">
									<div class="pr-header text-center">
										<div class="plan text-uppercase">Gold</div>
										<strong class="price fw-500 d-block"><sup>$</sup>7</strong>
									</div>
									<!-- /.pr-header -->
									<ul class="style-none text-center">
										<li>3 Domain</li>
										<li>1 Year Premium Support</li>
										<li>10gb Hosting</li>
									</ul>
									<a href="#" class="btn-eight mt-50 mb-50">Get Started</a>
									<div class="illustration d-flex align-items-center justify-content-center">
										<img src="assets/images/assets/ils_21.png" alt="">
									</div>
								</div>
								<!-- /.pr-column -->
							</div>
							<div class="col-lg-4">
								<div class="pr-column">
									<div class="pr-header text-center">
										<div class="plan text-uppercase">Diamond</div>
										<strong class="price fw-500 d-block"><sup>$</sup>9</strong>
									</div>
									<!-- /.pr-header -->
									<ul class="style-none text-center">
										<li>Unlimited Domain</li>
										<li>1 Year Premium Support</li>
										<li>Unlimited Hosting</li>
									</ul>
									<a href="#" class="btn-eight mt-50 mb-50">Get Started</a>
									<div class="illustration d-flex align-items-center justify-content-center">
										<img src="assets/images/assets/ils_22.png" alt="">
									</div>
								</div>
								<!-- /.pr-column -->
							</div>
						</div>
					</div>
					<div class="tab-pane" id="yearly" role="tabpanel" aria-labelledby="rent-tab" tabindex="0">
						<div class="row gx-xxl-5">
							<div class="col-lg-4">
								<div class="pr-column">
									<div class="pr-header text-center">
										<div class="plan text-uppercase">Standard</div>
										<strong class="price fw-500 d-block">0</strong>
									</div>
									<!-- /.pr-header -->
									<ul class="style-none text-center">
										<li>1 Domain</li>
										<li>1 Year Premium Support</li>
										<li>3gb Hosting</li>
									</ul>
									<a href="#" class="btn-eight mt-50 mb-50">Get Started</a>
									<div class="illustration d-flex align-items-center justify-content-center">
										<img src="assets/images/assets/ils_20.png" alt="">
									</div>
								</div>
								<!-- /.pr-column -->
							</div>
							<div class="col-lg-4">
								<div class="pr-column">
									<div class="pr-header text-center">
										<div class="plan text-uppercase">Gold</div>
										<strong class="price fw-500 d-block"><sup>$</sup>27</strong>
									</div>
									<!-- /.pr-header -->
									<ul class="style-none text-center">
										<li>3 Domain</li>
										<li>1 Year Premium Support</li>
										<li>10gb Hosting</li>
									</ul>
									<a href="#" class="btn-eight mt-50 mb-50">Get Started</a>
									<div class="illustration d-flex align-items-center justify-content-center">
										<img src="assets/images/assets/ils_21.png" alt="">
									</div>
								</div>
								<!-- /.pr-column -->
							</div>
							<div class="col-lg-4">
								<div class="pr-column">
									<div class="pr-header text-center">
										<div class="plan text-uppercase">Diamond</div>
										<strong class="price fw-500 d-block"><sup>$</sup>39</strong>
									</div>
									<!-- /.pr-header -->
									<ul class="style-none text-center">
										<li>Unlimited Domain</li>
										<li>1 Year Premium Support</li>
										<li>Unlimited Hosting</li>
									</ul>
									<a href="#" class="btn-eight mt-50 mb-50">Get Started</a>
									<div class="illustration d-flex align-items-center justify-content-center">
										<img src="assets/images/assets/ils_22.png" alt="">
									</div>
								</div>
								<!-- /.pr-column -->
							</div>
						</div>
					</div>
				</div>
				<!-- /.tab-content -->
			</div>

		</div>
		<!-- /.pricing-section-three -->




		<!--
		=====================================================
			BLock Feature Fifteen
		=====================================================
		-->
		<div class="block-feature-fifteen p-30 mt-150 xl-mt-120 lg-mt-80">
			<div class="bg-eleven md-pt-70">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 order-lg-last">
							<div class="ms-lg-5">
								<div class="title-six">
									<h2 class="color-dark">App Integration Available</h2>
								</div>
								<p class="fs-28 color-dark mt-30 mb-50 md-mb-30">Broaden piku’s line potential by leveraging its compatibility with a vast array of apps and integration solutions.</p>
								<a href="#" class="btn-seven style-two">See all Apps</a>
							</div>
						</div>
						<div class="col-lg-6 order-lg-first">
							<div class="media position-relative md-mt-40">
								<img src="assets/images/assets/card_08.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.block-feature-fifteen -->




		<!--
		=====================================================
			FAQ Section Three
		=====================================================
		-->
		<div class="faq-section-three position-relative mt-150 lg-mt-80">
			<div class="container">
				<div class="row">
                    <div class="col-lg-5">
                        <div class="title-four">
							<div class="text-uppercase mb-10">FAQ</div>
                            <h2 class="fw-bold">Questions & Answers</h2>
                        </div>
						<p class="fs-22 pe-xxl-5 mt-40 md-mt-10 mb-40">Find your answers here. if you don’t find it here, please contact us.</p>
						<a href="contact-v2" class="btn-eleven">Contact us</a>
                    </div>
					<div class="col-lg-7">
						<div class="accordion accordion-style-two p0 shadow-none ms-xl-4 md-mt-40" id="accordionFour">
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
			Fancy Banner Four
		=====================================================
		-->
		<div class="fancy-banner-four p-30 mt-110 lg-mt-60">
			<div class="bg-eight text-center pt-100 lg-pt-70 pb-250">
				<div class="container">
					<div class="position-relative z-1">
						<div class="row">
							<div class="col-xl-9 col-lg-8 m-auto">
								<div class="title-six mb-40">
									<h2 class="color-dark">700k+ Customers have our Piku. Try it Now!</h2>
								</div>
								<a href="#" class="btn-seven style-two">Get Started</a>
							</div>
						</div>
						<img src="assets/images/shape/shape_41.svg" alt="" class="shapes shape_01">
						<img src="assets/images/shape/shape_42.svg" alt="" class="shapes shape_02">
					</div>
				</div>
				
			</div>
			<img src="assets/images/assets/ils_23.png" alt="" class="position-relative z-1 illustration">
		</div>
		<!-- /.fancy-banner-four -->


	


		<!--
		=====================================================
			Footer Three
		=====================================================
		-->
		<div class="footer-three version-two">
			<div class="container">
				<div class="position-relative">
					<div class="row">
						<div class="col-xxl-5 col-lg-4 me-auto">
							<div class="footer-intro mb-30 me-xxl-5 pe-xxl-4">
								<h3>Subscribe to our <span>newsletter.</span></h3>
								<form action="#" class="position-relative">
									<input type="email" placeholder="Your email address">
									<button class="tran3s"><img src="assets/images/icon/icon_17.svg" alt="" class="ms-auto"></button>
								</form>
							</div>
						</div>
						<div class="col-lg-2 col-6">
							<div class="footer-nav mb-40">
								<ul class="footer-nav-link style-none">
									<li><a href="about-us-v1">About </a></li>
									<li><a href="project-v2">Work Gallery</a></li>
									<li><a href="pricing-v2">Pricing</a></li>
									<li><a href="blog-v2">Blog</a></li>
									<li><a href="contact-v2">Contact</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-2 col-6">
							<div class="footer-nav mb-40">
								<ul class="footer-nav-link style-none">
									<li><a href="faq-v1">Faq’s</a></li>
									<li><a href="faq-v2">Privacy Policy</a></li>
									<li><a href="faq-v1">Terms</a></li>
								</ul>
							</div>
						</div>
						<div class="col-xxl-2 col-lg-3">
							<div class="footer-contact mb-20">
								<p class="fw-500">210 Wallent Street, California, Main OC, USA</p>
								<a href="#" class="tel fw-500 tran3s">(+91) 0187 34 377</a>
								<ul class="style-none d-flex align-items-center social-icon">
								<li><a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a></li>
									<li><a href="https://x.com/"><i class="fa-brands fa-twitter"></i></a></li>
									<li><a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			<div class="container">
				<div class="bottom-footer">
					<div class="d-md-flex align-items-center justify-content-between">
						<div class="d-flex justify-content-center align-items-center sm-mb-20">
							<ul class="style-none d-flex justify-content-center">
								<li><a href="faq-v2">Demo .</a></li>
								<li><a href="faq-v2">Partners .</a></li>
								<li><a href="blog-v2">Careers</a></li>
							</ul>
						</div>
						<p class="copyright-text text-center m0"><span>@2024 Piku inc.</span> All Right Reserved</p>
					</div>
				</div>
			</div>
		</div> <!-- /.footer-three -->




		<button class="scroll-top">
			<i class="bi bi-arrow-up-short"></i>
		</button>




		<?php include 'partials/vendor-scripts.php'; ?>
</body>

</html>