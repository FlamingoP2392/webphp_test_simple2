<?php
//แสดงข้อความแจ้งเตือน
    session_start();
    if (isset($_SESSION['alert_message']))
    ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <link rel="stylesheet" href="pagestyle.css">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="login.php" method="post">
        <p>ชื่อผู้ใช้ <input type="text" name="user_name"><br></p>
        <p>รหัสผ่าน <input type="password" name="user_password"><br></p>
        <p><button type="submit">เข้าสู่ระบบ</button></p>
    </form>
    <p>ยังไม่มีบัญชีผู้ใช้? <a href="registerpage.php">ลงทะเบียน</a></p>
    <?php
    {
        echo '<p style="color: red;">' . $_SESSION['alert_message'] . '</p>';
        unset($_SESSION['alert_message']); // เคลียร์ข้อความแจ้งเตือนหลังจากแสดง
    }
?>
</body>
</html>
