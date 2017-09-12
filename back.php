<?php

require_once('config.php');

/*$subject = $_POST[''];
$name = $_POST[''];
$class = $_POST[''];*/

$date = getdate();

$checked_roll = implode($_POST['roll'], ', ');

$count = 

$query = "INSERT INTO `attendance_record`(`subject`, `class`, `date`, `count`, `attend_array`) VALUES ('$subject','$class','$date','',[value-5])";

$result = mysqli_query($connect, $query);

?>