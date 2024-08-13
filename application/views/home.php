<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Time Influence</title>
	<?php $this->load->view('layout/_head'); ?>
</head>

<body>
	<?php $this->load->view('layout/_header') ?>
	<main>
		<section class="section"></section>
		<section class="bg-light section" id="about-us">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-12 mb-md-0 mb-3">
						<div class="media-content">
							<div class="frame-wrapper">
								<img class="w-100" src="https://placehold.co/1280x1280" height="100%" alt="logo">
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-12 mb-md-0 mb-3 p-3">
						<div class="text-content p-lg-5">
							<div class="title section-title mb-3 mb-md-5">
								<p class="mb-3">Teaming up to create your </p>
								<h2 class="m-0 text-blue">world-class team<span class="text-red">.</span></h2>
							</div>
							<div class="desc">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tristique, est vel facilisis efficitur, leo elit placerat elit, quis tincidunt odio leo ac turpis. In consequat enim mi, in interdum enim convallis vel. Suspendisse sit amet risus ac purus dignissim condimentum.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="section" id="services">
			<div class="container">
				<div class="row flex-row-reverse g-3">
					<div class="col-12 order-first">
						<div class="title section-title">
							<h2 class="text-blue">Our Services<span class="text-red">.</span></h2>
						</div>
					</div>
					<div class="col-xl-3 offset-xl-1 col-lg-6 col-12">
						<ul class="nav nav-pills flex-column" role="tablist">
							<li class="nav-item" role="presentation">
								<button class="nav-link active" id="ip-tab" data-bs-toggle="tab" data-bs-target="#ip-tab-pane" type="button" role="tab" aria-controls="ip-tab-pane" aria-selected="true">Intellectual Properties</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link" id="brand-tab" data-bs-toggle="tab" data-bs-target="#brand-tab-pane" type="button" role="tab" aria-controls="brand-tab-pane" aria-selected="false">Brand Solutions</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link" id="media-tab" data-bs-toggle="tab" data-bs-target="#media-tab-pane" type="button" role="tab" aria-controls="media-tab-pane" aria-selected="false">Media Partnerships</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link" id="specials-tab" data-bs-toggle="tab" data-bs-target="#specials-tab-pane" type="button" role="tab" aria-controls="specials-tab-pane" aria-selected="false">Special Projects</button>
							</li>
						</ul>
					</div>
					<div class="col-xl col-lg-6 col-12">
						<div class="tab-content">
							<div class="tab-pane fade show active" id="ip-tab-pane" role="tabpanel" aria-labelledby="ip-tab" tabindex="0">
								<div class="desc mb-3">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, praesentium? Laborum, ducimus. Blanditiis quam iste, quia non minus error nemo optio nesciunt corrupti eos ducimus incidunt, quaerat ab magni repudiandae esse, odio natus? Error eos nesciunt soluta similique. Velit, quia.</p>
								</div>
								<div class="">
									<a href="" class="btn btn-primary btn-emblem">Read More</a>
								</div>
							</div>
							<div class="tab-pane fade" id="brand-tab-pane" role="tabpanel" aria-labelledby="brand-tab" tabindex="0">
								<div class="desc mb-3">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, praesentium? Laborum, ducimus. Blanditiis quam iste, quia non minus error nemo optio nesciunt corrupti eos ducimus incidunt, quaerat ab magni repudiandae esse, odio natus? Error eos nesciunt soluta similique. Velit, quia.</p>
								</div>
								<div class="">
									<a href="" class="btn btn-primary btn-emblem">Read More</a>
								</div>
							</div>
							<div class="tab-pane fade" id="media-tab-pane" role="tabpanel" aria-labelledby="media-tab" tabindex="0">
								<div class="desc mb-3">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, praesentium? Laborum, ducimus. Blanditiis quam iste, quia non minus error nemo optio nesciunt corrupti eos ducimus incidunt, quaerat ab magni repudiandae esse, odio natus? Error eos nesciunt soluta similique. Velit, quia.</p>
								</div>
								<div class="">
									<a href="" class="btn btn-primary btn-emblem">Read More</a>
								</div>
							</div>
							<div class="tab-pane fade" id="specials-tab-pane" role="tabpanel" aria-labelledby="specials-tab" tabindex="0">
								<div class="desc mb-3">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, praesentium? Laborum, ducimus. Blanditiis quam iste, quia non minus error nemo optio nesciunt corrupti eos ducimus incidunt, quaerat ab magni repudiandae esse, odio natus? Error eos nesciunt soluta similique. Velit, quia.</p>
								</div>
								<div class="">
									<a href="" class="btn btn-primary btn-emblem">Read More</a>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>

		<section class="section bg-blue text-white" id="testimonials" class="p-lg-5">
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
											<div class="col-lg-4 col-md-6 col-12 mb-md-0 mb-3 p-md-5">
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
					<div class="col-12 mb-md-0 mb-3">
						<div class="mb-3 mb-md-5">
							<div class="section-title">
								<h2 class="text-blue">Our Partners<span class="text-red">.</span></h2>
							</div>
						</div>
						<!-- Swiper -->
						<div class="swiper mySwiper pb-2">
							<div class="swiper-wrapper">
								<?php for ($i = 0; $i < 10; $i++): ?>
									<div class="swiper-slide swiper-shadow">
										<a href="javascript:void(0)">
											<img class="w-100" src="https://placehold.co/100x50" alt="logo">
										</a>
									</div>
								<?php endfor ?>
							</div>
							<!-- <div class="swiper-pagination"></div> -->
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>

	<footer>
		<?php $this->load->view('layout/_footer') ?>
	</footer>
	<?php $this->load->view('layout/_common_js') ?>

</body>

</html>
