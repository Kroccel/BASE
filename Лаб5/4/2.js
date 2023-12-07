const path = "c:/Users/Куан Чи/Desktop/Лабы/Лаб5/4/2.js";

// Разбиваем путь на отдельные части, используя разделитель "/"
const folders = path.split("/");

// Удаляем последний элемент, так как он является именем файла
folders.pop();

// Выводим названия папок
folders.forEach(folder => console.log(folder));
    
