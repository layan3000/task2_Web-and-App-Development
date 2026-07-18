<?php
include "db.php";
?>

<!DOCTYPE html>
<html>

<head>

<meta charset="UTF-8">

<title>Smart Methods Task</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<h2>User Information</h2>

<form id="userForm">

<input type="text" name="name" placeholder="Name" required>

<input type="number" name="age" placeholder="Age" required>

<button type="submit">Submit</button>

</form>

<br><br>

<table>

<tr>

<th>ID</th>

<th>Name</th>

<th>Age</th>

<th>Status</th>

<th>Action</th>

</tr>

<?php

$sql = "SELECT * FROM users";

$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($result))
{

?>

<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['name']; ?></td>

<td><?php echo $row['age']; ?></td>

<td id="status<?php echo $row['id']; ?>">

<?php echo $row['status']; ?>

</td>

<td>

<button
type="button"
onclick="toggleStatus(<?php echo $row['id']; ?>)">

Toggle

</button>

</td>

</tr>

<?php

}

?>

</table>

<script src="script.js"></script>

</body>

</html>