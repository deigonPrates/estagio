<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Documentacao_model
 *
 * @author deigon
 */
class Documentacao_model {

    
    public function cadastrar($dados) {
        $this->db->insert('documentacao', $dados);
    }
    
    private function retornarID() {
        $this->db->select("iddocumentacao");
        $this->db->order_by("iddocumentacao", "desc");
        $this->db->limit(1);

        return $this->db->get('documentacao')->result_array();
    }

    public function buscaEspecifica($id) {
        $this->db->where('iddocumentacao', $id);
        return $this->db->get('documentacao')->result_array();
    }

}
