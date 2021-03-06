<x-frontend>
	<section class="hero pb-3 bg-cover bg-center d-flex align-items-center" style="background: url(Frontend/img/banner.jpg)">
          <div class="container py-5">
            <div class="row px-4 px-lg-5">
              <div class="col-lg-6">
                <p class="text-muted small text-uppercase mb-2">Taste that you love</p>
                <h2 class="h3 text-uppercase mb-3">Good Food is Good Mood</h2><!-- <a class="btn btn-dark" href="shop.html">Browse collections</a> -->
              </div>
            </div>
          </div>
    </section>
	<section class="pt-5">
	  <header class="text-center">
	    <p class="small text-muted small text-uppercase mb-1">Carefully created collections</p>
	    <h2 class="h5 text-uppercase mb-4">Featured Restaurants</h2>
	  </header>

	  
	  <div class="container">
	  	<div class="row">
	  	@foreach($restaurants as $restaurant)
	    <div class="col-md-4 mb-4 mb-md-0">
	      <a class="category-item mb-4" href="{{ route('detail', $restaurant->id)}}">
	        <img class="img-fluid" src="{{$restaurant->logo}}" alt="" style="width: 100%; height: 250px;">
	        <strong class="category-item-title">{{ $restaurant->name }}</strong>
	      </a>
	    </div>
	  @endforeach

{{-- 	    <div class="col-md-4 mb-4 mb-md-0">
	      <a class="category-item mb-4" href="shop.html">
	        <img class="img-fluid" src="{{asset('Frontend/img/cat-img-2.jpg')}}" alt="">
	        <strong class="category-item-title">Korean</strong>
	      </a>
	    </div>
	    <div class="col-md-4 mb-4 mb-md-0">
	      <a class="category-item mb-4" href="shop.html">
	        <img class="img-fluid" src="{{asset('Frontend/img/cat-img-2.jpg')}}" alt="">
	        <strong class="category-item-title">Korean</strong>
	      </a>
	    </div> --}}


	  </div>
	  </div>
	</section>
</x-frontend>