<?php

namespace assets\src;
use assets\src\jwt\JWT;
use PDO;
use ReflectionMethod;
use ReflectionException;

require_once "constants.php";

class Rest
{
    protected $request;
    protected $serviceName;
    protected $params;
    protected $dbConn;
    protected $userId;

    public function __construct()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST'){
            $this->throwError(
                REQUEST_METHOD_NOT_VALID
                , "Request method is not POST"
            );
        }

        $db = new DB();
        $this->dbConn = $db->connect();

        $handler = fopen('php://input', 'r');
        $this->request = stream_get_contents($handler);
        $this->validateRequest($this->request);

//        if ('generatetoken' != strtolower($this->serviceName))
//        {
//            $this->validateToken();
//        }
    }

    public function validateRequest($request)
    {
        if($_SERVER['CONTENT_TYPE'] !== 'application/json'){
            $this->throwError(
                REQUEST_CONTENTTYPE_NOT_VALID
                , 'Request content-type is not JSON'
            );
        }

        $requestData = json_decode($this->request, true);
        $this->serviceName = $requestData['name'];
        $this->params = $requestData['params'];

        if(!isset($this->serviceName)){
            $this->throwError(
                API_NAME_REQUIRED
                , "API not required"
            );
        }
        if(!is_array($this->params)){
            $this->throwError(
                API_PARAM_REQUIRED
                , 'API PARAM is required'
            );
        }
    }

    protected function errorDatatype($fieldName, $value = "")
    {
        $this->throwError(
            VALIDATE_PARAMETER_DATATYPE
            , "Datatype {$value} is not valid for {$fieldName}"
        );
    }

    public function validateParams($fieldName, $value, $datatype, $required = true)
    {
        if($required && empty($value)) {
            $this->throwError(
                VALIDATE_PARAMETER_REQUIRED
                , "Parameter {$fieldName} is required"
            );
        }
        switch ($datatype){
            case BOOLEAN:
                if(!is_bool($value))
                    $this->errorDatatype(
                        $fieldName
                        , "BOOLEAN"
                    );
                break;
            case STRING:
                if(!is_string($value))
                    $this->errorDatatype(
                        $fieldName
                        , "STRING");
                break;
            case INTEGER:
                if(!is_numeric($value))
                    $this->errorDatatype(
                        $fieldName
                        , "INTEGER"
                    );
                break;
            default:
                $this->errorDatatype($fieldName);
                break;
        }

        return $value;
    }

    public function validateToken()
    {
        try {
            $token = $this->getBearerToken();
            $payLoad = JWT::decode(
                $token
                , SECRETE_KEY
                , ['HS256']
            );

            $stmt = $this->dbConn->prepare("SELECT * FROM users WHERE id = :userId");
            $stmt->bindParam(':userId', $payLoad->userId);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if(!is_array($user)) {
                $this->returnResponse(
                    INVALID_USER_PASS
                    , "This user is not found in our database."
                );
            }

            if( $user['active'] == 0 ) {
                $this->returnResponse(
                    USER_NOT_ACTIVE
                    , "This user may be decactived. Please contact to admin."
                );
            }
            $this->userId = $payLoad->userId;

        }catch (\Exception $e){
            $this->throwError(
                ACCESS_TOKEN_ERRORS
                , $e->getMessage()
            );
        }
    }

    public function processApi()
    {
        $Api = new Api;
        try {
            $rMethod = new ReflectionMethod($Api, $this->serviceName);
            $rMethod->invoke($Api);
        } catch (ReflectionException $e) {
            $this->throwError(
                API_DOST_NOT_EXIST
                , "API DOES not exist"
            );
        }
    }

    public function throwError($code, $msg)
    {
        header('content-type: application/json');

        $errorMsg = json_encode([
            'error' =>
                [
                    'status' => $code
                    , 'message' => $msg
                ]
        ]);
        echo $errorMsg; die();
    }

    public function returnResponse($code, $data)
    {
        header("content-type: application/json");
        $response = json_encode([
            'response' =>
                [
                    'status' => $code
                    , "result" => $data
                ]
        ]);
        echo $response; die();
    }

    public function getAuthHeader()
    {
        $headers = null;
        if (isset($_SERVER['Authorization'])) {
            $headers = trim($_SERVER["Authorization"]);
        }
        else if (isset($_SERVER['HTTP_AUTHORIZATION'])) { //Nginx or fast CGI
            $headers = trim($_SERVER["HTTP_AUTHORIZATION"]);
        } elseif (function_exists('apache_request_headers')) {
            $requestHeaders = apache_request_headers();
            // Server-side fix for bug in old Android versions (a nice side-effect of this fix means we don't care about capitalization for Authorization)
            $requestHeaders = array_combine(array_map(
                'ucwords'
                , array_keys($requestHeaders))
                , array_values($requestHeaders)
            );
            if (isset($requestHeaders['Authorization'])) {
                $headers = trim($requestHeaders['Authorization']);
            }
        }
        return $headers;
    }

    public function getBearerToken()
    {
        $headers = $this->getAuthHeader();
        // HEADER: Get the access token from the header
        if (!empty($headers)) {
            if (preg_match('/Bearer\s(\S+)/', $headers, $matches)) {
                return $matches[1];
            }
        }
        $this->throwError(
            ATHORIZATION_HEADER_NOT_FOUND
            , 'Access Token Not found'
        );
    }
}