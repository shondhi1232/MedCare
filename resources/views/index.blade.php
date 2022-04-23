<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping Home Page</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('fontend') }}/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('fontend') }}/css/style.css" type="text/css">

    <style>

        .button{
            background-image: repeating-linear-gradient(45deg,rgb(86, 218, 53),rgb(55, 66, 226))
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">MedCare</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
               <h6> <a class="nav-link active" aria-current="page" href="/">Home</a></h6>
              </li>
              <li class="nav-item">
                <h6><a class="nav-link" href="/aboutus">Aboutus</a></h6>
              </li>
              <li class="nav-item">
                <h6><a class="nav-link" href="/contact">contact</a></h6>
              </li>
              <li class="nav-item">
                <h6><a class="nav-link" href="/posts">Review</a></h6>
              </li>
            </ul>
          </div>
        </div>
      </nav>


    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class=" hero__categories">
                        <div class="btn btn-primary site-btn hero__categories__all" >
                            <span>All departments</span>
                        </div>

                        <ul class="collapse">
                            <li><a href="#">Diabitics</a></li>
                            <li><a href="#">Corona</a></li>
                            <li><a href="#">Serup/Lequid Medicine</a></li>
                            <li><a href="#">Gastology</a></li>
                            <li><a href="#">Cold & Fever</a></li>
                            <li><a href="#">Vitamins</a></li>
                            <li><a href="#">Tufnil</a></li>
                            <li><a href="#">Abroad Medicine</a></li>
                            <li><a href="#">Others</a></li>

                        </ul>

                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    All Categories
                                </div>
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="button btn btn-primary site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+880-130-28372</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                    <div class="hero__item set-bg" data-setbg="img/hero/banner.jpg">
                        <div class="hero__text">
                            <span>FRUIT FRESH</span>
                            <h2>MedCare <br />100% Faithful</h2>
                            <p>Free Pickup and Delivery Available</p>
                            <a href="#" class="primary-btn">SHOP NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="images/vitamins.jpg">
                            <h5><a href="#">Vitamins</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="images/medical-instruments.jpg">
                            <h5><a href="#">Instruments</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="images/supplements.jpg">
                            <h5><a href="#">Supplements</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="images/tablet.jpg">
                            <h5><a href="#">Tablets</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="images/vitamins.jpg">
                            <h5><a href="#">Vitamins</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Js Plugins -->
    <script src="{{ asset('fontend') }}/js/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('fontend') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('fontend') }}/js/jquery.nice-select.min.js"></script>
    <script src="{{ asset('fontend') }}/js/jquery-ui.min.js"></script>
    <script src="{{ asset('fontend') }}/js/jquery.slicknav.js"></script>
    <script src="{{ asset('fontend') }}/js/mixitup.min.js"></script>
    <script src="{{ asset('fontend') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('fontend') }}/js/main.js"></script>

    <script>
        $(document).ready(function(){
          $(".btn-primary").click(function(){
            $(".collapse").collapse('toggle');
          });
        });
        </script>



</body>

</html>
