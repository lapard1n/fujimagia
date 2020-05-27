<?php

namespace assets\src;

use assets\src\jwt\JWT;
use assets\src\Rest;
use assets\src\DB;

class Api extends Rest
{
    public $dbConnectionHandler;
    public $db;

    public function __construct()
    {
        parent::__construct();

        $this->db = new DB();
        $this->dbConnectionHandler = $this->db->connect();
    }

    public function generateToken()
    {
        $email = $this->validateParams(
            'email'
            , $this->params['email']
            , STRING
        );
        $password = $this->validateParams(
            'password'
            , $this->params['password']
            , STRING
        );
        try {

            $stmt = $this->dbConnectionHandler->prepare("SELECT * FROM users WHERE email = :email AND password = :password");
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
            $stmt->execute();
            $user = $stmt->fetch(\PDO::FETCH_ASSOC);

            if (!is_array($user)) {
                $this->returnResponse(
                    INVALID_USER_PASS
                    , ["message" => "Error login data"]
                );
            }

            if (!$user['active']) {
                $this->returnResponse(
                    USER_NOT_ACTIVE
                    , ["message" => "User is not activated. Please contact to admin"]
                );
            }
            $payLoad = array(
                'iat' => time()
                , 'iss' => 'localhost:3000'
                , 'exp' => time() + (60 * 15)
                , 'userId' => $user['id']
            );
            $token = JWT::encode($payLoad, SECRETE_KEY);
            $data = ['token' => $token];

            $this->returnResponse(
                SUCCESS_RESPONSE
                , $data
            );
        } catch (\Exception $e) {
            $this->throwError(
                JWT_PROCESSING_ERROR
                , $e->getMessage()
            );
        }
    }

    public function getProducts()
    {
        $product = new Puduct();
        $allProducts = $product->getAllProducts();

        if(!is_array($allProducts))
        {
            $this->returnResponse(
                SUCCESS_RESPONSE
                , ['message' => 'Products not Found']
            );
        }

        $this->returnResponse(
            SUCCESS_RESPONSE
            , [ $allProducts ]
        );
    }

    public function addProduct()
    {
        $name = $this->validateParams('name', $this->params['name'], STRING, false);
        $imgSrc = $this->validateParams('imgSrc', $this->params['imgSrc'], STRING, false);
        $price = $this->validateParams('price', $this->params['price'], INTEGER, false);
        $category = $this->validateParams('category', $this->params['category'], STRING, false);
        $gram = $this->validateParams('gram', $this->params['gram'], INTEGER, false);

        $product = new Puduct();
        $product->setName($name)
                ->setImgSrc($imgSrc)
                ->setPrice($price)
                ->setCategory($category)
                ->setGram($gram);

        if(!$product->insert()) $msg = "Failed to insert";
        else $msg = "Insert Successful!";

        $this->returnResponse(
            SUCCESS_RESPONSE
            , ['message' => $msg]
        );
    }

    /* Customers Methods */
    public function addCustomer()
    {

        $name = $this->validateParams('name', $this->params['name'], STRING, false);
        $email = $this->validateParams('email', $this->params['email'], STRING, false);
        $addr = $this->validateParams('addr', $this->params['addr'], STRING, false);
        $mobile = $this->validateParams('mobile', $this->params['mobile'], INTEGER, false);

        $customer = new Customer;
        $customer->setName($name)
            ->setAddress($addr)
            ->setEmail($email)
            ->setMobile($mobile)
            ->setCreatedBy($this->userId)
            ->setCreatedOn(date('Y-m-d'));

        if (!$customer->insert()) $msg = "Failed to insert";
        else $msg = "Insert Succesfuly";

        $this->returnResponse(
            SUCCESS_RESPONSE
            , ['message:' => $msg]
        );
    }

    public function updateCustomer()
    {
        $customerId = $this->validateParams('customerId', $this->params['customerId'], INTEGER, false);
        $name = $this->validateParams('name', $this->params['name'], STRING, false);
        $email = $this->validateParams('email', $this->params['email'], STRING, false);
        $addr = $this->validateParams('addr', $this->params['addr'], STRING, false);
        $mobile = $this->validateParams('mobile', $this->params['mobile'], INTEGER, false);

        $customer = new Customer;
        $customer->setName($name)
            ->setId($customerId)
            ->setAddress($addr)
            ->setEmail($email)
            ->setMobile($mobile)
            ->setUpdatedBy($this->userId)
            ->setUpdatedOn(date('Y-m-d'));

        if (!$customer->update()) $msg = "Failed to update customer";
        else $msg = "Customer was updated Succesfuly";

        $this->returnResponse(
            SUCCESS_RESPONSE
            , ['message:' => $msg]
        );
    }

    public function getCustomerDetails()
    {
        $customerId = $this->validateParams(
            'customerId'
            , $this->params['customerId']
            , INTEGER
        );

        $customerObj = new Customer;
        $customerObj->setId($customerId);
        $customer = $customerObj->getCustomerDetailsById();

        if (!is_array($customer))
        {
            $this->returnResponse(
                SUCCESS_RESPONSE
                , ['message' => 'Customer details not found']
            );
        }

        $this->returnResponse(
            SUCCESS_RESPONSE
            , [
                'customerId' => $customer['id'],
                'customerName' => $customer['name'],
                'email' => $customer['email'],
                'mobile' => $customer['mobile'],
                'address' => $customer['address'],
                'createdBy' => $customer['created_user'],
                'lastUpdatedBy' => $customer['updated_user'],
            ]
        );
    }

    public function deleteCustomer()
    {
        $customerId = $this->validateParams('customerId', $this->params['customerId'], INTEGER);

        $cusotmerObj = new Customer();
        $cusotmerObj->setId($customerId);

        if(!$cusotmerObj->delete()) $message = "Failed to delete.";
        else $message = "Delete customer successfully";

        $this->returnResponse(
            SUCCESS_RESPONSE
            , ['message' => $message]
        );
    }
    /* Customers Methods */
}