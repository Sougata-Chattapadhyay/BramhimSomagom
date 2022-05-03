<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Festive Catagories</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('css/festive-styles.css') }}">

</head>
<body>
@include('header.nav')
    <div class="text-center">
        <h1>Festive Catagories</h1>
        <p>Find your intended festive here</p>
    </div>

    <div class="container">
        <div class="row m-0">
            <!-- <div class="col-sm-12 col-lg-4 text-center"> -->
            <div class="col-sm-12 col-lg-4">
                <div class="durga-puja-card">
                    <img src="{{ asset('/images/Durga-transparent.png') }}" alt="Durga-img" height="200px">
                    <h1 class="text-center title">Durga Puja</h1>
                    <p class="description text-center">
                        Make your puja more easier
                    </p>
                    <p class="description text-center">
                        With the help our pandits and bramhins
                    </p> 
                    <div class="circle text-center rounded-circle durga-bg mx-auto">
                    <a href="/under">
                        <img src="{{ asset('/images/right-arrow.png') }}" alt="right-arrow" height="20px">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-lg-4">
                <div class="kali-puja-card">
                    <img src="{{ asset('/images/Kali-transparent.png') }}" alt="Kali-img" height="200px">
                    <h1 class="text-center title">Kali Puja</h1>
                    <p class="description text-center">
                        Make your puja more easier
                    </p>
                    <p class="description text-center">
                        With the help our pandits and bramhins
                    </p> 
                    <div class="circle text-center rounded-circle kali-bg mx-auto">
                    <a href="/under">
                        <img src="{{ asset('/images/right-arrow.png') }}" alt="right-arrow" height="20px">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-lg-4">
                <div class="laxmi-puja-card">
                    <img src="{{ asset('/images/Laxmi-graphical-transparent.png') }}" alt="Laxmi-img" height="200px">
                    
                    <h1 class="text-center title">Laxmi Puja</h1>
                    <p class="description text-center">
                        Make your puja more easier
                    </p>
                    <p class="description text-center">
                        With the help our pandits and bramhins
                    </p> 
                    <div class="circle text-center rounded-circle laxmi-bg mx-auto">
                        <a href="/under">
                        <img src="{{ asset('/images/right-arrow.png') }}" alt="right-arrow" height="20px">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row m-0">
            <!-- <div class="col-sm-12 col-lg-4 text-center"> -->
            <div class="col-sm-12 col-lg-4">
                <div class="durga-puja-card">
                    <img src="{{ asset('/images/Swarasati-transparent.png') }}" alt="Swarasati-img" height="200px">
                    <h1 class="text-center title"> Swarasati Puja</h1>
                    <p class="description text-center">
                        Make your puja more easier
                    </p>
                    <p class="description text-center">
                        With the help our pandits and bramhins
                    </p> 
                    <div class="circle text-center rounded-circle durga-bg mx-auto">

                        <a href="/under"><img src="{{ asset('/images//right-arrow.png') }}" alt="right-arrow" height="20px"></a>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-lg-4">
                <div class="kali-puja-card">
                    <img src="{{ asset('/images/Jagadhatri-puja.png') }}" alt="Jagadhatri-img" height="200px">
                    <h1 class="text-center title">Jagadhatri Puja</h1>
                    <p class="description text-center">
                        Make your puja more easier
                    </p>
                    <p class="description text-center">
                        With the help our pandits and bramhins
                    </p> 
                    <div class="circle text-center rounded-circle kali-bg mx-auto">
                        <a href="/under"><img src="{{ asset('/images/right-arrow.png') }}" alt="right-arrow" height="20px"></a>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-lg-4">
                <div class="laxmi-puja-card">
                    <img src="{{ asset('/images/jhulan-yatra-graphical-transparent.png') }}" alt="Rash-img" height="200px">
                    <h1 class="text-center title">Dal Jatra</h1>
                    <p class="description text-center">
                        Make your puja more easier
                    </p>
                    <p class="description text-center">
                        With the help our pandits and bramhins
                    </p> 
                    <div class="circle text-center rounded-circle laxmi-bg mx-auto">
                    <a href="/priest"><img src="{{ asset('/images/right-arrow.png') }}" alt="right-arrow" height="20px"></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-4">
                <div class="laxmi-puja-card">
                    <img src="{{ asset('/images/ganesh-optn3.jpg') }}" alt="Rash-img" height="200px">
                    <h1 class="text-center title">Ganesg Chaturthi</h1>
                    <p class="description text-center">
                        Make your puja more easier
                    </p>
                    <p class="description text-center">
                        With the help our pandits and bramhins
                    </p> 
                    <div class="circle text-center rounded-circle laxmi-bg mx-auto">
                    <a href="/priest"><img src="{{ asset('/images/right-arrow.png') }}" alt="right-arrow" height="20px"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>