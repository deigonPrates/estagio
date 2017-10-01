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
                            <li class="breadcrumb-item active">Cadastrar Estagio</li>
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
                                            <div class="line"></div>
                                            <?php echo form_open("/cadastrar/estagio/"); ?>
                                            <div class="row">
                                                <label class="col-sm-2 form-control-label">Dados do aluno</label>
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
                                                            'name' => 'matricula',
                                                            'id' => 'matricula',
                                                            'class' => 'input-material',
                                                        ));
                                                        echo form_label('Matricula', 'matricula', array('class' => 'label-material'));
                                                        ?>
                                                    </div>
                                                    <div class="form-group-material">
                                                        <?php
                                                        echo form_input(array(
                                                            'name' => 'curso',
                                                            'id' => 'curso',
                                                            'class' => 'input-material',
                                                        ));
                                                        echo form_label('Curso', 'curso', array('class' => 'label-material'));
                                                        ?>
                                                    </div>
                                                    <div class="form-group-material">
                                                        <?php
                                                        echo form_input(array(
                                                            'name' => 'semestre',
                                                            'id' => 'semestre',
                                                            'class' => 'input-material',
                                                        ));
                                                        echo form_label('Semestre', 'semestre', array('class' => 'label-material'));
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class = "line"></div>
                                            <div class="row">
                                                <label class="col-sm-2 form-control-label">Dados da empresa</label>
                                                <div class="col-sm-9">
                                                    <div class="form-group-material">
                                                        <?php
                                                        echo form_input(array(
                                                            'name' => 'nomeEmpresa',
                                                            'id' => 'nomeEmpresa',
                                                            'class' => 'input-material',
                                                        ));
                                                        echo form_label('Nome', 'nome', array('class' => 'label-material'));
                                                        ?>
                                                    </div>
                                                    <div class="form-group-material">
                                                        <?php
                                                        echo form_input(array(
                                                            'name' => 'razaoSocial',
                                                            'id' => 'razaoSocial',
                                                            'class' => 'input-material',
                                                        ));
                                                        echo form_label('Razao Social', 'razaoSocial', array('class' => 'label-material'));
                                                        ?>
                                                    </div>
                                                    <div class="form-group-material">
                                                        <?php
                                                        echo form_input(array(
                                                            'name' => 'endereco',
                                                            'id' => 'endereco',
                                                            'class' => 'input-material',
                                                        ));
                                                        echo form_label('Endereco', 'endereco', array('class' => 'label-material'));
                                                        ?>
                                                    </div>
                                                    <div class="form-group-material">
                                                        <?php
                                                        echo form_input(array(
                                                            'name' => 'bairro',
                                                            'id' => 'bairro',
                                                            'class' => 'input-material',
                                                        ));
                                                        echo form_label('Bairro', 'bairro', array('class' => 'label-material'));
                                                        ?>
                                                    </div>
                                                    <div class="form-group-material">
                                                        <?php
                                                        echo form_input(array(
                                                            'name' => 'cidade',
                                                            'id' => 'cidade',
                                                            'class' => 'input-material',
                                                        ));
                                                        echo form_label('cidade', 'cidade', array('class' => 'label-material'));
                                                        ?>
                                                    </div>
                                                    <div class="form-group-material">
                                                        <?php
                                                        echo form_input(array(
                                                            'name' => 'cep',
                                                            'id' => 'cep',
                                                            'class' => 'input-material',
                                                        ));
                                                        echo form_label('CEP', 'cep', array('class' => 'label-material'));
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class = "line"></div>
                                            <div class="row">
                                                <label class="col-sm-2 form-control-label">Dados do estagio</label>
                                                <div class="col-sm-9">
                                                    <div class="form-group-material">
                                                        <?php
                                                        echo form_input(array(
                                                            'name' => 'dataIncio',
                                                            'id' => 'dataIncio',
                                                            'class' => 'input-material',
                                                        ));
                                                        echo form_label('Data Incio', 'dataIncio', array('class' => 'label-material'));
                                                        ?>
                                                    </div>
                                                    <div class="form-group-material">
                                                        <?php
                                                        echo form_input(array(
                                                            'name' => 'dataTermino',
                                                            'id' => 'dataTermino',
                                                            'class' => 'input-material',
                                                        ));
                                                        echo form_label('Data Termino', 'Data Termino', array('class' => 'label-material'));
                                                        ?>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class = "line"></div>
                                            <div class="row">
                                                <label class="col-sm-2 form-control-label">Documentos</label>
                                                <div class="col-sm-9">
                                                    <div class="form-group-material">
                                                        <?php
                                                        echo form_input(array(
                                                            'name' => 'cartaAceite',
                                                            'id' => 'cartaAceite',
                                                            'class' => 'input-material',
                                                        ));
                                                        echo form_label('Carta de Aceite', 'cartaAceite', array('class' => 'label-material'));
                                                        ?>
                                                    </div>
                                                    <div class="form-group-material">
                                                        <?php
                                                        echo form_input(array(
                                                            'name' => 'formularioRequimento',
                                                            'id' => 'formularioRequimento',
                                                            'class' => 'input-material',
                                                        ));
                                                        echo form_label('Formulario Requimento', 'formularioRequimento', array('class' => 'label-material'));
                                                        ?>
                                                    </div>
                                                    <div class="form-group-material">
                                                        <?php
                                                        echo form_input(array(
                                                            'name' => 'termoCompromisso',
                                                            'id' => 'termoCompromisso',
                                                            'class' => 'input-material',
                                                        ));
                                                        echo form_label('Termo Compromisso', 'termoCompromisso', array('class' => 'label-material'));
                                                        ?>
                                                    </div>
                                                    <div class="form-group-material">
                                                        <?php
                                                        echo form_input(array(
                                                            'name' => 'comprovanteMatricula	',
                                                            'id' => 'comprovanteMatricula	',
                                                            'class' => 'input-material',
                                                        ));
                                                        echo form_label('Comprovante de Matricula	', 'comprovanteMatricula', array('class' => 'label-material'));
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="<?php echo base_url('assets/js/tether.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.cookie.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.validate.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/front.js'); ?>"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <!---->
    </body>
</html>