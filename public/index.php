<?php


require_once __DIR__ . '/../src/bootstrap.php';

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
    $yearsCalculator = new App\YearsCalculator();
    $yearsMorphology = new App\YearsMorphology();
    new App\App($yearsCalculator, $yearsMorphology);
?>
</body>
</html>
