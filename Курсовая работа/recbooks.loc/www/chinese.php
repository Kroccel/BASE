<!DOCTYPE html>
<html>
<head>
  <title>Китайская литература Recbooks</title>
  <style>
    .book-block {
      display: inline-block;
      width: 200px;
      height: 300px;
      margin: 10px;
      padding: 10px;
      border: 1px solid #ccc;
      text-align: center;
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
        .read-btn {
            background-color: #1e90ff;
            color: #fff;
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

    .read-btn:hover {
      background-color: #0066cc;
    }
  </style>
</head>
<body>
  <header>
  <div class="navbar">
        <div class="navbar-brand">Библиотека Recbooks</div>
        <div class="nav-buttons">
            <a class="nav-button" href="index.php">Зарегистрироваться</a>
            <a class="nav-button" href="corean.php">Корейская литература</a>
        </div>
    </div>
  </header>
  
  <main>
    <div class="book-block">
      <img src="52.jpg" alt="Обложка книги">
      <h4>Год выпуска: 2015</h4>
      <h4>Автор: Mad Snail</h4>
      <h4>Название: Сказания о демонах и богах</h4>
      <h5>Жанры: Экшен, фэнтези</h5>
      <h5>Число глав: 454</h5>
      <button class="read-btn" onclick="showErrorMessage()">Читать</button>
    </div>
    <div class="book-block">
      <img src="44.jpg" alt="Обложка книги">
      <h4>Год выпуска: 2018</h4>
      <h4>Автор: Mo mo</h4>
      <h4>Название: Пик боевых искусств</h4>
      <h5>Жанры: Гарем, алхимия</h5>
      <h5>Число глав: 3640+</h5>
      <button class="read-btn" onclick="showErrorMessage()">Читать</button>
    </div>
    <div class="book-block">
      <img src="66.jpg" alt="Обложка книги">
      <h4>Год выпуска: 2021</h4>
      <h4>Автор: Fire Ciweimao</h4>
      <h4>Название: Пламя бесчисленных невзгод</h4>
      <h5>Жанры: Демоны, мистика</h5>
      <h5>Число глав: 116</h5>
      <button class="read-btn" onclick="showErrorMessage()">Читать</button>
    </div>
    <div class="book-block">
      <img src="22.jpg" alt="Обложка книги">
      <h4>Год выпуска: 2022</h4>
      <h4>Автор: Crimson Night</h4>
      <h4>Название: Моё перерождение в древо</h4>
      <h5>Жанры: Реинкарнация, фэнтези</h5>
      <h5>Число глав: 109+</h5>
      <button class="read-btn" onclick="showErrorMessage()">Читать</button>
    </div>
    <div class="book-block">
      <img src="321.jpg" alt="Обложка книги">
      <h4>Год выпуска: 2023</h4>
      <h4>Автор: Chang Pan Yongzhe</h4>
      <h4>Название: Я прокачиваюсь во сне, убивая монстров</h4>
      <h5>Жанры: Культивация, трагедия</h5>
      <h5>Число глав: 73+</h5>
      <button class="read-btn" onclick="showErrorMessage()">Читать</button>
    </div>
  </main>
  
  <footer>
    <a class="more-books" href="https://remanga.org">Больше книг</a>
  </footer>
  
  <script>
    function showErrorMessage() {
      alert("Только авторизованные пользователи могут получить доступ к тексту.");
    }
  </script>
</body>
</html>