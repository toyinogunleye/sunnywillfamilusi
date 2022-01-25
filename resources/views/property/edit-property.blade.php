@extends('layouts.app')
@section('content')

    <div class="container" style="margin-top: 50px">
        <div class="row">

            <div class="col-lg-3">
                <p>Cover Image:</p>
                <form action="/property/deletecoverimage/{{$properties->id}}" method="post">
                <button class="btn text-danger">X</button>
                @csrf
                @method('delete')
                </form>
                <img src="/cover/{{$properties->cover_image}}" class="img-responsive" style="max-height: 100px; max-width:100px"  alt="">
                <tr>

                @if (count($properties->images)>0)
                    <p>Images:</p>
                    @foreach($properties->images as $img)
                    <form action="/property/deleteimage/{{$img->id}}" method="post">
                        <button class="btn text-danger">X</button>
                        @csrf
                        @method('delete')
                        </form>
                    <img src="/images/{{$img->image}}" class="img-responsive" style="max-height: 100px; max-width: 100px"  alt="">
                    @endforeach
                @endif

            </div>


                <div class="col-lg-6">
                    <h1 class="text-center text-danger">Update Property</h1>
                    <div class="form group">
                        <form action="/property/update/{{$properties->id}}" method="POST" enctype="multipart/form-data" class="row g-3">
                            @csrf
                            @method("put")
                            <div class="col-12">
                                <label for="inputName" class="form-label">Property Name</label>
                                <input type="text" name="name" class="form-control" id="inputAddress" placeholder="name" value="{{$properties->name}}">
                            </div>
                            <div class="col-md-6">
                                <label for="inputType" class="form-label">Type</label>
                                <select id="inputState" name="type" class="form-select">
                                  <option selected>{{$properties->type}}</option>
                                  <option value="building">Building</option>
                                  <option value="apartment">Apartment</option>
                                  <option value="warehouse">Warehouse</option>
                                  <option value="land">Land</option>
                                </select>
                              </div>
                              <div class="col-md-6">
                                <label for="inputState" class="form-label">Purpose</label>
                                <select id="inputState" name="purpose" class="form-select">
                                    <option selected>{{$properties->purpose}}</option>
                                    <option value="sale">Sale</option>
                                    <option value="rent">Rent</option>
                                    <option value="lease">Lease</option>
                                </select>
                              </div>
                              <div class="col-12">
                                <label for="inputName" class="form-label">Price</label>
                                <input type="text" name="price" class="form-control" id="inputAddress" placeholder="price" value="{{$properties->price}}">
                            </div>
                            <div class="col-md-4">
                              <label for="inputBedroom" class="form-label">Bedroom</label>
                              <input type="text" name="bedroom" class="form-control" id="inputEmail4" value="{{$properties->bedroom}}">
                            </div>
                            <div class="col-md-4">
                              <label for="inputBathroom" class="form-label">Bathroom</label>
                              <input type="text" name="bathroom" class="form-control" id="inputPassword4" value="{{$properties->bathroom}}">
                            </div>
                            <div class="col-md-4">
                                <label for="inputArea" class="form-label">Area</label>
                                <input type="text" name="area" class="form-control" id="inputPassword4" value="{{$properties->area}}">
                              </div>

                            <div class="col-md-6">
                              <label for="inputCity" class="form-label">City</label>
                              <input type="text" name="city" class="form-control" id="inputCity" value="{{$properties->city}}">
                            </div>
                            <div class="col-md-6">
                                <label for="inputState" class="form-label">State</label>
                                <input type="text" name="state" class="form-control" id="inputCity" value="{{$properties->state}}">
                              </div>
                              <div class="col-12">
                                <label for="inputAddress2" class="form-label">Address</label>
                                <input type="text" name="address" class="form-control" id="inputAddress2" placeholder="Enter address" value="{{$properties->address}}">
                              </div>

                              <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3">{{$properties->description}}</textarea>
                              </div>

                              <div class="mb-3">
                                <label for="formFile" class="form-label">Cover Image</label>
                                <input class="form-control" name="cover_image" type="file" id="formFile">
                              </div>
                              <div class="mb-3">
                                <label for="formFileMultiple" class="form-label">Property Images</label>
                                <input class="form-control" name="images[]" type="file" id="formFileMultiple" multiple>
                              </div>

                            {{-- <div class="col-md-4">
                              <label for="inputState" class="form-label">State</label>
                              <select id="inputState" class="form-select">
                                <option selected>Choose...</option>
                                <option>...</option>
                              </select>
                            </div> --}}
                            {{-- <div class="col-md-2">
                              <label for="inputZip" class="form-label">Zip</label>
                              <input type="text" class="form-control" id="inputZip">
                            </div> --}}
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary" type="submit">Submit</button>
                              </div>

                            </div>
                          </form>
                    </div>


                </div>



        </div>

    </div>
    @endsection

