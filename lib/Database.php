<?php
  
    class Database{
       
        private $dbname     = NULL;
        private $username   = NULL;
        private $password   = NULL;
        private $host       = NULL;
        private $connection = NULL;

        public function __construct($dbname, $username, $password, $host){
            parent::__construct();

            $this->dbname   = $dbname;
            $this->username = $username;
            $this->password = $password;
            $this->host     = $host;

            $this->connection = new mysqli($this->host , $this->username , $this->password, $this->dbname);
        }

        public function is_connected (){
            return !$this->connection->connect_errno;
        }

        public function get_conn (){
            return $this->connection;
        }
    }

?>