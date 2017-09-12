  <?php

require_once('../config.php');

echo "Reached"; 
$subject = "SDL";
$name = "kashyap";
$class = "TE";
$division = "C";


$checked_roll = implode($_POST['roll'], ', ');
var_dump($checked_roll);
$count = 5;
$query = "INSERT INTO `attendance_record` (`subject`, `class`,  `division`, `date`, `count`, `attend_array`) VALUES ('$subject','$class','$division','CURDATE()','$count','$checked_roll')";

$result = mysqli_query($connect, $query);

var_dump($result);

?>