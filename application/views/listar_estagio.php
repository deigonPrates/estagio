<?php
$title = 'Listar estagios';

$link = base_url('assets/css/efeito_table.css');
$css = "<link rel='stylesheet' href='$link'>";

require_once(APPPATH . '/views/header.php');
?>
<!-- Modal -->
<style>
    .DemoModal2{margin:50px;}
</style>
<?php
foreach ($estagio as $key => $value):
    $id = $value['idestagio'];
    ?>
    <!-- Modal Contents -->
    <div id="<?php echo 'DemoModal' . $id; ?>" class="modal fade " style="margin:50px"> <!-- class modal and fade -->

        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-header"> <!-- modal header -->
                    <button type="button" class="close" 
                            data-dismiss="modal" aria-hidden="true">×</button>

                    <h4 class="modal-title">Detalhes do aluno</h4>
                </div>

                <div class="modal-body"> <!-- modal body -->
                    <table class="table table-hover table-bordered results">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th class="col-md-2 col-xs-2" style="width: 10%;">Name</th>
                                <th class="col-md-2 col-xs-2" style="width: 10%;">Matricula</th>
                                <th class="col-md-3 col-xs-3" style="width: 10%;">Semestre</th>
                                <th class="col-md-3 col-xs-3" style="width: 10%;">Inicio</th>
                                <th class="col-md-3 col-xs-3" style="width: 10%;">Termino</th>
                                <th class="col-md-3 col-xs-3" style="width: 10%;">Curso</th>
                            </tr>
                            <tr class="warning no-result">
                                <td colspan="4"><i class="fa fa-warning"></i> Nada encontrado!!</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $cont = 1;
                            foreach ($estagio as $key => $value) {
                                if ($value['idestagio'] == $id):
                                    echo '<tr>';
                                    echo "<th scope='row' style='width:5%;'>$cont</th>";
                                    echo ' <td>' . $value['nomeAluno'] . ' </td>';
                                    echo ' <td>' . $value['matriculaAluno'] . ' </td>';
                                    echo ' <td>' . $value['semestreAluno'] . ' </td>';
                                    echo ' <td>' . $value['dataIncio'] . ' </td>';
                                    echo ' <td>' . $value['dataTermino'] . ' </td>';
                                    echo ' <td>' . $value['cursoAluno'] . ' </td>';
                                    echo '</tr>';
                                    $cont++;
                                endif;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

                <div class="modal-footer"> <!-- modal footer -->
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                </div>

            </div> <!-- / .modal-content -->

        </div> <!-- / .modal-dialog -->

    </div><!-- / .modal -->
    <?php
endforeach;
?>
<div class="content-inner">
    <ul class="breadcrumb">
        <div class="container-fluid">
            <li class="breadcrumb-item"><?php echo anchor('redireciona/pagina/inicio', 'Inicio'); ?></li>
            <li class="breadcrumb-item active">Listar Estagio</li>
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
                            <h3 class="h4">Usuarios cadastrados no sistema</h3>
                        </div>
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="form-group pull-right">
                                        <input type="text" class="search form-control" placeholder="Pesquisar">
                                    </div>
                                    <span class="counter pull-right"></span>
                                    <table class="table table-hover table-bordered results">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th class="col-md-2 col-xs-2" style="width: 30%;">Name</th>
                                                <th class="col-md-2 col-xs-2" style="width: 20%;">Matricula</th>
                                                <th class="col-md-3 col-xs-3" style="width: 30%;">Semestre</th>
                                                <th class="col-md-4 col-xs-4">Detalhes</th>
                                            </tr>
                                            <tr class="warning no-result">
                                                <td colspan="4"><i class="fa fa-warning"></i> Nada encontrado!!</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $cont = 1;
                                            foreach ($estagio as $key => $value) {
                                                $id = $value['idestagio'];
                                                echo '<tr>';
                                                echo "<th scope='row'>$cont</th>";
                                                echo ' <td>' . $value['nomeAluno'] . ' </td>';
                                                echo ' <td>' . $value['matriculaAluno'] . ' </td>';
                                                echo ' <td>' . $value['semestreAluno'] . ' </td>';
                                                echo ' <td>' . "<button type='button' class='btn btn-primary btn-lg' data-toggle='modal' data-target='#DemoModal$id'>Visualizar</button>" . ' </td>';
                                                echo '</tr>';
                                                $cont++;
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </section>

                <?php
                $link = base_url('assets/js/custom_table.js');
                $js = "<script src='$link'></script>";
                require_once(APPPATH . '/views/footer.php');
                ?>