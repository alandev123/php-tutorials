<?php
include "connectdb.php";
if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  $address=$_POST['address'];
  $phone=$_POST['phone'];
  echo "$name <br>";
  echo "$address <br>";
  echo $phone;

  $qer=mysqli_query($connect,"INSERT INTO `registration_tb`(`username`, `address`, `phone`) VALUES ('$name','$address',$phone)");

}

?>
<html>
<form action = "new1.php" method="post">
  <input type="submit" value="submit" name="submit">
</form>
</html>
