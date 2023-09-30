<?php
switch ($action) {
    case '':
        require_once 'model/sinh_vien.php';
        $result = sinh_vien_index();
        require_once 'view/sinh_vien/index.php';
        break;
    case 'create':
        require_once 'model/lop.php';
        $lop = lop_index();
        require_once 'view/sinh_vien/create.php';
        break;
    case 'store':
        require_once 'model/sinh_vien.php';
        $ten = $_POST['ten_sinh_vien'];
        $ma_lop = $_POST['ma_lop'];
        sinh_vien_store($ten,$ma_lop);
        break;
    case 'edit':
        $ma = $_GET['ma'];
        require_once 'model/sinh_vien.php';
        $each = sinh_vien_edit($ma);
        require_once 'model/lop.php';
        $lop = lop_index();
        require_once 'view/sinh_vien/edit.php';
        break;
    case 'update':
        $ten = $_POST['ho_ten'];
        $maLop = $_POST['ma_lop'];
        $ma = $_POST['ma'];
        require_once 'model/sinh_vien.php';
        sinh_vien_update($ten, $ma,$maLop);
        break;
    case 'delete':
        $ma = $_GET['ma'];
        require_once 'model/sinh_vien.php';
        $each = sinh_vien_delete($ma);
        break;
    default:
        echo "Unknown";
        break;
}
