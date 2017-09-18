<?php
    require_once('config.php');
    $username = $_POST['username'];
    $password = $_POST['password'];
    $selector = $_POST['options'];
    echo $selector;

    if($selector == "1"){
        $query = "SELECT * FROM `teacher_info`";
        echo "1";
        $result = mysqli_query($connect, $query);
        echo "2";
        if($result){
            while($row =  mysqli_fetch_array($result)){
                echo "3";
                if($row["username"] == $username AND $row["password"] == $password){
                    echo "4";
                    header('location: Teacher/index.php');
                    session_start();
                    $_SESSION["teacher_please"] = $row["teacher_name"];
                }
                    
                    else{
                        echo "5";
                        //header('location: index.php');    
                    }
                    
            }
        }
    }
    elseif($selector == "2"){
    }
else{
    echo "reached";
        $query2 = "SELECT * FROM `admin_info`";
        $result2 = mysqli_query($connect, $query2);
        if($result2){
            while($row =  mysqli_fetch_array($result2)){
                if($row["username"] == $username AND $row["password"] == $passsword){
                   header('location: Principal/index.php');
                }

                else
                    header('location: index.php');
            }
        }
    }
?>