<?php

if($argv[count($argv)-1] == 'info'){
    $ret = [
        "version" => "0.1.0",
        "description" => "deocode php serialize data",
    ];
    echo json_encode($ret);
    exit;
}

// default $argv last one is decode
$data = file_get_contents("php://stdin");
$str = base64_decode($data);
$arr = unserialize($str);
$ret = [
    "output" => json_encode($arr),
    "read-only" => false,    
    "format" => "json",
];

echo json_encode($ret);

