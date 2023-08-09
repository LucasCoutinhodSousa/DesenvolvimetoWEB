<?php
    $var1 = 10;
    $var2 = 20;
    $var3 = 22.5;
    $texto = '2023';

    echo $var1 + $var2 + $var3;

    echo '<br>';

    echo $var1 * $var2;

    echo '<br>';

    echo $var1 + $texto;

    echo '<br>';
    //Para contatenar
    echo $var1 . $texto;

    echo '<br>';

    function somaDois($value1, $value2){
        return $value1 + $value2;
    }

    echo somaDois($var1,$var2)

?>