<?php
require "DBConnectlogin.php";

function alert($msg)
{
    echo "<script type='text/javascript'>alert('$msg');</script>";
}

session_start();

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['Password'];

    $stmt = $connect->prepare("SELECT id, password FROM users WHERE email=? LIMIT 1");
    if (!$stmt) {
        alert("Preparation failed: " . $connect->error);
        exit();
    }

    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $stmt->close();
            $connect->close();
            header("Location: index.php");
            exit();
        } else {
            alert('Incorrect password!');
        }
    } else {
        alert('Email not registered or multiple users found!');
    }

    $stmt->close();
    $connect->close();
} else {
    alert('Invalid request method.');
}
?>