<?php

require_once "../connect.php";
if(isset($_POST['function_name']))
{
    $calling_function = $_POST['function_name'];

    if($calling_function=='sign_out'){
        $result =$user->sign_out();
        print_r($result);
    }
    if($calling_function=='sign_in' && !empty($_POST["uname"]) && !empty($_POST["pass"])){
        $uname=$_POST["uname"];
        $pass=$_POST["pass"];
        $result =$user->sign_in($uname,$pass);
        print_r($result);
    }
    if ($calling_function=='credit_pay' && !empty($_POST["debit"]) && !empty($_POST["debit1"]) && !empty($_POST["debit2"]) && !empty($_POST["debit3"]) && !empty($_POST["dat1"]) && !empty($_POST["cvv"])) {
        $debit=$_POST['debit'];
        $debit1=$_POST['debit1'];
        $debit2=$_POST['debit2'];
        $debit3=$_POST['debit3'];
        $dat1=$_POST['dat1'];
        $cvv=$_POST['cvv'];
        $number = $debit.$debit1.$debit2.$debit3;
        if(strlen($number)==16){
            $result=$user->credit_pay($debit,$debit1,$debit2,$debit3,$dat1,$cvv);
            print_r(json_encode($result));
        }else{
            print_r('3');
        }


    }
    if ($calling_function=='cod_pay' && !empty($_POST["addr"])) {
        $addr=$_POST['addr'];
        $result=$user->cod_pay($addr);
        print_r(json_encode($result));

    }
    if ($calling_function=='paytm_pay' && !empty($_POST["pnum"]) && !empty($_POST["cost"])) {
        $pnum=$_POST['pnum'];
        $cost=$_POST['cost'];
        $result=$user->paytm_pay($pnum,$cost);
        print_r(json_encode($result));

    }
    if ($calling_function=='infant_list') {
        $result=$user->infant_list();
        print_r(json_encode($result));
    }
    if ($calling_function=='women_list') {
        $result=$user->women_list();
        print_r(json_encode($result));
    }
    if ($calling_function=='med_list') {
        $result=$user->med_list();
        print_r(json_encode($result));
    }
    if ($calling_function=='add_cart'){
        $id=$_POST['id'];
        $quantity=$_POST['quantity'];
        $price= $user->get_price($id);
        $price= $quantity*$price['cost'];
        $result=$user->add_cart($id,$quantity,$price);
        print_r($result);
    }
    if ($calling_function=='buy_now'){
        $id=$_POST['id'];
        $price= $user->get_price($id);
        $result=$user->buy_now($id,$price['cost']);
        print_r($result);
    }
    if ($calling_function == 'get_cart'){
        $result=$user->get_cart();
        print_r(json_encode($result));
    }
    if($calling_function=='del_fun'){
        $id=$_POST['id'];
        $result=$user->del_fun($id);
        print_r(json_encode($result));
    }
    if ($calling_function=='plus_fun') {
        $id=$_POST['id'];
        $name=$_POST['name'];
        $price= $user->get_price($name);
        $result=$user->plus_fun($id);
        print_r(json_encode($price));
    }
}
else
{
    $response['msg'] = "Error! Please Login Again";
    $response['code'] = -1;
    return json_encode($response);
}
?>