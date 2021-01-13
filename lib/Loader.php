<?php 
    class Loader {

        private $config = [];

        public function __construct(){
            require ("lib/config.php");
            $this->config = $config;
        }

        public function load_page($pagename, $data= array()){
            
            $data["base_url"] = $this->config["base_url"];

            extract($data, EXTR_PREFIX_SAME, "wddx");
            $url = $this->config["base_url"]."{$pagename}/";
            require("pages/".$pagename.".php");
            echo "\n<script>history.replaceState({},'','$url');</script>\n";
            
        }

        public function validate_uri ($thepath = ""){

            $uri = $_SERVER["REQUEST_URI"];
            $uri_path = explode("/", $uri);
            $pagename = $thepath;

            $files = scandir("pages/");

            $res = false;

            if(!empty($files)){
                foreach ($files as $file) {
                    if($file == $pagename.".php"){
                        $res = true;
                    }
                }
            }
            
            if($thepath == "logout") {
                $res = true; 
            }

            return $res;
        }

        public function get_uri_name (){
            $uri = $_SERVER["REQUEST_URI"];
            $uri_path = explode("/", $uri);
            $pagename = $uri_path[2];
            return $pagename;
        }
    }

?>