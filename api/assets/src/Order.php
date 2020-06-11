<?php


namespace assets\src;

use PDO;
class Order
{
    private $id;
    private $products;
    private $client;
    private $cost;
    private $name;
    private $mobile;
    private $email;
    private $address;
    protected $tableName = 'orders';

    function setId($id) { $this->id = $id; return $this;}
    function getId() { return $this->id; }

    function setProducts($products) { $this->products = $products; return $this;}
    function getProducts(){ return $this->products;}

    function setClient($client) { $this->client = $client; return $this;}
    function getClient(){ return $this->client;}

    function setCost($cost) { $this->cost = $cost; return $this;}
    function getCost(){ return $this->cost;}

    function setName($name) { $this->name = $name; return $this;}
    function getName() { return $this->name; }

    function setEmail($email) { $this->email = $email; return $this;}
    function getEmail() { return $this->email; }

    function setAddress($address) { $this->address = $address; return $this;}
    function getAddress() { return $this->address; }

    function setMobile($mobile) { $this->mobile = $mobile; return $this;}
    function getMobile() { return $this->mobile; }

    public function __construct()
    {
        $db = new DB();
        $this->dbConn = $db->connect();
    }

    function getAllOrders()
    {
        $stmt = $this->dbConn->prepare("SELECT * FROM " . $this->tableName);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function getOrdersByClient()
    {
        $sql = "SELECT * FROM {$this->tableName} WHERE `client` = :client";

        $stmt = $this->dbConn->prepare($sql);
        $stmt->bindParam(':client', $this->client);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function insert()
    {
        try {
            $sql = "INSERT INTO {$this->tableName} (`id`, `products`, `client`, `cost`, `name`, `mobile`, `email`, `address`) VALUES (NULL, :products, :client, :cost, :name, :mobile, :email, :address); ";

            $stmt = $this->dbConn->prepare($sql);
            $stmt->bindParam(':products', $this->products);
            $stmt->bindParam(':client', $this->client);
            $stmt->bindParam(':cost', $this->cost);
            $stmt->bindParam(':name', $this->name);
            $stmt->bindParam(':mobile', $this->mobile);
            $stmt->bindParam(':email', $this->email);
            $stmt->bindParam(':address', $this->address);

            if($stmt->execute())  return true;

        }catch (\Exception $e){
            Rest::throwError(
                JWT_PROCESSING_ERROR
                , $e->getMessage()
            );
        }

        return false;
    }
}