<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>资产</title>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<link rel="bookmark" href="/favicon.ico" type="image/x-icon" />
<link href="<?php echo __WWWROOT__;?>css/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery.js"></script>
<!--<script type="text/javascript" src="js/core.js"></script>-->
</head>

<body>
	<div class="head">
    	<div class="head_title"><span><?php echo $coin_name;?><span></div>
        <div class="table_body">
            <table cellpadding="0" cellspacing="0" border="1" id="coin_data">
            </table>
            <table>
                <tr>
                    <td> 
                        asks:
                        <table cellpadding="0" cellspacing="0" border="1" id="asks"></table>
                    </td>
                    <td>
                        bids:
                        <table cellpadding="0" cellspacing="0" border="1" id="bids"></table>
                    </td>
                </tr>
                
            </table>
           
            
            
            
    	</div>
    </div>
    <script type="text/javascript">
        var T_coin_data;
        T_coin_data = setTimeout(request_data,1000);
        function request_data(){
            clearTimeout(T_coin_data);
            $.post("<?php echo U('show/timing_get_data')?>",{"c_name":"<?php echo $coin_name;?>"},function(data){
                data = eval("(" + data + ")");
                T_coin_data = setTimeout(request_data,1000);
                $("#coin_data").html(data.html);
                $("#asks").html(data.asks);
                $("#bids").html(data.bids);
            });
        }
    </script>
</body>
</html>
