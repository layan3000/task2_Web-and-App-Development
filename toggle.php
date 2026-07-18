<?php

include "db.php";

$id = $_POST['id'];

$sql = "SELECT status FROM users WHERE id='$id'";

$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($result);

if($row['status']==0)
{
$newStatus=1;
}
else
{
$newStatus=0;
}

$update = "UPDATE users SET status='$newStatus' WHERE id='$id'";

mysqli_query($conn,$update);

echo $newStatus;

?>