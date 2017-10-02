<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Estagio_model
 *
 * @author deigon
 */
class Estagio_model extends CI_Model{
     public function cadastrar($dados) {
        $this->db->insert('estagio', $dados);
    }
    
    public function buscaCompleta() {
        return $this->db->get('estagio')->result_array();
    }
    
}
