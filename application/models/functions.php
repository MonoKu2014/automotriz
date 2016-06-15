<?php

class Functions extends CI_Model {


        public function __construct()
        {
                parent::__construct();
        }

        public function getActiveNav()
        {
            $full_name = $_SERVER[ 'REQUEST_URI' ];
            $name_array = explode( '/', $full_name );
            $count = count($name_array);
            $page_name = $name_array[$count - 1];
            return $page_name;
        }


        public function printActiveClassNav($identificador)
        {

            if($identificador == self::getActiveNav()){
                $class = 'active';
            } else {
                $class = '';
            }

            return $class;

        }


}