<?php
session_start();
include 'connection.php';

$id=$_GET['id'];
$price=$_GET['price'];
$user_id = $_SESSION['user_id'];
echo $user_id;


$q="insert into tbl_mastcart values(null,'$user_id','$price','Pending')";
$ids=insert($q);
$qs="insert into tbl_childcart values(null,'$ids','$id','$qty',curdate(),'$price')";
insert($qs);
alert("Item added to Cart.");
return redirect ('cart.php');


  
  ?>