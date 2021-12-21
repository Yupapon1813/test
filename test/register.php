<?php
    session_start();
    include('server.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>register</title>
</head>
<body>
    <h3>register</h3>
    <hr>
    <div>
        <label for="username">Username</label>
        <input type="username" name="username">
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" aria_deseribedby="email">
    </div>
    <div>
        <label for="password1">Password1</label>
        <input type="password1" name="password1">
    </div>
    <div>
        <label for="password2">Password2</label>
        <input type="password2" name="password2">
    </div>
    <hr>
    <button type="submit" name="register">Register</button>
    <p>ลงทะเบียนแล้วใช่ไหม คลิ๊กที่นี่เพื่อ<a href="index.php">เข้าสู่ระบบ</a></p>
</body>
</html>