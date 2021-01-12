<?php
    function is_ajax(){
        if(isset($_SERVER["HTTP_X_REQUESTED_WITH"])){
            return true;
        }
        return false;
    }

?>