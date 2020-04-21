<?php
function checkUsername($user_name)
{
    if (isset($user_name)){
        return $user_name;
    } else {
        return "ゲストさん";
    }
}
