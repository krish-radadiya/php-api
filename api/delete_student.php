<?php

header("Access-Control-Allow-Methods: DELETE");
header("Content-Type: application/json");

include "../config.php";

$config = new Config();

if ($_SERVER['REQUEST_METHOD'] == "DELETE") {

    $input = file_get_contents('php://input');  
    parse_str($input, $_DELETE);

    $id = $_DELETE['id'];

    $res = $config->deleteStudent($id);

    if ($res) {
        $arr['data'] = "Record deleted Successfully...";
    } else {
        $arr['data'] = "Record deletion failed...";
    }

} else {
    $arr['err'] = "Only DELETE HTTP request method is allowed..";
}

echo json_encode($arr);
?>