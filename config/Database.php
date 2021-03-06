<?php

class Database extends mysqli
{
    const CONNECTION = 'local'; //

    function __construct($dbname = '', $port = '', $socket = '')
    {
        $username = 'root';
        if (self::CONNECTION === 'local') {
            $host = 'localhost';
            $passwd = 'root';
        } else {
            $host = '192.168.1.333334';
            $passwd = '';
        }
        if ($dbname === '') {
            $dbname = 'custom_db';
        }
        if ($port === '') {
            $port = ini_get("mysqli.default_port");
        }
        if ($socket === '') {
            $socket = ini_get("mysqli.default_socket");
        }
        parent::__construct($host, $username, $passwd, $dbname, $port, $socket);
    }
}
