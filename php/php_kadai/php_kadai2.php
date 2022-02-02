<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title="php_kadai1">
    </head>
    <body>
    <?php
        echo '(1)<br>';
        echo 2+4-5;
        echo '<br>';
        echo 4-5+2;
        echo '<br>';
        echo 4*5/2;
        echo '<br>';       
        echo 5/2*4;
        echo '<br>';
        
        echo '(2)<br>';
        echo 2*3+4+1;
        echo '<br>';
        echo 2*(3+4+1); 
        echo '<br>';

        echo '(3)<br>';
        echo '$username = \'Admin\'<br>';
        echo '変数$usernameにAdmin以外を再度代入する';
        echo '<br>';

        echo '(4)<br>';
        $ary = array('one', 'two', 'three', 'four', 'five');
        for ($i = 0; $i <= count($ary); $i++) {
            echo $ary[$i].' ';
        }
        echo '<br>';

        echo '(5)<br>';
        sort($ary, SORT_STRING);
        for ($i = 0; $i <= count($ary); $i++) {
            echo $ary[$i].' ';
        }
        echo '<br>';

        echo '(6)<br>';
        $multi_ary = array(
            array('maguro', 'saba', 'aji', 'tai', 'hirame'),
            array('awabi', 'sazae', 'sijimi', 'asari', 'kaki')
        );
        define('ZERO_ORIGIN', 0);
        foreach ($multi_ary as $value) {
            for ($i = ZERO_ORIGIN; $i <= count($value); $i++) {
                echo $value[$i].' ';
            }
            echo '<br>';
        }
        $int = ZERO_ORIGIN;
        while ($int < count($multi_ary)) {
            for ($i = ZERO_ORIGIN; $i <= count($multi_ary[$int]); $i++) {
                echo $multi_ary[$int][$i].' ';
            }
            echo '<br>';
            $int++;
        }
    ?>
    </body>
</html>
