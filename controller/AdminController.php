<?php

require_once "../connect.php";
if(isset($_POST['function_name']))
{
    $calling_function = $_POST['function_name'];

    if($calling_function=='sign_out'){
        $result =$admin->sign_out();
        print_r($result);
    }
    if($calling_function=='sign_in' && !empty($_POST["uname"]) && !empty($_POST["pass"])){
        $uname=$_POST["uname"];
        $pass=$_POST["pass"];
        $result =$admin->sign_in($uname,$pass);
        print_r($result);
    }
}
else
{
    $response['msg'] = "Error! Please Login Again";
    $response['code'] = -1;
    return json_encode($response);
}
?>