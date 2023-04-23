<?php
require_once(__DIR__ . "/../lib/db.php");

function get_columns($table_name){
    $db = getDB();
    $stmt = $db->prepare("SHOW COLUMNS FROM $table_name");
    $stmt->execute();
    $columns = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $columns;
}

?>