<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Description of Autenticar
 *
 * @author deigon
 */
class Editar extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function usuario() {
        $this->load->helper('form');
        $this->load->view('editar_perfil');
    }

    public function atualizar() {

        $this->load->helper('form');
        $id = $this->session->userdata('logado')[0]['idusuario'];

        $this->load->library('form_validation');
        $this->load->library('criptografia');


//regras usuario
        $this->form_validation->set_rules('nome', 'nome', 'trim');
        $this->form_validation->set_rules('username', 'username', 'trim');
        $this->form_validation->set_rules('senha', 'senha', '');
        $this->form_validation->set_rules('email', 'email', 'trim|valid_email|valid_emails', array('valid_email' => 'O campo %s nao e um email valido', 'required' => 'O campo %s nao pode ficar vazio'));
        $this->form_validation->set_rules('funcao', 'funcao', 'trim');


        if ($this->form_validation->run() == FALSE) {

            $erros = validation_errors();
            $mensagem = array('msg' => $erros);
            $this->load->view('editar_perfil', $mensagem);
        } else {
            if ($this->input->post('senha') != '') {
                $criptografia = $this->criptografia->hashHX($this->input->post('senha'));

                $senha = $criptografia['password'];
                $salt = $criptografia['salt'];

                $dados = array(
                    'nome' => $this->input->post('nome', TRUE),
                    'username' => $this->input->post('username', TRUE),
                    'senha' => $senha,
                    'salt' => $salt,
                    'email' => $this->input->post('email', TRUE),
                    'funcao' => $this->input->post('funcao', TRUE),
                    'status' => 1,
                );

                $this->load->model('usuario_model');
                $result = $this->usuario_model->atualizar($dados, $id, TRUE);
            } else {
                $dados = array(
                    'nome' => $this->input->post('nome', TRUE),
                    'username' => $this->input->post('username', TRUE),
                    'email' => $this->input->post('email', TRUE),
                    'funcao' => $this->input->post('funcao', TRUE),
                    'status' => 1,
                );

                $this->load->model('usuario_model');
                $result = $this->usuario_model->atualizar($dados, $id, FALSE);
            }
            if (!$result) {
                $mensagem = array('msg' => 'Nao foi possivel atualizar seus dados tente novamente.');
                $this->load->view('editar_perfil', $mensagem);
            } else {
                $mensagem = array('success' => 'Dados atualizados, deslogue e logue novamente para carregar-lo');
                $this->load->view('editar_perfil', $mensagem);
            }
        }
    }

    public function estagio() {
        $this->load->model('estagio_model');
        $dados = array('estagio' => $this->estagio_model->buscaCompleta());
        $this->load->view('definir_estagio', $dados);
    }

    public function estagioCheck($id) {
        $this->load->helper('form');
        $this->load->model('estagio_model');
        $dados = array('estagio' => $this->estagio_model->buscaEspecifica($id));
        $this->load->view('editar_estagio', $dados);
    }
    public function salvarEstagio() {
        
    }

}
