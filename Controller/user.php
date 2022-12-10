<?php 
include "../Model/user_model.php";
 $btn_login = $_POST["login"];
 $btn_register = $_POST["register"];
 if(isset($btn_login))
 {
  $user_acc=$_POST["user_acc"];
  $password=$_POST["password"];
  $b = new user_model();
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




 

 if(isset($btn_register))
 { 
  $username = $_POST["username"];
  $user_acc=$_POST["user_acc"];
  $password=$_POST["password"];
  $country=$_POST["country"];
    $b = new user_model(null,$username,$user_acc,$password,$country);
    $b->registerUser();
    header("Location:http://localhost/doan/view/login.php");
 }
 else
 {
    echo "thoi xong";
 }
?>