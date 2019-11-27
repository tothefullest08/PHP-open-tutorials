<?php
echo 'hello world';
?>

<?php
echo var_dump(1234);
echo var_dump("1234");
?>


<!-- 문자 결합 연산자 . -->
<?php
echo "hello"." "."world";
?>

<!-- 따옴표 안에서 따옴표(인용부호) 사용 -->
<!-- 1. 작은 따옴표 사용 -->
<?php
echo '그는 "안녕하세요" 라고 말했다';
?>
<!-- 2. escaping - 역슬래쉬(\) 사용 -->
<?php
echo "그는 \"안녕하세요?\"라고 말했다";
?>

