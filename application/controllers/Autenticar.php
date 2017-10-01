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
        }else{
            $this->load->view("inicio");
        }
        
    }

    public function logar() {

        $email = $this->input->post('email');
        $senha = $this->input->post('senha');

        $this->load->model('Usuario_model');

        $usuarios = $this->Usuario_model->buscarUsuario($email, $senha);

        if ($usuarios) {
            $this->session->set_userdata("logado", $usuarios);
            $this->load->view("inicio");
        } else {
            $this->index();
        }
    }

    public function sair() {
        $this->session->sess_destroy();
        $this->load->helper('form');
        redirect('/autenticar/index', 'location');
    }

}
