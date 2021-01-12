<?php
  
    class Session{
        
        public function __construct(){
            session_start();
        }

        public function set_userdata($data= array()){
            if(!empty($data)){
                $_SESSION["userdata"] = $data;
            }
        }

        public function get_userdata($specified = ""){
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
            if(!empty($_SESSION["userdata"])){
               unset ($_SESSION["userdata"]);
            }
        }
    }

?>