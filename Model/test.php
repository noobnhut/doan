<?php
include "./user_model.php";


$user_acc='nhut1234';
$password='nhut1234';
$b = new user_model();
$var = 'user_acc';
$id =$b->loginUser($user_acc,$password);
if($id>1)
{
    echo $id;
    $c = $b->detail($id);
    var_dump($c);
    echo "xong";
}
else
{
    echo "thoi xong";
}


 

   
   

?>