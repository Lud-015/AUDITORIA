<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  <title>
    Argon Design System by Creative Tim
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

  <nav id="navbar-main" class="navbar navbar-dark bg-default">
    <div class="container">
      <a class="navbar-brand mr-lg-5" href="../index.html">
        <img src="../assets/img/brand/logo.png">
        MEGA-MARKET
      </a>
      <span class="navbar-brand" href="javascript:;">Buscar Productos</span>

      <div class="input-group mb-4">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
        </div>
        <input class="form-control" placeholder="Search" type="text">
      </div>
    </div>
    @include('cart')
    @if (auth()->check())
    <div class="col-md-3">
      <button type="button" class="btn btn-block btn-secondary mb-3" data-toggle="modal" data-target="#modal-form">Mi cuenta</button>
      <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
          <div class="modal-content">
            <div class="modal-body p-0">
              <div class="card bg-secondary shadow border-0 mb-0">
                <div class="card-header bg-white pb-5">
                  <div class="text-muted text-center mb-3">
                    <small>Sign in with</small>
                  </div>
                  <div class="btn-wrapper text-center">
                    <a href="javascript:;" class="btn btn-neutral btn-icon">
                      <span class="btn-inner--icon">
                        <img src="./assets/img/icons/common/github.svg">
                      </span>
                      <span class="btn-inner--text">Github</span>
                    </a>
                    <a href="javascript:;" class="btn btn-neutral btn-icon">
                      <span class="btn-inner--icon">
                        <img src="./assets/img/icons/common/google.svg">
                      </span>
                      <span class="btn-inner--text">Google</span>
                    </a>
                  </div>
                </div>
                <div class="card-body px-lg-5 py-lg-5">
                  <div class="text-center text-muted mb-4">
                    <small>Or sign in with credentials</small>
                  </div>
                  <form role="form">
                    <div class="form-group mb-3">
                      <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                        </div>
                        <input class="form-control" placeholder="Email" type="email">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                        </div>
                        <input class="form-control" placeholder="Password" type="password">
                      </div>
                    </div>
                    <div class="custom-control custom-control-alternative custom-checkbox">
                      <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                      <label class="custom-control-label" for=" customCheckLogin">
                        <span>Remember me</span>
                      </label>
                    </div>
                    <div class="text-center">
                      <button type="button" class="btn btn-primary my-4">Sign in</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @else
    <div class="col-md-3">
      <button type="button" class="btn btn-block btn-default mb-3" data-toggle="modal" data-target="#modal-form">Iniciar Sesion</button>
      <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
          <div class="modal-content">
            <div class="modal-body p-0">
              <div class="card bg-secondary shadow border-0 mb-0">
                <div class="card-header bg-white pb-5">
                  <div class="text-muted text-center mb-3">
                    <small>Sign in with</small>
                  </div>
                  <div class="btn-wrapper text-center">
                    <a href="javascript:;" class="btn btn-neutral btn-icon">
                      <span class="btn-inner--icon">
                        <img src="./assets/img/icons/common/github.svg">
                      </span>
                      <span class="btn-inner--text">Github</span>
                    </a>
                    <a href="javascript:;" class="btn btn-neutral btn-icon">
                      <span class="btn-inner--icon">
                        <img src="./assets/img/icons/common/google.svg">
                      </span>
                      <span class="btn-inner--text">Google</span>
                    </a>
                  </div>
                </div>
                <div class="card-body px-lg-5 py-lg-5">
                  <div class="text-center text-muted mb-4">
                    <small>Or sign in with credentials</small>
                  </div>
                  <form role="form">
                    <div class="form-group mb-3">
                      <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                        </div>
                        <input class="form-control" placeholder="Email" type="email">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                        </div>
                        <input class="form-control" placeholder="Password" type="password">
                      </div>
                    </div>
                    <div class="custom-control custom-control-alternative custom-checkbox">
                      <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                      <label class="custom-control-label" for=" customCheckLogin">
                        <span>Remember me</span>
                      </label>
                    </div>
                    <div class="text-center">
                      <button type="button" class="btn btn-primary my-4">Sign in</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    @endif
  </nav>


  <!-- End Navbar -->

    </div>
    

    </div>
    <div class="section features-1">
      
      <div class="container">
        <div class="online-all-courses ">
          <div class="container">
            <div class="row">
              <div class="col-md-3 sticky-sidebar">
                <div class="all-course-left">
                  <div class="category-course-search">
                    <h2>Categorias </h2>
                    <form class="advanced_seach">
                      <div class="form-group">
                        <div class="checkbox checkbox-success">
                          <label>
                            <input type="checkbox"> <span>Todos</span>
                          </label>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox"> <span>Lacteos</span>
                          </label>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox"> <span>Masas</span>
                          </label>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox"> <span>Niños</span>
                          </label>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox"> <span>Jugos</span>
                          </label>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox"> <span>Vegetales</span>
                          </label>
                        </div>
                      </div>
    
                    </form>
    
                  </div>
                </div>
              </div>
    
              <div class="col-md-9 sticky-body">
                  <div class="all-course-right">
                    <div class="row">
                    @foreach ($products as $products)
                      
                    <div class="col-sm-4 col-5">
                      <img src="../products/{{$products->content}}" alt="Rounded image" class="img-fluid rounded shadow" style="width: 150px;">
                      <small class="d-block text-uppercase font-weight-bold ">{{$products->name}}</small>
                      <small class="d-block text-uppercase font-weight-bold ">{{$products->price}} Bs</small>
                      @if (Auth()->user()->role_id == 1)
                      <small class="d-block text-uppercase font-weight-bold ">En stock {{$products->stock}}</small>
                      <a href="#" type="submit" 
                      class="btn btn-warning btn-sm">
                      <i class="ni ni-cart"></i>
                      <b> Modificar Producto  </b>
                    </a>
                    <a href="#" type="submit" 
                    class="btn btn-danger btn-sm">
                    <i class="ni ni-cart"></i>
                    <b> Quitar Producto </b>
                  </a>
                      @endif

                      <p>
                      @if ($products->stock == 0)
                      <a href="#" type="submit" 
                        class="btn btn-danger btn-sm">
                        <i class="ni ni-cart"></i>
                        <b> Agotado  </b>
                      </a>
                      @else
                      <a href="{{route('añadir', $products->id)}}" type="submit" 
                        class="btn btn-default btn-sm">
                        <i class="ni ni-cart"></i>
                        <b> Añadir al carrito  </b>
                      </a>
                      @endif
              
                      </form>
                    </p>
                    </div>

                    @endforeach

                  </div>
                </div>


              
                </div>
              </div>
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
            <h3 class="text-primary font-weight-light mb-2">Gracias por su visita!</h3>
            <h4 class="mb-0 font-weight-light">Siguenos en las siguientes plataformas.</h4>
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