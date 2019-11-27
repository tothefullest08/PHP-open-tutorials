<?php
$tmp = [1,2,3,4,5];
echo count($tmp);
?>
<br />

<?php
$li = ['a', 'b', 'c', 'd', 'e'];
array_push($li, 'f'); # $li 배열의 끝에 'f' 추가
var_dump($li);
?>
<br />

<?php
$li2 = ['f', 'g', 'h', 'i'];
$li2 = array_merge($li2, ['j', 'k']); # 여러개의 데이터 추가
var_dump($li2);
?>
<br />

<?php
$li3 = ['l','m','n'];
array_unshift($li3, 'z'); # 배열의 제일 앞에 추가
var_dump($li3);
?>
<br />

<?php
$li = ['a','b','c','d','e'];
array_splice($li, 2, 0, 'B'); #  2번째 인덱스 뒤에 'B' 삽입
var_dump($li);
?>