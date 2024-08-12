<?php

namespace App;

use App\interfaces\YearsCalculatorInterface;
use App\interfaces\YearsMorphologyInterface;

class App
{
    public function __construct(public YearsCalculatorInterface $yearsCalculator,
                                public YearsMorphologyInterface $yearsMorphology)
    {
        try {

            // Проверяем, был ли отправлен запрос методом POST и есть ли данные в поле 'date'
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['date'])) {
                $datePast = htmlspecialchars($_POST['date']); // Получаем и очищаем данные
                $dateNow = date("Y-m-d");
                $years = YearsCalculator::calculate($datePast, $dateNow);
                $suffix = YearsMorphology::toMorphology($years);
                echo "Прошло $years $suffix";
            }

        } catch (\Throwable $e) {
            echo $e->getMessage();
        }
    }
}

?>