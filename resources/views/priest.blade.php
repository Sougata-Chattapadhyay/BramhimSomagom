<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bramhin Catagories</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bramhin.css') }}">

</head>
<body>

<div class="container mt-3">
    <div class="box ">
        <a href="/home"><button class = "btn btn-primary btn-lg">Back</button></a>
    </div>
    <h2 style="text-align:center;color:blue;">Available Priest</h2>
    @foreach($data as $d)
    <div class="row m-5">
        <div class="col-lg-12 bramhin-post">
            <div class="bramhin-post_img">
                <img src="{{ asset('/images/b1.jpg') }}" alt="bramhin1">
            </div>
            <div class="bramhin-post_info">
                <div class="data" >
                    <h3>Name : {{ $d->Name }}</h3>
                    <h3>Experience : {{ $d->Experience }}</h3>
                    <h3>Email  : {{ $d->Email }}</h3>
                </div>
                    
                    <a href="/booking/{{ $d->id }}" class="bramhin-post_cta mt-3 ">Book Here</a>
            </div>
        </div>
       
    </div>
    @endforeach

</div>
    
</body>
</html>