<?php
$subject = 'coding everybody http://opentutorials.org egoing@egoing.com 010-0000-0000';
preg_match('/coding/', $subject, $match); 
#preg_match가 검색결과를 3번째 인자(변수; $match)에 저장시킴
print_r($match);
?>

<?php
$subject = 'coding everybody http://opentutorials.org egoing@egoing.com 010-0000-0000';
preg_match('/c...../', $subject, $match); 
print_r($match);
?>


<?php #도메인 추출 - 슬러쉬인 /을 넣어야할 경우 \ 사용(escaping) 
$subject = 'coding everybody http://opentutorials.org egoing@egoing.com 010-0000-0000';
preg_match('/http:\/\//', $subject, $match); 
print_r($match);
?>

<?php #도메인 추출 - 슬러쉬인 /을 넣어야할 경우 다른 구분자 사용
$subject = 'coding everybody http://opentutorials.org egoing@egoing.com 010-0000-0000';
preg_match('~http://\w+~', $subject, $match); #w: 문자를 의미 +: 하나이상이라는 수량자
print_r($match);
?>

<?php 
$subject = 'coding everybody http://opentutorials.org egoing@egoing.com 010-0000-0000';
preg_match('~http://\w+.~', $subject, $match); #. : any character
print_r($match);
?>

<?php 
$subject = 'coding everybody http://opentutorials.org egoing@egoing.com 010-0000-0000';
preg_match('~http://\w+\.\w+~', $subject, $match); # any character로 사용되지 않도록 escaping 처리 
print_r($match);
?>

<!-- 캡쳐링(역참조): ()로 정규표현식의 패턴을 묶으면 독립된 데이터로 추출할 수 있음 -->
<?php 
$subject = 'coding everybody http://opentutorials.org egoing@egoing.com 010-0000-0000';
preg_match('~(http://\w+\.\w+)\s(\w+@\w+\.\w+)~', $subject, $match); #\s 공백을 의미
print_r($match);
# $match[0] 에는 전체 데이터가 저장되어 있음.
echo $match[1];
echo $match[2];
?>