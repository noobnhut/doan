<?php 
include "../Model/user_model.php";
 $btn_login = $_POST["login"];
 $user_acc=$_POST["user_acc"];
 $password=$_POST["password"];
 $b = new user_model();

 if(isset($btn_login))
 {
   if($b->loginUser($user_acc,$password)==1)
   {
        header("Location:http://localhost/doan/view/home.php");
   }
   else
   {
    echo "that bai";
   }
   
 }
 else
 {
    echo "thoi xong";
 }
?>