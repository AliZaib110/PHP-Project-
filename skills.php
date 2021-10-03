
<?php
include("connectionPakServe.php");
error_reporting(0);
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex,nofollow">
    <title>Skills</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <!-- Custom CSS -->
   <link href="css/style.min.css" rel="stylesheet">
   
   <style>
   @import url("https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Montserrat", sans-serif;
}
h2{
  color: orange;
  font-weight: 600;
}
p
{
  color: orange;
  font-weight: 100;

}

body {
  background: white;    
 /* #585c68;*/
}

.wrapper {
  width: 780px;
  margin: 100px auto 0;
}

.wrapper .title {
  font-size: 24px;
  color: #fff;
  font-weight: 700;
  text-align: center;
  margin-bottom: 50px;
}

.container {
  display: flex;
  flex-wrap: wrap;
}

.container .option_item {
  display: block;
  position: relative;
  width: 175px;
  height: 175px;
  margin: 10px;
}

.container .option_item .checkbox {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1;
  opacity: 0;
}

.option_item .option_inner {
  width: 100%;
  height: 100%;
  background: #fff;
  border-radius: 5px;
  text-align: center;
  padding: 58px 40px;
  cursor: pointer;
  color: #585c68;
  display: block;
  border: 5px solid transparent;
  position: relative;
}

.option_item .option_inner .icon {
  margin-bottom: 10px;
  
}

.option_item .option_inner .icon .fab {
  font-size: 32px;
 
}

.option_item .option_inner .name {
  user-select: none;
}

.option_item .checkbox:checked ~ .option_inner.facebook {
  border-color:  black;
  color: black;
}

.option_item .checkbox:checked ~ .option_inner.twitter {
  border-color: black;
  color: black
}

.option_item .checkbox:checked ~ .option_inner.instagram {
  border-color: black;
  color: black;
}

.option_item .checkbox:checked ~ .option_inner.linkedin {
  border-color: black;
  color: black;
}

.option_item .checkbox:checked ~ .option_inner.whatsapp {
  border-color: black;
  color: black;
}

.option_item .checkbox:checked ~ .option_inner.google {
  border-color: black;
  color: black;
}

.option_item .checkbox:checked ~ .option_inner.reddit {
  border-color: black;
  color: black;
}

.option_item .checkbox:checked ~ .option_inner.quora {
  border-color: black;
  color: black;
}

.option_item .checkbox:checked ~ .option_inner.quora {
  border-color: black;
  color: black;
}


.option_item .option_inner .tickmark {
  position: absolute;
  top: -1px;
  left: -1px;
  border: 20px solid;
  border-color: #000 transparent transparent #000;
  display: none;
}

.option_item .option_inner .tickmark:before {
  content: "";
  position: absolute;
  top: -18px;
  left: -18px;
  width: 15px;
  height: 5px;
  border: 3px solid;
  border-color: transparent transparent #fff #fff;
  transform: rotate(-45deg);
}

.option_item .checkbox:checked ~ .option_inner .tickmark {
  display: block;
}

.option_item .option_inner.facebook .tickmark {
  border-color: orange transparent transparent orange;
}

.option_item .option_inner.twitter .tickmark {
  border-color: orange transparent transparent orange;
}

.option_item .option_inner.instagram .tickmark {
  border-color: orange transparent transparent orange;
}

.option_item .option_inner.linkedin .tickmark {
  border-color: orange transparent transparent orange;
}

.option_item .option_inner.whatsapp .tickmark {
  border-color: orange transparent transparent orange;
}

.option_item .option_inner.google .tickmark {
  border-color: orange transparent transparent orange;
}

.option_item .option_inner.reddit .tickmark {
  border-color: orange transparent transparent orange;
}

.option_item .option_inner.quora .tickmark {
  border-color: orange transparent transparent orange;
}

.option_item .option_inner.quora .tickmark {
  border-color: orange transparent transparent orange;

}
</style>
   </head>

