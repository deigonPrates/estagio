<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Cadastro Usuario</title>
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
                            <h1 class="h4"><?php echo $this->session->userdata('usuario_logado')[0]['nome']; ?></h1>
                            <p><?php echo $this->session->userdata('usuario_logado')[0]['funcao']; ?></p>
                        </div>
                    </div>
                    <ul class="list-unstyled">
                        <li class="active"><?php echo anchor('redireciona/pagina/inicio', "<i class='icon-home'> </i> Inicio"); ?></li>
                        <li><?php echo anchor('redireciona/pagina/cadastrar_estagio', "<i class='icon-padnote'> </i> Cadastar Estagio"); ?></li>
                        <li><?php echo anchor('redireciona/pagina/cadastrar_usuario', "<i class='icon-user'> </i> Cadastrar Usuario"); ?></li>
                        <li><?php echo anchor('redireciona/pagina/editar_perfil', "<i class='icon-interface-windows'> </i> Editar Perfil"); ?></li>
                    </ul>   
                </nav>
                <div class="content-inner">
                    <ul class="breadcrumb">
                        <div class="container-fluid">
                            <li class="breadcrumb-item"><?php echo anchor('redireciona/pagina/inicio', 'Inicio');?></li>
                            <li class="breadcrumb-item active">Editar Perfil</li>
                        </div>
                    </ul>
                    <!-- Forms Section-->
                    <section class="forms"> 
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-close">
                                            <div class="dropdown">
                                                <button type="button" id="closeCard" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                                <div aria-labelledby="closeCard" class="dropdown-menu has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                                            </div>
                                        </div>
                                        <div class="card-header d-flex align-items-center">
                                            <h3 class="h4">Informe todos os dados para efetuar o cadastro</h3>
                                        </div>
                                        <div class="card-body">
                                            <form class="form-horizontal">
                                                <div class="line"></div>
                                                <div class="row">
                                                    <label class="col-sm-2 form-control-label">Dados do aluno</label>
                                                    <div class="col-sm-9">
                                                        <div class="form-group-material">
                                                            <input id="register-username" type="text" name="registerUsername" required class="input-material">
                                                            <label for="register-username" class="label-material">User Name</label>
                                                        </div>
                                                        <div class="form-group-material">
                                                            <input id="register-email" type="email" name="registerEmail" required class="input-material">
                                                            <label for="register-email" class="label-material">Email Address      </label>
                                                        </div>
                                                        <div class="form-group-material">
                                                            <input id="register-passowrd" type="password" name="registerPassword" required class="input-material">
                                                            <label for="register-passowrd" class="label-material">password        </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="line"></div>
                                                <div class="row">
                                                    <label class="col-sm-2 form-control-label">Dados da empresa</label>
                                                    <div class="col-sm-9">
                                                        <div class="form-group-material">
                                                            <input id="register-username" type="text" name="registerUsername" required class="input-material">
                                                            <label for="register-username" class="label-material">User Name</label>
                                                        </div>
                                                        <div class="form-group-material">
                                                            <input id="register-email" type="email" name="registerEmail" required class="input-material">
                                                            <label for="register-email" class="label-material">Email Address      </label>
                                                        </div>
                                                        <div class="form-group-material">
                                                            <input id="register-passowrd" type="password" name="registerPassword" required class="input-material">
                                                            <label for="register-passowrd" class="label-material">password        </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-4 offset-sm-3">
                                                        <button type="submit" class="btn btn-secondary">Cancelar</button>
                                                        <button type="submit" class="btn btn-primary">Salvar</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Page Footer-->
                    <footer class="main-footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-6">
                                    <p>Internship &copy; 2017</p>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <p>Design by <a href="https://bootstrapious.com/admin-templates" class="external">Bootstrapious</a></p>
                                    <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
        <!-- Javascript files-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="js/tether.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.cookie.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/front.js"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
        <!---->
        <script>
            (function (b, o, i, l, e, r) {
                b.GoogleAnalyticsObject = l;
                b[l] || (b[l] =
                        function () {
                            (b[l].q = b[l].q || []).push(arguments)
                        });
                b[l].l = +new Date;
                e = o.createElement(i);
                r = o.getElementsByTagName(i)[0];
                e.src = '//www.google-analytics.com/analytics.js';
                r.parentNode.insertBefore(e, r)
            }(window, document, 'script', 'ga'));
            ga('create', 'UA-XXXXX-X');
            ga('send', 'pageview');
        </script>
    </body>
</html>