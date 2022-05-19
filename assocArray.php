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
    echo $monthDays['February'];
    echo "<br>";
    echo $monthDays['March'];
    echo "<br>";
    echo $monthDays['April'];
    echo "<br>";
    echo $monthDays['May'];
    echo "<br>";
    echo $monthDays['June'];
    echo "<br>";
    echo $monthDays['July'];
    echo "<br>";
    echo $monthDays['August'];
    echo "<br>";
    echo $monthDays['September'];
    echo "<br>";
    echo $monthDays['October'];
    echo "<br>";
    echo $monthDays['November'];
    echo "<br>";
    echo $monthDays['December'];
    echo "<br>";
    
    ?>
    
    <?php
    $monthDays = range(0,5);
    print_r ($monthDays); 
    ?>
    
    <?php
    function assign_key() { 
    return 'd'; 
    } 
    $month['January'] = 1; 
    $month['b'] = 2; 
    $month['c'] = 3; 
    $month[assign_key()] = 4;
    $month['b'] = $month['a'] + $month['c'];
   
    ?>



</body>
</html>