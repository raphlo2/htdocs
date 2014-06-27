<?php
include 'head.php';
?>
<body>
<form action="insert.php" method="post">
First name: <input type="text" required name="firstname">
Last name: <input type="text" required name="lastname">
Age: <input type="number" required name="age">
<input type="submit"  name="submit">
</form>
<a href="/list-all.php">List all records</a>



</body>
</html>
