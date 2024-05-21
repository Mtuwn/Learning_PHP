<?php
include_once './config/Connect.php';

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; charset=UTF-8');
header('Access-Control-Allow-Method: Post');
header('Access-Control-Max-Age: 3600');
header('Access-Control-Allow-Headers: Content-type, Access-Control-Allow-Headers, Authorization, X-Requested-With');

$uname = '';
$passwd = '';
$email = '';
$conn = null;

$databaseService = new databaseMSQL();
$conn = $databaseService->getConnection();
$data = json_decode(file_get_contents("php://input"));
$uname = $data->uname;
$passwd = $data->passwd;
$email = $data->email;

$table_name = 'users';

$query = "insert into " . $table_name . "
                            SET uname = :uname,
                                passwd = :passwd,
                                Email = :email";

$stmt = $conn->prepare($query);
$stmt->bindParam(':uname', $uname);
$passwd_hash = password_hash($passwd,PASSWORD_BCRYPT);
$stmt->bindParam(':passwd', $passwd_hash);
$stmt->bindParam(':email', $email);
if($stmt->execute()){
    http_response_code(200);
    echo json_encode(array(
        "message" => "Registered Successfull"
    ));
}else{
    http_response_code(401);
    echo json_encode(array(
        "message"=> "Unable to register"
    ));
}
?>