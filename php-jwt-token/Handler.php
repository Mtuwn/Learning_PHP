<?php
include_once './config/Connect.php';
require './vendor/autoload.php';
use \Firebase\JWT\JWT;
use \Firebase\JWT\Key;

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; charset=UTF-8');
header('Access-Control-Allow-Method: Post');
header('Access-Control-Max-Age: 3600');
header('Access-Control-Allow-Headers: Content-type, Authorization,Access-Control-Allow-Headers, X-Requested-With');

$secret_key = "MTYwNDAzMTJi";
$key = new Key($secret_key,"HS256");
$jwt = null;

$databaseService = new databaseMSQL();
$conn = $databaseService->getConnection();

$data = json_decode(file_get_contents("php://input"));

$jwt = $_COOKIE['jwt'];

if($jwt){
    try{
        http_response_code(201);
        $jwt = JWT::decode($jwt, $key);
        echo json_encode(array(
            'message'=> $jwt
        ));
    } catch (Exception $e){
        http_response_code(401);
        echo json_encode(array(
            "message"=> "Access denied",
            "error" => $e->getMessage()
        ));
    }

}

?>