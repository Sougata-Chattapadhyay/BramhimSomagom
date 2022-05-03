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

<!-- Font Awesome cdn -->
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  
</head>
<body>
    @include('header.nav');
    <h4 style="color : black;margin-top:15vh;text-align:center;">Manage Booking</h4>
<table class="table" style="margin-top:15vh">

  <thead>
    <tr>
    <th scope="col">Status</th>
      <th scope="col">id</th>
      <th scope="col">Priest details</th>
      <th scope="col">Date</th>
      <th scope="col">Customer details</th>
      <th scope="col">Festival</th>
      
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
      @foreach($data as $d)
    <tr class = ".table-striped">
    <td>
        @if($d->Status == 'Confirm')
          <div class='shadow btn btn-success' style="padding-right: 34px !important; writing-mode:vertical-lr;text-orientation:upright; width:33px;height:300px;padding:10px;">{{$d->Status}}</div>
         @elseif($d->Status == 'Cancel')
                                        <div class='shadow btn btn-danger' style="padding-right: 34px !important; writing-mode:vertical-lr;text-orientation:upright; width:33px;height:300px;padding:10px;">{{$d->Status}}</div>
                                        @else
                                        <div class='shadow btn btn-warning' style="padding-right: 34px !important; writing-mode:vertical-lr;text-orientation:upright; width:33px;height:300px;padding:10px;">{{$d->Status}}</div>
                                        @endif
        </td>
     
      <th scope="row">{{$d->id}}</th>
      <td>
 View : <i class="fas fa-eye" type="button" data-bs-toggle="modal" data-bs-target="#priestModal{{$d->id}}"></i>
<!-- Modal -->
<div class="modal fade" id="priestModal{{$d->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-lg-4">
                <strong>Priest Id</strong><br>{{$d->Priest_id}}
            </div>
            <div class="col-lg-4">
                <strong>Priest Name</strong><br>{{$d->p_name}}
            </div>
            <div class="col-lg-4">
                <strong>Email</strong><br>{{$d->p_email}}
            </div>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- End modal -->
</td>
<td>{{$d->Date}}</td>
      <td>View : <i class="fas fa-eye" type="button" data-bs-toggle="modal" data-bs-target="#userModal{{$d->id}}"></i>
<!-- Modal -->
<div class="modal fade" id="userModal{{$d->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-lg-6">
                <strong>Name</strong><br>{{$d->c_name}}
            </div>
            <div class="col-lg-6">
                <strong>Address</strong><br>{{$d->c_address}}
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <strong>Phone number</strong><br>{{$d->c_phn_num}}
            </div>
            <div class="col-lg-6">
                <strong>Email</strong><br>{{$d->c_email}}
            </div>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- End modal --></td>
        <td>{{$d->f_name}}</td>
        <td>
            @if($d->Status == 'Hold')
                <a href="/admin_Appruved/{{$d->id}}"><button class = "btn btn-warning">Approved?</button></a><br>
                <a href="admin_Cancel/{{$d->id}}"><button class = 'btn btn-danger mt-5'>Canceled?</button></a>
            @else
                <a href="admin_Dalete/{{$d->id}}"><button class = "btn btn-danger">Delete</button></a>
            @endif
      </td>
    </tr>
    @endforeach
    
  </tbody>
</table> 
</body>
</html>