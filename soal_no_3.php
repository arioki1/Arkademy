<?php
/**
 * Created by PhpStorm.
 * User: ari oki
 * Date: 11/05/2019
 * Time: 16.06
 */

cetak(10);
function cetak($jumlah){
    for ($ii = 0; $ii < $jumlah; $ii++) {
        $isi = [];
        $data = 'abcdefghijklmnopqrstuvwxyz1234567890';
        for ($i = 0; count($isi) < 32; $i++) {
            $index = rand(0, strlen($data) - 1);
            $char = $data[$index];
            if (!in_array($char, $isi)) {
                array_push($isi, $char);
            }
        }

        echo implode($isi)."<br>";
    }
}