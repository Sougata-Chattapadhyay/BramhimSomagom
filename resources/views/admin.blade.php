<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
      <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    @include('header.nav');
    <div class="row p-5" style="margin-top:15vh;text-align:center;">
        <h4 style="color:red;text-align:center;">Admin panel</h4>
        <div class="col-lg-4 mt-5" style="margin-top:15vh;">
            <a href="/admin"><button class = "btn btn-primary">Manage Priest</button></a>
        </div>
        <div class="col-lg-4 mt-5">
            <a href="/addFestivals"><button class = "btn btn-success">Manage Festivals</button></a>
        </div>
        <div class="col-lg-4 mt-5">
            <a href="/admin_booked"><button class = "btn btn-warning">Manage Booking</button></a>
        </div>
    </div>
    <div class="row" style="text-align:center;">
        <div class="col-lg-12 m-3 p-5">
            <!-- <button class = "btn btn-denger">Log Out</button> -->
            <a href="/logout"><button class = "btn btn-danger btn-lg">Log Out</button></a>
        </div>
    </div>
</body>
</html>