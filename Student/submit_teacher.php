<?php
require_once('config.php');

$username = $_POST['username'];
$name = $_POST['name'];
$password = $_POST['password'];


$query_insert = "INSERT INTO `teacher_info`(`username`, `password`, `teacher_name`) VALUES ('$username','$password','$name')";
$result_insert = mysqli_query($connect, $query_insert);

header('location: ../index.php');
?>