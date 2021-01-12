<?php
  
  
  class Database{
      
      private $dbname     = NULL;
      private $username   = NULL;
      private $password   = NULL;
      private $host       = NULL;
      private $connection = NULL;
      private $dbconfig     = NULL;
      
      public function __construct(){
          
            require ("lib/config.php");   
            $this->dbconfig = $config["database"];

            $this->dbname   = $this->dbconfig["dbname"];
            $this->username = $this->dbconfig["username"];
            $this->password = $this->dbconfig["password"];
            $this->host     = $this->dbconfig["host"];;


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