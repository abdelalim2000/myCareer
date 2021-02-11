<?php

include_once "Database.php";

class Categories extends Database
{
    private string $name;
    private ?PDO $conn;

    public function create()
    {
        $this->conn = parent::connect();
        $query = "INSERT INTO categories(name) VALUE (:name)";
        $stmt = $this->conn->prepare($query);
        $stmt->execute(['name' => $this->getName()]);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function readAll()
    {
        $this->conn = parent::connect();
        $query = "SELECT * FROM categories ORDER BY created_at DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }

    public function deleteCateg(int $id)
    {
        $this->conn = parent::connect();
        $query = "DELETE FROM categories WHERE id= :id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute(['id' => $id]);
    }

    public function readSingle(int $id)
    {
        $this->conn = parent::connect();
        $query = "SELECT * FROM categories WHERE id= :id";
        $stmt = $this->conn->prepare($query);
        try {
            $stmt->execute(['id' => $id]);
            $data = $stmt->fetch();
            return $data;
        } catch (PDOException $err) {
            if (isset($err)) {
                header("location: categories.php");
            }
        }
    }

    public function updateCateg(int $id)
    {
        $this->conn = parent::connect();
        $query = "UPDATE categories SET name= :name WHERE id= :id";
        $stmt = $this->conn->prepare($query);
        try {
            $stmt->execute(["name" => $this->getName(), 'id' => $id]);
            $data = $stmt->fetch();
            return $data;
        } catch (PDOException $err) {
            if ($err) {
                header("location: categories.php");
            }
        }
    }
}