<?php


namespace assets\src;
use assets\src\DB;

use PDO;

class Puduct
{
    private $id;
    private $name;
    private $imgScr;
    private $price;
    private $category;
    private $gram;
    private $tableName = 'products';
    protected $dbConn;

    function setId($id){ $this->id = $id; return $this; }
    function get() { return $this->id; }
    function setName($name) { $this->name = $name; return $this;}
    function getName() { return $this->name; }
    function setImgSrc($src) { $this->imgScr = $src; return $this;}
    function getImgSrc() { return $this->imgScr; }
    function setPrice($price) { $this->price = $price; return $this;}
    function getPrice() { return $this->price; }
    function setCategory($category) { $this->category = $category; return $this;}
    function getCategory() { return $this->category; }
    function setGram($gram){ $this->gram = $gram; return $this; }
    function getGram(){ return $this->gram; }

    public function __construct()
    {
        $db = new DB();
        $this->dbConn = $db->connect();
    }

    public function getAllProducts()
    {
        $stmt = $this->dbConn->prepare("SELECT * FROM " . $this->tableName);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProductDetailsById() {
        $sql = "SELECT * FROM `products` WHERE `id` = :productId";

        $stmt = $this->dbConn->prepare($sql);
        $stmt->bindParam(':productId', $this->id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function insert()
    {
        try {
            $sql = 'INSERT INTO ' . $this->tableName . '(id, name, imgSrc, price, category, gram) VALUES(null, :name, :imgSrc, :price, :category, :gram)';

            $stmt = $this->dbConn->prepare($sql);
            $stmt->bindParam(':name', $this->name);
            $stmt->bindParam(':imgSrc', $this->imgScr);
            $stmt->bindParam(':price', $this->price);
            $stmt->bindParam(':category', $this->category);
            $stmt->bindParam(':gram', $this->gram);

            if($stmt->execute()) {
                return true;
            } else {
                return false;
            }

        }catch (\Exception $e) {
            Rest::throwError(
                JWT_PROCESSING_ERROR
                , $e->getMessage()
            );
        }
    }

}