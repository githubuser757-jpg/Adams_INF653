<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $num1 = 10;
    $num2 = 5;

    $addition = $num1 + $num2;
    $subtraction = $num1 - $num2;
    $multiplication = $num1 * $num2;
    $division = $num1 / $num2;
    $modulus = $num1 % $num2;

    echo "Number 1: " . $num1 . PHP_EOL;
    echo "Number 2: " . $num2 . PHP_EOL;
    echo "Addition: " . $addition . PHP_EOL;
    echo "Subtraction: " . $subtraction . PHP_EOL;
    echo "Mulltiplication: " . $multiplication . PHP_EOL;
    echo "Division: " . $division . PHP_EOL;
    echo "Modulus: " . $modulus . PHP_EOL;

    $input = 7;
    $output = 7 % 2;
    echo (7 % 2 === 0) ? "7 is an even number.\n" : "7 is an odd number.\n";

    $incrementNumber = 10;
    echo "Starting number: " . $incrementNumber . "\n";
    $incrementNumber++;
    echo "After increment: " . $incrementNumber . "\n";
    $incrementNumber--;
    echo "After decrement: " . $incrementNumber . "\n";

    $grade = 85;
    if($grade > 90)
    {
        echo "You got an A!\n";
    }
    elseif($grade > 80)
    {
        echo "You got a B!\n";
    }
    elseif($grade > 70)
    {
        echo "You got a C.\n";
    }
    elseif($grade > 60)
    {
        echo "You got a D.\n";
    }
    else
    {
        echo "You got an F.\n";
    }

    $year = 2024;
    if($year % 4 === 0 && $year % 100 != 0)
    {
        echo $year . " is a leap year.\n";
    }
    ?>
</body>
</html>