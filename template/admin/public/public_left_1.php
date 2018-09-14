<nav id="sidebar" class="lorvens-bg">
    <div class="sidebar-header">
        <a href="<?php echo U('index/index'); ?>"><img src="<?php echo __STATIC__; ?>admin/images/logo.png" class="logo" alt="logo"></a>
        <a href="<?php echo U('index/index'); ?>"><img src="<?php echo __STATIC__; ?>admin/images/minimal-logo.png" class="minimal-logo" alt="logo"></a>
    </div>
    <ul class="list-unstyled components">
        
        
       <?php 
            foreach($left_nav as $k=>$v){
//                var_dump($k);die;
        ?>
        <li class="nav-level-one">
            <a href="#nav-<?php echo $v['controller']['id'];?>" data-toggle="collapse" aria-expanded="true">
                <span class="ti-layout-tab"></span> <?php echo $v['controller']['name'];?>
            </a>    
            <?php 
                foreach($v['functions'] as $kk=>$vv){
            ?>
            <ul class="collapse list-unstyled show" aria-expanded="true" id="nav-<?php echo $v['controller']['id'];?>">
                <li>
                    <a href="index.php?f=admin&m=<?php echo $k;?>&a=<?php echo $vv['url'];?>"><?php echo $vv['name'];?></a>
                </li>
            </ul>
            <?php 
                }
            ?>
        </li>
       <?php 
            }
        ?>
    </ul>
</nav>