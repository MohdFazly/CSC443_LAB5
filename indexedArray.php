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
    foreach($month as $value)
        {
        echo $value . "\n";
        }
    ?>
    
    <?php
    while($i <= 11)
        {
            echo $months[$i] . "\n";
            $i++;
        }
    ?>
</body>
</html>