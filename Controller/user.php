<?php 
include "../Model/user_model.php";
 $btn_login = $_POST["login"];
 $btn_register = $_POST["register"];

 
 if(isset($btn_login))
 {
  $user_acc=$_POST["user_acc"];
  $password=$_POST["password"];
  $b = new user_model();
  $c=$b->details('user_acc');
  session_start();
   if($b->loginUser($user_acc,$password)==1)
   {
      $_SESSION["is_user"]=true;
      $_SESSION["user_acc"]=$user_acc;
      $_SESSION["username"]=$c['name'];  
        header("Location:http://localhost/doan/view/home.php");
   }
   else
   {
     echo "thoai";
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
  $numberphone=$_POST["numberphone"];
 
    $b = new user_model(null,$username,$user_acc,$password,$numberphone,'item_up.png');
    $b->registerUser();
    header("Location:http://localhost/doan/view/login.php");
 
 }
 else
 {
    echo "thoi xong";
 }
?>