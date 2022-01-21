 <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Sunnywillfamilusiandco</title>
</head>
<body>
    <div class="container" style="margin-top: 50px">
        <h1 class="text-center text-danger"><b>All Properties</b></h1>
        <a href="/property/create" class="btn btn-outline-success">Add new Property</a>

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






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>

