<?php
  
    class Session{
        
        public function __construct(){

        }

        public function set_userdata($data= array()){
            session_start();
            $_SESSION["userdata"] = $data;
        }

        public function get_userdata($specified = ""){
            session_start();

            if(!empty($_SESSION["userdata"])){
                if(!empty($specified)){
                    return $_SESSION["userdata"][$specified];
                }
                else{
                    return $_SESSION["userdata"];
                }
            }else{
                return [];
            }
        }   

        public function unset_session() {
            session_start();
            if(!empty($_SESSION["userdata"])){
               unset ($_SESSION["userdata"]);
            }
        }
    }

?>