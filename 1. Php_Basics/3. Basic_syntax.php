<?php
    $gender = "Male";
    if ($gender=="Male"){
        echo "I'm a boy";
    }elseif ($gender=="Female"){
        echo "I'm a girl";
    }else {
        echo "I'm gender neutral";
    }
    echo "<br>";

    for($count=0; $count<10; $count++)
    {
            echo $count . "<br>";
    }
    $arr = array();
    $arr[0] = "Mouse";
    $arr[1] = "Keyboard";
    $arr[2] = "Monitor";

    for($count=0; $count<3; $count++)
    {
        echo $arr[$count]. "<br>";
    }


    foreach($arr as $item):
        echo $item. "<br>";
    endforeach;

    $arr1 = array("Mouse", "Keyboard", "Monitor");

    $arr2 = [];
    $arr[0] = "Mouse";
    $arr[1] = "Keyboard";
    $arr[2] = "Monitor";

    $arr3 = ["Mouse", "Keyboard", "Monitor"];

    $associative_arr = [ "Afor"=>"Apple", "Bfor"=>"Banana", "Cfor"=>"Cat" ];
    echo $associative_arr['Afor'];
    echo "<br>";

    $tasks = ['Come to this course', 'Understand everything easily', 'Make a successful project'];

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <ul>
            <? foreach($tasks as $task): ?>
                <? echo "<li> $task </li>"; ?>
            <? endforeach; ?>
        </ul>
    </body>
</html>
