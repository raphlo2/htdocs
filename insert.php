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

// escape variables for security
$firstname = mysqli_real_escape_string($con, $_POST['firstname']);
$lastname = mysqli_real_escape_string($con, $_POST['lastname']);
$age = mysqli_real_escape_string($con, $_POST['age']);

$sql="INSERT INTO Persons (FirstName, LastName, Age)
VALUES ('$firstname', '$lastname', '$age')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "1 record added";
echo "<br /><br />";
echo "<a href=\"http://localhost:8888/index.php\" />" . "Insert more here" . "</a>";

mysqli_close($con);

?>
</body>
</html>

