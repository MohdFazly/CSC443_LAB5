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
    $month = array ('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
    'October', 'November', 'December');

    $i = 0;
    for($i = 0; $i <= 11; $i++)
    {
        echo $month[$i]. "\n";
    }
    ?>

    <?php
    function assign_key() { 
        return 'd'; 
        } 
        $month['a'] = 1; 
        $month['b'] = 2; 
        $month['c'] = 3; 
        $month[assign_key()] = 4; /* Assign the key 'd' */
        $month['b'] = $month['a'] + $month['c']; /* $month['b'] now has 4 *
    ?>
</body>
</html>