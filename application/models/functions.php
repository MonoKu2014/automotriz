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


        public function printActiveClassNav($identify)
        {

            if($identify == self::getActiveNav()) {
                $class = 'active';
            } else {
                $class = '';
            }

            return $class;

        }


        public function validateEmail($email)
        {

           $pattern = '#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#';
           if(preg_match($pattern, $email)) {
              return true;
           } else {
             return false;
           }

        }


        public function sanitizeString($value)
        {

            $value = trim($value);
            
            if (get_magic_quotes_gpc()) {
                $value = stripslashes($value);
            }

            $value = strtr($value, array_flip(get_html_translation_table(HTML_ENTITIES)));
            $value = strip_tags($value);
            $value = mysqli_real_escape_string(get_mysqli(), $value);
            $value = htmlspecialchars($value);
            return $value;

        }


}