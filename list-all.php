<?php
include 'head.php';
?>

<body>
<?php
$con=mysqli_connect("localhost","root","root","my_db");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM Persons");


echo "<table>
<tr>
<th>First name</th>
<th>Last name</th>
<th>Age</th>
<th>id</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['FirstName'] . "</td>";
  echo "<td>" . $row['LastName'] . "</td>";
  echo "<td>" . $row['Age'] . "</td>";
  echo "<td><a href=" . "update.php?id=" . $row['id'] . ">Edit</a></td>";
  echo "</tr>";
}

echo "</table>";

mysqli_close($con);
?>

<p><a href="/index.php">Insert more records</a></p>
</body>
</html>