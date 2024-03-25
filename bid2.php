<?php
session_start();
require_once('db.php');
if(!empty(($_POST['title'])) && !empty(($_POST['description'])) && !empty(($_POST['adress']))) {
    
    $stmt = $conn->prepare("insert into bids(title, discription, adress, user_id) VALUES (?,?,?,?)");
    $stmt->execute([
        $_POST['title'],
        $_POST['description'],
        $_POST['adress'],
        $_SESSION['user_id']
    ]);
}
    header("Location: account.php");
?>