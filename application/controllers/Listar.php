<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Description of Autenticar
 *
 * @author deigon
 */

class Listar extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function usuario() {
        $this->load->view('listar_usuarios');
    }
}