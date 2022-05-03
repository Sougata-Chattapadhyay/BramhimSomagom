<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body style="background-image:url(https://thefixgym.com/wp-content/uploads/2016/06/bigstock-Festive-Background-With-Natura-90479780.jpg)">
@include('header.nav')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3 border p-4 shadow bg-light">
            <div class="col-12">
                <h3 class="fw-normal text-secondary fs-4 text-uppercase mb-4">Appointment form</h3>
            </div>
            <form action="/booking/{id}" method = "POST">
                @CSRF
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="">Priest Id</label>
                        <input required type="text" class="form-control" name = 'p_id' placeholder="Priest Id" value = "{{$priest[0]->id}}" readonly >
                    </div>
                    <div class="col-md-6 mt-5 ">
                    <label for="">Select Puja</label>
                        <select  name = 'f_id'>
                            <option value=0  selected disabled>Select Your Puja</option>
                            @foreach($data as $d)
                                <option value="{{$d->id}}">{{$d->name}}</option>
                            @endforeach
                            <!-- <option value=1>Ganash Chaturthi</option>
                            <option value=2>Swarasati Puja</option>
                            <option value=3>Shiva Ratri</option>
                            <option value=4>Daal Jatra</option> -->
                        </select>                    
                    </div>
                    <div class="col-md-6">
                        <label for="">Charge</label>
                        <input required  type="text" class="form-control" name = 'charge' placeholder="Informed via phone" value = "{{$priest[0]->Charge}}" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="">Name</label>
                        <input required type="text" class="form-control" name = 'name' placeholder="Enter your Name">
                    </div>
                    <div class="col-md-6">
                        <label for="">Phone No.</label>
                        <input type="text" class="form-control" name = 'phone' placeholder="Enter your Phone Number">
                    </div>
                    <div class="col-md-6">
                        <label for="">Email</label>
                        <input required type="email" class="form-control" name = 'email' placeholder="Enter your email">
                    </div>
                    <div class="col-md-6">
                        <label for="">Puja Date</label>
                        <input required type="date" class="form-control" name = 'date' placeholder="Enter Date">
                    </div>
                    
                    
                        <div class="row g-3">
                            <label for="">Your Address</label>
                            <div class="col-md-12">
                                <textarea required type="text" class="form-control" name = "address" placeholder="Enter your full address"></textarea>
                            </div>
                            
                        </div>
                    <div class="col-12 mt-5">                        
                        <button type="submit" class="btn btn-primary float-end">Book Appointment</button>
                        <button type="button" class="btn btn-outline-secondary float-end me-2">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

    
</body>
</html>