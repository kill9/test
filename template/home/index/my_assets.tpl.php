<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>资产</title>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<link rel="bookmark" href="/favicon.ico" type="image/x-icon" />
<link href="<?php echo __WWWROOT__;?>css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div class="head">
    	<div class="head_title"><span>全部资产<span></div>
        <div class="table_body">
            <table cellpadding="0" cellspacing="0" border="1">
                <tr>
                    <?php
                    if ($get_balances) {
                        $i=0;
                        foreach ($get_balances as $k => $v) {        
                    ?>
                    <td><?php echo $k . '-' . '<span style="color:red;">' . $v . '</span>'; ?></td>        
                    <?php
                            $i++;
                            if($i != 0 && $i % 4 == 0) {
                                echo '</tr><tr>';
                            }
                        }
                    }
                    ?>
                    </tr>
            </table>
    	</div>
    </div>
        
</body>
</html>
