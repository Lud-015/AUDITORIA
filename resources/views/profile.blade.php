<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Perfil
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

<body class="profile-page">
  <!-- Navbar -->
  <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light py-2">
    <div class="container">
      <a class="navbar-brand mr-lg-5" href="../index.html">
        <img src="../assets/img/brand/logo.png">
        MEGAMARKET / PERFIL
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
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
    
        <ul class="navbar-nav align-items-lg-center ml-lg-auto">
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
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="wrapper">
    <section class="section-profile-cover section-shaped my-0">
      <!-- Circles background -->
      <img class="bg-image" src="../assets/img/pages/mohamed.jpg" style="width: 100%;">
      <!-- SVG separator -->
      <div class="separator separator-bottom separator-skew">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-secondary" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </section>
    <section class="section bg-secondary">
      <div class="container">
        <div class="card card-profile shadow mt--300">
          <div class="px-4">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="javascript:;">
                    <img src="https://cdn.icon-icons.com/icons2/3446/PNG/512/account_profile_user_avatar_icon_219236.png" class="rounded-circle">
                  </a>
                </div>
              </div>
              <div class="col-lg-4 order-lg-3 text-lg-right align-self-lg-center">
                <!-- <div class="card-profile-actions py-4 mt-lg-0">
                  <a href="#" class="btn btn-sm btn-info mr-4">Connect</a>
                  <a href="#" class="btn btn-sm btn-default float-right">Message</a>
                </div> -->
              </div>
              <div class="col-lg-4 order-lg-1">
                <div class="card-profile-stats d-flex justify-content-center">
                  <div>
                    <span class="heading">22</span>
                    <span class="description">Nro. Facturas</span>
                  </div>
                  <div>
                    <span class="heading">10</span>
                    <span class="description">Nro. Compras</span>
                  </div>
                  <div>
                    <span class="heading">89</span>
                    <span class="description">Producto mas comprado</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="text-center mt-5">
              <h3>{{$user->name}}<span class="font-weight-light"></span></h3>
              <div class="h6 font-weight-300"><i class="ni location_pin mr-2"></i>{{$user->lastname}},{{$user->lastname1}}</div>
              <div class="h6 mt-4"><i class="ni business_briefcase-24 mr-2"></i>CI: {{$user->CI}} - Fecha Nacimiento: {{$user->fechaNacimiento}}</div>
              <div><i class="ni education_hat mr-2"></i>Rol: {{$user->roles->name}}</div>
            </div>
            <div class="mt-5 py-5 border-top text-center">
              <div class="row justify-content-center">
                <div class="col-lg-9">
                  
<div class="wrapper ">
  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading active" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Collapsible Group Item #1
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="container">
        <div class="row le-hide">
            
           <div class="col-lg-12">
            <div class="m-0 row p-3">
              <div class="col-md-3 col-lg-2 p-0">
               <strong class="pl-lg-2"> ID</strong>
              </div>
              <div class="col-sm-12 col-lg-3 p-0 pl-lg-5">
               <strong> Name</strong>
              </div>
              <div class="col-sm-12 col-lg-3 p-0 pl-lg-5">
                <strong>Email</strong>
              </div>
              <div class="col-sm-12 col-lg-3 p-0 pl-lg-5">
                  <strong>Contact</strong>
              </div>
              <div class="col-sm-12 col-lg-1 p-0">
                <strong>Action</strong>
              </div>
            </div>
          </div>
          
          
        </div>
        <div class="row">
         <div class="col-sm-4 col-lg-12 mt-2 mb-2">
            <div class="m-0 row row-container bg-white p-3">
              <div class="col-md-3 col-lg-2 p-0 pl-lg-2">
                14310699
              </div>
              <div class="col-sm-12 col-lg-3  p-0 p-0 pl-lg-5">
                Lorem Ipsum Longname
              </div>
              <div class="col-sm-12 col-lg-3 p-0 p-0 pl-lg-5">
                usermaster@gmail.com
              </div>
              <div class="col-sm-12 col-lg-3 p-0 p-0 pl-lg-5">
                09186886862
              </div>
              <div class="col-sm-12 col-lg-1 p-0">
      
                    
                    <button class="btn btn-sm btn-success d-inline-block mr-1"><i class="fas fa-edit"></i>                </button>
                <button class="btn btn-sm btn-danger d-inline-block"><i class="fas fa-trash-alt"></i></i>               </button>
                    
      
              </div>
            </div>
          </div>
          
          <div class="col-sm-4 col-lg-12 mt-2 mb-2">
            <div class="m-0 row row-container bg-white p-3">
              <div class="col-md-3 col-lg-2 p-0 pl-lg-2">
                14310699
              </div>
              <div class="col-sm-12 col-lg-3  p-0 p-0 pl-lg-5">
                Lorem Ipsum Longname
              </div>
              <div class="col-sm-12 col-lg-3 p-0 p-0 pl-lg-5">
                usermaster@gmail.com
              </div>
              <div class="col-sm-12 col-lg-3 p-0 p-0 pl-lg-5">
                <span class="mr-5">09186886862</span>
              </div>
              <div class="col-sm-12 col-lg-1 p-0">
      
                    
                    <button class="btn btn-sm btn-success d-inline-block mr-1"><i class="fas fa-edit"></i>                </button>
                <button class="btn btn-sm btn-danger d-inline-block"><i class="fas fa-trash-alt"></i></i>               </button>
                    
      
              </div>
            </div>
          </div>
        
      <div class="col-sm-4 col-lg-12 mt-2 mb-2">
            <div class="m-0 row row-container bg-white p-3">
              <div class="col-md-3 col-lg-2 p-0 pl-lg-2">
                14310699
              </div>
              <div class="col-sm-12 col-lg-3  p-0 p-0 pl-lg-5">
                Lorem Ipsum Longname
              </div>
              <div class="col-sm-12 col-lg-3 p-0 p-0 pl-lg-5">
                usermaster@gmail.com
              </div>
              <div class="col-sm-12 col-lg-3 p-0 p-0 pl-lg-5">
                <span class="mr-5">09186886862</span>
              </div>
              <div class="col-sm-12 col-lg-1 p-0">
      
                    
                    <button class="btn btn-sm btn-success d-inline-block mr-1"><i class="fas fa-edit"></i>                </button>
                <button class="btn btn-sm btn-danger d-inline-block"><i class="fas fa-trash-alt"></i></i>               </button>
                    
      
              </div>
            </div>
          </div>
      
      
      
        
        </div>
      </div>
    </div>
  </div>


</div>
</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer class="footer">
      <div class="container">
        <div class="row row-grid align-items-center mb-5">
          <div class="col-lg-6">
            <h3 class="text-primary font-weight-light mb-2">Gracias por su visita!</h3>
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
              &copy; 2023 <a href="" target="_blank">StarduztOne Ver Alpha 1.0.0</a>.
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