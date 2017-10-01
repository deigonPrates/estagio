<?php
$title = 'Cadastrar Editar pefil';

require_once(APPPATH . '/views/header.php');
?>                <div class="content-inner">
    <ul class="breadcrumb">
        <div class="container-fluid">
            <li class="breadcrumb-item"><?php echo anchor('redireciona/pagina/inicio', 'Inicio'); ?></li>
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

    <?php
    require_once(APPPATH . '/views/footer.php');
    ?>