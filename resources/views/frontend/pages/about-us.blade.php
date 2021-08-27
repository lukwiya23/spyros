@extends('frontend.layouts.master')

@section('title','SPYROS || About Us')

@section('main-content')



	<!-- About Us -->
	<section class="about-us section">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-12">
						<div class="about-content">
							@php
								$settings=DB::table('settings')->get();
							@endphp
							<h3>Welcome To <span>Spyros</span></h3>
							<p> @foreach($settings as $data) {{$data->description}} @endforeach </p>
							<div class="button">
								{{-- <a href="{{route('blog')}}" class="btn">Our Blog</a> --}}
								<a href="{{route('contact')}}" class="btn primary">Contact Us</a>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="about-img overlay">
							{{-- <div class="button">
								<a href="https://www.youtube.com/watch?v=nh2aYrGMrIE" class="video video-popup mfp-iframe"><i class="fa fa-play"></i></a>
							</div> --}}
							<img style="width: 550px; height:350px" src="@foreach($settings as $data) {{$data->photo}} @endforeach" alt="@foreach($settings as $data) {{$data->photo}} @endforeach">
						</div>
					</div>
				</div>
			</div>
	</section>
	<!-- End About Us -->



	<!-- End Shop Services Area -->

	@include('frontend.layouts.newsletter')
@endsection
