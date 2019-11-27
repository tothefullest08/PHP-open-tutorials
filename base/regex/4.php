<?php
preg_match('@^(?:http://)?([^/]+)@i', 
#^  => 경계를 의미함. http://로 시작하는 것을 검사
#?: => matches 라는 배열안에 http:// 가 담기지 않음.
#?  => 수량자: 0~1 http:// 가 없거나 있거나. 1개만 등장
#대괄호 안의 ^ => not(부정)을 의미.  
#[^/] => /가 아닌 전체문자를 의미 (www.php.net)

    "http://www.php.net/index.html", $matches);
print_r($matches);
$host = $matches[1];

// get last two segments of host name
# / => 구분자 
# [^.] => .이 아닌 문자
# + => 수량자(.이 아닌 문자가 1개 이상)
# \. => .을 문자로 처리
# $ => 문자열의 끝에 해당하는 경계
preg_match('/[^.]+\.[^.]+$/', $host, $matches);
print_r($matches);
echo "domain name is: {$matches[0]}\n";
?>
