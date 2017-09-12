  <?php

require_once('config.php');

echo "Reached"; 
$subject = "SDL";
$name = "kashyap";
$class = "TE";
$division = "C";

$date = getdate();

$checked_roll = implode($_POST['roll'], ', ');

$count = explode(", ",$checked_roll);
$count = count($count);

$query = "INSERT INTO `attendance_record`(`subject`, `class`,  `division`, `date`, `count`, `attend_array`) VALUES ('$subject','$class','$division','$date','$count','$checked_roll')";

$result = mysqli_query($connect, $query);

?>