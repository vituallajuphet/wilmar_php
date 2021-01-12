<?php
    require ("lib/Loader.php");
    require ("lib/Session.php");
    require ("lib/Helper.php");
    require ("lib/Model.php");

    class Main_controller {

        //page loader
        private $pageLoader;
        private $session;   
        private $usermodel;

        public function __construct(){
            $this->pageLoader = new Loader();
            $this->session = new Session();
            $this->usermodel = new Model();
            $this->run_controller();
        }

        public function login(){
            $data["title"] ="Login Page";
            $this->pageLoader->load_page("login", $data);
        }

        public function logout(){
            $this->session->unset_session();
            $this->run_controller();
        }

        public function dashboard(){
            $data["title"] ="Dashboard";
            $this->pageLoader->load_page("dashboard", $data);
        }

        public function show_404(){
            $this->pageLoader->load_page("404");
        }

        // api routes

        public function api_process_login(){
            
            $response = ["status" => "error", "message" => "Incorrect Username or Password!"];

            if(!empty($_POST)){
                $username = $_POST["username"];
                $password = $_POST["password"];

                $res = $this->usermodel->login_user($username, $password);

                if(!empty($res)){
                    // save userdata to session
                    $this->session->set_userdata($res);
                    $response = ["status" => "success", "message" => "Logged Successfully!"];
                }
            }

            echo json_encode($response);

        }

        public function api_getdata_table(){
            
            $response = ["status" => "error", "data" => []];

            $res = $this->usermodel->get_all_users();

            $response = ["status" => "success", "data" => $res];

            echo json_encode($response);

        }

        // dont modify this method!
        private function run_routing($page, $params = []){
            call_user_func_array(array($this, $page), $params);
        }

        // run controller here
        private function run_controller(){
            $pathname = $this->pageLoader->get_uri_name();
            $pathname = $pathname != "" || !empty($pathname)  ? $pathname : "dashboard";

            if(!is_ajax()){
                $page_exist = $this->pageLoader->validate_uri($pathname);

                if(!$page_exist){
                    $pathname = "show_404";
                }
            }

            if($pathname != "show_404"){
                if(!empty($this->session->get_userdata())){
                    if($pathname == "login"){
                        $pathname = "dashboard";
                    }
                }else{
                    if($pathname != "login" && $pathname != "api_process_login"  ){
                        $pathname = "login";
                    }
                }
            }
            $this->run_routing($pathname, []);
        }
        
    }

?>