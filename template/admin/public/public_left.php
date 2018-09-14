<div class="left-nav">
    <div id="side-nav">
        <ul id="nav">
            <?php
                foreach ($left_nav as $k => $v) {
            ?>
                <li>
                    <a href="javascript:;"><i class="iconfont">&#xe6b8;</i><cite><?php echo $v['controller']['name'];?></cite><i class="iconfont nav_right">&#xe697;</i></a>
                    <ul class="sub-menu">
                        <?php 
                            foreach($v['functions'] as $kk=>$vv){
                        ?>
                        <li><a _href="index.php?f=admin&m=<?php echo $k;?>&a=<?php echo $vv['url'];?>"><i class="iconfont">&#xe6a7;</i><cite><?php echo $vv['name'];?></cite></a></li>
                        <?php
                            }
                        ?>
                    </ul>
                </li>
            <?php
                }
            ?>
        </ul>
    </div>
</div>
<!-- <div class="x-slide_left"></div> -->