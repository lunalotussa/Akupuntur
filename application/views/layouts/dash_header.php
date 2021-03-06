<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Akupuntur</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap.min.css');?>">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/font-awesome.min.css');?>">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Datetimepicker -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap-datetimepicker.min.css');?>">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/AdminLTE.min.css');?>">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/_all-skins.min.css');?>">
    </head>
    
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a href="" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini">AKUPUNTUR</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg">AKUPUNTUR</span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?php echo site_url('resources/img/user2-160x160.jpg');?>" class="user-image" alt="User Image">
                                    <span class="hidden-xs"><?php echo $nama;?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="<?php echo site_url('resources/img/user2-160x160.jpg');?>" class="img-circle" alt="User Image">

                                    <p>
                                        <?php echo $nama;?>
                                        <small><?php echo $hak_akses;?></small>
                                        <small><?php echo $email;?></small>
                                    </p>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="<?php echo site_url('dashboard/logout');?>" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?php echo site_url('resources/img/user2-160x160.jpg');?>" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p><?php echo $nama;?></p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header">MAIN NAVIGATION</li>
                        <?php
                        if ($hak_akses=="Admin") {
                        $sql ="SELECT * FROM admin WHERE id_user=$id_user";
                        $query = $this->db->query($sql);
                        if ($query->num_rows() > 0) {
                        foreach ($query->result() as $row) {
                        $id_admin = $row->id_admin;
                        ?>
                          <li>
                            <a href="<?php echo site_url();?>">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Master Layanan</span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="active">
                                    <a href="<?php echo site_url('layanan/add');?>"><i class="fa fa-plus"></i>Tambah Master Layanan </a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('layanan/index');?>"><i class="fa fa-list-ul"></i> Daftar Master Layanan</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                             <a href="<?php echo site_url('terapi/index');?>">
                                <i class="fa fa-check-square-o"></i> <span>Verifikasi Terapis</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-money"></i> <span>Verifikasi Pembayaran</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('admin/edit/'.$id_admin);?>">
                                <i class="fa fa-user"></i> <span>Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('dashboard/logout');?>">
                                <i class="fa fa-sign-out"></i> <span>Logout</span>
                            </a>
                        </li>

                        <?php }}} elseif ($hak_akses=="Customer") {
                        $sql ="SELECT * FROM customer WHERE id_user=$id_user";
                        $query = $this->db->query($sql);
                        if ($query->num_rows() > 0) {
                        foreach ($query->result() as $row) {
                        $id_customer = $row->id_customer;
                        ?>
                        <li>
                            <a href="<?php echo site_url();?>">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-shopping-cart"></i> <span>Booking Layanan</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('customer/edit/'.$id_customer);?>">
                                <i class="fa fa-user"></i> <span>Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('dashboard/logout');?>">
                                <i class="fa fa-sign-out"></i> <span>Logout</span>
                            </a>
                        </li>
                        <?php
                        }}} elseif ($hak_akses=="Terapis") {
                        $sql ="SELECT * FROM terapis WHERE id_user=$id_user";
                        $query = $this->db->query($sql);
                        if ($query->num_rows() > 0) {
                        foreach ($query->result() as $row) {
                        $id_terapis = $row->id_terapis;
                        $status     = $row->status;
                        ?>
                        <li>
                            <a href="<?php echo site_url();?>">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <?php
                        if ($status==1) {
                        ?>
                        <li>
                            <a href="<?php echo site_url('detaillayanan/index');?>">
                                <i class="fa fa-desktop"></i> <span>Layanan</span>
                            </a>
                        </li>  
                        <li>
                            <a href="#">
                                <i class="fa fa-calendar"></i> <span>Jadwal Terapis</span>
                            </a>
                        </li>
                        <?php } else {
                            # code...
                            # optional alert box dll
                        }
                        ?>
                        <li>
                            <a href="<?php echo site_url('terapi/edit/'.$id_terapis);?>">
                                <i class="fa fa-user"></i> <span>Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('dashboard/logout');?>">
                                <i class="fa fa-sign-out"></i> <span>Logout</span>
                            </a>
                        </li>

                        <?php }}} ?>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>