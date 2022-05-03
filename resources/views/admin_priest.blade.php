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
    .row{
        margin-left:20px;
    }
    input{
        width:25vw;
    }
</style>
</head>
<body>
@include('header.nav')
    <div class="row">
        <div class="col-lg-12">
            <div class="form ">
                <h4 style = "text-align:center;color:red;">Add Priest</h4>
                
                <form action="/addPriest" method = "POST" class='mt-5 mb-4'>
                        @csrf
                        <div class="row mt-3">
                            <div class="col-lg-4">
                                <label for="">Name:</label>
                            </div>
                            <div class="col-lg-4">
                                <label for="">Experience</label>
                            </div>
                            <div class="col-lg-4">
                                <label for="">Email</label><br>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-4">
                                <input type="text" placeholder = 'Enter Priest name' name='name'>
                            </div>

                            <div class="col-lg-4">
                                <input type="text" placeholder = 'Enter experience' name = 'exp'>
                            </div>

                            

                            <div class="col-lg-4 ">
                                <input type="text" placeholder = 'Enter email' name = 'email'>

                            </div>
                        </div>
                            
                        
                        <button  class="btn btn-danger " type='submit' style='position: absolute;right:100px;top: 5px'>add</button>         

                    </form><hr>
        
        
            
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Experience</th>
                        <th scope="col">Email</th>
                        <th scope=""col>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $d)
                            <tr>
                                <th scope="row">{{$d->id}}</th>
                                <td>{{ $d->Name}}</td>
                                <td>{{$d->Experience }}</td>
                                <td>{{$d->Email}}</td>
                                <td><a href="/deletePriest/{{$d->id}}"><button class="btn btn-danger">Delete</button></a>
                                <a href="/editPriest/{{$d->id}}"><button class="btn btn-success">Edit</button></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            
        </div>
        
        
    </div>
</body>
</html>