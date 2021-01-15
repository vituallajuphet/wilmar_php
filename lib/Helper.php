<?php
    function is_ajax(){
        if(isset($_SERVER["HTTP_X_REQUESTED_WITH"])){
            return true;
        }
        return false;
    }

    function get_last_segment(){
        $uri = $_SERVER["REQUEST_URI"];
        $uri_path = explode("/", $uri);
        
        $count = count($uri_path) - 1;

        return $uri_path[$count];

    }

?>