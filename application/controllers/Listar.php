<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Description of Autenticar
 *
 * @author deigon
 */
class Listar extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function usuario() {
        $this->load->Model('usuario_model');

        $dados = array('usuarios' => $this->usuario_model->buscaCompleta());

        $this->load->view('listar_usuarios', $dados);
    }

    public function bloquearUsuario($id) {

        $this->load->Model('usuario_model');
        $this->usuario_model->bloquear($id);
        $this->usuario();
    }

    public function desbloquearUsuario($id) {

        $this->load->Model('usuario_model');
        $this->usuario_model->desbloquear($id);
        $this->usuario();
    }

}
