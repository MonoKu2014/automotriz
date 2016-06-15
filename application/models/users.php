<?php

class Users extends CI_Model {


        public function __construct()
        {
                parent::__construct();
        }

        public function getUsers()
        {
            $this->db->join('perfiles_usuarios pu', 'u.id_perfil = pu.id_perfil');
            $query = $this->db->get('usuarios u');
            return $query->result();
        }

        public function insertUser($data)
        {
            return $this->db->insert('usuarios', $data);
        }

        public function updateUser($data)
        {
            
        }

        public function deleteUser($data)
        {
            
        }


}