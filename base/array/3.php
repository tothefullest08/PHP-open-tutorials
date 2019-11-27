<?php
function get_members(){
    return ['harry', 'ron', 'micheal', 'tom'];
}
$members = get_members();

for ($i=0; $i < count($members); $i++){
    echo ucfirst($members[$i])."<br />";
}

echo count($members);
?>