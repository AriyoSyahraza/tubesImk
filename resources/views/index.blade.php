@extends('master')

@section('content')
	

	<section class="slider mt-4">
		<div class="container-fluid">
			<div class="row no-gutters">
				<div class="col-lg-12 col-sm-12 col-md-12 slider-wrap">
					<div class="slider-item">
						<div class="slider-item-content">
							<div class="post-thumb mb-4">
								<a href="/Blog-Post">
									<img src="images/slider/slider1.jpg" alt="" class="img-fluid">
								</a>
							</div>

							<div class="slider-post-content">
								<span class="cat-name text-color font-sm font-extra text-uppercase letter-spacing">Lifestyle</span>
								<h3 class="post-title mt-1"><a href="/Blog-Post">Tips for Taking a Long-term Trip</a></h3>
								<span class=" text-muted  text-capitalize">January 2, 2019</span>
							</div>
						</div>
					</div>

					<div class="slider-item">
						<div class="slider-item-content">
							<div class="post-thumb mb-4">
								<a href="/Blog-Post">
									<img src="images/slider/slider2.jpg" alt="" class="img-fluid">
								</a>
							</div>
							<div class="slider-post-content">
								<span class="cat-name text-color font-sm font-extra text-uppercase letter-spacing">Travel</span>
								<h3 class="post-title mt-1"><a href="/Blog-Post">Trip to California</a></h3>
								<span class=" text-muted  text-capitalize">September 15, 2019</span>
							</div>
						</div>
					</div>

					<div class="slider-item">
						<div class="slider-item-content">
							<div class="post-thumb mb-4">
								<a href="/Blog-Post">
									<img src="images/slider/slider3.jpg" alt="" class="img-fluid">
								</a>
							</div>
							<div class="slider-post-content">
								<span class="cat-name text-color font-sm font-extra text-uppercase letter-spacing">weekends</span>
								<h3 class="post-title mt-1"><a href="/Blog-Post">Our Favorite Weekend Getaways</a></h3>
								<span class=" text-muted  text-capitalize">June 12, 2019</span>
							</div>
						</div>
					</div>

					<div class="slider-item">
						<div class="slider-item-content">
							<div class="post-thumb mb-4">
								<a href="/Blog-Post">
									<img src="images/slider/slider2.jpg" alt="" class="img-fluid">
								</a>
							</div>

							<div class="slider-post-content">
								<span class="cat-name text-color font-sm font-extra text-uppercase letter-spacing">Travel</span>
								<h3 class="post-title mt-1"><a href="/Blog-Post">Trip to California</a></h3>
								<span class=" text-muted  text-capitalize">September 15, 2019</span>
							</div>
						</div>
					</div>

					<div class="slider-item">
						<div class="slider-item-content">
							<div class="post-thumb mb-4">
								<a href="/Blog-Post">
									<img src="images/slider/slider3.jpg" alt="" class="img-fluid">
								</a>
							</div>

							<div class="slider-post-content">
								<span class="cat-name text-color font-sm font-extra text-uppercase letter-spacing">Travel</span>
								<h3 class="post-title mt-1"><a href="/Blog-Post">Trip to California</a></h3>
								<span class=" text-muted  text-capitalize">September 15, 2019</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="row">
						@foreach ($costs as $cost)
							<div class="col-lg-3 col-md-6">
								<article class="post-grid mb-5">
									<a class="post-thumb mb-4 d-block" href="{{ route('costs.show', str_replace(' ', '-', $cost->cost_name)) }}">
										<img src="images/news/f1.jpg" alt="" class="img-fluid w-100">
									</a>
									<span class="cat-name text-color font-extra text-sm text-uppercase letter-spacing-1">Explore</span>
									<h3 class="post-title mt-1"><a href="{{ route('costs.show', str_replace(' ', '-', $cost->cost_name)) }}">{{ $cost->cost_name }}</a></h3>
									<p class="mb-4">tipe cost : {{$cost->cost_type}}<p>
									<p class="mb-4">alamat cost : {{$cost->cost_address}}<p>
									<span class="text-muted letter-spacing text-uppercase font-sm">{{ $cost->created_at }}</span>

								</article>
							</div>
						@endforeach
					</div>
				</div>

				<div class="m-auto">
					<div class="pagination mt-5 pt-4">
						<ul class="list-inline ">
							<li class="list-inline-item"><a href="#" class="active">1</a></li>
							<li class="list-inline-item"><a href="#">2</a></li>
							<li class="list-inline-item"><a href="#">3</a></li>
							<li class="list-inline-item"><a href="#" class="prev-posts"><i class="ti-arrow-right"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="footer-2 section-padding gray-bg pb-5">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="subscribe-footer text-center">
						<div class="form-group mb-0">
							<h2 class="mb-3">Subscribe Newsletter</h2>
							<p class="mb-4">Subscribe my Newsletter for new blog posts , tips and info.
							<p>
							<div class="form-group form-row align-items-center mb-0">
								<div class="col-sm-9">
									<input type="email" class="form-control" placeholder="Email Address">
								</div>
								<div class="col-sm-3">
									<a href="#" class="btn btn-dark ">Subscribe</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="footer-btm mt-5 pt-4 border-top">
				<div class="row">
					<div class="col-lg-12">
						<ul class="list-inline footer-socials-2 text-center">
							<li class="list-inline-item"><a href="#">Privacy policy</a></li>
							<li class="list-inline-item"><a href="#">Support</a></li>
							<li class="list-inline-item"><a href="#">About</a></li>
							<li class="list-inline-item"><a href="#">Contact</a></li>
							<li class="list-inline-item"><a href="#">Terms</a></li>
							<li class="list-inline-item"><a href="#">Category</a></li>
						</ul>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-6">
						<div class="copyright text-center ">
							@ copyright all reserved to <a href="https://themefisher.com/">themefisher.com</a>-2019 Distribution <a
								href="https://themewagon.com">ThemeWagon.</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


@endsection
