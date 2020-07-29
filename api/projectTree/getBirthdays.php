<?php
include('./classes/controller/Controller.php');
$controller=new Controller;
$user=new Users;
if(isset($_POST['getBirthdays'])){
    $date=$_POST['date'];
    echo $controller->getBirthdays($date);   
}



?>