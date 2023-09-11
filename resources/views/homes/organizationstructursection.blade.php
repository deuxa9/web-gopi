<style>
	.slider{
		margin-bottom: 20px;
		position: relative;
	}

	.slider .owl-item.active.center .slider-card{
		transform: scale(1.15);
		opacity: 1;
		background-color: white;
		color:black;
	}

	.slider-card{
		background-color: transparent;
		margin: 0px 0px 90px 0px;
		transform: scale(0.9);
		transition: all 0.3s;
	}
	
	.slider-card img{
		border-radius: 0px 0px 0px 0px;
		box-shadow: 0 15px 25px 0px rgba(206, 191, 191, 0.493);
	}


	.owl-nav .owl-next{
		position: absolute;
		top: calc(40% - 25px);
		right: 0;
		opacity: 1;
		font-size: 30px;
		z-index: 1;
	}

	.owl-nav .owl-prev{
		position: absolute;
		top: calc(40% - 25px);
		left: 0;
		opacity: 1;
		font-size: 30px;
		z-index: 1;
	}

	.owl-carousel{
		top: 50%;
		left: 13%;
	}
</style>


<div class="container desktop-show">
    <h1 class="fw-bold fs-1 text-center text-black mb-4">Organizational Structure</h1>

	<div class="slider">
		<div class="owl-carousel w-75">
			<div class="slider-card">
				<div class="d-flex justify-content-center align-items-center">
					<img src="assets/img/carouselimg.svg" alt="">
				</div>
				<h3 class="fw-bold fs-5 mt-2 text-center">Agustinus Putra</h3>
				<p class="text-center fs-6">CEO Goodeva Technology</p>
			</div>
			<div class="slider-card">
				<div class="d-flex justify-content-center align-items-center">
					<img src="assets/img/carouselimg.svg" alt="">
				</div>
				<h3 class="fw-bold fs-5 mt-2 text-center"></h3>
				<p class="text-center fs-6">CEO Goodeva Technology</p>
			</div>
			<div class="slider-card">
				<div class="d-flex justify-content-center align-items-center">
					<img src="assets/img/carouselimg.svg" alt="">
				</div>
				<h3 class="fw-bold fs-5 mt-2 text-center">Agustinus Putra</h3>
				<p class="text-center fs-6">CEO Goodeva Technology</p>
			</div>
		</div>
		<div class="owl-nav">
			<button type="button" role="presentation" class="owl-prev border-0 bg-transparent">
				<img class="img-fluid w-75" src="assets/img/prev.svg" alt="">
			</button>
			<button type="button" role="presentation" class="owl-next border-0 bg-transparent">
				<img class="img-fluid w-75" src="assets/img/next.svg" alt="">
			</button>
		</div>
	</div>
</div>
<div class="container mobile-show">
    <h1 class="fw-bold fs-3 text-center text-black py-2">Organizational Structure</h1>
    
	<div class="row">
		<div class="col-sm-4 px-5">
			<img class="img-fluid mb-2" src="assets/img/carouselimg.svg" alt="">
			<h3 class="text-center fs-4"><strong>Agustinus Putra</strong></h3>
			<p class="text-center">CEO Goodeva Technology</p>
		</div>
		<div class="col-sm-4 px-5">
			<img class="img-fluid mb-2" src="assets/img/carouselimg.svg" alt="">
			<h3 class="text-center fs-4"><strong>Agustinus Putra</strong></h3>
			<p class="text-center">CEO Goodeva Technology</p>
		</div>
		<div class="col-sm-4 px-5">
			<img class="img-fluid mb-2" src="assets/img/carouselimg.svg" alt="">
			<h3 class="text-center fs-4"><strong>Agustinus Putra</strong></h3>
			<p class="text-center">CEO Goodeva Technology</p>
		</div>
	</div>
</div>
<script>
	$(document).ready(function(){
		var owl = $('.owl-carousel'); // Menyimpan referensi Owl Carousel dalam variabel owl

		owl.owlCarousel({
			loop:true,
			margin:6,
			responsiveClass:true,
			center:true,
			nav:false,
			responsive:{
				0:{
					items:1,
				},
				600:{
					items:3,
				},
				1000:{
					items:3,			
				}
			}
		});

		// Fungsi tombol navigasi
		$('.owl-prev').click(function () {
			owl.trigger('prev.owl.carousel');
		});

		$('.owl-next').click(function () {
			owl.trigger('next.owl.carousel');
		});
	})
</script>