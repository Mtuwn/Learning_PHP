
<?php

$action = '';
if (isset($_GET['action'])) {
    $action = $_GET['action'];
}

switch ($action) {
    case '':
        require_once 'model.php';
        require_once 'view/index.php';
        break;
    case 'create':
        require_once 'view/create.php';
        break;
    case 'store':
        $hoTen = $_POST['ten'];
        require_once 'model.php';
        break;
    case 'edit':
        $ma = $_GET['ma'];
        require_once 'model.php';
        require_once 'view/edit.php';
        break;
    case 'update':
        $ma = $_POST['ma'];
        $hoTen = $_POST['hoTen'];
        require_once 'model.php';
        break;
    case 'delete':
        $ma = $_GET['ma'];
        require_once 'model.php';
        break;
    default:
        echo 'Nhập action linh tinh gì thế';
}
