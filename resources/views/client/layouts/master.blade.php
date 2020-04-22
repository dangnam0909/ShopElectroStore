<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Electro Store | @yield('title') </title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Electro Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
	/>
	<base href="{{ asset('') }}">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tag Keywords -->
    <link rel="icon" href="{{ URL::asset('/assets/client/images/logoelectro.jpg') }}" type="image/x-icon"/>
	<!-- Custom-Files -->
	<link href="assets/client/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Bootstrap css -->
	<link href="assets/client/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Main css -->
	<link rel="stylesheet" href="assets/client/css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<link href="assets/client/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!-- pop-up-box -->
	<link href="assets/client/css/menu.css" rel="stylesheet" type="text/css" media="all" />
	<link href="assets/client/css/toastr.css" rel="stylesheet" type="text/css" media="all" />
	<!-- menu style -->
	<!-- //Custom-Files -->

	<!-- web fonts -->
	<link href="assets/client/css/lato_font.css" rel="stylesheet">
	<link href="assets/client/css/open-sans_font.css" rel="stylesheet">
	<!-- //web fonts -->

</head>

<body>
	<!-- top-header -->
	@include('client.layouts.header-top')

	<!-- Button trigger modal(select-location) -->
	<div id="small-dialog1" class="mfp-hide">
		<div class="select-city">
			<h3>
				<i class="fas fa-map-marker"></i> Please Select Your Location</h3>
			<select class="list_of_cities">
				<optgroup label="Popular Cities">
					<option selected style="display:none;color:#eee;">Select City</option>
					<option>Da Nang</option>
				</optgroup>
			</select>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //shop locator (popup) -->

	<!-- modals -->
	<!-- log in -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-center">{{ __('message.login') }}</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="{{route('login.client')}}" method="post">
                        @csrf
						<div class="form-group">
							<label class="col-form-label">{{ __('message.account') }}</label>
							<input type="text" class="form-control" placeholder=" " name="name" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">{{ __('message.password') }}</label>
							<input type="password" class="form-control" placeholder=" " name="password" required="">
						</div>
						<div class="right-w3l">
							<input type="submit" class="form-control" value="Login">
						</div>
                        <div class="right-w3l">
                            <a href="{{ URL::to('login/facebook') }}" target="_blank" class="btn btn-primary">{{ __('message.loginFB') }}</a>
						</div>
						<div class="sub-w3l">
							<div class="custom-control custom-checkbox mr-sm-2">
								<input type="checkbox" class="custom-control-input" id="customControlAutosizing">
								<label class="custom-control-label" for="customControlAutosizing">{{ __('message.rememberPW') }}</label>
							</div>
						</div>
						<p class="text-center dont-do mt-3">{{ __('message.youNotAccount') }}
							<a href="#" data-toggle="modal" data-target="#exampleModal2">
								{{ __('message.registerNow') }}</a>
						</p>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- register -->
	<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">{{ __('message.register') }}</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="{{ route('register') }}" method="post">
						@csrf
						<div class="form-group">
							<label class="col-form-label">{{ __('message.fullName') }}</label>
							<input type="text" class="form-control" placeholder="{{ __('message.nguyenVanA') }} " name="name" >
						</div>
						<div class="form-group">
							<label class="col-form-label">Email</label>
							<input type="email" class="form-control" placeholder="test@me.com " name="email" >
						</div>
						<div class="form-group">
							<label class="col-form-label">{{ __('message.password') }}</label>
							<input type="password" class="form-control" placeholder="{{ __('message.password') }}" name="password" id="password1" >
						</div>
						<div class="form-group">
							<label class="col-form-label">{{ __('message.confirmPW') }}</label>
							<input type="password" class="form-control" placeholder="{{ __('message.confirmPW') }}" name="re_password" id="password2">
						</div>
						<div class="right-w3l">
							<input type="submit" class="form-control" value="{{ __('message.register') }}">
						</div>
						<div class="sub-w3l">
							<div class="custom-control custom-checkbox mr-sm-2">
								<input type="checkbox" class="custom-control-input" id="customControlAutosizing2">
								<label class="custom-control-label" for="customControlAutosizing2">{{ __('message.acceptTheTerms') }}</label>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal -->
	<!-- //top-header -->

	<!-- header-bottom-->
    @include('client.layouts.header-bottom')
	<!-- shop locator (popup) -->
	<!-- //header-bottom -->
	<!-- navigation -->
    @include('client.layouts.menu')
	<!-- //navigation -->

	<!-- banner -->
    @yield('slide')
	<!-- //banner -->

	<!-- top Products -->
	<div class="ads-grid py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			@yield('content')
		</div>
	</div>
	<!-- //top products -->

	<!-- footer -->
	@include('client.layouts.footer')
</body>

</html>
