@extends('front_end.layout.master')
@section('title')
Homeland &mdash; Colorlib Website Template
@endsection
@section('content')
<div class="site-section site-section-sm">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div>
              <div class="slide-one-item home-slider owl-carousel">
                <div><img src="{{ asset('front_end/images/hero_bg_1.jpg') }}" alt="Image" class="img-fluid"></div>
                <div><img src="{{ asset('front_end/images/hero_bg_2.jpg') }}" alt="Image" class="img-fluid"></div>
                <div><img src="{{ asset('front_end/images/hero_bg_3.jpg') }}" alt="Image" class="img-fluid"></div>
              </div>
            </div>
            <div class="bg-white property-body border-bottom border-left border-right">
              <div class="row mb-5">
                <div class="col-md-6">
                  <strong class="text-success h1 mb-3">{{ number_format($room->price_per_month) }} VND/Tháng</strong>
                </div>
                <div class="col-md-6">
                  <ul class="property-specs-wrap mb-3 mb-lg-0  float-lg-right">
                  <li>
                    <span class="property-specs">Giường</span>
                    <span class="property-specs-number">{{ $room->bed }}<sup>+</sup></span>
                    
                  </li>
                  <li>
                    <span class="property-specs">Phòng tắm</span>
                    <span class="property-specs-number">{{ $room->bathroom }}</span>
                    
                  </li>
                  <li>
                    <span class="property-specs">Diện tích</span>
                    <span class="property-specs-number">{{ $room->acreage }}</span>  
                  </li>
				  <li>
                    <span class="property-specs">Tầng</span>
                    <span class="property-specs-number">{{ $room->floor }}</span>  
                  </li>
				  <li>
                    <span class="property-specs">Số người</span>
                    <span class="property-specs-number">{{ $room->amount }}</span>  
                  </li>
				  <li>
                    <span class="property-specs">Chỗ để xe</span>
                    @if($room->parking)
                    <span class="property-specs-number">Có</span> 
                    @else
                    <span class="property-specs-number">Không</span> 
                    @endif 
                  </li>
				  <li>
                    <span class="property-specs">Chung chủ</span>
                    @if($room->joint_owner)
                    <span class="property-specs-number">Có</span>  
                    @else
                    <span class="property-specs-number">Không</span>  
                    @endif
                  </li>
                </ul>
                </div>
              </div>
              <div class="row mb-5">
                <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text">Kiểu</span>
                  <strong class="d-block">{{ $categoryRoom }}</strong>
                </div>
                <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text">Xây Dựng</span>
                  <strong class="d-block">{{ $room->year_built }}</strong>
                </div>
                <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text">Giá nước/Khối</span>
                  <strong class="d-block">{{ number_format($room->water_price) }} VND</strong>
                </div>
				<div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text">Giá điện/Số</span>
                  <strong class="d-block">{{ number_format($room->electricity_price) }} VND</strong>
                </div>
              </div>
              <h2 class="h4 text-black">Thông tin chi tiết</h2>
              <p>{{ $room->content }}</p>

              <div class="row no-gutters mt-5">
                <div class="col-12">
                  <h2 class="h4 text-black mb-3">Ảnh</h2>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                  <a href="{{ asset('front_end/images/img_1.jpg') }}" class="image-popup gal-item"><img src="{{ asset('front_end/images/img_1.jpg') }}" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                  <a href="{{ asset('front_end/images/img_2.jpg') }}" class="image-popup gal-item"><img src="{{ asset('front_end/images/img_2.jpg') }}" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                  <a href="{{ asset('front_end/images/img_3.jpg') }}" class="image-popup gal-item"><img src="{{ asset('front_end/images/img_3.jpg') }}" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                  <a href="{{ asset('front_end/images/img_4.jpg') }}" class="image-popup gal-item"><img src="{{ asset('front_end/images/img_4.jpg') }}" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                  <a href="{{ asset('front_end/images/img_5.jpg') }}" class="image-popup gal-item"><img src="{{ asset('front_end/images/img_5.jpg') }}" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                  <a href="{{ asset('front_end/images/img_6.jpg') }}" class="image-popup gal-item"><img src="{{ asset('front_end/images/img_6.jpg') }}" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                  <a href="{{ asset('front_end/images/img_7.jpg') }}" class="image-popup gal-item"><img src="{{ asset('front_end/images/img_7.jpg') }}" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                  <a href="{{ asset('front_end/images/img_8.jpg') }}" class="image-popup gal-item"><img src="{{ asset('front_end/images/img_8.jpg') }}" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                  <a href="{{ asset('front_end/images/img_1.jpg') }}" class="image-popup gal-item"><img src="{{ asset('front_end/images/img_1.jpg') }}" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                  <a href="{{ asset('front_end/images/img_2.jpg') }}" class="image-popup gal-item"><img src="{{ asset('front_end/images/img_2.jpg') }}" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                  <a href="{{ asset('front_end/images/img_3.jpg') }}" class="image-popup gal-item"><img src="{{ asset('front_end/images/img_3.jpg') }}" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                  <a href="{{ asset('front_end/images/img_4.jpg') }}" class="image-popup gal-item"><img src="{{ asset('front_end/images/img_4.jpg') }}" alt="Image" class="img-fluid"></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">

            <div class="bg-white widget border rounded" style="max-height:110vh; overflow-y: scroll;">

              <h3 class="h4 text-black widget-title mb-3">Bình luận</h3>
              <div id="display-comment">
              </div>
              <input type="hidden" id="load-comment" value="{{ route('loadComment') }}"/>
                <input type="hidden" id="room" value="{{ $room->id }}"/>
              <form method="POST" id="comment_form" action="{{ route('comment') }}" data-parsley-validate>
                <div class="form-group">
                <input type="text" name="comment_name" id="comment_name" class="form-control" placeholder="Enter Name" required/>
                </div>
                <div class="form-group">
                <textarea name="comment_content" id="comment_content" class="form-control" placeholder="Enter Comment" rows="3" required></textarea>
                </div>
                <div class="form-group">
                <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
                </div>
              </form>
            </div>

            <div class="bg-white widget border rounded">
              <h3 class="h4 text-black widget-title mb-3">Thông Tin liên Lạc</h3>
              <p>Số điện Thoại: {{ $ownerRoom->phone_number }}</p>
			  <p>Người cho Thuê: {{ $ownerRoom->name }}</p>
			  <p>Email: {{ $ownerRoom->email }}</p>
            </div>

          </div>
          
        </div>
      </div>
    </div>

    <div class="site-section site-section-sm bg-light">
      <div class="container">

        <div class="row">
          <div class="col-12">
            <div class="site-section-title mb-5">
            @if(count($roomRelation) > 0)
              <h2>Phòng lân cận</h2>
            @endif
            </div>
          </div>
        </div>
      
        <div class="row mb-5">
          @foreach($roomRelation as $key => $room)
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="property-entry h-100">
              <a href="{{ route('room-detail', ['id' => $room->id]) }}" class="property-thumbnail">
                <img src="{{ asset('front_end/images/img_2.jpg') }}" alt="Image" class="img-fluid">
              </a>
              <div class="p-4 property-body">
                <a href="#" class="property-favorite active"><span class="icon-heart-o"></span></a>
                <h2 class="property-title"><a href="{{ route('room-detail', ['id' => $room->id]) }}">{{ $room->title }}</a></h2>
                <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span>{{ $room->address_detail }}</span>
                <strong class="property-price text-primary mb-3 d-block text-success">{{ number_format($room->price_per_month) }} VND</strong>
                <ul class="property-specs-wrap mb-3 mb-lg-0">
                  <li>
                    <span class="property-specs">Giường</span>
                    <span class="property-specs-number">{{ $room->bed }}<sup>+</sup></span>
                    
                  </li>
                  <li>
                    <span class="property-specs">Phòng tắm</span>
                    <span class="property-specs-number">{{ $room->bathroom }}</span>
                    
                  </li>
                  <li>
                    <span class="property-specs">Diện tích</span>
                    <span class="property-specs-number">{{ $room->acreage }}</span>  
                  </li>
				  <span>
                    <span class="property-specs">Tầng</span>
                    <span class="property-specs-number">{{ $room->floor }}</span>  
                  </li>
				  <li>
                    <span class="property-specs">Số người</span>
                    <span class="property-specs-number">{{ $room->amount }}</span>  
                  </li>
				  <li>
                    <span class="property-specs">Chỗ để xe</span>
                    @if($room->parking)
                    <span class="property-specs-number">Có</span> 
                    @else
                    <span class="property-specs-number">Không</span> 
                    @endif 
                  </li>
				  <li>
                    <span class="property-specs">Chung chủ</span>
                    @if($room->joint_owner)
                    <span class="property-specs-number">Có</span>  
                    @else
                    <span class="property-specs-number">Không</span>  
                    @endif
                  </li>
                </ul>

              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
@endsection
@section('javascript')
<script src="{{ asset('front_end/js/parsley.min.js') }}"></script>
<script src="{{ asset('front_end/js/custom_script.js') }}"></script>
<script src="{{ asset('js/sweetalert.min.js') }}"></script>
@endsection