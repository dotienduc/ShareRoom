<div class="site-loader"></div>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <div class="site-navbar mt-4">
        <div class="container py-1">
          <div class="row align-items-center">
            <div class="col-8 col-md-8 col-lg-4">
              <h1 class="mb-0"><a href="index.html" class="text-white h2 mb-0"><strong>ShareRoom<span class="text-danger">.</span></strong></a></h1>
            </div>
            <div class="col-4 col-md-4 col-lg-8">
              <nav class="site-navigation text-right text-md-right" role="navigation">

                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                <ul class="site-menu js-clone-nav d-none d-lg-block">
                  <li class="active">
                    <a href="{{ route('home') }}">Trang Chủ</a>
                  </li>
                  <li><a href="{{ route('favorite') }}">Bài Viết Quan Tâm</a></li>
                  @if(Auth::check())
                  <li><a href="{{ route('ownerRent', ['id' => Auth::user()['id']]) }}">Bài Viết Của {{ Auth::user()->name }}</a></li>
                  <li><a href="{{ route('logoutPage') }}">Đăng Xuất</a></li>
                  @else
                  <li><a href="{{ route('loginPage') }}">Đăng Nhập</a></li>
                  <li><a href="{{ route('showSignup') }}">Đăng Kí</a></li>
                  @endif
                </ul>
              </nav>
            </div>
           

          </div>
        </div>
      </div>
    </div>

    <div class="slide-one-item home-slider owl-carousel">

      <div class="site-blocks-cover overlay" style="background-image: url({{ asset('front_end/images/hero_bg_1.jpg') }});" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">
              <span class="d-inline-block bg-success text-white px-3 mb-3 property-offer-type rounded">Nhanh Chóng</span>
              <h1 class="mb-2">Chia Sẻ Phòng Để Bớt Lãng Phí</h1>
              <p class="mb-5"><strong class="h2 text-success font-weight-bold">Tiết Kiệm Và Tăng Thu Nhập </strong></p>
              <p><a href="#" class="btn btn-white btn-outline-white py-3 px-5 rounded-0 btn-2">^^</a></p>
            </div>
          </div>
        </div>
      </div>  

      <div class="site-blocks-cover overlay" style="background-image: url({{ asset('front_end/images/hero_bg_2.jpg') }});" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">
              <span class="d-inline-block bg-danger text-white px-3 mb-3 property-offer-type rounded">Tiện Ích</span>
              <h1 class="mb-2">Tìm Kiếm Phòng 1 Cách Tiện Lợi</h1>
              <p class="mb-5"><strong class="h2 text-success font-weight-bold">Không Lo Lông Nhông Tìm Phòng Nữa</strong></p>
              <p><a href="#" class="btn btn-white btn-outline-white py-3 px-5 rounded-0 btn-2">^^</a></p>
            </div>
          </div>
        </div>
      </div>  
    </div>