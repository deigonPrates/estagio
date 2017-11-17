<?php
$title = 'Listar estagios';

$link = base_url('assets/css/efeito_table.css');
$css = "<link rel='stylesheet' href='$link'>";

require_once(APPPATH . '/views/header.php');
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
                                                <th class="col-md-2 col-xs-2" style="width: 20%;">Username</th>
                                                <th class="col-md-3 col-xs-3" style="width: 30%;">Funçao</th>
                                                <th class="col-md-4 col-xs-4">Açao</th>
                                            </tr>
                                            <tr class="warning no-result">
                                                <td colspan="4"><i class="fa fa-warning"></i> Nada encontrado!!</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $cont = 1;
                                            foreach ($usuarios as $key => $value) {
                                                $id = $value['idusuario'];
                                                echo '<tr>';
                                                echo "<th scope='row'>$cont</th>";
                                                echo ' <td>' . $value['nome'] . ' </td>';
                                                echo ' <td>' . $value['username'] . ' </td>';
                                                echo ' <td>' . $value['funcao'] . ' </td>';
                                                if ($value['status'] == 1):
                                                    echo ' <td>' . anchor('listar/bloquearUsuario/' . $id, 'Bloquear', array('class' => 'btn btn-danger')) . ' </td>';
                                                else:
                                                    echo ' <td>' . anchor('listar/desbloquearUsuario/' . $id, 'Desbloquear', array('class' => 'btn btn-success')) . ' </td>';
                                                endif;
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