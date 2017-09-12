  <?php

require_once('../config.php');

echo "Reached"; 
$subject = "SDL";
$name = "kashyap";
$class = "TE";
$division = "C";

$date = date("Y/m/d");
$checked_roll = implode($_POST['roll'], ', ');
var_dump($checked_roll);

$count = explode( ', ', $checked_roll );
$count1 = count($count);

$query = "INSERT INTO `attendance_record` (`subject`, `class`,  `division`, `date`, `count`, `attend_array`) VALUES ('$subject','$class','$division','$date','$count1','$checked_roll')";

$result = mysqli_query($connect, $query);

var_dump($result);

?>