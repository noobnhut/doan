<?php 
include "../Model/post_model.php";


$btn_up=$_POST["up_post"];
session_start();
function insertPost()
{ 

  $title=$_POST["title"];
  $written_text=$_POST["written_text"];
  $user_id = $_SESSION['id'];
  //lay ten
  $img_location=$_FILES['img_location']['name'];
  // upload file
  $image=basename($_FILES['img_location']['name']);
  $image=str_replace(' ','|',$image);
  
  $tmppath="../images/post/".$image;
  move_uploaded_file($_FILES['img_location']['tmp_name'],$tmppath);
  
  $post = new post_model(null,$user_id,$written_text,$title,$img_location,''); 
  $post->insert();
}
if(isset($btn_up) )
{
    insertPost();
    header("Location:http://localhost/doan/view/home.php");
}

?>