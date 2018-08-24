<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Lorvens-Tables Bootstrap Admin Dashboard and UI kit</title>
        <!-- Fav  Icon Link -->
        <link rel="shortcut icon" type="image/png" href="<?php echo __STATIC__; ?>admin/images/fav.png">
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="<?php echo __STATIC__; ?>admin/css/bootstrap.min.css">
        <!-- themify icons CSS -->
        <link rel="stylesheet" href="<?php echo __STATIC__; ?>admin/css/themify-icons.css">
        <!-- Main CSS -->
        <link rel="stylesheet" href="<?php echo __STATIC__; ?>admin/css/styles.css">
        <link rel="stylesheet" href="<?php echo __STATIC__; ?>admin/css/red.css" id="style_theme">
        <link rel="stylesheet" href="<?php echo __STATIC__; ?>admin/css/responsive.css">

        <script src="<?php echo __STATIC__; ?>admin/js/modernizr.min.js"></script>
    </head>

    <body class="auth-bg">
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
            <!-- Page Content  -->
            <div id="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6 auth-box">
                            <div class="lorvens-box-shadow">
                                <h3 class="widget-title">登录</h3>
                                <form class="widget-form">
                                    <!-- form-group -->
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <input id="user" name="user" placeholder="用户名" class="form-control" required="" data-validation="length alphanumeric" data-validation-length="3-12"
                                                   data-validation-error-msg="User name has to be an alphanumeric value (3-12 chars)" data-validation-has-keyup-event="true">
                                        </div>
                                    </div>
                                    <!-- /.form-group -->
                                    <!-- form-group -->
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <input type="password" id="pass_confirmation" placeholder="密码" name="pass_confirmation" class="form-control" data-validation="strength" data-validation-strength="2"
                                                   data-validation-has-keyup-event="true">
                                        </div>
                                    </div>
                                    <!-- /.form-group -->
                                    <!-- Check Box -->		
                                    <div class="form-check row">
                                        <div class="col-sm-12 text-left">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="ex-check-2">
                                                <label class="custom-control-label" for="ex-check-2">记住密码</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Check Box -->	
                                    <!-- Login Button -->			
                                    <div class="button-btn-block">
                                        <button type="button" id="login_submit" class="btn btn-primary btn-lg btn-block">提交</button>
                                    </div>
                                    <!-- /Login Button -->	
                                    <!-- Links -->	
                                    <div class="auth-footer-text">
                                        <small>New User,
                                            <a href="sign-up.html">Sign Up</a> Here</small>
                                    </div>
                                    <!-- /Links -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Page Content  -->
        </div>
        <!-- Jquery Library-->
        <script src="<?php echo __STATIC__; ?>admin/js/jquery-3.2.1.min.js"></script>
        <!-- Popper Library-->
        <script src="<?php echo __STATIC__; ?>admin/js/popper.min.js"></script>
        <!-- Bootstrap Library-->
        <script src="<?php echo __STATIC__; ?>admin/js/bootstrap.min.js"></script>
        <!-- Custom Script-->
        <script src="<?php echo __STATIC__; ?>admin/js/custom.js"></script>
        <script>
            $(function () {
                $("#login_submit").click(function () {
                    var user = $("#user").val();
                    var pass_confirmation = $("#pass_confirmation").val();
                    //提交表单数据
                    $.post("<?php U('index/verification', array(), 'admin'); ?>", {"user":user,"pass_confirmation":pass_confirmation},function(data){
                        
                    });
                });
            });
        </script>
    </body>

</html>