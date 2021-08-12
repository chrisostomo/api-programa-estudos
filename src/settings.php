<?php
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../templates/',
        ],

        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => isset($_ENV['docker']) ? 'php://stdout' : __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],

        'db' => [
            'driver' => 'mysql',
            'host' => '189.126.106.137',
            'database' => 'plano_de_estudos',
            'username' => 'grancurso',
            'password' => '123456',
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => ''
        ],
    ],
];
