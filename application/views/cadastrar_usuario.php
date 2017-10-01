<!DOCTYPE html>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Cadastro Estagio</title>
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
        <script src="<?php echo base_url('assets/js/fontawesome.js'); ?>"></script>
        <!-- Font Icons CSS-->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/icons.css'); ?>">
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
                        <li><?php echo anchor('redireciona/pagina/cadastrar_estagio', "<i class='icon-padnote'> </i> Cadastar Estagio"); ?></li>
                        <li><?php echo anchor('redireciona/pagina/cadastrar_usuario', "<i class='icon-user'> </i> Cadastrar Usuario"); ?></li>
                        <li><?php echo anchor('redireciona/pagina/editar_perfil', "<i class='icon-interface-windows'> </i> Editar Perfil"); ?></li>
                    </ul>   
                </nav>
                <div class="content-inner">
                    <ul class="breadcrumb">
                        <div class="container-fluid">
                            <li class="breadcrumb-item"><?php echo anchor('redireciona/pagina/inicio', 'Inicio'); ?></li>
                            <li class="breadcrumb-item active">Cadastrar usuario</li>
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
                                            <?php
                                            if (isset($msg)):
                                                ?>
                                                <div class="alert alert-danger alert-dismissable">
                                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                    <strong>Os seguintes erros foram encontrados!<br><br></strong> <?php echo $msg; ?>
                                                </div>

                                                <?php
                                            endif;
                                            ?>
                                            <div class="line"></div>
                                            <?php echo form_open("cadastrar/usuario"); ?>
                                            <div class="row">
                                                <label class="col-sm-2 form-control-label">Dados do usuario</label>
                                                <div class="col-sm-9">
                                                    <div class="form-group-material">
                                                        <?php
                                                        echo form_input(array(
                                                            'name' => 'nome',
                                                            'id' => 'nome',
                                                            'class' => 'input-material',
                                                        ));
                                                        echo form_label('Nome', 'nome', array('class' => 'label-material'));
                                                        ?>
                                                    </div>
                                                    <div class="form-group-material">
                                                        <?php
                                                        echo form_input(array(
                                                            'name' => 'username',
                                                            'id' => 'username',
                                                            'class' => 'input-material',
                                                        ));
                                                        echo form_label('Username', 'username', array('class' => 'label-material'));
                                                        ?>
                                                    </div>
                                                    <div class="form-group-material">
                                                        <?php
                                                        echo form_password(array(
                                                            'name' => 'senha',
                                                            'id' => 'senha',
                                                            'class' => 'input-material',
                                                        ));
                                                        echo form_label('Senha', 'senha', array('class' => 'label-material'));
                                                        ?>
                                                    </div>
                                                    <div class="form-group-material">
                                                        <?php
                                                        echo form_input(array(
                                                            'name' => 'email',
                                                            'id' => 'email',
                                                            'class' => 'input-material',
                                                        ));
                                                        echo form_label('E-mail', 'email', array('class' => 'label-material'));
                                                        ?>
                                                    </div>
                                                    <div class="form-group-material">
                                                        <?php
                                                        echo form_input(array(
                                                            'name' => 'funcao',
                                                            'id' => 'funcao',
                                                            'class' => 'input-material',
                                                        ));
                                                        echo form_label('Funcao', 'funcao', array('class' => 'label-material'));
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class = "line"></div>

                                            <div class = "form-group row">
                                                <div class = "col-sm-5 offset-sm-4">
                                                    <?php
                                                    echo anchor('redireciona/pagina/inicio', "Cancelar", array('class' => 'btn btn-secondary'));
                                                    echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                                                    echo form_button(array(
                                                        "class" => "btn btn-primary",
                                                        "content" => "Cadastrar",
                                                        "type" => "submit",
                                                        'style' => 'width:33%',
                                                    ));
                                                    ?>
                                                </div>
                                            </div>
                                            <?php
                                            echo form_close();
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--Page Footer-->
                    <footer class = "main-footer">
                        <div class = "container-fluid">
                            <div class = "row">
                                <div class = "col-sm-6">
                                    <p>Internship &copy;
                                        2017</p>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
        <!-- Javascript files-->
        <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/tether.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.cookie.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.validate.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/front.js'); ?>"></script>
    </body>
</html>