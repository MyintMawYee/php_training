
<?php
    $uname = $_POST['uname'];
    $pwd = $_POST['pwd'];
 
    if ($uname == 'admin' and $pwd == 'admin') {    
        session_start();
        $_SESSION['sid']=session_id();
        echo "Login successfully !<br>";
        echo '<br><br><a href="logout.php"><input type="submit" name="btn" value="Logout"></a>';
    } else {
        echo '<script>alert("username or password incorrect !")</script>';
        echo '<script>location.href="login.php"</script>';
    }
?>
