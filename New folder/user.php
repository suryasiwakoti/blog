<?php

class user {

    public function register($query) {
        $db = new db();

        $result = $db->query($query);

        if ($result === true) {
            return true;
        } else {
            return false;
        }
    }

    public function login($query) {
        $db = new db();

        $result = $db->query($query);
        
        /*echo "<pre>";
        print_r($result);
        die;
        echo "</pre>";
        var_dump($result);
        die;*/
        return $result;
        
    }

}

?>