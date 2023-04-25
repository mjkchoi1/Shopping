<?php
require_once(__DIR__ . "/../lib/db.php");

function get_account_balance($account_id){
    $db = getDB();
    $stmt = $db->prepare("SELECT balance FROM Accounts WHERE id = :id");
    $stmt->bindValue(":id", $account_id);
    $stmt->execute();
    $balance = $stmt->fetchColumn();
    return $balance;
}   
?>