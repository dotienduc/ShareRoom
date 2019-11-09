@extends('front_end.layout.master')
@section('title')
Homeland &mdash; Colorlib Website Template
@endsection
@section('content')
<div class="select-wrap">
				<a href="{{ route('createRoom') }}"><input type="button" value="Thêm Bài Viết" style="background: green; color: white;"/></a>
				</div>s
<div class="site-section site-section-sm bg-light">
  
      <div class="container">
        <div class="row mb-5">
        @foreach($rooms as $key => $room) 
<div class="col-md-6 col-lg-4 mb-4">
    <div class="property-entry h-100" style="position:relative;">
    <div class="offer-type-wrap" style="position:absolute;">
        <a href="{{ route('destroyRoom', ['id' => $room->id]) }}"><input type="button" value="Xóa" class="offer-type bg-danger"></a>
        <a href="{{ route('showRoom', ['id' => $room->id]) }}">
        <input type="button" value="Sửa" class="offer-type bg-success"></a>
      </div>
      <a href="{{ route('room-detail', ['id' => $room->id]) }}" class="property-thumbnail">
        <img src="{{ asset('front_end/images/img_1.jpg') }}" alt="Image" class="img-fluid">
      </a>
      <div class="p-4 property-body">
        <h2 class="property-title"><a href="{{ route('room-detail', ['id' => $room->id]) }}">{{ $room->title }}</a></h2>
        <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span>{{ $room->address_detail }}</span>
        <strong class="property-price text-primary mb-3 d-block text-success">{{ number_format($room->price_per_month) }} VND/Tháng</strong>
        <ul class="property-specs-wrap mb-3 mb-lg-0">
          <li>
            <span class="property-specs">Giường</span>
            <span class="property-specs-number">{{ $room->bed }} <sup>+</sup></span>
            
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
</div>       
@endforeach 
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <div class="site-pagination">
              <a href="#" class="active">1</a>
              <a href="#">2</a>
              <a href="#">3</a>
              <a href="#">4</a>
              <a href="#">5</a>
              <span>...</span>
              <a href="#">10</a>
            </div>
          </div>  
        </div>
        
      </div>
    </div>
@endsection