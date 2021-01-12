<?php 
    class Model {

        private $db = NULL;
        private $con = NULL;

        public function __construct(){

            require "lib/Database.php";
            $this->db = new Database();
            $this->con = $this->db->get_conn();
        }

        public function login_user($username, $password){

            $response = [];

            $sql = "SELECT * FROM tbl_users WHERE username = '$username';";
            $res = $this->select($sql);

            if(!empty($res)){
                if(password_verify($password , $res ["password"] )){
                    $response = $res;
                }
            }

            return $response;
        }

        public function get_all_users(){

            $response = [];

            $sql = "SELECT * FROM tbl_users;";
            $res = $this->select($sql);

            return $res;

        }



        private function select($query){
            $res = $this->con->query($query);

            $data =[];

            if($res->num_rows  != 0){
                while($row = mysqli_fetch_assoc($res)) {
                    array_push($data, $row);
                }
            }
            
            return $data;
        }
    }
?>

