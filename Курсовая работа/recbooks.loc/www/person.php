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

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["logout"])) {
            session_unset();
            session_destroy(); 
            header("Location: index.php");
            exit;
        }
        $newPassword = $_POST["new_password"];
    
        $sql = "UPDATE users SET password = '$newPassword' WHERE id = '$userid'";
        if ($conn->query($sql) === TRUE) {
            
            $successMessage = "Пароль успешно обновлен";
        } else {
            $errorMessage = "Ошибка обновления пароля";
        }
    }
    $conn->close();
    ?>
<!DOCTYPE html>
<html>
<head>
    <title>Личный кабинет</title>
    <style>
        input[type=text], input[type=password], input[type=email] {
            width: 10%;
            padding: 3px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        body {
            background-image: url("Solo-Leveling-Arise-Characters.jpg");
            background-size: cover;
            font-family: Arial, sans-serif;
            background-repeat:no-repeat;
            background-attachment: fixed;
            background-position: center center;
            
        }
        .nav-buttons {
            display: flex;
            align-items: center;
            justify-content:start;
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
        .more-books {
            position: absolute;
            bottom: 20px;
            right: 20px;
            background-color: #333;
            color: white;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            text-decoration: none;
        }
        .logout {
            position:absolute;
            bottom: 20px;
            left: 20px;
            background-color: #333;
            color: white;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 12px;
            text-decoration: none;
            width:35%;
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
            input[type=submit] {
            width:40%;
        }
        input[type=password] {
            width: 30%;
        }  
        }
        input {
            width:20%;
            
        }
        h3 {
            color:lightblue;
        }
        p {
            color:red;
        }
        label {
            color:red;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="navbar-brand">Личный кабинет</div>
        <div class="nav-buttons">
            <a class="nav-button" href="main.php">Главная страница</a>
            <a class="nav-button" href="authcorean.php">Корейская литература</a>
            <a class="nav-button" href="authchinese.php">Китайская литература</a>
        </div>
    </div>
    <h3>Информация о пользователе</h3>
    <p><strong>Логин:</strong> <?php echo "<td>" . $row["login"] . "</td>"; ?></p>
    <p><strong>Пароль:</strong> <?php echo "<td>" . $row["password"] . "</td>"; ?></p>
    <p><strong>Email:</strong> <?php echo "<td>" . $row["email"] . "</td>"; ?></p><br><br><br>

    <h3>Изменить пароль</h3>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div>
            <label for="new_password">Новый пароль:</label>
            <input type="password" id="new_password" name="new_password" required>
        </div>

        <input type="submit" value="Изменить пароль" class="button">
        
    </form>
    <?php
    if (isset($errorMessage)) {
        echo "<p>$errorMessage</p>";
    }

    if (isset($successMessage)) {
        echo "<p>$successMessage</p>";
    }
    ?>

    <form method="post" action="">
    
        <input type="submit" class="logout" name="logout" value="Выйти из аккаунта">
    </form>
    <a class="more-books" href="https://remanga.org">Больше книг</a>
</body>
</html>

