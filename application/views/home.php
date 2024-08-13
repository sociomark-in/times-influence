<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Time Influence</title>
	<?php $this->load->view('components/_head'); ?>
</head>

<body>
	<?php $this->load->view('layout/header') ?>
	<main>
		<section class="bg-light section" id="about-us">
			<div class="container">
				<div class="row flex-row-reverse">
					<div class="col-lg-6 col-md-6 col-12 mb-md-0 mb-3">
						<div class="media-content">
							<div class="frame-wrapper">
								<img class="w-100" src="https://placehold.co/1280x1280" height="100%" alt="logo">
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-12 mb-md-0 mb-3 p-3">
						<div class="text-content p-lg-5">
							<div class="title section-title mb-3 mb-md-4">
								<h5 class=""><span class="title1 text-uppercase">About Us</span></h5>
								<p class="mb-3">Are you stuffing or staffing talent in your enterprise?</p>
								<h2 class="m-0 text-blue">Teaming up to create your world-class team<span class="text-red">.</span></h2>
							</div>
							<div class="desc">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tristique, est vel facilisis efficitur, leo elit placerat elit, quis tincidunt odio leo ac turpis. In consequat enim mi, in interdum enim convallis vel. Suspendisse sit amet risus ac purus dignissim condimentum.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="section bg-blue text-white" id="testimonial" class="p-lg-5">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12	 col-12 mb-md-0 mb-3">
						<div class="heading-1">
							<div class="section-title">
								<h2 class="text-white">Testimonials<span class="text-red">.</span></h2>
							</div>
						</div>
						<div class="swiper mySwiper2 swiper-white">
							<div class="swiper-wrapper">
								<?php for ($i = 0; $i < 4; $i++) { ?>
									<div class="swiper-slide swiper-border">
										<div class="row align-items-center">
											<div class="col-lg-4 col-md-6 col-12 mb-md-0 mb-3 p-5">
												<div class="frame-icon">
													<img class="w-100" src="https://placehold.co/255x255" alt="logo">
												</div>
											</div>
											<div class="col-lg-8 col-md-6 col-12 mb-md-0 mb-3 p-3">
												<div class="text-content">
													<div class="message">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tristique, est vel facilisis efficitur, leo elit placerat elit, quis tincidunt odio leo ac turpis. In consequat enim mi, in interdum enim convallis vel. Suspendisse sit amet risus ac purus dignissim condimentum.</p>
													</div>
													<div class="author">
														<h5 class="client-name text-white">Lorem ipsum</h5>
														<p class="client-designation">Lorem ipsum</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								<?php } ?>
							</div>
							<div class="swiper-button-next"></div>
							<div class="swiper-button-prev"></div>
							<div class="swiper-pagination"></div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="section" id="contact-form" class="p-lg-5">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-6 col-12 mb-md-0 mb-3">
						<div class="section-title">
							<h2 class="text-blue">Contact Us<span class="text-red">.</span></h2>
						</div>
						<div class="mb-md-0 mb-3">
							<?php $this->load->view('components/_contact_form') ?>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="clients">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-6 col-12 mb-md-0 mb-3">
						<div class="mb-3 mb-md-5">
							<div class="section-title">
								<h2 class="text-blue">Our Partners<span class="text-red">.</span></h2>
							</div>
						</div>
						<!-- Swiper -->
						<div class="swiper mySwiper pb-2">
							<div class="swiper-wrapper">
								<div class="swiper-slide swiper-shadow">
									<a href="#">
										<img class="w-100" src="assets/images/clientlogo/idfc.jpg" alt="logo">
									</a>
								</div>
								<div class="swiper-slide swiper-shadow">
									<a href="#">
										<img class="w-100" src="assets/images/clientlogo/dream11.webp" alt="logo">
									</a>
								</div>
								<div class="swiper-slide swiper-shadow">
									<a href="#">
										<img class="w-100" src="assets/images/clientlogo/meta.webp" alt="logo">
									</a>
								</div>
								<div class="swiper-slide swiper-shadow">
									<a href="#">
										<img class="w-100" src="assets/images/clientlogo/sbi.webp" alt="logo">
									</a>
								</div>
								<div class="swiper-slide swiper-shadow">
									<a href="#">
										<img class="w-100" src="assets/images/clientlogo/storia.webp" alt="logo">
									</a>
								</div>
								<div class="swiper-slide swiper-shadow">
									<a href="#">
										<img class="w-100" src="assets/images/clientlogo/whatsapp.webp" alt="logo">
									</a>
								</div>
							</div>
							<!-- <div class="swiper-pagination"></div> -->
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>

	<footer>
		<?php $this->load->view('layout/footer') ?>
	</footer>
	<?php $this->load->view('layout/_common_js') ?>

</body>

</html>
