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

        $data = json_decode(file_get_contents("php://input"));

        $data = array(
                'nombre_usuario'    => $data->nombre,
                'rut_usuario'       => $data->rut,
                'email_usuario'     => $data->email,
                'password_usuario'  => $data->rut,
                'id_perfil'         => $data->perfil,
                'estado_usuario'    => $data->estado
                
        );

        $result = $this->users->insertUser($data);
        if($result === true){
            echo json_encode(array('code' => 1, 'message' => 'Su registro ha sido agregado correctamente'));
        } else {
            echo json_encode(array('code' => 0, 'message' => 'Hubo un error en el registro, intente otra vez'));
        }

    }
}
