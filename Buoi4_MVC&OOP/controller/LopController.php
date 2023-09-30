<?php

class LopController{
    public function index(): void {
        require_once 'model/Lop.php';
        $arr = [];
        $arr = (new Lop())->all();
        require_once './view/lop/index.php';
    }

    public function create(): void {
        require_once 'view/lop/create.php';
    }

    public function store(): void {
        require_once 'model/lop.php';
        (new Lop())->create($_POST);
    }

    public function edit(): void {
        $ma = $_GET['ma'];     
        require_once 'model/lop.php';
        $each = (new Lop())->find($ma);
        require_once 'view/lop/edit.php';
    }

    public function update(): void {
        require_once 'model/lop.php';
        (new Lop())->edit($_POST);
    }

    public function delete(): void {
        $ma = $_GET['ma'];  
        require_once 'model/lop.php';
        (new Lop())->delete($ma);
    }

}