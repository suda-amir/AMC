<?php

require_once("config.php");
function get_student_details ($class, $division){
    
    

    try {
        $db = getDB();
        $stmt = $db->prepare("SELECT * FROM `student` WHERE `acad_year`='$class' AND `division` = '$division' ORDER BY roll ASC");
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_OBJ);
        return ($data);
    } catch (PDOException $e) {
        echo '{"error": {"text":'. $e->getMessage() .'}}';
    }
    
    
   }

?>