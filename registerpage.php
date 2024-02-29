<?php
//แสดงข้อความแจ้งเตือน
    session_start();
    if (isset($_SESSION['alert_message']))
    ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pagestyle.css">
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>
    <!-- แบบฟอร์มลงทะเบียน -->
    <form id="registerForm" action="register.php" method="post">
        <p>ชื่อผู้ใช้ <input type="text" name="user_name"><br></p>
        <p>รหัสผ่าน <input type="password" name="user_password"><br></p>
        <p>ยืนยันรหัสผ่าน <input type="password" name="confirm_password"><br></p>
        <p>อายุ <input type="text" name="user_age"><br></p>
        <p><button type="submit">ลงทะเบียน</button></p>
    </form>
    <p>มีบัญชีอยู่แล้ว? <a href="loginpage.php">เข้าสู่ระบบ</a></p>
<?php
    {
        echo '<p style="color: red;">' . $_SESSION['alert_message'] . '</p>';
        unset($_SESSION['alert_message']); // เคลียร์ข้อความแจ้งเตือนหลังจากแสดง
    }
?>
</body>
</html>
