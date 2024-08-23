<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // เชื่อมต่อกับฐานข้อมูล
    $servername = "localhost";
    $username = "root";
    $password = "16112004";  
    $dbname = "membertest";

    $conn = new mysqli ($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die ("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // ตรวจสอบข้อมูลไม่ว่างเปล่าก่อนการเพิ่มลงในฐานข้อมูล
        if (!empty($_POST["m_name"]) && !empty($_POST["m_password"])) {
    
        // ดำเนินการเพิ่มข้อมูลเฉพาะเมื่อข้อมูลไม่ว่างเปล่า
        $m_name = $_POST["m_name"];
        $m_password = $_POST["m_password"];

    // ค้นหาผู้ใช้ในฐานข้อมูล
    $sql = "SELECT * FROM member WHERE m_name='$m_name' AND m_password='$m_password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // เข้าสู่ระบบสำเร็จ
        $_SESSION['success_message'] = "เข้าสู่ระบบสำเร็จ";
        header("Location: home.html");
        exit;
    } else {
        // เข้าสู่ระบบไม่สำเร็จ
        $_SESSION['alert_message'] = "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
        header("Location: loginpage.php");
        exit;
    }

    } else {
        // กรณีที่ข้อมูลไม่ครบถ้วน
    $_SESSION['alert_message'] = "กรุณากรอกข้อมูลให้ครบถ้วน";
    header("Location: loginpage.php");
    exit;
    }
}
    $conn->close();
}
?>
