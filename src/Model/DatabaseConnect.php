<?php

namespace App\Model;

use PDO;

final class DatabaseConnect
{
    private string $dbname;
    private string $host;
    private string $login;
    private string $password;
    private array $options;

    public function __construct(string $host, string $dbname, string $login, string $password, array $options = [])
    {
        $this->dbname = $dbname;
        $this->host = $host;
        $this->login = $login;
        $this->password = $password;
        $this->options = $options;
    }

    public function getPDO(): ?PDO
    {
          return new PDO('mysql:dbname=' . $this->dbname . ';host=' . $this->host . ';', $this->login, $this->password, $this->options);
    }

}