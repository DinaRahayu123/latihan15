
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
                <h3>Detail Cast </h3>
            </div>
        </div>
        <br>

        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Nama </label>
            <div class="col-sm-10">
                {{$cast->nama}} 
            </div>
        </div>
        <div class="form-group row">
            <label for="umur" class="col-sm-2 col-form-label">Umur</label>
            <div class="col-sm-10">
                {{$cast->umur}}
            </div>
        </div>
        <div class="form-group row">
            <label for="bio" class="col-sm-2 col-form-label"> Bio</label>
            <div class="col-sm-10">
                 {{$cast->bio}}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-12">
                <a href="{{route('cast.index')}}" class="btn  btn-success">Kembali</a>
            </div>
        </div>

    </div>
</body>
</html>
