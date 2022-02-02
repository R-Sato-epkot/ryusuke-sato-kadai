<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title="php_kadai1">
    </head>
    <body>
    <?php
        echo '(1)<br>';
        $day_of_week = array('月', '火', '水', '木', '金');
        for ($i = 0; $i < count($day_of_week); $i++) {
            echo $day_of_week[$i].'曜日<br>';
        }
        
        echo '(2)<br>';
        $animals = array('Dog'=>'犬', 'Cat'=>'猫', 'horse'=>'馬', 'Sheep'=>'羊','Pig'=>'豚');
        foreach ($animals as $en => $ja) {
            echo "$en <=> $ja<br>"; 
        }

        echo '(3)<br>';
        echo $day_of_week[4].'曜日<br>';
        echo $animals['Cat'];
        echo '<br>';

        echo '(4)<br>';
        define('ORIGIN', 0);
        for ($i = ORIGIN; $i < count($day_of_week); $i++) {
            echo $day_of_week[$i].'曜日<br>';
        }
        $animal_keys = array_keys($animals);
        for ($i = ORIGIN; $i < count($animals); $i++) {
            echo $animal_keys[$i].' <=> '.$animals[$animal_keys[$i]].'<br>';
        }
        echo '<br>';
        
        echo '(5)<br>';
        $fruits = array('Apple'=>'りんご', 'Banana'=>'ばなな', 'Lemon'=>'レモン', 'Grape'=>'ぶどう', 'Orange'=>'みかん');
        $vegetables = array('Tomato'=>'トマト', 'Cucumber'=>'きゅうり', 'Eggplant'=>'なす', 'Onion'=>'たまねぎ', 'Pumpkin'=>'かぼちゃ');
        $plants = array($fruits, $vegetables);
        for ($i = ORIGIN; $i < count($plants); $i++) {
            $keys = array_keys($plants[$i]);
            for ($n = ORIGIN; $n < count($keys); $n++) {
                $key = $keys[$n];
                echo $key.' <=> '.$plants[$i][$key].'<br>';
            }
           echo '<br>'; 
        }
    ?>
    </body>
</html>
