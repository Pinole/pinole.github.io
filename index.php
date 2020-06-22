<?php

$data = [    'qksc' => 'http://baidu.com',
'tdyx' => 'http://baidu.com',
'sai' => 'http://baidu.com',
'qxj' => 'http://baidu.com',
'qf' => 'http://baidu.com',
'zhqx' => 'http://baidu.com',
'wnbj' => 'http://baidu.com',
'wdrj' => 'http://baidu.com',
    'rsjdt' => 'http://baidu.com',
    'jsj' => 'http://baidu.com',
    'sl' => 'http://baidu.com',
    'app-id' => 'http://baidu.com',
    'app-id-2' => 'http://atd3.cn',
    'baidu_ygj' => 'http://m.680884.com',
    'xiaomi_rjha' => 'http://m.680884.com',
    'xiaomi_hj' => 'http://m.680884.com',
    'wjkh' => 'http://m.680884.com',
    'zqf' => 'https://www.yb413.app/?i_code=8071399&',
    'test' => 'https://yhnewa.com/',
    'slm' => 'https://yhnewa.com/',
    'testing' => 'https://yhnewa.com/',
    'wyr' => 'https://yhnewa.com/',
    'hxwy' => 'https://yhnewa.com/',
    'zc' => 'https://yhnewa.com/',
    'yj' => 'https://yhnewa.com/',
    'yyzx' => 'https://yhnewa.com/',
    'hxb' => 'https://yhnewa.com/'





];

header('Content-Type: application/json');


if (array_key_exists('appId', $_GET)) {
    $appId = $_GET['appId'];
    if (array_key_exists($appId, $data)) {
        echo json_encode([
            'status' => 1,
            'appId' => $appId,
            'url' => $data[$appId]
        ]);
    } else {
        echo json_encode([
            'status' => 0,
            'message' => 'missing data',
            'code' => 2
        ]);
    }
} else {
    echo json_encode([
        'status' => -1,
        'message' => 'missing appId',
        'code' => 1
    ]);
}
