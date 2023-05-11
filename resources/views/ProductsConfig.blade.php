
<!--
=========================================================
* Argon Design System - v1.2.2
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-design-system
* Copyright 2020 Creative Tim (https://www.creative-tim.com)

Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/logo.png">
  <title>
    Registrar Productos
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
      <a class="navbar-brand mr-lg-5" href="{{route('home')}}">
        <img src="../assets/img/brand/logo.png">
        MEGA-MARKET
      </a>
      <span class="navbar-brand">Agregar Productos</span>


    </div>
  </nav>


  <!-- End Navbar -->

    </div>
    
    <div class="section features-1">
      
      <div class="container">
          <div class="container mb-5">
            <!-- Inputs -->
            <h3 class="h4 text-success font-weight-bold mb-4">Ingrese los datos del producto</h3>
            <form enctype="multipart/form-data" method="post">
                @csrf
            <div class="row">
              <div class="col-lg-6 ">
                <div class="mb-3">
                  <small class="text-uppercase font-weight-bold">Nombre</small>
                </div>
                <div class="form-group">
                  <input type="textarea" placeholder="Ej: Jugo" class="form-control" name="name">
                </div>
                <div class="mb-3">
                  <small class="text-uppercase font-weight-bold">Descripcion</small>
                </div>
                <div class="form-group">
                  <textarea type="text" placeholder="Ej: Jugo con paquete de 3x3" class="form-control" rows="4" cols="50" name="description"></textarea>
                </div>
                <div class="mb-3">
                  <small class="text-uppercase font-weight-bold">Precio</small>
                </div>
                <div class="form-group">
                  <input type="number" required placeholder="0.00" class="form-control" step="0.01" name="price">
                </div>
  
              </div>
              <div class="col-lg-4 col-sm-6">
                <div class="mb-3">
                  <small class="text-uppercase font-weight-bold">Stock</small>
                </div>
                <div class="form-group">
                  <input type="number" placeholder="0" class="form-control" name="stock">
                </div>
                <div class="mb-3">
                  <small class="text-uppercase font-weight-bold">Imagen</small>
                </div>
                <div class="form-group">
                  <input type="file" placeholder="0" class="form-control" name="content">
                </div>
                
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <!-- Checkboxes -->
              <div class="mb-3">
                <small class="text-uppercase font-weight-bold">Categoria</small>
              </div>
              <div class="custom-control custom-checkbox mb-3">
                <input class="custom-control-input" id="customCheck1" type="checkbox">
                <label class="custom-control-label" for="customCheck1">
                  <span>Unchecked</span>
                </label>
              </div>
              <input type="submit" class="btn btn-success" placeholder="Registrar" value="Registrar">
            </div>  
          </form>
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
              &copy; 2023 <a href="" target="_blank">Creative Tim</a>.
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