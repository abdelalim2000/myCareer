<?php

include_once "Database.php";

class Articles extends Database
{
    private string $name;
    private string $body;
    private string $author;
    private string $status;
    private int $category;
    private ?PDO $conn;

    public function createArticle()
    {
        $this->conn = parent::connect();
        $sql = "INSERT INTO articles(name,body,author,status,category_id) VALUES (:name,:body,:author,'published',:category)";
        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute(['name' => $this->getName(), 'body' => $this->getBody(), 'author' => $this->getAuthor(), 'category' => $this->getCategory()]);
        } catch (PDOException $err) {
            echo "Error: {$err->getMessage()}";
        }
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

    /**
     * @return string
     */
    public function getBody(): string
    {
        return $this->body;
    }

    /**
     * @param string $body
     */
    public function setBody(string $body): void
    {
        $this->body = $body;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @param string $author
     */
    public function setAuthor(string $author): void
    {
        $this->author = $author;
    }

    /**
     * @return int
     */
    public function getCategory(): int
    {
        return $this->category;
    }

    /**
     * @param int $category
     */
    public function setCategory(int $category): void
    {
        $this->category = $category;
    }

    public function getAllCategories()
    {
        $this->conn = parent::connect();
        $sql = "SELECT * FROM categories";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetch();
        return $data;
    }

    public function getCategArticles(int $id)
    {
        $this->conn = parent::connect();
        $sql = "SELECT * FROM articles WHERE category_id = :id ORDER BY created_at";
        $stmt = $this->conn->prepare($sql);
        try {
            $stmt->execute(['id' => $id]);
            $data = $stmt->fetchAll();
            return $data;
        } catch (PDOException $err) {
            echo "Error: {$err->getMessage()}";
        }
    }

    public function deleteArticle(int $id)
    {
        $this->conn = parent::connect();
        $sql = "DELETE FROM articles WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    public function getSingleArticle(int $id)
    {
        $this->conn = parent::connect();
        $sql = "SELECT * FROM articles WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);
        $data = $stmt->fetch();
        return $data;
    }


}