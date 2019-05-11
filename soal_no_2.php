<?php
/**
 * Created by PhpStorm.
 * User: ari oki
 * Date: 11/05/2019
 * Time: 13.41
 */
//print_r(is_username_valid("yog.yoga"));


print_r(is_email_valid("akudia|@kamu.com"));

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
     $cek_format = preg_match('/^([A-Za-z0-9\.]*)\@([A-Za-z][A-Za-z0-9\.]*)(\.[A-Za-z0-9\.]*)+$/', $email);
     $jumlah_username = strlen(explode("@",$email)[0]);

     if ($jumlah_username >= 4 && $cek_format){
         return true;
     }else{
         return false;
     }
}
?>