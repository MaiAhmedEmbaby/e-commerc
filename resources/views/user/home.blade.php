<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>E- commerc</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <script src="https://use.fontawesome.com/releases/v6.1.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link href="assets/css/styles.css" rel="stylesheet" />
        <link href="assets/css/main.css" rel="stylesheet" />
    </head>
    <body>
        <!--start main nav-->
        <div class="container">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Free Shiping on All Order %75!</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">

                  <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact" >My Account</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact" >Wishlist</a></li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      corruncy.usd
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                 <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact"
                            style="color:rgb(255, 0, 136) !important;"><i class="fa-duotone fa-cart-shopping-fast"></i>  My Crafft (2)</a></li>
                            @if(Route::has('login'))
                            @auth

                            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{url('showcart')}}" >
                                <i class="fa-solid fa-cart-shopping"></i>Cart[{{$count}}]</a></li>
                            <x-app-layout>

                            </x-app-layout>
                            @else
                            <li class="nav-item"><a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login</a><li>
                    <li class="nav-item"><a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Register</a><li>
                      @endauth
                      @endif
                        </ul>
                </div>
            </div>
        </nav></div>
        <!--end main nav-->
        <!--start search-->

    <!-- end search-->
    <!--start navbar-->

    <header class="container">
    <div class="navbar navbar-expand-lg bg-secondary  nav-bag" >
        <div class="container">
            <a class="navbar-brand" href="#page-top"  style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">fashon</a>
            <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1" style="color: white !important;"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#home">Home</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#women">Women</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#men">Men</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#footwear">FootWear</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#accesoris">Accesorise</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#sales">Sales</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#blog">Blog</a></li>

                </ul>
            </div>
        </div>
    </div>
</header>
<!--end header-->

@if(session()->has('message'))
<div class="alert alert-success">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="fas fa-times-circle"></i></button>
    {{session()->get('message')}}
</div>
@endif

<!--section for slider-->
<div class="container ">
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="car text-center"><p class="mt-5">SUTHING IS BUTTER</p>
        <h2>Fashon Lorrem</h2></div>
        <img src="assets/images/pexels-pixabay-264606.jpg" class="d-block w-100 cars" style="width: 100%; height:700px;" alt="...">
      </div>
      <div class="carousel-item">
        <img src="assets/images/pexels-freestocksorg-291762.jpg" class="d-block w-100"style="width: 100%; height:700px;" alt="...">
      </div>
      <div class="carousel-item">
        <img src="assets/images/pexels-borko-manigoda-1778412.jpg" class="d-block w-100"style="width: 100%; height:700px;" alt="...">
      </div>
      <div class="carousel-item">
        <img src="assets/images/pexels-cottonbro-6626903.jpg" class="d-block w-100"style="width: 100%; height:700px;" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
<!--end slider-->
<!--section one-->
@include('user.collection')
<!--end section one-->
<!--star section tow-->
@include('user.product')
<!--end section two-->
<!--start section three-->
@include('user.sale')
<!--END SECTION three-->
<!--start section for-->
<!--start part one in section foor-->
@include('user.treanding')
<!--end part two in section for-->
<!--end section for-->
<!--start section fife-->
@include('user.accesoris')
<!--start section six-->

@include('user.blog')

<!--end section six-->
<!--start section sevin-->

@include('user.brand')
<!--end section seven-->
<!--start fooer-->

  @include('user.footer')
<!--end footer-->
<!--scroll to top-->
<div class="container">
  <div id="scroll-top" class="show">
    <i class="fas fa-arrow-circle-up fa-2x"></i>
  </div>
</div>
<!--end scroll to top-->

           <!-- Bootstrap core JS-->
           <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
           <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
           <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
           <!-- Core theme JS-->
           <script src="assets/js/scripts.js"></script>
           <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
