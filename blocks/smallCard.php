<?php
    $servername = "localhost"; // Назва бази даних
    $username = "beauty40"; // Ім'я користувача бази даних
    $password = "f97d62AfKs"; // Пароль бази даних
    $dbname = "beautsy40_shevasik"; // Назва бази даних

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Перевірка з'єднання
    if ($conn->connect_error) {
        die("Помилка з'єднання з базою даних: " . $conn->connect_error);
    }
    
    $sql = "SELECT id, firstname, lastname FROM MyGuests";
    $result = $conn->query($sql);

    print_r($result);
    
    $conn->close();
?>
