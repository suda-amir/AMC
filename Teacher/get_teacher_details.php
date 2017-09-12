<?php

require_once("config.php");
function get_teacher_details (){

    try {
        $db = getDB();
        $stmt = $db->prepare("SELECT * FROM `teacher_info`");
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_OBJ);
        return ($data);
    } catch (PDOException $e) {
        echo '{"error": {"text":'. $e->getMessage() .'}}';
    }
}

?>