<body>
<form action="" method="GET">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="dashboard.html">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!-- Dark Logo icon -->
                            <!-- <img src="plugins/images/logo-icon.png" alt="homepage" /> -->
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <!-- <img src="plugins/images/logo-text.png" alt="homepage" /> -->
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-none d-md-block d-lg-none">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white"
                                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav ms-auto d-flex align-items-center">

                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class=" in">
                            <form role="search" class="app-search d-none d-md-block me-3">
                                <input type="text" placeholder="Search..." class="form-control mt-0">
                                <a href="" class="active">
                                    <i class="fa fa-search"></i>
                                </a>
                            </form>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li>
                            <a class="profile-pic" href="">
                                <img src="img/profile-pic.jpg" alt="user-img" width="36"
                                    class="img-circle"><span class="text-white font-medium">Admin</span></a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="dashboard.html"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="profile.html"
                                aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Profile</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="education.html"
                                aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Education</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="work_experience.html"
                                aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Work Experience</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="skills.html"
                                aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Skills</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="portfolio.html"
                                aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Portfolio</span>
                            </a>
                        </li>
                       
                        
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Skills Page</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="#" class="fw-normal">Dashboard</a></li>
                            </ol>
                            <!-- <a href="https://www.wrappixel.com/templates/ampleadmin/" target="_blank"
                                class="btn btn-danger  d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white">Upgrade
                                to Pro</a> -->
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <!-- <div class="col-lg-4 col-xlg-3 col-md-12">
                        <div class="white-box">
                            <div class="user-bg"> <img width="100%" alt="user" src="plugins/images/large/img1.jpg">
                                <div class="overlay-box">
                                    <div class="user-content">
                                        <a href="javascript:void(0)"><img src="plugins/images/users/genu.jpg"
                                                class="thumb-lg img-circle" alt="img"></a>
                                        <h4 class="text-white mt-2">User Name</h4>
                                        <h5 class="text-white mt-2">info@myadmin.com</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="user-btm-box mt-5 d-md-flex">
                                <div class="col-md-4 col-sm-4 text-center">
                                    <h1>258</h1>
                                </div>
                                <div class="col-md-4 col-sm-4 text-center">
                                    <h1>125</h1>
                                </div>
                                <div class="col-md-4 col-sm-4 text-center">
                                    <h1>556</h1>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- Column -->
                    <!-- Column -->
                    
<div class="wrapper">
  <div class="title">
   <h2>Select your skills</h2>
      <p>please select what type of tasks you would like to do.</p>
    <br><br><br>
  </div>

  <div class="container">
    <label class="option_item">
      <input type="checkbox" class="checkbox">
      <div class="option_inner facebook">
        <div class="tickmark"></div>
        <div class="icon"><i class=""></i></div>
        <div class="name">AC Services</div>
      </div>
    </label>
    <label class="option_item">
      <input type="checkbox" class="checkbox">
      <div class="option_inner twitter">
        <div class="tickmark"></div>
        <div class="icon"><i class=""></i></div>
        <div class="name">Carpanter</div>
      </div>
    </label>
    <label class="option_item">
      <input type="checkbox" class="checkbox">
      <div class="option_inner instagram">
        <div class="tickmark"></div>
        <div class="icon"><i class=""></i></div>
        <div class="name">Driver</div>
      </div>
    </label>
    <label class="option_item">
      <input type="checkbox" class="checkbox">
      <div class="option_inner linkedin">
        <div class="tickmark"></div>
        <div class="icon"><i class=""></i></div>
        <div class="name">Teacher</div>
      </div>
    </label>
    <label class="option_item">
      <input type="checkbox" class="checkbox">
      <div class="option_inner whatsapp">
        <div class="tickmark"></div>
        <!-- <div class="icon"><i class="fab fa-whatsapp"></i></div> -->
        <div class="name">Software Developer</div>
      </div>
    </label>
    <label class="option_item">
      <input type="checkbox" class="checkbox">
      <div class="option_inner google">
        <div class="tickmark"></div>
        <div class="icon"><i class=""></i></div>
        <div class="name">Worker/Labour</div>
      </div>
    </label>
    <label class="option_item">
      <input type="checkbox" class="checkbox">
      <div class="option_inner reddit">
        <div class="tickmark"></div>
        <div class="icon"><i class=""></i></div>
        <div class="name">Electrician</div>
      </div>
    </label>
    <label class="option_item">
      <input type="checkbox" class="checkbox">
      <div class="option_inner quora">
        <div class="tickmark"></div>
        <div class="icon"><i class=""></i></div>
        <div class="name">Content Writer</div>
      </div>
    </label>
    <label class="option_item">
      <input type="checkbox" class="checkbox">
      <div class="option_inner quora">
        <div class="tickmark"></div>
        <div class="icon"><i class=""></i></div>
        <div class="name">Others</div>
      </div>
    </label>
  </div>
  <input type="submit" class="btn btn-success" value="Save">

</div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center"> 2021 © Ali Zaib Productions
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    
</form>

<?php

// if($_GET['submit'])
//   {
//     $us   = $_GET['username'];
//     $em   = $_GET['email'];
//     $dob  = $_GET['dob'];
//     $gn   = $_GET['gender'];
//     $pswd = $_GET['password'];
//     $pn   = $_GET['phone'];
//     $cn   = $_GET['country'];

//     if($us!="" && $em!="" && $dob!="" && $gn!="" && $pswd!="" && $pn!="" && $cn!="" )
//     {
//       $query ="INSERT INTO profile VALUE ('$us' , '$em' , '$dob' , '$gn' , '$pswd' , '$pn' , '$cn')";
//       $data  =mysqli_query($conn, $query);

//       if($data)
//       {
//         echo "Data inserted into batabase";
//       }

//     }
//     else 
//     {
//       echo "All field required";
//     }
    
//   }

?>  
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>

    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	
</body>

</html>