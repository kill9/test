<?php include __TEMPLATE__ . 'admin/public/header.php'; ?>
    <body class="login-bg">

        <div class="login layui-anim layui-anim-up">
            <div class="message">x-admin2.0-管理登录</div>
            <div id="darkbannerwrap"></div>

            <form method="post" class="layui-form">
                <input name="user" id="user" placeholder="用户名"  type="text" lay-verify="required" class="layui-input" >
                <hr class="hr15">
                <input name="pass_confirmation" id="pass_confirmation" lay-verify="required" placeholder="密码"  type="password" class="layui-input">
                <hr class="hr15">
                <input value="登录" lay-submit lay-filter="login" style="width:100%;" type="submit">
                <hr class="hr20" >
            </form>
        </div>

        <script>
            $(function () {
                layui.use('form', function () {
                    var form = layui.form;
                    //监听提交
                    form.on('submit(login)', function (data) {
                        var user = $("#user").val();
                        var pass_confirmation = $("#pass_confirmation").val();
                        //提交表单数据
                        $.post("<?php U('index/verification', array(), 'admin'); ?>", {"user": user, "pass_confirmation": pass_confirmation}, function (data) {
                            var dataObj = eval("(" + data + ")");
//                            layer.msg(dataObj.msg, function () {
//                                //关闭后的操作
//                                
//                            });
                            layer.msg(dataObj.msg);
                            if(dataObj.url){
                                location.href = dataObj.url;
                            }
                            
                        });
//                        layer.msg(JSON.stringify(data.field), function () {
//                            location.href = 'index.html'
//                        });
                        return false;
                    });
                });
            })
        </script>
    </body>
</html>