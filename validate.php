<?php
    require_once('config.php');
    $username = $_POST['username'];
    $password = $_POST['password'];
    $selector = $_POST['options'];

    echo $username;
    echo $password;
    echo $selector;


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

    else if($selector = '2'){
        echo "For Students, It's under construction.";
    }

    else{
         $query2 = "SELECT * FROM `admin_info`";
        $result2 = mysqli_query($connect, $query2);
        var_dump($result);
        if($result){
            while($row =  mysqli_fetch_array($result2)){
                if($row["username"] == $username AND $row["password"] == $password)
                    header('location: Teacher/index.php');
                    else
                   // header('location: index.php');
                    echo "xyz";
            }  
        
    
        }
    }



?>