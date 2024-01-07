<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "books";

$conn = new mysqli($servername, $username, $password, $dbname);
$id = $_POST['id'];
$login = $_POST['login'];
$password = $_POST['password'];
$email = $_POST['email'];
$sql = "UPDATE users SET login='$login', password='$password', email='$email' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  header('Location:admin.php');
} else {
  echo "Error updating record: " . $conn->error;
}
$conn->close();
?>