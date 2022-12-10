<?php 

 include "../Model/user_model.php";
 $username = $_POST["username"];
 $user_acc=$_POST["user_acc"];
 $password=$_POST["password"];
 $country=$_POST["country"];

 
 $btn_register = $_POST["register"];
 $btn_login = $_POST["login"];
 if(isset($btn_register))
 {
    $b = new user_model(null,$username,$user_acc,$password,$country);
    $b->registerUser();
    header("Location:http://localhost/doan/view/login.php");
 }
 else
 {
    echo "thoi xong";
 }

 if(isset($btn_login))
 {
    echo "start";
 }
 else
 {
    echo "end";
 }
?>