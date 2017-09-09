<?php
/* DATABASE CONFIGURATION */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'amc');
//define("BASE_URL", "http://localhost/PHPLoginHash/");
/* END DATABASE CONFIGURATION */

$dbhost=DB_SERVER;
$dbuser=DB_USERNAME;
$dbpass=DB_PASSWORD;
$dbname=DB_DATABASE;


$connect = mysqli_connect($dbhost ,$dbuser ,$dbpass ,$dbname);

if($connect){
    echo "Connected";
}
else{
    echo "Not Connected";
}

/* START GENERAL CONFIGURATION */
define ('CONF_NAME', "AMC");
define ('HOST_NAME', "Sinhgad Institute of Technology");
define ("CMT_DEV", "#");
/* END GENERAL CONFIGURATION */

?>
