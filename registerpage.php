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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="pagestyle.css">
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>
    <!-- แบบฟอร์มลงทะเบียน -->
    <form id="registerForm" action="register.php" method="post">
        <p>ชื่อผู้ใช้ <input type="text" name="m_name"><br></p>
        <p>รหัสผ่าน <input type="password" name="m_password"><br></p>
        <p>ยืนยันรหัสผ่าน <input type="password" name="confirm_password"><br></p>
        <p>อายุ <input type="text" name="m_age"><br></p>
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
