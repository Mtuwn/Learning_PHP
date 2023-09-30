<?php
require_once 'controller/Controller.php';
require_once 'controller/LopController.php';
require_once 'controller/SinhVienController.php';

$action = $_GET['action'] ?? 'index';
$controller = $_GET['controller'] ?? 'base';

switch ($controller) {
    case 'base':
        (new Controller())->menu();
        break;
    case 'lop':

        switch ($action) {
            case 'index':
                (new LopController())->index();
                break;
            case 'create':
                (new LopController())->create();
                break;
            case 'store':
                (new LopController())->store();
                header('location: index.php?controller=lop');
                break;
            case 'edit':
                (new LopController())->edit();
                break;
            case 'update':
                (new LopController())->update();
                header('location: index.php?controller=lop');
                break;
            case 'delete':
                (new LopController())->delete();
                header('location: index.php?controller=lop');
                break;
            default:
                echo 'Unknown';
                break;
        }
        break;
    case 'sinh_vien':
        switch ($action) {
            case 'index':
                (new SinhVienController())->index();
                break;
            case 'create':
                (new SinhVienController())->create();
                break;
            case 'store':
                (new SinhVienController())->store();
                header('location: index.php?controller=sinh_vien');
                break;
            case 'edit':
                (new SinhVienController())->edit();
                break;
            case 'update':
                (new SinhVienController())->update();
                header('location: index.php?controller=sinh_vien');
                break;
            case 'delete':
                (new SinhVienController())->delete();
                header('location: index.php?controller=sinh_vien');
                break;
            default:
                echo 'Unknown';
                break;
        }
}
