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
</head>
<body>
<div class="form ">
        <h4 style = "text-align:center;color:red;">Edit Priest</h4>
        
        <form action="/updatePriest/{{$data[0]->id}}" method = "POST">
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
                <div class="row mt-3 ">
                    <div class="col-lg-4">
                        <input type="text" placeholder = 'Enter Priest name' name='name' value = "{{$data[0]->Name}}">
                    </div>
                    <div class="col-lg-4">
                        <input type="text" placeholder = 'Enter experience' name = 'exp' value = "{{$data[0]->Experience}}">
                    </div>
                    <div class="col-lg-4 ">
                        <input type="text" placeholder = 'Enter email' name = 'email' value = "{{$data[0]->Email}}">
                    </div>
                </div>
                
                <button  class="btn btn-danger " type='submit' style='position: absolute;right: 105px;top: 5px'>Update</button>         

        </form><hr>
        
    </div>
</body>
</html>