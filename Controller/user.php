<?php 
include "../Model/user_model.php";


session_start();

  function login()
  {
    $btn_login = $_POST["login"];
    $user_acc=$_POST["user_acc"];
    $password=$_POST["password"];
    $b = new user_model();
    $id = $b->loginUser($user_acc,$password);
    $c=$b->detailUser($id);
    if(isset($btn_login)&&$id>=1)
    {    $_SESSION['id']=$id;
         $_SESSION["is_user"]=true;
         $_SESSION["user_acc"]=$user_acc;
         $_SESSION["username"]=$c['name'];  
         $_SESSION["location_img"]=$c['location_img'];
         header("Location:http://localhost/doan/view/home.php");
    }
    else
      {
       
        header("Location:http://localhost/doan/view/login.php");
      
      }
  }

  function register()
  {
 $btn_register = $_POST["register"];
 if(isset($btn_register))
 { 
    $username = $_POST["username"];
    $user_acc=$_POST["user_acc"];
    $password=$_POST["password"];
    $numberphone=$_POST["numberphone"];
    $img_default ='avatar_ddd.png' ;
    $img_location=$_FILES['img']['name'];
    if( $img_location != '' )
    {
        $insert_img = $_FILES['img']['name'];
        $image=basename($_FILES['img']['name']);
        $image=str_replace(' ','|',$image);
        $tmppath="../images/user/".$image;
        move_uploaded_file($_FILES['img']['tmp_name'],$tmppath);
    }
    else
    {  
        $insert_img =$img_default;
    }
    $b = new user_model(null,$username,$user_acc,$password,$numberphone,$insert_img);
    $b->registerUser();
    header("Location:http://localhost/doan/view/login.php");
 }
 
  }

  function update()
  {
    $id = $_POST['id_user'];
    $username = $_POST["edit_username"];
    $user_acc=$_POST["edit_user_acc"];
    $password=$_POST["edit_password"];
    $numberphone=$_POST["edit_numberphone"];
    $img_old = $_POST['img_old'];
    $img_location=$_FILES['img']['name'];
    if( $img_location != '' )
    {
        $update_img = $_FILES['img']['name'];
        $image=basename($_FILES['img']['name']);
        $image=str_replace(' ','|',$image);
        $tmppath="../images/user/".$image;
        move_uploaded_file($_FILES['img']['tmp_name'],$tmppath);

        $img = '../images/' .$img_old;
		    unlink($img);
    }
    else
    {  
        $update_img =$img_old;
    }
    $user = new user_model($id,$username,$user_acc,$password,$numberphone,$update_img);
    $user->updateUser();
    
    header("Location:http://localhost/doan/view/home.php");
   
  }

  if(isset($_POST["login"]))
  {
    login();
  }

  if(isset($_POST["register"]))
  {
    register();
    session_reset(); 
  }
  

  if(isset($_POST['edit']))
  {
    update();
    session_reset(); 
  }




?>