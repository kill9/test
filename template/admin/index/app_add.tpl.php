<?php include __TEMPLATE__ . 'admin/public/header.php'; ?>
<body>
    <div class="x-body">
        <form class="layui-form">
            <div class="layui-form-item">
                <label for="name" class="layui-form-label">
                    <span class="x-red">*</span>控制器名称
                </label>
                <div class="layui-input-inline">
                    <input type="text" id="name" name="name" required="" lay-verify="required" autocomplete="off" value="" class="layui-input">
                </div>
                <div class="layui-form-mid layui-word-aux">
                    <span class="x-red">*</span>应用名称
                </div>
            </div>
            <div class="layui-form-item">
                <label for="url" class="layui-form-label">
                    <span class="x-red">*</span>URL
                </label>
                <div class="layui-input-inline">
                    <input type="text" value="" id="url" name="url" required="" lay-verify="required" autocomplete="off" class="layui-input">
                </div>
                <div class="layui-form-mid layui-word-aux">
                    <span class="x-red">*</span>URL
                </div>
            </div>
            <div class="layui-form-item">
                <label for="order" class="layui-form-label">
                    <span class="x-red">*</span>排序
                </label>
                <div class="layui-input-inline">
                    <input type="text" value="" id="order" name="order" required="" lay-verify="order" autocomplete="off" class="layui-input">
                </div>
                <div class="layui-form-mid layui-word-aux">
                    <span class="x-red">*</span>
                </div>
            </div>
            <div class="layui-form-item">
                <label for="L_repass" class="layui-form-label"></label>
                <button  class="layui-btn" lay-filter="add" lay-submit="">增加</button>
            </div>
        </form>
    </div>
    <script>
        layui.use(['form', 'layer'], function () {
            $ = layui.jquery;
            var form = layui.form, layer = layui.layer;

            //自定义验证规则
//            form.verify({
//                nikename: function (value) {
//                    if (value.length < 5) {
//                        return '昵称至少得5个字符啊';
//                    }
//                }
//                , pass: [/(.+){6,12}$/, '密码必须6到12位']
//                , repass: function (value) {
//                    if ($('#L_pass').val() != $('#L_repass').val()) {
//                        return '两次密码不一致';
//                    }
//                }
//            });

            //监听提交
            form.on('submit(add)', function (data) {
//                console.log(data);
                //发异步，把数据提交给php
                $.ajax({type: "post", url: "<?php echo U('index/app_post_add');?>", data: {name: $("#name").val(), url: $("#url").val(),order:$("#order").val()}, dataType: "json", success: function (data) {
                        layer.alert("增加成功", {icon: 6}, function () {
                            // 获得frame索引
                            var index = parent.layer.getFrameIndex(window.name);
                            //关闭当前frame
                            parent.layer.close(index);
                        });
                    }});

                return false;
            });


        });
    </script>
</body>

</html>