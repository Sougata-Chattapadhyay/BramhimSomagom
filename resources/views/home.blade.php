<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bramhin Somagom</title>
    <!-- start bootstrap -->
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- End bootstrap -->

    <!-- ------------owl-carousel-------------- -->
    <link rel="stylesheet" href="{{ asset('/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/owl.theme.default.min.css') }}">

    <!-- custom styles -->
    <link rel="stylesheet" href="{{ asset('/css/styles.css') }}">
    
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/d31a769f81.js" crossorigin="anonymous"></script>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abel&family=Roboto:wght@300;500&display=swap" rel="stylesheet">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</head>
<body>
    <!-- --------------------Navigation ----------------------- -->
    @include('header.nav')
    <!-- ---------x-----------Navigation-----------x----------  -->
<!-- --------------------Main Site Section----------------------- -->

<main>
    <section class="site-title">
        <div class="site-background">
            <h3>Durga Puja</h3>
            <h1>Make Your Puja Easier</h1>
            @if(session('role'))
            <a href="/adminPanel"><button class="btn">Admin panel</button></a>
            @endif
        </div>
        
        
    </section>

<!-- -------xx--------Main Site Section ends------------xx------- -->
    
<!-- -----------------Option Carousel------------------- -->

<section>


    <div class="optn">
        <div class="container">

            <div class="row justify-content-center mb-5">
                <div class="col-md-8 text-center">
                    <blockquote class="blockquote text-center">
                        <!-- <p class="mb-0">Meet your required festives</p> -->
                        <h2 class="text-center">Meet Your Required Festives</h2>
                        <footer class="blockquote-footer"><p>Choose your required festive catagory</p> </footer>
                      </blockquote>
    
                    <!-- <h1 class="heading mb-4">Meet your required festives</h1>
                    <p class="mb-4 lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam veritatis voluptatibus officiis laborum id nemo!</p>
                    <p class="mb-0">
                        <button type="button" class="btn btn-warning">Find More</button>
                    </p> -->
                </div>
            </div>

            <div class="owl-carousel owl-theme optn-post">
                
                <div class="optn-content">
                    <img src="{{ asset('/images/ganesh-optn3.jpg') }}" alt="Ganesh img" height=250 width = 200>
                    <div class="optn-title">
                        <h3>Find your priest for Ganesh puja</h3>
                        <a href='/priest'><button class="btn btn-optn">Ganesh Puja</button></a>
                        <span>2min</span>
                    </div>
                </div>
                <div class="optn-content">
                    <img src="{{ asset('/images/swarasati-optn5.jpg') }}" alt="swarasati img" height=250 width = 200>
                    <div class="optn-title">
                        <h3>Find your priest for swarasati puja</h3>
                        <a href='/priest'><button class="btn btn-optn">swarasati Puja</button></a>
                        <span>2min</span>
                    </div>
                </div>
                <div class="optn-content">
                    <img src="{{ asset('/images/siva-tranparent.png') }}" alt="swarasati img" height=250 width = 200>
                    <div class="optn-title">
                        <h3>Find your priest for Maha Shiv Ratri</h3>
                        <a href='/priest'><button class="btn btn-optn">Shiv Ratri</button></a>
                        <span>2min</span>
                    </div>
                </div>
                <div class="optn-content">
                    <img src="{{ asset('/images/dol.jpg') }}" alt="swarasati img" height=250 width = 200>
                    <div class="optn-title">
                        <h3>Find your priest for Dal jatra</h3>
                        <a href="/under"><button class="btn btn-optn">Dal Jatra</button></a>
                        <span>2min</span>
                    </div>
                </div>

                <div class="optn-content">
                    <img src="{{ asset('/images/durga-optn1.jpg') }}" alt="Durga img" height=250 width = 200>
                    <div class="optn-title">
                        <h3>Find your priest for Basanti puja</h3>
                        <button class="btn btn-optn"><a href="festive_catagories.html">Basanti puja</a></button>
                        <span>2min</span>
                    </div>
                </div>
                <div class="optn-content">
                    <img src="{{ asset('/images/Nababarsha.jpg') }}" alt="Durga img" height=250 width = 200>
                    <div class="optn-title">
                        <h3>Find your priest for Hal Khata</h3>
                        <a href="/under"><button class="btn btn-optn">Hal Khata</button></a>
                        <span>2min</span>
                    </div>
                </div>

                <!-- <div class="optn-content">
                    <img src="{{ asset('/images/Rath.png') }} " alt="Kali img">
                    <div class="optn-title">
                        <h3>Find your priest for Ratha Jatra</h3>
                        <button class="btn btn-optn">Ratha Jatra</button>
                        <span>2min</span>
                    </div>
                </div> -->
                <div class="optn-content">
                    <img src="{{ asset('/images/durga-optn1.jpg') }} " alt="Kali img" height=250 width = 200>
                    <div class="optn-title">
                        <h3>Find your priest for Durga Puja</h3>
                        <a href="/under"><button class="btn btn-optn">Durga Puja</button></a>
                        <span>2min</span>
                    </div>
                </div>
                <div class="optn-content">
                    <img src="{{ asset('/images/laxmi-optn4.jpg') }}" alt="Laxmi img" height=250 width = 200>
                    <div class="optn-title">
                        <h3>Find your priest for Laxmi puja</h3>
                        <a href="/under"><button class="btn btn-optn">Laxmi Puja</button></a>
                        <span>2min</span>
                    </div>
                </div>
                <div class="optn-content">
                    <img src="{{ asset('/images/kali-puja-optn2-i.jpg') }} " alt="Kali img" height=250 width = 200>
                    <div class="optn-title">
                        <h3>Find your priest for Kali puja</h3>
                        <a href="/under"><button class="btn btn-optn">Kali Puja</button></a>
                        <span>2min</span>
                    </div>
                </div>

                

                
                
                <div class="owl-navigation">
                    <span class="owl-nav-prev"><i class="fas fa-long-arrow-alt-left"></i>  </span>
                    <span class="owl-nav-next"><i class="fas fa-long-arrow-alt-right"></i>  </span>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ---------xx------Option Carousel----------xx------- -->




</main>

    <!-- custom javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <!-- ------------owl-carousel-------------- -->
        <script src="./js/owl.carousel.min.js "></script>
    
    <script src="js/main.js"></script>
<div class="f" style="margin-top: 45vh;">
@include('footer')
</div>
    
</body>
</html>