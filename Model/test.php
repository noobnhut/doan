<?php
include "./user_model.php";

$user_acc='nhut';
$password='nhut';
$b = new user_model();
$var = 'user_acc';
var_dump($b->details($var));
$c = $b->details($var);
echo $c['name'];

 

   
   

?>