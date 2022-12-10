<?php 
 include "./Model/user_model.php";
 $user = new user_model();
 
 var_dump($user->getData());
?>