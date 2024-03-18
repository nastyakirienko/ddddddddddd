<php
    function average($arr) {
    $sum = array_sum($arr;
$count = count($arr);
return $sum / $count;
}

$numbers = [2, 4, 6, 8, 10];
echo "Среднее значение: " . average($numbers);




