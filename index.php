<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basics</title>
</head>
<body>
    <?php
    $a = 20;
    $b = 40;
    $c = 50;

        echo "<b>Hello</b>";

        echo $a . "</br>" . $b;
    $a++;

    echo $a;
    if( $a > 10){
        echo "Hello Gello";
    }

    $day = date('l');
    echo $day;

    for($i = 1; $i<=10; $i++){
        echo "hello" . $i;
        echo "<br>";
    }

    echo "<br>";

    $str = "Rakib";
    var_dump($str);
    echo $str;

    $l = strlen($str);
    echo "<br>";
    echo $l;
    echo "<br>";
    $msg = "Hello my friend, go to the market";

    if(strpos($msg, "gon") !== FALSE){
        echo "Okay Found.";
    }
    else{
        echo "Not Found!!!";
    }

    ?>

</body>
</html>