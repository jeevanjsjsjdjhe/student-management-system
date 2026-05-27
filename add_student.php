<?php

include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$course = $_POST['course'];

$sql = "INSERT INTO students(name,email,phone,course)
VALUES('$name','$email','$phone','$course')";

mysqli_query($conn, $sql);

header("Location:index.php");

?>
