<x-backend>
	<div class="main-content">
		<div class="section__content section__content--p30">
		    <div class="container-fluid">
		    	<div class="row">
					<div class="col-md-12 mb-2">
						<div class="overview-wrap">
							<h2 class="title-1">Food Order </h2>
							<a class="au-btn au-btn-icon au-btn--blue" href="{{ route('menu.index')}}">
								<i class="zmdi zmdi-plus"></i> Back </a>
						</div>
					</div>
				</div>
		        <div class="row">
		            <div class="col-lg-12">
		                <div class="card">
		                    <div class="card-header">
		                        <h3> Editing Menu </h3>
		                    </div>
		                    <form action="{{ route('menu.store')}}" method="POST" class="form-horizontal"  enctype="multipart/form-data">
			                    @csrf
			                    <div class="card-body card-block">
			                            <div class="row form-group">
			                                <div class="col col-md-3">
			                                    Name
			                                </div>
			                                <div class="col-12 col-md-9">
			                                    <input type="text" name="name" class="form-control" value="{{$menu->name}}">
			                                </div>
			                            </div>
			                            <div class="row form-group">
			                                <div class="col-12">
					                            <ul class="nav nav-tabs" id="myTab" role="tablist">
				                                  <li class="nav-item" role="presentation">
				                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#oldlogo" role="tab" aria-controls="home" aria-selected="true">Old Photo</a>
				                                  </li>
				                                  <li class="nav-item" role="presentation">
				                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#newlogo" role="tab" aria-controls="profile" aria-selected="false">New Photo</a>
				                                  </li>
				                                </ul>
				                            </div>
					                            <div class="tab-content mt-3" id="myTabContent">
				                                  <div class="tab-pane fade show active" id="oldlogo" role="tabpanel" aria-labelledby="home-tab">
				                                    <img src="{{ asset($menu->photo) }}" width="300" class="img-fluid ml-3">
				                                  </div>
				                                  <div class="tab-pane fade" id="newlogo" role="tabpanel" aria-labelledby="profile-tab">
				                                      <input type="file" name="photo" class="form-control-file ml-5">
				                                  </div>
				                                </div>
			                            </div>
			                            <div class="row form-group">
			                                <div class="col col-md-3">
			                                    Price
			                                </div>
			                                <div class="col-12 col-md-9">
			                                    <input type="text" name="price" class="form-control" value="{{ $menu->price}}">
			                                </div>
			                            </div>
			                            <div class="row form-group">
			                                <div class="col col-md-3">
			                                    Description
			                                </div>
			                                <div class="col-12 col-md-9">
			                                    <textarea class="form-control" name="description">{{$menu->description}}</textarea>
			                                </div>
			                            </div>
			                            <div class="row form-group">
			                                <div class="col col-md-3">
			                                    Restaurant
			                                </div>
			                                <div class="col-12 col-md-9">
			                                    <select name="restaurant_id" class="form-control col-4">
			                                    	<option> Choose Restaurant </option>
			                                    	@foreach($restaurants as $restaurant)
			                                    		<option value="{{ $restaurant->id}}" @if($menu->restaurant_id == $restaurant->id) {{'selected'}} @endif> {{ $restaurant->name }} </option>
			                                    	@endforeach
			                                    </select>
			                                </div>
			                            </div>
			                            <div class="row form-group">
		                                <div class="col col-md-3">
		                                    Category
		                                </div>
		                                <div class="col-12 col-md-9">
		                                    <select name="category_id" class="form-control col-4">
		                                    	<option> Choose Category </option>
		                                    	@foreach($categories as $category)
		                                    		<option value="{{ $category->id}}" @if($menu->category_id == $category->id) {{'selected'}} @endif> {{ $category->name }} </option>
		                                    	@endforeach
		                                    </select>
		                                </div>
		                            </div>
			                    </div>
			                    <div class="card-footer">
			                        <button type="submit" class="btn btn-dark btn-sm px-4 pt-2">
			                            Update
			                        </button>
			                    </div>
		                    </form>
		                </div>
		            </div>
		        </div>
		        <div class="row">
		            <div class="col-md-12">
		                <div class="copyright">
		                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
	</div>
</x-backend>