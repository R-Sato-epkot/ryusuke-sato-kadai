<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title="php_kadai1">
    </head>
    <body>
    <?php
        echo '(1)<br>';
        define('RAND_MAX', 2);
        define('RAND_MIN', 0);
        $rand_num = rand(RAND_MIN, RAND_MAX);
        if ($rand_num == 0 ) {
            echo '大吉';
        } elseif ($rand_num == 1) {
            echo '吉';
        } else {
            echo '凶';
        }
        echo '<br>';
        
        echo '(2)<br>';
        define('PER_MAX', 100);
        define('PER_MIN', 0);
        $rand_per = rand(PER_MIN, PER_MAX);
        $msg = $rand_per > 50 ? '雨の降る可能性が高いです。降水確率'.$rand_per.'%': '雨の降る可能性が低いです。降水確率'.$rand_per.'%';
        echo $msg;
        echo '<br>';

        echo '(3)<br>';
        define('RAND_MAX2', 4);
        define('RAND_MIN2', 1);
        $rand_num2 = rand(RAND_MIN2, RAND_MAX2);
        switch ($rand_num2) {
            case 1:
                echo '$rand_num2には1が代入されています。';
                break;
            case 2:
                echo '$rand_num2には2が代入されています。';
                break;
            case 3:
                echo '$rand_num2には3が代入されています。';
                break;
            case 4:
                echo '$rand_num2には4が代入されています。';
                break;
        }
        echo '<br>';

        echo '(4)<br>';
        $rand_num2 = rand(RAND_MIN2, RAND_MAX2);
        switch ($rand_num2) {
            case 1:
                echo '$rand_num2には1が代入されています。';
            case 2:
                echo '$rand_num2には2が代入されています。';
            case 3:
                echo '$rand_num2には3が代入されています。';
            case 4:
                echo '$rand_num2には4が代入されています。';
        }
        echo '<br>';
        
        echo '(5)<br>';
        define('RAND_MAX3', 6);
        $rand_num3 = rand(RAND_MIN2, RAND_MAX3);
        switch ($rand_num3) {
            case 1:
                echo '$rand_num3には1が代入されています。';
                break;
            case 2:
                echo '$rand_num3には2が代入されています。';
                break;
            case 3:
                echo '$rand_num3には3が代入されています。';
                break;
            case 4:
                echo '$rand_num3には4が代入されています。';
                break;
            default:
                echo 'エラーが発生しています。';
        }
        echo '<br>';
        
        echo '(6)<br>';
        $rand_num2 = rand(RAND_MIN2, RAND_MAX2);
        switch ($rand_num2):
            case 1:
                echo '$rand_num2には1が代入されています。';
                break;
            case 2:
                echo '$rand_num2には2が代入されています。';
                break;
            case 3:
                echo '$rand_num2には3が代入されています。';
                break;
            case 4:
                echo '$rand_num2には4が代入されています。';
                break;
        endswitch;
        echo '<br>';

        echo '(7)<br>';
        define('LOOP_NUM', 10);
        define('ZERO_ORIGIN', 0);
        $i = ZERO_ORIGIN;
        while ($i < LOOP_NUM) {
            $i++;
            echo (string)$i.'回目のループです。<br>';
        }
        
        echo '(8)<br>';
        $n = ZERO_ORIGIN;
        do {
            $n++;
            echo (string)$n.'回目のループです。<br>';
        } while ($n < LOOP_NUM);

        echo '(9)<br>';
        for ($counter = -3; $counter < 10; $counter++) {
            if ($counter == 0) {
                break;
            }
            echo 100/$counter;
        }
        echo '<br>';

        echo '(10)<br>';
        for ($counter = -3; $counter < 10; $counter++) {
            if ($counter == 0) {
                continue;
            }
            echo 100/$counter;
        }
        echo '<br>';
    ?>
    </body>
</html>
