<?php
function urlIs ($url){
    if ($url === $_SERVER["PHP_SELF"]){
        return TRUE;
    } else{
        return FALSE;
    }
}

