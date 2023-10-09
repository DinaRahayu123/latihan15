
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Data Alumni</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h3> Daftar Cast</h3>
            </div>
            <div class="col-sm-2">
                <a class="btn btn-success" href="{{ route('cast.create')}}"> Tambah </a>
            </div>
        </div> 
        <br>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>        
        </div>
    @endif

    <table class="table table-striped">
      <thead>
        <tr>
            <th width="40px"><b>No.</b></th>
            <th width="180px">Nama </th>
            <th width="100px">umur</th>
            <th width="100px">Bio</th>
            <th width="210px">Action</th>
        </tr>
      </thead>
        @foreach ($casts as $cast) 
            <tr>
                <td><b>{{++$i}}.<b></td>
                <td>{{$cast->nama}}</td>
                <td>{{$cast->umur}}</td>
                <td>{{$cast->bio}}</td>
                <td>
                    <form action="{{ route('cast.destroy',$cast->id) }}" method="post">
                    <a class="btn btn-sm btn-success" href="{{ route('cast.show', $cast->id)}}">Show</a>
                    <a class="btn btn-sm btn-warning" href="{{ route('cast.edit', $cast->id)}}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>    
                </td>
            </tr>
        @endforeach
    </table>

    {!! $casts->links() !!}
    </div>
    </body>

</html>

