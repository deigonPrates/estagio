<?php
$title = 'Editar estagio';

require_once(APPPATH . '/views/header.php');
?>
<div class="content-inner">
    <ul class="breadcrumb">
        <div class="container-fluid">
            <li class="breadcrumb-item"><?php echo anchor('redireciona/pagina/inicio', 'Inicio'); ?></li>
            <li class="breadcrumb-item active">Editar Estagio</li>
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
                            <h3 class="h4">Informe todos os dados para efetuar a ediçao</h3>
                        </div>
                        <div class = "card-body">
                            <?php
                            if (isset($msg)):
                                ?>
                                <div class="alert alert-danger alert-dismissable">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>Os seguintes erros foram encontrados!<br><br></strong> <?php echo $msg; ?>
                                </div>

                                <?php
                            endif;
                            if (isset($success)):
                                ?>
                                <div class="alert alert-success alert-dismissable">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>(:<br><br></strong> <?php echo $success; ?>
                                </div>

                                <?php
                            endif;
                            ?>
                            <div class = "line"></div>
                            <?php echo form_open("editar/salvarEstagio");
                            ?>
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
                                        echo form_label($estagio[0]['nomeAluno'], 'nome', array('class' => 'label-material'));
                                        ?>
                                    </div>
                                    <div class="form-group-material">
                                        <?php
                                        echo form_input(array(
                                            'name' => 'matricula',
                                            'id' => 'matricula',
                                            'class' => 'input-material',
                                        ));
                                        echo form_label($estagio[0]['matriculaAluno'], 'matricula', array('class' => 'label-material'));
                                        ?>
                                    </div>
                                    <div class="form-group-material">
                                        <?php
                                        echo form_input(array(
                                            'name' => 'curso',
                                            'id' => 'curso',
                                            'class' => 'input-material',
                                        ));
                                        echo form_label($estagio[0]['cursoAluno'], 'curso', array('class' => 'label-material'));
                                        ?>
                                    </div>
                                    <div class="form-group-material">
                                        <?php
                                        echo form_input(array(
                                            'name' => 'semestre',
                                            'id' => 'semestre',
                                            'class' => 'input-material',
                                        ));
                                        echo form_label($estagio[0]['semestreAluno'], 'semestre', array('class' => 'label-material'));
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
                                        echo form_label($estagio[0]['dataIncio'], 'dataIncio', array('class' => 'label-material'));
                                        ?>
                                    </div>
                                    <div class="form-group-material">
                                        <?php
                                        echo form_input(array(
                                            'name' => 'dataTermino',
                                            'id' => 'dataTermino',
                                            'class' => 'input-material',
                                        ));
                                        echo form_label($estagio[0]['dataTermino'], 'Data Termino', array('class' => 'label-material'));
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
                                        echo form_label($estagio[0]['cartaAceite'], 'cartaAceite', array('class' => 'label-material'));
                                        ?>
                                    </div>
                                    <div class="form-group-material">
                                        <?php
                                        echo form_input(array(
                                            'name' => 'formularioRequimento',
                                            'id' => 'formularioRequimento',
                                            'class' => 'input-material',
                                        ));
                                        echo form_label($estagio[0]['formularioRequimento'], 'formularioRequimento', array('class' => 'label-material'));
                                        ?>
                                    </div>
                                    <div class="form-group-material">
                                        <?php
                                        echo form_input(array(
                                            'name' => 'termoCompromisso',
                                            'id' => 'termoCompromisso',
                                            'class' => 'input-material',
                                        ));
                                        echo form_label($estagio[0]['termoCompromisso'], 'termoCompromisso', array('class' => 'label-material'));
                                        ?>
                                    </div>
                                    <div class="form-group-material">
                                        <?php
                                        echo form_input(array(
                                            'name' => 'comprovanteMatricula',
                                            'id' => 'comprovanteMatricula',
                                            'class' => 'input-material',
                                        ));
                                        echo form_label($estagio[0]['comprovanteMatricula'], 'comprovanteMatricula', array('class' => 'label-material'));
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
                                        "content" => "Atualizar",
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