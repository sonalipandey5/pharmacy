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
    if($calling_function=='add_medicine'){
        if(!empty($_POST['name']) && !empty($_POST['quantity']) && !empty($_POST['cost']) && !empty($_POST['dat']) && !empty($_POST['des']) && !empty($_POST['category']) && !empty($_FILES['file'])){
        $name=$_POST['name'];
        $quantity=$_POST['quantity'];
        $cost=$_POST['cost'];
        $dat=$_POST['dat'];
        $des=$_POST['des'];
        $category=$_POST['category'];
        $file_size=$_FILES['file']['size'];
        $file_name=$_FILES['file']['name'];
        $file_ext=substr($_FILES['file']['type'], 6);
        $temp_name=$_FILES['file']['tmp_name'];
        $imagename =explode(".",$_FILES['file']['name'])[0].".".$file_ext;
        $target_path = "images/".$imagename;
        $timestamp=strtotime($dat);
        $date=date("Y-m-d", $timestamp);
        if(move_uploaded_file($temp_name, realpath(__DIR__ . '/..')."/".$target_path)){
            $result=$admin->add_medicine($name,$quantity,$cost,$date,$des,$category,$target_path);
            print_r("1");
        }
        // print_r($date);
        }else{
           print_r("2");
        }
    }
    if ($calling_function=='category_list') {
        $result=$admin->category_list();
        print_r(json_encode($result));
    }
    if($calling_function=='product_list'){
        $category=$_POST['category'];
        $result=$admin->product_list($category);
        print_r(json_encode($result));
    }
    if($calling_function=='edit_details'){
        $id=$_POST['id'];
        $text=$_POST['text'];
        $column_name=$_POST['column_name'];
        $result=$admin->edit_details($id,$text,$column_name);
        print_r($result);
    }
    if($calling_function=='del_fun'){
        $id=$_POST['id'];
        $result=$admin->del_fun($id);
        print_r(json_encode($result));
    }
    if ($calling_function=='register_data'){
        if(!empty($_POST['full_name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['password']) && !empty($_POST['r_password'])){
            $full_name=$_POST['full_name'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $password=$_POST['password'];
            $r_password=$_POST['r_password'];
            if ($password==$r_password) {
                $result=$admin->register_data($full_name,$email,$phone,$password);
                print_r(json_encode($result));
            }
            else{
                print_r('Passwords Do not Match');
            }

        }
        else{
            print_r('Fill in all the fields');
        }

    }
}
else
{
    $response['msg'] = "Error! Please Login Again";
    $response['code'] = -1;
    return json_encode($response);
}
?>