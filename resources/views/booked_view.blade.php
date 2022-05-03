<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<style>
    .table{
     text-align:center;   
    }
</style>
<body>
@include('header.nav')
    <div class="row w-100 mt-5 pt-5" >
                <div class="col-lg-12 wrapper2">

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                <th scope="col">status</th>
                                <th scope="col">user id</th>
                                <th scope="col">user name</th>
                                <th scope="col">user address</th>
                                <th scope="col">user phn no.</th>
                                <th scope="col">booked for</th>
                                <th scope="col">priest id</th>
                                <th scope="col">priest name</th>
                                <th scope="col">charge</th>
                                <th scope="col">date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $d)
                                    <tr>
                                        <td>
                                        @if($d->Status == 'Confirm')    
                                        <div class='shadow btn btn-success' style="padding-right: 34px !important; writing-mode:vertical-lr;text-orientation:upright; width:33px;height:300px;padding:10px;">{{$d->Status}}</div>
                                        @elseif($d->Status == 'Cancel')
                                        <div class='shadow btn btn-danger' style="padding-right: 34px !important; writing-mode:vertical-lr;text-orientation:upright; width:33px;height:300px;padding:10px;">{{$d->Status}}</div>
                                        @else
                                        <div class='shadow btn btn-warning' style="padding-right: 34px !important; writing-mode:vertical-lr;text-orientation:upright; width:33px;height:300px;padding:10px;">{{$d->Status}}</div>
                                        @endif
                                        </td>
                                        <td>{{$d->c_id}}</td>
                                        <td>{{$d->c_name}}</td>
                                        <td>{{$d->c_address}}</td>
                                        <td>{{$d->c_phn_num}}</td>
                                        <td>{{$d->f_name}}</td>
                                        <td>{{$d->Priest_id}}</td>
                                        <td>{{$d->p_name}}</td>
                                        <td>imformed via phone</td>
                                        <td>{{$d->Date}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>



                </div>
        </div>
</body>

</html>