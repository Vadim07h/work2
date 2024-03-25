<?php
require_once('db.php');



if(!empty(($_POST['name'])) && !empty(($_POST['phone'])) && !empty(($_POST['email'])) && !empty(($_POST['login'])) && !empty(($_POST['password']))) {
    $stmt = $conn->prepare("insert into users(name, phone, email, login, password) VALUES (?,?,?,?,?)");
    $stmt->execute([
        $_POST['name'],
        $_POST['phone'],
        $_POST['email'],
        $_POST['login'],
        $_POST['password']
    ]);
    header("Location: auth1.php");
}
?>