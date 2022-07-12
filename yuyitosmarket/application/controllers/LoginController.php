<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class LoginController extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('LoginModel');
        $this->load->database();

    }

    public function index(){

        if ($this->session->userdata('usuario')) {
            redirect('/Home', 'refresh');
        } else {
            $this->load->view('login/login', false);
        }
    }

    public function validarLogin(){

        if ($this->input->post('usuario') && $this->input->post('contrasena')) {
            $usuario = $this->input->post('usuario');
            $contrasena = $this->input->post('contrasena');

            $validar = $this->LoginModel->validarLogin($usuario,$contrasena);

            if ($validar) {

                if ($validar->TIPO_USUARIO === "Administrador") {

                    $data = array(
                        'FECHA_SESSION' => date('Y-m-d H:i:s'),
                    );

                    $this->LoginModel->registrarSession($validar->ID_PERSONA,$data);

                    $newdata = array(
                    'usuario'  => $usuario,
                    'id_persona' => $validar->ID_PERSONA,
                    'fecha' => date('Y-m-d H:i:s'),
                    'tipo_usuario' => $validar->TIPO_USUARIO,
                    'logged_in' => true
                );
                
                    $this->session->set_userdata($newdata);

                    redirect('/Home', 'refresh');

                } else {
                    header('location:'.base_url().$this->index());
                    $this->session->set_flashdata('error','El usuario ingresado no es administrador');
                }
                
            } else {
                header('location:'.base_url().$this->index());
                $this->session->set_flashdata('error', 'El usuario ingresado no existe');
            }
            header('location:'.base_url().$this->index());
            $this->session->set_flashdata('error', 'Ingrese correctamente sus datos');
        }else {
            header('location:'.base_url().$this->index());
            $this->session->set_flashdata('error', 'Ingrese correctamente sus datos');
        }

    }

    public function logout() {
        $this->session->unset_userdata('usuario');
        $this->session->unset_userdata('id_persona');
        $this->session->unset_userdata('fecha');
        $this->session->unset_userdata('tipo_usuario');
        $this->session->unset_userdata('logged_in');
        $this->index();

    }


}