<?php
require "DBConnectlogin.php";
function alert($msg){
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        alert('Invalid email format!');
        return;
    }
    $username = filter_var($_POST['Username'], FILTER_SANITIZE_STRING);
    $password = $_POST['Password'];
    $confirmPassword = $_POST['confirmPassword'];
    if ($password !== $confirmPassword) {
        alert("Password do not match!");
        return;
    }
    //check if email already exists//
    $stmt = $connect->prepare("SELECT email FROM users WHERE email=?");
    if(!$stmt){
        alert("Preparation failed:" . $connect->error);
        return;
    }
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    if($stmt->num_rows>0){
        alert("Email already exists!");
        return;
    }
    $stmt->close();
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    $stmt = $connect->prepare("INSERT INTO users (email,username,password) VALUES(?,?,?)");
    $stmt->bind_param("sss", $email, $username, $hashedPassword);
    if ($stmt->execute()) {
        header("location:login.php");
        exit();
    } else {
        echo "Error" . $stmt->error;
    }
    $stmt->close();
    $connect->close();
}
?>