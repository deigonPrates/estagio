<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Empresa_model
 *
 * @author deigon
 */
class Empresa_model extends CI_Model{

    public function cadastrar($dados) {
        $this->db->insert('empresa', $dados);
        return $this->retornarID();
    }
    
    private function retornarID(){
        $this->db->select("idempresa");
        $this->db->order_by("idempresa", "desc"); 
        $this->db->limit(1);
        
        return $this->db->get('empresa')->result_array();
    }

}
