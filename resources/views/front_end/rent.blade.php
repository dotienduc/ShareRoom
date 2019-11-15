@extends('front_end.layout.master')
@section('title')
Homeland &mdash; Colorlib Website Template
@endsection
@section('content')
@include('front_end.partial.search')
<div class="site-section site-section-sm bg-light">
      <input type="hidden" id="checkIdUser" value="{{ Auth::user()->id }}"/>
      <div class="container">
        <div class="row mb-5">
       <div id="product-data">
         
       </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <div class="site-pagination">
            @for($i=1; $i<=$totalPage;$i++)
                <a href="#" class="page" id="{{ $i }}">{{ $i }}</a>
              @endfor
            </div>
          </div>  
        </div>
        
      </div>
    </div>
@endsection
@section('javascript')
<script src="{{ asset('front_end/js/load-data.js') }}"></script>
@endsection