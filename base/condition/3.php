<?php
if ($_POST['id'] == 'harry') {
    if ($_POST['password'] == '111111') {
        echo 'correct';
    } else {
        echo 'password wrong';
    }
} else {
    echo 'id wrong';
}
?>