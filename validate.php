<?php
    require_once('config.php');
    $username = $_POST['username'];
    $password = $_POST['password'];
    $selector = $_POST['options'];


    if($selector = '1'){
        $query = "SELECT * FROM `teacher_info`";
        $result = mysqli_query($connect, $query);
       // var_dump($result);
        if($result){
            while($row =  mysqli_fetch_array($result)){
                if($row["username"] == $username AND $row["password"] == $password)
                    header('location: Teacher/index.php');
                    else
                    header('location: index.php');

            }  
        
    
        }
    }

    if($selector = '2'){
        echo "For Students, It's under construction.";
    }

    if($selector = '3'){
        echo "For Admin, It's under construction.";
    }



?>