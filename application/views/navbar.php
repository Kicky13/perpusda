<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
        <li>
            <a href="<?php echo base_url('index.php/home'); ?>">
                <div class="text-center">
                    <i class="fa fa-dashboard fa-3x"></i><br>
                    Dashboard
                </div>
            </a>
        </li>
        <li>
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <div class="text-center">
                    <i class="fa fa-folder-open fa-3x"></i><br>
                    Agenda <span class="caret"></span>
                </div>
            </a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo base_url('index.php/masuk'); ?>"><i class="fa fa-table"></i> Agenda Masuk</a></li>
                <li><a href="<?php echo base_url('index.php/keluar'); ?>"><i class="fa fa-table"></i> Agenda Keluar</a></li>
            </ul>
        </li>
        <li>
            <a href="<?php echo base_url('index.php/magang'); ?>">
                <div class="text-center">
                    <i class="fa fa-location-arrow fa-3x"></i><br>
                    Sertifikat Magang
                </div>
            </a>
        </li>
    </ul>
</div>