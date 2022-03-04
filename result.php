<?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        function input_test($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
        }
        $user_name = $_POST['user_name'];
        $user_Password = $_POST['user_Password'];
        
        if(empty($user_name)){
            $user_nameErr = "user name is empty";
        }elseif(strlen($user_name) < 6){
            $user_nameErr = "<p>Your name must be larger than 6</p>";
            $user_nameErr = "<p>Your name must be larger than 6 chars</p>";
        }else{
            $user_name = input_test($user_name);
        }

        if(empty($user_Password)){
            $user_passwordErr = "<p>user password is empty</p>";
        }elseif(strlen($user_Password) < 6){
            $user_passwordErr = "<p>Your password must be more complex</p>";
        }else{
            $user_Password = input_test($user_Password);
        }

        if(!isset($user_nameErr) && !isset($user_passwordErr)){
            include("success.php");
        }else{
            include("index.php");
        }






    }else{
        echo "you cant't enter this page directly";
    }

?>