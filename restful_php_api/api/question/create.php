<?php
header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Request-With');

include_once('../../config/db.php');
include_once('../../model/question.php');

$db = new db();
$conn = $db->connect();

$question = new Question($conn);

$data = json_decode(file_get_contents("php://input"));

$question->id_cauhoi = $data->id;
$question->title = $data->title;
$question->caua = $data->cau_a;
$question->caub = $data->cau_b;
$question->cauc = $data->cau_c;
$question->caud = $data->cau_d;
$question->cau_dung = $data->cau_dung;

if($question->create()){
    echo json_encode(array('message','question created'));

} else     echo json_encode(array('message','question  not created'));



?>