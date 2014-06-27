<?php
$con=mysqli_connect("localhost","root","root","my_db");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>

<?php
$id = $_GET["id"];
$firstname = mysqli_real_escape_string($con, $_POST['firstname']);
$lastname = mysqli_real_escape_string($con, $_POST['lastname']);
$age = mysqli_real_escape_string($con, $_POST['age']);
echo "$id, $firstname, $lastname, $age";
?> 
<?php
mysqli_query($con,"UPDATE Persons SET Age='$age', LastName='$lastname', FirstName='$firstname'
WHERE id='$id'") or die(mysqli_error($con));
echo "Record updated";
mysqli_close($con);
?>
<p>
<a href="/list-all.php">List all records</a>
</p>