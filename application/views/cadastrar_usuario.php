<?php
$title = 'Cadastrar novo usuario';

require_once(APPPATH . '/views/header.php');
?>                <div class="content-inner">
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

    <?php
    require_once(APPPATH . '/views/footer.php');
    ?>