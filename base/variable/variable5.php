<html>
<body>
<?php
$a = 100;
echo var_dump($a); #int(100)
echo gettype($a);  #integer
settype($a, 'double'); #double: 실수를 의미
echo '<br />';
echo gettype($a); #double
?>
</body>
</html>