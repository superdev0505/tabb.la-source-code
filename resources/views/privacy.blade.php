@extends('layouts.welcome')
@section('styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/home.css')}}">
<style type="text/css">
	strong, b {
		font-weight: bold;
	}
	.m-white-div {
		color: black;
	}
	.m-white-div .container {
		padding: 60px 0;
		text-align: left;
	}
	.m-white-div p {
		font-size: 18px;
	}
	.m-white-div li {
		font-size: 18px;
	}
	.m-white-div h1 {
		padding: 20px;
		font-weight: 700;
	}
	.m-white-div .indent {
		padding-left: 60px;
	}
</style>
@endsection
@section('content')
<div class="title m-b-md"> 
	Privacy Policy
</div>
<div class="m-white-div">
	<div class="container">
		<p>Your privacy is very important to us. At Tabb.la, we have a few fundamental principles:</p>
		<ul>
			<li>We don't ask you for personal information we don't need.</li>
			<li>We don't share your personal information with anyone except to provide our Services, comply with the law, or protect our rights.</li>
			<li>We don't store personal information unless required for the ongoing operation of one of our Services.</li>
		</ul>
		<p>Below is our privacy policy which incorporates these principles. This document applies to Tabb.la ("Tabb.la", "us", "our", or "we") and is part of Tabb.la's <a href="{{url('terms')}}">Terms of Service</a>. By using tabb.la (the "Website"), you agree to the terms of this Privacy Policy and the Terms of Service. We collectively refer to the Website and its related services, apps, and websites as our "Services".</p>
		<p>If you have any questions, please <a href="mailto:contact@tabb.la">contact us</a>.</p>
		<h1>Basis to Collect and Use Personal Data</h1>
		<p>We process personal data consistent with our disclosures in this Privacy Policy. We process personal data on the following legal bases: (1) with your consent; (2) as necessary to perform our agreement to provide Services; and (3) as necessary for our legitimate interests in providing the Services where those interests do not override your fundamental rights and freedoms related to data privacy.</p>
		<h1>Data Collected</h1>
		<p>We may collect and store different types of data:</p>
		<ul>
			<li><b>Anonymous device and behavioral data:</b> We collect anonymous data from every visitor of the Website to monitor traffic and fix bugs. For example, we collect information like web requests, the data sent in response to such requests, the Internet Protocol address, the browser type, device information, and a timestamp for the request. This data is collected with legitimate interest to maintain and develop our product.</li>
			<li><b>Information you provide to us:</b> We save information related to your behavior on Tabb.la, such as the the number tabs you open, which charity partners you support, the information you store in widgets on the new tab page, your account settings, and the users you refer to Tabb.la. In order to be able to save your profile and the settings associated with it, we ask you to log in and provide certain personal information, such as an email address. These are all essential data for providing our Services.</li>
			<li><b>Cookie and local browser storage:</b> To allow login features, we use cookies and local browser data storage to store session information. You can block or delete cookies and local browser data storage and still use Tabb.la, although you may then be asked for your username and password each time you open our page.</li>
			<li><p><b>Ad Targeting, Selection, and Delivery:</b> When you use our Services, third parties that provide advertising, to the Services, may collect or receive information about you including through the use of cookies. These third parties may use your information to provide you with advertising that is based on your interests and to measure and analyze ad performance, on our Services or other websites or platforms, and combine it with information collected across different websites, online services, and other devices. These third parties' use of your information will be based on their own privacy policies. You can opt out of interest-based targeted advertising for some advertising partners <a href="optout.networkadvertising.org">here</a>.</p><p>If you are a resident of the EEA or Switzerland you will see a personal data processing disclosure and consent interface (a persistent banner at the middle of the screen) upon every visit to the website, until and unless the user selects either "I accept" or "I do not accept" in the interface. Only those EEA Users who have selected "I accept" in this interface will have their personal data processed for the purpose of ad targeting, selection, and delivery. For any EEA User who either selects "I do not accept" or does not make a selection, we will only serve non-personalized and non-programmatic advertising, which may be targeted using coarse (country-level) location.</p></li>
			<li><b>Data from contracted partners:</b> We work with partners who provide hardware and software services, such as as cloud storage and server services. We may store data collected by third party companies with whom we have contracted when it is with legitimate interest to maintain and develop our product.</li>
		</ul>
		<p>You are able to request we delete your account and remove any personal data associated with your account. To do so, please <a href="mailto:contact@tabb.la">contact us</a> and we will follow up as soon as possible.</p>
		<h1>Children's Information</h1>
		<p>The Services are not intended for children under 13 years of age. Tabb.la does not knowingly collect personal information from children under 13 years of age. If you are under 13 years of age, do not provide personal information to Tabb.la without providing us with consent from your parents. If we discovers that a child under the age of 13 has provided us with personal information and we do not have parental consent, we will immediately delete that child's information. If you believe that company has been provided with the personal information of a child under the age of 13 without parental consent, please notify us immediately.</p>
		<h1>Sharing of Data</h1>
		<p>We do not share information you have provided to us without your consent, unless:</p>
		<ul>
			<li>doing so is appropriate to carry out your own request</li>
			<li>doing so helps us provide our Services</li>
			<li>we believe it's needed to enforce our Terms of Service, or that is legally required</li>
			<li>we believe it's needed to detect, prevent or address fraud, security or technical issues</li>
			<li>otherwise protect our property, legal rights, or that of others.</li>
		</ul>
		<p>To provide our Services, we may share data with third-party companies (for example, software providers and cloud storage services) with whom we've contracted. These companies are restricted from using the data in any other way than to provide services to us.</p>
		<p>We employ industry standard techniques to protect against unauthorized access of data that we store.</p>
		<p>We may choose to buy or sell assets. In these types of transactions, user information is typically one of the transferred business assets. Moreover, if we, or substantially all of our assets, were acquired, or if we go out of business or enter bankruptcy, user information would be one of the assets that is transferred or acquired by a third party. You acknowledge that such transfers may occur, and that any acquirer of us or our assets may continue to use your personal information as set forth in this policy.</p>
		<h1>Changes to the Privacy Policy</h1>
		<p>We may amend this Privacy Policy from time to time. Use of information we collect now is subject to the Privacy Policy in effect at the time such information is used. A user is bound by any changes to the Privacy Policy when he or she uses the Services after such changes have been first posted.</p>
		<p>If you have any questions or concerns, please <a href="mailto:contact@tabb.la">contact us</a>.</p>
	</div>
</div>
@endsection