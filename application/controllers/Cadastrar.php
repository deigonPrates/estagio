<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Description of Cadastrar
 *
 * @author deigon
 */
class Cadastrar extends CI_Controller {

//put your code here
    public function estagio() {

        $this->load->helper('form');
        $this->load->library('form_validation');

//colocando as regras aluno
        $this->form_validation->set_rules('nome', 'nome', 'required|trim', array('required' => 'O campo %s nao pode ficar vazio'));
        $this->form_validation->set_rules('matricula', 'matricula', 'required|trim', array('required' => 'O campo %s nao pode ficar vazio'));
        $this->form_validation->set_rules('curso', 'curso', 'required', array('required' => 'O campo %s nao pode ficar vazio'));
        $this->form_validation->set_rules('semestre', 'semestre', 'required|trim', array('required' => 'O campo %s nao pode ficar vazio'));

//regras empresa
        $this->form_validation->set_rules('nomeEmpresa', 'nomeEmpresa', 'required|trim', array('required' => 'O campo %s nao pode ficar vazio'));
        $this->form_validation->set_rules('razaoSocial', 'razaoSocial', 'required|trim', array('required' => 'O campo %s nao pode ficar vazio'));
        $this->form_validation->set_rules('endereco', 'endereco', 'required|trim', array('required' => 'O campo %s nao pode ficar vazio'));
        $this->form_validation->set_rules('bairro', 'bairro', 'required|trim', array('required' => 'O campo %s nao pode ficar vazio'));
        $this->form_validation->set_rules('cidade', 'cidade', 'required|trim', array('required' => 'O campo %s nao pode ficar vazio'));
        $this->form_validation->set_rules('cep', 'cep', 'required|trim', array('required' => 'O campo %s nao pode ficar vazio'));

//regras estagio
        $this->form_validation->set_rules('dataIncio', 'dataIncio', 'required|trim', array('required' => 'O campo %s nao pode ficar vazio'));
        $this->form_validation->set_rules('dataTermino', 'dataTermino', 'required|trim', array('required' => 'O campo %s nao pode ficar vazio'));

//regras documentos
        $this->form_validation->set_rules('cartaAceite', 'cartaAceite', 'required|trim', array('required' => 'O campo %s nao pode ficar vazio'));
        $this->form_validation->set_rules('formularioRequimento', 'formularioRequimento|trim', 'required', array('required' => 'O campo %s nao pode ficar vazio'));
        $this->form_validation->set_rules('termoCompromisso', 'termoCompromisso', 'required|trim', array('required' => 'O campo %s nao pode ficar vazio'));
        $this->form_validation->set_rules('comprovanteMatricula', 'comprovanteMatricula|trim', 'required', array('required' => 'O campo %s nao pode ficar vazio'));


        if ($this->input->post("nome") != '') {

            if ($this->form_validation->run() == FALSE) {

                $erros = validation_errors();
                echo "<pre>";
                print_r($erros);
                echo "<pre>";
                exit();
            } else {
                echo "Formulário enviado com sucesso.";
                exit();
            }
        }

        $this->load->view('cadastrar_estagio');
    }

    public function usuario() {

        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('criptografia');


//regras usuario
        $this->form_validation->set_rules('nome', 'nome', 'required|trim', array('required' => 'O campo %s nao pode ficar vazio'));
        $this->form_validation->set_rules('username', 'username', 'required|trim', array('required' => 'O campo %s nao pode ficar vazio'));
        $this->form_validation->set_rules('senha', 'senha', 'required', array('required' => 'O campo %s nao pode ficar vazio'));
        $this->form_validation->set_rules('email', 'email', 'required|trim|valid_email|valid_emails', array('valid_email' => 'O campo %s nao e um email valido', 'required' => 'O campo %s nao pode ficar vazio'));
        $this->form_validation->set_rules('funcao', 'funcao', 'required|trim', array('required' => 'O campo %s nao pode ficar vazio'));

        if ($this->input->post("nome") != '') {

            if ($this->form_validation->run() == FALSE) {

                $erros = validation_errors();
                $mensagem = array('msg' => $erros);
                $this->load->view('cadastrar_usuario', $mensagem);
                
            } else {

                $criptografia = $this->criptografia->hashHX($this->input->post('senha'));

                $senha = $criptografia['password'];
                $salt = $criptografia['salt'];

                $dados = array(
                    'nome' => $this->input->post('nome'),
                    'username' => $this->input->post('username'),
                    'senha' => $senha,
                    'salt' => $salt,
                    'email' => $this->input->post('email'),
                    'funcao' => $this->input->post('funcao'),
                    'status' => 1,
                );

                $this->load->model('usuario_model');
                $this->usuario_model->cadastrar($dados);

                $this->load->view('cadastrar_usuario');
            }
        } else {
            $this->load->view('cadastrar_usuario');
        }
    }

}
