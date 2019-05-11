<?php
/**
 * Created by PhpStorm.
 * User: ari oki
 * Date: 11/05/2019
 * Time: 13.41
 */

print_r(biodataSaya());

function biodataSaya(){
    $biodata = array(
        "name" => "Yoga Setiawan",
        "address"=> "Palembang",
        "hobbies" => array("main komputer", "nonton"),
        "is_married"=>false,
        "school"=>[
            "highSchool"=>"SMK Bina Nusa Slawi Tegal",
            "university"=>"Universitas Bina Darma Palembang"
        ],
        "skills"=> array(
            [
            "name" => "PHP",
            "score" => 8
            ],
            [
                "name" => "Android",
                "score" => 9
            ],
            )
    );
    return json_encode($biodata);
}