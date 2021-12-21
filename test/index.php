<?php
    session_start();
    include('server.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>login</title>
</head>
<body>
    <div>
        <h3>login</h3>
        <hr>
        <div>
            <label for="username">Username</label>
            <input type="username" name="username"> 
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password">
        </div>
        <hr>
        <button type="submit" name="signin">Signin</button>
        <p>ยังไม่เป็นสมาชิกใช้ไหม คลิ๊กที่นี้<a href="register.php">สมัครสมาชิก</a></p>
    </div>
 
</body>
</html>