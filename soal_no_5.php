<?php
/**
 * Created by PhpStorm.
 * User: ari oki
 * Date: 11/05/2019
 * Time: 17.49
 */

$data = [
    ['a','c','b','e','d'],
    ['g','e','f','z']
];
$dataLain = [
    ['g','h','x','j'],
    ['a','c','b','e','d'],
    ['q','w','a']
];



sort_array($dataLain);

function sort_array($data){
    $hasil = [];
    foreach ($data as $isi){
        rsort($isi);
        array_push($hasil,$isi[0]);
    }
    print_r($hasil);
}