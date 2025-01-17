<?php
session_start();
$conn = new mysqli('127.0.0.1', 'root', 'mariadb', 'footprint');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $conn->real_escape_string($_POST['username']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user['username'];
            header('Location: ../index.php');
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "User not found.";
    }
}
?>
