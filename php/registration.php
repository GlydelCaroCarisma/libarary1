<?php
include 'conn.php';
$lastname = $_POST['xlastname'];
$firstname = $_POST['xfirstname'];
$middlename = $_POST['xmiddlename'];
$password = $_POST['xpassword'];
$email = $_POST['xemail'];
$idno = $_POST['xidno'];
$user = $_POST['xuser'];

$sql = "INSERT INTO tb_registration(lastname, firstname, middlename, passw, email, id_no, user) 
        VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bindParam(1, $lastname);
$stmt->bindParam(2, $firstname);
$stmt->bindParam(3, $middlename);
$stmt->bindParam(4, $password);
$stmt->bindParam(5, $email);
$stmt->bindParam(6, $idno);
$stmt->bindParam(7, $user);

if ($stmt->execute()) {
    echo json_encode(["status" => "success", "message" => "Registration successful"]);
} else {
    echo json_encode(["status" => "error", "message" => "Registration failed"]);
}
?>