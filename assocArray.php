<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $monthDays = array ('January' => 31, 'February' => 28,
    'March' => 31, 'April' => 30,
    'May' => 31, 'June' => 30,
    'July' => 31, 'August' => 31,
    'September' => 30, 'October' => 31,
    'November' => 30, 'December' => 31);
    echo $monthDays['January'];
    echo "<br>";
    echo $monthDays['February']"<br>";
    echo $monthDays['March']"<br>";
    echo $monthDays['April']"<br>";
    echo $monthDays['May']"<br>";
    echo $monthDays['June']"<br>";
    echo $monthDays['July']"<br>";
    echo $monthDays['August']"<br>";
    echo $monthDays['September']"<br>";
    echo $monthDays['October']"<br>";
    echo $monthDays['November']"<br>";
    echo $monthDays['December']"<br>";
    
    ?>

</body>
</html>