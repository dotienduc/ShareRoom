<div class="row mb-5">
 @foreach($rooms as $key => $room) 
<div class="col-md-6 col-lg-4 mb-4">
    <div class="property-entry h-100">
      <input type="hidden" id="user_id" value="@if(Auth::check()) {{ Auth::user()->id }} @endif"
      <a href="{{ route('room-detail', ['id' => $room->id]) }}" class="property-thumbnail">
        <img src="{{ asset('front_end/images/img_1.jpg') }}" alt="Image" class="img-fluid">
      </a>
      <div class="p-4 property-body">
      @if(count($roomsFavorite) > 0)
        @foreach($roomsFavorite as $k => $r)
        @if($r->room_id != $room->id)
        <a href="{{ route('saveRoom', ['id' => $room->id ]) }}" class="property-favorite add-favorite"><span class="icon-heart-o"></span></a>
        @else
        <a href="{{ route('saveRoom', ['id' => $room->id ]) }}" class="property-favorite active add-favorite"><span class="icon-heart-o"></span></a>
        
        @endif
        @endforeach
      @else
      <a href="{{ route('saveRoom', ['id' => $room->id ]) }}" class="property-favorite add-favorite"><span class="icon-heart-o"></span></a>
      @endif
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
<script>
$(document).ready(function(){
  $('.add-favorite').click(function (e){
      if($('#user_id').val() == "")
      {
        e.preventDefault();
        swal({
            title: "Xin lỗi!",
            text: "Bạn phải đăng nhập mới có thể lưu phòng yêu thích ^^",
            timer: 4000,
            showConfirmButton: false,
            type: "error"
        });
      }
    });
});
</script>