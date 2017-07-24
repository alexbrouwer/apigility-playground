<?php
return [
    'Status\\V1\\Rpc\\Ping\\Controller' => [
        'GET' => [
            'response' => '{
   "ack": "Timestamp from server"
}',
            'description' => 'Get a ping from the system',
        ],
        'description' => 'Ping the system',
    ],
];
