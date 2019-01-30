<?php
include 'connectdb.php';
?>
<html>
<head>
</head>
<form action="dbpgmaction.php" method="post">
  <table>
    <tr>
      <th>Name</th>
      <td><input type="text" name="name" ></td>
    </tr>
    <tr>
      <th>Address</th>
      <td><input type="text" name="address" ></td>
    </tr>
    <tr>
      <th>Phone</th>
      <td><input type="number" name="phone" ></td>
    </tr>

</table>
&nbsp &nbsp &nbsp &nbsp <input type="submit" name="submit" >
</form>

</html>
