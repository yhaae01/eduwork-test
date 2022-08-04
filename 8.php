<!-- 8 -->
<?php 
foreach(range(1, 15) as $number) {
    if ($number % 3 != 0 && $number % 5 != 0) {
        echo $number . '<br>';
        continue;
    }
    if ($number % 3 == 0) echo 'Edu';
    if ($number % 5 == 0) echo 'Work';
    echo '<br>';
}
?>