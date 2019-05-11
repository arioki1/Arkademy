<?php
/**
 * Created by PhpStorm.
 * User: ari oki
 * Date: 11/05/2019
 * Time: 17.22
 */

$string = ['P','R','O','G','R','A','M','M', 'E','R'];


for($i=0; $i < count($string); $i++){

    for ($ii=0; $ii < count($string); $ii++){
        if ($i == $ii){
            echo("&nbsp;&nbsp;".$string[$ii]."&nbsp;&nbsp;");

        }else if((count($string)-$i-1) == $ii) {
            //balik urutan array;
            $a = array_reverse($string);
            echo("&nbsp;&nbsp;".$a[$ii]."&nbsp;&nbsp;");
        }else{
            echo "&nbsp;&nbsp;=&nbsp;&nbsp;";
        }

   }
   echo "<br>";
}
