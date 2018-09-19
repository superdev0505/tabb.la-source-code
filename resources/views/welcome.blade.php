@extends('layouts.welcome')
@section('styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/home.css')}}">
@endsection
@section('content')
	<div class="title m-b-md"> 
		It's free and incredibly easy to start, Transform your tabs into an income stream in 30 seconds
	</div>
	<div>
		<a href="#" class="add-button m-b-md btn btn-lg m-btn--pill  btn-outline-metal m-btn m-btn-custom">Add to Chrome</a>
	</div>
	<div class="m-white-div">
		<div class="row">
			<div class="col-sm-7">
				<p class="sub-title">One of the simplest way to earn money</p>
				<span>You can get money only using mouse click. Can you believe this? When you press new tab. extension will shows the adverts and you will get a point. After point raise to 1500, you will get $10 from us via Paypal everytime. This is awesome and easy.s</span>
			</div>
			<div class="col-sm-5">
				<img src="{{asset('laptop-chrome.png')}}" width="100%">
			</div>
		</div>
	</div>
	<div class="m-white-div">
		<div class="row">
			<div class="col-sm-5">
				<img src="{{asset('happy-computer.png')}}" width="100%">
			</div>
			<div class="col-sm-7">
				<p class="sub-title">A new tab you'll fall in love with</p>
				<span>Browser better with gorgeous photos, notes, to-do lists and more, All just a new tab away.</span>
				<div class="paypal-icon-div">
					<img src="{{asset('paypal-icon.png')}}" height="120">
				</div>
			</div>
		</div>
	</div>
	
	<div class="row products-div">
		<div class="review-div">
			<p class="review-title">Here's what people have to say</p>
			<div class="m-white-div round-div">
				<p>So easy to earn money on autopilot. Love this new tab. - Susan H FL</p>
				<p>Such a great idea. Super easy to install - Marcus S Manchester UK</p>
				<p>This is a great way to earn a small amound of money every day. Might not be alot but the points soon add up. I love how it tells you how many tabs you've opened so far. It's amazing to use and allows me to actually BE PAID to view advertisements. - Allan A Texas</p>
				<p>Finally, a website that pays you to view its adverts with no efforts on your end at all - Ryan Taylor Ottowa</p>
				<p>Just Super Duper!!! - Tyler S CA
			</p></div>
		</div>
		<div class="col-sm-12 col-md-6">
			<p class="sub-title">Our Products</p>
			<span>We have 2 browser extensions, one for chrome and other for firefox. You can install these extensions in free.
			If you want to install, you can click the buttons - Add to Chrome(Firefox). And this will redirect you to the goolge store or firefox store. If you press intall extensions, this product will install to your browser.</span>
			<p class="sub-title">
				<i class="socicon-chrome"></i>
				<i class="socicon-firefox"></i>
			</p>
			<div>
				<a href="#" class="add-button m-b-md btn btn-lg m-btn--pill  btn-outline-metal m-btn m-btn-custom">Add to Chrome</a>
			</div>
		</div>
		<div class="col-sm-12 col-md-6">
			<div class="m-portlet m-portlet--tab">
				<div class="m-portlet__head">
					<div class="m-portlet__head-caption">
						<div class="m-portlet__head-title">
							<span class="m-portlet__head-icon m--hide">
							<i class="la la-gear"></i>
							</span>
							<p class="sub-title">Contact Us</p>
						</div>
					</div>
				</div>
				<!--begin::Form-->
				<form class="m-form m-form--fit m-form--label-align-right">
					<div class="m-portlet__body">
						<div class="form-group m-form__group">
							<label for="username">Your fullname</label>
							<input type="text" class="form-control m-input m-input--air m-input--pill" id="username" name="name" placeholder="Enter your name">
						</div>
						<div class="form-group m-form__group">
							<label for="useremail">Email address</label>
							<input type="email" class="form-control m-input m-input--air m-input--pill" id="useremail" name="email" aria-describedby="emailHelp" placeholder="Enter your email">
						</div>
						<div class="form-group m-form__group">
							<label for="message">Message</label>
							<textarea class="form-control m-input m-input--air m-input--pill" id="message" rows="3"></textarea>
						</div>
					</div>
					<div class="m-portlet__foot m-portlet__foot--fit">
						<div class="m-form__actions">
							<button type="reset" class="m-b-md btn btn-lg m-btn--pill  btn-outline-accent m-btn m-btn-custom">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<button type="reset" class="m-b-md btn btn-lg m-btn--pill  btn-outline-metal m-btn m-btn-custom">Cancel</button>
						</div>
					</div>
				</form>
				<!--end::Form-->			
			</div>
		</div>
	</div>
	<div class="our-team m-white-div">
		<p class="sub-title">Our Team</p>
		<div class="row">
			<div class="col-md-6 col-lg-3">
				<div class="round-image">
					<img src="{{asset('team-image/Richard.png')}}" width="200px">
				</div>
				<h5>Richard Gold</h5>
				<span>Founder and CEO</span>					
			</div>
			<div class="col-md-6 col-lg-3">
				<div class="round-image">
					<img src="{{asset('team-image/brad.png')}}" width="200px">
				</div>
				<h5>Brad Porter</h5>
				<span>Co Frounder and Head of Operatrions</span>
			</div>
			<div class="col-md-6 col-lg-3">
				<div class="round-image">
					<img src="{{asset('team-image/max.png')}}" width="200px">
				</div>
				<h5>Max Adams</h5>
				<span>Head of Finance</span>
			</div>
			<div class="col-md-6 col-lg-3">
				<div class="round-image">
					<img src="{{asset('team-image/nina.png')}}" width="200px">
				</div>
				<h5>Nina Campbell</h5>
				<span>Marketing Boss</span>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-lg-3">
				<div class="round-image">
					<img src="{{asset('team-image/Abby.png')}}" width="200px">
				</div>
				<h5>Abby G</h5>
				<span>Customer Support Exec</span>
			</div>
			<div class="col-md-6 col-lg-3">
				<div class="round-image">
					<img src="{{asset('team-image/leo.png')}}" width="200px">
				</div>
				<h5>Leo J</h5>
				<span>Customer Support</span>
			</div>
			<div class="col-md-6 col-lg-3">
				<div class="round-image">
					<img src="{{asset('team-image/Milos.png')}}" width="200px">
				</div>
				<h5>Milos Denic</h5>
				<span>Project Developer</span>
			</div>
		</div>
	</div>
@endsection

@section('scripts')
<script type="text/javascript">
	
	var isFirefox = typeof InstallTrigger !== 'undefined';
	if (isFirefox) document.getElementsByClassName('add-button')[0].innerHTML = 'Add to Firefox';

	
</script>
@endsection