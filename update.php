<?php
include 'connectdb.php';
$iid=$_POST['uid'];
$iname=$_POST['username'];
$iaddress=$_POST['address'];
$iphone=$_POST['phone'];
$qwe=mysqli_query($connect,"UPDATE `registration_tb` SET `username`='$iname',`address`='$iaddress',`phone`=$iphone WHERE id=$iid");
if(!$qwe)
{
  echo "error occured";
}
else {
  header("location:new1.php");
}
?>
