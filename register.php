<?php
session_start();

// เชื่อมต่อกับฐานข้อมูล
$servername = "localhost";
$username = "root";
$password = "16112004";  
$dbname = "membertest";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die ("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // ตรวจสอบข้อมูลไม่ว่างเปล่าก่อนการเพิ่มลงในฐานข้อมูล
    if (!empty($_POST["m_name"]) && !empty($_POST["m_password"]) && !empty($_POST["confirm_password"]) && !empty($_POST["m_age"])) {

        // ดำเนินการเพิ่มข้อมูลเฉพาะเมื่อข้อมูลไม่ว่างเปล่า
        $m_name = $_POST["m_name"];
        $m_password = $_POST["m_password"];
        $confirm_password = $_POST["confirm_password"];
        $m_age = $_POST["m_age"];

        // ตรวจสอบความยาวของรหัสผ่าน
        if (strlen($m_password) < 6) {
            $_SESSION['alert_message'] = "รหัสผ่านต้องมีความยาวอย่างน้อย 6 ตัว";
            header("Location: registerpage.php");
            exit;
        }

        // ตรวจสอบว่ารหัสผ่านและรหัสผ่านยืนยันตรงกันหรือไม่
        if ($m_password !== $confirm_password) {
            $_SESSION['alert_message'] = "รหัสผ่านและรหัสผ่านยืนยันไม่ตรงกัน";
            header("Location: registerpage.php");
            exit;
        }

        // เพิ่มข้อมูลลงในฐานข้อมูล
        $sql = "INSERT INTO userlogin (m_name, m_password, m_age) VALUES ('$m_name', '$m_password', '$m_age')";
        if ($conn->query($sql) === TRUE) {
            // เมื่อลงทะเบียนสำเร็จ
            $_SESSION['success_message'] = "ลงทะเบียนเสร็จสิ้น";
            header("Location: home.html");
            exit;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        // กรณีที่ข้อมูลไม่ครบถ้วน
        $_SESSION['alert_message'] = "กรุณากรอกข้อมูลให้ครบถ้วน";
        header("Location: registerpage.php");
        exit;
    }
}

// ปิดการเชื่อมต่อฐานข้อมูล
$conn->close();
?>
