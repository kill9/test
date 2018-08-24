<nav id="sidebar" class="lorvens-bg">
    <div class="sidebar-header">
        <a href="<?php echo U('index/index'); ?>"><img src="<?php echo __STATIC__; ?>admin/images/logo.png" class="logo" alt="logo"></a>
        <a href="<?php echo U('index/index'); ?>"><img src="<?php echo __STATIC__; ?>admin/images/minimal-logo.png" class="minimal-logo" alt="logo"></a>
    </div>
    <ul class="list-unstyled components">
        <li class="active">
            <a href="#nav-dashboard" data-toggle="collapse" aria-expanded="<?php $nav == 1 ? 'true' : 'false'; ?>">
                <span class="ti-home"></span> Dashboard
            </a>
            <ul class="collapse list-unstyled <?php $nav == 1 ? 'show' : 'collapse'; ?>" id="nav-dashboard">
                <li>
                    <a href="<?php echo U('index/test', array('nav' => 1)); ?>">Default</a>
                </li>
            </ul>
        </li>
        <li class="nav-level-one">
            <a href="#nav-uiKit" data-toggle="collapse" aria-expanded="<?php $nav == 2 ? 'true' : 'false'; ?>">
                <span class="ti-layout-tab"></span> UI Kit
            </a>    
            <ul class="list-unstyled <?php $nav == 2 ? 'show' : 'collapse'; ?>" aria-expanded="true" id="nav-uiKit">
                <li>
                    <a href="<?php echo U('uikits/typography', array('nav' => 2)); ?>">Typography</a>
                </li>
                <li>
                    <a href="<?php echo U('uikits/buttons', array('nav' => 2)); ?>">Buttons</a>
                </li>
                <li>
                    <a href="<?php echo U('uikits/cards', array('nav' => 2)); ?>">Cards</a>
                </li>
                <li>
                    <a href="<?php echo U('uikits/tabs', array('nav' => 2)); ?>">Tabs</a>
                </li>
                <li>
                    <a href="<?php echo U('uikits/accordions', array('nav' => 2)); ?>">Accordions</a>
                </li>
                <li>
                    <a href="<?php echo U('uikits/modals', array('nav' => 2)); ?>">Modals</a>
                </li>
                <li>
                    <a href="<?php echo U('uikits/lists', array('nav' => 2)); ?>">Lists &amp; Media Object</a>
                </li>
                <li>
                    <a href="<?php echo U('uikits/grid', array('nav' => 2)); ?>">Grid</a>
                </li>
                <li>
                    <a href="<?php echo U('uikits/progress-bars', array('nav' => 2)); ?>">Progress Bars</a>
                </li>
                <li>
                    <a href="<?php echo U('uikits/notifications-alerts', array('nav' => 2)); ?>">Notifications &amp; Alerts</a>
                </li>
                <li>
                    <a href="<?php echo U('uikits/pagination', array('nav' => 2)); ?>">Pagination</a>
                </li>
                <li>
                    <a href="carousel.html">Carousel</a>
                </li>
            </ul>
        </li>
    </ul>
</nav>