<x-frontend> 
     <section class="py-5 bg-light">
      <div class="container">
        <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
          <div class="col-lg-3">
            <img src="{{ asset($restaurant->logo) }}" style="height: 200px; border-radius: 50%;" class="img-fluid">
          </div>
          <div class="col-lg-6">
            <h3 class="h4 text-uppercase mb-0">{{ $restaurant->name }} </h3>
            <p class="text-muted mb-0">Opening hours: {{ $restaurant->opening_time}}</p>
            <p class="text-muted mb-0">Opening day: {{$restaurant->opening_day}}</p>
            <p class="text-muted mb-0">Esitmated delivery time: {{$restaurant->deliver_time}}</p>
          </div>
          <div class="col-lg-3 text-lg-right">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-lg-end mb-0 px-0">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Shop</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section>
    <div class="container p-0 mt-5">
      <div class="row">
        <!-- SHOP SIDEBAR-->
        <div class="col-lg-3 order-2 order-lg-1">
         {{--  <h5 class="text-uppercase mb-4">Categories</h5> --}}
          <div class="py-2 px-4 bg-dark text-white mb-3"><strong class="small text-uppercase font-weight-bold">Categories</strong></div>
          <ul class="list-unstyled small text-muted pl-lg-4 font-weight-normal">
            @foreach($restaurant->categories as $category)
              <li class="mb-2">
                <a class="reset-anchor btnCategory" data-id="{{$category->id}}" data-name="{{$restaurant->id}}">{{$category->name}}</a>
              </li>
            @endforeach
          </ul>
        </div>
        <!-- SHOP LISTING-->
        <div class="col-lg-9 order-1 order-lg-2 mb-5 mb-lg-0">
          <div class="row mb-5 align-items-center">
{{--             <div class="col-lg-6 mb-2 mb-lg-0">
              <p class="text-small text-muted mb-0">Showing 1–12 of 53 results</p>
            </div>
            <div class="col-lg-6">
              <ul class="list-inline d-flex align-items-center justify-content-lg-end mb-0">
                <li class="list-inline-item text-muted mr-3"><a class="reset-anchor p-0" href="#"><i class="fas fa-th-large"></i></a></li>
                <li class="list-inline-item text-muted mr-3"><a class="reset-anchor p-0" href="#"><i class="fas fa-th"></i></a></li>
                <li class="list-inline-item">
                  <select class="selectpicker ml-auto" name="sorting" data-width="200" data-style="bs-select-form-control" data-title="Default sorting">
                    <option value="default">Default sorting</option>
                    <option value="popularity">Popularity</option>
                    <option value="low-high">Price: Low to High</option>
                    <option value="high-low">Price: High to Low</option>
                  </select>
                </li>
              </ul>
            </div> --}}
          </div>
          <div class="row">
            <!-- PRODUCT-->
            @foreach($menus as $menu)
              <div class="col-lg-4 col-sm-6" id="AllMenu">
                <div class="product text-center">
                  <div class="mb-3 position-relative">
                    <div class="badge text-white badge-"></div><a class="d-block" href="detail.html"><img class="img-fluid w-100" src="{{asset($menu->photo)}}" style="height: 150px;"></a>
                    <div class="product-overlay">
                      <ul class="mb-0 list-inline">
                        <li class="list-inline-item m-0 p-0">
                          <a class="btn btn-sm btn-outline-dark" href="#">
                            <i class="far fa-heart"></i>
                          </a>
                        </li>
                        <li class="list-inline-item m-0 p-0">
                          <a class="btn btn-sm btn-dark" href="#" data-id="{{$menu->id}}" data-name="{{$menu->name}}" data-price="{{$menu->price}}" data-photo="{{$menu->photo}}" data-codeno="{{$menu->codeno}}">Add to cart</a>
                        </li>
                        <li class="list-inline-item mr-0">
                          <a class="btn btn-sm btn-outline-dark" href="{{ route('idetail', $menu->id) }}">
                            <i class="fas fa-expand"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <h6> <a class="reset-anchor" href="detail.html"> {{ $menu->name }}</a></h6>
                  <p class="small text-muted"> {{$menu->price}} Kyats </p>
                </div>
              </div>
            @endforeach
            <div class="col-lg-4 col-sm-6" id="CategoryMenu">

            </div>
          </div>
          <!-- PAGINATION-->
          <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center justify-content-lg-end">
              <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
</x-frontend>