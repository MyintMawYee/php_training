<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        body {
            margin-top: 100px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                @endif
                
                @if(session('status'))
                    <div class="alert alert-success">{{session('status')}}</div>
                @endif
                
                <form method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="image[]" multiple class="custom-file-input">
                            <label class="custom-file-label" for="inputGroupFile04">Choose Image file</label>
                        </div>
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">Upload</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row mt-4">
            @foreach ($galleries as $galley)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <img class="img-fluid" src="{{ asset ('upload/'. $galley->name)}}">
                    </div>
                    <div class="card-footer">
                        <a href="{{ asset ('upload/'. $galley->name)}}" target="_blank" class="btn btn-info">View</a>
                        <a href="{{ route('file.download', $galley->id)}}" class="btn btn-success">Download</a>
                        <a href="{{ route('file.destory', $galley->id)}}" class="btn btn-danger float-right">Delete</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>

</html>