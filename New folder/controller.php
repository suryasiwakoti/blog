<?php

if ($_POST) {
    if (isset($_POST['register'])) {
        echo "request from register page";die;
        $username = $_POST['username'];
        $password = $_POST['pass'];
        $name = $_POST['sname'];
        $address = $_POST['saddress'];

        $sql = "insert into student (username,password,name,address) values('$username','$password','$name','$address')";
        $user = new User();
        $result = $user->register($sql);
        if ($result) {
            //echo "inserted";
            header('Location: ?action=home');
        } else {
            echo "not inserted";
        }
    } else if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['pass'];
        $sql = "select * from student where username= '$username' and password = '$password'";
        $user = new User();
        $result = $user->login($sql);
        
        if($result->num_rows == 1) {
            header('Location: ?action=dashboard');
        } else{
            echo "incorrect username and password";
        }
        
    }
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

