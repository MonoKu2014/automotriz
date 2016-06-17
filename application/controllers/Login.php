<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
            parent::__construct();
            $this->load->model('acceso', 'acceso');
    }

    public function index()
    {
        $acceso = $this->acceso->validarAcceso($_POST['email'], $_POST['password']);

        if(count($acceso) == 0){
            $this->session->set_flashdata('mensaje', '<div id="error-alert" class="red-text">Los datos ingresados son incorrectos</div>');
            redirect(base_url());
        } else {
            $newdata = array(
                'id_cliente' => $acceso[0]->id_usuario,
                'usuario'    => $acceso[0]->nombre_usuario,
                'email'      => $acceso[0]->email_usuario,
                'perfil'     => $acceso[0]->perfil_usuario,
                'area'       => $_POST['area'],
                'logged_in'  => true
            );
            $this->session->set_userdata($newdata);
            redirect(base_url().'main');
        }
    }

    public function cerrar_sesion()
    {
        $this->session->sess_destroy();
         redirect(base_url());
    }


}