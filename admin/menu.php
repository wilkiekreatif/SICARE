<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
        <li <?php
                if($_SESSION['menu']=='index'){
                    echo('class="active"');
                }
            ?>
        >
            <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
        </li>
        <li <?php
                if($_SESSION['menu']=='detail'){
                    echo('class="active"');
                }
            ?>
        >
            <a href="detailpelamar.php"><i class="fa fa-fw fa-users"></i> Data Pelamar</a>
        </li>
        <li <?php
                if($_SESSION['menu']=='config'){
                    echo('class="active"');
                }
            ?>
        >
            <a href="configloker.php"><i class="fa fa-fw fa-gears"></i> Konfigurasi Loker</a>
        </li>
        <!--<li>
            <a href="#" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-users"></i> User <i
                    class="fa fa-fw fa-caret-down"></i></a>
            <ul id="demo" class="collapse">
                <li>
                    <a href="list-user.php">Daftar Pengguna</a>
                </li>
                <li>
                    <a href="list-admin.php">Daftar Admin</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="pengerjaan.php"><i class="fa fa-fw fa-check"></i> Pengerjaan <?php
                                                                                        echo($_SESSION['username']);
                                                                                    ?></a>
        </li>-->
    </ul>
</div>