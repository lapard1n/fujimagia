<?php


namespace assets\src;
use PDO;

class User
{
    private $id;
    private $name;
    private $email;
    private $address;
    private $mobile;
    private $password;
    protected $tableName = 'users';

    function setId($id) { $this->id = $id; return $this;}
    function getId() { return $this->id; }

    function setName($name) { $this->name = $name; return $this;}
    function getName() { return $this->name; }

    function setEmail($email) { $this->email = $email; return $this;}
    function getEmail() { return $this->email; }

    function setAddress($address) { $this->address = $address; return $this;}
    function getAddress() { return $this->address; }

    function setMobile($mobile) { $this->mobile = $mobile; return $this;}
    function getMobile() { return $this->mobile; }

    function setPassword($password) { $this->password = $password; return $this; }
    function getPassword() { return $this->password; }

    public function __construct()
    {
        $db = new DB();
        $this->dbConn = $db->connect();
    }

    public function getAllUsers() {
        $stmt = $this->dbConn->prepare("SELECT * FROM " . $this->tableName);
        $stmt->execute();
        $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $user;
    }

    public function getUser()
    {
        $sql = "SELECT * FROM {$this->tableName} WHERE email = :email";
        $stmt = $this->dbConn->prepare($sql);
        $stmt->bindParam(':email', $this->email);

        if($stmt->execute()) return $stmt->fetch(PDO::FETCH_ASSOC);

        return false;
    }

    public function insert()
    {
        $sql = "INSERT INTO {$this->tableName} (id, name, email, mobile, address, password) VALUES(null, :name, :email, :mobile, :address, :password)";
//        $sql = "INSERT INTO {$this->tableName} (`id`, `name`, `email`, `mobile`, `address`, `password`) VALUES (NULL, :name, :email, :mobile, :address, :password";
        $passwordHash = password_hash(
            $this->password
            , PASSWORD_BCRYPT
        );

        $stmt = $this->dbConn->prepare($sql);
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':mobile', $this->mobile);
        $stmt->bindParam(':address', $this->address);
        $stmt->bindParam(':password', $passwordHash);

        if($stmt->execute()) return true;

        return false;
    }

    public function isExistByEmail()
    {
        $sql = "SELECT * FROM {$this->tableName} WHERE `email` LIKE :email";

        $stmt = $this->dbConn->prepare($sql);
        $stmt->bindParam(':email', $this->email);

        if($stmt->execute()){
            return (bool)$stmt->fetch(PDO::FETCH_ASSOC);
        }

        return false;
    }
}