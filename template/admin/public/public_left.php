<nav id="sidebar" class="lorvens-bg">
    <div class="sidebar-header">
        <a href="<?php echo U('index/index'); ?>"><img src="<?php echo __STATIC__; ?>admin/images/logo.png" class="logo" alt="logo"></a>
        <a href="<?php echo U('index/index'); ?>"><img src="<?php echo __STATIC__; ?>admin/images/minimal-logo.png" class="minimal-logo" alt="logo"></a>
    </div>
    <ul class="list-unstyled components">
        
        
       <?php foreach($power as $k=>$child) {?>
        <li class="nav-level-one">
            <a href="#<?php echo $child['class'];?>" data-toggle="collapse" aria-expanded="<?php echo $nav == $child['id'] ? 'true' : 'false'; ?>">
                <span class="ti-layout-tab"></span> <?php echo $child['title'];?>
            </a>    
            <?php foreach($child['functions'] as $key=>$value){?>
            <ul class="list-unstyled <?php echo $nav == $child['id'] ? 'show' : 'collapse'; ?>" aria-expanded="true" id="<?php echo $child['class'];?>">
                <li>
                    <a href="<?php echo U('uikits/typography', array('nav' => $child['id'])); ?>"><?php echo $value;?></a>
                </li>
            </ul>
            <?php }?>
        </li>
       <?php }?>
    </ul>
</nav>