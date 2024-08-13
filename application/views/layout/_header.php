<nav class="navbar navbar-expand-lg">
	<div class="container">
		<a class="navbar-brand" href="<?= base_url(''); ?>">
			<img src="<?= base_url('assets/') ?>logo.png" width="120" alt="logo">
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-md-center w-100 gap-3">
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="<?= base_url(''); ?>">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="<?= base_url('#about-us'); ?>">About Us</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="<?= base_url('#services'); ?>">Our Services</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="<?= base_url('#client-logo'); ?>">Our Partners</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="<?= base_url('#testimonial'); ?>">Testimonials</a>
				</li>

				<li class="nav-item">
					<a class="nav-link active" href="<?= base_url('#contact-form') ?>">Contact Us</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
