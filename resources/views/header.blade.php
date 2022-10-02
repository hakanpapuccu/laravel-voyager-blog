<!DOCTYPE html>


<html lang="en">

<head>
    <base href="/public">
    <meta charset="utf-8">
    <title>{{setting('site.title')}}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Favicon-->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"> 
    
    <!-- THEME CSS
	================================================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
    <!-- Themify -->
    <link rel="stylesheet" href="plugins/themify/css/themify-icons.css">
    <link rel="stylesheet" href="plugins/slick-carousel/slick-theme.css">
    <link rel="stylesheet" href="plugins/slick-carousel/slick.css">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="plugins/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="plugins/owl-carousel/owl.theme.def.min.css">
    <link rel="stylesheet" href="plugins/magnific-popup/magnific-popup.css">
    <!-- manin stylesheet -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>


<div class="header-logo py-5 d-none d-lg-block">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6 text-center">
        <a class="navbar-brand" href=""><img src="images/logo.png" alt="" class="img-fluid w-100"></a>
      </div>
    </div>
  </div>
</div>

<header class="header-top bg-grey justify-content-center">
   <nav class="navbar navbar-expand-lg navigation">
      <div class="container">
          <a class="navbar-brand d-lg-none" href="index.html"><img src="images/logo.png" alt="" class="img-fluid"></a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="ti-menu"></span>
          </button>
              <div class="collapse navbar-collapse" id="navbarContent">
                  <ul id="menu" class="menu navbar-nav ">
                                        

                      <li class="nav-item"><a href="{{route('home')}}" class="nav-link">Home</a></li>
                      <li class="nav-item"><a href="fashion.html" class="nav-link">About</a></li>
                      
                      <li class="nav-item"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
                      <li class="nav-item d-lg-none"><div class="search_toggle p-3 d-inline-block bg-white"><i class="ti-search"></i></div></li>
                  </ul>
              </div>

              <div class="text-right search d-none d-lg-block"> 
                <div class="search_toggle"><i class="ti-search"></i></div>
              </div>
          </div>
    </nav>

</header>
<!--search overlay start-->
<div class="search-wrap">
    <div class="overlay">
        <form action="#" class="search-form">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-9">
                        <input type="text" class="form-control" placeholder="Ara..."/>
                    </div>
                    <div class="col-md-2 col-3 text-right">
                        <div class="search_toggle toggle-wrap d-inline-block">
                            <i class="ti-close"></i>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!--search overlay end-->