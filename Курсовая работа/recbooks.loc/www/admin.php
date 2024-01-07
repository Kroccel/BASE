<!DOCTYPE html>
<html>
<head>
    <title>Админ панель</title>
    <style>
        body {
            background-size: cover;
            font-family: Arial, sans-serif;
            background-repeat:no-repeat;
            background-attachment: fixed;
            background-position: center center;
        }
        .input1 {
        
            margin-top: 10px;
        margin-bottom: 10px;
        width: 50%;
        padding: 8px;
        border-radius: 5px;
        border: 1px solid #ccc;
        box-sizing: border-box;
      
        }
        .logout {
            position: fixed;
            bottom: 20px;
            left: 20px;
            background-color: #333;
            color: white;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            text-decoration: none;
        }
    </style>
</head>
<body>
<form method="post" action="">
    <input type="submit" class="logout" name="logout" value="На главную">
</form>
</body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "books";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
session_start();
if (!$_SESSION['authorized']) {
    header('Location: index.php');
    exit;
}
$sql = "SELECT id, login, password, email FROM users";
$result = $conn->query($sql);
echo "<table>";
echo "<tr><th>ID</th><th>Login</th><th>Password</th><th>Email</th></tr>";
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["id"]. "</td><td>" . $row["login"]. "</td><td>" . $row["password"]. "</td><td>" . $row["email"]. "</td></tr>";
  }
} else {
  echo "0 results";
}
echo "</table>";
echo "
<style>
table {
    box-sizing: border-box;
  border-collapse: collapse;
  width: 100%;
}

th, td {
  border: 1px solid black;
  padding: 8px;
  text-align: center;
}

th {
  background-color: #f2f2f2;
}
</style>
";
echo "
<form action='edit_user.php' method='post'>
  <input type='text' class='input1' name='id' placeholder='ID пользователя'>
  <input type='text' class='input1' name='login' placeholder='Новый логин'>
  <input type='text' class='input1' name='password' placeholder='Новый пароль'>
  <input type='text' class='input1' name='email' placeholder='Новый email'>
  <input type='submit' class='input1' value='Редактировать'>
</form>
";
echo "
<form action='delete_user.php' method='post'>
  <input type='text' class='input1' name='id' placeholder='ID пользователя'>
  <input type='submit' class='input1' value='Удалить'>
</form>
";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["logout"])) {
        session_unset();
        session_destroy(); 
        header("Location: main.php");
        exit;
    }
}
$conn->close();
?>