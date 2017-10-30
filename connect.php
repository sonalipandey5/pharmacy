<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
ob_start();
date_default_timezone_set('Asia/Kolkata');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pharmacy";
try
{
    $conn = new PDO("mysql:host={$servername};dbname={$dbname}",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo $e->getMessage();
    die();
}
require_once "model/user.php";
require_once "model/admin.php";
require_once "model/cashier.php";
$admin= new Admin($conn);
$user = new User($conn);
$cashier = new Cashier($conn);
?>