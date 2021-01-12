<?php
    
    require("config.php");
    require("Database.php");

    class QueryBuilder{
       
        private $queryString = NULL;
        private $dbclass;

        public function __construct(){
            parent::__construct();

            $this->dbclass = new Database(
                $dbconfig["dbname"],
                $dbconfig["username"],
                $dbconfig["password"],
                $dbconfig["host"],
            );
        }

        public function select($table, $param){

            $sql = "SELECT";
            $row = [];
            if(!empty($param)){
               
                $select = "*";
                if(!empty($param["select"])){
                    $select = " ".$param["select"];
                }

                $join = "";
                if(!empty($param["join"])){
                    $join = " INNER JOIN ".$param["join"]
                }
                $where = "";
                if(!empty($param["where"])){
                    $where = " WHERE ".$param["where"];
                }

                $sql .= $select . $join .$where . ";"
            }

            if($this->dbclass->is_connected()){
                $result = $this->dbclass->get_conn()->query($sql);
                $row = $result->fetch_assoc()
            }

            return $row;

        }

        public function insert($table, $data) {
            
        }

        public function delete($table, $where) {
            
        }

        public function update($table, $set, $where) {
            
        }
        

    }

?>