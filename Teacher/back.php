  <?php

require_once('../config.php');
session_start();
$subject = $_SESSION["subject"];
$class = $_SESSION["class"];
$division = $_SESSION["division"];
$lesson_plan = $_SESSION["lesson_plan"];
$teacher = $_SESSION["teacher_please"];


$checked_roll = implode($_POST['roll'], ', ');

$count = explode( ', ', $checked_roll );
$count1 = count($count);

$query = "INSERT INTO `attendance_record` (`subject`, `class`,  `division`, `date`, `count`, `attend_array`, `lesson_plan`,`teacher`) VALUES ('$subject','$class','$division',CURDATE(),'$count1','$checked_roll','$lesson_plan','$teacher')";

$result = mysqli_query($connect, $query);


header('location: index.php');

?>