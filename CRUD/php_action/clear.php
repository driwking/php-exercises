<?php


/**
 * Summary of clear
 * @param mixed $input
 * @return string
 */

function clear($input){
    global $connect;
    //sql
    $var = mysqli_escape_string($connect, $input);
    // xss
    $var = htmlspecialchars($var);
    return $var;
}
?>