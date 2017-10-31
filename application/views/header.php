<nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="container">
        <!-- start:navbar-header -->
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo base_url('index.php/home'); ?>"><i class="fa fa-cubes"></i> <strong>Perpusda</strong>Jember</a>
        </div>
        <!-- end:navbar-header -->
        <ul class="nav navbar-nav navbar-right top-menu">
            <li>
                <input type="text" class="form-control input-sm search" placeholder="Search">
            </li>
            <!-- user login dropdown start-->
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <img alt="" src="<?php echo base_url().'assets/'; ?>img/avatar1_small.jpg">
                    <span class="username">Admin1</span>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <div class="log-arrow-up"></div>
                    <li><a href="<?php echo base_url('index.php/login/logout'); ?>"><i class="fa fa-key"></i> Log Out</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>