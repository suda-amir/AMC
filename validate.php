<?php
    require_once('config.php');
    $username = $_POST['username'];
    $password = $_POST['password'];
    $selector = $_POST['options'];
    echo $selector;

    if($selector == 1){
        $query = "SELECT * FROM `teacher_info`";
        $result = mysqli_query($connect, $query);
        if($result){
            while($row =  mysqli_fetch_array($result)){
                if($row["username"] == $username AND $row["password"] == $password){
                    header('location: Teacher/index.php');
                    session_start();
                    $_SESSION["teacher_please"] = $row["teacher_name"];
                }
                    
                    else
                    header('location: index.php');
            }
        }
    }
    elseif($selector == 2){
    }
elseif($selector == 3){
    echo "reached";
        $query = "SELECT * FROM `admin_info`";
        $result = mysqli_query($connect, $query);
        if($result){
            while($row =  mysqli_fetch_array($result)){
                if($row["username"] == $username AND $row["password"] == $passsword){
                   header('location: Principal/index.php');
                }

                else
                    header('location: index.php');
            }
        }
    }
?>