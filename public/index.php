<?php

use src\YearsMorphology;
use src\YearsCalculator;

require_once __DIR__ . '/../src/YearsMorphology.php';
    require_once __DIR__ . '/../src/YearsCalculator.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Дата обработка</title>
</head>
<body>
<form id="dateForm" method="POST">
    <label for="date">Выберите дату:</label>
    <input type="date" id="date" name="date" required>
    <button type="submit">Отправить</button>
</form>
<?php
// Проверяем, был ли отправлен запрос методом POST и есть ли данные в поле 'date'
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['date'])) {
    $date = htmlspecialchars($_POST['date']); // Получаем и очищаем данные
    $years = YearsCalculator::calculate($date);
    $suffix = YearsMorphology::morphology($years);
    echo "Прошло $years $suffix";
}
?>
</body>
</html>
