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
                if(password_verify($password , $res[0]["password"] )){
                    $response = $res;
                }
            }

            return $response;
        }

        public function get_all_users($user_id = ""){

            $response = [];

            $where = $user_id != "" ? " WHERE user_id != $user_id" : "";

            $sql = "SELECT * FROM tbl_users $where;";

            $res = $this->select($sql);

            return $res;

        }

        public function get_one_user($user_id = ""){

            $response = [];

            $where = $user_id != "" ? " WHERE user_id = $user_id" : "";

            $sql = "SELECT * FROM tbl_users $where;";

            $res = $this->select($sql);

            return $res;

        }

        public function save_user($data){

            $response = [];

            $password = password_hash($data["password"], PASSWORD_DEFAULT);

            $values =  "null, '".$data["username"]."', '".$password."', '".ucfirst($data['firstname'])."',  '".ucfirst($data['lastname'])."', ".$data['age'].", '".$data['gender']."', 1, '".date("Y-m-d")."'";

            $sql = "INSERT INTO tbl_users VALUES ($values) ;";
            $res = $this->executeQuery($sql);

            return $res;

        }

        public function update_user($data){
            $response = [];
            $password = password_hash($data["password"], PASSWORD_DEFAULT);

            $sql = 'UPDATE tbl_users set firstname = "'.ucfirst($data['firstname']).'", lastname = "'.ucfirst($data['lastname']).'", age = '.$data['age']. ', username = "'.$data['username'].'", password = "'. $password  .'" WHERE user_id = '.$data['fk_user_id'].';';

            $res = $this->executeQuery($sql);

            return $res;
        }

        public function delete_user($user_id){

            $sql = "DELETE FROM tbl_users WHERE user_id = $user_id ;";
            $res = $this->executeQuery($sql);

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

        private function executeQuery($query){
            $res = $this->con->query($query);
            return $res;
        }
    }
?>

