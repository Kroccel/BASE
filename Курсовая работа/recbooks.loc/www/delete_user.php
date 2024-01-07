<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "books";

$conn = new mysqli($servername, $username, $password, $dbname);
$id = $_POST['id'];
if($id == 1) {
  echo "Нельзя удалить пользователя с ID = 1";
} else {
  $sql = "DELETE FROM users WHERE id=$id";

  if ($conn->query($sql) === TRUE) {
    header('Location:admin.php');
  } else {
    echo "Error deleting record: " . $conn->error;
  }
}
$conn->close();
?>