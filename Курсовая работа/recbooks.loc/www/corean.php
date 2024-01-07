<!DOCTYPE html>
<html>
<head>
  <title>Корейская литература RecBooks</title>
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
            <a class="nav-button" href="chinese.php">Китайская литература</a>
        </div>
    </div>
  </header>
  
  <main>
    <div class="book-block">
      <img src="e54532628ae3e192c424c4ee2ef05921.jpg" alt="Обложка книги">
      <h4>Год выпуска: 2016</h4>
      <h4>Автор: Пак Тхэ Чжун</h4>
      <h4>Название: Лукизм</h4>
      <h5>Жанры: Экшен, драма, триллер, психология</h5>
      <h5>Число глав: 469</h5>
      <button class="read-btn" onclick="showErrorMessage()">Читать</button>
    </div>
    <div class="book-block">
      <img src="d82b3c2026790ee0387f87a5e8788fa9.jpg" alt="Обложка книги">
      <h4>Год выпуска: 2019</h4>
      <h4>Автор: Хэмин Угак</h4>
      <h4>Название: Легенда о северном клинке</h4>
      <h5>Жанры: Приключения, экшен</h5>
      <h5>Число глав: 175</h5>
      <button class="read-btn" onclick="showErrorMessage()">Читать</button>
    </div>
    <div class="book-block">
      <img src="345.jpg" alt="Обложка книги">
      <h4>Год выпуска: 2021</h4>
      <h4>Автор: Biga</h4>
      <h4>Название: Возрождение Хуашань</h4>
      <h5>Жанры: История, фэнтези</h5>
      <h5>Число глав: 106</h5>
      <button class="read-btn" onclick="showErrorMessage()">Читать</button>
    </div>
    <div class="book-block">
      <img src="555.jpg" alt="Обложка книги">
      <h4>Год выпуска: 2020</h4>
      <h4>Автор: Sing-Shong</h4>
      <h4>Название: Всеведущий читатель</h4>
      <h5>Жанры: Антигерой, выживание</h5>
      <h5>Число глав: 190</h5>
      <button class="read-btn" onclick="showErrorMessage()">Читать</button>
    </div>
    <div class="book-block">
      <img src="565.jpg" alt="Обложка книги">
      <h4>Год выпуска: 2021</h4>
      <h4>Автор: Black Ajin</h4>
      <h4>Название: Поднятие уровня с богами</h4>
      <h5>Жанры: Сёнэн, магия</h5>
      <h5>Число глав: 100</h5>
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