<!DOCTYPE html>
<html lang="en">

<head>
    <title>Đăng kí thành viên của cộng đồng chia sẻ phòng trọ</title>
    <!-- Meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Gadget Sign Up Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
    />
    <script>
        addEventListener("load", function () { setTimeout(hideURLbar, 0); }, false); function hideURLbar() { window.scrollTo(0, 1); }
    </script>
    <!-- Meta tags -->
    <!-- font-awesome icons -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!--stylesheets-->
    <link href="{{ asset('css/style.css') }}" rel='stylesheet' type='text/css' media="all">
    <!--//style sheet end here-->
    <link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
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
    <h1 class="error">Đăng kí thành viên</h1>
	<!---728x90--->
    <div class="w3layouts-two-grids">
	<!---728x90--->
        <div class="mid-class">
            <div class="img-right-side">
                <img src="{{ asset('front_end/images/b11.png') }}" class="img-fluid" alt="">
            </div>
            <div class="txt-left-side">
                <h2> Đăng kí ở đây </h2>
                <form action="{{ route('resgisterUser') }}" id="registration"
                 method="post" data-parsley-validate>
                 @csrf
                    <div class="form-left-to-w3l">
                        <span class="fa fa-user-o" aria-hidden="true"></span>
                        <input type="text" name="name" placeholder=" Name" required>

                        <div class="clear"></div>
                    </div>
                    <div class="form-left-to-w3l">
                        <span class="fa fa-phone" aria-hidden="true"></span>
                        <input type="text" name="phone" placeholder="Phone" required>

                        <div class="clear"></div>
                    </div>
                    <div class="form-left-to-w3l">
                        <span class="fa fa-envelope-o" aria-hidden="true"></span>
                        <input type="email" name="email" placeholder="Email" required>

                        <div class="clear"></div>
                    </div>
                    <div class="form-left-to-w3l ">

                        <span class="fa fa-lock" aria-hidden="true"></span>
                        <input type="password" name="password" placeholder="Password" required>
                        <div class="clear"></div>
                    </div>
                    <div class="btnn">
                        <button type="submit">Sign Up </button>
                    </div>
                </form>
                <div class="w3layouts_more-buttn">
                    <h3>Don't Have an account..?
                        <a href="#">Login Here
                        </a>
                    </h3>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
<script src="{{ asset('front_end/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('front_end/js/parsley.min.js') }}"></script>
<script src="{{ asset('front_end/js/custom_script.js') }}"></script>
<script src="js/sweetalert.min.js"></script>
</body>
</html>