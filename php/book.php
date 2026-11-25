<?php
include 'conn.php';
$book_id = $_POST['xbook_id'];
$title = $_POST['xtitle'];
$author = $_POST['xauthor'];
$year = $_POST['xyear'];
$genre = $_POST['xgenre'];
$quantity = $_POST['xquantity'];


$sql = "INSERT INTO tb_registration(lastname, firstname, middlename, passw, email, id_no, user) 
        VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bindParam(1, $book_id);
$stmt->bindParam(2, $title);
$stmt->bindParam(2, $author);
$stmt->bindParam(4, $year);
$stmt->bindParam(4, $genre);
$stmt->bindParam(5, $quantity);


if ($stmt->execute()) {
    echo json_encode(["status" => "success", "message" => "Registration successful"]);
} else {
    echo json_encode(["status" => "error", "message" => "Registration failed"]);
}
?>