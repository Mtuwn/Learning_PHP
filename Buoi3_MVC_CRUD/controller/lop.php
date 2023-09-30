<?php
switch ($action) {
    case '':
        require_once 'model/lop.php';
        $result = lop_index();
        require_once 'view/lop/index.php';
        break;
    case 'create':
        require_once 'view/lop/create.php';
        break;
    case 'store':
        require_once 'model/lop.php';
        $ten = $_POST['ten_lop'];
        lop_store($ten);
        break;
    case 'edit':
        $ma = $_GET['ma'];
        require_once 'model/lop.php';
        $each = lop_edit($ma);
        require_once 'view/lop/edit.php';
        break;
    case 'update':
        $ten = $_POST['lop'];
        $maLop = $_POST['maLop'];
        require_once 'model/lop.php';
        lop_update($maLop, $ten);
        break;
    case 'delete':
        $ma = $_GET['ma'];
        require_once 'model/lop.php';
        $each = lop_delete($ma);
        break;
    default:
        echo "Unknown";
        break;
}
