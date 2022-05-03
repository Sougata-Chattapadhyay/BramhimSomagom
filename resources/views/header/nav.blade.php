
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- custom styles -->
<link rel="stylesheet" href="{{ asset('/css/styles.css') }}">
    

</head>
<body>
<div class="fx">
    <nav class="nav my-nav mb-5">
        <div class="nav-menu flex-row">
            <div class="nav-brand">
                 <img src="{{ asset('/images/abc.jpeg') }}" alt="" width="95px" height="50px">
            </div>


            <div class="toggle-collapse">
                <div class="toggle-icons">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
            
            <div>
                
                <ul class="nav-items">
                    <li class="nav-link">
                        <a href="/home">Home</a>
                    </li>

                    
                    <li class="nav-link">
                        <a href="/priest">Priest</a>
                    </li>
                    <li class="nav-link">
                        <a href="/festival">Festivals</a>
                    </li>
                    <li class="nav-link">
                        <a href="/getdata">Schedule</a>
                    </li>
                    <li class="nav-link">
                        <a href="/under">Contact Us</a>
                    </li>
                    @if(session('role')=='admin')
                        <li class = "nav-link"><a href="/adminPanel"> AdminPanel</a></li>
                    @endif
                </ul>


            </div>
            
            
        </div>

    </nav>
</div>


</body>
</html>