<div class="site-section site-section-sm pb-0">
      <div class="container">
        <div class="row">
          <form class="form-search col-md-12" style="margin-top: -100px;">
            <div class="row  align-items-end">
              <div class="col-md-3">
                <label for="list-types">Tỉnh/Thành Phố</label>
                <div class="select-wrap">
                  <span class="icon icon-arrow_drop_down"></span>
                  <select name="list-types" id="city" class="form-control d-block rounded-0 action">
                    <option value="">Chọn thành phố</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <label for="offer-types">Quận/Huyện</label>
                <div class="select-wrap">
                  <span class="icon icon-arrow_drop_down"></span>
                  <select name="offer-types" id="district" class="form-control d-block rounded-0 action">
                    <option value="">Chọn quận</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <label for="select-city">Đường</label>
                <div class="select-wrap">
                  <span class="icon icon-arrow_drop_down"></span>
                  <select name="select-city" id="street" class="form-control d-block rounded-0">
                  <option value="">Chọn đường</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <input type="submit" class="btn btn-success text-white btn-block rounded-0" value="Search">
              </div>
            </div>
          </form>
        </div>  
        <div class="row">
          <div class="col-md-12">
            <div class="view-options bg-white py-3 px-3 d-md-flex align-items-center">
              <div class="mr-auto">
                <a href="index.html" class="icon-view view-module active"><span class="icon-view_module"></span></a>
                <a href="view-list.html" class="icon-view view-list"><span class="icon-view_list"></span></a>
                
              </div>
              <div class="ml-auto d-flex align-items-center">
                <div>
                  <a href="#" class="view-list px-3 border-right active">All</a>
                  <a href="#" class="view-list px-3 border-right">Rent</a>
                  <a href="#" class="view-list px-3">Sale</a>
                </div>


                <div class="select-wrap">
                  <span class="icon icon-arrow_drop_down"></span>
                  <select class="form-control form-control-sm d-block rounded-0">
                    <option value="">Sort by</option>
                    <option value="">Giá</option>
                    <option value="">Diện Tích</option>
					<option value="">Ngày Đăng</option>
                  </select>
                </div>
                @if(Route::input('id'))
                <div class="select-wrap">
                <input type="button" value="Thêm Bài Viết" style="background: green; color: white;"/>
                </div>
                @endif
              </div>
            </div>
          </div>
        </div>
       
      </div>
    </div>