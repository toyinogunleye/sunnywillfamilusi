@include('pages.layouts.header')

<div class="">


            <div id="slider" class="sl-slider-wrapper">

        <div class="sl-slider">
            @foreach ($properties as $property )
            <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                <div class="sl-slide-inner">
                  <div class="bg-img bg-img-1" style="background-image: url('cover/{{$property->cover_image}}');"></div>
                  <h2><a href="#">{{$property->name}}</a></h2>
                  <blockquote>
                  <p class="location"><span class="glyphicon glyphicon-map-marker"></span> {{$property->address}}</p>
                  <p>{{$property->description}}</p>
                  <cite>{{$property->purpose}} | {{$property->price}}</cite>
                  </blockquote>
                </div>
              </div>
            @endforeach
        </div><!-- /sl-slider -->
        <nav id="nav-dots" class="nav-dots">
            @foreach ($properties as $property)
            <span class="{{$loop->first ? 'nav-dot-current' : '' }}"></span>
            @endforeach

        </nav>
      </div><!-- /slider-wrapper -->
</div>

<!-- banner -->
<div class="container">
  <div class="properties-listing spacer"> <a href="/all-properties" class="pull-right viewall">View All Listing</a>
    <h2>Featured Properties</h2>
    <div id="owl-example" class="owl-carousel">
        @foreach ($properties as $property)
        <div class="properties">
            <div class="image-holder"><img src="cover/{{$property->cover_image}}" class="img-responsive" alt="properties"/></div>
            <h4><a href="property-detail/{{$property->id}}">{{$property->name}}</a></h4>
            <p class="price">Price: {{$property->price}}</p>
            <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">{{$property->bedroom}}</span>
                 <span data-toggle="tooltip" data-placement="bottom" data-original-title="bath Room">{{$property->bathroom}}</span>
                 <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span>
                 <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
            <a class="btn btn-primary" href="property-detail/{{$property->id}}">View Details</a>
          </div>
        @endforeach
    </div>
  </div>
  <div class="spacer">
    <div class="row">
      <div class="col-lg-6 col-sm-9 recent-view">
        <h3>About Us</h3>
        <p>We are full-serviced real estate company, providing property valuation, Project appraisal, Property Development,
            Rental property supervision and management, from rent collection, tenant relations, evictions and mortgage and
            bill payments to disaster protection and property maintenance etc.
            <br><a href="/about-us">Learn More</a></p>
      </div>
      <div class="col-lg-5 col-lg-offset-1 col-sm-3 recommended">
        <h3>Recommended Properties</h3>
        <div id="myCarousel" class="carousel slide">
          <ol class="carousel-indicators">
              @foreach ($properties as $property)
              <li data-target="#myCarousel" data-slide-to="{{$loop->first ? 'nav-dot-current' : '' }}" class="active"></li>
              @endforeach
          </ol>

          <!-- Carousel items -->
          <div class="carousel-inner">
              @foreach ($properties as $property)
            <div class="item {{$loop->first ? 'active' : '' }}">
                <div class="row">
                  <div class="col-lg-4"><img src="cover/{{$property->cover_image}}" class="img-responsive" alt="properties"/></div>
                  <div class="col-lg-8">
                    <h5><a href="property-detail/{{$property->id}}">{{$property->name}}</h5>
                    <p class="price">{{$property->price}}</p>
                    <a href="/property/{{$property->id}}" class="more">More Detail</a>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@include('pages.layouts.footer')
