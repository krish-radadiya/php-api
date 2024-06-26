<?php

header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json");

include "../config/config.php";

$config = new Config();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $city = $_POST['city'];
    $std = $_POST['std'];
    $num = $_POST['num'];


    $res = $config->insertSchool($name, $city, $std,$num);

    if ($res) {
        $arr['data'] = "Data inserted Successfully...";
        http_response_code(201);
    } else {
        $arr['data'] = "Data insertion Faild...";
    }
} else {
    $arr['err'] = "Only POST HTTP Request Method is allowed...";
}

echo json_encode($arr);

?>