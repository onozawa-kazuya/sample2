<?php


// 課題１
function getnumber($num) {
    return $num * 2;
}
$num = getnumber(10);
echo  $num.PHP_EOL;




// 課題２
function getsum($a, $b) {
    return $a + $b;
}
$sum = getsum(5, 6);
echo $sum.PHP_EOL;




// 課題３ わからないです

$arr = array(1, 3, 5, 7, 9);
  echo (array_product($arr)).PHP_EOL;





// 課題４わからないです

// function max_array($arr) {
//     $max_number = $arr[0];
//     foreach($arr as $a) {
//         $max_number
//     }
//     return $max_number;
// }








// 課題５

// strip_tags　エラーになります
// $c = "<a href="#">Tech boost</a>";
//   echo strip_tags($c);



// array_push 
$members = array("一郎","二郎","三郎");
 array_push($members,"四郎","五郎");
 var_dump ($members).PHP_EOL;
 
 
 
//  array_merge　
$color1 = array('red', 'blue', 'yellow');
$color2 = array('green', 'black', 'pink');
$colors = array_merge($color1, $color2);
var_dump ($colors).PHP_EOL;



// time
$d = time();
echo $d.PHP_EOL;



// mktime,date
$e = mktime(10,10,10,10,10,2010);
echo ($e).PHP_EOL;
echo date('Y年m月d日 H時m分s秒', $e).PHP_EOL;





