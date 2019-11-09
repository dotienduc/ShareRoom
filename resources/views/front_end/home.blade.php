@extends('front_end.layout.master')
@section('title')
Homeland &mdash; Colorlib Website Template
@endsection
@section('content')
@include('front_end.partial.search')
<div class="site-section site-section-sm bg-light">
      <div class="container">
        <div id="product-data">

</div>
          
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
      </div>
    </div>
@endsection
@section('javascript')
<script src="{{ asset('front_end/js/load-data.js') }}"></script>
<script src="js/sweetalert.min.js"></script>
@endsection