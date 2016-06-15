<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

    public function __construct()
    {
            parent::__construct();
            $this->load->model('users', 'users');
            $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('includes/header');
        $this->load->view('includes/left');
        $this->load->view('usuarios/inicio');
        $this->load->view('includes/footer');
    }

    public function allUsers()
    {
        echo json_encode($this->users->getUsers());
    }

    public function agregar()
    {
        $this->load->view('includes/header');
        $this->load->view('includes/left');
        $this->load->view('usuarios/agregar');
        $this->load->view('includes/footer');
    }

    public function registrar()
    {

        $this->form_validation->set_rules('nombre', 'Nombre', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('rut', 'Rut', 'required');
        $this->form_validation->set_rules('perfil', 'Perfil', 'required');
        $this->form_validation->set_rules('estado', 'Estado', 'required');

        if($this->form_validation->run() === FALSE){
            $this->session->set_flashdata('mensaje', '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 card-panel red lighten-1 white-text alerta_error"><strong>Atencion!</strong><br>Hay errores en el formulario</div>');
            redirect(base_url().'usuarios');
        } 

        $data = array(
                'nombre_usuario'    => $_POST['nombre'],
                'rut_usuario'       => $_POST['rut'],
                'email_usuario'     => $_POST['email'],
                'password_usuario'  => $_POST['password'],
                'id_perfil'         => $_POST['perfil'],
                'avatar_usuario'    => $_FILES['archivo']['name'],
                'estado_usuario'    => $_POST['estado']
                
        );

        $result = $this->users->insertUser($data);
        if($result === true){
          $this->session->set_flashdata('mensaje', '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 card-panel teal white-text alerta"><strong>Éxito!</strong><br>Su registro ha sido creado</div>');
          redirect(base_url().'usuarios');          
        } else {
          $this->session->set_flashdata('mensaje', '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 card-panel red lighten-1 white-text alerta_error"><strong>Atencion!</strong><br>Su registro no ha sido creado</div>');  
          redirect(base_url().'usuarios');
        }

    }
}
