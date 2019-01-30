<?php
include 'connectdb.php';
?>



<table border="4">
<tr>
  <form action = "update.php" method="post">
<th>Name</th>
<th>Address</th>
<th>Phone</th>
<th>Edit</th>

</tr>
<?php
$uid=$_GET['uid'];
  $qer=mysqli_query($connect,"SELECT * FROM `registration_tb` where id='$uid'");


if($row=mysqli_fetch_array($qer))
{
  ?>
  <tr>
  <td><input type="text" name="username" value="<?php echo $row['username'];?>"></input></td>
  <td><input type="text" name="address" value="<?php echo $row['address'];?>"></input></td>
  <td><input type="text" name="phone" value="<?php echo $row['phone'];?>"></input></td>
  <?php /*<td><a href = "update.php?uid=<?php echo $row['id']?>">Edit</a></td> */ ?>

  <input type="hidden" name="uid" value="<?php echo $row['id'];?>">
  <td><input type="submit" value="update">

  </tr>
<?php }

?>
</table>
