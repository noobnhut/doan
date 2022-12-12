<?php
include "./user_model.php";


$user_acc='nhut1234';
$password='nhut1234';
$b = new user_model();
$id =$b->loginUser($user_acc,$password);
var_dump($b);
if($id>0)
{
    $c = new user_model($id,'nhutU','nhutU','nhutU','000','feed-1.jpg');
    $c->updateUser();
}

var_dump($c)

   
   

?>