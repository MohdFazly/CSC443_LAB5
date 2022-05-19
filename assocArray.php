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
    
    foreach ($monthDays as $key => $day)
    {
        echo "$key $day <br>";
    }
        echo "<br>";
    ?>
    
    <?php
    $monthDays = range(4,30);
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