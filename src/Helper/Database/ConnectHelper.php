<?php

namespace App\Helper\Database;

use JetBrains\PhpStorm\ArrayShape;

class ConnectHelper
{
    #[ArrayShape(['dbname' => "string", 'user' => "string", 'password' => "string", 'host' => "string", 'driver' => "string"])]
    public static function getConnectionParameters(): array
    {
        return [
            'dbname' => 'db-name',
            'user' => 'dbuser',
            'password' => 'password',
            'host' => 'dbdhost',
            'driver' => 'pdo_mysql',
        ];
    }
}