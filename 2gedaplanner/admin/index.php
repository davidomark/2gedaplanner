<?php
include ("dbconn.php");
 $user = $_GET['user'];
     if(!$conn){
         die("connection failed: ".mysqli_connect_error());
     }else if (isset($user)) {
        session_start();
     $_SESSION['user']=$user;
     }else {
         header("location: auth-login.html");
     }
    
     
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8" />
        <title>Dashboard |2geda</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->

        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

        <!-- icons -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    </head>

    <!-- body start -->
    <body class="loading" data-layout-color="light"  data-layout-mode="default" data-layout-size="fluid" data-topbar-color="light" data-leftbar-position="fixed" data-leftbar-color="light" data-leftbar-size='default' data-sidebar-user='true'>

        <!-- Begin page -->
        <div id="wrapper">


            <!-- Topbar Start -->
            <div class="navbar-custom">
                    <ul class="list-unstyled topnav-menu float-end mb-0">

    
                        <li class="dropdown notification-list topbar-dropdown">
                            <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="assets/images/users/user-1.jpg" alt="user-image" class="rounded-circle">
                                <span class="pro-user-name ms-1">
                                <?=strtoupper($user)?> <i class="mdi mdi-chevron-down"></i> 
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>
    
                                <!-- item-->
                                
    
                                <!-- item-->
                                <a href="auth-logout.php?user=superuser" class="dropdown-item notify-item">
                                    <i class="fe-lock"></i>
                                    <span>Lock Screen</span>
                                </a>
    
                                <div class="dropdown-divider"></div>
    
                                <!-- item-->
                                <a href="auth-logout.php?user=superuser" class="dropdown-item notify-item">
                                    <i class="fe-log-out"></i>
                                    <span>Logout</span>
                                </a>
    
                            </div>
                        </li>
    
                        <li class="dropdown notification-list">
                            <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                                <i class="fe-settings noti-icon"></i>
                            </a>
                        </li>
    
                    </ul>
    
                    <!-- LOGO -->
                    <div class="logo-box">
                        <a href="index.php?user=superadmin" class="logo logo-light text-center">
                            <span class="logo-sm">
                                <img src="assets/images/2gedamid2.png" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="assets/images/logo-light.png" alt="" height="16">
                            </span>
                        </a>
                        <a href="index.php?user=superadmin" class="logo logo-dark text-center">
                            <span class="logo-sm">
                                <img src="assets/images/logo-sm.png" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="assets/images/logo-dark.png" alt="" height="16">
                            </span>
                        </a>
                    </div>

                    <ul class="list-unstyled topnav-menu topnav-menu-left mb-0">
                        <li>
                            <button class="button-menu-mobile disable-btn waves-effect">
                                <i class="fe-menu"></i>
                            </button>
                        </li>
    
                        <li>
                            <h4 class="page-title-main">Dashboard</h4>
                        </li>

            
                    </ul>

                    <div class="clearfix"></div> 
               
            </div>
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="h-100" data-simplebar>

                     <!-- User box -->
                    <div class="user-box text-center">

                        <img src="assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle img-thumbnail avatar-md">
                            <div class="dropdown">
                                <a href="#" class="user-name dropdown-toggle h5 mt-2 mb-1 d-block" data-bs-toggle="dropdown"  aria-expanded="false"><?=strtoupper($user)?></a>
                                <div class="dropdown-menu user-pro-dropdown">

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fe-user me-1"></i>
                                        <span>My Account</span>
                                    </a>
        
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fe-settings me-1"></i>
                                        <span>Settings</span>
                                    </a>
        
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fe-lock me-1"></i>
                                        <span>Lock Screen</span>
                                    </a>
        
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fe-log-out me-1"></i>
                                        <span>Logout</span>
                                    </a>
        
                                </div>
                            </div>

                        <p class="text-muted left-user-info">Admin Head</p>

                       
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul id="side-menu">

                            <li class="menu-title">Navigation</li>
                
                            <li>
                                <a href="index.php?user=superadmin">
                                    <i class="mdi mdi-view-dashboard-outline"></i>
                                    <span class="badge bg-success rounded-pill float-end"></span>
                                    <span> Dashboard </span>
                                </a>
                            </li>

                            <li class="menu-title mt-2">Orders</li>

                                    <li>
                                        <a href="tables-editable.php?user=superadmin">
                                            <i class="mdi mdi-calendar-blank-outline"></i>
                                            <span> Orders </span>
                                        </a>
                                    </li>
                                     <li>
                                <a href="link.php?user=superadmin">
                                    <i class="mdi mdi-link"></i>
                                    <span> Link Generator </span>
                                </a>
                            </li>
                            </ul>

                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
         
            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <div class="row">

                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
 <style>
                           table{
                                overflow-y:scroll;
                                height:300px;
                                display: block;
                                }
                       </style>
    
                                        <h4 class="header-title mt-0 mb-4">Total Orders</h4>
                                        <?php
                                            $sql = "SELECT * FROM bride";
                                            if ($result=mysqli_query($conn, $sql)) {
                                                $rowcount = mysqli_num_rows( $result );
                                            }
                                            
                                        ?>
                                        <div class="widget-chart-1">
                                            <div class="widget-chart-box-1 float-start" dir="ltr">
                                                <input data-plugin="knob" data-width="70" data-height="70" data-fgColor="#f05050 "
                                                       data-bgColor="#F9B9B9" value="<?=$rowcount?>"
                                                       data-skin="tron" data-angleOffset="180" data-readOnly=true
                                                       data-thickness=".15"/>
                                            </div>
                                            <?php
                                            $stat = "pending";
                                            $sql2 = "SELECT * FROM bride WHERE `status` = '$stat'";
                                            if ($result2=mysqli_query($conn, $sql2)) {
                                                $rowcount2 = mysqli_num_rows( $result2 );
                                            }
                                            
                                        ?>
                                            <div class="widget-detail-1 text-end">
                                                <h2 class="fw-normal pt-2 mb-1"> <?=$rowcount2?> </h2>
                                                <p class="text-muted mb-1">Pending Orders</p>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">

    
                                        <h4 class="header-title mt-0 mb-3">Package Analysis</h4>
                                        <?php
                                        $cpack= "CLASSIC PACKAGE";
                                        $sql3 = "SELECT * FROM bride WHERE `packages` = '$cpack'";
                                            if ($result3=mysqli_query($conn, $sql3)) {
                                                $rowcount3 = mysqli_num_rows( $result3 );
                                                  
                                                   
                                                    if (isset($rowcount) && isset($rowcount3)) {
                                                        $div = $rowcount3 / $rowcount;
                                                        $calc = round($div * 100);
                                                    }
                                            
                                                
                                            }
                                            
                                        ?>
                                        <div class="widget-box-2">
                                            <div class="widget-detail-2 text-end">
                                                <span class="badge bg-success rounded-pill float-start mt-3"><?=$calc?>% <i class="mdi mdi-trending-up"></i> </span>
                                                <h2 class="fw-normal mb-1"> <?=$rowcount3?> </h2>
                                                <p class="text-muted mb-3">Classic Package</p>
                                            </div>
                                           
                                            <div class="progress progress-bar-alt-success progress-sm">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                        aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: <?=$calc?>%;">
                                                    <span class="visually-hidden"><?=$calc?>% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col -->
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">

    
                                        <h4 class="header-title mt-0 mb-3">Package Analysis</h4>
                                        <?php
                                        $ppack= "PREMIUM PACKAGE";
                                        $sqls = "SELECT * FROM bride WHERE `packages` = '$ppack'";
                                            if ($results=mysqli_query($conn, $sqls)) {
                                                $rowcounts = mysqli_num_rows( $results );
                                                  
                                                   
                                                    if (isset($rowcount) && isset($rowcounts)) {
                                                        $divs = $rowcounts / $rowcount;
                                                        $calcs = round($divs * 100);
                                                    }
                                            
                                                
                                            }
                                            
                                        ?>
                                        <div class="widget-box-2">
                                            <div class="widget-detail-2 text-end">
                                                <span class="badge bg-danger rounded-pill float-start mt-3"><?=$calcs?>% <i class="mdi mdi-trending-up"></i> </span>
                                                <h2 class="fw-normal mb-1"> <?=$rowcounts?> </h2>
                                                <p class="text-muted mb-3">Premium Package</p>
                                            </div>
                                           
                                            <div class="progress progress-bar-alt-danger progress-sm">
                                                <div class="progress-bar bg-danger" role="progressbar"
                                                        aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: <?=$calcs?>%;">
                                                    <span class="visually-hidden"><?=$calcs?>% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col -->
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">

                                        <?php
                                        $bpack= "BASIC PACKAGE";
                                        $sql4 = "SELECT * FROM bride WHERE `packages` = '$bpack'";
                                            if ($result4=mysqli_query($conn, $sql4)) {
                                                $rowcount4 = mysqli_num_rows( $result4 );
                                                  
                                                   
                                                    if (isset($rowcount) && isset($rowcount4)) {
                                                        $div1 = $rowcount4 / $rowcount;
                                                        $calc1 = round($div1 * 100);
                                                    }
                                            
                                                
                                            }
                                            
                                        ?>
    
                                        <h4 class="header-title mt-0 mb-4">Package Analysis</h4>
    
                                        <div class="widget-chart-1">
                                            <div class="widget-chart-box-1 float-start" dir="ltr">
                                                <input data-plugin="knob" data-width="70" data-height="70" data-fgColor="#ffbd4a"
                                                        data-bgColor="#FFE6BA" value="<?=$calc1."%"?>"
                                                        data-skin="tron" data-angleOffset="180" data-readOnly=true
                                                        data-thickness=".15"/>
                                            </div>
                                            <div class="widget-detail-1 text-end">
                                                <h2 class="fw-normal pt-2 mb-1"> <?=$rowcount4?> </h2>
                                                <p class="text-muted mb-1">Basic Package</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">

    
                                        <h4 class="header-title mt-0 mb-3">Package Analysis</h4>
                                        <?php
                                        $spack= "STANDARD PACKAGE";
                                        $sql5 = "SELECT * FROM bride WHERE `packages` = '$spack'";
                                            if ($result5=mysqli_query($conn, $sql5)) {
                                                $rowcount5 = mysqli_num_rows( $result5 );
                                                  
                                                   
                                                    if (isset($rowcount) && isset($rowcount5)) {
                                                        $div2 = $rowcount5 / $rowcount;
                                                        $calc2 = round($div2 * 100);
                                                    }
                                            
                                                
                                            }
                                            
                                        ?>
                                        <div class="widget-box-2">
                                            <div class="widget-detail-2 text-end">
                                                <span class="badge bg-pink rounded-pill float-start mt-3"><?=$calc2?>% <i class="mdi mdi-trending-up"></i> </span>
                                                <h2 class="fw-normal mb-1"> <?=$rowcount5?> </h2>
                                                <p class="text-muted mb-3">Standard Package</p>
                                            </div>
                                            <div class="progress progress-bar-alt-pink progress-sm">
                                                <div class="progress-bar bg-pink" role="progressbar"
                                                        aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: <?=$calc2?>%;">
                                                    <span class="visually-hidden"><?=$calc2?>% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div><!-- end col -->

                        </div>
                        <!-- end row -->

 
                        

                      
                            

                            
        
                        </div>
                        <!-- end row -->


                        <div class="row">
                            

                            <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-body">

    <style>
        .td{

        }
    </style>
                                        <h4 class="header-title mt-0 mb-3">Orders</h4>
                                        
                                        <div class="table-responsive">
                                            <table class="table table-hover mb-0">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Order Number</th>
                                                    <th>Package</th>
                                                    <th>Wedding Date</th>
                                                    <th>Status</th>
                                                    
                                                </tr>
                                                </thead>
                                               
                                                <tbody>
                                                <?php
                                            $sqlQuery = "SELECT * FROM bride";
                                            $qry = $conn->query($sqlQuery);
                                            
                                           
                                            while($row = $qry->fetch_assoc()){
                                            echo "<tr><td>".$row["bride_id"]."</td><td>".$row["orderid"]."</td><td>".$row["packages"]."</td><td>".$row["wedding_date"]."</td><td>".$row["status"]."</td><td>"."</td><td></tr>";
                                            }
                                            
                                            echo "</table>";
                                            ?>
                                                </tbody>
                                            </table>
                                           
                                       </div>
                                    </div> 
                                </div>
                               
                            </div><!-- end col -->

                        </div>
                        <!-- end row -->       
                        
                    </div> <!-- container-fluid -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <script>document.write(new Date().getFullYear())</script> &copy; 2geda by <a href="">Dave Animation Studio</a> 
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-end footer-links d-none d-sm-block">
                                    <a href="javascript:void(0);">About Us</a>
                                    <a href="javascript:void(0);">Help</a>
                                    <a href="javascript:void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>
            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">

            <div data-simplebar class="h-100">

                <div class="rightbar-title">
                    <a href="javascript:void(0);" class="right-bar-toggle float-end">
                        <i class="mdi mdi-close"></i>
                    </a>
                    <h4 class="font-16 m-0 text-white">Theme Customizer</h4>
                </div>
        
                <!-- Tab panes -->
                <div class="tab-content pt-0">  

                    <div class="tab-pane active" id="settings-tab" role="tabpanel">

                        <div class="p-3">
                            <div class="alert alert-warning" role="alert">
                                <strong>Customize </strong> the overall color scheme, Layout, etc.
                            </div>

                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Color Scheme</h6>
                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="layout-color" value="light"
                                    id="light-mode-check" checked />
                                <label class="form-check-label" for="light-mode-check">Light Mode</label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="layout-color" value="dark"
                                    id="dark-mode-check" />
                                <label class="form-check-label" for="dark-mode-check">Dark Mode</label>
                            </div>

                            <!-- Width -->
                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Width</h6>
                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="layout-size" value="fluid" id="fluid" checked />
                                <label class="form-check-label" for="fluid-check">Fluid</label>
                            </div>
                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="layout-size" value="boxed" id="boxed" />
                                <label class="form-check-label" for="boxed-check">Boxed</label>
                            </div>

                            <!-- Menu positions -->
                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Menus (Leftsidebar and Topbar) Positon</h6>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftbar-position" value="fixed" id="fixed-check"
                                    checked />
                                <label class="form-check-label" for="fixed-check">Fixed</label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftbar-position" value="scrollable"
                                    id="scrollable-check" />
                                <label class="form-check-label" for="scrollable-check">Scrollable</label>
                            </div>

                            <!-- Left Sidebar-->
                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Left Sidebar Color</h6>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftbar-color" value="light" id="light" />
                                <label class="form-check-label" for="light-check">Light</label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftbar-color" value="dark" id="dark" checked/>
                                <label class="form-check-label" for="dark-check">Dark</label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftbar-color" value="brand" id="brand" />
                                <label class="form-check-label" for="brand-check">Brand</label>
                            </div>

                            <div class="form-check form-switch mb-3">
                                <input type="checkbox" class="form-check-input" name="leftbar-color" value="gradient" id="gradient" />
                                <label class="form-check-label" for="gradient-check">Gradient</label>
                            </div>

                            <!-- size -->
                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Left Sidebar Size</h6>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftbar-size" value="default"
                                    id="default-size-check" checked />
                                <label class="form-check-label" for="default-size-check">Default</label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftbar-size" value="condensed"
                                    id="condensed-check" />
                                <label class="form-check-label" for="condensed-check">Condensed <small>(Extra Small size)</small></label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftbar-size" value="compact"
                                    id="compact-check" />
                                <label class="form-check-label" for="compact-check">Compact <small>(Small size)</small></label>
                            </div>

                            <!-- User info -->
                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Sidebar User Info</h6>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="sidebar-user" value="true" id="sidebaruser-check" />
                                <label class="form-check-label" for="sidebaruser-check">Enable</label>
                            </div>


                            <!-- Topbar -->
                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Topbar</h6>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="topbar-color" value="dark" id="darktopbar-check"
                                    checked />
                                <label class="form-check-label" for="darktopbar-check">Dark</label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="topbar-color" value="light" id="lighttopbar-check" />
                                <label class="form-check-label" for="lighttopbar-check">Light</label>
                            </div>


                        </div>

                    </div>
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="assets/libs/jquery.counterup/jquery.counterup.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>

        <!-- knob plugin -->
        <script src="assets/libs/jquery-knob/jquery.knob.min.js"></script>

        <!--Morris Chart-->
        <script src="assets/libs/morris.js06/morris.min.js"></script>
        <script src="assets/libs/raphael/raphael.min.js"></script>
  
        <!-- Dashboar init js-->
        <script src="assets/js/pages/dashboard.init.js"></script>

        <!-- App js-->
        <script src="assets/js/app.min.js"></script>
        
    </body>
</html>