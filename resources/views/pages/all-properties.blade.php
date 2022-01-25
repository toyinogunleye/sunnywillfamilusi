@include('pages.layouts.header')
<!-- banner -->
<div class="inside-banner">
  <div class="container">
    <span class="pull-right"><a href="/">Home</a> / Buy, Sale & Rent</span>
    <h2>Buy, Sale & Rent</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="properties-listing spacer">

<div class="row">
<div class="col-lg-3 col-sm-4 ">

  <div class="search-form"><h4><span class="glyphicon glyphicon-search"></span> Search for</h4>
    <input type="text" class="form-control" placeholder="Search of Properties">
    <div class="row">
            <div class="col-lg-5">
              <select class="form-control">
                <option>Buy</option>
                <option>Rent</option>
                <option>Sale</option>
              </select>
            </div>
            <div class="col-lg-7">
              <select class="form-control">
                <option>Price</option>
                <option>N150,000 - N200,000</option>
                <option>N200,000 - N250,000</option>
                <option>N250,000 - N300,000</option>
                <option>N300,000 - above</option>
              </select>
            </div>
          </div>

          <div class="row">
          <div class="col-lg-12">
              <select class="form-control">
                <option>Property Type</option>
                <option>Apartment</option>
                <option>Building</option>
                <option>Office Space</option>
              </select>
              </div>
          </div>
          <button class="btn btn-primary">Find Now</button>

  </div>



<div class="hot-properties hidden-xs">
<h4>Hot Properties</h4>
@foreach ($properties as $property )
<div class="row">
                <div class="col-lg-4 col-sm-5"><img src="cover/{{$property->cover_image}}" class="img-responsive img-circle" alt="properties"></div>
                <div class="col-lg-8 col-sm-7">
                  <h5><a href="property-detail/{{$property->id}}">{{$property->name}}</a></h5>
                  <p class="price">{{$property->price}}</p>
                </div>
</div>
@endforeach

</div>


</div>

<div class="col-lg-9 col-sm-8">
<div class="sortby clearfix">
{{-- <div class="pull-left result">Showing: 12 of 100 </div> --}}
  <div class="pull-right">
  <select class="form-control">
  <option>Sort by</option>
  <option>Price: Low to High</option>
  <option>Price: High to Low</option>
</select>
</div>

</div>
<div class="row">
    <!-- properties -->
    @foreach ($properties as $property )
        <div class="col-lg-4 col-sm-6">

        <div class="properties">
          <div class="image-holder"><img src="cover/{{$property->cover_image}}" class="img-responsive" alt="properties">
            <div class="status sold">{{$property->purpose}}</div>
          </div>
          <h4><a href="property-detail/{{$property->id}}">{{$property->name}}</a></h4>
          <p class="price">Type: {{$property->type}}</p>
          <p class="price">Price: {{$property->price}}</p>
          <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
          <a class="btn btn-primary" href="/property-detail/{{$property->id}}">View Details</a>
        </div>

        </div>
        @endforeach
        <!-- properties -->



      <!-- properties -->
      {{-- <div class="center">
<ul class="pagination">
          <li><a href="#">«</a></li>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#">»</a></li>
        </ul>
</div> --}}

</div>
</div>
</div>
</div>
</div>

@include('pages.layouts.footer')
