<?php

/**
 * Description of Usuarios_model
 *
 * @author deigon
 */
class Usuario_model extends CI_Model {

    public function consultar($email) {
        $this->db->where(array("email" => $email));
        return $this->db->get('usuario')->result_array();
    }
    
    
    public function cadastrar($dados) {
        $this->db->insert('usuario', $dados);
    }
}
