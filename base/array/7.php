<?php
$grades = array('harry'=>10, 'potter'=>6, 'Ron'=>80);
var_dump($grades);

$grades1 = [];
$grades1['harry'] = 10;
$grades1['potter'] = 6;
$grades1['Ron'] = 5;
var_dump($grades1);
echo $grades1['Ron'];
?>
<br />

<?php
$grades2 = array('harry'=>10, 'potter'=>5, 'malpoe'=>20);
var_dump($grades2);
foreach($grades2 as $key => $value){
    echo "key:{$key} value: {$value}<br />";
}
foreach($grades as $key){
    echo $key;
}
?>