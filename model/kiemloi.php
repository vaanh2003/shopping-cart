<?php

function is_email($str) {
    return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
}
function is_phone($str) {
    return (!preg_match("/^[0-9]*$/", $str)) ? FALSE : TRUE;
}

?>