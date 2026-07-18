<?php

include "db.php";

$name = $_POST['name'];

$age = $_POST['age'];

$sql = "INSERT INTO users(name,age,status)

VALUES('$name','$age',0)";

if(mysqli_query($conn,$sql))
{
echo "success";
}
else
{
echo "error";
}

?>