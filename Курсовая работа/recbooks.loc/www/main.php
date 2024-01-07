<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "books";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Ошибка соединения: " . $conn->connect_error);
}

$errorMessage = "";
session_start();

$sql = "SELECT * FROM users WHERE login='{$_SESSION['username']}'";
$result = $conn->query($sql);

if ($result->num_rows >0) {
    $row = $result->fetch_assoc();
    $login = $row["login"];
    $password = $row["password"];
    $email = $row["email"];
} else {
    $errorMessage = "Ошибка получения данных пользователя";
}
    if (!$_SESSION['authorized']) {
        header('Location: index.php');
        exit;
    }
    if ($login === "Kroccel") { 
        echo '<a class="admin" href="admin.php">Админ панель</a>';
      }

    $conn->close();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Главная страница</title>
    <style>
        body {
            background-image: url("Solo-Leveling-Arise-Characters.jpg");
            background-size: cover;
            font-family: Arial, sans-serif;
            background-repeat:no-repeat;
            background-attachment: fixed;
            background-position: center center;
        }

        .navbar {
            background-color: #333;
            overflow: hidden;
            display: flex;
            justify-content: space-between;
            padding: 10px;
        }

        .navbar-brand {
            color: white;
            font-size: 24px;
        }

        .nav-buttons {
            display: flex;
            align-items: center;
        }

        .nav-button {
            color: white;
            font-size: 18px;
            padding: 8px 12px;
            margin-left: 10px;
            border-radius: 3px;
            text-decoration: none;
        }

        .nav-button:hover {
            background-color: #555;
        }

        .more-books {
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
        p {
            color:red;
        }
        h1 {
            color:lightblue;
        }
        @media screen and (max-width: 600px) {
            .navbar {
                flex-direction: column;
                align-items: center;
            }

            .nav-buttons {
                margin-top: 10px;
            }

            .nav-button {
                margin-top: 10px;
                margin-left: 0;
            }
        }
        .admin {
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

    <div class="navbar">
        <div class="navbar-brand">Библиотека Recbooks</div>
        <div class="nav-buttons">
            <a class="nav-button" href="person.php">Личный кабинет</a>
            <a class="nav-button" href="authcorean.php">Корейская литература</a>
            <a class="nav-button" href="authchinese.php">Китайская литература</a>
        </div>
    </div>

    <h1>Добро пожаловать на наш сайт!</h1>
    <p>Здесь вы найдете широкий список книг различных жанров и авторов. Приятного чтения!</p>

    <a class="more-books" href="https://remanga.org">Больше книг</a>

</body>
</html>
