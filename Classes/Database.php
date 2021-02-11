<?php


class Database
{
    private string $host = "mysql5040.site4now.net";
    private string $DBType = "mysql";
    private string $DBName = "db_a6bc09_moyaser";
    private string $DBUsername = "a6bc09_moyaser";
    private string $DBPass = "Ahmed1997500";
    private ?PDO $conn;

    protected function connect(): ?PDO
    {
        try {
            $this->conn = new PDO("{$this->DBType}:host={$this->host};dbname={$this->DBName}", $this->DBUsername,
                $this->DBPass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $err) {
            echo "Connection Failed : {$err->getMessage()}";
        }

        return $this->conn;
    }
}