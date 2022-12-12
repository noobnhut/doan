<?php
include "./post_model.php";

session_start();
$a = new post_model();
$b=$a->getPost();
var_dump($b);  
foreach ($b as $x => $val)
{
    echo  $val['id']." ";
}
?>