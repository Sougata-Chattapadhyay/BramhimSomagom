<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>Login</title>

    
</head>
<body onload="noBack();" onpageshow="if (event.persisted) noBack();" onunload="">
<div class="card mt-5" style="width: 40rem;margin-left: 27vw;padding-left:90px; position:relative;top:50px">
            <h4 class = "mt-3" >Login as Admin:</h4>
            <form action="/" method = "POST">
                @CSRF
                <div class="row g-3 ml-3">
                    
                    <div class="col-md-8">
                        <label for="">User Name : </label>
                        <input type="text" class="form-control mt-2" name = 'name' placeholder="Enter user name">
                    </div>
                    </div>
                    <div class="row g-3">
                    <div class="col-md-8 ">
                        <label for="">Password : </label>
                        <input required  type="password" class="form-control mt-2" name = 'password' placeholder="Enter password">
                    </div>
                    </div>
                    <div class="row g-3">
                    <div class="col-12 mt-5" style = 'align:center;'>                        
                        <button type="submit" class="btn btn-primary  mb-3">Login</button>
                        <a href = '/home'><button type="button" class="btn btn-success  mb-3 ">User ? </button><a>
                    </div>
                    </div>
                
            </form>
            @if (session('status'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>     {{ session('status') }} </strong>
                         
                </div>

             @endif
</div>
</body>
<script>
   history.pushState(null,null,location.href);
   window.onpopstate = function(){
       history.go(1);
   };
</script>
</html>