<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
	<title>Dashboard</title>
	
    <!-- Fontfaces CSS-->
    <link href="<?= base_url('css/font-face.css" rel="stylesheet');?>" media="all">
    <link href="<?= base_url('vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet');?>" media="all">
    <link href="<?= base_url('vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet');?>" media="all">
    <link href="<?= base_url('vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet');?>" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?= base_url('vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet');?>" media="all">

    <!-- Main CSS-->
    <link href="<?= base_url('css/theme.css" rel="stylesheet');?>" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="<?php echo base_url()?>images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="<?php echo base_url()?>index.php/home">
                                <i class="fas fa-table"></i>Data Komik</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url()?>index.php/chart">
                                <i class="fas fa-chart-bar"></i>Chart</a>
                        </li>
                    </ul>    
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->
        
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap" style="float: right;">
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="<?php echo base_url()?>images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Admin</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="<?php echo base_url()?>images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">Admin</a>
                                                    </h5>
                                                    <span class="email">admin@gmail.com</span>
                                                </div>
                                            </div>                                            
                                            <div class="account-dropdown__footer">
                                                <a class="dropdown-item" href="<?php echo base_url()?>index.php/login/logout">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <a href="<?php echo base_url()?>index.php/home/tambah" class="btn btn-primary">Tambah Komik</a>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NAMA KOMIK</th>
                                <th>KATEGORI KOMIK</th>
                                <th>JUMLAH</th>
                                <th>TAHUN</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Fetch data dari database -->
                            <?php foreach ($data->result() as $row) :?>
                                <tr>
                                    <th><?php echo $row->id_barang;?></th>
                                    <th><?php echo $row->nama_komik;?></th>
                                    <!-- <th><?php echo $row->jenis_komik;?></th> -->
                                    <th class="text-primary"> 
                                                    <?php 
                                                    // echo $data->type
                                                    if ($kategori_id ->kat_komik == 1 ){
                                                        echo ('kartun');
                                                    }else if ($kategori_id ->kat_komik == 2){
                                                        echo ('romantis');
                                                    }else if ($kategori_id ->kat_komik == 3){
                                                        echo('petualangan');                                                   
                                                    }
                                                    ?>
                                    </th>
                                    <th><?php echo $row->jumlah_komik;?></th>
                                    <th><?php echo $row->tahun;?></th>
                                </tr>
                            <?php endforeach?>
                        </tbody>
                    </table>

                    <div class="row">
                        <div class="col">
                            <!-- Tampilkan pagination -->
                            <?php echo $pagination; ?>
                        </div>
                    </div>
                    
                    <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Comics. All rights reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>
    <!-- Jquery JS-->
    <script src="<?php echo base_url()?>vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?php echo base_url()?>vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?php echo base_url()?>vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="<?php echo base_url()?>vendor/slick/slick.min.js">
    </script>
    <script src="<?php echo base_url()?>vendor/wow/wow.min.js"></script>
    <script src="<?php echo base_url()?>vendor/animsition/animsition.min.js"></script>
    <script src="<?php echo base_url()?>vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?php echo base_url()?>vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url()?>vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?php echo base_url()?>vendor/circle-progress/circle-progress.min.js"></script>
    <script src="<?php echo base_url()?>vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?php echo base_url()?>vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="<?php echo base_url()?>vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="<?php echo base_url()?>js/main.js"></script>
</body>

</html>
<!-- end document-->
