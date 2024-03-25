<?php 
session_start();
//Подключаем файл 
require_once('db.php');

if(isset($_GET['id']) && isset( $_GET['status'])){
//Подготовка запроса
$stmt = $conn->prepare("update bids set status = ? where id=?");
// ВЫПОЛНЕНИЕ ЗАПРОСА 
$stmt->execute([
    $_GET['status'],
    $_GET['id']
    
]);
header("Location: admin.php?massage=status");
}