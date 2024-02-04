<?php
header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');

include_once('../../config/db.php');
include_once('../../model/question.php');

$db = new db();
$connect = $db->connect();
$question = new Question($connect);
$question->id_cauhoi = isset($_GET['id']) ? $_GET['id'] : die();
$question->show();

$question_item = array(
    'id_question' => $question->id_cauhoi,
    'title' => $question->title,
    'cau a' => $question->caua,
    'cau b' => $question->caub,
    'cau c' => $question->cauc,
    'cau d' => $question->caud,
    'cau dung' => $question->cau_dung
);

print_r(json_encode($question_item, JSON_UNESCAPED_UNICODE));
?>