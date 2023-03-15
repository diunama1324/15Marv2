<?php
session_start(); // 開始會話

$servername = "sql300.epizy.com";
$username = "epiz_33397383";
$password = "RfojI04ZR9x7I";
$dbname = "epiz_33397383_beosys";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); }

$user = $_POST["username"];
$pass = $_POST["password"];

$sql = "SELECT * FROM userid WHERE username = ? AND password = ?"; $stmt = $conn->prepare($sql); $stmt->bind_param("ss", $user, $pass); $stmt->execute(); $result = $stmt->get_result();

if ($result->num_rows > 0) {
    $_SESSION["username"] = $user; // 將用戶名存儲到會話中
    header("Location: second-page.php"); // 跳轉到成功登錄後的頁面
    exit();
} else {
    echo "Invalid username or password"; }

$stmt->close();
$conn->close();
?>
