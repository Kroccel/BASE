<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="books";
$conn=new mysqli($servername,$username,$password,$dbname);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['register'])) {
      $login = $_POST['login'];
      $password = $_POST['password'];
      $email = $_POST['email'];

      
      $checkUserQuery = "SELECT * FROM users WHERE login='$login' OR email='$email'";
      $checkUserResult = $conn->query($checkUserQuery);
      if ($checkUserResult->num_rows > 0) {
          echo '<script>alert("Такой пользователь уже существует")</script>';
      } else {
          $insertQuery = "INSERT INTO users (login, password, email) VALUES ('$login', '$password', '$email')";
          if ($conn->query($insertQuery) === TRUE) {
              echo '<script>alert("Регистрация прошла успешно");</script>';
          } else {
              echo "Ошибка при регистрации: " . $conn->error;
          }
      }
  }
  if (isset($_POST['loggin'])) {
      $login = $_POST['login'];
      $password = $_POST['password'];
      $sql = "SELECT * FROM users WHERE login = '$login' AND password = '$password'";
      $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['username'] = $login;
        $_SESSION['password'] = $password;
        $_SESSION['email'] = $email; 
        session_start();
        $_SESSION['authorized'] = true;
        header('Location: main.php');
        exit;
    } else {
        $errorMessage = "Неверный логин или пароль";
    }
} 

}
$conn->close();
?>
  


<!DOCTYPE html>
<html>
<head>
  <title>Библиотека Recbooks</title>
  <link rel="stylesheet" type="text/css" href="C:\xampp\htdocs\recbooks.loc\www\normalize.css">
  <style>
    body {
      background-image: url("photo_2022-07-05_13-05-37.jpg");
      background-size: cover;
      display:flex;
      justify-content:center;
      background-repeat:no-repeat;
      background-attachment: fixed;
      background-position: center center;
    }

    .registration-form {
      margin: 100px auto;
      width: 260px;
      padding: 20px;
      border:4px solid black;
      border-radius:10%;
      color:aqua;
      height:50vh;
      position:absolute;
      display:flex;
      top:50px;
    }
    @media (max-width:650px)
        {
        .registration-form {
            max-width: 200px;
            
        }
        
    }
    

    .hidden {
      display: none;
    }
    .navbar {
            background-color: #333;
            overflow: hidden;
            display: flex;
            justify-content: space-between;
            height:60px;
            border-radius: 5px;
          }

        .navbar a {
            color: white;
            text-decoration: none;
            font-size: 14px;
            padding: 15px;
            margin: 0 10px;
        }
    .more-books 
    {
      position: fixed;
      bottom: 20px;
      right: 20px;
      background-color: #333;
      color: white;
      border-radius: 5px;
      padding: 10px 20px;
      font-size: 16px;
      text-decoration: none;
    }
    .input-field {
      margin-top: 10px;
      margin-bottom: 10px;
      width: 100%;
      padding: 8px;
      border-radius: 5px;
      border: 1px solid #ccc;
      box-sizing: border-box;
      
    }
    .button {
      background-color: #333;
      color: white;
      border-radius: 5px;
      padding: 10px 20px;
      font-size: 16px;
      border: none;
      cursor: pointer;
      
    }
    .signup-link 
    {
      text-align: center;
      margin-top: 10px;
      font-size: 18px;
    }

    .signup-link a 
    {
      color: lightblue;
      text-decoration: none;
      font-size: 18px;
    }
  </style>
</head>
<body>
  <div class="registration-form">
    <?php if (!isset($_POST['loginForm'])) { ?>
      <form method="POST" action="">
        <input type="text" name="login"  placeholder="Логин" class="input-field" required><br><br>
        <input type="password" name="password"  placeholder="Пароль" class="input-field" required><br><br>
        <input type="email" name="email"  placeholder="Email" class="input-field" required><br><br>
        <button class="button" name="register">Зарегистрироваться</button><br><br>
        <p class="signup-link">Уже зарегистрированы? <a href="#" onclick="showLoginForm()">Войти</a></p>
      </form>
    <?php } elseif (isset($_POST['loginForm'])) { ?>
      <form method="POST" action="">
        <input type="text" name="login2" placeholder="Логин" class="input-field" required><br><br>
        <input type="password" name="password2" placeholder="Пароль" class="input-field" required><br><br>
        <button class="button" name="loggin">Войти</button><br><br>
        <p class="signup-link">Нет аккаунта? <a href="#" onclick="showRegistrationForm()">Зарегистрироваться</a></p>
      </form>
    <?php } ?>
  </div>

  <script>
    function showLoginForm() {
      var registrationForm = document.querySelector(".registration-form");
      registrationForm.innerHTML = `
        <form method="POST" action="">
          <input type="text" name="login" placeholder="Логин" class="input-field" required><br><br>
          <input type="password" name="password" placeholder="Пароль" class="input-field" required><br><br>
          <button class="button" name="loggin">Войти</button><br><br>
          <p class="signup-link">Нет аккаунта? <a href="#" onclick="showRegistrationForm()">Зарегистрироваться</a></p>
        </form>
      `;
    }
    function showRegistrationForm() {
      var registrationForm = document.querySelector(".registration-form");
      registrationForm.innerHTML = `
        <form method="POST" action="">
          <input type="text" name="login" placeholder="Логин" class="input-field" required><br><br>
          <input type="password" name="password" placeholder="Пароль" class="input-field" required><br><br>
          <input type="mail" name="email" placeholder="Email" class="input-field" required><br><br>
          <button class="button" name="register">Зарегистрироваться</button><br><br>
          <p class="signup-link">Уже зарегистрированы? <a href="#" onclick="showLoginForm()">Войти</a></p>
        </form>
      `;
    }
  </script>
  <div class="navbar">
    <a href="corean.php">Корейская литература</a>
    <a href="chinese.php">Китайская литература</a>
  </div>
  <a class="more-books" href="https://remanga.org">Больше книг</a>
  <?php
    if (isset($errorMessage)) {
        echo '<script>alert("Неверный логин или пароль");</script>';
    }
  ?>
</body>
</html>
    
