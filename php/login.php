<?php
include 'conn.php';

$email = $_POST['xemail'];
$password = $_POST['xpassword'];

$stmt = $conn->prepare("SELECT * FROM tb_registration WHERE email = ? AND passw = ?");
$stmt->bindParam(1, $email);
$stmt->bindParam(2, $password);
$stmt->execute();

$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user) {
    echo json_encode(["status" => "success"]);
} else {
    echo json_encode(["status" => "error"]);
}
?>
