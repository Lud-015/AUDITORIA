
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/brand/logo.png">
  <title>
    MegaMarket
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <link href="../assets/css/font-awesome.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="../assets/css/argon-design-system.css?v=1.2.2" rel="stylesheet" />
</head>

<body class="landing-page">
  <!-- Navbar -->
  <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light py-2">
    <div class="container">
      <a class="navbar-brand mr-lg-5" href="../index.html">
        <img src="../assets/img/brand/logo.png">
        MEGA-MARKET
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse" id="navbar_global">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="../../../index.html">
                <img src="../assets/img/brand/blue.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                <span></span><div class="container">
                  
                
                </div>
                <span></span>
              </button>
            </div>
          </div>
        </div>

        <ul class="navbar-nav navbar-nav-hover align-items-lg-left  ml-lg-auto ">
          <li class="nav-item dropdown">
            <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
              <i class="ni ni-collection d-lg-none"></i>
              <span class="nav-link-inner--text">Productos</span>
            </a>
            <div class="dropdown-menu">
              @if (auth()->check())
                @if (auth()->user()->role_id == 1)
                  
                <a href="{{route('products.indexStore')}}" class="dropdown-item">Agregar Productos</a>
                <a href="" class="dropdown-item">Administrar Productos</a>
                @endif
              @endif
              <a href="" class="dropdown-item">Liquidos</a>
              <a href="" class="dropdown-item">Verduras y Frutas</a>
              <a href="" class="dropdown-item">Tecnologia</a>
              <a href="" class="dropdown-item">Juguetes</a>
              <a href="" class="dropdown-item">Ropa</a>
              <a href="" class="dropdown-item">Carniceria</a>
              <a href="" class="dropdown-item">Mascotas</a>
            </div> 
            </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
              <i class="ni ni-ui-04 d-lg-none"></i>
              <span class="nav-link-inner--text">Carrito</span>
            </a>
            
          </li>
           <li class="nav-item dropdown">
            <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
              <i class="ni ni-collection d-lg-none"></i>
              <span class="nav-link-inner--text">Mas...</span>
            </a>
            <div class="dropdown-menu">
              @if (auth()->check())
              <a href="/useruid/{{auth()->user()->id}}" class="dropdown-item">Mi Cuenta</a>
              <a href="{{route('logout')}}" class="dropdown-item">Cerrar Sesion</a>
              @else
              <a href="{{route('login')}}" class="dropdown-item">Iniciar sesion</a>
              <a href="{{route('register')}}" class="dropdown-item">Registrar</a>
              @endif
            </div>
            
          </li>
         </ul>
        <!--<ul class="navbar-nav align-items-lg-center ml-lg-auto">
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="https://www.facebook.com/CreativeTim/" target="_blank" data-toggle="tooltip" title="Like us on Facebook">
              <i class="fa fa-facebook-square"></i>
              <span class="nav-link-inner--text d-lg-none">Facebook</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="https://www.instagram.com/creativetimofficial" target="_blank" data-toggle="tooltip" title="Follow us on Instagram">
              <i class="fa fa-instagram"></i>
              <span class="nav-link-inner--text d-lg-none">Instagram</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="https://twitter.com/creativetim" target="_blank" data-toggle="tooltip" title="Follow us on Twitter">
              <i class="fa fa-twitter-square"></i>
              <span class="nav-link-inner--text d-lg-none">Twitter</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="https://github.com/creativetimofficial/argon-design-system" target="_blank" data-toggle="tooltip" title="Star us on Github">
              <i class="fa fa-github"></i>
              <span class="nav-link-inner--text d-lg-none">Github</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="btn btn-neutral" href="https://www.creative-tim.com/builder/argon" target="_blank">
              <span class="nav-link-inner--text">Online Builder</span>
            </a>
          </li>
          <li class="nav-item d-none d-lg-block">
            <a href="https://www.creative-tim.com/product/argon-design-system-pro?ref=ads-upgrade-pro" target="_blank" class="btn btn-neutral btn-icon">
              <span class="btn-inner--icon">
                <i class="fa fa-shopping-cart"></i>
              </span>
              <span class="nav-link-inner--text">Upgrade to PRO</span>
            </a>
          </li> -->
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <!-- Navbar Productos-->
 
  <!-- Navbar Productos-->
  <div class="wrapper">
    <div class="section section-hero section-shaped">
      <div class="shape shape-style-1 shape-default">
        <span class="span-150"></span>
        <span class="span-50"></span>
        <span class="span-50"></span>
        <span class="span-75"></span>
        <span class="span-100"></span>
        <span class="span-75"></span>
        <span class="span-50"></span>
        <span class="span-100"></span>
        <span class="span-50"></span>
        <span class="span-100"></span>
      </div>
      <div class="page-header">
        <div class="container align-items-center py-lg">
          <div class="col px-0">
            <div class="row align-items-center justify-content-center">
              <div class="col-lg-6 text-center">
                
                <h1 class="text-white display-1">Compras al instante!!</h1>
                <h2 class="display-4 font-weight-normal text-white">Nunca sabes lo que falta en tu hogar!</h2>
              </div>

            </div>
          </div>
        </div>
      </div>
      
      
    </div>


      <nav class="navbar navbar-dark bg-default">
        <div class="container">
          <a class="navbar-brand" href="{{route('productos' )}}">Buscar Productos</a>
          <div class="input-group mb-4">
            <input class="form-control" placeholder="Search" type="text">
            <button class="btn btn-secondary" type="button">
              <i class="fa fa-search"></i>
            </button>
            
          </div>
         
        </div>
      </nav>




        


      
    </div>

    <div class="section features-1  bg-secondary">

      <h1 class="text-center">Mejores Productos</h1>

      <div class="container">

        <div class="row">
          
          <div class="col-md-4">

            <div class="info">
       
              <h6 class="info-title text-uppercase text-primary">Mejores Ofertas</h6>
              <p class="description opacity-8"></p>

            </div>

            <div id="carousel_example" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carousel_example" data-slide-to="0" class="active"></li>
                <li data-target="#carousel_example" data-slide-to="1"></li>
                <li data-target="#carousel_example" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">  
                <div class="carousel-item active">
                  <img class="img-fluid" src="../assets/img/theme/img-1-1200x1000.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="img-fluid" src="../assets/img/theme/img-2-1200x1000.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="img-fluid" src="../assets/img/theme/img-1-1200x1000.jpg" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carousel_example" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carousel_example" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            <br>
            <a href="javascript:;" class="text-primary">Mas...
              <i class="ni ni-bold-right text-primary"></i>
            </a>
          </div>
          <div class="col-md-4">
            <div class="info">
              
      
              <h6 class="info-title text-uppercase text-success">Recomendados</h6>
              <p class="description opacity-8"></p>
             
            </div>
            <div id="carousel_example1" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carousel_example1" data-slide-to="0" class="active"></li>
                <li data-target="#carousel_example1" data-slide-to="1"></li>
                <li data-target="#carousel_example1" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="img-fluid" src="../assets/img/theme/img-1-1200x1000.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="img-fluid" src="../assets/img/theme/img-2-1200x1000.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="img-fluid" src="../assets/img/theme/img-1-1200x1000.jpg" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carousel_example1" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carousel_example1" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            <br>
            <a href="javascript:;" class="text-primary">Mas...
              <i class="ni ni-bold-right text-primary"></i>
            </a>
          </div>
          <div class="col-md-4">
            <div class="info">
  
              <h6 class="info-title text-uppercase text-warning">Popular</h6>
              <p class="description opacity-8"></p>

            </div>
            <div id="carousel_example2" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carousel_example2" data-slide-to="0" class="active"></li>
                <li data-target="#carousel_example2" data-slide-to="1"></li>
                <li data-target="#carousel_example2" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="img-fluid" src="../assets/img/theme/img-1-1200x1000.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="img-fluid" src="../assets/img/theme/img-2-1200x1000.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="img-fluid" src="../assets/img/theme/img-1-1200x1000.jpg" alt="Third slide">
                </div>
              </div>
              <br>
              <a class="carousel-control-prev" href="#carousel_example2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carousel_example2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            <a href="javascript:;" class="text-primary">Mas...
              <i class="ni ni-bold-right text-primary"></i>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="section features-1">
      <div class="container">

        <div class="row">
          
          <div class="col-md-4">

            <div class="info">
              <div class="icon icon-lg icon-shape icon-shape-primary shadow rounded-circle">
                <i class="ni ni-settings-gear-65"></i>
              </div>
              <h6 class="info-title text-uppercase text-primary">Social Conversations</h6>
              <p class="description opacity-8">We get insulted by others, lose trust for those others. We get back stabbed by friends. It becomes harder for us to give others a hand.</p>
              <a href="javascript:;" class="text-primary">More about us
                <i class="ni ni-bold-right text-primary"></i>
              </a>
            </div>

           

          </div>
          <div class="col-md-4">
            <div class="info">
              
              <div class="icon icon-lg icon-shape icon-shape-success shadow rounded-circle">
                <i class="ni ni-atom"></i>
              </div>
              <h6 class="info-title text-uppercase text-success">Analyze Performance</h6>
              <p class="description opacity-8">Don't get your heart broken by people we love, even that we give them all we have. Then we lose family over time. As we live, our hearts turn colder.</p>
              <a href="javascript:;" class="text-primary">Learn about our products
                <i class="ni ni-bold-right text-primary"></i>
              </a>
            </div>
        
          </div>
          <div class="col-md-4">
            <div class="info">
              <div class="icon icon-lg icon-shape icon-shape-warning shadow rounded-circle">
                <i class="ni ni-world"></i>
              </div>
              <h6 class="info-title text-uppercase text-warning">Measure Conversions</h6>
              <p class="description opacity-8">What else could rust the heart more over time? Blackgold. The time is now for it to be okay to be great. or being a bright color. For standing out.</p>
              <a href="javascript:;" class="text-primary">Check our documentation
                <i class="ni ni-bold-right text-primary"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br /><br />
    <footer class="footer">
      <div class="container">
        <div class="row row-grid align-items-center mb-5">
          <div class="col-lg-6">
            <h3 class="text-primary font-weight-light mb-2">Thank you for supporting us!</h3>
            <h4 class="mb-0 font-weight-light">Let's get in touch on any of these platforms.</h4>
          </div>
          <div class="col-lg-6 text-lg-center btn-wrapper">
            <button target="_blank" href="https://twitter.com/creativetim" rel="nofollow" class="btn btn-icon-only btn-twitter rounded-circle" data-toggle="tooltip" data-original-title="Follow us">
              <span class="btn-inner--icon"><i class="fa fa-twitter"></i></span>
            </button>
            <button target="_blank" href="https://www.facebook.com/CreativeTim/" rel="nofollow" class="btn-icon-only rounded-circle btn btn-facebook" data-toggle="tooltip" data-original-title="Like us">
              <span class="btn-inner--icon"><i class="fab fa-facebook"></i></span>
            </button>
            <button target="_blank" href="https://dribbble.com/creativetim" rel="nofollow" class="btn btn-icon-only btn-dribbble rounded-circle" data-toggle="tooltip" data-original-title="Follow us">
              <span class="btn-inner--icon"><i class="fa fa-dribbble"></i></span>
            </button>
            <button target="_blank" href="https://github.com/creativetimofficial" rel="nofollow" class="btn btn-icon-only btn-github rounded-circle" data-toggle="tooltip" data-original-title="Star on Github">
              <span class="btn-inner--icon"><i class="fa fa-github"></i></span>
            </button>
          </div>
        </div>
        <hr>
        <div class="row align-items-center justify-content-md-between">
          <div class="col-md-6">
            <div class="copyright">
              &copy; 2020 <a href="" target="_blank">Creative Tim</a>.
            </div>
          </div>
          <div class="col-md-6">
            <ul class="nav nav-footer justify-content-end">
              <li class="nav-item">
                <a href="" class="nav-link" target="_blank">Creative Tim</a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link" target="_blank">License</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="../assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/moment.min.js"></script>
  <script src="../assets/js/plugins/datetimepicker.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/bootstrap-datepicker.min.js"></script>
  <!-- Control Center for Argon UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <script src="../assets/js/argon-design-system.min.js?v=1.2.2" type="text/javascript"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-design-system-pro"
      });
  </script>
</body>

</html>