<?php
session_start();
include 'connection.php';

if(isset($_POST['submit'])){
    extract($_POST);
    $user_id = $_SESSION['user_id'];
    $pdt= $_POST['product'];
    $price= $_POST['price'];
    $fname= $_POST['fname'];
    $phone= $_POST['phone'];
    $landmark= $_POST['landmark'];
    $town= $_POST['town'];
    $type= $_POST['type'];
    $mid= $_POST['mid'];
    $q="insert into user_address values(null,'$fname','$phone','$landmark','$town','$type','user_id',curdate())";
   $q1=insert($q);
$q="insert into tbl_order values(null,'$mid',curdate(),'$q1','pending')";
   $q1=insert($q);
   redirect('index.php');
}
   ?>