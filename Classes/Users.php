<?php

use Cassandra\Date;

include_once "Database.php";

class Users extends Database
{
    private string $firstName;
    private string $lastName;
    private string $birthdate;
    private string $gender;
    private string $phone;
    private string $address;
    private string $city;
    private string $userName;
    private string $email;
    private string $password;
    private string $type;
    private ?PDO $conn;

    public function createUser()
    {
        $this->conn = parent::connect();
        $query = "INSERT INTO users (first_name, last_name,birthdate,gender,phone,address,city,username, email, password, type) VALUES (:firstName,:lastName,:birthdate,:gender,:phone,:address,:city,:username,:email,:password,:type)";
        $stmt = $this->conn->prepare($query);
        $stmt->execute(["firstName" => $this->getFirstName(), "lastName" => $this->getLastName(), "birthdate" => $this->getBirthdate(), "gender" => $this->getGender(), "phone" => $this->getPhone(), "address" => $this->getAddress(), "city" => $this->getCity(), "username" => $this->getUserName(), "email" => $this->getEmail(), "password" => $this->getPassword(), "type" => $this->getType()]);
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return Date
     */
    public function getBirthdate(): string
    {
        return $this->birthdate;
    }

    /**
     * @param string $birthdate
     */
    public function setBirthdate(string $birthdate): void
    {
        $this->birthdate = $birthdate;
    }

    /**
     * @return string
     */
    public function getGender(): string
    {
        return $this->gender;
    }

    /**
     * @param string $gender
     */
    public function setGender(string $gender): void
    {
        $this->gender = $gender;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getUserName(): string
    {
        return $this->userName;
    }

    /**
     * @param string $userName
     */
    public function setUserName(string $userName): void
    {
        $this->userName = $userName;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function readAllUsers()
    {
        $this->conn = parent::connect();
        $query = "SELECT * FROM users";
        $stmt = $this->conn->prepare($query);
        try {
            $stmt->execute();
            $data = $stmt->fetchAll();
            return $data;
        } catch (PDOException $err) {
            if (isset($err)) {
                header("location: dashboard.php");
            }
        }
    }

    public function updateUser(int $id)
    {
        $this->conn = parent::connect();
        $query = "UPDATE users SET first_name= :firstName, last_name=:lastName,birthdate= :birthdate,gender= :gender,phone= :phone,address= :address,city= :city,password= :password WHERE id= :id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute(["firstName" => $this->getFirstName(), "lastName" => $this->getLastName(), "birthdate" => $this->getBirthdate(), "gender" => $this->getGender(), "phone" => $this->getPhone(), "address" => $this->getAddress(), "city" => $this->getCity(), "password" => $this->getPassword(), "id" => $id]);
    }

    public function readSingleUser(int $id)
    {
        $this->conn = parent::connect();
        $query = "SELECT * FROM users WHERE id= :id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute(['id' => $id]);
        try {
            $data = $stmt->fetch();
            return $data;
        } catch (PDOException $err) {
            if (isset($err)) {
                header("location: dashboard.php");
            }
        }
    }

    public function logIn(string $username, string $password): mixed
    {
        $this->conn = parent::connect();
        $query = "SELECT * FROM users WHERE username= :username";
        $stmt = $this->conn->prepare($query);
        try {
            $stmt->execute(['username' => $username]);
            $data = $stmt->fetch();
            if (password_verify($password, $data['password'])) {
                return $data;
            } else {
                header("location: login.php");
            }
        } catch (PDOException $err) {
            if (isset($err)) {
                header("location: login.php");
            }
        }
    }

    public function editUser(int $id)
    {
        $this->conn = parent::connect();
        $query = "UPDATE users SET first_name= :firstName, last_name=:lastName,birthdate= :birthdate,gender= :gender,phone= :phone,address= :address,city= :city,username= :username,password= :password,type= :type WHERE id= :id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute(["firstName" => $this->getFirstName(), "lastName" => $this->getLastName(), "birthdate" => $this->getBirthdate(), "gender" => $this->getGender(), "phone" => $this->getPhone(), "address" => $this->getAddress(), "city" => $this->getCity(), "username" => $this->getUserName(), "password" => $this->getPassword(), "type" => $this->getType(), "id" => $id]);

    }

    public function deleteUser(int $id)
    {
        $this->conn = parent::connect();
        $query = "DELETE FROM users WHERE id= :id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute(['id' => $id]);
    }
}