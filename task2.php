<?php



// 課題１
$name = "onozawa";
if ($name == "onozawa") {
    echo "私は".$name."です。".PHP_EOL;
}else {
    echo $name."ではありません。".PHP_EOL;
}




// 課題２
$total = 0;
for ($i = 1; $i <= 10000; $i++) {
    $total += $i;
}
echo $total.PHP_EOL;




// 課題３
$fruits = array("apple", "orange", "grape", "banana", "cherry");
foreach ($fruits as $fruit) {
    echo $fruit.PHP_EOL;
}




// 課題４



for($i = 1; $i <= 100; $i++) {
if($i % 5 == 0){
    echo $i.PHP_EOL;
}
}


// php task2.php