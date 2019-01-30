<?php
include 'connectdb.php';
?>



<table border="4">
<tr>
<th>Name</th>
<th>Address</th>
<th>Phone</th>
<th>Edit</th>
<th>Delete</th>
</tr>
<?php
  $qer=mysqli_query($connect,"SELECT * FROM `registration_tb`");


while($row=mysqli_fetch_array($qer))
{
  ?>
  <tr>
  <td><?php echo $row["username"];?></td>
  <td><?php echo $row["address"];?></td>
  <td><?php echo $row["phone"];?></td>
  <td><a href = "edit.php?uid=<?php echo $row['id']?>">Edit</a></td>
  <td><a href = "delete.php?uid=<?php echo $row['id']?>">Delete</a></td>
  </tr>
<?php }

?>
</table>
