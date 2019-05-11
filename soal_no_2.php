<?php
/**
 * Created by PhpStorm.
 * User: ari oki
 * Date: 11/05/2019
 * Time: 13.41
 */
print_r(is_username_valid("yog.yoga"));
//print_r(is_email_valid("yoga@yoga.com"));

function is_username_valid ($username){

    $jmlh_karakter = strlen($username);
    $lowercase = preg_match('/^([a-z.]+)$/', $username);
    $titik   = preg_match('@[.]@', $username);
    if ($jmlh_karakter == 8 && $lowercase & $titik){
        return true;
    }else{
        return false;
    }
}

function is_email_valid($email){

}