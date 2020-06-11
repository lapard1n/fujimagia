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

    public function validateToken()
    {
        parent::validateToken();
    }

    public function authUser()
    {
        $email = $this->validateParams('email', $this->getParams('email'), STRING, false);
        $password = $this->validateParams('password', $this->getParams('password'), STRING, false);
        $user = new User();
        $user->setEmail($email)
             ->setPassword($password);

        try {
            $dataFromDB = $user->getUser();
            //Check user exist
            if(!is_array($dataFromDB)){
                $this->returnResponse(
                    INVALID_USER_PASS
                    , ["message" => "Error login data "]
                );
            }
            //Check login data
            if(!password_verify($password, $dataFromDB['password']))
            {
                $this->returnResponse(
                    INVALID_USER_PASS
                    , ["message" => "Incorrect Password"]
                );
            }

            $payLoad = array(
                'iat' => time()
                , 'iss' => 'fuji.local'
                , 'exp' => time() + (60 * 15)
                , 'userId' => $dataFromDB['id']
            );
            $token = JWT::encode($payLoad, SECRETE_KEY);
            $data = [
                'token' => $token
                , 'userID' => $dataFromDB['id']
            ];

            $this->returnResponse(
                SUCCESS_RESPONSE
                , $data
            );
        }catch (\Exception $e) {
            $this->throwError(
                JWT_PROCESSING_ERROR
                , $e->getMessage()
            );
        }

    }

    public function registerUser()
    {
        $name = $this->validateParams('name', $this->getParams('name'), STRING, false);
        $email = $this->validateParams('email', $this->getParams('email'), STRING, false);
        $addr = $this->validateParams('addr', $this->getParams('addr'), STRING, false);
        $mobile = $this->validateParams('mobile', $this->getParams('mobile'), STRING, false);
        $password = $this->validateParams('password', $this->getParams('password'), STRING, false);

        $user = new User();
        $user->setName($name)
            ->setAddress($addr)
            ->setEmail($email)
            ->setMobile($mobile)
            ->setPassword($password);

        if($user->isExistByEmail()) $msg = "User with this mail already exists";
        elseif (!$user->insert()) $msg = "Failed to insert";
        else $msg = "Insert Succesfuly";

        $this->returnResponse(
            SUCCESS_RESPONSE
            , ['message:' => $msg]
        );
    }

    public function getDetailsById()
    {
        $userId = $this->validateParams('id', $this->getParams('id'), INTEGER, false);

        $user = new User();
        $user->setId($userId);

        $data = $user->getUserById();

        if($data) $msg = [
            'name' => $data['name']
            , 'email' => $data['email']
            , 'mobile' => $data['mobile']
            , 'address' => $data['address']
        ];
        else $msg = "user not found";

        $this->returnResponse(
            SUCCESS_RESPONSE
            , $msg
        );
    }

    public function orderIssue()
    {
        $products = $this->validateParams('products', $this->getParams('products'), STRING, false);
        $address = $this->validateParams('address', $this->getParams('address'), STRING, false);
        $mobile = $this->validateParams('mobile', $this->getParams('mobile'), STRING, false);
        $client = $this->validateParams('client', $this->getParams('client'), STRING, false);
        $email = $this->validateParams('email', $this->getParams('email'), STRING, false);
        $cost = $this->validateParams('cost', $this->getParams('cost'), STRING, false);
        $name = $this->validateParams('name', $this->getParams('name'), STRING, false);


        $order = new Order();
        $order->setProducts($products)
              ->setClient($client)
              ->setCost($cost)
              ->setName($name)
              ->setMobile($mobile)
              ->setEmail($email)
              ->setAddress($address);

        if($order->insert()) $msg = "Insert Successfully";
        else $msg = "Failed to insert";

        $this->returnResponse(
            SUCCESS_RESPONSE
            , ['message' => $msg]
        );
    }

    public function ordersHistory()
    {
        $client = $this->validateParams('client', $this->getParams('client'), STRING, false);

        $order = new Order();
        $order->setClient($client);

        if(!empty($client)) $msg = $order->getOrdersByClient();
        else $msg = "Orders not found";

        $this->returnResponse(
            SUCCESS_RESPONSE
            , $msg
        );
    }
}