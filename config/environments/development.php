<?php

return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header
        'routerCacheFile' => false,
        // Renderer settings
        'renderer' => [
            'debug' => true,
            'template_path' => $root_dir . '/resources/views/',
            'cache_path' => false,
        ],
        'cache' => [
            'cache_path' => $root_dir . '/storage/cache/',
            'enabled' => false,
        ],
        // Monolog settings
        'logger' => [
            'name' => $_ENV['APP_NAME'] ?: 'Slim 3 App',
            'path' => $root_dir . '/storage/logs/error.log',
            'level' => \Monolog\Logger::DEBUG,
        ],
        'mail' => [
            'host'      => '',  // SMTP Host
            'port'      => '',  // SMTP Port
            'username'  => '',  // SMTP Username
            'password'  => '',  // SMTP Password
            'protocol'  => '',   // SSL or TLS
            'default'   => ['email' => 'no-reply@mail.com', 'from' => 'Webmaster'],
        ],
       'connections' => [
            'mysql' => [
                'driver'    => $_ENV['DB_DRIVER'] ?: 'mysql',
                'host'      => $_ENV['DB_DRIVER'] ?: 'localhost',
                'database'  => $_ENV['DB_NAME'] ?: 'database',
                'username'  => $_ENV['DB_USER'] ?: 'root',
                'password'  => $_ENV['DB_PASS'] ?: 'mysql',
                'charset'   => 'utf8',
                'collation' => 'utf8_unicode_ci',
                'prefix'    => $_ENV['DB_PREFIX'] ?: '',
                'strict'    => false,
            ],
        ],
    ],
];

