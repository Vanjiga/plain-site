<?php

$userForename = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING);
$userLastName = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_STRING);


echo "
    <h1>Hvala na rezervaciji, {$userForename} {$userLastName}</h1>";
?>