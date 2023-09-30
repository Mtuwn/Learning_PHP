<?php

class SinhVienController{
    public function index(): void {
        require_once 'model/SinhVien.php';
        $arr = [];
        $arr = (new SinhVien())->all();
        require_once './view/sinh_vien/index.php';
    }

    public function create(): void {
        require_once 'model/Lop.php';
        $arr = (new Lop())->all();
        require_once 'view/sinh_vien/create.php';
    }

    public function store(): void {
        require_once 'model/SinhVien.php';
        (new SinhVien())->create($_POST);
    }

    public function edit(): void {
        $ma = $_GET['ma'];
        require_once 'model/Lop.php';
        $arr = (new Lop())->all();     
        require_once 'model/SinhVien.php';
        $each = (new SinhVien())->find($ma);
        require_once 'view/sinh_vien/edit.php';
    }

    public function update(): void {
        require_once 'model/SinhVien.php';
        (new SinhVien())->edit($_POST);
    }

    public function delete(): void {
        $ma = $_GET['ma'];  
        require_once 'model/SinhVien.php';
        (new SinhVien())->delete($ma);
    }

}