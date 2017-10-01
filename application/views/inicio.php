<!DOCTYPE html>
<?php 
if (!defined('BASEPATH'))
    exit('No direct script access allowed');


?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Inicio</title>
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
        <!-- Favicon-->
        <link rel="shortcut icon" href="<?php echo base_url('assets/img/favicon.ico'); ?>">
        <!-- Font Awesome CDN-->
        <!-- you can replace it by local Font Awesome-->
        <script src="https://use.fontawesome.com/99347ac47f.js"></script>
        <!-- Font Icons CSS-->
        <link rel="stylesheet" href="https://file.myfontastic.com/da58YPMQ7U5HY8Rb6UxkNf/icons.css">
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
                                <!-- Navbar Brand --><a href="index.html" class="navbar-brand">
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
                        <li><?php echo anchor('cadastrar/estagio', "<i class='icon-padnote'> </i> Cadastar Estagio"); ?></li>
                        <li><?php echo anchor('cadastrar/usuario', "<i class='icon-user'> </i> Cadastrar Usuario"); ?></li>
                        <li><?php echo anchor('redireciona/pagina/editar_perfil', "<i class='icon-interface-windows'> </i> Editar Perfil"); ?></li>
                    </ul>   
                </nav>
                <div class="content-inner">
                    <!-- Page Header-->
                    <header class="page-header">
                        <div class="container-fluid">
                            <h2 class="no-margin-bottom">Inicio</h2>
                        </div>
                    </header>
                    <!-- Dashboard Counts Section-->
                    <section class="dashboard-counts no-padding-bottom">
                        <div class="container-fluid">
                            <div class="row bg-white has-shadow">
                                <!-- Item -->
                                <div class="col-xl-3 col-sm-6">
                                    <div class="item d-flex align-items-center">
                                        <div class="icon bg-violet"><i class="icon-user"></i></div>
                                        <div class="title"><span>Novos<br>alunos</span>
                                            <div class="progress">
                                            </div>
                                        </div>
                                        <div class="number"><strong>25</strong></div>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="col-xl-3 col-sm-6">
                                    <div class="item d-flex align-items-center">
                                        <div class="icon bg-red"><i class="icon-padnote"></i></div>
                                        <div class="title"><span>Estagios<br>Registrados</span>
                                        </div>
                                        <div class="number"><strong>70</strong></div>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="col-xl-3 col-sm-6">
                                    <div class="item d-flex align-items-center">
                                        <div class="icon bg-green"><i class="icon-bill"></i></div>
                                        <div class="title"><span>Novas<br>Empresas</span>
                                            <div class="progress">
                                            </div>
                                        </div>
                                        <div class="number"><strong>4</strong></div>
                                    </div>
                                </div>
                                <!-- Item -->
                                <div class="col-xl-3 col-sm-6">
                                    <div class="item d-flex align-items-center">
                                        <div class="icon bg-orange"><i class="icon-check"></i></div>
                                        <div class="title"><span>Pendencia<br>Documentais</span>
                                            <div class="progress">
                                            </div>
                                        </div>
                                        <div class="number"><strong>15</strong></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Projects Section-->
                    <section class="projects no-padding-top">
                        <div class="container-fluid">
                            <!-- Project-->

                            <br>
                            <!-- Project-->
                            <div class="project">
                                <div class="row bg-white has-shadow">
                                    <div class="left-col col-lg-6 d-flex align-items-center justify-content-between">
                                        <div class="project-title d-flex align-items-center">
                                            <div class="image has-shadow"><img src="<?php echo base_url('assets/img/project-3.jpg'); ?>" alt="..." class="img-fluid"></div>
                                            <div class="text">
                                                <h3 class="h4">Project Title</h3><small>Lorem Ipsum Dolor</small>
                                            </div>
                                        </div>
                                        <div class="project-date"><span class="hidden-sm-down">Today at 4:24 AM</span></div>
                                    </div>
                                    <div class="right-col col-lg-6 d-flex align-items-center">
                                        <div class="time"><i class="fa fa-clock-o"></i>12:00 PM </div>
                                        <div class="comments"><i class="fa fa-comment-o"></i>20</div>
                                        <div class="project-progress">
                                            <div class="progress">
                                                <div role="progressbar" style="width: 50%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-violet"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Project-->
                            <div class="project">
                                <div class="row bg-white has-shadow">
                                    <div class="left-col col-lg-6 d-flex align-items-center justify-content-between">
                                        <div class="project-title d-flex align-items-center">
                                            <div class="image has-shadow"><img src="<?php echo base_url('assets/img/project-4.jpg'); ?>" alt="..." class="img-fluid"></div>
                                            <div class="text">
                                                <h3 class="h4">Project Title</h3><small>Lorem Ipsum Dolor</small>
                                            </div>
                                        </div>
                                        <div class="project-date"><span class="hidden-sm-down">Today at 4:24 AM</span></div>
                                    </div>
                                    <div class="right-col col-lg-6 d-flex align-items-center">
                                        <div class="time"><i class="fa fa-clock-o"></i>12:00 PM </div>
                                        <div class="comments"><i class="fa fa-comment-o"></i>20</div>
                                        <div class="project-progress">
                                            <div class="progress">
                                                <div role="progressbar" style="width: 50%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-orange"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <footer class="main-footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-6">
                                    <p>Internship &copy; 2017</p>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
        <!-- Javascript files-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="<?php echo base_url('assets/js/tether.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.cookie.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.validate.min.js'); ?>"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
        <script src="<?php echo base_url('assets/js/charts-home.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/front.js'); ?>"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
        <!---->
    </body>
</html>