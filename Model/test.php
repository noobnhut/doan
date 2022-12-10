<?php
include "./user_model.php";

$b = new user_model(null,"nhut","nhut2","nhut2","HocMom");
var_dump($b);
$b->registerUser();
?>