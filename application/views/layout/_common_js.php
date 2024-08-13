<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
	new Swiper(".mySwiper", {
		slidesPerView: 2,
		spaceBetween: 10,
		freeMode: true,
		autoplay: {
			delay: 2500,
			disableOnInteraction: false,
		},
		breakpoints: {
			640: {
				slidesPerView: 2,
				spaceBetween: 20,
			},
			768: {
				loop: true,
				autoplay: {
					enabled: false
				},
				slidesPerView: 3,
				spaceBetween: 20,
			},
			1024: {
				loop: false,
				autoplay: {
					enabled: true
				},
				slidesPerView: 5,
				spaceBetween: 30,
			},
		},
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
		},
	});
	new Swiper(".mySwiper2", {
		slidesPerView: 1,
		spaceBetween: 30,
		freeMode: true,
		autoplay: {
			delay: 2500,
			disableOnInteraction: false,
		},
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
		},
	});
</script>

<!-- light gallery js -->
<script src="https://cdn.skypack.dev/lightgallery@2.0.0-beta.3"></script>
<script src="https://cdn.skypack.dev/lightgallery@2.0.0-beta.3/plugins/zoom"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
