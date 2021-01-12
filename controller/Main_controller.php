<?php
    require ("lib/Loader.php");
    require ("lib/Session.php");

    class Main_controller {

        //page loader
        private $pageLoader;
        private $session;

        public function __construct(){
            $this->pageLoader = new Loader();
            $this->session = new Session();
            $this->run_controller();
        }

        public function login(){

            $data["title"] ="Login Page";

            $this->pageLoader->load_page("login", $data);
        }

        public function dashboard(){

            $data["title"] ="Dashboard Page";
            //$this->pageLoader->load_page("dashboard");
        }

        public function show_404(){
            echo "404 page";
            //$this->pageLoader->load_page("404");
        }

        // api routes

        public function api_process_login(){

        }


        // dont modify this method!
        private function run_routing($page, $params = []){
            call_user_func_array(array($this, $page), $params);
        }

        private function run_controller(){
            $pathname = $this->pageLoader->get_uri_name();
            $pathname = $pathname != "" || !empty($pathname)  ? $pathname : "dashboard";

            $page_exist = $this->pageLoader->validate_uri($pathname);

            if(!$page_exist){
                $pathname = "show_404";
            }

            if(!empty($this->session->get_userdata())){
                if($pathname == "login"){
                    $pathname = "dashboard";
                }
            }else{
                if($pathname != "login" ){
                    $pathname = "login";
                }
            }

            $this->run_routing($pathname, []);
        }
        
    }

?>