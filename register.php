<?php
session_start();

// เชื่อมต่อกับฐานข้อมูล
$servername = "localhost";
$username = "root";
$password = "16112004";  
$dbname = "testregister";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die ("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // ตรวจสอบข้อมูลไม่ว่างเปล่าก่อนการเพิ่มลงในฐานข้อมูล
    if (!empty($_POST["user_name"]) && !empty($_POST["user_password"]) && !empty($_POST["confirm_password"]) && !empty($_POST["user_age"])) {

        // ดำเนินการเพิ่มข้อมูลเฉพาะเมื่อข้อมูลไม่ว่างเปล่า
        $user_name = $_POST["user_name"];
        $user_password = $_POST["user_password"];
        $confirm_password = $_POST["confirm_password"];
        $user_age = $_POST["user_age"];

        // ตรวจสอบความยาวของรหัสผ่าน
        if (strlen($user_password) < 6) {
            $_SESSION['alert_message'] = "รหัสผ่านต้องมีความยาวอย่างน้อย 6 ตัว";
            header("Location: registerpage.php");
            exit;
        }

        // ตรวจสอบว่ารหัสผ่านและรหัสผ่านยืนยันตรงกันหรือไม่
        if ($user_password !== $confirm_password) {
            $_SESSION['alert_message'] = "รหัสผ่านและรหัสผ่านยืนยันไม่ตรงกัน";
            header("Location: registerpage.php");
            exit;
        }

        // เพิ่มข้อมูลลงในฐานข้อมูล
        $sql = "INSERT INTO userlogin (user_name, user_password, user_age) VALUES ('$user_name', '$user_password', '$user_age')";
        if ($conn->query($sql) === TRUE) {
            // เมื่อลงทะเบียนสำเร็จ
            $_SESSION['success_message'] = "ลงทะเบียนเสร็จสิ้น";
            header("Location: home.php");
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
