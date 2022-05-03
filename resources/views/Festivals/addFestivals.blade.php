<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
            <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        input {
            width:20vw;
            height:40px;
            margin-left:10px;
        }
        label{
            margin-left:10px;
        }
    </style>
</head>
<body>
    @include('header.nav');
    <div class="row mt-5" >
        <div class="col-lg-6 mt-3" >
            <h4 style="text-align:center;color:red;">Add Festival</h4>
            <form action="" method = "POST">
                @csrf
            
                <label for="">Festival :</label><br>
                <input type="text" name = 'name' class = "mt-3" placeholder = 'Enter festival name'><button type = "submit" class="btn btn-danger" style="margin-left:140px;">Add</button>

            </form>
        </div>
        <div class="col-lg-6">
        <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope=""col>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $d)
                            <tr>
                                <th scope="row">{{$d->id}}</th>
                                <td>{{$d->name}}</td>
                                <td><a href="/addFestivals/{{$d->id}}"><button class="btn btn-danger">Delete</button></a>
                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>

        </div>
    </div>
</body>
</html>