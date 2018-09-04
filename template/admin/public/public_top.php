<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <span class="ti-menu" id="sidebarCollapse"></span>
        </div>
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target=".lorvens-modal-lg">
                    <span class="ti-search"></span>
                </a>
                <div class="modal fade lorvens-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lorvens">
                        <div class="modal-content lorvens-box-shadow">
                            <div class="modal-header">
                                <h5 class="modal-title">Serach Client/Project:</h5>
                                <span class="ti-close" data-dismiss="modal" aria-label="Close">
                                </span>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="search-term" placeholder="Type text here">
                                        <button type="button" class="btn btn-lorvens lorvens-bg">
                                            <span class="ti-location-arrow"></span> Search</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <span class="ti-announcement"></span>
                </a>
                <div class="dropdown-menu lorvens-box-shadow notifications animated flipInY">
                    <h5>Notifications</h5>
                    <a class="dropdown-item" href="#">
                        <span class="ti-comment-alt"></span> New User Registered</a>
                    <a class="dropdown-item" href="#">
                        <span class="ti-help-alt"></span> Client asked to send Quotaion</a>
                    <a class="dropdown-item" href="#">
                        <span class="ti-time"></span> Have schedule meeting today</a>
                    <a class="dropdown-item" href="#">
                        <span class="ti-comment-alt"></span> New User Registered</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <span class="ti-user"></span>
                </a>
                <div class="dropdown-menu lorvens-box-shadow profile animated flipInY">
                    <h5>John Willing</h5>
                    <a class="dropdown-item" href="#">
                        <span class="ti-settings"></span> Settings</a>
                    <a class="dropdown-item" href="#">
                        <span class="ti-help-alt"></span> Help</a>
                        <a class="dropdown-item" href="<?php echo U('Index/login')?>">
                        <span class="ti-power-off"></span> Logout</a>
                </div>
            </li>
        </ul>
    </div>
</nav>