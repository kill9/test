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
                    <a href="<?php echo U('index/index', array('nav' => 1)); ?>">Default</a>
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
        <li>
            <a href="tables.html">
                <span class="ti-layout-menu-v"></span> Tables
            </a>
        </li>
        <li>
            <a href="#nav-charts" data-toggle="collapse" aria-expanded="false">
                <span class="ti-pie-chart"></span> Charts
            </a>
            <ul class="collapse list-unstyled" id="nav-charts">
                <li>
                    <a href="charts-1.html">Morris</a>
                </li>
                <li>
                    <a href="charts-2.html">Flot</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#nav-maps" data-toggle="collapse" aria-expanded="false">
                <span class="ti-location-pin"></span> Maps
            </a>
            <ul class="collapse list-unstyled" id="nav-maps">
                <li>
                    <a href="map-1.html">Google Maps</a>
                </li>
                <li>
                    <a href="map-2.html">Vector Maps</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="forms.html">
                <span class="ti-layout-media-overlay-alt-2"></span> Forms
            </a>
        </li>
        <li>
            <a href="#nav-icons" data-toggle="collapse" aria-expanded="false">
                <span class="ti-themify-favicon"></span> icons
            </a>
            <ul class="collapse list-unstyled" id="nav-icons">
                <li>
                    <a href="font-awesome.html">Font Awesome </a>
                </li>
                <li>
                    <a href="themify.html">Themify</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#nav-pages" data-toggle="collapse" aria-expanded="false">
                <span class="ti-file"></span> Other Pages
            </a>
            <ul class="collapse list-unstyled" id="nav-pages">
                <li>
                    <a href="login.html">Login </a>
                </li>
                <li>
                    <a href="sign-up.html">Sign Up</a>
                </li>
                <li>
                    <a href="404.html">404</a>
                </li>
                <li>
                    <a href="blank-page.html">Blank Page</a>
                </li>
                <li>
                    <a href="pricing.html">Pricing</a>
                </li>
                <li>
                    <a href="faq.html">FAQ</a>
                </li>
                <li>
                    <a href="invoice.html">Invoice</a>
                </li>
                <li>
                    <a href="blank-page.html">Coming Soon</a>
                </li>
            </ul>
        </li>
    </ul>
    <div class="nav-help animated fadeIn">
        <h5>Need Help</h5>
        <h6>
            <span class="ti-mobile"></span> +1 1234 567 890</h6>
        <h6>
            <span class="ti-email"></span> email@site.com</h6>
        <p class="copyright-text">Copy rights &copy; 2018</p><P>更多模板：<a href="http://www.mycodes.net/" target="_blank">源码之家</a></P>
    </div>
</nav>