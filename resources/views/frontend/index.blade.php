@extends('frontend.layouts.app')
@section('loader')
<div id="loader"></div>
@endsection
@section('content')
<section class="content">
	<div class="row">
		<div class="col-lg-8">
			<div class="box text-center">
				<h1 class="m-2">Free chat rooms, Online chat rooms for free</h1>
				<p class="lead">Chatogo is a free chat rooms without registration where you can chat online with total strangers and meet new people from all the world, you don't need any download or log in
					Chatogo website collecting people in private chat rooms, it's chat rooms online free without registration in which you can talk with new people from all over the world, send pictures and videos for free.
					We offer you many online chat rooms for free to make new friends and meet people that you have common interests with them.</p>
			</div>
			
		</div>
		<div class="col-lg-4">
			<div class="row">
				<div class="col-lg-12">
					<div class="box text-center">
						<div class="box-body">				  	
							<a class="btn d-grid btn-round btn-success text-uppercase" href="{{route('general.chat')}}">General Chat</a>
						</div>
					  </div>
				</div>
				<div class="col-lg-12">
					<div class="box text-center">
						<div class="box-body">				  	
							<a class="btn d-grid btn-round btn-primary text-uppercase" href="#">Boys Chat</a>
						</div>
					  </div>
				</div>
				<div class="col-lg-12">
					<div class="box text-center">
						<div class="box-body">				  	
							<a class="btn d-grid btn-round btn-warning text-uppercase" href="#">Girls Chat</a>
						</div>
					  </div>
				</div>
				<div class="col-lg-12">
					<div class="box text-center">
						<div class="box-body">				  	
							<a class="btn d-grid btn-round btn-success text-uppercase" href="#">Senior Chat</a>
						</div>
					  </div>
				</div>
			</div>
		</div>
		</div>

</section>
@endsection