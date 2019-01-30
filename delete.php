<?php
include 'connectdb.php';
$iid=$_GET['uid'];
mysqli_query($connect,"delete from `registration_tb` where id='$iid'");
header('location:new1.php');
 ?>
