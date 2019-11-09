@extends('front_end.layout.master')
@section('title')
Homeland &mdash; Colorlib Website Template
@endsection
@section('css')
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
@endsection
@section('content')
<div class="site-section site-section-sm">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div>
              <h2>Mẫu đăng kí phòng </h2>
            </div>
            <div class="bg-white property-body border-bottom border-left border-right">
            <form action="{{ route('storeRoom') }}" enctype="multipart/form-data" method="POST" data-parsley-validate id="form_create_room">
              @csrf
            <div class="form-group">
              <label >Tiêu đề :</label>
              <input type="text" class="form-control"  name="title" placeholder="Nhập tiêu đề" required>
            </div>
            <label for="exampleInputEmail1">Thông tin địa chỉ :</label>
            <div class="row">
            <div class="col-4 d-block">
            <select class="custom-select action" name="city" id="city" required>
            <option >Chọn thành phố</option>
          </select>
            </div><div class="col-4 d-block">
          <select class="custom-select action" name="district" id="district" required>
            <option >Chọn quận/huyện</option>
          </select></div><div class="col-4 d-block">
          <select class="custom-select" name="street" id="street" required>
            <option >Chọn đường</option>
          </select></div>
            </div>
            <div class="form-group">
              <label for="exampleInputtext1">Địa chỉ chi tiết :</label>
              <input type="text" class="form-control" name="address_detail"  required>
            </div>
            <label for="exampleInputEmail1">Thông tin phòng :</label>
            <div class="row">
              <div class="col-4">
              <label for="exampleInputtext1">Diện tích :</label>
              <input type="text" class="form-control" name="acreage"  required>
            </div>
            <div class="col-4">
              <label for="exampleInputtext1">Số tầng :</label>
              <input type="number" class="form-control" name="floor"  required>
            </div>
            <div class="col-4">
              <label for="exampleInputtext1">Đối tượng thuê :</label>
              <input type="text" class="form-control" name="tenant"  required>
            </div>
            </div>
            <div class="row">
              <div class="col-4">
              <label for="exampleInputtext1">Nội dung chú thích :</label>
              <input type="text" class="form-control" name="content"  required>
            </div>
            <div class="col-4">
              <label for="exampleInputtext1">Giá mỗi tháng :</label>
              <input type="number" class="form-control" name="price_per_month"  required>
            </div>
            <div class="col-4">
              <label for="exampleInputtext1">Số giường ngủ :</label>
              <input type="number" class="form-control" name="bed"  required>
            </div>
            </div>
            <div class="row">
              <div class="col-4">
              <label for="exampleInputtext1">Phòng tắm :</label>
              <input type="number" class="form-control" name="bathroom"  required>
            </div>
            <div class="col-3">
              <label for="exampleInputtext1">Số người ở :</label>
              <input type="number" class="form-control" name="amount" required>
            </div>
            <div class="col-5 p-4">
              <label >Chỗ để xe :</label>
              <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" checked name="parking" id="inlineRadio1" value="1">
              <label class="form-check-label" for="inlineRadio1">Có</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="parking" id="inlineRadio2" value="0">
              <label class="form-check-label" for="inlineRadio2">Không</label>
            </div>
            <label >Chung chủ :</label>
              <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" checked value="1" name="joint_owner" id="inlineRadio1">
              <label class="form-check-label">Có</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" value="0" name="joint_owner" id="inlineRadio2" >
              <label class="form-check-label">Không</label>
            </div>
            </div>
            
            </div>
            <div class="form-group">
              <label>Ảnh tượng trưng :</label>
              <input type="file" id="image" name="image" required>
            </div>
            </div>
            <div class="row mb-5">
            </div>
          </div>
          <div class="col-lg-4">

            <div class="bg-white widget border rounded" style="max-height:110vh; overflow-y: scroll;">

              <h3 class="h4 text-black widget-title mb-3">Loại phòng :</h3>
              <select class="custom-select" name="category" required>
              <option>Chọn loại phòng</option>
              @foreach($categories as $key => $category)
              <option value="{{ $category->id }}">{{ $category->category }}</option>
              @endforeach
            </select>
            <div class="form-group">
              <label for="exampleInputtext1">Giá nước/tháng :</label>
              <input type="text" class="form-control" name="water_price" required>
            </div>
            <div class="form-group">
              <label for="exampleInputtext1">Giá điện/tháng :</label>
              <input type="text" class="form-control" name="electricity_price" required>
            </div>
            <div class="form-group">
              <label for="exampleInputtext1">Năm xây dựng :</label>
              <input type="text" class="form-control" name="year_built" required>
            </div>
              
              <div class="form-group">
                <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
                </div>
            </div>

            <div class="bg-white widget border rounded">
              <h3 class="h4 text-black widget-title mb-3">Thông Tin liên Lạc</h3>
              <p>Số điện Thoại:</p>
			  <p>Người cho Thuê: </p>
			  <p>Email: </p>
            </div>

          </div>
          </form>
        </div>
      </div>
    </div>

    <div class="site-section site-section-sm bg-light">
      <div class="container">

        <div class="row">
          <div class="col-12">
            <div class="site-section-title mb-5">
           
            </div>
          </div>
        </div>
      
        
        </div>
      </div>
@endsection
@section('javascript')
<script src="{{ asset('front_end/js/parsley.min.js') }}"></script>
<script src="{{ asset('front_end/js/custom_script.js') }}"></script>
<script src="{{ asset('js/sweetalert.min.js') }}"></script>
<script src="{{ asset('front_end/js/load-data.js') }}"></script>
@endsection