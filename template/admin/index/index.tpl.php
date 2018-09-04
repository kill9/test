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
                <?php include __TEMPLATE__ . 'admin/public/public_top.php'; ?>
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
                        <h3 class="widget-title">节点管理</h3>
                        <div class="table-div">
                            <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">控制器/方法名称</th>
                                            <th scope="col">名称</th>
                                            <th scope="col">排序</th>
                                            <th scope="col">操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            foreach($list as $k => $v){
                                        ?>
                                        <tr>
                                            <th scope="row"><?php echo $k + 1;?></th>
                                            <td><?php echo $v['name'];?></td>
                                            <td><?php echo $v['title'];?></td>
                                            <td><?php echo $v['sort'];?></td>
                                            <td><a href="<?php echo U("index/edit", array('id' => $v['id'])); ?>">修改</a>&nbsp;&nbsp;<a href="">删除</a></td>
                                        </tr>
                                        <?php if($v['functions']){
                                            foreach($v['functions'] as $vv){
                                        ?>
                                        <tr>
                                            <th scope="row"></th>
                                            <td>=><?php echo $vv['name'];?></td>
                                            <td><?php echo $vv['title'];?></td>
                                            <td><?php echo $vv['sort'];?></td>
                                            <td><a href="<?php echo U("index/edit", array('id' => $vv['id'])); ?>">修改</a>&nbsp;&nbsp;<a href="">删除</a></td>
                                        </tr>
                                        <?php
                                            }
                                        }?>
                                        <?php
                                            }
                                        ?>

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
                                <?php echo $page;?>
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