<?php

namespace App\Model;

use PDO;

final class DatabaseConnect extends PDO
{

    public function __construct(string $host, string $dbname, string $login, string $password, array $options = [])
    {

        parent::__construct('mysql:dbname=' . $dbname . ';host=' . $host . ';', $login, $password, $options);
    }

}