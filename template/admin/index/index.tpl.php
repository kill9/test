<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Lorvens-Bootstrap Admin Dashboard and UI kit</title>
        <!-- Fav  Icon Link -->
        <link rel="shortcut icon" type="image/png" href="<?php echo __STATIC__; ?>admin/images/fav.png">
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="<?php echo __STATIC__; ?>admin/css/bootstrap.min.css">
        <!-- themify icons CSS -->
        <link rel="stylesheet" href="<?php echo __STATIC__; ?>admin/css/themify-icons.css">
        <!-- Animations CSS -->
        <link rel="stylesheet" href="<?php echo __STATIC__; ?>admin/css/animate.css">
        <!-- Main CSS -->
        <link rel="stylesheet" href="<?php echo __STATIC__; ?>admin/css/styles.css">
        <link rel="stylesheet" href="<?php echo __STATIC__; ?>admin/css/red.css" id="style_theme">
        <link rel="stylesheet" href="<?php echo __STATIC__; ?>admin/css/responsive.css">
        <!-- morris charts -->
        <link rel="stylesheet" href="<?php echo __STATIC__; ?>admin/charts/css/morris.css">
        <!-- jvectormap -->
        <link rel="stylesheet" href="<?php echo __STATIC__; ?>admin/css/jquery-jvectormap.css">

        <script src="<?php echo __STATIC__; ?>admin/js/modernizr.min.js"></script>
    </head>

    <body>
        <!-- Pre Loader -->
        <div class="loading">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
        <!--/Pre Loader -->
        <!-- Color Changer -->
        <div class="theme-settings" id="switcher">
            <span class="theme-click">
                <img src="<?php echo __STATIC__; ?>admin/images/color-pallete.png" alt="color pallete">
            </span>
            <span class="theme-color theme-default theme-active" data-color="green"></span>
            <span class="theme-color theme-blue" data-color="blue"></span>
            <span class="theme-color theme-red" data-color="red"></span>
            <p>(Or) Your Color</p>
        </div>
        <!-- /Color Changer -->
        
        <div class="wrapper">
            <!-- Sidebar -->
            <?php include __TEMPLATE__ . 'admin/public/public_left.php'; ?>
            <!-- /Sidebar -->
            <!-- Page Content -->
            <div id="content">
                <!-- Top Navigation -->
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <span class="ti-menu" id="sidebarCollapse"></span>
                        </div>
                        <ul class="nav justify-content-end">
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="modal" data-target=".lorvens-modal-lg">
                                    <span class="ti-search"></span>
                                </a>
                                <div class="modal fade lorvens-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lorvens">
                                        <div class="modal-content lorvens-box-shadow">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Serach Client/Project:</h5>
                                                <span class="ti-close" data-dismiss="modal" aria-label="Close">
                                                </span>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="search-term" placeholder="Type text here">
                                                        <button type="button" class="btn btn-lorvens lorvens-bg">
                                                            <span class="ti-location-arrow"></span> Search</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    <span class="ti-announcement"></span>
                                </a>
                                <div class="dropdown-menu lorvens-box-shadow notifications animated flipInY">
                                    <h5>Notifications</h5>
                                    <a class="dropdown-item" href="#">
                                        <span class="ti-comment-alt"></span> New User Registered</a>
                                    <a class="dropdown-item" href="#">
                                        <span class="ti-help-alt"></span> Client asked to send Quotaion</a>
                                    <a class="dropdown-item" href="#">
                                        <span class="ti-time"></span> Have schedule meeting today</a>
                                    <a class="dropdown-item" href="#">
                                        <span class="ti-comment-alt"></span> New User Registered</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    <span class="ti-user"></span>
                                </a>
                                <div class="dropdown-menu lorvens-box-shadow profile animated flipInY">
                                    <h5>John Willing</h5>
                                    <a class="dropdown-item" href="#">
                                        <span class="ti-settings"></span> Settings</a>
                                    <a class="dropdown-item" href="#">
                                        <span class="ti-help-alt"></span> Help</a>
                                    <a class="dropdown-item" href="#">
                                        <span class="ti-power-off"></span> Logout</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- /Top Navigation -->
                <!-- Breadcrumb -->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html">
                            <span class="ti-home"></span>
                        </a>
                    </li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
                <!-- /Breadcrumb -->
                <!-- Main Content -->
                <div class="container-fluid home">
                    <!-- Page Title -->
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="block-title">Quick Statistics</h3>
                        </div>
                    </div>
                    <!-- /Page Title -->

                    <div class="row">
                        <!-- Widget Item -->
                        <div class="col-md-3">
                            <div class="widget-area lorvens-box-shadow color-red">
                                <div class="widget-left">
                                    <span class="ti-money"></span>
                                </div>
                                <div class="widget-right">
                                    <h4 class="wiget-title">Open Payments</h4>
                                    <span class="numeric color-red">$8348</span>
                                </div>
                            </div>
                        </div>
                        <!-- /Widget Item -->
                        <!-- Widget Item -->
                        <div class="col-md-3">
                            <div class="widget-area lorvens-box-shadow color-blue">
                                <div class="widget-left">
                                    <span class="ti-user"></span>
                                </div>
                                <div class="widget-right">
                                    <h4 class="wiget-title">New Users</h4>
                                    <span class="numeric color-blue">258</span>
                                </div>
                            </div>
                        </div>
                        <!-- /Widget Item -->
                        <!-- Widget Item -->
                        <div class="col-md-3">
                            <div class="widget-area lorvens-box-shadow color-green">
                                <div class="widget-left">
                                    <span class="ti-bar-chart"></span>
                                </div>
                                <div class="widget-right">
                                    <h4 class="wiget-title">Avg Revenue</h4>
                                    <span class="numeric color-green">$6585</span>
                                </div>
                            </div>
                        </div>
                        <!-- /Widget Item -->
                        <!-- Widget Item -->
                        <div class="col-md-3">
                            <div class="widget-area lorvens-box-shadow color-yellow">
                                <div class="widget-left">
                                    <span class="ti-thumb-up"></span>
                                </div>
                                <div class="widget-right">
                                    <h4 class="wiget-title">Total Projects</h4>
                                    <span class="numeric color-yellow">73</span>
                                </div>
                            </div>
                        </div>
                        <!-- /Widget Item -->
                    </div>

                    <div class="row">
                        <!-- Widget Item -->
                        <div class="col-md-6">
                            <div class="widget-area-2 lorvens-box-shadow">
                                <h3 class="widget-title">Projects Year by Year</h3>
                                <div id="lineMorris" class="chart-home"></div>
                            </div>
                        </div>
                        <!-- /Widget Item -->
                        <!-- Widget Item -->
                        <div class="col-md-6">
                            <div class="widget-area-2 lorvens-box-shadow">
                                <h3 class="widget-title">Clients Year by Year</h3>
                                <div id="barMorris" class="chart-home"></div>
                            </div>
                        </div>
                        <!-- /Widget Item -->
                    </div>

                    <div class="row">
                        <!-- Widget Item -->
                        <div class="col-md-12">
                            <div class="widget-area-2 lorvens-box-shadow">
                                <h3 class="widget-title">Payments</h3>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Products</th>
                                                <th>Agent</th>
                                                <th>Sales</th>
                                                <th>Earnings</th>
                                                <th>Technology</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Envato</td>
                                                <td>Manoj Kumar</td>
                                                <td>390</td>
                                                <td>$400</td>
                                                <td>
                                                    <span class="badge badge-success">PHP</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Themeforest</td>
                                                <td>John Deo</td>
                                                <td>70</td>
                                                <td>$3670</td>
                                                <td>
                                                    <span class="badge badge-warning">Java</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Codecanyon</td>
                                                <td>Yokahona</td>
                                                <td>150</td>
                                                <td>$1400</td>
                                                <td>
                                                    <span class="badge badge-danger">Angular Js</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Videohive</td>
                                                <td>Yokahona</td>
                                                <td>150</td>
                                                <td>$1400</td>
                                                <td>
                                                    <span class="badge badge-success">Python</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Themeforest</td>
                                                <td>Yokahona</td>
                                                <td>150</td>
                                                <td>$1400</td>
                                                <td>
                                                    <span class="badge badge-warning">Dot Net</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Envato</td>
                                                <td>Yokahona</td>
                                                <td>150</td>
                                                <td>$1400</td>
                                                <td>
                                                    <span class="badge badge-danger">Angular Js</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /Widget Item -->
                    </div>

                    <div class="row">
                        <!-- Widget Item -->
                        <div class="col-sm-6">
                            <div class="widget-area-2 lorvens-box-shadow">
                                <h3 class="widget-title">Donut Chart</h3>
                                <div id="donutMorris" class="chart-home"></div>
                            </div>
                        </div>
                        <!-- /Widget Item -->
                        <!-- Widget Item -->
                        <div class="col-md-6">
                            <div class="widget-area-2 progress-status lorvens-box-shadow">
                                <h3 class="widget-title">Project Status</h3>
                                <span>Project one</span>
                                <div class="progress">
                                    <div class="progress-bar width-pb10" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span>Project Two</span>
                                <div class="progress">
                                    <div class="progress-bar bg-success width-pb25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span>Project Three</span>
                                <div class="progress">
                                    <div class="progress-bar bg-info width-pb50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span>Project Four</span>
                                <div class="progress">
                                    <div class="progress-bar bg-warning width-pb75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                            </div>
                        </div>
                        <!-- /Widget Item -->

                    </div>

                    <div class="row">

                        <!-- Widget Item -->
                        <div class="col-sm-12">
                            <div class="widget-area-2 lorvens-box-shadow">
                                <h3 class="widget-title">Maps</h3>
                                <div id="world-map-maker" class="big-world-mill"></div>
                            </div>
                        </div>
                        <!-- /Widget Item -->
                    </div>		
                </div>
                <!-- /Main Content -->
            </div>
            <!-- /Page Content -->
        </div>
        <!-- Back to Top -->
        <a id="back-to-top" href="#" class="back-to-top">
            <span class="ti-angle-up"></span>
        </a>
        <!-- /Back to Top -->
        <!-- Jquery Library-->
        <script src="<?php echo __STATIC__; ?>admin/js/jquery-3.2.1.min.js"></script>
        <!-- Popper Library-->
        <script src="<?php echo __STATIC__; ?>admin/js/popper.min.js"></script>
        <!-- Bootstrap Library-->
        <script src="<?php echo __STATIC__; ?>admin/js/bootstrap.min.js"></script>
        <!-- morris charts -->
        <script src="<?php echo __STATIC__; ?>admin/charts/js/raphael-min.js"></script>
        <script src="<?php echo __STATIC__; ?>admin/charts/js/morris.min.js"></script>
        <script src="<?php echo __STATIC__; ?>admin/js/custom-morris.js"></script>
        <!-- jvectormap -->
        <script src="<?php echo __STATIC__; ?>admin/js/jquery-jvectormap.min.js"></script>
        <script src="<?php echo __STATIC__; ?>admin/js/jquery-jvectormap-world-mill.js"></script>
        <script src="<?php echo __STATIC__; ?>admin/js/custom-vector.js"></script>
        <!-- Custom Script-->
        <script src="<?php echo __STATIC__; ?>admin/js/custom.js"></script>
    </body>

</html>