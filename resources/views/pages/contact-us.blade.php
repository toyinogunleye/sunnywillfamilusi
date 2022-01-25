@include('pages.layouts.header')
<!-- banner -->
<div class="inside-banner">
  <div class="container">
    <span class="pull-right"><a href="#">Home</a> / Contact Us</span>
    <h2>Contact Us</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="spacer">
<div class="row contact">
  <div class="col-lg-6 col-sm-6 ">
                <input type="text" class="form-control" placeholder="Full Name">
                <input type="text" class="form-control" placeholder="Email Address">
                <input type="text" class="form-control" placeholder="Contact Number">
                <textarea rows="6" class="form-control" placeholder="Message"></textarea>
      <button type="submit" class="btn btn-success" name="Submit">Send Message</button>




    </div>
  <div class="col-lg-6 col-sm-6 ">

    {{-- <p class="location"><span class="glyphicon glyphicon-map-marker"></span> property->address</p> --}}
  <div class="well">
       <h4>CORPORATE HEAD OFFICE</h4>
       <p><span class="glyphicon glyphicon-map-marker"></span> Plot 1709, Olugbosi Close,
        Off Bishop Oluwole Street,
        Victoria Island,
        Lagos, Nigeria.
        </p>

        <h4>IBADAN OFFICE</h4>
       <p><span class="glyphicon glyphicon-map-marker"></span> Plot 19, Road 5,
        Ajinde Estate,
        Oluyole Extension,
        Ibadan,
        Oyo State, Nigeria.
        </p>

        <h4>PHONE NUMBER</h4>
       <p><span class="glyphicon glyphicon-phone"></span>08023265590, 08035325701, 08033051320, 08076407690</p>

        <h4>EMAIL</h4>
       <p><span class="glyphicon glyphicon-envelope"></span> Sunnywillfamilusi@gmail.com</p>

    </div>
  </div>
</div>
</div>
</div>

@include('pages.layouts.footer')
