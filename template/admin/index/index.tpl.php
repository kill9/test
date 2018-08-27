<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>后台</title>
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
                                        <a class="dropdown-item" href="<?php echo U('Index/login')?>">
                                        <span class="ti-power-off"></span> Logout</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
<!--                <div class="container-fluid home">
                     Page Title 
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="block-title">测试中心</h3>
                        </div>
                    </div>
                </div>-->
                <div class="col-md-12">
                    <div class="widget-area-2 lorvens-box-shadow">
                        <h3 class="widget-title">Hoverable rows</h3>
                        <div class="table-div">
                            <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">First</th>
                                            <th scope="col">Last</th>
                                            <th scope="col">Handle</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                        </tr>
                                        <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                        </tr>
                                        <tr>
                                                <th scope="row">3</th>
                                                <td colspan="2">Larry the Bird</td>
                                                <td>@twitter</td>
                                        </tr>
                                    </tbody>
                            </table>
                        </div>
                    </div>
		</div>
                <!-- /Main Content -->
                <div class="col-md-12">
                <div class="widget-area-2 lorvens-box-shadow">
                    <div class="lorvens-widget">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- /Pagination Set -->
		</div>
                </div>
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