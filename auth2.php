<?php
session_start();
require_once('db.php');

if(!empty(($_POST['login'])) && !empty(($_POST['password']))) {
    
    $stmt = $conn->prepare("select * from users where login=?");

    $stmt->execute([
        $_POST['login']
    ]);
}
    $user = $stmt->fetch();

    
    if ($user){

            if ($_POST['password'] == $user['password']) {
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['role'] = $user['role'];
        
    header("Location: account.php?message=success");
        } else  header("Location:auth1.php?message=error");
    }

else  header("Location:auth1.php?message=error");

?>
