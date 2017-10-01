<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Description of Autenticar
 *
 * @author deigon
 */
class Autenticar extends CI_Controller {

    //put your code here

    public function __construct() {
        parent::__construct();
    }

    public function index() {


        if (is_null($this->session->userdata('logado'))) {
            $this->load->helper('form');
            $this->load->view('login');
        } else {
            $this->load->view("inicio");
        }
    }

    public function logar() {

        $email = $this->input->post('email', TRUE);
        $senha = $this->input->post('senha', TRUE);

        $this->load->model('Usuario_model');
        $this->load->library('criptografia');

        $usuarios = $this->Usuario_model->consultar($email);

        if ($usuarios) {

            $bd_senha = $usuarios[0]['senha'];
            $bd_salt = $usuarios[0]['salt'];

            $descriptografia = $this->criptografia->hashHX($senha, $bd_salt);
            if ($descriptografia['password'] === $bd_senha) {
                $this->session->set_userdata("logado", $usuarios);
                $this->load->view("inicio");
            } else {
                $erro = array('msg' => 'Email ou senha invalido!');
                $this->load->helper('form');
                $this->load->view('login', $erro);
            }
        } else {

            $erro = array('msg' => 'Email ou senha invalido!');
            $this->load->helper('form');
            $this->load->view('login', $erro);
        }
    }

    public function sair() {
        $this->session->sess_destroy();
        $this->load->helper('form');
        redirect('/autenticar/index', 'location');
    }

}
