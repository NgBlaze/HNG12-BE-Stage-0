<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$response = array(
    "email" => "okolaaprecious@gmail.com",
    "current_datetime" => gmdate("Y-m-d\TH:i:s\Z"),
    "github_url" => "https://github.com/"
);


echo json_encode($response);
