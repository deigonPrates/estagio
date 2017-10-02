<!DOCTYPE html>
<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $title?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="all,follow">
        <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
        <!-- Google fonts - Roboto -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
        <!-- theme stylesheet-->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/style.default.css'); ?>" id="theme-stylesheet">
        <!-- Custom stylesheet - for your changes-->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/custom.css'); ?>">
       
        <!-- css custom-->
        <?php
            if(isset($css)){
                echo $css;
            }
        ?>
        
        <!-- Favicon-->
        <link rel="shortcut icon" href="<?php echo base_url('assets/img/favicon.ico'); ?>">
        <!-- Font Awesome CDN-->
        <!-- you can replace it by local Font Awesome-->
        <script src="<?php echo base_url('assets/js/fontawesome.js');?>"></script>
        <!-- Font Icons CSS-->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/icons.css');?>">
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    </head>
    <body>
        <div class="page home-page">
            <!-- Main Navbar-->
            <header class="header">
                <nav class="navbar">
                    <!-- Search Box-->
                    <div class="container-fluid">
                        <div class="navbar-holder d-flex align-items-center justify-content-between">
                            <!-- Navbar Header-->
                            <div class="navbar-header">
                                <!-- Navbar Brand --><a href="#" class="navbar-brand">
                                    <div class="brand-text brand-big hidden-lg-down"><strong>I</strong><span>nternship</span></div>
                                    <div class="brand-text brand-small"><strong>Ship</strong></div></a>
                                <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
                            </div>
                            <!-- Navbar Menu -->
                            <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                                <!-- Logout    -->
                                <li class="nav-item"> <?php echo anchor('autenticar/sair', "Sair <i class='fa fa-sign-out'> </i>", array('class' => 'nav-link logout')); ?></i></a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
            <div class="page-content d-flex align-items-stretch">
                <!-- Side Navbar -->
                <nav class="side-navbar">
                    <!-- Sidebar Header-->
                    <div class="sidebar-header d-flex align-items-center">
                        <div class="avatar"><img src="<?php echo base_url('assets/img/avatar-1.jpg'); ?>" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="title">
                            <h1 class="h4"><?php echo $this->session->userdata('logado')[0]['nome']; ?></h1>
                            <p><?php echo $this->session->userdata('logado')[0]['funcao']; ?></p>
                        </div>
                    </div>
                    <ul class="list-unstyled">

                        <li class="active"><?php echo anchor('redireciona/pagina/inicio', "<i class='icon-home'> </i> Inicio"); ?></li>
                        <li><a href="#dashvariants" aria-expanded="false" data-toggle="collapse"> <i class="icon-padnote"></i>Estagio</a>
                            <ul id="dashvariants" class="collapse list-unstyled">
                                <li><?php echo anchor('cadastrar/estagio', "Cadastar"); ?></li>
                                <li><?php echo anchor('editar/estagio', "Editar"); ?></li>
                                <li><?php echo anchor('listar/estagio', "Listar"); ?></li>
                            </ul>
                        </li>
                        <li><a href="#fdfdfd" aria-expanded="false" data-toggle="collapse"> <i class="icon-user"></i>Usuario</a>
                            <ul id="fdfdfd" class="collapse list-unstyled">
                                <li><?php echo anchor('cadastrar/usuario', "Cadastrar"); ?></li>
                                <li><?php echo anchor('listar/usuario', "Listar"); ?></li>
                            </ul>
                        </li>   
                        <li><?php echo anchor('editar/usuario', "<i class='icon-interface-windows'> </i> Editar Perfil"); ?></li>
                    </ul>   
                </nav>
