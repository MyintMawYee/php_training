<?php
    session_start();
    $uname = $_POST['uname'];
    $password = $_POST['password'];
    if ($uname === 'admin' and $password === 'admin') {
        $_SESSION['user'] = ['username' => 'John Doe'];
        header('location: profile.php');
    } else {
         header('location: index.php?incorrect=1');
    }
?>
