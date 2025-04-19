<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
echo file_get_contents('https://api.github.com/repos/LandOfMight/Server/contents/Save.txt', 
    false, 
    stream_context_create([
        'http' => [
            'method' => 'GET',
            'header' => "Authorization: Bearer YOUR_TOKEN\r\n" .
                        "User-Agent: UnityPlayer\r\n"
        ]
    ])
);
?>