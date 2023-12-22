<DOCTYPE! html>
<head>
<style>
.red {
    color:red;
}
body {
    display:flex;
    align-items:center;
    justify-content:center;
}
table,td,th {
    border:1px solid black;
}

</style>

</head>
<body>
</body>
</html>

<?php

function generationOfCalendar($month, $year) {
    $currentMonth = mktime(0, 0, 0, $month, 1, $year);
    $daysInMonth = date("t", $currentMonth);
    $firstDay = date("N", $currentMonth);
    
    $holidays = [
        "01-01", // Новый год
        "12-31", // Последний день года
        "02-23", // 23 февраля
        "03-08", // 8 марта
        "05-01", // 1 мая
        "05-09"  // 9 мая
    ];
    echo "$month месяц $year года" ;
    echo "<table>";
    echo "<tr><th>Пн</th><th>Вт</th><th>Ср</th><th>Чт</th><th>Пт</th><th class='weekend'>Сб</th><th class='weekend'>Вс</th></tr>";

    echo "<tr>";
    
    for ($day = 1; $day < $firstDay; $day++) {
        echo "<td></td>";
    }
    
    $day = 1;
    while ($day <= $daysInMonth) {
        for ($weekday = $firstDay; $weekday <= 7; $weekday++) {
            if ($day > $daysInMonth) {
                break;
            }
            
            $formattedDate = date("m-d", strtotime("$year-$month-$day"));
            $isWeekend = ($weekday == 6 || $weekday == 7);
            $isHoliday = in_array($formattedDate, $holidays);
            
            if ($isWeekend || $isHoliday) {
                echo "<td class='red'>$day</td>";
            } else {
                echo "<td>$day</td>";
            }
            
            $day++;
        }
        
        if ($day <= $daysInMonth) {
            echo "</tr><tr>";
        }
        
        $firstDay = 1;
    }
    
    echo "</tr>";
    echo "</table>";
}
$month = 5;
$year = 2023;

generationOfCalendar($month, $year);

?>