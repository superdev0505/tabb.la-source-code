@extends('layouts.welcome')
@section('styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/home.css')}}">
<style type="text/css">
	strong, b {
		font-weight: bold;
	}

	a, a:hover {
		color: white;
	}
	.blocker-content p {
		font-size: 24px;
	}
	.adblock-content {
		color: black;
	}
	.adblock-content h1 {
		font-weight: 700;
	}
	.adblock-content .col-md-6 {
		padding: 40px;
	}
	.adblock-content:first-child {
		border-right: 1px dashed #222
	}
</style>
@endsection
@section('content')
<div class="title m-b-md"> 
	Whitelisting Your Adblocker
</div>
<div class="blocker-content">
	<p>
		Tabb.la uses ads to pay users to view. If you have an ad blocker, you will likely need to whitelist us for ads to show.
	</p>
	<p>
		<strong>Haveing trouble? Please email us at <a href="mailto:contact@tabb.la">contact@tabb.la</a></strong>
	</p>
</div>

<div class="m-white-div">
	<p class="sub-title">What ad blocker do you use?</p>
	<div class="row">
		<div class="adblock-content col-md-6">
			<h1>ADBock Plus</h1>
			<div class="row">
				<div class="col-md-6">
					<h3>Chrome</h3><p><b>Onb<em>this</em> page (not a new tab)</b>, click on the AdBlock Plus icon (stop sign) on the top right of your browser</p><p>Click "Enabled on this site" until you see "Disabled on this site"</p>
				</div>
				<div class="col-md-6">
					<h3>Firefox</h3><p><b>On <em>this</em> page (not a new tab)</b>, click the AdBlock Plus icon (stop sign) on the top right of your browser</p><p>Click "Disable on tabb.la"</p>
				</div>
			</div>
		</div>
		
		<div class="adblock-content col-md-6">
			<h1>UBlock</h1>
			<div class="row">
				<div class="col-md-6">
					<h3>Chrome</h3><p><b>On a new tab (<em>not</em> this page)</b>, click on the uBlock Origin icon (red shield) on the top right of your browser</p><p>Click the "power" button</p>
				</div>
				<div class="col-md-6">
					<h3>Firefox</h3><p><b>On a new tab (<em>not</em> this page)</b>, click on the uBlock Origin icon (red shield) on the top right of your browser</p><p>Click the "power" button</p></div>
			</div>
		</div>
	</div>
</div>
@endsection

