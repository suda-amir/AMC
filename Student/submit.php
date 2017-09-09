<?php
    require_once('config.php');
    echo "So far so good";

    $prn_no = $_POST['prn'];
    $name = $_POST['name'];
    $acad_year = $_POST['year'];
    $branch = $_POST['branch'];
    $college = $_POST['college'];
    $mobile_number = $_POST['phone'];
    $password = $_POST['password'];
    //$gender = $_POST['gender'];

    echo $prn_no;

    $query_insert = "INSERT INTO `student`(`prn_no`, `name`, `acad_year`, `branch`, `college`, `mobile_number`, `password`) VALUES ('$prn_no','$name','$acad_year','$branch','$college','$mobile_number','$password')";
    $result_insert = mysqli_query($connect, $query_insert);
?>