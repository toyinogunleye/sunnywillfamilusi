@include('pages.layouts.header')
<!-- banner -->
<div class="inside-banner">
  <div class="container">
    <span class="pull-right"><a href="#">Home</a> / Buy</span>
    <h2>Buy</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="properties-listing spacer">

<div class="row">
<div class="col-lg-3 col-sm-4 hidden-xs">


{{-- <div class="hot-properties hidden-xs">
<h4>Hot Properties</h4>
@if (count($properties->images)>0)
@foreach ( $properties as $property )
<div class="row">
                <div class="col-lg-4 col-sm-5"><img src="/cover/{{$properties->cover_image}}" class="img-responsive img-circle" alt="properties"></div>
                <div class="col-lg-8 col-sm-7">
                  <h5><a href="property-detail.php">{{$properties->name}}</a></h5>
                  <p class="price">{{$properties->price}}</p>
                </div>
</div>
@endforeach
@endif
</div> --}}





<div class="advertisement">
  <h4>Cover Image</h4>
  <img src="/cover/{{$properties->cover_image}}" class="img-responsive" alt="advertisement">

</div>

</div>

<div class="col-lg-9 col-sm-8 ">
<h2>{{$properties->name}}</h2>
<div class="row">
  <div class="col-lg-8">
  <div class="property-images">
    <!-- Slider Starts -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators hidden-xs">
        @foreach($properties->images as $img)
        <li data-target="#myCarousel" data-slide-to="{{$loop->first ? 'active' : '' }}" class="active"></li>
        @endforeach
      </ol>
      <div class="carousel-inner">
        @foreach($properties->images as $img)
        <!-- Item 1 -->
        <div class="item {{$loop->first ? 'active' : '' }}">
          <img src="/images/{{$img->image}}" class="properties" style="height: 450px; width: 600px" alt="properties" />
        </div>
        @endforeach
        <!-- #Item 1 -->
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
<!-- #Slider Ends -->

  </div>




  <div class="spacer"><h4><span class="glyphicon glyphicon-th-list"></span> Properties Detail</h4>
  <p>{{$properties->description}}</p>

  </div>
  {{-- <div><h4><span class="glyphicon glyphicon-map-marker"></span> Location</h4>
<div class="well"><iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Pulchowk,+Patan,+Central+Region,+Nepal&amp;aq=0&amp;oq=pulch&amp;sll=37.0625,-95.677068&amp;sspn=39.371738,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=Pulchowk,+Patan+Dhoka,+Patan,+Bagmati,+Central+Region,+Nepal&amp;ll=27.678236,85.316853&amp;spn=0.001347,0.002642&amp;t=m&amp;z=14&amp;output=embed"></iframe></div>
  </div> --}}

  </div>
  <div class="col-lg-4">
  <div class="col-lg-12  col-sm-6">
<div class="property-info">
<p class="price">{{$properties->price}}</p>
<p class="area"><span class="glyphicon glyphicon-map-marker"></span>{{$properties->address}}</p>
<p class="area"><span class="glyphicon glyphicon-map-marker"></span>Type | {{$properties->type}}</p>
<p class="area"><span class="glyphicon glyphicon-map-marker"></span>Purpose | {{$properties->purpose}}</p>
<p class="area"><span class="glyphicon glyphicon-map-marker"></span>Bedroom | {{$properties->bedroom}}</p>
<p class="area"><span class="glyphicon glyphicon-map-marker"></span>Bathroom | {{$properties->bathroom}}</p>
<p class="area"><span class="glyphicon glyphicon-map-marker"></span>Area | {{$properties->area}}</p>

  {{-- <div class="profile">
  <span class="glyphicon glyphicon-user"></span> Agent Details
  <p>John Parker<br>009 229 2929</p>
  </div> --}}
</div>

    <h6><span class="glyphicon glyphicon-home"></span> Availabilty</h6>
    <div class="listing-detail">
    <span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">{{$properties->bedroom}}</span>
    <span data-toggle="tooltip" data-placement="bottom" data-original-title="Bath Room">{{$properties->bathroom}}</span>
    <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span>
    <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span>
</div>

</div>
<div class="col-lg-12 col-sm-6 ">
<div class="enquiry">
  <h6><span class="glyphicon glyphicon-envelope"></span> Post Enquiry</h6>
  <form role="form">
                <input type="text" class="form-control" placeholder="Full Name"/>
                <input type="text" class="form-control" placeholder="you@yourdomain.com"/>
                <input type="text" class="form-control" placeholder="your number"/>
                <textarea rows="6" class="form-control" placeholder="Whats on your mind?"></textarea>
      <button type="submit" class="btn btn-primary" name="Submit">Send Message</button>
      </form>
 </div>
</div>
  </div>
</div>
</div>
</div>
</div>
</div>

@include('pages.layouts.footer')
