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

    public function buscaCompleta() {
        return $this->db->get('usuario')->result_array();
    }

    public function bloquear($id) {
        $this->db->where(array("idusuario" => $id));
        $this->db->set('status', 0);
        $this->db->update('usuario');
        
    }
    public function desbloquear($id) {
        $this->db->where(array("idusuario" => $id));
        $this->db->set('status', 1);
        $this->db->update('usuario');
        
    }

}
