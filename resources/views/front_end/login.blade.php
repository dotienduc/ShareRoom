<!DOCTYPE html>
<html>
<head>
<title>Đăng nhập</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Slide Login Form template Responsive, Login form web template, Flat Pricing tables, Flat Drop downs Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

<script>
addEventListener("load", function () {
    setTimeout(hideURLbar, 0);
}, false);

function hideURLbar() {
    window.scrollTo(0, 1);
}
</script>

<!-- Custom Theme files -->
<link href="{{ asset('front_end/css/login/style.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('front_end/css/login/font-awesome.min.css') }}" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->

<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
<!-- //web font -->
<style>
input.parsley-success,
select.parsley-success,
textarea.parsley-success {
  color: #468847;
  background-color: #DFF0D8;
  border: 1px solid #D6E9C6;
}

input.parsley-error,
select.parsley-error,
textarea.parsley-error {
  color: #B94A48;
  background-color: #F2DEDE;
  border: 1px solid #EED3D7;
}

.parsley-errors-list {
  margin: 2px 0 3px;
  padding: 0;
  list-style-type: none;
  font-size: 0.9em;
  line-height: 0.9em;
  opacity: 0;
  color: #B94A48;

  transition: all .3s ease-in;
  -o-transition: all .3s ease-in;
  -moz-transition: all .3s ease-in;
  -webkit-transition: all .3s ease-in;
}

.parsley-errors-list.filled {
  opacity: 1;
}
</style>
</head>
<body>

<!-- main -->
<div class="w3layouts-main"> 
	<div class="bg-layer">
		<h1>Đăng nhập</h1>
		<div class="header-main">
			<div class="main-icon">
				<span class="fa fa-eercast"></span>
			</div>
			<div class="header-left-bottom">
				<form action="{{ url('login') }}" id="login" method="post" data-parsley-validate>
                    @csrf
					<div class="icon1">
						<span class="fa fa-user"></span>
						<input type="email" name="email" placeholder="Nhập email" required/>
					</div>
					<div class="icon1">
						<span class="fa fa-lock"></span>
						<input type="password" name="password" placeholder="Nhập mật khẩu" required/>
					</div>
					<div class="login-check">
						 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Nhớ mật khẩu</label>
					</div>
					<div class="bottom">
						<button class="btn">Đăng nhập</button>
					</div>
				</form>	
			</div>
		</div>
	</div>
</div>	
<script src="{{ asset('front_end/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('front_end/js/parsley.min.js') }}"></script>
<script src="{{ asset('front_end/js/custom_script.js') }}"></script>
<script src="js/sweetalert.min.js"></script>
@include('sweet::alert')
</body>
</html>