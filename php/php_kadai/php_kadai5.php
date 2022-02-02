<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title="php_kadai1">
    </head>
    <body>
    <?php
        include 'php_kadai5_function.php';
        $num1 = 18;
        $num2 = 7;
        echo sum($num1, $num2);
        echo '<br>';
        echo sub($num1, $num2);        
        echo '<br>';
        echo mul($num1, $num2);
        echo '<br>';
        echo div($num1, $num2);
        echo '<br>';
        echo mod($num1, $num2);
        echo '<br>';
        echo '<br>';
        echo sum2($num1, $num2);
        echo '<br>';
        echo sub2($num1, $num2);        
        echo '<br>';
        echo mul2($num1, $num2);
        echo '<br>';
        echo div2($num1, $num2);
        echo '<br>';
        echo mod2($num1, $num2);
        echo '<br>';
    ?>
    </body>
</html>
