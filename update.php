<?php
include 'connection.php';
?>

<?php
$id = $_GET["id"];
?> 
<h2>Current information</h2>
<?php
$result = mysqli_query($con,"SELECT * FROM Persons WHERE id = '$id'");

while($row = mysqli_fetch_array($result)) {
  echo "<h3>" . $row['FirstName'] . $row['LastName'] . $row['id'] . "</h3>";
  echo "<br>";
}

mysqli_close($con);
?>

<?php echo "<form action='/update_action.php?id=" . $id .  "' method='post'>" ?>

First name: <input type="text" required name="firstname">
Last name: <input type="text" required name="lastname">
Age: <input type="number" required name="age">
<input type="submit"  name="submit">
</form>


