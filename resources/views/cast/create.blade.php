
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
        <div class=" form-row">
            <div class="col-lg-12">
                <h3>Tambah Cast</h3>
            </div>
        </div>
        <br>

        @if ($errors->all())
            <div class="alert alert-danger">
                <strong>Whoops! </strong> Ada permasalahan inputanmu.<br>
                <ul>
                    @foreach ($errors as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form action="{{route('cast.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">Nama Cast</label>
                <div class="col-sm-10">
                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Cast">
                </div>
            </div>
            <div class="form-group row">
                <label for="umur" class="col-sm-2 col-form-label">Umur Cast</label>
                <div class="col-sm-10">
                    <input type="number" name="umur" class="form-control" id="umur" placeholder="NIM Cast">
                </div>
            </div>
            <div class="form-group row">
                <label for="bio" class="col-sm-2 col-form-label">Judul Skripsi</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="bio" rows="8" cols="80" placeholder="Masukkan Bio "></textarea>
                    </div>
            </div>
           
             <hr>
                <div class="form-group">
                    <a href="{{route('cast.index')}}" class="btn btn-success">Kembali</a>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
        </form>

    </div>
    </body>
</html>
    