<?php

use Firebase\JWT\JWT;

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; charset=UTF-8');
header('Access-Control-Allow-Method: Post');
header('Access-Control-Max-Age: 3600');
header('Access-Control-Allow-Headers: Content-type, Access-Control-Allow-Headers, Authorization, X-Requested-With');

include_once './config/Connect.php';
require "./vendor/autoload.php";

$database = new databaseMSQL();
$conn = $database->getConnection();

$uname = "";
$passwd = "";
$data = json_decode(file_get_contents("php://input"));

$uname = $data->uname;
$passwd = $data->passwd;
$table = "users";

$query = "Select uname, passwd, Email from " . $table . " where uname = ? Limit 0,1";

$stmt = $conn->prepare($query);
$stmt->bindParam(1, $uname);
$stmt->execute();
$num = $stmt->rowCount();

if ($num > 0) {
   $row = $stmt->fetch(PDO::FETCH_ASSOC);
   $uname_db = $row['uname'];
   $passwd_db = $row['passwd'];
   $email = $row['Email'];
   if (password_verify($passwd, $passwd_db)) {
      
      $secret_key = "MTYwNDAzMTJi";
      $token = array(
         "uname" => $uname,
         "email" => $email
      );

      http_response_code(200);

      $jwt = JWT::encode($token, $secret_key,'HS256');
      echo json_encode(
         array(
            "message" => "Successful login",
            "jwt" => $jwt
         )
      );
   } else {
      http_response_code(401);
      echo json_encode(array("message" => "Login failed.", "password" => $passwd, "password2" => $passwd_db));
   }
}

$conn->close();