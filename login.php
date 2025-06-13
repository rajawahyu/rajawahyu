<?php 
session_start();
include "koneksi.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$username = $_POST['username'];
$password = $_POST['password'];


$query= "SELECT * from users where username = ? AND password = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "ss", $username, $password);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if ($row = mysqli_fetch_assoc($result)){
    $_SESSION['username'] = $row['username'];
    $_SESSION['role'] = $row['role'];
    header("location: menu.php");
    exit;
}else{
    echo "login gagal";
}
};
?>
