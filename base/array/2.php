<?php
function get_members(){
    return ["harry", "ron", "sally"];
}
$tmp = get_members();
echo $tmp[1];
echo get_members()[0];
?>