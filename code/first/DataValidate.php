<?php

include 'users/users.php';


function DataValidate($data) {
    $pattern = "/^([0-9]{2}).([0-9]{2}).([0-9]{4})$/";
    if (preg_match($pattern,$data, $razdeli) ) :
        if (checkdate($razdeli[1],$razdeli[2],$razdeli[3]))
            return $isValid;
}