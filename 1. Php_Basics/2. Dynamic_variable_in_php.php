<?php
    $var1 = "String Variable 1";
    $var2 = 5;
    echo $var1 . " <br> " . $var2 . " <br> ";

    $var3 = "String Variable 3";
    $var3 = 7;
    echo $var3 . " <br> ";

    $text = 'Hello World';
    $dynamicText = 'text';
    echo 'The dynamic ' . $dynamicText .  ' is ' .${$dynamicText};

?>
