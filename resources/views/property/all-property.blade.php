@extends('layouts.app')
@section('content')

    <div class="container" style="margin-top: 50px">
        <h1 class="text-center text-danger"><b>All Properties</b></h1>
        <a href="/add-property/" class="btn btn-outline-success">Add new Property</a>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">S/N</th>
                <th scope="col">Name</th>
                <th scope="col">Type</th>
                <th scope="col">Purpose</th>
                <th scope="col">Price</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>

                @foreach ($properties as $property)
                <tr>
                    <th scope="row">{{$property->id}}</th>
                    <td>{{$property->name}}</td>
                    <td>{{$property->type}}</td>
                    <td>{{$property->purpose}}</td>
                    <td>{{$property->price}}</td>
                    <td><img src="cover/{{$property->cover_image}}" class="img-responsive" style="max-height: 100px; max-width: 100px" alt=""></td>
                    <td><a href="/show/{{$property->id}}" class="btn btn-outline-primary">Show</a></td>
                    <td><a href="/property/edit/{{$property->id}}" class="btn btn-outline-primary">Update</a></td>
                    <td>
                        <form action="/property/delete/{{$property->id}}" method="post">
                            <button class="btn btn-outline-danger" onclick="return confirm('Are you sure?');" type="submit">Delete</button>
                            @csrf
                            @method('delete')
                        </form>
                    </td>



                  </tr>

                @endforeach


            </tbody>
          </table>

    </div>
    @endsection

