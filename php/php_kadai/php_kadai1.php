<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title="php_kadai1">
    </head>
    <body>
    <?php
        //(1)
        if (strcasecmp('abc', 'abc') === 0) {
            echo '同じ文字列です。';
        } else {
            echo '同じ文字列ではありません。';
        }
        echo '<br>';
        
        //(2)
        echo 'neko'.'neko';
        echo '<br>';

        //(3)
        echo "abc" . (string)123;    
        echo '<br>';

        //(4)
        define('MIN_VALUE', '1.0');
        const MAX_VALUE = 10.0;
        echo MIN_VALUE.'<br>';
        echo MAX_VALUE.'<br>';

        //(5)
        echo '行番号:'.__LINE__;
        echo '<br>';
        echo 'ファイル名:'.__FILE__;
        echo '<br>';
        
        //(6)
        $number = 300;
        echo $number/365;
        echo '<br>';

        //(7)
        $i = 100;
        echo $i++;
        echo '<br>';
        echo $i;
        echo '<br>';
        
        //(8)
        $n = 100;
        echo $n--;
        echo '<br>';
        echo $n;
        echo '<br>';

        //(9)
        $int1 = 0;
        $int2 = 0;
        for ($int0 = 1; $int0 <= 10; $int0++ ) {
            echo $int1++;
            echo '/';
            echo ++$int2;
            echo '<br>';
        }

        //(10)
        $two = 2;
        $three = 3;
        echo $two + $three;
        echo '<br>';

        //(11)
        echo var_dump(1234);
        echo var_dump((string)1234);
        echo '<br>';

        //(12)
        $locations = 3;
        $c = 2 + $locations;
        print($c);
    ?>
    </body>
</html>
