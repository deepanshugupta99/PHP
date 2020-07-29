<?php
header("Content-Type: application/json");

header("Access-Control-Allow-Origin: *");
include('./classes/controller/Controller.php');
$controller=new Controller;
$user=new Users;
if(isset($_POST['login'])){
    $user->setEmail($_POST['email']);
    $user->setPassword($_POST['password']);
    echo $controller->loginUser($user);   
}
elseif(isset($_POST['register'])){
    $user->setName($_POST['name']);
    $user->setEmail($_POST['email']);
    $user->setPassword($_POST['password']);
    $user->setContact($_POST['contact']);
    $user->setDob($_POST['dob']);
    echo $controller->registerUser($user);
    
}


?>